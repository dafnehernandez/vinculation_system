<div class="table-responsive">
    <table class="table" id="alumnos-table">
        <thead>
            <tr>
                <th>Nombre</th>
        <th>Apellidos</th>
        <th>Domicilio</th>
        <th>Carrera</th>
        <th>Semestre</th>
        <th>Número de Control</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        <?php $__currentLoopData = $alumnos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $alumno): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
                <td><?php echo e($alumno->nombre_alumno); ?></td>
            <td><?php echo e($alumno->apellidos_alumno); ?></td>
            <td><?php echo e($alumno->domicilio_alumno); ?></td>
            <td><?php echo e($alumno->carrera_alumno); ?></td>
            <td><?php echo e($alumno->semestre_alumno); ?></td>
            <td><?php echo e($alumno->numcontrol_alumno); ?></td>
            
                <td>
                    <?php echo Form::open(['route' => ['alumnos.destroy', $alumno->id_alumno], 'method' => 'delete']); ?>

                    <div class='btn-group'>
                        <a href="<?php echo e(route('alumnos.show', [$alumno->id_alumno])); ?>" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                        <a href="<?php echo e(route('alumnos.edit', [$alumno->id_alumno])); ?>" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                        <?php echo Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]); ?>

                    </div>
                    <?php echo Form::close(); ?>

                </td>
            </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </tbody>
    </table>
</div>
<?php /**PATH /opt/lampp/htdocs/vinculation_system/resources/views/alumnos/table.blade.php ENDPATH**/ ?>