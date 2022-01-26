<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
//importer le model produits
use App\Models\Produit;
use Auth;

class ProduitsController extends Controller
{
    //aficher la liste des produits
    public function index() {
        $produits = Produit::latest()->paginate(3);
        return view('produits.index',array('produits' => $produits));
    }
    
    //cette fonction retourne le détails du produit dont id passé en paramètre
    public function show($id) {
      //find($id) executer le requete (select * from produits where id=$id)
      $produit = Produit::find($id);     
      //retourne le vue produits et envoie un tableau d'objet
      return view('produits.show', array('produit' => $produit));  
    }

    public function destroy($id) {
        Produit::find($id)->delete();
        return redirect() -> route('produits.index')
                          ->with('message','produit est supprimé');
    }

    public function create() {
      if(Auth::user()) {
        return view('produits.create');
      }
      else
      {
        return redirect('/login');
      }
    }

    public function store(Request $request) {

        $request->validate([  
          'libelle'=>'required|min:5',
          'prix'=>'required',
          'qtStock'=>'required',
          'image'=>'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]
        ,
        [
          'libelle.required' => 'ce champs est obligatoires',
          'libelle.min' => 'minimum 5 character',
          'prix.required' => 'ce champs est obligatoires',
          'qtStock.required' => 'ce champs est obligatoires',
          'image.required' => 'ce champs est obligatoires',
          'image.image' => 'Doit etre image',
          'image.mimes' => 'seulement jpeg,png,jpg,gif,svg',
          'image.max' => 'taille max 2mo',

        ]);
      if($request->hasFile('image') ) 
      {
        $data = $request->input('image');
        $photoName = $request->file('image')->getClientOriginalName();
        $destination = base_path() . '/public/uploads';
        $request->file('image')->move($destination, $photoName);
        $input = $request->all();
        $input['image'] = $photoName;
        Produit::create($input);
        return redirect()->route('produits.create')
                        ->with('message', 'produit bien ajouté.');
         /*vérification
         $extention = $file->getClientOriginalExtension();
         $size = $file->getSize();*/
      }
      else
      {
        return redirect()->route('produits.create')
                      ->with('message', 'erreur photo est obligatoire.');
      }
    }

    public function edit($id) {
      $produit = Produit::find($id);
      return view('produits.edit',compact('produit','id'));
    }

    public function update($id, Request $request) {
      $request->validate([  
        'libelle'=>'required|min:5',
        'marque'=>'required',
        'prix'=>'required',
        'qtStock'=>'required',
      ]
      ,
      [
        'libelle.required' => 'ce champs est obligatoires',
        'marque.required' => 'ce champs est obligatoires',
        'libelle.min' => 'minimum 5 character',
        'prix.required' => 'ce champs est obligatoires',
        'qtStock.required' => 'ce champs est obligatoires',
      ]);
      $produit = Produit::find($id);
      $produit->update($request->all());
      return redirect()->route('produits.index')
                      ->with('message','Produit est modifié');
    }
    
}

