<!-- Nombre Alumno Field -->
<div class="form-group">
    <?php echo Form::label('nombre_alumno', 'Nombre Alumno:'); ?>

    <p><?php echo e($alumno->nombre_alumno); ?></p>
</div>

<!-- Apellidos Alumno Field -->
<div class="form-group">
    <?php echo Form::label('apellidos_alumno', 'Apellidos Alumno:'); ?>

    <p><?php echo e($alumno->apellidos_alumno); ?></p>
</div>

<!-- Domicilio Alumno Field -->
<div class="form-group">
    <?php echo Form::label('domicilio_alumno', 'Domicilio Alumno:'); ?>

    <p><?php echo e($alumno->domicilio_alumno); ?></p>
</div>

<!-- Carrera Alumno Field -->
<div class="form-group">
    <?php echo Form::label('carrera_alumno', 'Carrera Alumno:'); ?>

    <p><?php echo e($alumno->carrera_alumno); ?></p>
</div>

<!-- Semestre Alumno Field -->
<div class="form-group">
    <?php echo Form::label('semestre_alumno', 'Semestre Alumno:'); ?>

    <p><?php echo e($alumno->semestre_alumno); ?></p>
</div>

<!-- Numcontrol Alumno Field -->
<div class="form-group">
    <?php echo Form::label('numcontrol_alumno', 'Numcontrol Alumno:'); ?>

    <p><?php echo e($alumno->numcontrol_alumno); ?></p>
</div>

<!-- Usuario Id Field -->
<div class="form-group">
    <?php echo Form::label('usuario_id', 'Usuario Id:'); ?>

    <p><?php echo e($alumno->usuario_id); ?></p>
</div>

<?php /**PATH /opt/lampp/htdocs/vinculation_system/resources/views/alumnos/show_fields.blade.php ENDPATH**/ ?>