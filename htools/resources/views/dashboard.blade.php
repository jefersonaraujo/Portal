@extends('layouts.admin')
@section('conteudo')

<?php


use Carbon\Carbon;



?>
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
                  <span class="info-box-number">0</span>
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
          <span class="info-box-number"></span>
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
        <span class="info-box-number">0</span>
      </div>
      <!-- /.info-box-content -->
    </div>
    <!-- /.info-box -->
    </div>
    <!-- /.col -->
    <div class="col-md-3 col-sm-6 col-xs-12">
    <div class="info-box">
      <span class="info-box-icon bg-yellow"><i class="ion-shuffle"></i></span>

      <div class="info-box-content">
        <span class="info-box-text">Efetuadas</span>
        <span class="info-box-number">0</span>
      </div>
      <!-- /.info-box-content -->
    </div>
    <!-- /.info-box -->
    </div>
    <!-- /.col -->
    </div>
    <!-- /.row -->
  </div>


<!-- grafico -->

@endsection
