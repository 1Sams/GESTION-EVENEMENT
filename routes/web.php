<?php

use App\Http\Controllers\AcceuilController;
use App\Http\Controllers\CategoriesController;
use App\Http\Controllers\InscriptionController;
use App\Http\Controllers\LoginController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EvenementController;
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

Route::get('/', function () {
    return view('welcome');
});



Route::get('/Gestion', function () {
    return view('acceuil');
});


Route::get('inscription', [InscriptionController::class, 'register'])->name('inscription');
Route::post('store', [InscriptionController::class, 'store'])->name('inscription.store'); // Utilisez une méthode "store" pour gérer la soumission du formulaire

Route::get('login', [LoginController::class, 'login'])->name('auth.login');
Route::post('login', [LoginController::class, 'dologin'])->name('auth.login');
Route::get('categories', [CategoriesController::class, 'categories']);

Route::get('/delete-evenement/{id}', [EvenementController::class,'delete_evenement']);
Route::get('/update-evenement/{id}', [EvenementController::class,'update_evenement']);
Route::post('/update', [EvenementController::class,'update_evenement_taitement']);
Route::get('/evenement', [EvenementController::class,'liste_evenement']);
Route::get('/ajout', [EvenementController::class,'ajout_evenement']);
Route::post('/ajout', [EvenementController::class,'ajout_evenement_taitement']);




// Route::get('login', [LoginController::class, 'showLoginForm'])->name('auth.login');
// Route::post('login', [LoginController::class, 'login'])->name('auth.login');
