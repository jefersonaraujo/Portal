<?php

namespace sistemaLaravel\Http\Controllers;

use Illuminate\Http\Request;
use sistemaLaravel\Pausas;
use sistemaLaravel\Http\Requests\PausasFormRequest;
use DB;

class PausasController extends Controller
{
  ///DB::raw('count(br.name) as qtd'),
    public function __construct(){}
      public function index(Request $request){
        if($request){
          $query=trim($request->get('searchText'));
          $pausas=DB::table('audit as  au')
          ->join('agent as ag', 'ag.id', '=','au.id_agent')
          ->join('break as br', 'br.id', '=','au.id_break')
            ->select('au.id as cod', 'ag.name as agent', 'br.name as descricao','au.duration as duracao','au.datetime_init as dia')
          ->where('datetime_init','LIKE', '%'.$query.'%')
          ->where('au.id_break','!=','NULL')
          ->orderBy('datetime_init', 'desc')
          ->orderBy('ag.name', 'desc')
          ->groupBy('au.datetime_init','ag.name','br.name','au.id','au.duration')
          ->paginate(10);
          return view('callcenter.pausas.index',[
            "pausa"=>$pausas,"searchText"=>$query
          ]);
        }

      }
}
