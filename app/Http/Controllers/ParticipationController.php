<?php

namespace App\Http\Controllers;

use App\Models\Participation;
use Illuminate\Http\Request;

class ParticipationController extends Controller
{
    /**
     * Store a new participation.
     *
     * @param  Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // Validation des données reçues du formulaire
        $request->validate([
            'soiree_id' => 'required|exists:soirees,id',
        ]);

        // Création d'une nouvelle participation
        Participation::create([
            'user_id' => auth()->id(),
            'soiree_id' => $request->input('soiree_id'),
        ]);

        return redirect()->back()->with('success', 'Merci pour votre participation !');
    }

    /**
     * Remove the specified participation.
     *
     * @param  Participation  $participation
     * @return \Illuminate\Http\Response
     */
    public function destroy(Participation $participation)
    {
        // Vérification si l'utilisateur connecté est l'auteur de la participation
        if ($participation->user_id !== auth()->id()) {
            return redirect()->back()->with('error', 'Vous n\'êtes pas autorisé à supprimer cette participation.');
        }

        // Suppression de la participation
        $participation->delete();

        return redirect()->back()->with('success', 'Vous ne participez plus à la soirée !');
    }
}
