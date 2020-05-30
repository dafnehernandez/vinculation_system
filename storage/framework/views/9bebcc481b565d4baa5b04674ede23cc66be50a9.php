<!-- Nombre Empresa Field -->
<div class="form-group col-sm-6">
    <?php echo Form::label('nombre_empresa', 'Nombre de la empresa:'); ?>

    <?php echo Form::text('nombre_empresa', null, ['class' => 'form-control']); ?>

</div>

<!-- Domicilio Empresa Field -->
<div class="form-group col-sm-6">
    <?php echo Form::label('domicilio_empresa', 'Domicilio de la empresa:'); ?>

    <?php echo Form::text('domicilio_empresa', null, ['class' => 'form-control']); ?>

</div>

<!-- Giro Empresa Field -->
<div class="form-group col-sm-6">
    <?php echo Form::label('giro_empresa', 'Giro Empresa:'); ?>

    <?php echo Form::text('giro_empresa', null, ['class' => 'form-control']); ?>

</div>

<!-- Rfc Empresa Field -->
<div class="form-group col-sm-6">
    <?php echo Form::label('rfc_empresa', 'RFC Empresa:'); ?>

    <?php echo Form::text('rfc_empresa', null, ['class' => 'form-control']); ?>

</div>

<!-- Usuario Id Field -->
<div class="form-group col-sm-6">
    <?php echo Form::hidden('usuario_id', Auth::user()->id, ['class' => 'form-control']); ?>

</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    <?php echo Form::submit('Save', ['class' => 'btn btn-primary']); ?>

    <a href="<?php echo e(route('empresas.index')); ?>" class="btn btn-default">Cancel</a>
</div>
<?php /**PATH /opt/lampp/htdocs/vinculation_system/resources/views/empresas/fields.blade.php ENDPATH**/ ?>