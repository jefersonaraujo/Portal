@extends('layouts.admin')
@section('conteudo')
<div class="row">
	<div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
		<h3>Lista de Categorias <a href="concentrador/create"><button class="btn btn-success">Novo</button></a></h3>
		@include('cadastro.concentrador.search')
	</div>
</div>

<div class="row">
	<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
		<div class="table-responsive">
			<table class="table table-striped table-bordered table-condensed table-hover">
				<thead>
					<th>Id</th>
					<th>Nome</th>
					<th>Descrição</th>
					<th>Opções</th>
				</thead>
        @foreach ($concentrador as $con)
        <tr>
          <td>{{ $con->cod_concentrador}}</td>
          <td>{{ $con->descricao}}</td>
          <td>{{ $con->descricao}}</td>
          <td>
            <a href="{{URL::action('ConcentradorController@edit',$con->cod_concentrador)}}"><button class="btn btn-info">Editar</button></a>
            <a href="" data-target="#modal-delete-{{$con->cod_concentrador}}" data-toggle="modal"><button class="btn btn-danger">Excluir</button></a>
          </td>
        </tr>
        @include('cadastro.concentrador.modal')
        @endforeach
      </table>
      </div>
      {{$concentrador->render()}}
 </div>
 </div>
 @stop
