<div class="table-responsive">
    <table class="table" id="proyectos-table">
        <thead>
            <tr>
                <th>Nombre Proyecto</th>
        <th>Tipo Proyecto</th>
        <th>Numeroparticipantes Proyecto</th>
        <th>Tiempo Proyecto</th>
        <th>Requisitos Proyecto</th>
        <th>Descripcion Proyecto</th>
        <th>Empresa Proyecto</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        <?php $__currentLoopData = $proyectos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $proyecto): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
                <td><?php echo e($proyecto->nombre_proyecto); ?></td>
            <td><?php echo e($proyecto->tipo_proyecto); ?></td>
            <td><?php echo e($proyecto->numeroparticipantes_proyecto); ?></td>
            <td><?php echo e($proyecto->tiempo_proyecto); ?></td>
            <td><?php echo e($proyecto->requisitos_proyecto); ?></td>
            <td><?php echo e($proyecto->descripcion_proyecto); ?></td>
            <td><?php echo e($proyecto->empresa_proyecto); ?></td>
                <td>
                    <?php echo Form::open(['route' => ['proyectos.destroy', $proyecto->id_proyecto], 'method' => 'delete']); ?>

                    <div class='btn-group'>
                        <a href="<?php echo e(route('proyectos.show', [$proyecto->id_proyecto])); ?>" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                         <?php if(Auth::user()->rol_id < 3): ?>
                        <a href="<?php echo e(route('proyectos.edit', [$proyecto->id_proyecto])); ?>" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                        <?php echo Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]); ?>

                    <?php endif; ?>
                    </div>
                    <?php echo Form::close(); ?>

                </td>
            </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </tbody>
    </table>
</div>
<?php /**PATH /opt/lampp/htdocs/vinculation_system/resources/views/proyectos/table.blade.php ENDPATH**/ ?>