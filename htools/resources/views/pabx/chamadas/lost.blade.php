@extends('layouts.admin')
@section('conteudo')
<div class="row">
	<div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
		<h3>Lista de Categorias <a href="concentrador/create"><button class="btn btn-success">Novo</button></a></h3>

	</div>
</div>

<div class="row">
	<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
		<div class="table-responsive">
			<table class="table table-striped table-bordered table-condensed table-hover">
				<thead>
					<th>Id</th>
					<th>Id_agent</th>
					<th>Telefone</th>
          <th>inicial</th>
          <th>final</th>
          <th>duração</th>
          <th>status</th>
          <th>wait</th>

				</thead>
        @foreach ($lost as $call)
        <tr>
          <td>{{ $call->id}}</td>
          <td>{{ $call->id_agent}}</td>
          <td>{{ $call->callerid}}</td>
          <td>{{ $call->datetime_init}}</td>
          <td>{{ $call->datetime_end}}</td>
          <td>{{ $call->duration}}</td>
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
