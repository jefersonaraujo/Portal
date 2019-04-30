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
        return view('pabx.mramais.index',
        ["showCounts"=>$showCounts]);
      }

    }
