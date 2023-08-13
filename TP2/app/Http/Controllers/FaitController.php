<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FaitController extends Controller
{
    /**
     * Affiche la page d'accueil avec un fait aléatoire
     *
     * @return View
     */
    public function index(){
        return view('faits.index',[

        ]);
    }

    /**
     * Affiche la liste des faits
     *
     * @return View
     */
    public function show(){
        return view('faits.show',[
            'faits' => Fait::all()
        ]);
    }

    /**
     * Affiche le formulaire d'ajout
     *
     * @return View
     */
    public function create(){
        return view('faits.create', [

        ]);
    }

    /**
     * Traite l'ajout
     *
     * @param Request $request
     * @return RedirectResponse
    */
    public function store(Request $request) {
        // Valider
        $valides = $request->validate([
            "texte" => "required",
        ], [
            "texte.required" => "Le texte est obligatoire",
        ]);

        // Ajouter à la BDD
        $fait = new Fait; // $note contient un objet "vide" du modèle (équivalent à une nouvelle entrée dans la table)
        $fait->titre = $valides["texte"];
        $fait->save();

        // Rediriger
        return redirect()
                ->route('faits.show')
                ->with('succes', "Le fait a été ajouté avec succès!");
    }



    /**
     * Affiche le formulaire de modification
     *
     * @param int $id Id du fait à modifier
     * @return View
     */
    public function edit($id){
        return view('faits.edit', [
            "fait" => Fait::findOrFail($id),
        ]);
    }

    /**
     * Traite la modification
     *
     * @param Request $request Objet qui contient tous les champs reçus dans la requête
     * @return RedirectResponse
     */
    public function update(Request $request) {
        // Valider
        $valides = $request->validate([
            "id" => "required",
            "texte" => "required"
        ], [
            "id.required" => "L'id de la note est obligatoire",
            "texte.required" => "Le texte du fait est obligatoire"
        ]);

        // Récupération de la note à modifier, suivi de la modification et sauvegarde
        $fait = Fait::findOrFail($valides["id"]);
        $fait->texte = $valides["texte"];
        $fait->save();

        // Rediriger
        return redirect()
                ->route('faits.show')
                ->with('succes', "Le fait a été modifié avec succès!");
    }

    /**
     * Traite la suppression
     *
     * @param int $id Id du fait à supprimer
     * @return RedirectResponse
     */
    public function destroy($id) {
        Fait::destroy($id);

        return redirect()->route('faits.show')
                ->with('succes', "Le fait a été supprimé!");
    }
}
