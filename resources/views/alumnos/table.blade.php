<div class="table-responsive">
    <table class="table" id="alumnos-table">
        <thead>
            <tr>
                <th>Nombre</th>
        <th>Apellidos</th>
        <th>Domicilio</th>
        <th>Carrera</th>
        <th>Semestre</th>
        <th>Número de Control</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($alumnos as $alumno)
            <tr>
                <td>{{ $alumno->nombre_alumno }}</td>
            <td>{{ $alumno->apellidos_alumno }}</td>
            <td>{{ $alumno->domicilio_alumno }}</td>
            <td>{{ $alumno->carrera_alumno }}</td>
            <td>{{ $alumno->semestre_alumno }}</td>
            <td>{{ $alumno->numcontrol_alumno }}</td>
            
                <td>
                    {!! Form::open(['route' => ['alumnos.destroy', $alumno->id_alumno], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('alumnos.show', [$alumno->id_alumno]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                        <a href="{{ route('alumnos.edit', [$alumno->id_alumno]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                        {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
