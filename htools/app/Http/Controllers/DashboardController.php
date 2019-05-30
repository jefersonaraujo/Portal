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
        // $today_users = User::whereDate('created_at', today())->count();
        // $yesterday_users = User::whereDate('created_at', today()->subDays(5000))->count();
        // $users_2_days_ago = User::whereDate('created_at', today()->subDays(2))->count();


        // $chart->options(['color' => '#43D636']);


        // $chart->labels(['2 days ago', 'Yesterday', 'Today']);
        // $chart->dataset('My dataset', 'line', [1, 2, 3, 4]);
        // $chart->dataset('My dataset 1', 'line', collect([2, 3, 4, 5]));

      //  teste



      ///  $chart->labels(['Chamadas Hoje']);
        $chart->dataset('Chamadas Atendida', 'bar', [$total_chamada_dia])->backgroundcolor('green');
        $chart->dataset('Chamadas Abandonadas', 'bar', [$total_lost_dia])->backgroundcolor('red');
        $chart->labels(["Chamadas hoje"]);

        $chartline = new DashboardChart;
        $chartline->dataset('Chamadas Atendida', 'pie', [$total_chamada_dia])->backgroundcolor('green');
        $chartline->dataset('Chamadas Abandonadas', 'pie', [$total_lost_dia])->backgroundcolor('red');
        $chartline->labels(["Chamadas hoje"]);

        return view('dashboard',compact('agentes','chart', 'chartline'));
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
