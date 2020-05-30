<!-- Nombre Proyecto Field -->
<div class="form-group">
    <?php echo Form::label('nombre_proyecto', 'Nombre Proyecto:'); ?>

    <p><?php echo e($proyecto->nombre_proyecto); ?></p>
</div>

<!-- Tipo Proyecto Field -->
<div class="form-group">
    <?php echo Form::label('tipo_proyecto', 'Tipo Proyecto:'); ?>

    <p><?php echo e($proyecto->tipo_proyecto); ?></p>
</div>

<!-- Numeroparticipantes Proyecto Field -->
<div class="form-group">
    <?php echo Form::label('numeroparticipantes_proyecto', 'Numeroparticipantes Proyecto:'); ?>

    <p><?php echo e($proyecto->numeroparticipantes_proyecto); ?></p>
</div>

<!-- Tiempo Proyecto Field -->
<div class="form-group">
    <?php echo Form::label('tiempo_proyecto', 'Tiempo Proyecto:'); ?>

    <p><?php echo e($proyecto->tiempo_proyecto); ?></p>
</div>

<!-- Requisitos Proyecto Field -->
<div class="form-group">
    <?php echo Form::label('requisitos_proyecto', 'Requisitos Proyecto:'); ?>

    <p><?php echo e($proyecto->requisitos_proyecto); ?></p>
</div>

<!-- Descripcion Proyecto Field -->
<div class="form-group">
    <?php echo Form::label('descripcion_proyecto', 'Descripcion Proyecto:'); ?>

    <p><?php echo e($proyecto->descripcion_proyecto); ?></p>
</div>

<!-- Empresa Proyecto Field -->
<div class="form-group">
    <?php echo Form::label('empresa_proyecto', 'Empresa Proyecto:'); ?>

    <p><?php echo e($proyecto->empresa_proyecto); ?></p>
</div>

<?php /**PATH /opt/lampp/htdocs/vinculation_system/resources/views/proyectos/show_fields.blade.php ENDPATH**/ ?>