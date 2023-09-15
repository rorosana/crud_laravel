@extends('tema.app')

@section('title', "Nueva tarea")

@section('contenido')
    <h3>Registrar tarea</h3>
    <form action="javascript:void(0);">
        <div class="row">
            <div class="col-sm-12">
                <label for="InputNombre" class="form-label">
                    * Nombre de la tarea.
                </label>
                <input type="text" name="nombre" id="InputNombre" class="form-control" placeholder="...">
            </div>
            <div class="col-sm-4">
                <div class="form-check">
                    <input type="checkbox" name="finalizada" id="InputFinalizada" class="form-check-input">
                    <label for="InputFinalizada" class="form-check-label">Finalizada</label>
                </div>
            </div>
        </div>
    </form>
@endsection
