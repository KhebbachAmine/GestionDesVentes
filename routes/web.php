<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProduitsController;
use App\Http\Controllers\clientsController;
use App\Http\Controllers\VenteController;
use App\Http\Controllers\EtudiantsControllers;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|


Route::get('/', function () {
    return view('produits.index');
});
Route::get('/', function () {
    return view('produits.show');
});*/

    Route::resource('/produits', ProduitsController::class)->middleware(['auth']);
    Route::resource('/clients', clientsController::class)->middleware(['auth']);  
    
    //Route::resource('/produits/{produit}', ProduitsController::class);
    Auth::routes();
    
    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
    
    Route::get('/ventes/vendre',[VenteController::class,'vendre'])->name('ventes.formVendre');
    Route::post('/ventes/validerVente',[VenteController::class,'validerVente'])->name('ventes.validerVente');
    Route::get('/ventes/liste',[VenteController::class,'listevente'])->name('ventes.listevente');
    Route::get('/ventes/statistiques',[VenteController::class,'venteByproduits'])->name('ventes.statistiques');
    Route::get('/ventes/facture/{idclient}',[VenteController::class,'facture'])->name('ventes.facture');
    //Route::post('/ventes/imprimerFacture/{idclient}',[VenteController::class,'imprimerFacture'])->name('ventes.imprimerFacture');
    Route::get('/sitemap.xml',[VenteController::class,'afficherSitemap'])->name('sitemaps.sitemap1');
    Route::get('/etudiants/liste',[EtudiantsControllers::class,'listeetudiants'])->name('etudiants.listeetudiants');
    Route::get('/etudiants/afficher',[EtudiantsControllers::class,'afficheretudiant'])->name('etudiants.afficheretudiant');
    Route::post('/etudiants/ajouter',[EtudiantsControllers::class,'ajouteretudiant'])->name('etudiants.ajouteretudiant');
    Route::get('/etudiants/editer/{id}',[EtudiantsControllers::class,'editeretudiant'])->name('etudiants.editeretudiant');
    Route::post('/etudiants/modifier/{id}',[EtudiantsControllers::class,'modifieretudiant'])->name('etudiants.modifieretudiant');
    Route::post('/etudiants/supprimer/{id}',[EtudiantsControllers::class,'supprimeretudiant'])->name('etudiants.supprimeretudiant');


