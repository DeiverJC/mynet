<table class="table table-responsive" id="contractDetails-table">
    <thead>
        <tr>
            <th>Plazos Pago</th>
        <th>Contrato Id</th>
        <th>Articulos Id</th>
        <th>Valor Mensual</th>
        <th>Iva</th>
            <th colspan="3">Action</th>
        </tr>
    </thead>
    <tbody>
    @foreach($contractDetails as $contractDetail)
        <tr>
            <td>{!! $contractDetail->plazos_pago !!}</td>
            <td>{!! $contractDetail->contrato_id !!}</td>
            <td>{!! $contractDetail->articulos_id !!}</td>
            <td>{!! $contractDetail->valor_mensual !!}</td>
            <td>{!! $contractDetail->iva !!}</td>
            <td>
                {!! Form::open(['route' => ['contractDetails.destroy', $contractDetail->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('contractDetails.show', [$contractDetail->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('contractDetails.edit', [$contractDetail->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>