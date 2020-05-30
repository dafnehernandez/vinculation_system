<!-- Nombre Empresa Field -->
<div class="form-group">
    {!! Form::label('nombre_empresa', 'Nombre de la empresa:') !!}
    <p>{{ $empresa->nombre_empresa }}</p> 
</div>

<!-- Domicilio Empresa Field -->
<div class="form-group">
    {!! Form::label('domicilio_empresa', 'Domicilio de la empresa:') !!}
    <p>{{ $empresa->domicilio_empresa }}</p>
</div>

<!-- Giro Empresa Field -->
<div class="form-group">
    {!! Form::label('giro_empresa', 'Giro de la empresa:') !!}
    <p>{{ $empresa->giro_empresa }}</p>
</div>

<!-- RFC Empresa Field -->
<div class="form-group">
    {!! Form::label('rfc_empresa', 'RFC Empresa:') !!}
    <p>{{ $empresa->rfc_empresa }}</p>
</div>



