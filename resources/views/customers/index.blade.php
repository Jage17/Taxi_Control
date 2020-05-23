@extends('layouts.app')

@section('content')
    
    <div class="row container-fluid py-8 px-4">
        <div class="col"><h1 class="pull-left">Clientes</h1>
        </div>
        <div class="col-sm-2"><h1 class="pull-right">
                <a class="btn btn-primary pull-right" style="margin-top: -10px;margin-bottom: 5px" href="{{ route('Customer.create') }}">Agregar Nuevo</a>
            </h1>
        </div>
        <div class="row py-2 px-1 ">
            <div class="box box-primary">
                <div class="box-body">
                    @include('customers.table')
                </div>
            </div>
        </div>
    </div>





@endsection
