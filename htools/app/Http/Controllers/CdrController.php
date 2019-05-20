<?php

namespace sistemaLaravel\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Cdr;

class CdrController extends Controller
{
  public function index(){

      $tabUser = DB::connection('another')->table('cdr')
      ->select('cdr.clid as agent','cdr.src as origim','cdr.disposition as statys')
      ->orderBy('calldate', 'desc')
      //->where('descricao','LIKE', '%'.$query.'%')
      ->paginate(10);
      //->get();
          return response()->json($tabUser);
  }
}
