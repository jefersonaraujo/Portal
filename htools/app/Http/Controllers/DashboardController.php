<?php

namespace sistemaLaravel\Http\Controllers;
use Illuminate\Http\Request;
use sistemaLaravel\Dashboard;
use sistemaLaravel\Charts\DashboardChart;
use sistemaLaravel\User;
use DB;
use Charts;







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
      // $chamadas=DB::table('call_entry as chamadas')
      // ->join('agent as usuario', 'usuario.id', '=','chamadas.id_agent')
      //   ->select('usuario.name as nome')
      //   ->whereDate('datetime_entry_queue',today())->count();







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







      /////////////////////////


      $chamadas=DB::table('call_entry as chamadas')
      ->join('agent as usuario', 'usuario.id', '=','chamadas.id_agent')
        ->select('usuario.name as nome')
        ->whereDate('datetime_entry_queue',today())->get();



      ///  $chart->labels(['Chamadas Hoje']);
        $chart->dataset('Chamadas Atendida', 'bar', [$total_chamada_dia])->backgroundcolor('green');
        $chart->dataset('Chamadas Abandonadas', 'bar', [$total_lost_dia])->backgroundcolor('red');
        $chart->labels(["Chamadas hoje"]);


        $teste =  'name';
        // var_dump($chamadas);
        foreach($chamadas as  $chave => $valor){
            echo ('<div>testetestettestetestetestettestetestetesteteste'.$chave.date('m').'</div><br>');



        }



        // for ($i = 1; $i <= 2; $i++) {
        //     if ($i == 1) {
        //         $chartline->dataset('Chamadas Atendida', 'bar', [$total_chamada_dia])->backgroundcolor('blue');
        //       }
        //       if($i == 2){
        //         $chartline->dataset('Chamadas Abandonadas', 'bar', [$chamadas])->backgroundcolor('red');
        //       }
        //
        //   }

        $users = User::where(DB::raw("(DATE_FORMAT(created_at,'%Y'))"),date('Y'))
            				->get();
                $chart2 = Charts::database($users, 'bar', 'highcharts')
        			      ->title("Monthly new Register Users")
        			      ->elementLabel("Total Users")
        			      ->dimensions(1000, 500)
        			      ->responsive(false)
        			      ->groupByMonth(date('Y'), true);



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
