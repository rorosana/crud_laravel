@csrf
<div class="row">
    <div class="col-sm-12">
        <label for="InputNombre" class="form-label">
            * Nombre de la tarea.
        </label>
        <input type="text" name="nombre" id="InputNombre" class="form-control" placeholder="..."  value="{{  old('nombre', $tarea->nombre) }}">
    </div>
    <div class="col-sm-4">
        <div class="form-check">
            <input type="checkbox" name="finalizada" id="InputFinalizada" class="form-check-input" @checked(old('finalizada', $tarea->finalizada))>
            <label for="InputFinalizada" class="form-check-label">Finalizada</label>
        </div>
    </div>
    <div class="col-sm-4">
        <label for="SelectUrgencia" class="form-label">* Urgencia</label>
        <select name="urgencia" class="form-select" id="SelectUrgencia">
            @for($i = 0; $i < count($urgencias); $i++)

            @endfor
        </select>

    </div>
    <div class="col-sm-4">
        <label for="InputFechaLimite" class="form-label">* Fecha límite</label>
        <input type="datetime-local" name="fecha_limite" id="InputFechaLimite" class="form-control"
            value="{{old('fecha_limite')}}">

    </div>
    <div class="col-sm-12">
        <label for="TextAreaDescripcion" class="form-label">Descripción</label>
        <textarea name="descripcion" id="TextAreaDescripcion" cols="30" rows="10"
            class="form-control">{{ old('descripcion') }}</textarea>
    </div>
    <div class="col-sm-12 text-end my-2">
        <button type="submit" class="btn btn-primary">Guardar</button>
    </div>
</div>
