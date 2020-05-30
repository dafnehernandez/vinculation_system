<!-- Nombre Alumno Field -->
<div class="form-group col-sm-6">
    <?php echo Form::label('nombre_alumno', 'Nombre:'); ?>

    <?php echo Form::text('nombre_alumno', null, ['class' => 'form-control']); ?>

</div>

<!-- Apellidos Alumno Field -->
<div class="form-group col-sm-6">
    <?php echo Form::label('apellidos_alumno', 'Apellidos:'); ?>

    <?php echo Form::text('apellidos_alumno', null, ['class' => 'form-control']); ?>

</div>

<!-- Domicilio Alumno Field -->
<div class="form-group col-sm-6">
    <?php echo Form::label('domicilio_alumno', 'Domicilio:'); ?>

    <?php echo Form::text('domicilio_alumno', null, ['class' => 'form-control']); ?>

</div>

<!-- Carrera Alumno Field -->
<div class="form-group col-sm-6">
    <?php echo Form::label('carrera_alumno', 'Carrera:'); ?>

    <?php echo Form::text('carrera_alumno', null, ['class' => 'form-control']); ?>

   
</div>

<!-- Semestre Alumno Field -->
<div class="form-group col-sm-6">
    <?php echo Form::label('semestre_alumno', 'Semestre:'); ?>

    <?php echo Form::text('semestre_alumno', null, ['class' => 'form-control']); ?>

</div>

<!-- Numcontrol Alumno Field -->
<div class="form-group col-sm-6">
    <?php echo Form::label('numcontrol_alumno', 'Número de control:'); ?>

    <?php echo Form::text('numcontrol_alumno', null, ['class' => 'form-control']); ?>

</div>

<!-- Usuario Id Field -->
<div class="form-group col-sm-6">
     <?php echo Form::hidden('usuario_id', Auth::user()->id, ['class' => 'form-control']); ?>

</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    <?php echo Form::submit('Save', ['class' => 'btn btn-primary']); ?>

    <a href="<?php echo e(route('alumnos.index')); ?>" class="btn btn-default">Cancel</a>
</div>
<?php /**PATH /opt/lampp/htdocs/vinculation_system/resources/views/alumnos/fields.blade.php ENDPATH**/ ?>