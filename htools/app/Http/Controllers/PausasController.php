<?php

namespace sistemaLaravel\Http\Controllers;

use Illuminate\Http\Request;
use sistemaLaravel\Pausas;
use sistemaLaravel\Http\Requests\PausasFormRequest;
use DB;

class PausasController extends Controller
{
    public function __construct(){}
      public function index(Request $request){
        if($request){
          $query=trim($request->get('searchText'));
          $chamadas=DB::table('call_entry')
          ->where('callerid','LIKE', '%'.$query.'%')
          ->orwhere('status','LIKE', '%'.$query.'%')
          ->orderBy('datetime_init', 'desc')
          ->paginate(10);
          return view('callcenter.pausas.index',[
            "cham"=>$chamadas,"searchText"=>$query
          ]);
        }

      }
}
