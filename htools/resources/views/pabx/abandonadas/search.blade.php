{!!Form::open(array('url'=>'pabx/abandonadas', 'method'=>'GET', 'autocomplete'=>'off', 'role' => 'search'))!!}
<?php


 ?>
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












{{Form::close()}}
