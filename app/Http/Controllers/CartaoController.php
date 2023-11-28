<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cartao;

class CartaoController extends Controller
{
    //

    public function index(){
        $cartao = Cartao::with('user')->get();

        return response()->json([
            'Cartao' => $cartao,
        ]);
    }

    public function store(Request $request)
    {
        try {
            $cartao = Cartao::create($request->all());
            return response()->json($cartao, 201);
        } catch (\Exception $th) {
            return $th;
        }

    }

    public function update(Request $request, Cartao $id)
    {
        $id->update($request->all());
        return response()->json($id, 200);
    }

    public function destroy($id)
    {

        Cartao::destroy($id);

    }
}
