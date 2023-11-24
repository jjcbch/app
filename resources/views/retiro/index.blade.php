Codigo de Empleado {{$empleado}}
codigo de afiliado {{$afi}}
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
        @foreach($datosRetiro as $retiro)
        <tr>
        <th>{{$retiro->id}}</th>
        <th>{{$retiro->codempleado}}</th>
        <th>{{$retiro->codafiliado}}</th>
        <th>{{$retiro->nombreafiliado}}</th>
        <th>{{$retiro->fecha}}</th>
        <th>{{$retiro->cantidad}}</th>
        </tr>

        @endforeach

    </tbody>

</table>