<?php

namespace sistemaLaravel\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Cdr;

class CdrController extends Controller
{
  public function index(){

      $tabUser = DB::connection('another')->table('cdr')
      ->select('cdr.src as origem', 'cdr.dst as destino','cdr.duration as duracao','cdr.disposition as status')
      ->orderBy('calldate', 'desc')
      //->where('descricao','LIKE', '%'.$query.'%')
      ->paginate(20);
      return view('callcenter.cdr.index',[
        "cham"=>$tabUser]);
      //->get();
        //  return response()->json($tabUser);
  }
}
