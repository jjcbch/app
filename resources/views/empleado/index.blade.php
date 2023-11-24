<h1>Lista de empleados</h1>
<table>
    <thead>
    <tr>
        <th>ID</th>
        <th>Nombre</th>
        <th>Apellido</th>
        <th>Accion</th>
    </tr>
    </thead>

    <tbody>
        @foreach($datosEmpleado as $empleado)
        <tr>
            <th>{{$empleado->id}}</th>
            <th>{{$empleado->nombre}}</th>
            <th>{{$empleado->apellido}}</th>
            <th><a href="\afiliado\{{$empleado->id}}">Afiliados</a></th>
        </tr>

        @endforeach

    </tbody>

</table>