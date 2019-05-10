@extends('layouts.admin')
@section('conteudo')
<div class="row">
	<div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
		<h3>Chamadas Abandonadas </h3>
		@include('pabx.abandonadas.search')
	</div>

</div>

<!-- <input type="text" class="form-control pull-right" id="datetimepicker"> -->
<!-- <input type="text" class="form-control pull-right" id="datetimepicker"> -->
<div class="row">
	<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">

<script type="text/javascript">
$(function() {
				$( "#datetimepicker" ).datepicker();
				//Date range picker
				$('#reservation').datepicker();
					$('#reservation2').datepicker();
			});
	</script>

		<div class="table-responsive">
			<table class="table table-striped table-bordered table-condensed table-hover">
				<thead>
					<th>Id</th>
					<th>Telefone</th>
          <th>Dia</th>
          <th>status</th>
          <th>wait</th>

				</thead>
        @foreach ($lost as $call)
        <tr>
          <td>{{ $call->id}}</td>
          <td>{{ $call->callerid}}</td>
          <td>{{ $call->datetime_end}}</td>
          <td>{{ $call->status}}</td>
          <td>{{ $call->duration_wait}}</td>


        </tr>

        @endforeach
      </table>
      </div>
      {{$lost->render()}}
 </div>
 </div>

 @stop
