<?php

namespace sistemaLaravel\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;
use DB;

class MonitorRamaisController extends Controller
{
  public function __construct(){}


    public function index(){
      $mytime = Carbon::now()->format('Y-m-d');
      $showCounts=DB::table('audit')
       ->where('datetime_init','LIKE', '%'.$mytime.'%')
      ->paginate(15);

      $call=DB::table('current_call_entry as chamada')
      ->join('agent as ag', 'ag.id', '=','chamada.id_agent')
        ->select('ag.name as agent','chamada.callerid as telefone','chamada.datetime_init as inicio')
      ->paginate(15);

      $showCounts5=DB::table('audit as au')
        ->join('break as br', 'br.id', '=','au.id_break')
          ->where('au.id_break','!=', '4')
          ->where('au.id_break','!=', '2')
          ->where('au.id_break','!=', '6')
          ->where('au.datetime_init','LIKE', '%'.$mytime.'%')->count();
       //não foi atendinda

        return view('pabx.mramais.index',
        ["showCounts"=>$showCounts,"showCounts5"=>$showCounts5,"call"=>$call]);
      }

    }
