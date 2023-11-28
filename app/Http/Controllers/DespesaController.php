<?php

namespace App\Http\Controllers;

use App\Models\Despesa;
use Illuminate\Http\Request;

class DespesaController extends Controller
{
    //
    public function index(){
        $despesas = Despesa::with('user')->get();

        return $despesas;
    }

    public function store(Request $request)
    {
        try {
            $despesa = Despesa::create($request->all());
            return response()->json($despesa, 201);
        } catch (\Exception $th) {
            return $th;
        }

    }

    public function update(Request $request, Despesa $despesa)
    {
        $despesa->update($request->all());
        return response()->json($despesa, 200);
    }

    public function destroy(Despesa $despesa)
    {
        $despesa->delete();
        return response()->json(null, 204);
    }
}
