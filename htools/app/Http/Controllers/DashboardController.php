<?php

namespace sistemaLaravel\Http\Controllers;
use Illuminate\Http\Request;
use sistemaLaravel\Dashboard;
use sistemaLaravel\Charts\DashboardChart;
use sistemaLaravel\User;
use DB;








class DashboardController extends Controller
{
    public function __construct(){}
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      //  $pulse = Agent::all();
        $total_chamada_dia=DB::table('call_entry')->whereDate('datetime_entry_queue', today())->count();
        $total_lost_dia=DB::table('call_entry')
         ->where('status','abandonada')
         ->whereDate('datetime_entry_queue', today())->count();

        $chart = new DashboardChart;

      ////CHART MES
      $total_chamada_mes=DB::table('call_entry')
          ->whereMonth('datetime_entry_queue','=', date('m'))
          ->whereYear('datetime_entry_queue','=', date('Y'))
          ->count();
      $total_lost_mes=DB::table('call_entry')
       ->where('status','abandonada')
       ->whereMonth('datetime_entry_queue','=', date('m'))
       ->whereYear('datetime_entry_queue','=', date('Y'))
       ->count();

        $chartline = new DashboardChart;
        $chartline->dataset('Recebidas', 'bar', [$total_chamada_mes])->backgroundcolor('green');
        $chartline->dataset('Abandonadas', 'bar', [$total_lost_mes])->backgroundcolor('red');
        $chartline->labels(["Chamadas Mês"]);




        ///  $chart->labels(['Chamadas Hoje']);
          $chart->dataset('Chamadas Atendida', 'bar', [$total_chamada_dia])->backgroundcolor('green');
          $chart->dataset('Chamadas Abandonadas', 'bar', [$total_lost_dia])->backgroundcolor('red');
          $chart->labels(["Chamadas hoje"]);


      /////////////////////////


      $chamadas=DB::table('call_entry as chamadas')
      ->join('agent as usuario', 'usuario.id', '=','chamadas.id_agent')
        //->select('usuario.name')
        ->select(DB::raw('count(usuario.name) as qtd, usuario.name'))
        ->whereDate('datetime_entry_queue',today())
        ->groupBy('name')
        ->get();



        $chart2 = new DashboardChart;
        $chart->labels(["Chamadas hojeXOperador"]);





        // var_dump($chamadas);
        foreach($chamadas as  $chave => $valor){

            $chart2->dataset($valor->name, 'bar', [$valor->qtd])->backgroundcolor('green');

        }




//////////////////////

        return view('dashboard',compact('agentes','chart', 'chartline','chart2'));
         //return view('dashboard', ['chart' => $chart]);

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
     * @param  \sistemaLaravel\Dashboard  $dashboard
     * @return \Illuminate\Http\Response
     */
    public function show(Dashboard $dashboard)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \sistemaLaravel\Dashboard  $dashboard
     * @return \Illuminate\Http\Response
     */
    public function edit(Dashboard $dashboard)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \sistemaLaravel\Dashboard  $dashboard
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Dashboard $dashboard)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \sistemaLaravel\Dashboard  $dashboard
     * @return \Illuminate\Http\Response
     */
    public function destroy(Dashboard $dashboard)
    {
        //
    }
}
