@extends('layouts.admin')
@section('conteudo')

<?php


use Carbon\Carbon;



?>
</script>
    <div class="info-box">
      <div class="row">
        <div class="col-md-3 col-sm-6 col-xs-12">
          <div class="info-box">
            <span class="info-box-icon bg-aqua"><i class="ion ion-ios-gear-outline"></i></span>

              <div class="info-box-content">
                  <span class="info-box-text">CPU Traffic</span>
                  <span class="info-box-number"> 55<small>%</small></span>
              </div>
                <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          </div>
    <!-- /.col -->
    <div class="col-md-3 col-sm-6 col-xs-12">
      <div class="info-box">
        <span class="info-box-icon bg-red"><i class="fa fa-google-plus"></i></span>

        <div class="info-box-content">
          <span class="info-box-text">Likes</span>
          <span class="info-box-number"> {{ $showCounts5}}</span>

        </div>
      <!-- /.info-box-content -->
    </div>
    <!-- /.info-box -->
    </div>
    <!-- /.col -->

    <!-- fix for small devices only -->
    <div class="clearfix visible-sm-block"></div>

    <div class="col-md-3 col-sm-6 col-xs-12">
    <div class="info-box">
      <span class="info-box-icon bg-green"><i class="ion ion-ios-cart-outline"></i></span>

      <div class="info-box-content">
        <span class="info-box-text">Sales</span>
        <span class="info-box-number">760</span>
      </div>
      <!-- /.info-box-content -->
    </div>
    <!-- /.info-box -->
    </div>
    <!-- /.col -->
    <div class="col-md-3 col-sm-6 col-xs-12">
    <div class="info-box">
      <span class="info-box-icon bg-yellow"><i class="ion ion-ios-people-outline"></i></span>

      <div class="info-box-content">
        <span class="info-box-text">New Members</span>
        <span class="info-box-number">2,000</span>
      </div>
      <!-- /.info-box-content -->
    </div>
    <!-- /.info-box -->
    </div>
    <!-- /.col -->
    </div>
    <!-- /.row -->
  </div>

  <div class="row">
  	<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
  		<div class="table-responsive">
  			<table class="table table-striped table-bordered table-condensed table-hover">
  				<thead>
  					<th>Id</th>


  				</thead>
          @foreach ($call as $calls)
          <tr>
            <td>{{ $calls->agent}}</td>
            <td>{{ $calls->agent}}</td>
          </tr>

          @endforeach
        </table>


        </div>
        {{$showCounts->render()}}

        @foreach ($call as $chamada)
        <!-- /.info-box -->
        <div class="info-box bg-green">
          <span class="info-box-icon"><i class="ion ion-ios-heart-outline"></i></span>

          <div class="info-box-content">
            <span class="info-box-text">Em Atendimento</span>
            <span class="info-box-number">Agent {{$chamada->agent}} em Atendimento  com {{$chamada->telefone}}  inicio  {{ $chamada->inicio}}
      <?php
      //$start  =  DateTime::createFromFormat('Y-m-d H:i:s', $chamada->inicio);
      $start  =  Carbon::parse($chamada->inicio);
      $end    = Carbon::now();

     printf($start->diffInHours($end) . ':' . $start->diff($end)->format('%I:%S'));
            ?>
          </span>
          </div>
          <!-- /.info-box-content -->
        </div>
        <!-- /.info-box -->
        @endforeach
         {{$call ->render()}}



        <div class="info-box bg-green">
          <span class="info-box-icon"><i class="ion ion-ios-heart-outline"></i></span>

          <div class="info-box-content">
            <span class="info-box-text">Em Atendimento</span>
            <span class="info-box-number">Agent  em Atendimento  com  </span> HORAS 
              <?php
              // $date1 = Carbon::createFromFormat('Y-m-d H:i:s', '2019-02-05 15:40:00');
              // // $date2 = Carbon::createFromFormat('Y-m-d H:i:s', '2019-02-05 16:00:00');
              // $date2 = Carbon::now();
              // // $value = $date2->diffInMinutes($hora);
              // $value = $date2->diff($hora);
              // //  printf("<br>NOW: %s",Carbon::now());
              // //
              // //
              // // printf("<br>HORA: %s",$hora);
              // printf("<br>HORA: %s",Carbon::now());
              // printf("<br>");
							//
							//
              // $start  = $hora;
              // $end    = Carbon::now();
              // ///$start->diff($end)->format('%H:%I:%S');
              // printf($start->diffInHours($end) . ':' . $start->diff($end)->format('%I:%S'));


 // printf("Now: %s", Carbon::now());  ?>     </div>
          <!-- /.info-box-content -->
        </div>
   </div>
   </div>


@endsection
