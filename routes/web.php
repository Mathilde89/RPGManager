<?php

use App\Http\Controllers\AllpersoController;
use App\Http\Controllers\GroupController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\PersonnageController;
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


Route::get('/groupe/{id}/addperso', [GroupController::class, 'add']) -> name('groupe.addperso') ;
Route::put('/groupe/{id}/addperso', [GroupController::class, 'updategrouperso']) -> name('groupe.updategrouperso') ;

Route::get('/inscription', [UserController::class, 'createinscription']) ;
Route::get('/connexion', [UserController::class, 'createconnexion']) -> name('user.createconnexion');
Route::post('/inscription', [UserController::class, 'storeinscription']) -> name('user.inscription');
Route::post('/connexion', [UserController::class, 'storeconnexion']) -> name('user.connexion') ;
Route::get('/', [UserController::class, 'index']) -> name('game.game') ;
Route::get('/deconnexion', [UserController::class, 'deconnexion']) ;

Route::resource('/personnage', PersonnageController::class);
Route::resource('/groupe', GroupController::class);
Route::resource('/allperso', AllpersoController::class);


