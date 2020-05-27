
<div class="row">
  <div class="col">
    <!-- First Name Field -->
    <div class="form-group">
        {!! Form::label('first_name', 'Primer Nombre:') !!}
        <p>{{ $Customer->first_name }}</p>
    </div>

    <!-- Second Name Field -->
    <div class="form-group">
        {!! Form::label('second_name', 'Segundo Nomnre:') !!}
        <p>{{ $Customer->second_name }}</p>
    </div>

    <!-- Surname Field -->
    <div class="form-group">
        {!! Form::label('surname', 'Primer Apellido:') !!}
        <p>{{ $Customer->surname }}</p>
    </div>

    <!-- Second Surname Field -->
    <div class="form-group">
        {!! Form::label('second_surname', 'Segundo Apellido:') !!}
        <p>{{ $Customer->second_surname }}</p>
    </div>
  </div>

  <div class="col">
    <!-- Email Field -->
    <div class="form-group">
        {!! Form::label('email', 'Email:') !!}
        <p>{{ $Customer->email }}</p>
    </div>

    <!-- Phone Field -->
    <div class="form-group">
        {!! Form::label('telephone', 'Telefono:') !!}
        <p>{{ $Customer->telephone }}</p>
    </div>

    <!-- Created At Field -->
    <div class="form-group">
        {!! Form::label('created_at', 'Created At:') !!}
        <p>{{ $Customer->created_at }}</p>
    </div>

    <!-- Updated At Field -->
    <div class="form-group">
        {!! Form::label('updated_at', 'Updated At:') !!}
        <p>{{ $Customer->updated_at }}</p>
    </div>
  </div>

</div>
