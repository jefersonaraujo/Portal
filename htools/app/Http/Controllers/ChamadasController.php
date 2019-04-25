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
      $chamadas=DB::table('call_entry')
      ->where('callerid','LIKE', '%'.$query.'%')
      ->orderBy('datetime_init', 'desc')
      ->paginate(7);
      return view('pabx.chamadas.index',[
        "cham"=>$chamadas,"searchText"=>$query
      ]);
    }

  }
}
