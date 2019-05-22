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
    $data = ['title' => 'Welcome to HDTuto.com'];
    $pdf = PDF::loadView('myPDF', $data);

    return $pdf->stream('itsolutionstuff.pdf');
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
