<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('especialidad_id') }}
            {{ Form::select('especialidad_id', $especialidades , $cita->especialidad_id, ['class' => 'form-control' . ($errors->has('especialidad_id') ? ' is-invalid' : ''), 'placeholder' => 'Especialidad Id']) }}
            {!! $errors->first('especialidad_id', '<div class="invalid-feedback">:message</div>') !!}
        </div>

        <div class="form-group">
            <label for="fecha">Fecha</label>
            <input type="date" id="fecha" name="fecha" required="">
        </div>

        <div class="form-group">
            <label for="hora">Hora</label>            
            <input type="time" name="hora" list="listalimitestiempo">
            <datalist id="listalimitestiempo">
                <option value="07:00">
                <option value="07:30">
                <option value="08:00">
                <option value="08:30">
                <option value="09:00">
                <option value="09:30">
                <option value="10:00">
                <option value="10:30">
                <option value="11:00">
                <option value="11:30">
                <option value="12:00">
                <option value="12:30">
                <option value="13:00">
                <option value="13:30">
                <option value="14:00">
                <option value="14:30">
                <option value="14:30">                     
            </datalist>
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Guardae</button>
    </div>
</div>