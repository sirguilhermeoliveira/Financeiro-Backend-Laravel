<?php

namespace App\Http\Controllers;
use App\Http\Resources\SelectCollectionDois;
use App\Models\SelectDois;
use Illuminate\Http\Request;

class SelectControllerDois extends Controller
{
    public function store(Request $request)
    {
      $selectDois = new SelectDois([
        'novoplanocontas' => $request->get('novoplanocontas'),
      ]);

      $selectDois->save();

      return response()->json('Adicionado com Sucesso');
    }
    public function create()
    {
        //
    }
    public function index()
    {
        return new SelectCollectionDois(SelectDois::all());
    }

    public function edit($id)
    {
      $selectDois = SelectDois::find($id);
      return response()->json($selectDois);
    }

    public function update($id, Request $request)
    {
      $selectDois = SelectDois::find($id);

      $selectDois->update($request->all());

      return response()->json('Atualizado com sucesso');
    }

    public function destroy($id)
    {
      $selectDois = SelectDois::findOrFail($id);

      $selectDois->delete();

      return response()->json('Deletado com sucesso');
    }

}
