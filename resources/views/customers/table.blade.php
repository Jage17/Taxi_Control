<div class="table-responsive">
    <table class="table" id="customers-table">
        <thead>
            <tr>
                <th>Primer Nombre</th>
        <th>Segundo Nombre</th>
        <th>Primer Apellido</th>
        <th>Segundo Apellido</th>
        <th>Email</th>
        <th>Telefono</th>
                <th colspan="3">Accion</th>
            </tr>
        </thead>
        <tbody>
        @foreach($Customers as $customer)
            <tr>
                <td>{{ $customer->first_name }}</td>
            <td>{{ $customer->second_name }}</td>
            <td>{{ $customer->surname }}</td>
            <td>{{ $customer->second_surname }}</td>
            <td>{{ $customer->email }}</td>
            <td>{{ $customer->telephone }}</td>
                <td><a href="{{ route('Customer.show', [$customer->id]) }}" class="btn btn-sm" >Ver</a></td>
                <td><a href="{{ route('Customer.edit', [$customer->id]) }}" class="px-1 btn btn-sm">Editar</a></td>
                <td>
                    {!! Form::open(['route' => ['Customer.destroy', $customer->id], 'method' => 'delete']) !!}
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
