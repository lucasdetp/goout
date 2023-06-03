<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
use Illuminate\View\View;
use Intervention\Image\Facades\Image;

class RegisteredUserController extends Controller
{
    /**
     * Display the registration view.
     */
    public function create(): View
    {
        return view('auth.register');
    }

    /**
     * Handle an incoming registration request.
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:'.User::class],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
            'profile_photo' => ['image', 'mimes:jpeg,png,jpg,gif', 'max:2048'], 
        ]);

        $profilePhotoPath = null;

        if ($request->hasFile('profile_photo') && $request->file('profile_photo')->isValid()) {
            $image = Image::make($request->file('profile_photo'));

            $image->fit(300, 300);

            $fileName = uniqid('profile_', true) . '.' . $request->file('profile_photo')->getClientOriginalExtension();

            $image->save(public_path('profile-photos/' . $fileName));

            $profilePhotoPath = 'profile-photos/' . $fileName;
        }
        else {
            // Utilisation de la photo par défaut
            $defaultPhotoPath = 'profile-photos/base.jpg'; // Remplacez par le chemin de votre photo par défaut
            $profilePhotoPath = $defaultPhotoPath;
        
        }

        $user = User::create([
            'premuim' => false,
            'name' => $request->name,
            'lastname' => $request->lastname,
            'birthday' => $request->birthday,
            'phone' => $request->phone,
            'cpostal' => $request->cpostal,
            'ville' => $request->ville,
            'adresse' => $request->adresse,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'role' => 'user',
            'profile_photo_path' => $profilePhotoPath, 
        ]);

        event(new Registered($user));

        Auth::login($user);

        return redirect(RouteServiceProvider::HOME);
    }
}