<?php

namespace sistemaLaravel\Http\Controllers;

use Illuminate\Http\Request;

use sistemaLaravel\Chamadas;
use Illuminate\Support\Facades\Redirect;
use DB;


class AbandonadasController extends Controller
{
  public function __construct(){}

  public function index(Request $request){
    if($request){
      $query=trim($request->get('searchText'));
      $chamadas=DB::table('call_entry')
      ->where('callerid','LIKE', '%'.$query.'%')
      ->where('duration', NULL)
      ->orderBy('datetime_end', 'desc')
      ->paginate(10);
      return view('pabx.abandonadas.index',[
        "lost"=>$chamadas,"searchText"=>$query
      ]);
    }

  }
}
