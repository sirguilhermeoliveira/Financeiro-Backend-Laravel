<?php

namespace App\Http\Controllers;
use App\Http\Resources\SelectCollectionTres;
use App\Models\SelectTres;
use Illuminate\Http\Request;

class SelectControllerTres extends Controller
{
    public function store(Request $request)
    {
      $selectTres = new SelectTres([
        'receitanovadespesa' => $request->get('receitanovadespesa'),
      ]);

      $selectTres->save();

      return response()->json('Adicionado com Sucesso');
    }
    public function create()
    {
        //
    }
    public function index()
    {
        return new SelectCollectionTres(SelectTres::all());
    }

    public function edit($id)
    {
      $selectTres = SelectTres::find($id);
      return response()->json($selectTres);
    }

    public function update($id, Request $request)
    {
      $selectTres = SelectTres::find($id);

      $selectTres->update($request->all());

      return response()->json('Atualizado com sucesso');
    }

    public function destroy($id)
    {
      $selectTres = SelectTres::findOrFail($id);

      $selectTres->delete();

      return response()->json('Deletado com sucesso');
    }

}
