<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
//importer le model Client
use App\Models\Client;

class clientsController extends Controller
{

    public function create() {
      return view('clients.create');
    }

    public function store(Request $request) {
      $request->validate([
        'nom' => 'required',
        'prenom' => 'required',
        'tel' => 'required',
        ]);
      Client::create($request->all());
      return redirect()->route('clients.create')
                    ->with('message', 'le client bien ajouter.');
    }

    public function index() {
      $clients = Client::latest()->paginate(3);
      return view('clients.index', array('clients' => $clients));
    }

    public function show($id) {
      //find($id) executer le requete (select * from clients where id=$id)
      $client = Client::find($id);     
      //retourne le vue client et envoie un tableau d'objet
      return view('clients.show', array('client' => $client));  
    }

    public function destroy($id) {
      Client::find($id)->delete();
      return redirect()->route('clients.index')
                      ->with('message', 'le client est bien supprimer.');
    }

    public function edit($id) {
      $client = Client::find($id);
      return view('clients.edit', compact('client','id'));
    }

    public function update($id, Request $request) {
      $client = Client::find($id);
      $client->update($request->all());
      return redirect()->route('clients.index')
                      ->with('message','le client est bien modifié.');
    }
}
