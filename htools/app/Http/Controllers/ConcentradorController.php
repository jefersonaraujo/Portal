<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use htools\Categoria;
use Illuminate\Support\Facades\Redirect;
use htools\Http\Requests\ConcentradorFormRequest;
use DB;

class ConcentradorController extends Controller
{
    public function __construct(){}

    public function index(Request $request){
      if($request){
        $query=trim($request->get('searchText'));
        $concentradores=DB::table('concentrador')
        ->where('descricao','LIKE', '%'.$query.'%')
        ->orderBy('cod_concentrador', 'desc')
        ->paginate(7);
        return view('cadastrar.concentrador.index',[
          "concentrador"=>$concentradores,"searchText"=>$query
        ]);

    }


    public function create("cadastrar.concentrador.create"){

    }

    public function store(ConcentradorFormRequest $request){
      $concentrador = new Concentrador;
      $concentrador->descricao=$request->get('descricao');
      $concentrador->save();
      return Redirect::to('cadastrar/concentrador');

    }

    public function show($id){
      return view("cadastrar.concentrador.show",
      [
        "concentrador"=>Concentrador::findOrFail($id)
      ]);

    }
    public function edit($id){
      return view("cadastrar.concentrador.edit",
      [
        "concentrador"=>Concentrador::findOrFail($id)
      ]);

    }
    public function update(ConcentradorFormRequest $request, $id){{
      $concentrador=Concentrador::findOrFail($id);
      $concentrador->descricao=$request->get('descricao');
      $concentrador->update();
    }

    }
    public function destroy($id){
      $concentrador=Concentrador::findOrFail($id);
      //$concentrador->descricao=$request->get('descricao');
      $concentrador->update();

    }
}
