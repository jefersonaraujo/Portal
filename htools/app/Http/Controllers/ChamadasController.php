<?php

namespace sistemaLaravel\Http\Controllers;

use Illuminate\Http\Request;

use sistemaLaravel\Chamadas;
use Illuminate\Support\Facades\Redirect;
use sistemaLaravel\Http\Requests\ChamadasFormRequest;
use DB;

class ChamadasController extends Controller
{
  public function __construct(){}

  public function index(Request $request){
    if($request){
      $query=trim($request->get('searchText'));
      $chamadas=DB::table('call_entry as chamadas')
      ->join('agent as usuario', 'usuario.id', '=','chamadas.id_agent')
        ->select('usuario.name as nome','chamadas.callerid as telefone','chamadas.datetime_init as inicio', 'chamadas.datetime_end as fim' ,'chamadas.duration as duracao','chamadas.status as status', 'chamadas.duration_wait as espera')
      ->where('callerid','LIKE', '%'.$query.'%')
      ->orwhere('status','LIKE', '%'.$query.'%')
      ->orderBy('datetime_init', 'desc')
      ->paginate(15);
      return view('pabx.chamadas.index',[
        "cham"=>$chamadas,"searchText"=>$query
      ]);
    }

  }


public function lost(){
  return $this->view('pabx.chamadas.lost');
}


  public function create(){

    return view("pabx.chamadas.create");
  }

  public function show($id){
    return view("pabx.chamadas.show",
    [
      "cham"=>Chamadas::findOrFail($id)
    ]);
  }
}
