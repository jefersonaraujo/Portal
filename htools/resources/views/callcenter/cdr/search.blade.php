{!!Form::open(array('url'=>'callcenter/cdr', 'method'=>'GET', 'autocomplete'=>'off', 'role' => 'search'))!!}

<div class="row">
	<div class="col-md-6">

		<div class="box box-danger">
			<div class="box-body">





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












{{Form::close()}}
