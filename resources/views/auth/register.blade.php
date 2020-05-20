@extends('layouts.app', ['class' => 'bg-default'])

@section('content')
    @include('layouts.headers.guest')

    <div class="container mt--8 pb-5">
        <!-- Table -->
        <div class="row justify-content-center">
            <div class="col-lg-6 col-md-8">
                <div class="card bg-secondary shadow border-0">
                    <div class="card-body px-lg-5 py-lg-5">
                        <div class="text-center text-muted mb-4">
                            <h2>{{ __('Regístrate') }}</h2>
                        </div>
                        <form role="form" method="POST" action="{{ route('register') }}">
                            @csrf
                            <div class="form-group has-feedback{{ $errors->has('first_name') ? ' has-error' : '' }}">
                                <input type="text" class="form-control" name="first_name" value="{{ old('first_name') }}" placeholder="Primer Nombre">
                                    <span class="glyphicon glyphicon-user form-control-feedback"></span>

                                   @if ($errors->has('first_name'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('first_name') }}</strong>
                                        </span>
                                    @endif
                            </div>

                            <div class="form-group has-feedback{{ $errors->has('second_name') ? ' has-error' : '' }}">
                                <input type="text" class="form-control" name="second_name" value="{{ old('second_name') }}" placeholder="Segundo Nombre">
                                <span class="glyphicon glyphicon-user form-control-feedback"></span>
                                @if ($errors->has('second_name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('second_name') }}</strong>
                                    </span>
                                @endif
                            </div>

                            <div class="form-group has-feedback{{ $errors->has('surname') ? ' has-error' : '' }}">
                                <input type="text" class="form-control" name="surname" value="{{ old('surname') }}" placeholder="Primer Apellido">
                                <span class="glyphicon glyphicon-user form-control-feedback"></span>
                                @if ($errors->has('surname'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('surname') }}</strong>
                                    </span>
                                @endif
                            </div>

                            <div class="form-group has-feedback{{ $errors->has('second_surname') ? ' has-error' : '' }}">
                                <input type="text" class="form-control" name="second_surname" value="{{ old('second_surname') }}" placeholder="Segundo Apellido">
                                <span class="glyphicon glyphicon-user form-control-feedback"></span>
                                @if ($errors->has('second_surname'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('second_surname') }}</strong>
                                    </span>
                                @endif
                            </div>

                            <div class="form-group has-feedback{{ $errors->has('email') ? ' has-error' : '' }}">
                                <input type="email" class="form-control" name="email" value="{{ old('email') }}" placeholder="Email">
                                <span class="glyphicon glyphicon-envelope form-control-feedback"></span>

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>

                            <div class="form-group has-feedback{{ $errors->has('telephone') ? ' has-error' : '' }}">
                                <input type="text" class="form-control" name="telephone" value="{{ old('telephone') }}" placeholder="Telephone">
                                @if ($errors->has('telephone'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('telephone') }}</strong>
                                    </span>
                                @endif
                            </div>

                            <div class="form-group has-feedback{{ $errors->has('role_id') ? ' has-error' : '' }}">
                                <input type="hidden" class="form-control" name="role_id" value="1">
                                @if ($errors->has('role_id'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('role_id') }}</strong>
                                    </span>
                                @endif
                            </div>

                            <div class="form-group has-feedback{{ $errors->has('password') ? ' has-error' : '' }}">
                                <input type="password" class="form-control" name="password" placeholder="Contraseña">
                                <span class="glyphicon glyphicon-lock form-control-feedback"></span>

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>

                            <div class="form-group has-feedback{{ $errors->has('password_confirmation') ? ' has-error' : '' }}">
                                <input type="password" name="password_confirmation" class="form-control" placeholder="Confirmar Contraseña">
                                <span class="glyphicon glyphicon-lock form-control-feedback"></span>

                                @if ($errors->has('password_confirmation'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password_confirmation') }}</strong>
                                    </span>
                                @endif
                            </div>
                            <div class="text-center">
                                <button type="submit" class="btn btn-primary mt-4">{{ __('Crear mi cuenta') }}</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
