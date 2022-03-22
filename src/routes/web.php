<?php

use App\Http\Controllers\BeneficiarioController;
use App\Http\Controllers\CreditoController;
use App\Http\Controllers\CuentaController;
use App\Http\Controllers\ExpedienteController;
use App\Models\User;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

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

Route::get('/', function () {
    return Inertia::render('Welcome', [
        'canLogin' => Route::has('login'),
        'canRegister' => Route::has('register'),
        'laravelVersion' => Application::VERSION,
        'phpVersion' => PHP_VERSION,
    ]);
});

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return Inertia::render('Dashboard');
})->name('dashboard');

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard/users', function () {
    return Inertia::render('Users/Index', [
        'users' => User::all()
    ]);
})->name('users.index');

Route::resource('expedientes', ExpedienteController::class)
    ->middleware(['auth:sanctum', 'verified']);

Route::resource('beneficiarios', BeneficiarioController::class)
    ->middleware(['auth:sanctum', 'verified']);

Route::resource('cuentas', CuentaController::class)
    ->middleware(['auth:sanctum', 'verified']);

Route::resource('creditos', CreditoController::class)
    ->middleware(['auth:sanctum', 'verified']);
