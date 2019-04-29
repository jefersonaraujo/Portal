@extends('layouts.admin')
@section('conteudo')
<div class="row">
	<div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
		<h3>Lista de Ramais <a href="concentrador/create"><button class="btn btn-success">Novo</button></a></h3>
		@include('pabx.ramais.search')
	</div>
</div>

<div class="row">
	<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
		<div class="table-responsive">
			<table class="table table-striped table-bordered table-condensed table-hover">
				<thead>
					<th>Id</th>
					<th>Nome</th>
					<th>Ip</th>
          <th>Latitude</th>

					<th>Opções</th>
				</thead>
        @foreach ($agent as $ag)
        <tr>
          <td>{{ $ag->id}}</td>
          <td>{{ $ag->name}}</td>
          <td>{{ $ag->password}}</td>
          <td>{{ $ag->estatus}}</td>

        </tr>

        @endforeach
      </table>
      </div>
      {{$agent->render()}}
 </div>
 </div>
 @stop
