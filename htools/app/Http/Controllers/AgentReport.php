<?php

namespace sistemaLaravel\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use sistemaLaravel\Http\Requests\AgentFormRequest;
use DB;
use PDF;
use Carbon\Carbon;


class AgentReport extends Controller
{
  public function __construct(){}

    public function index(Request $request){
      if($request){
        $query=trim($request->get('searchText'));
        $agentes=DB::table('agent')
        ->where('name','LIKE', '%'.$query.'%')
        ->orderBy('number', 'desc')
        ->paginate(7);
        return view('callcenter.report.index',[
          "agent"=>$agentes,"searchText"=>$query
        ]);
     }

    }

    public function generatePDF()
  {
  //  if($request){
      // $mytime = Carbon::now()->format('Y-m-d');
      // $showCounts=DB::table('call_entry')
      //   ->where('datetime_entry_queue','LIKE', '%'.$mytime.'%')->count();
      //
        $agentes=DB::table('agent')->get();

      // $query=trim($request->get('searchText'));
      // $agentes=DB::table('agent')
      //   ->where('name','LIKE', '%'.$query.'%')
      //   ->orderBy('number', 'desc')->get();


      $data = ['agent'=> $agentes];
      $pdf = PDF::loadView('myPDF',$data);



      return $pdf->stream('ineedsolutions.pdf');
  //}
}

public function show(){
  
}


}
