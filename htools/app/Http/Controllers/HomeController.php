<?php

namespace sistemaLaravel\Http\Controllers;

use Illuminate\Http\Request;

use Charts;

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
        // $charts = Charts::new('line', 'highcharts')
        //     ->setTitle("My websites user")
        //     ->setLabels(["ES","FR","RU"])
        //     ->setElementLabel("TOTAL");
        return view('home');
    }
}
