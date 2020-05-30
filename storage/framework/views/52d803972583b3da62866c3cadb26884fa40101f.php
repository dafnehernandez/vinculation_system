<div class="table-responsive">
    <table class="table" id="empresas-table">
        <thead>
            <tr>
                <th>Nombre Empresa</th>
        <th>Domicilio Empresa</th>
        <th>Giro Empresa</th>
        <th>Rfc Empresa</th>
                
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        <?php $__currentLoopData = $empresas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $empresa): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
                <td><?php echo e($empresa->nombre_empresa); ?></td>
            <td><?php echo e($empresa->domicilio_empresa); ?></td>
            <td><?php echo e($empresa->giro_empresa); ?></td>
            <td><?php echo e($empresa->rfc_empresa); ?></td>
                <td>
                    <?php echo Form::open(['route' => ['empresas.destroy', $empresa->id_empresa], 'method' => 'delete']); ?>

                    <div class='btn-group'>
                        <a href="<?php echo e(route('empresas.show', [$empresa->id_empresa])); ?>" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                        <a href="<?php echo e(route('empresas.edit', [$empresa->id_empresa])); ?>" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                        <?php echo Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]); ?>

                    </div>
                    <?php echo Form::close(); ?>

                </td>
            </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </tbody>
    </table>
</div>
<?php /**PATH /opt/lampp/htdocs/vinculation_system/resources/views/empresas/table.blade.php ENDPATH**/ ?>