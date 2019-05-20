<?php

namespace sistemaLaravel\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Cdr;

class CdrController extends Controller
{
  public function index(){

      $tabUser = DB::connection('another')->table('cdr')->get();
          return response()->json($tabUser);
  }
}
