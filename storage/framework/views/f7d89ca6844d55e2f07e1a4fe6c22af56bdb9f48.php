<?php $__env->startSection('content'); ?>
    <section class="content-header">
        <h1>
            Administrativo
        </h1>
    </section>
    <div class="content">
        <?php echo $__env->make('adminlte-templates::common.errors', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <div class="box box-primary">
            <div class="box-body">
                <div class="row">
                    <?php echo Form::open(['route' => 'administrativos.store']); ?>


                        <?php echo $__env->make('administrativos.fields', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

                    <?php echo Form::close(); ?>

                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /opt/lampp/htdocs/vinculation_system/resources/views/administrativos/create.blade.php ENDPATH**/ ?>