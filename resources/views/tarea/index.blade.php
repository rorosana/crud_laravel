@extends('tema.app')

@section('title', "Listado de tareas")

@section('contenido')
    <h3>Listado de tareas</h3>
    <table>
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
            </tr>
        </thead>
    </table>
@endsection
