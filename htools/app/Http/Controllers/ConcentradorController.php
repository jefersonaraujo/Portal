<?php

namespace sistemaLaravel\Http\Controllers;

use Illuminate\Http\Request;

use sistemaLaravel\Concentrador;
use Illuminate\Support\Facades\Redirect;
use sistemaLaravel\Http\Requests\ConcentradorFormRequest;
use DB;

class ConcentradorController extends Controller
{
    public function __construct(){}

    public function index(Request $request){
      if($request){
        $query=trim($request->get('searchText'));
        $concentradores=DB::table('tb_concentrador')
        ->where('descricao','LIKE', '%'.$query.'%')
        ->orderBy('cod_concentrador', 'desc')
        ->paginate(7);
        return view('cadastro.concentrador.index',[
          "concentrador"=>$concentradores,"searchText"=>$query
        ]);

    }}


    public function create(){
      return view("cadastro.concentrador.create");

    }

    public function store(ConcentradorFormRequest $request){
      $concentrador = new Concentrador;
      $concentrador->descricao=$request->get('descricao');
      $concentrador->descricao=$request->get('ip');
      $concentrador->descricao=$request->get('api_port');
      $concentrador->descricao=$request->get('ssh_port');
      $concentrador->descricao=$request->get('snmp_port');
      $concentrador->descricao=$request->get('snmp');
      $concentrador->descricao=$request->get('latitude');
      $concentrador->descricao=$request->get('user');
      $concentrador->descricao=$request->get('password');
      $concentrador->save();
      return Redirect::to('cadastro/concentrador');

    }

    public function show($id){
      return view("cadastro.concentrador.show",
      [
        "concentrador"=>Concentrador::findOrFail($id)
      ]);

    }
    public function edit($id){
      return view("cadastro.concentrador.edit",
      [
        "concentrador"=>Concentrador::findOrFail($id)
      ]);

    }
    public function update(ConcentradorFormRequest $request, $id){{
      $concentrador=Concentrador::findOrFail($id);
      $concentrador->descricao=$request->get('descricao');
      $concentrador->update();
      return Redirect::to('cadastro/concentrador');
    }

    }
    public function destroy($id){
      $concentrador=Concentrador::findOrFail($id);
      //$concentrador->descricao=$request->get('descricao');
      $concentrador->update();
      return Redirect::to('cadastro/concentrador');

    }
}
