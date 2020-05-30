<div class="table-responsive">
    <table class="table" id="administrativos-table">
        <thead>
            <tr>
                <th>Nombre</th>
        <th>Apellidos</th>
        <th>RFC</th>
        <th>Puesto</th>
    
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        <?php $__currentLoopData = $administrativos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $administrativo): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
                <td><?php echo e($administrativo->nombre_admin); ?></td>
            <td><?php echo e($administrativo->apellidos_admin); ?></td>
            <td><?php echo e($administrativo->rfc_admin); ?></td>
            <td><?php echo e($administrativo->puesto_admin); ?></td>
         
                <td>
                    <?php echo Form::open(['route' => ['administrativos.destroy', $administrativo->id_admin], 'method' => 'delete']); ?>

                    <div class='btn-group'>
                        <a href="<?php echo e(route('administrativos.show', [$administrativo->id_admin])); ?>" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                        <a href="<?php echo e(route('administrativos.edit', [$administrativo->id_admin])); ?>" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                        <?php echo Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]); ?>

                    </div>
                    <?php echo Form::close(); ?>

                </td>
            </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </tbody>
    </table>
</div>
<?php /**PATH /opt/lampp/htdocs/vinculation_system/resources/views/administrativos/table.blade.php ENDPATH**/ ?>