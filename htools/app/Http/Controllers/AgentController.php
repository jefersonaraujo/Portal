<?php

namespace sistemaLaravel\Http\Controllers;

use Illuminate\Http\Request;
use sistemaLaravel\Agent;
use Illuminate\Support\Facades\Redirect;
use sistemaLaravel\Http\Requests\AgentFormRequest;
use DB;
use PDF;
use Carbon\Carbon;

class AgentController extends Controller
{
  public function __construct(){}

  public function index(Request $request){
    if($request){
      $query=trim($request->get('searchText'));
      $agentes=DB::table('agent')
      ->where('name','LIKE', '%'.$query.'%')
      ->orderBy('number', 'desc')
      ->paginate(7);
      return view('callcenter.agent.index',[
        "agent"=>$agentes,"searchText"=>$query
      ]);
    }

  }

  public function generatePDF()
{
  $mytime = Carbon::now()->format('Y-m-d');
  $showCounts=DB::table('call_entry')
    ->where('datetime_entry_queue','LIKE', '%'.$mytime.'%')->count();

    $agentes=DB::table('agent')->get();
    $data = ['agent'=> $agentes];

  ///  $data = (['title' => $showCounts]);
    //$data = array('title'=>'John Smith');


    $pdf = PDF::loadView('myPDF',$data);

    // $pdf = PDF::loadHTML('<p>Hello World!!</p>');

    return $pdf->stream('ineedsolutions.pdf');
}

public function show($id){
  return view("callcenter.agent.show",
  [
    "agent"=>Agent::findOrFail($id)
  ]);

}

}
