<div class="table-responsive">
    <table class="table" id="empresas-table">
        <thead>
            <tr>
                <th>Nombre Empresa</th>
        <th>Domicilio Empresa</th>
        <th>Giro Empresa</th>
        <th>Rfc Empresa</th>
                
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($empresas as $empresa)
            <tr>
                <td>{{ $empresa->nombre_empresa }}</td>
            <td>{{ $empresa->domicilio_empresa }}</td>
            <td>{{ $empresa->giro_empresa }}</td>
            <td>{{ $empresa->rfc_empresa }}</td>
                <td>
                    {!! Form::open(['route' => ['empresas.destroy', $empresa->id_empresa], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('empresas.show', [$empresa->id_empresa]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                        <a href="{{ route('empresas.edit', [$empresa->id_empresa]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                        {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
