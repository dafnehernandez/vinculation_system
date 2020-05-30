<!-- Nombre Catedratico Field -->
<div class="form-group col-sm-6">
    <?php echo Form::label('nombre_catedratico', 'Nombre Catedratico:'); ?>

    <?php echo Form::text('nombre_catedratico', null, ['class' => 'form-control']); ?>

</div>

<!-- Apellidos Catedratico Field -->
<div class="form-group col-sm-6">
    <?php echo Form::label('apellidos_catedratico', 'Apellidos Catedratico:'); ?>

    <?php echo Form::text('apellidos_catedratico', null, ['class' => 'form-control']); ?>

</div>

<!-- Especialidad Catedratico Field -->
<div class="form-group col-sm-6">
    <?php echo Form::label('especialidad_catedratico', 'Especialidad Catedratico:'); ?>

    <?php echo Form::text('especialidad_catedratico', null, ['class' => 'form-control']); ?>

</div>

<!-- Rfc Catedratico Field -->
<div class="form-group col-sm-6">
    <?php echo Form::label('rfc_catedratico', 'Rfc Catedratico:'); ?>

    <?php echo Form::text('rfc_catedratico', null, ['class' => 'form-control']); ?>

</div>

<!-- Usuario Id Field -->
<div class="form-group col-sm-6">
    <?php echo Form::hidden('usuario_id', Auth::user()->id, ['class' => 'form-control']); ?>

</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    <?php echo Form::submit('Save', ['class' => 'btn btn-primary']); ?>

    <a href="<?php echo e(route('catedraticos.index')); ?>" class="btn btn-default">Cancel</a>
</div>
<?php /**PATH /opt/lampp/htdocs/vinculation_system/resources/views/catedraticos/fields.blade.php ENDPATH**/ ?>