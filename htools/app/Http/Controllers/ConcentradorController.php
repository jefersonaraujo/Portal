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
      $concentrador->ip=$request->get('ip');
      $concentrador->api_port=$request->get('api_port');
      $concentrador->ssh_port=$request->get('ssh_port');
      $concentrador->snmp_port=$request->get('snmp_port');
      $concentrador->snmp=$request->get('snmp');
      $concentrador->latitude=$request->get('latitude');
      $concentrador->altitude=$request->get('altitude');
      $concentrador->user=$request->get('user');
      $concentrador->password=$request->get('password');
      $concentrador->ativo=$request->get('ativo');
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
      ["concentrador"=>Concentrador::findOrFail($id)]);

    }
    public function update(ConcentradorFormRequest $request, $id){
      $concentrador=Concentrador::findOrFail($id);
      $concentrador->descricao=$request->get('descricao');
      $concentrador->ip=$request->get('ip');
      $concentrador->api_port=$request->get('api_port');
      $concentrador->ssh_port=$request->get('ssh_port');
      $concentrador->snmp_port=$request->get('snmp_port');
      $concentrador->snmp=$request->get('snmp');
      $concentrador->latitude=$request->get('latitude');
      $concentrador->altitude=$request->get('altitude');
      $concentrador->user=$request->get('user');
      $concentrador->password=$request->get('password');
      $concentrador->ativo=$request->get('ativo');
      $concentrador->update();

      return Redirect::to('cadastro/concentrador');
    }


    public function destroy($id){
      $concentrador=Concentrador::findOrFail($id);
      //$concentrador->descricao=$request->get('descricao');
      $concentrador->update();
      return Redirect::to('cadastro/concentrador');

    }
}
