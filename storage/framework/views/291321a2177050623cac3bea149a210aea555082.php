<?php if(Auth::user()->rol_id > 3): ?>
<li class="<?php echo e(Request::is('alumnos*') ? 'active' : ''); ?>">
    <a href="<?php echo e(route('alumnos.index')); ?>"><i class="fa fa-edit"></i><span>Alumnos</span></a>
</li>
<?php endif; ?>

<?php if(Auth::user()->rol_id < 2): ?>
<li class="<?php echo e(Request::is('administrativos*') ? 'active' : ''); ?>">
    <a href="<?php echo e(route('administrativos.index')); ?>"><i class="fa fa-edit"></i><span>Administrativos</span></a>
</li>

<li class="<?php echo e(Request::is('users*') ? 'active' : ''); ?>">
    <a href="<?php echo e(route('users.index')); ?>"><i class="fa fa-edit"></i><span>Users</span></a>
</li>

<li class="<?php echo e(Request::is('alumnos*') ? 'active' : ''); ?>">
    <a href="<?php echo e(route('alumnos.index')); ?>"><i class="fa fa-edit"></i><span>Alumnos</span></a>
</li>
<?php endif; ?>

<?php if(Auth::user()->rol_id < 3): ?>
<li class="<?php echo e(Request::is('empresas*') ? 'active' : ''); ?>">
    <a href="<?php echo e(route('empresas.index')); ?>"><i class="fa fa-edit"></i><span>Empresas</span></a>
</li>
<?php endif; ?>

<?php if(Auth::user()->rol_id < 4 && Auth::user()->rol_id > 2): ?>
<li class="<?php echo e(Request::is('catedraticos*') ? 'active' : ''); ?>">
    <a href="<?php echo e(route('catedraticos.index')); ?>"><i class="fa fa-edit"></i><span>Catedraticos</span></a>
</li>
<?php endif; ?>

<li class="<?php echo e(Request::is('proyectos*') ? 'active' : ''); ?>">
    <a href="<?php echo e(route('proyectos.index')); ?>"><i class="fa fa-edit"></i><span>Proyectos</span></a>
</li>

<?php /**PATH /opt/lampp/htdocs/pweb13/grupo003/vinculation_system/resources/views/layouts/menu.blade.php ENDPATH**/ ?>