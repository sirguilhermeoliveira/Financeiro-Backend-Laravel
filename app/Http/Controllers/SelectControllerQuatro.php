<?php

namespace App\Http\Controllers;
use App\Http\Resources\SelectCollectionQuatro;
use App\Models\SelectQuatro;
use Illuminate\Http\Request;

class SelectControllerQuatro extends Controller
{
    public function store(Request $request)
    {
      $selectQuatro = new SelectQuatro([
        'receitanovoplanocontas' => $request->get('receitanovoplanocontas'),
      ]);

      $selectQuatro->save();

      return response()->json('Adicionado com Sucesso');
    }
    public function create()
    {
        //
    }
    public function index()
    {
        return new SelectCollectionQuatro(SelectQuatro::all());
    }

    public function edit($id)
    {
      $selectQuatro = SelectQuatro::find($id);
      return response()->json($selectQuatro);
    }

    public function update($id, Request $request)
    {
      $selectQuatro = SelectQuatro::find($id);

      $selectQuatro->update($request->all());

      return response()->json('Atualizado com sucesso');
    }

    public function destroy($id)
    {
      $selectQuatro = SelectQuatro::findOrFail($id);

      $selectQuatro->delete();

      return response()->json('Deletado com sucesso');
    }

}
