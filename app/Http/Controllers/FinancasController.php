<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia;
use App\Models\Despesa;
use App\Models\Cartao;


class FinancasController extends Controller
{
    //

    public function index(){
        return Inertia::render('Financas/Index');
    }

    public function carteira(){
        return Inertia::render('Financas/Carteira');
    }

    public function cartao(){
        return Inertia::render('Financas/Cartao', [
            'cartaos' => Cartao::with('user')->get(),
        ]);
    }

    public function extrato(){
        return Inertia::render('Financas/Extrato');
    }

    public function despesas(){


        return Inertia::render('Financas/Despesas', [
            'despesas' => Despesa::with('user')->get(),
        ]);
    }
}
