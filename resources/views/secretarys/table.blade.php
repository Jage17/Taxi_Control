<div class="table-responsive">
    <table class="table" id="secretarys-table">
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
        @foreach($Secretarys as $secretary)
            <tr>
                <td>{{ $secretary->first_name }}</td>
            <td>{{ $secretary->second_name }}</td>
            <td>{{ $secretary->surname }}</td>
            <td>{{ $secretary->second_surname }}</td>
            <td>{{ $secretary->email }}</td>
            <td>{{ $secretary->telephone }}</td>
                <td><a href="{{ route('secretary.show', [$secretary->id]) }}" class="btn btn-sm" >Ver</a></td>
                <td><a href="{{ route('secretary.edit', [$secretary->id]) }}" class="px-1 btn btn-sm">Editar</a></td>
                <td>
                    {!! Form::open(['route' => ['secretary.destroy', $secretary->id], 'method' => 'delete']) !!}
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
