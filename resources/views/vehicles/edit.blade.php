@extends('layouts.app')

@section('content')

   <div class="content">
       <div class="box box-primary py-7 px-3">
           <h1>
               Vehiculo
           </h1>
           <div class="box-body">

               <div class="row">
                   <div class="col-md-12 col-md-offset-3">
                       {!! Form::model($vehicle, ['route' => ['Vehicle.update', $vehicle->id], 'method' => 'patch']) !!}

                       @include('vehicles.fields')

                       {!! Form::close() !!}
                   </div>
               </div>
           </div>
       </div>
   </div>




@endsection
