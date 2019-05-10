{!!Form::open(array('url'=>'pabx/chamadas', 'method'=>'GET', 'autocomplete'=>'off', 'role' => 'search'))!!}

<div class="form-group">
	<div class="input-group">
		<input type="text" class="form-control" name="searchText" placeholder="Buscar..." value="{{$searchText}}">
		<span class="input-group-btn">
			<button type="submit" class="btn btn-primary">Buscar</button>
		</span>
	</div>
</div>

<!-- Date and time range -->
<div class="form-group">
	<label>Date range button:</label>

	<div class="input-group">
		<button type="button" class="btn btn-default pull-right" id="daterange-btn">
			<span>
				<i class="fa fa-calendar"></i> Date range picker
			</span>
			<i class="fa fa-caret-down"></i>
		</button>
	</div>
</div>
<!-- /.form group -->

{{Form::close()}}
