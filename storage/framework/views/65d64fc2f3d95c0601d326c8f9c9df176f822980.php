<!-- Nombre Empresa Field -->
<div class="form-group">
    <?php echo Form::label('nombre_empresa', 'Nombre de la empresa:'); ?>

    <p><?php echo e($empresa->nombre_empresa); ?></p> 
</div>

<!-- Domicilio Empresa Field -->
<div class="form-group">
    <?php echo Form::label('domicilio_empresa', 'Domicilio de la empresa:'); ?>

    <p><?php echo e($empresa->domicilio_empresa); ?></p>
</div>

<!-- Giro Empresa Field -->
<div class="form-group">
    <?php echo Form::label('giro_empresa', 'Giro de la empresa:'); ?>

    <p><?php echo e($empresa->giro_empresa); ?></p>
</div>

<!-- RFC Empresa Field -->
<div class="form-group">
    <?php echo Form::label('rfc_empresa', 'RFC Empresa:'); ?>

    <p><?php echo e($empresa->rfc_empresa); ?></p>
</div>



<?php /**PATH /opt/lampp/htdocs/vinculation_system/resources/views/empresas/show_fields.blade.php ENDPATH**/ ?>