<?php

namespace sistemaLaravel\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Cdr;

class CdrController extends Controller
{
  public function __construct(){}
  public function index(Request $request){
      if($request){
        $query=trim($request->get('searchText'));
        $tabUser = DB::connection('another')->table('cdr')
        ->select('cdr.src as origem', 'cdr.dst as destino','cdr.duration as duracao','cdr.disposition as status', 'calldate as data')
        ->orderBy('calldate', 'desc')
        ->where('cdr.src','LIKE', '%'.$query.'%')
        ->paginate(20);
        return view('callcenter.cdr.index',[
          "cham"=>$tabUser,"searchText"=>$query]);
        }
      //->get();
        //  return response()->json($tabUser);
  }
}
