<!-- Nombre Empresa Field -->
<div class="form-group col-sm-6">
    {!! Form::label('nombre_empresa', 'Nombre de la empresa:') !!}
    {!! Form::text('nombre_empresa', null, ['class' => 'form-control']) !!}
</div>

<!-- Domicilio Empresa Field -->
<div class="form-group col-sm-6">
    {!! Form::label('domicilio_empresa', 'Domicilio de la empresa:') !!}
    {!! Form::text('domicilio_empresa', null, ['class' => 'form-control']) !!}
</div>

<!-- Giro Empresa Field -->
<div class="form-group col-sm-6">
    {!! Form::label('giro_empresa', 'Giro Empresa:') !!}
    {!! Form::text('giro_empresa', null, ['class' => 'form-control']) !!}
</div>

<!-- Rfc Empresa Field -->
<div class="form-group col-sm-6">
    {!! Form::label('rfc_empresa', 'RFC Empresa:') !!}
    {!! Form::text('rfc_empresa', null, ['class' => 'form-control']) !!}
</div>

<!-- Usuario Id Field -->
<div class="form-group col-sm-6">
    {!! Form::hidden('usuario_id', Auth::user()->id, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('empresas.index') }}" class="btn btn-default">Cancel</a>
</div>
