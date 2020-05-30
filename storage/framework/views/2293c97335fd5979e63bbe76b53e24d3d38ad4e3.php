<!-- Nombre Admin Field -->
<div class="form-group col-sm-6">
    <?php echo Form::label('nombre_admin', 'Nombre:'); ?>

    <?php echo Form::text('nombre_admin', null, ['class' => 'form-control']); ?>

</div>

<!-- Apellidos Admin Field -->
<div class="form-group col-sm-6">
    <?php echo Form::label('apellidos_admin', 'Apellidos:'); ?>

    <?php echo Form::text('apellidos_admin', null, ['class' => 'form-control']); ?>

</div>

<!-- Rfc Admin Field -->
<div class="form-group col-sm-6">
    <?php echo Form::label('rfc_admin', 'RFC:'); ?>

    <?php echo Form::text('rfc_admin', null, ['class' => 'form-control']); ?>

</div>

<!-- Puesto Admin Field -->
<div class="form-group col-sm-6">
    <?php echo Form::label('puesto_admin', 'Puesto:'); ?>

    <?php echo Form::text('puesto_admin', null, ['class' => 'form-control']); ?>

</div>

<!-- Usuario Id Field-->
<div class="form-group col-sm-6">
    <?php echo Form::hidden('usuario_id', Auth::user()->id, ['class' => 'form-control']); ?>

</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    <?php echo Form::submit('Save', ['class' => 'btn btn-primary']); ?>

    <a href="<?php echo e(route('administrativos.index')); ?>" class="btn btn-default">Cancel</a>
</div>

<?php /**PATH /opt/lampp/htdocs/vinculation_system/resources/views/administrativos/fields.blade.php ENDPATH**/ ?>