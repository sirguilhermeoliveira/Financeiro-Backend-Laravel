<?php

namespace App\Http\Controllers;
use App\Http\Resources\SelectCollection;
use App\Models\Select;
use Illuminate\Http\Request;

class SelectController extends Controller
{
    public function store(Request $request)
    {
      $select = new Select([
        'novadespesa' => $request->get('novadespesa'),
      ]);

      $select->save();

      return response()->json('Adicionado com Sucesso');
    }
    public function create()
    {
        //
    }
    public function index()
    {
        return new SelectCollection(Select::all());
    }

    public function edit($id)
    {
      $select = Select::find($id);
      return response()->json($select);
    }

    public function update($id, Request $request)
    {
      $select = Select::find($id);

      $select->update($request->all());

      return response()->json('Atualizado com sucesso');
    }

    public function destroy($id)
    {
      $select = Select::findOrFail($id);

      $select->delete();

      return response()->json('Deletado com sucesso');
    }

}
