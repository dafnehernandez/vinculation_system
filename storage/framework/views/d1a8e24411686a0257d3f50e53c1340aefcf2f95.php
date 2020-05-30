<!-- Nombre Catedratico Field -->
<div class="form-group">
    <?php echo Form::label('nombre_catedratico', 'Nombre Catedratico:'); ?>

    <p><?php echo e($catedratico->nombre_catedratico); ?></p>
</div>

<!-- Apellidos Catedratico Field -->
<div class="form-group">
    <?php echo Form::label('apellidos_catedratico', 'Apellidos Catedratico:'); ?>

    <p><?php echo e($catedratico->apellidos_catedratico); ?></p>
</div>

<!-- Especialidad Catedratico Field -->
<div class="form-group">
    <?php echo Form::label('especialidad_catedratico', 'Especialidad Catedratico:'); ?>

    <p><?php echo e($catedratico->especialidad_catedratico); ?></p>
</div>

<!-- Rfc Catedratico Field -->
<div class="form-group">
    <?php echo Form::label('rfc_catedratico', 'Rfc Catedratico:'); ?>

    <p><?php echo e($catedratico->rfc_catedratico); ?></p>
</div>

<!-- Usuario Id Field -->
<div class="form-group">
    <?php echo Form::label('usuario_id', 'Usuario Id:'); ?>

    <p><?php echo e($catedratico->usuario_id); ?></p>
</div>

<?php /**PATH /opt/lampp/htdocs/vinculation_system/resources/views/catedraticos/show_fields.blade.php ENDPATH**/ ?>