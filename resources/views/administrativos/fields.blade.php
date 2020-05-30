<!-- Nombre Admin Field -->
<div class="form-group col-sm-6">
    {!! Form::label('nombre_admin', 'Nombre:') !!}
    {!! Form::text('nombre_admin', null, ['class' => 'form-control']) !!}
</div>

<!-- Apellidos Admin Field -->
<div class="form-group col-sm-6">
    {!! Form::label('apellidos_admin', 'Apellidos:') !!}
    {!! Form::text('apellidos_admin', null, ['class' => 'form-control']) !!}
</div>

<!-- Rfc Admin Field -->
<div class="form-group col-sm-6">
    {!! Form::label('rfc_admin', 'RFC:') !!}
    {!! Form::text('rfc_admin', null, ['class' => 'form-control']) !!}
</div>

<!-- Puesto Admin Field -->
<div class="form-group col-sm-6">
    {!! Form::label('puesto_admin', 'Puesto:') !!}
    {!! Form::text('puesto_admin', null, ['class' => 'form-control']) !!}
</div>

<!-- Usuario Id Field-->
<div class="form-group col-sm-6">
    {!! Form::hidden('usuario_id', Auth::user()->id, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('administrativos.index') }}" class="btn btn-default">Cancel</a>
</div>

