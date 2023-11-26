<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\FinancasController;
use App\Http\Controllers\DespesaController;
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

Route::get('/dashboard', function () {
    return Inertia::render('Dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::middleware('auth')->group(function () {
    Route::get('/carteira', [FinancasController::class, 'carteira'])->name('financas.carteira');
    Route::get('/despesas', [FinancasController::class, 'despesas'])->name('financas.despesas');
    Route::get('/cartao', [FinancasController::class, 'cartao'])->name('financas.cartao');
    Route::get('/extratos', [FinancasController::class, 'extrato'])->name('financas.extrato');
});

Route::middleware('auth')->group(function () {
    Route::get('/despesas', [DespesaController::class, 'index'])->name('despesas');
    Route::put('/criar/despesa', [DespesaController::class, 'store'])->name('despesas.store');
    Route::patch('/atualizar/despesa', [DespesaController::class, 'update'])->name('despesas.update');;
    Route::delete('/deletar/despesa', [DespesaController::class, 'destroy'])->name('despesas.destroy');
});

require __DIR__.'/auth.php';