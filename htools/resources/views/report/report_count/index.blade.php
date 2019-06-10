@extends('layouts.admin')
@section('conteudo')
<div class="row">
	<div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
		<h3>Todas as Chamadas </h3>
		@include('report.report_count.search')
	</div>
</div>

<div class="row">
	<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
		<div class="row no-print">
			<div class="col-xs-12">

				<a href="{{ route('pdf',['pdf' => $dataForm]) }}"><button type="button" class="btn btn-primary pull-right" style="margin-right: 5px;">
					<i class="fa fa-download"></i> Generate PDF
				</button></a>
			</div>
		</div>
		<div class="table-responsive">
			<!-- this row will not appear when printing -->


			<table class="table table-striped table-bordered table-condensed table-hover">

				<thead>
					<th>DIA</th>
					<th>STATUS</th>
          <th>COUNT</th>

				</thead>
        @foreach ($cham as $call)
        <tr>
          <td>{{ $call->dia}}</td>
          <td>{{ $call->status}}</td>
          <td>{{ $call->qtd}}</td>



        </tr>

        @endforeach
      </table>
      </div>

 </div>
 </div>
 @stop
