<?php

namespace sistemaLaravel\Http\Controllers;

use sistemaLaravel\ReportCount;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use DB;
use PDF;
use Carbon\Carbon;

class ReportCountController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
      if($request){
        $dataForm = $request->all();
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


        return view('report.report_count.index',[
          "cham"=>$chamadas,"searchText"=>$query,"from"=>$from,"to"=>$to,"dataForm"=>$dataForm
        ]);
      }
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \sistemaLaravel\ReportCount  $reportCount
     * @return \Illuminate\Http\Response
     */
    public function show(ReportCount $reportCount)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \sistemaLaravel\ReportCount  $reportCount
     * @return \Illuminate\Http\Response
     */
    public function edit(ReportCount $reportCount)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \sistemaLaravel\ReportCount  $reportCount
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ReportCount $reportCount)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \sistemaLaravel\ReportCount  $reportCount
     * @return \Illuminate\Http\Response
     */
    public function destroy(ReportCount $reportCount)
    {
        //
    }
}
