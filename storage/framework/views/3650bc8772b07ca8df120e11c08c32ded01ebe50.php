<?php $__env->startSection('title', __('Service Unavailable')); ?>
<?php $__env->startSection('code', '503'); ?>
<?php $__env->startSection('message', __($exception->getMessage() ?: 'Service Unavailable')); ?>

<?php echo $__env->make('errors::minimal', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /opt/lampp/htdocs/vinculation_system/resources/views/errors/503.blade.php ENDPATH**/ ?>