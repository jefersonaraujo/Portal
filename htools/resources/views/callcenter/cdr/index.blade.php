@extends('layouts.admin')
@section('conteudo')
<div class="row">
	<div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">


	</div>
</div>

<div class="row">
	<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
		<div class="table-responsive">
			<table class="table table-striped table-bordered table-condensed table-hover">
				<thead>
					<th>Data</th>
					<th>Origem</th>
					<th>Destino</th>
					<th>duracao</th>
          <th>Status</th>

				</thead>
        @foreach ($cham as $ag)
        <tr>
					<td>{{ $ag->data}}</td>
          <td>{{ $ag->origem}}</td>
          <td>{{ $ag->destino}}</td>
					<td>{{ $ag->duracao}}</td>
          <td>{{ $ag->status}}</td>



        </tr>

        @endforeach
      </table>
      </div>
      {{$cham->render()}}
 </div>
 </div>
 @stop
