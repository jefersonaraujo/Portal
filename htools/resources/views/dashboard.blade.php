@extends('layouts.admin')
@section('conteudo')



   <div class="row">
       <div class="col-md-6">
           <div class="panel panel-default">

               <div class="panel-body">
                 {!! $chartline->container() !!}
                 {!! $chartline->script() !!}
               </div>
           </div>
       </div>

       <div class="col-md-6">
           <div class="panel panel-default">

               <div class="panel-body">
                 {!! $chart->container() !!}
                 {!! $chart->script() !!}
               </div>
           </div>
       </div>

   </div>

   <div class="col-md-6">
       <div class="panel panel-default">

           <div class="panel-body">
             {!! $chart2->container() !!}
             {!! $chart2->script() !!}

           </div>
       </div>
   </div>

</div>










@endsection
