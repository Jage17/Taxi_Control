@extends('layouts.app')

@section('content')

   <div class="content">

       <div class="box box-primary py-7 px-3">
           <h1>
               Carrera
           </h1>
           <div class="box-body">

               <div class="row">
                   <div class="col-md-12 col-md-offset-3">
                       {!! Form::model($Customer, ['route' => ['Races.update', $Race->id], 'method' => 'patch']) !!}

                       @include('races.fields')

                       {!! Form::close() !!}
                   </div>
               </div>
           </div>
       </div>
   </div>
@endsection
