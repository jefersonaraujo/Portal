@extends('layouts.admin')
@section('conteudo')
<script type="text/javascript">
    function autoRefreshPage()
    {
        window.location = window.location.href;
    }
    setInterval('autoRefreshPage()', 15000);
</script>
    <div class="info-box">
      <div class="row">
        <div class="col-md-3 col-sm-6 col-xs-12">
          <div class="info-box">
            <span class="info-box-icon bg-aqua"><i class="ion-ios-telephone"></i></span>

              <div class="info-box-content">
                  <span class="info-box-text">Total Chamadas</span>
                  <span class="info-box-number">{{ $showCounts}}</span>
              </div>
                <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          </div>
    <!-- /.col -->
    <div class="col-md-3 col-sm-6 col-xs-12">
      <div class="info-box">
        <span class="info-box-icon bg-red"><i class="ion-ios-telephone-outline"></i></span>

        <div class="info-box-content">
          <span class="info-box-text">Chamadas Perdidas</span>
          <span class="info-box-number">{{ $showCounts2}}</span>
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
      <span class="info-box-icon bg-green"><i class="ion-android-phone-portrait"></i></span>

      <div class="info-box-content">
        <span class="info-box-text">Em atendimento</span>
        <span class="info-box-number">{{ $showCounts3}}</span>
      </div>
      <!-- /.info-box-content -->
    </div>
    <!-- /.info-box -->
    </div>
    <!-- /.col -->
    <div class="col-md-3 col-sm-6 col-xs-12">
    <div class="info-box">
      <span class="info-box-icon bg-yellow"><i class="ion-speakerphone"></i></span>

      <div class="info-box-content">
        <span class="info-box-text">Na fila</span>
        <span class="info-box-number">{{ $showCounts4}}</span>
      </div>
      <!-- /.info-box-content -->
    </div>
    <!-- /.info-box -->
    </div>
    <!-- /.col -->
    </div>
    <!-- /.row -->
  </div>

  @foreach ($call as $chamada)
  <!-- /.info-box -->
  <div class="info-box bg-green">
    <span class="info-box-icon"><i class="ion ion-ios-heart-outline"></i></span>

    <div class="info-box-content">
      <span class="info-box-text">Em Atendimento</span>
      <span class="info-box-number">Agent {{$chamada->agent}} em Atendimento  com {{$chamada->telefone}} </span>
    </div>
    <!-- /.info-box-content -->
  </div>
  <!-- /.info-box -->
  @endforeach
   {{$call ->render()}}

  @foreach ($break as $pausa)
        <div class="info-box bg-yellow">
          <span class="info-box-icon"><i class="ion ion-ios-pricetag-outline"></i></span>

          <div class="info-box-content">
            <span class="info-box-text">Em Pausa</span>
            <span class="info-box-number">{{ $pausa->agent}}   esta em  pausa {{ $pausa->descricao}} desde as {{ $pausa->inicio}} </span>
          </div>
          <!-- /.info-box-content -->
        </div>


  @endforeach
   {{$break->render()}}

        <div class="row">
        	<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        		<div class="table-responsive">
        			<table class="table table-striped table-bordered table-condensed table-hover">
        				<thead>
        					<th>Id</th>
        					<th>Id_agent</th>



        				</thead>
                  @foreach ($call as $pausa)

                <tr>
                    <td>{{ $pausa->agent}}</td>
                  <td>{{ $pausa->telefone}}</td>



                </tr>
                  @endforeach

              </table>
              </div>

         </div>
         </div>
         {{$call->render()}}
<!-- grafico -->

@endsection
