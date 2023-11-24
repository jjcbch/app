
codigo de empleado {{$empleado}}

<a href="/afiliado/create/">crear afiliado</a>

<h1>Lista de afiliados</h1>
<table>
    <thead>
    <tr>
        <th>ID</th>
        <th>Nombre</th>
        <th>Apellido</th>
        <th>
            acciones
        </th>
    </tr>
    </thead>

    <tbody>
        @foreach($datosAfiliado as $afiliado)
        <tr>
            <th>{{$afiliado->id}}</th>
            <th>{{$afiliado->nombre}}</th>
            <th>{{$afiliado->apellido}}</th>
            <th><a href="/deposito/{{$empleado}}/{{$afiliado->id}}/{{$afiliado->nombre}}">Deposito</a></th>
            <th><a href="/retiro/{{$empleado}}/{{$afiliado->id}}">Retiro</a></th>
        </tr>

        @endforeach

    </tbody>



</table>