<div class="table-responsive">
    <table class="table" id="administrativos-table">
        <thead>
            <tr>
                <th>Nombre</th>
        <th>Apellidos</th>
        <th>RFC</th>
        <th>Puesto</th>
    
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($administrativos as $administrativo)
            <tr>
                <td>{{ $administrativo->nombre_admin }}</td>
            <td>{{ $administrativo->apellidos_admin }}</td>
            <td>{{ $administrativo->rfc_admin }}</td>
            <td>{{ $administrativo->puesto_admin }}</td>
         
                <td>
                    {!! Form::open(['route' => ['administrativos.destroy', $administrativo->id_admin], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('administrativos.show', [$administrativo->id_admin]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                        <a href="{{ route('administrativos.edit', [$administrativo->id_admin]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                        {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
