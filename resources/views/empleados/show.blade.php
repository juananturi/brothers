
<x-layouts.main-layout> 

<h1>Detalles del Empleado</h1>

    <div class="card">
        <div class="card-body">
            <h5 class="card-title">Información del Empleado</h5>
            <ul class="list-group">
                <li class="list-group-item"><strong>Nombre:</strong> {{ $empleado->nombre }}</li>
                <li class="list-group-item"><strong>Cedula:</strong> {{ $empleado->cedula }}</li>
                <li class="list-group-item"><strong>Dirección:</strong> {{ $empleado->direccion }}</li>
                <li class="list-group-item"><strong>Departamento:</strong> {{ $empleado->departamento }}</li>
                <li class="list-group-item"><strong>Municipio:</strong> {{ $empleado->municipio }}</li>
                <li class="list-group-item"><strong>Barrio:</strong> {{ $empleado->barrio }}</li>
                <li class="list-group-item"><strong>Tipo de Empleado:</strong> {{ $empleado->tipo_empleado }}</li>
                <li class="list-group-item"><strong>Salario:</strong> {{ $empleado->salario }}</li>
                <li class="list-group-item"><strong>Usuario:</strong> {{ $empleado->usuario }}</li>
            </ul>
        </div>
    </div>

    <a href="{{ route('empleados.edit', $empleado->id) }}" class="btn btn-primary mt-3">Editar Empleado</a>
    <a href="{{ route('empleados.index') }}" class="btn btn-secondary mt-3">Volver a la Lista</a>

</x-layouts.main-layout> 
