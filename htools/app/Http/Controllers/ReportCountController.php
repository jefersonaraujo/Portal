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
        $chamadas=DB::table('call_entry')
        ->select(DB::raw('count(status) as qtd, status, datetime_entry_queue as dia'))
            ->whereBetween('datetime_entry_queue',array($from,$to))
            ->groupBy('datetime_entry_queue','status')->get();
            //->orderBy('datetime_entry_queue', 'desc')->get();
        //     ->where('callerid','LIKE', '%'.$query.'%')
        // //->orwhere('status','LIKE', '%'.$query.'%')


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
