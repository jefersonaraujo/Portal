@extends('layouts.admin')
@section('conteudo')

<div class="row">
      
          <!-- Custom tabs (Charts with tabs)-->
          <div class="chart tab-pane" id="sales-chart" style="position: relative; height: 300px;">
            {!! $chart->container() !!}
            {!! $chart->script() !!}
          </div>
          <div class="chart tab-pane" id="sales-chart" style="position: relative; height: 300px;">
            {!! $chartline->container() !!}
            {!! $chartline->script() !!}
          </div>

             </div>


            <!-- /.row -->




@endsection
