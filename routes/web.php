<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\frontController;
use App\Http\Controllers\backofficeController;
use App\Http\Controllers\Auth\LoginController;

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
    return view('welcome');
});
*/

Route::post('/save_login', [LoginController::class, 'login']);



Route::controller(frontController::class)->group(function () {
    Route::get('/', 'index');
    Route::get('suivie_de_dossier', 'suiviDossier');
    Route::get('contact', 'contact');
    Route::get('carriere', 'carriere');
    Route::get('qui-somme-nous', 'apropos');
    Route::get('directeur', 'directeur');

    //Carrière et offre
    Route::get('carriere', 'carriere');
    Route::get('offres', 'offre');

    //Les routes pour les services
    Route::get('gestion-territoriale', 'gestionterritoriale');
    Route::get('developpement-economique', 'developpementeconomique');
    Route::get('developpement-urbain', 'developpementurbain');
    Route::get('gestion-de-projet', 'gestiondeprojet');


    //Les routes pour les projets
    Route::get('national', 'national');
    Route::get('international', 'international');
    Route::get('projet-detail', 'projetdetail');
});


Route::controller(backofficeController::class)->group(function () {
    Route::get('/connexion', 'connexion');
});


//Auth::routes();

//Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
