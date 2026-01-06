<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FrontController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\BackofficeController;

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

#ROUTE D'AUTHENTIFICATION DU BACKOFFICE
Route::controller(AuthController::class)->group(function () {
    Route::get('/connexion', 'connexion')->name('connexion');
    Route::post('/login', 'login')->name('login');
    Route::get('/logout', 'logout')->name('logout');
    Route::get('/mot_de_passe_oublie', 'motPasseOublie')->name('mot_de_passe_oublie');
    Route::post('/mot_de_passe_oublie', 'sendResetLinkEmail')->name('password');
    Route::post('/updateMotDePasse', 'showResetForm')->name('password.reset');
    Route::post('/reset', 'resetPassword')->name('password.update');
});


Route::controller(FrontController::class)->group(function () {
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


#ROUTE BACKOFFICE
Route::group(['middleware' => 'auth'], function () {
    
    Route::prefix('backoffice')
        ->name('backoffice.')
        ->controller(BackofficeController::class)
        ->group(function () {
            Route::get('espace', 'index')->name('espace');

        });
});