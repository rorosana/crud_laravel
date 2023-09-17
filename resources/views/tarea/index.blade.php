@extends('tema.app')

@section('title', "Listado de tareas")

@section('contenido')
<h3>Listado de tareas</h3>
<table class="table table-stripped table-hover">
    <thead>
        <tr>
            <th>
                Nombre
            </th>
            <th>
                Finalizada
            </th>
            <th>
                Fecha limite
            </th>
            <th>
                Urgencia
            </th>
            <th>
                Descripción
            </th>
            <th>
                Opciones
            </th>
        </tr>
    </thead>
    <tbody>
        @foreach($tareas as $tarea)
        <tr>
            <td>
                {{ $tarea->nombre }}
            </td>
            <td>
                {{ $tarea->estaFinalizada() }}
            </td>
            <td>
                @if ($tarea->fecha_limite)
                {{ \Carbon\Carbon::createFromTimestamp($tarea->fecha_limite)->format('H:i - d / m / Y') }}
                @else
                No se ha establecido una fecha límite
                @endif
            </td>
            <td>
                {{ $tarea->urgencia() }}
            </td>
            <td>
                {{ $tarea->descripcion }}
            </td>
            <td>
                <a href="{{ route('tarea.edit', $tarea) }}">Editar</a>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection
