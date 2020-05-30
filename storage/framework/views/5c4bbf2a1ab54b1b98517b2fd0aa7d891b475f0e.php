<!-- Name Field -->
<div class="form-group">
    <?php echo Form::label('name', 'Name:'); ?>

    <p><?php echo e($user->name); ?></p>
</div>

<!-- Email Field -->
<div class="form-group">
    <?php echo Form::label('email', 'Email:'); ?>

    <p><?php echo e($user->email); ?></p>
</div>

<!-- Email Verified At Field -->
<div class="form-group">
    <?php echo Form::label('email_verified_at', 'Email Verified At:'); ?>

    <p><?php echo e($user->email_verified_at); ?></p>
</div>

<!-- Password Field -->
<div class="form-group">
    <?php echo Form::label('password', 'Password:'); ?>

    <p><?php echo e($user->password); ?></p>
</div>

<!-- Celular Field -->
<div class="form-group">
    <?php echo Form::label('celular', 'Celular:'); ?>

    <p><?php echo e($user->celular); ?></p>
</div>

<!-- Rol Id Field -->
<div class="form-group">
    <?php echo Form::label('rol_id', 'Rol Id:'); ?>

    <p><?php echo e($user->rol_id); ?></p>
</div>

<!-- Remember Token Field -->
<div class="form-group">
    <?php echo Form::label('remember_token', 'Remember Token:'); ?>

    <p><?php echo e($user->remember_token); ?></p>
</div>

<?php /**PATH /opt/lampp/htdocs/vinculation_system/resources/views/users/show_fields.blade.php ENDPATH**/ ?>