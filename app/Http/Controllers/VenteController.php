<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
//importer le model vente
use App\Models\Vente;
use App\Models\client;
use App\Models\produit;
use DB;
use PDF;

class VenteController extends Controller
{
    function vendre() {
        $clients = client::latest()->paginate(100);
        $produits = produit::latest()->paginate(100);
        return view("ventes.formVendre", ['clients'=> $clients, 'produits'=> $produits]);   
    }

    public function validerVente(Request $request) {
        $request->validate([
            'idcli' => 'required',
            'idpro' => 'required',
            'qtevente' => 'required',
            'datevente' => 'required',
            'prixvente' => 'required',
        ]);
        vente::create($request->all());

        return redirect()->route('ventes.formVendre')
                        ->with('message', 'vente bien ajouter');
    }

    function listevente() {
        $listeventes = DB::table('ventes')
        ->join('produits', 'ventes.idpro', '=', 'produits.id')
        ->join('clients', 'ventes.idcli', '=', 'clients.id')
        ->select('ventes.*', 'produits.*', 'clients.*')
        ->get();
        return view("ventes.listevente", ['listeVentes' => $listeventes]);
    }
    
    function venteByproduits() {
        $listeVentesByProduits = DB::select( DB::raw("select p.id, p.libelle, sum(v.qtevente) as Totale 
        FROM produits p, ventes v where v.idpro = p.id group by p.id, p.libelle"));
        return view('ventes.statistiques', ['ventesByproduits'=>$listeVentesByProduits]);
    }

    function facture($idclient) {
        $factures = DB::table('ventes')
        ->join('produits', 'ventes.idpro', '=', 'produits.id')
        ->join('clients', 'ventes.idcli', '=', 'clients.id')
        ->select('ventes.*', 'produits.*', 'clients.*')
        ->where('ventes.idcli', $idclient)
        ->get();
        return view("ventes.facture", ['factures' => $factures]);
    }
/*
    function imprimerFacture($idclient) {
        $factures = DB::table('ventes')
        ->join('produits', 'ventes.idpro', '=', 'produits.id')
        ->join('clients', 'ventes.idcli', '=', 'clients.id')
        ->select('ventes.*', 'produits.*', 'clients.*')
        ->where('ventes.idcli', $idclient)
        ->get();

        $pdf = PDF::loadView('ventes.facture', ['factures'=>$factures]);
        return $pdf->download('facture.pdf');  
        
    }
    function afficherSitemap() {
      $produits = Produit::latest()->get();
      return view('sitemaps.sitemap1', ['produits' => $produits])
    }*/
}
