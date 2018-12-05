<table class="table table-responsive" id="inventoryAdjustments-table">
    <thead>
        <tr>
            <th>Item Id</th>
        <th>Adjustment Type</th>
        <th>Current Amount</th>
        <th>Amount</th>
        <th>Final Amount</th>
        <th>Date</th>
        <th>Observations</th>
            <th colspan="3">Action</th>
        </tr>
    </thead>
    <tbody>
    @foreach($inventoryAdjustments as $inventoryAdjustment)
        <tr>
            <td>{!! $inventoryAdjustment->item_id !!}</td>
            <td>{!! $inventoryAdjustment->adjustment_type !!}</td>
            <td>{!! $inventoryAdjustment->current_amount !!}</td>
            <td>{!! $inventoryAdjustment->amount !!}</td>
            <td>{!! $inventoryAdjustment->final_amount !!}</td>
            <td>{!! $inventoryAdjustment->date !!}</td>
            <td>{!! $inventoryAdjustment->observations !!}</td>
            <td>
                {!! Form::open(['route' => ['inventoryAdjustments.destroy', $inventoryAdjustment->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('inventoryAdjustments.show', [$inventoryAdjustment->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('inventoryAdjustments.edit', [$inventoryAdjustment->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>