@extends('layouts.admin')
@section('conteudo')
<div class="row">
	<div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
		<h3>Break </h3>

	</div>
</div>

<div class="row">
	<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
		<div class="table-responsive">
			<table class="table table-striped table-bordered table-condensed table-hover">
				<thead>
					<th>Id</th>
					<th>Agent</th>
					<th>Tipo</th>
          <th>Dia</th>
          <th>Duracao</th>



				</thead>
        @foreach ($pausa as $bkeak)
        <tr>
          <td>{{ $bkeak->cod}}</td>
          <td>{{ $bkeak->agent}}</td>
          <td>{{ $bkeak->descricao}}</td>
          <td>{{ $bkeak->dia}}</td>
          <td>{{ $bkeak->duracao}}</td>




        </tr>

        @endforeach
      </table>
      </div>
      {{$pausa->render()}}
 </div>
 </div>
 @stop
