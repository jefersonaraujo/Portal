@extends('layouts.admin')
@section('conteudo')
<div class="row">
	<div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
		<h3>Todas as Chamadas <a href="concentrador/create"><button class="btn btn-success">Novo</button></a></h3>
		@include('pabx.chamadas.search')
	</div>
</div>

<div class="row">
	<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
		<div class="table-responsive">
			<table class="table table-striped table-bordered table-condensed table-hover">
				<thead>
					<th>Agent</th>
					<th>Telefone</th>
          <th>inicial</th>
          <th>final</th>
          <th>duração</th>
          <th>status</th>
          <th>wait</th>

				</thead>
        @foreach ($cham as $call)
        <tr>
          <td>{{ $call->nome}}</td>
          <td>{{ $call->telefone}}</td>
          <td>{{ $call->inicio}}</td>
          <td>{{ $call->fim}}</td>
          <td>{{ $call->duracao}}</td>
          <td>{{ $call->status}}</td>
          <td>{{ $call->espera}}</td>


        </tr>

        @endforeach
      </table>
      </div>
      {{$cham->render()}}
 </div>
 </div>
 @stop
