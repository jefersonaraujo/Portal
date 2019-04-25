<?php

namespace sistemaLaravel\Http\Controllers;

use Illuminate\Http\Request;


use sistemaLaravel\Agent;
use Illuminate\Support\Facades\Redirect;
use sistemaLaravel\Http\Requests\AgentFormRequest;
use DB;
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

}
