<table class="table table-responsive" id="items-table">
    <thead>
        <tr>
            <th>Type Item</th>
        <th>Title</th>
        <th>Refence</th>
        <th>Sale Price</th>
        <th>Description</th>
        <th>Tax</th>
        <th>Unit Measure</th>
        <th>Unit Price</th>
        <th>Initial Amount</th>
            <th colspan="3">Action</th>
        </tr>
    </thead>
    <tbody>
    @foreach($items as $item)
        <tr>
            <td>{!! $item->type_item !!}</td>
            <td>{!! $item->title !!}</td>
            <td>{!! $item->refence !!}</td>
            <td>{!! $item->sale_price !!}</td>
            <td>{!! $item->description !!}</td>
            <td>{!! $item->tax !!}</td>
            <td>{!! $item->unit_measure !!}</td>
            <td>{!! $item->unit_price !!}</td>
            <td>{!! $item->initial_amount !!}</td>
            <td>
                {!! Form::open(['route' => ['items.destroy', $item->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('items.show', [$item->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('items.edit', [$item->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>