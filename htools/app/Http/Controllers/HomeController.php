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

      $showCounts3=DB::table('current_call_entry')
      ->where('id_agent','!=',NULL)->count(); //foi atendinda

      $showCounts4=DB::table('current_call_entry')
      ->where('id_agent', NULL)->count(); //não foi atendinda

      $break=DB::table('audit as au')
      ->join('agent as ag', 'ag.id', '=','au.id_agent')
      ->join('break as br', 'br.id', '=','au.id_break')
        ->select('ag.name as agent','br.name as descricao','au.datetime_init as inicio')
      ->where('datetime_end', NULL)
      ->where('datetime_init','LIKE', '%'.$mytime.'%')
      ->paginate(15);

      $call=DB::table('current_call_entry as chamada')
      ->join('agent as ag', 'ag.id', '=','chamada.id_agent')
        ->select('ag.name as agent','chamada.callerid as telefone','chamada.datetime_init as inicio')
      ->paginate(15);

      $lost=DB::table('call_entry as chamada')
      ->where('status','abandonada')
      ->where('datetime_entry_queue','LIKE', '%'.$mytime.'%')
      ->paginate(15);


        return view('home',
        ["showCounts"=>$showCounts,"showCounts2"=>$showCounts2,"showCounts3"=>$showCounts3,"showCounts4"=>$showCounts4,"break"=>$break,"call"=>$call,"lost"=>$lost]);

        //return view('home');

    }
}
