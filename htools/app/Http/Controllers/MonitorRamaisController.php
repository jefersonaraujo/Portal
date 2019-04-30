<?php

namespace sistemaLaravel\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class MonitorRamaisController extends Controller
{
  public function __construct(){}
    public function index(){
      $showCounts=DB::table('call_entry')->count();
        return view('pabx.mramais.index',
        ["showCounts"=>$showCounts]);
      }

    }
