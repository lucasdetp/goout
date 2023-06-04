<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Soiree;
use App\Models\Theme;
use App\Models\Participation;

class SoireeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $soirees = Soiree::orderBy('date', 'asc')->get();
        $themes = Theme::all();

                return view('soirees.index',compact('soirees', 'themes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // Code pour afficher le formulaire de création de la soirée
        $themes = Theme::all();
    return view('soirees.createSoiree', compact('themes'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'titre' => 'required|string',
            'ville' => 'required|string',
            'date' => 'required|date',
            'participant' => 'required|integer',
            'description' => 'required|string',
            'theme_id' => 'required|exists:themes,id'
        ]);
    
        $user = auth()->user();
    
        $soiree = new Soiree();
        $soiree->user_id = $user->id;
        $soiree->titre = $request->input('titre');
        $soiree->ville = $request->input('ville');
        $soiree->date = $request->input('date');
        $soiree->participant = $request->input('participant');
        $soiree->description = $request->input('description');
        $soiree->theme_id = $request->input('theme_id');
        $soiree->save();
    
        return redirect()->route('userDashboard')->with('success', 'Soirée créée avec succès.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Soiree  $soiree
     * @return \Illuminate\Http\Response
     */
    public function show($id)
{
    $soiree = Soiree::findOrFail($id);
    $isParticipating = $soiree->participations()->where('user_id', auth()->id())->exists();
    $participation = null;

    if ($isParticipating) {
        $participation = $soiree->participations()->where('user_id', auth()->id())->first();
    }

    return view('soirees.show', compact('soiree', 'isParticipating', 'participation'));
}

    

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Soiree  $soiree
     * @return \Illuminate\Http\Response
     */
    public function destroy(Soiree $soiree)
    {
        $soiree->delete();

        return redirect()->route('soirees.index')->with('success', 'Soirée supprimée avec succès.');
    }

    public function displayFiveSoirees()
{
    $soirees = Soiree::orderBy('date')->take(5)->get();
    $themes = Theme::all();
    return view('userDashboard', compact('soirees', 'themes'));
}

public function search(Request $request)
{
    $query = Soiree::query();

    if ($request->filled('ville')) {
        $query->where('ville', 'like', '%' . $request->input('ville') . '%');
    }

    if ($request->filled('participant')) {
        $participantValue = $request->input('participant');
        if ($participantValue == 1) {
            $query->whereBetween('participant', [1, 5]);
        } elseif ($participantValue == 2) {
            $query->whereBetween('participant', [6, 10]);
        }
        elseif ($participantValue == 3) {
            $query->whereBetween('participant', [10, 1000000]);
            
        }
        else{
            $query->where('participant', $participantValue);
        }
    }

    if ($request->filled('theme_id')) {
        $themeName = $request->input('theme_id');
        $query->join('themes', 'soirees.theme_id', '=', 'themes.id')
            ->where('themes.id', $themeName);
    }

    $soirees = $query->get();
    $themes = Theme::all();

    return view('soirees.index', compact('soirees', 'themes'));
}

public function userSoirees()
{
    $user = auth()->user();
    $soireesCrees = Soiree::where('user_id', $user->id)->get();
    $soireesParticipees = Participation::where('user_id', $user->id)->get();

    return view('soirees.userSoirees', compact('soireesCrees', 'soireesParticipees'));
}



}
