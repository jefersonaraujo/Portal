@extends('layouts.admin')
@section('conteudo')

{!!Form::open(array('url'=>'pabx/abandonadas', 'method'=>'GET', 'autocomplete'=>'off', 'role' => 'search'))!!}

<div class="row">
	<div class="col-md-6">

		<div class="box box-danger">
			<div class="box-body">



				<!-- Date range -->
				<div class="form-group">
					<label>Do dia:</label>

					<div class="input-group">
						<div class="input-group-addon">
							<i class="fa fa-calendar"></i>
						</div>
						<input type="text" class="form-control pull-right" data-date-format='yyyy-mm-dd' name="from" id="from" value="2019-05-01">
					</div>
					<!-- /.input group -->
				</div>
				<!-- /.form group -->
				<div class="form-group">
					<label>Até:</label>

					<div class="input-group">
						<div class="input-group-addon">
							<i class="fa fa-calendar"></i>
						</div>
						<input type="text" class="form-control pull-right" data-date-format='yyyy-mm-dd' name="to" id="to" value="2019-05-02">
					</div>
					<!-- /.input group -->
				</div>
				<!-- /.form group -->

			</div>
			<!-- /.box-body -->
		</div>

		<div class="form-group">
			<div class="input-group">
				<div class="input-group-addon">
					<i class="fa fa-phone"></i>
				</div>
				<input type="text" class="form-control" name="searchText" placeholder="Telefone..." value="{{$searchText}}">
			   	<span class="input-group-btn">
					<button type="submit" class="btn btn-primary">Buscar</button>
				</span>
			</div>
		</div>
	</div>
	<!-- /.col (left) -->

	<!-- /.col (right) -->
</div>

<div class="row">
	<div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
		<h3>Lista de Agentes <a href="#"></a></h3>

	</div>
</div>

<div class="row">
	<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
		<div class="table-responsive">
			<table class="table table-striped table-bordered table-condensed table-hover">
				<thead>
					<th>Cod</th>
					<th>Nome</th>

          <th>Pass</th>
          <th>Status</th>

				</thead>

        <tr>
          <td> fsdf</td>
          <td></td>
          <td> </td>
          <td>d </td>


        </tr>


      </table>
      </div>

 </div>
 </div>
 @stop
