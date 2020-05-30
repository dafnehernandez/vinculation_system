<!-- Name Field -->
<div class="form-group col-sm-6">
    <?php echo Form::label('name', 'Name:'); ?>

    <?php echo Form::text('name', null, ['class' => 'form-control']); ?>

</div>

<!-- Email Field -->
<div class="form-group col-sm-6">
    <?php echo Form::label('email', 'Email:'); ?>

    <?php echo Form::email('email', null, ['class' => 'form-control']); ?>

</div>

<!-- Email Verified At Field -->
<div class="form-group col-sm-6">
    <?php echo Form::label('email_verified_at', 'Email Verified At:'); ?>

    <?php echo Form::text('email_verified_at', null, ['class' => 'form-control','id'=>'email_verified_at']); ?>

</div>

<?php $__env->startPush('scripts'); ?>
    <script type="text/javascript">
        $('#email_verified_at').datetimepicker({
            format: 'YYYY-MM-DD HH:mm:ss',
            useCurrent: true,
            sideBySide: true
        })
    </script>
<?php $__env->stopPush(); ?>

<!-- Password Field -->
<div class="form-group col-sm-6">
    <?php echo Form::label('password', 'Password:'); ?>

    <?php echo Form::password('password', ['class' => 'form-control']); ?>

</div>

<!-- Celular Field -->
<div class="form-group col-sm-6">
    <?php echo Form::label('celular', 'Celular:'); ?>

    <?php echo Form::number('celular', null, ['class' => 'form-control']); ?>

</div>

<!-- Rol Id Field -->
<div class="form-group col-sm-6">
    <?php echo Form::label('rol_id', 'Rol Id:'); ?>

    <?php echo Form::number('rol_id', null, ['class' => 'form-control']); ?>

</div>

<!-- Remember Token Field -->
<div class="form-group col-sm-6">
    <?php echo Form::label('remember_token', 'Remember Token:'); ?>

    <?php echo Form::text('remember_token', null, ['class' => 'form-control']); ?>

</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    <?php echo Form::submit('Save', ['class' => 'btn btn-primary']); ?>

    <a href="<?php echo e(route('users.index')); ?>" class="btn btn-default">Cancel</a>
</div>
<?php /**PATH /opt/lampp/htdocs/vinculation_system/resources/views/users/fields.blade.php ENDPATH**/ ?>