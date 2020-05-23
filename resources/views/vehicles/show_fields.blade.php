
<div class="row">
  <div class="col">
    <!-- Brand Field -->
    <div class="form-group">
        {!! Form::label('brand', 'Marca:') !!}
        <p>{{ $vehicle->brand }}</p>
    </div>

    <!-- Model Field -->
    <div class="form-group">
        {!! Form::label('model', 'Modelo:') !!}
        <p>{{ $vehicle->model }}</p>
    </div>

    <!-- Color Field -->
    <div class="form-group">
        {!! Form::label('color', 'Color:') !!}
        <p>{{ $vehicle->color }}</p>
    </div>
  </div>
  <div class="col">

    <!-- No Placa Field -->
    <div class="form-group">
        {!! Form::label('no_placa', 'No Placa:') !!}
        <p>{{ $vehicle->no_placa }}</p>
    </div>

    <!-- Year Field -->
    <div class="form-group">
        {!! Form::label('year', 'Año:') !!}
        <p>{{ $vehicle->year }}</p>
    </div>

    <!-- Cabbie Id Field -->


    <!-- Created At Field -->
    <div class="form-group">
        {!! Form::label('created_at', 'Created At:') !!}
        <p>{{ $vehicle->created_at }}</p>
    </div>

    <!-- Updated At Field -->
    <div class="form-group">
        {!! Form::label('updated_at', 'Updated At:') !!}
        <p>{{ $vehicle->updated_at }}</p>
    </div>
  </div>

</div>
