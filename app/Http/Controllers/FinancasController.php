<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia;

class FinancasController extends Controller
{
    //

    public function carteira(){
        return Inertia::render('Financas/Carteira');
    }

    public function cartao(){
        return Inertia::render('Financas/Cartao');
    }

    public function extrato(){
        return Inertia::render('Financas/Extrato');
    }

    public function despesas(){
        return Inertia::render('Financas/Despesas');
    }
}
