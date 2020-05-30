<div class="table-responsive">
    <table class="table" id="catedraticos-table">
        <thead>
            <tr>
                <th>Nombre</th>
        <th>Apellidos</th>
        <th>Especialidad</th>
        <th>RFC</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($catedraticos as $catedratico)
            <tr>
                <td>{{ $catedratico->nombre_catedratico }}</td>
            <td>{{ $catedratico->apellidos_catedratico }}</td>
            <td>{{ $catedratico->especialidad_catedratico }}</td>
            <td>{{ $catedratico->rfc_catedratico }}</td>
                <td>
                    {!! Form::open(['route' => ['catedraticos.destroy', $catedratico->id_catedratico], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('catedraticos.show', [$catedratico->id_catedratico]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                        <a href="{{ route('catedraticos.edit', [$catedratico->id_catedratico]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                        {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
