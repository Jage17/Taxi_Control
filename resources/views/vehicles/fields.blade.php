<div class="row row py-3 px-3">
  <div class="col">
    <!-- Brand Field -->
    <div class="form-group col-sm-6">
        {!! Form::label('brand', 'Marca:') !!}
        {!! Form::text('brand', null, ['class' => 'form-control']) !!}
    </div>

    <!-- Model Field -->
    <div class="form-group col-sm-6">
        {!! Form::label('model', 'Modelo:') !!}
        {!! Form::text('model', null, ['class' => 'form-control']) !!}
    </div>

    <!-- Color Field -->
    <div class="form-group col-sm-6">
        {!! Form::label('color', 'Color:') !!}
        {!! Form::text('color', null, ['class' => 'form-control']) !!}
    </div>

  </div>
  <div class="col">
    <!-- No Placa Field -->
    <div class="form-group col-sm-6">
        {!! Form::label('no_placa', 'No Placa:') !!}
        {!! Form::text('no_placa', null, ['class' => 'form-control']) !!}
    </div>

    <!-- Year Field -->
    <div class="form-group col-sm-6">
        {!! Form::label('year', 'Año:') !!}
        {!! Form::text('year', null, ['class' => 'form-control']) !!}
    </div>

    <!-- Cabbie Id Field -->


    <!-- Submit Field -->
    <div class="form-group col-sm-12">
        {!! Form::submit('Guardar', ['class' => 'btn btn-primary']) !!}
        <a href="{{ route('Vehicle.index') }}" class="btn btn-default">Cancelar</a>
    </div>
  </div>

</div>
