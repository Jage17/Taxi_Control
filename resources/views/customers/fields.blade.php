<div class="row py-3 px-3">
  <div class="col">

    <div class="form-group col-sm-12">
        {!! Form::label('first_name', 'Primer Nombre:') !!}
        {!! Form::text('first_name', null, ['class' => 'form-control']) !!}
    </div>

    <!-- Second Name Field -->
    <div class="form-group col-sm-12">
        {!! Form::label('second_name', 'Segundo Nombre:') !!}
        {!! Form::text('second_name', null, ['class' => 'form-control']) !!}
    </div>

    <!-- Surname Field -->
    <div class="form-group col-sm-12">
        {!! Form::label('surname', 'Primer Apellido:') !!}
        {!! Form::text('surname', null, ['class' => 'form-control']) !!}
    </div>

    <!-- Submit Field -->
    <div class="form-group col-sm-12">
        {!! Form::submit('Guardar', ['class' => 'btn btn-primary']) !!}
        <a href="{{ route('Customer.index') }}" class="btn btn-default">Cancelar</a>
    </div>

  </div>
  <div class="col">

    <div class="form-group col-sm-12">
        {!! Form::label('second_surname', 'Segundo Apellido:') !!}
        {!! Form::text('second_surname', null, ['class' => 'form-control']) !!}
    </div>

    <!-- Email Field -->
    <div class="form-group col-sm-12">
        {!! Form::label('email', 'Email:') !!}
        {!! Form::email('email', null, ['class' => 'form-control']) !!}
    </div>

    <!-- Phone Field -->
    <div class="form-group col-sm-12">
        {!! Form::label('telephone', 'Telefono:') !!}
        {!! Form::text('telephone', null, ['class' => 'form-control']) !!}
    </div>



  </div>

</div>
