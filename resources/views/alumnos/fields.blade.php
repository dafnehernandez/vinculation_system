<!-- Nombre Alumno Field -->
<div class="form-group col-sm-6">
    {!! Form::label('nombre_alumno', 'Nombre:') !!}
    {!! Form::text('nombre_alumno', null, ['class' => 'form-control']) !!}
</div>

<!-- Apellidos Alumno Field -->
<div class="form-group col-sm-6">
    {!! Form::label('apellidos_alumno', 'Apellidos:') !!}
    {!! Form::text('apellidos_alumno', null, ['class' => 'form-control']) !!}
</div>

<!-- Domicilio Alumno Field -->
<div class="form-group col-sm-6">
    {!! Form::label('domicilio_alumno', 'Domicilio:') !!}
    {!! Form::text('domicilio_alumno', null, ['class' => 'form-control']) !!}
</div>

<!-- Carrera Alumno Field -->
<div class="form-group col-sm-6">
    {!! Form::label('carrera_alumno', 'Carrera:') !!}
    {!! Form::text('carrera_alumno', null, ['class' => 'form-control']) !!}
   
</div>

<!-- Semestre Alumno Field -->
<div class="form-group col-sm-6">
    {!! Form::label('semestre_alumno', 'Semestre:') !!}
    {!! Form::text('semestre_alumno', null, ['class' => 'form-control']) !!}
</div>

<!-- Numcontrol Alumno Field -->
<div class="form-group col-sm-6">
    {!! Form::label('numcontrol_alumno', 'Número de control:') !!}
    {!! Form::text('numcontrol_alumno', null, ['class' => 'form-control']) !!}
</div>

<!-- Usuario Id Field -->
<div class="form-group col-sm-6">
     {!! Form::hidden('usuario_id', Auth::user()->id, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('alumnos.index') }}" class="btn btn-default">Cancel</a>
</div>
