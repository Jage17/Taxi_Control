@extends('layouts.app')

@section('content')

<div class="row container-fluid py-8 px-4">
    <div class="col"><h1 class="pull-left">Nueva Secretaria</h1></div>
        <div class="row py-2 px-1 ">
            <div class="box box-primary">
                <div class="box-body">
                                    
                    <form method="POST" action="{{ url('Customer') }}">
                        {{ csrf_field() }}

                        <input type="text" class="form-control" name="first_name" value="{{ old('first_name') }}" placeholder="Primer Nombre">

                        <input type="text" class="form-control" name="second_name" value="{{ old('second_name') }}" placeholder="Segundo Nombre">

                        <input type="text" class="form-control" name="surname" value="{{ old('surname') }}" placeholder="Primer Apellido">

                        <input type="text" class="form-control" name="second_surname" value="{{ old('second_surname') }}" placeholder="Segundo Apellido">
                        
                        <input type="email" class="form-control" name="email" value="{{ old('email') }}" placeholder="Email">

                        <input type="text" class="form-control" name="telephone" value="{{ old('telephone') }}" placeholder="Telefono">

                        <input type="password" class="form-control" name="password" placeholder="Contraseña">

                        <button type="submit">Crear usuario</button>
                    </form>
                    
                </div>
            </div>
        </div>
</div>    



@endsection
