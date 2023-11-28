<?php

namespace App\Http\Controllers;

use App\Models\Despesa;
use Illuminate\Http\Request;

class DespesaController extends Controller
{
    //
    public function index(){
        $despesas = Despesa::with('user')->get();

        return response()->json([
            'Despesas' => $despesas,
        ]);
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

    public function update(Request $request, Despesa $id)
    {
        $id->update($request->all());
        return response()->json($id, 200);
    }

    public function destroy($id)
    {

        Despesa::destroy($id);

    }
}
