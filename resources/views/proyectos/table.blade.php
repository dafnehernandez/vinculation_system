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
        @foreach($proyectos as $proyecto)
            <tr>
                <td>{{ $proyecto->nombre_proyecto }}</td>
            <td>{{ $proyecto->tipo_proyecto }}</td>
            <td>{{ $proyecto->numeroparticipantes_proyecto }}</td>
            <td>{{ $proyecto->tiempo_proyecto }}</td>
            <td>{{ $proyecto->requisitos_proyecto }}</td>
            <td>{{ $proyecto->descripcion_proyecto }}</td>
            <td>{{ $proyecto->empresa_proyecto }}</td>
                <td>
                    {!! Form::open(['route' => ['proyectos.destroy', $proyecto->id_proyecto], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('proyectos.show', [$proyecto->id_proyecto]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                         @if (Auth::user()->rol_id < 3)
                        <a href="{{ route('proyectos.edit', [$proyecto->id_proyecto]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                        {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    @endif
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
