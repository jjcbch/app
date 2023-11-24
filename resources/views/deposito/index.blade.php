Codigo de Empleado {{$empleado}}
codigo de afiliado {{$afi}}
nombre de afiliado {{$nombre}}

<a href="/deposito/create/{{$empleado}}/{{$afi}}/{{$nombre}}">Crear Desposito</a>
<table>
    <thead>
    <tr>
        <th>ID</th>
        <th>Idempleado</th>
        <th>IdAfiliado</th>
        <th>NombreAfiliado</th>
        <th>Fecha</th>
        <th>Cantidad</th>

    </tr>
    </thead>

    <tbody>
        @foreach($datosDeposito as $deposito)
        <tr>
        <th>{{$deposito->id}}</th>
        <th>{{$deposito->codempleado}}</th>
        <th>{{$deposito->codafiliado}}</th>
        <th>{{$deposito->nombreafiliado}}</th>
        <th>{{$deposito->fecha}}</th>
        <th>{{$deposito->cantidad}}</th>
        </tr>

        @endforeach

    </tbody>

</table>