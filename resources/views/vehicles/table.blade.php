<div class="table-responsive">
    <table class="table" id="vehicles-table">
        <thead>
            <tr>
                <th>Marca</th>
        <th>Modelo</th>
        <th>Color</th>
        <th>No Placa</th>
        <th>Año</th>
        <th>Taxista Id</th>
                <th colspan="3">Accion</th>
            </tr>
        </thead>
        <tbody>
        @foreach($vehicles as $vehicle)
            <tr>
                <td>{{ $vehicle->brand }}</td>
            <td>{{ $vehicle->model }}</td>
            <td>{{ $vehicle->color }}</td>
            <td>{{ $vehicle->no_placa }}</td>
            <td>{{ $vehicle->year }}</td>
            <td>{{ $vehicle->cabbie_id }}</td>
            <td><a href="{{ route('Vehicle.show', [$vehicle->id]) }}" class="btn btn-sm" >Ver</a></td>
            <td><a href="{{ route('Vehicle.edit', [$vehicle->id]) }}" class="px-1 btn btn-sm">Editar</a></td>
            <td>
                {!! Form::open(['route' => ['Vehicle.destroy', $vehicle->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    {!! Form::button('<a>borrar</a>', ['type' => 'submit', 'class' => 'btn btn-link btn-sm', 'onclick' => "return confirm('Esta seguro de Eliminar?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
