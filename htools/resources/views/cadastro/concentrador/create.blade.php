@extends('layouts.admin')
@section('conteudo')

<div class="row">
        	<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
          <div class="form-group">


            <label>USUARIO-AD</label>

            <input type="text" name="usuario" class="form-control" placeholder="ADICIONAR NOME" required="" value="">

          </div>


          <div class="form-group">
            <label>STATUS</label>
              <select name="status" class="form-control select2"  style="width: 100%;">

                  <option value=""> </option>

              <option value="ATIVO">ATIVO</option>
              <option value="INATIVO">INATIVO</option>
              </select>
            </select>
          </div>
          <!-- /.form-group -->
        </div>
        <!-- /.col -->
        <div class="col-md-6">
          <div class="form-group">
            <label>SETOR</label>
            <select name="setor" class="form-control select2" style="width: 100%;">


                  <option value=""></option>

              <option value="suporte">SUPORTE</option>
              <option value="getic">GETIC</option>
              <option value="comercial">COMERCIAL</option>
              <option value="geinfra">GEINFRA</option>
              <option value="financeiro">FINANCEIRO</option>
            </select>
          </div>
          <!-- /.form-group -->

          <div class="form-group">
            <label>DESCRICAO</label>

            <div class="input-group">
              <div class="input-group-addon">
                <i class="fa  fa-file-text-o"></i>
              </div>
              <input type="text" name="descricao" class="form-control" placeholder="DESCRICAO"  value="">
            </div>
            <!-- /.input group -->
          </div>
          <!-- /.form-group -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->


<div class="row">
		<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
			<h3>Novo Concentrador</h3>
			@if (count($errors)>0)
			<div class="alert alert-danger">
				<ul>
				@foreach ($errors->all() as $error)
					<li>{{$error}}</li>
				@endforeach
				</ul>
			</div>
			@endif

			{!!Form::open(array('url'=>'cadastro/concentrador','method'=>'POST','autocomplete'=>'off'))!!}
            {{Form::token()}}
            <div class="form-group">
            	<label for="descricao">Descrição</label>
            	<input type="text" name="descricao" class="form-control" placeholder="Descrição...">
            </div>

            <div class="form-group">
              <label for="ip">Ip address</label>
              <input type="text" name="ip" class="form-control" placeholder="Ip address...">
            </div>

            <div class="form-group">
              <label for="api_port">Api Port</label>
              <input type="text" name="api_port" class="form-control" placeholder="Api port...">
            </div>

            <div class="form-group">
              <label for="ssh_port">Ssh Port</label>
              <input type="text" name="ssh_port" class="form-control" placeholder="Ssh Port...">
            </div>

            <div class="form-group">
              <label for="snmp">SNMP</label>
              <input type="text" name="snmp" class="form-control" placeholder="SNMP...">
            </div>

            <div class="form-group">
              <label for="snmp_port">SNMP Port</label>
              <input type="text" name="snmp_port" class="form-control" placeholder="SNMP port...">
            </div>

            <div class="form-group">
              <label for="user">Usuario</label>
              <input type="text" name="user" class="form-control" placeholder="Usuario MK...">
            </div>

            <div class="form-group">
              <label for="password">Senha</label>
              <input type="password" name="password" class="form-control" placeholder="Password MK...">
            </div>


            <div class="form-group">
            	<button class="btn btn-primary" type="submit">Salvar</button>
            	<button class="btn btn-danger" type="reset">Cancelar</button>
            </div>

			{!!Form::close()!!}

		</div>
	</div>
@stop
