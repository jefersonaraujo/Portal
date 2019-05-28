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
        $to=trim($request->get('to'));
        $from=trim($request->get('from'));
        $chamadas=DB::table('call_entry as chamadas')
        ->join('agent as usuario', 'usuario.id', '=','chamadas.id_agent')
          ->select('usuario.name as nome','chamadas.callerid as telefone', 'chamadas.datetime_init as inicio', 'chamadas.datetime_end as fim' ,'chamadas.duration as duracao','chamadas.status as status', 'chamadas.duration_wait as espera')
            ->whereBetween('datetime_entry_queue',array($from,$to))
            ->where('callerid','LIKE', '%'.$query.'%')
        //->orwhere('status','LIKE', '%'.$query.'%')

        ->orderBy('datetime_init', 'desc')->get();
        //->get();
        //->paginate(10);
        $agentes=DB::table('agent')->get();

        return view('report.report_agent.index',[
          "cham"=>$chamadas,"searchText"=>$query,"from"=>$from,"to"=>$to,"agentes"=>$agentes
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
