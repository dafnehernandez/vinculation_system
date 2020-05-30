<!-- Nombre Proyecto Field -->
<div class="form-group col-sm-6">
    <?php echo Form::label('nombre_proyecto', 'Nombre del proyecto:'); ?>

    <?php echo Form::text('nombre_proyecto', null, ['class' => 'form-control']); ?>

</div>

<!-- Tipo Proyecto Field -->
<div class="form-group col-sm-6">
    <?php echo Form::label('tipo_proyecto', 'Tipo de proyecto:'); ?>

    <?php echo Form::text('tipo_proyecto', null, ['class' => 'form-control']); ?>

</div>
<!-- Numeroparticipantes Proyecto Field -->
<div class="form-group col-sm-6">
    <?php echo Form::label('numeroparticipantes_proyecto', 'Número de participantes en el proyecto:'); ?>

    <?php echo Form::number('numeroparticipantes_proyecto', null, ['class' => 'form-control']); ?>

</div>

<!-- Tiempo Proyecto Field -->
<div class="form-group col-sm-6">
    <?php echo Form::label('tiempo_proyecto', 'Tiempo del proyecto:'); ?>

    <?php echo Form::number('tiempo_proyecto', null, ['class' => 'form-control']); ?>

</div>

<!-- Requisitos Proyecto Field -->
<div class="form-group col-sm-6">
    <?php echo Form::label('requisitos_proyecto', 'Requisitos del proyecto:'); ?>

    <?php echo Form::text('requisitos_proyecto', null, ['class' => 'form-control']); ?>

</div>

<!-- Descripcion Proyecto Field -->
<div class="form-group col-sm-6">
    <?php echo Form::label('descripcion_proyecto', 'Descripción del proyecto:'); ?>

    <?php echo Form::text('descripcion_proyecto', null, ['class' => 'form-control']); ?>

</div>

<!-- Empresa Proyecto Field -->
<div class="form-group col-sm-6">
    <?php echo Form::label('empresa_proyecto', 'Empresa que propone el proyecto:'); ?>

    <?php echo Form::text('empresa_proyecto', null, ['class' => 'form-control']); ?>

</div>

<!-- Empresa & User Field -->
<div class="form-group col-sm-6">
    <?php echo Form::hidden('repempresa_id', Auth::user()->id, ['class' => 'form-control']); ?>

</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    <?php echo Form::submit('Save', ['class' => 'btn btn-primary']); ?>

    <a href="<?php echo e(route('proyectos.index')); ?>" class="btn btn-default">Cancel</a>
</div><?php /**PATH /opt/lampp/htdocs/vinculation_system/resources/views/proyectos/fields.blade.php ENDPATH**/ ?>