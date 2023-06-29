<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProspectController;
use App\Http\Controllers\RapportController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\Controller;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
Route::get('/dash',[ Controller::class, "index"])->name("dash");

Route::get('/ListedesProspects',[ ProspectController::class, "listeprospects"])->name("Listeprospects");
Route::get('/ListedesProspectsok',[ ProspectController::class, "listeprospectsok"])->name("Listeprospectsok");
Route::get('/ListedesProspectsnook',[ ProspectController::class, "listeprospectsnook"])->name("Listeprospectsnook");

Route::get( "/create",[ProspectController::class ,"create"])->name("create");
Route::post("/creation",[ProspectController::class ,"store"])->name("prospect.ajouter");
Route::delete("/SuppressionProspect/{prospect}",[ProspectController::class ,"delete"])->name("prospect.supprimer");
Route::put("/EditiondesProspects/{prospect}",[ProspectController::class ,"editer"])->name("prospect.editer");
Route::get("/EditiondesProspects/edit/{prospect}",[ProspectController::class ,"edit"])->name("prospect.edit");
Route::get('/rapports', [RapportController::class, 'index'])->name('rapports');
Route::get('/rapports/filtrer', [RapportController::class, 'filtrerRapports'])->name('filtrerRapports');
Route::get('/rapports/exporter', [RapportController::class, 'exporterRapports'])->name('exporterRapports');
Route::get('/ListedesUtilisateurs',[ UserController::class, "listeusers"])->name("Listeusers");


Route::get('/', function () {
    return view('auth.login');
});





Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard',[ Controller::class, "index"])
->name('dashboard');
});
