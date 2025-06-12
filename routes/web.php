<?php

use App\Http\Controllers\ClientController;
use App\Http\Controllers\DemandeController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\RequestController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\TarifController;
use App\Http\Controllers\UserController;

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
    return view('website.index');
})->name('home');

Auth::routes();

Route::get('/admin', [HomeController::class, 'index'])->name('admin.home');
Route::get('/gie', [HomeController::class, 'gie'])->name('gie.home');
Route::get('/client', [HomeController::class, 'client'])->name('client.home');

// Route Client
Route::get('/register', [UserController::class, 'registerCreate'])->name('user.register.create');
    Route::post('/register/store', [UserController::class, 'registerStore'])->name('user.register.store');

// Route User -- Admin
Route::prefix('admin/users')->group(function () {
    Route::get('/', [UserController::class, 'index'])->name('user.index');
    Route::get('/create', [UserController::class, 'create'])->name('user.create');
    Route::post('/store', [UserController::class, 'store'])->name('user.store');
    Route::get('/edit/id={id}', [UserController::class, 'edit'])->name('user.edit');
    Route::post('/update/id={id}', [UserController::class, 'update'])->name('user.update');
    Route::get('/delete/id={id}', [UserController::class, 'delete'])->name('user.delete');
    Route::get('/show/id={id}', [UserController::class, 'show'])->name('user.show');

    Route::get('/roles', [RoleController::class, 'index'])->name('user.role.index');
    Route::get('/roles/create', [RoleController::class, 'create'])->name('user.role.create');
    Route::post('/roles/store', [RoleController::class, 'store'])->name('user.role.store');
    Route::get('/roles/edit/id={id}', [RoleController::class, 'edit'])->name('user.role.edit');
    Route::post('/roles/update/id={id}', [RoleController::class, 'update'])->name('user.role.update');
    Route::get('/roles/delete/id={id}', [RoleController::class, 'delete'])->name('user.role.delete');
});

// Route Tarifs -- Admin
Route::prefix('admin/tarifs')->group(function () {
    Route::get('/', [TarifController::class, 'index'])->name('admin.tarif.index');
    Route::get('/create', [TarifController::class, 'create'])->name('admin.tarif.create');
    Route::post('/store', [TarifController::class, 'store'])->name('admin.tarif.store');
    Route::get('/edit/id={id}', [TarifController::class, 'edit'])->name('admin.tarif.edit');
    Route::post('/update/id={id}', [TarifController::class, 'update'])->name('admin.tarif.update');
    Route::get('/delete/id={id}', [TarifController::class, 'delete'])->name('admin.tarif.delete');
});

// Route Clients -- Admin
Route::prefix('admin/clients')->group(function () {
    Route::get('/', [ClientController::class, 'index'])->name('admin.client.index');
    Route::get('/show/id={id}', [ClientController::class, 'show'])->name('admin.client.show');
});

// Route Demandes -- Clients
Route::prefix('clients')->group(function () {
    Route::get('/demandes', [RequestController::class, 'index'])->name('client.demande.index');
    Route::get('/demandes/create', [RequestController::class, 'create'])->name('client.demande.create');
    Route::post('/demandes/store', [RequestController::class, 'store'])->name('client.demande.store');
    Route::get('/demandes/edit/id={id}', [RequestController::class, 'edit'])->name('client.demande.edit');
    Route::post('/demandes/update/id={id}', [RequestController::class, 'update'])->name('client.demande.update');
    Route::get('/demandes/delete/id={id}', [RequestController::class, 'delete'])->name('client.demande.delete');
    Route::get('/demandes/show/id={id}', [RequestController::class, 'show'])->name('client.demande.show');
});

// Route Demandes -- Gie
Route::prefix('gie')->group(function () {
    Route::get('/demandes/attente', [DemandeController::class, 'attente'])->name('gie.demande.attente');
    Route::get('/demandes/attente/show/id={id}', [DemandeController::class, 'attenteShow'])->name('gie.demande.attente.show');
    Route::get('/demandes/attente/store/id={id}', [DemandeController::class, 'attenteStore'])->name('gie.demande.attente.store');
    Route::get('/demandes/attente/cancel/id={id}', [DemandeController::class, 'attenteCancel'])->name('gie.demande.attente.cancel');
    Route::get('/demandes/en-cour', [DemandeController::class, 'encour'])->name('gie.demande.encour');
    Route::get('/demandes/traites', [DemandeController::class, 'traite'])->name('gie.demande.traite');
});