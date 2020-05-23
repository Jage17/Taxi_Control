@extends('layouts.app')

@section('content')

    <div class="row container-fluid py-6 px-4">
        <h1>
            Vehiculo
        </h1>
    </div>
    <div class="row container-fluid px-4">
        <div class="row justify-content-fluid" style="padding-left: 20px">
            <div class="col">
                @include('vehicles.show_fields')
                <a href="{{ route('Vehicle.index') }}" class="btn btn-default">Salir</a>
            </div>
        </div>
    </div>


@endsection
