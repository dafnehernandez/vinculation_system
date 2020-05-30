@if (Auth::user()->rol_id > 3)
<li class="{{ Request::is('alumnos*') ? 'active' : '' }}">
    <a href="{{ route('alumnos.index') }}"><i class="fa fa-edit"></i><span>Alumnos</span></a>
</li>
@endif

@if (Auth::user()->rol_id < 2)
<li class="{{ Request::is('administrativos*') ? 'active' : '' }}">
    <a href="{{ route('administrativos.index') }}"><i class="fa fa-edit"></i><span>Administrativos</span></a>
</li>

<li class="{{ Request::is('users*') ? 'active' : '' }}">
    <a href="{{ route('users.index') }}"><i class="fa fa-edit"></i><span>Users</span></a>
</li>

<li class="{{ Request::is('alumnos*') ? 'active' : '' }}">
    <a href="{{ route('alumnos.index') }}"><i class="fa fa-edit"></i><span>Alumnos</span></a>
</li>
@endif

@if (Auth::user()->rol_id < 3)
<li class="{{ Request::is('empresas*') ? 'active' : '' }}">
    <a href="{{ route('empresas.index') }}"><i class="fa fa-edit"></i><span>Empresas</span></a>
</li>
@endif

@if (Auth::user()->rol_id < 4 && Auth::user()->rol_id > 2)
<li class="{{ Request::is('catedraticos*') ? 'active' : '' }}">
    <a href="{{ route('catedraticos.index') }}"><i class="fa fa-edit"></i><span>Catedraticos</span></a>
</li>
@endif

<li class="{{ Request::is('proyectos*') ? 'active' : '' }}">
    <a href="{{ route('proyectos.index') }}"><i class="fa fa-edit"></i><span>Proyectos</span></a>
</li>

