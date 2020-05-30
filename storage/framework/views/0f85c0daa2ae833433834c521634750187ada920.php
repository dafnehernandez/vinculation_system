<!-- Nombre Admin Field -->
<div class="form-group">
    <?php echo Form::label('nombre_admin', 'Nombre Admin:'); ?>

    <p><?php echo e($administrativo->nombre_admin); ?></p>
</div>

<!-- Apellidos Admin Field -->
<div class="form-group">
    <?php echo Form::label('apellidos_admin', 'Apellidos Admin:'); ?>

    <p><?php echo e($administrativo->apellidos_admin); ?></p>
</div>

<!-- Rfc Admin Field -->
<div class="form-group">
    <?php echo Form::label('rfc_admin', 'Rfc Admin:'); ?>

    <p><?php echo e($administrativo->rfc_admin); ?></p>
</div>

<!-- Puesto Admin Field -->
<div class="form-group">
    <?php echo Form::label('puesto_admin', 'Puesto Admin:'); ?>

    <p><?php echo e($administrativo->puesto_admin); ?></p>
</div>


<?php /**PATH /opt/lampp/htdocs/vinculation_system/resources/views/administrativos/show_fields.blade.php ENDPATH**/ ?>