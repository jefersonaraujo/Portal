<?php

namespace sistemaLaravel\Http\Controllers;

use Illuminate\Http\Request;


use sistemaLaravel\Agent;
use Illuminate\Support\Facades\Redirect;
use sistemaLaravel\Http\Requests\AgentFormRequest;
use DB;
use PDF;

class AgentController extends Controller
{
  public function __construct(){}

  public function index(){
    // if($request){
    ///  $query=trim($request->get('searchText'));
      $agentes=DB::table('agent')->get();
    //  ->where('name','LIKE', '%'.$query.'%')
      // ->orderBy('number', 'desc')


      return view('callcenter.agent.index',[
        "agent"=>$agentes]);
  //  }

  }

  public function generatePDF()
{
    $data = ['title' => 'Welcome to HDTuto.com'];
    $agent = ['number' => '1', 'name' =>'teste'] ;
    //$data = array('title'=>'John Smith');

  //  $agentes=DB::table('agent')->get();

    //  $data= ["agent"=>$agentes];
    $pdf = PDF::loadView('myPDF',$data);

    // $pdf = PDF::loadHTML('<p>Hello World!!</p>');

    return $pdf->stream('ineedsolutions.pdf');
}

  public function nameMethod()
{
    // $products = Product::all();
    //
    // return \PDF::loadView('site.certificate.certificate', compact('products'))
    //             // Se quiser que fique no formato a4 retrato: ->setPaper('a4', 'landscape')
    //             ->download('nome-arquivo-pdf-gerado.pdf');
}
}
