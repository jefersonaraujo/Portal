<?php

namespace sistemaLaravel\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;
use DB;

class MonitorRamaisController extends Controller
{
  public function __construct(){}


    public function index(){
      $mytime = Carbon::now();
      $showCounts=DB::table('audit')
       ->where('datetime_init','LIKE', '%'.$mytime.'%')
      ->paginate(15);

      $call=DB::table('current_call_entry as chamada')
      ->join('agent as ag', 'ag.id', '=','chamada.id_agent')
        ->select('ag.name as agent','chamada.callerid as telefone','chamada.datetime_init as inicio')
      ->paginate(15);

        return view('pabx.mramais.index',
        ["showCounts"=>$showCounts,"call"=>$call,"hora"=>$mytime]);
      }

    }
