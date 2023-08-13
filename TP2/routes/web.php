<?php

use App\Http\Controllers\FaitController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

/**
 * Page d'accueil, affiche un fait au hasard
 */
Route::get('/', [FaitController::class, 'index'])
    ->name('faits.index');

/**
 * Affichage des faits
 */
Route::get('/faits/show', [FaitController::class, 'show'])
    ->name('faits.show');


/**
 * Affichage du formulaire d'ajout de fait
 */
Route::get('/faits/create', [FaitController::class, 'create'])
    ->name('faits.create');

/**
 * Traitement du formulaire d'ajout
 */
Route::post('/faits', [FaitController::class, 'store'])
    ->name('faits.store');



/**
 * Affichage du formulaire de modification d'un fait
 */
Route::get("/faits/edit/{id}", [FaitController::class, 'edit'])
->name('faits.edit');

/**
 * Traitement du formulaire de modification
 */
Route::post("/faits/update", [FaitController::class, 'update'])
->name('faits.update');


/**
 * Supression d'un fait
 */
Route::get('/faits/destroy/{id}', [FaitController::class, 'destroy'])
->name('faits.destoy');


