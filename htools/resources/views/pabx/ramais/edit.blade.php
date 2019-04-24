@extends('layouts.admin')
@section('conteudo')
<div class="row">
		<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
			<h3>Alterar Concentrador : {{ $concentrador->descricao }}</h3>
			@if (count($errors)>0)
			<div class="alert alert-danger">
				<ul>
				@foreach ($errors->all() as $error)
					<li>{{$error}}</li>
				@endforeach
				</ul>
			</div>
			@endif

			{!!Form::model($concentrador, ['method'=>'PATCH', 'route'=>['concentrador.update', $concentrador->cod_concentrador]])!!}

            {{Form::token()}}
            <div class="form-group">
            	<label for="descricao">Descrição</label>
            	<input type="text"  name="descricao"  value=" {{ $concentrador->descricao }}" class="form-control" placeholder="Descrição...">
            </div>

            <div class="form-group">
              <label for="ip">Ip address</label>
              <input type="text" name="ip"  value=" {{ $concentrador->ip }}"class="form-control" placeholder="Ip address...">
            </div>

            <div class="form-group">
              <label for="api_port">Api Port</label>
              <input type="text" name="api_port"  value=" {{ $concentrador->api_port }}" class="form-control" placeholder="Api port...">
            </div>

            <div class="form-group">
              <label for="ssh_port">Ssh Port</label>
              <input type="text" name="ssh_port"  value=" {{ $concentrador->ssh_port }}" class="form-control" placeholder="Ssh Port...">
            </div>

            <div class="form-group">
              <label for="snmp">SNMP</label>
              <input type="text" name="snmp"  value=" {{ $concentrador->snmp }}" class="form-control" placeholder="SNMP...">
            </div>

            <div class="form-group">
              <label for="snmp_port">SNMP Port</label>
              <input type="text" name="snmp_port"  value=" {{ $concentrador->snmp_port }}"  class="form-control" placeholder="SNMP port...">
            </div>

            <div class="form-group">
              <label for="user">Usuario</label>
              <input type="text" name="user" class="form-control"  value=" {{ $concentrador->user }}"placeholder="Usuario MK...">
            </div>

            <div class="form-group">
              <label for="password">Senha</label>
              <input type="password" name="password"  value=" {{ $concentrador->password }}" class="form-control" placeholder="Password MK...">
            </div>

					

            <div class="form-group">
            	<button class="btn btn-primary" type="submit">Salvar</button>
            	<button class="btn btn-danger" type="reset">Cancelar</button>
            </div>

			{!!Form::close()!!}

		</div>
	</div>
@stop
