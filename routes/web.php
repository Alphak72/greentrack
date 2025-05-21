<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\RoleController;
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

// Route User
Route::prefix('users')->group(function () {
    Route::get('/register', [UserController::class, 'registerCreate'])->name('user.register.create');
    Route::post('/register/store', [UserController::class, 'registerStore'])->name('user.register.store');

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
