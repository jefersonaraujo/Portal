<?php

namespace sistemaLaravel\Http\Controllers;

use Illuminate\Http\Request;

use sistemaLaravel\Chamadas;
use Illuminate\Support\Facades\Redirect;
use DB;
use Carbon\Carbon;


class AbandonadasController extends Controller
{
  public function __construct(){}

  public function index(Request $request){
      $mytime = Carbon::now()->format('Y-m-d');
    if($request){
      $dataForm = $request->all();
      $query=trim($request->get('searchText'));
      $to=trim($request->get('to'));
      $from=trim($request->get('from'));
      $chamadas=DB::table('call_entry')
      ->where('callerid','LIKE', '%'.$query.'%')
      ->where('duration', NULL)
      //->whereBetween('datetime_entry_queue', [$from, $to])->first()
      ->orderBy('datetime_end', 'desc')
      ->paginate(20);
      return view('pabx.abandonadas.index',[
        "lost"=>$chamadas,"searchText"=>$query,"dataForm"=>$dataForm
      ]);
    }

  }
}
