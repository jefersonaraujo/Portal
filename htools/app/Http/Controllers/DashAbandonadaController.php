<?php

namespace sistemaLaravel\Http\Controllers;

use Illuminate\Http\Request;

use Carbon\Carbon;
use DB;


class DashAbandonadaController extends Controller
{
  public function __construct(){}


    public function index(){
      $chart = new SampleChart;
      $chart->labels(['One', 'Two', 'Three']);


      $mytime = Carbon::now()->format('Y-m-d');
      $showCounts=DB::table('call_entry')
      ->where('datetime_entry_queue','LIKE', '%'.$mytime.'%')->count();
        return view('/dashboard',
        ["showCounts"=>$showCounts]);
      }
}
