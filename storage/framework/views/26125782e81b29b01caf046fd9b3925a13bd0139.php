<div class="table-responsive">
    <table class="table" id="catedraticos-table">
        <thead>
            <tr>
                <th>Nombre</th>
        <th>Apellidos</th>
        <th>Especialidad</th>
        <th>RFC</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        <?php $__currentLoopData = $catedraticos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $catedratico): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
                <td><?php echo e($catedratico->nombre_catedratico); ?></td>
            <td><?php echo e($catedratico->apellidos_catedratico); ?></td>
            <td><?php echo e($catedratico->especialidad_catedratico); ?></td>
            <td><?php echo e($catedratico->rfc_catedratico); ?></td>
                <td>
                    <?php echo Form::open(['route' => ['catedraticos.destroy', $catedratico->id_catedratico], 'method' => 'delete']); ?>

                    <div class='btn-group'>
                        <a href="<?php echo e(route('catedraticos.show', [$catedratico->id_catedratico])); ?>" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                        <a href="<?php echo e(route('catedraticos.edit', [$catedratico->id_catedratico])); ?>" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                        <?php echo Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]); ?>

                    </div>
                    <?php echo Form::close(); ?>

                </td>
            </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </tbody>
    </table>
</div>
<?php /**PATH /opt/lampp/htdocs/vinculation_system/resources/views/catedraticos/table.blade.php ENDPATH**/ ?>