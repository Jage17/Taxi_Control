<div class="table-responsive">
  <div class="table-container">
          <table id="mytable" class="table table-bordred table-striped">
           <thead>
             <th>Cliente</th>
             <th>Taxista</th>
             <th>Direccion Salida</th>
             <th>Direccion llegada</th>
             <th>Kilometraje</th>
             <th>Monto Carrera</th>
             <th>Monto Comision</th>
           </thead>
           {{-- <tbody>
            @if($libros->count())
            @foreach($libros as $libro)
            <tr>
              <td>{{$libro->nombre}}</td>
              <td>{{$libro->resumen}}</td>
              <td>{{$libro->npagina}}</td>
              <td>{{$libro->edicion}}</td>
              <td>{{$libro->autor}}</td>
              <td>{{$libro->precio}}</td>
              <td><a class="btn btn-primary btn-xs" href="{{action('LibroController@edit', $libro->id)}}" ><span class="glyphicon glyphicon-pencil"></span></a></td>
              <td>
                <form action="{{action('LibroController@destroy', $libro->id)}}" method="post">
                 {{csrf_field()}}
                 <input name="_method" type="hidden" value="DELETE">

                 <button class="btn btn-danger btn-xs" type="submit"><span class="glyphicon glyphicon-trash"></span></button>
               </td>
             </tr>
             @endforeach
             @else
             <tr>
              <td colspan="8">No hay registro !!</td>
            </tr>
            @endif
          </tbody> --}}

        </table>
</div>
