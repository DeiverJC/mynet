<table class="table table-responsive" id="contracts-table">
    <thead>
        <tr>
            <th>Fecha Inicio</th>
        <th>Fecha Final</th>
        <th>Terminos Pago</th>
        <th>Contactos Id</th>
            <th colspan="3">Action</th>
        </tr>
    </thead>
    <tbody>
    @foreach($contracts as $contract)
        <tr>
            <td>{!! $contract->fecha_inicio !!}</td>
            <td>{!! $contract->fecha_final !!}</td>
            <td>{!! $contract->terminos_pago !!}</td>
            <td>{!! $contract->contactos_id !!}</td>
            <td>
                {!! Form::open(['route' => ['contracts.destroy', $contract->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('contracts.show', [$contract->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('contracts.edit', [$contract->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>