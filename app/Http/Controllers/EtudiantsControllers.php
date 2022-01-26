<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Models\Etudiant;
use App\Http\Requests\etudiantRequest;

class EtudiantsControllers extends Controller
{
    function  __construct() {
        $this->middleware('auth');
    }    
//la liste des etudiants    
    function listeetudiants() {
        $etud = Etudiant::latest()->paginate(4);

        return view('etudiants.listeetudiants', array('etudiants' => $etud));
    }

    function afficheretudiant() {
        return view('etudiants.afficheretudiant');
    }
    function ajouteretudiant(etudiantRequest $request) {
        $request->hasFile('image') ;
        $data = $request->input('image');
        $photoName = $request->file('image')->getClientOriginalName();
        $destination = base_path() . '/public/uploads';
        $request->file('image')->move($destination, $photoName);
        $input = $request->all();
        $input['image'] = $photoName;
        Etudiant::create($input);
        session()->flash('success', "l'etudiant est bien enregistré"); 
        return redirect('etudiants/liste');
    }

    function editeretudiant($id) {
        $etudiant = Etudiant::find($id);
        return view('etudiants.editeretudiant', compact('etudiant', 'id'));
    }

    function modifieretudiant($id, etudiantRequest $request) {
        
        $etudiant = Etudiant::find($id);
        $etudiant ->update($request->all());
        return redirect()->route('etudiants.listeetudiants')
                        ->with('message', 'Etudiant bien modifé.');
    }

    function supprimeretudiant($id) {
        Etudiant::find($id)->delete();
        return redirect()->route('etudiants.listeetudiants')
                        ->with('message', 'Etudiant bien supprimer');
    }
}