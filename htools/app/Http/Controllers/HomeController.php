<?php

namespace sistemaLaravel\Http\Controllers;

use Illuminate\Http\Request;

use Charts;
use Carbon\Carbon;
use DB;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */



    public function index()
    {
      $mytime = Carbon::now()->format('Y-m-d');
      $showCounts=DB::table('call_entry')
      ->where('datetime_entry_queue','LIKE', '%'.$mytime.'%')->count();

      $showCounts2=DB::table('call_entry')
      ->where('status', 'abandonada')
      ->where('datetime_entry_queue','LIKE', '%'.$mytime.'%')->count();

      $showCounts3=DB::table('current_calls')->count();

      $showCounts4=DB::table('current_calls')
      ->where('agentnum', NULL)->count();

        return view('home',
        ["showCounts"=>$showCounts,"showCounts2"=>$showCounts2,"showCounts3"=>$showCounts3,"showCounts4"=>$showCounts4]);

        //return view('home');

    }
}
