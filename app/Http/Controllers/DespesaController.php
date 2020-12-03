<?php

namespace App\Http\Controllers;
use App\Http\Resources\DespesaCollection;
use App\Models\Despesa;
use Illuminate\Http\Request;

class DespesaController extends Controller
{
    public function store(Request $request)
    {
      $despesa = new Despesa([
        'des' => $request->get('des'),
        'valr' => $request->get('valr'),
        'vencc' => $request->get('vencc'),
        'emiss' => $request->get('emiss'),
        'stt' => $request->get('stt'),
      ]);

      $despesa->save();

      return response()->json('Adicionado com Sucesso');
    }
    public function create()
    {
        //
    }
    public function index()
    {
        return new DespesaCollection(Despesa::all());
    }

    public function edit($id)
    {
      $despesa = Despesa::find($id);
      return response()->json($despesa);
    }

    public function update(Request $request, Despesa $despesa)
    {
        $despesa->des = $request->des;
        $despesa->valr = $request->valr;
        $despesa->vencc = $request->vencc;
        $despesa->emiss = $request->emiss;
        $despesa->stt = $request->stt;
        $despesa->save();
        return response()->json('Chegou no update');
    }

/*     public function update(Request $request, $id) {
      if ($id == 0) {
          $despesa->create($request->all());
      }
      else {
          $despesa = Despesa::findOrFail($id);
          $despesa->fill($request->all())->save();
      }


      return response()->json('Chegou no update');
  } */

    public function destroy($id)
    {
      $despesa = Despesa::findOrFail($id);

      $despesa->delete();

      return response()->json('Deletado com sucesso');
    }

}
