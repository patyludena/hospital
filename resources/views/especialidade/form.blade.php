<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('nombre') }}
            {{ Form::text('nombre', $especialidade->nombre, ['class' => 'form-control' . ($errors->has('nombre') ? ' is-invalid' : ''), 'placeholder' => 'Nombre']) }}
            {!! $errors->first('nombre', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('descripcion') }}
            {{ Form::text('descripcion', $especialidade->descripcion, ['class' => 'form-control' . ($errors->has('descripcion') ? ' is-invalid' : ''), 'placeholder' => 'Descripcion']) }}
            {!! $errors->first('descripcion', '<div class="invalid-feedback">:message</div>') !!}
        </div>

{{--         <div class="form-group">
            {{ Form::label('fech_registro') }}
            {{ Form::text('fech_registro', $especialidade->fech_registro, ['class' => 'form-control' . ($errors->has('fech_registro') ? ' is-invalid' : ''), 'placeholder' => 'Fech Registro']) }}
            {!! $errors->first('fech_registro', '<div class="invalid-feedback">:message</div>') !!}
        </div> --}}

        <div class="form-group">
            <label for="fech_registro">Fecha de registro</label>
            <input type="date" id="fech_registro" name="fech_registro" required="">
            {!! $errors->first('fech_registro', '<div class="invalid-feedback">:message</div>') !!}
        </div>


{{--         <div class="form-group">
            {{ Form::label('fech_modificacion') }}
            {{ Form::text('fech_modificacion', $especialidade->fech_modificacion, ['class' => 'form-control' . ($errors->has('fech_modificacion') ? ' is-invalid' : ''), 'placeholder' => 'Fech Modificacion']) }}
            {!! $errors->first('fech_modificacion', '<div class="invalid-feedback">:message</div>') !!}
        </div> --}}

        <div class="form-group">
            <label for="fech_modificacion">Fecha de modificación</label>
            <input type="date" id="fech_modificacion" name="fech_modificacion" required="">
            {!! $errors->first('fech_modificacion', '<div class="invalid-feedback">:message</div>') !!}
        </div>        

         <div class="form-group">
        {{--   {{ Form::label('estado') }}
           {{ Form::text('estado', $especialidade->estado, ['class' => 'form-control' . ($errors->has('estado') ? ' is-invalid' : ''), 'placeholder' => 'Estado']) }} 
           --}}
            <label for="estado">Estado</label>
            <select name="estado" id="estado">
              <option value="Activa">Activa</option>
              <option value="Inactiva">Inactiva</option>
            </select>
         {!! $errors->first('estado', '<div class="invalid-feedback">:message</div>') !!}   
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Guardar</button>
    </div>
</div>