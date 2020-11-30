<?php

namespace App\Http\Controllers;
use App\Http\Resources\ReceitaCollection;
use App\Models\Receita;
use Illuminate\Http\Request;

class ReceitaController extends Controller
{
    public function store(Request $request)
    {
      $receita = new Receita([
        'des' => $request->get('des'),
        'valr' => $request->get('valr'),
        'vencc' => $request->get('vencc'),
        'emiss' => $request->get('emiss'),
        'stt' => $request->get('stt'),
      ]);

      $receita->save();

      return response()->json('Adicionado com Sucesso');
    }
    public function create()
    {
        //
    }
    public function index()
    {
        return new ReceitaCollection(Receita::all());
    }

    public function edit($id)
    {
      $Receita = Receita::find($id);
      return response()->json($receita);
    }

    public function update($id, Request $request)
    {
      $receita = Receita::find($id);

      $receita->update($request->all());

      return response()->json('Atualizado com sucesso');
    }

    public function destroy($id)
    {
      $receita = Receita::findOrFail($id);

      $receita->delete();

      return response()->json('Deletado com sucesso');
    }

}
