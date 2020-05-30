<!-- Nombre Proyecto Field -->
<div class="form-group col-sm-6">
    {!! Form::label('nombre_proyecto', 'Nombre del proyecto:') !!}
    {!! Form::text('nombre_proyecto', null, ['class' => 'form-control']) !!}
</div>

<!-- Tipo Proyecto Field -->
<div class="form-group col-sm-6">
    {!! Form::label('tipo_proyecto', 'Tipo de proyecto:') !!}
    {!! Form::text('tipo_proyecto', null, ['class' => 'form-control']) !!}
</div>
<!-- Numeroparticipantes Proyecto Field -->
<div class="form-group col-sm-6">
    {!! Form::label('numeroparticipantes_proyecto', 'Número de participantes en el proyecto:') !!}
    {!! Form::number('numeroparticipantes_proyecto', null, ['class' => 'form-control']) !!}
</div>

<!-- Tiempo Proyecto Field -->
<div class="form-group col-sm-6">
    {!! Form::label('tiempo_proyecto', 'Tiempo del proyecto:') !!}
    {!! Form::number('tiempo_proyecto', null, ['class' => 'form-control']) !!}
</div>

<!-- Requisitos Proyecto Field -->
<div class="form-group col-sm-6">
    {!! Form::label('requisitos_proyecto', 'Requisitos del proyecto:') !!}
    {!! Form::text('requisitos_proyecto', null, ['class' => 'form-control']) !!}
</div>

<!-- Descripcion Proyecto Field -->
<div class="form-group col-sm-6">
    {!! Form::label('descripcion_proyecto', 'Descripción del proyecto:') !!}
    {!! Form::text('descripcion_proyecto', null, ['class' => 'form-control']) !!}
</div>

<!-- Empresa Proyecto Field -->
<div class="form-group col-sm-6">
    {!! Form::label('empresa_proyecto', 'Empresa que propone el proyecto:') !!}
    {!! Form::text('empresa_proyecto', null, ['class' => 'form-control']) !!}
</div>

<!-- Empresa & User Field -->
<div class="form-group col-sm-6">
    {!! Form::hidden('repempresa_id', Auth::user()->id, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('proyectos.index') }}" class="btn btn-default">Cancel</a>
</div>