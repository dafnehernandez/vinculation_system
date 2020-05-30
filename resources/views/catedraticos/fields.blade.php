<!-- Nombre Catedratico Field -->
<div class="form-group col-sm-6">
    {!! Form::label('nombre_catedratico', 'Nombre Catedratico:') !!}
    {!! Form::text('nombre_catedratico', null, ['class' => 'form-control']) !!}
</div>

<!-- Apellidos Catedratico Field -->
<div class="form-group col-sm-6">
    {!! Form::label('apellidos_catedratico', 'Apellidos Catedratico:') !!}
    {!! Form::text('apellidos_catedratico', null, ['class' => 'form-control']) !!}
</div>

<!-- Especialidad Catedratico Field -->
<div class="form-group col-sm-6">
    {!! Form::label('especialidad_catedratico', 'Especialidad Catedratico:') !!}
    {!! Form::text('especialidad_catedratico', null, ['class' => 'form-control']) !!}
</div>

<!-- Rfc Catedratico Field -->
<div class="form-group col-sm-6">
    {!! Form::label('rfc_catedratico', 'Rfc Catedratico:') !!}
    {!! Form::text('rfc_catedratico', null, ['class' => 'form-control']) !!}
</div>

<!-- Usuario Id Field -->
<div class="form-group col-sm-6">
    {!! Form::hidden('usuario_id', Auth::user()->id, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('catedraticos.index') }}" class="btn btn-default">Cancel</a>
</div>
