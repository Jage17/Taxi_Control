<div class="table-responsive">
    <table class="table" id="taxiDrivers-table">
        <thead>
            <tr>
                <th>Primer Nombre</th>
        <th>Segundo Nombre</th>
        <th>Primer Apellido</th>
        <th>Segundo Apellido</th>
        <th>Telefono</th>
        <th>Email</th>
{{--        <th>No Licencia</th>--}}
{{--        <th>EstadoTaxista Id</th>--}}
                <th colspan="3">Accion</th>
            </tr>
        </thead>
        <tbody>
        @foreach($Taxidrivers ?? '' as $taxidriver)
            <tr>
                <td>{{ $taxidriver->first_name }}</td>
            <td>{{ $taxidriver->second_name }}</td>
            <td>{{ $taxidriver->surname }}</td>
            <td>{{ $taxidriver->second_surname }}</td>
            <td>{{ $taxidriver->phone }}</td>
            <td>{{ $taxidriver->email }}</td>
{{--            <td>{{ $taxidriver->no_licencia }}</td>--}}
{{--            <td>{{ $taxidriver->statecabbie_id }}</td>--}}
                <td><a href="{{ route('TaxiDriver.show', [$taxidriver->id]) }}" class="btn btn-sm" >Ver</a></td>
                <td><a href="{{ route('TaxiDriver.edit', [$taxidriver->id]) }}" class="px-1 btn btn-sm">Editar</a></td>
                <td>
                    {!! Form::open(['route' => ['TaxiDriver.destroy', $taxidriver->id], 'method' => 'delete']) !!}
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
