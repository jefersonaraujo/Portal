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
        return view('cadastro.concentrador.index',[
          "concentrador"=>$concentradores,"searchText"=>$query
        ]);

    }


    public function create("cadastro.concentrador.create"){

    }

    public function store(ConcentradorFormRequest $request){
      $concentrador = new Concentrador;
      $categoria->descricao=$request->get('descricao');

    }

    public function show(){

    }
    public function edit(){

    }
    public function update(){

    }
    public function destroy(){

    }
}
