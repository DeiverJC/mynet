<table class="table table-responsive" id="contracts-table">
    <thead>
        <tr>
            <th>Start Date</th>
        <th>Finish Date</th>
        <th>Term Payment</th>
        <th>Contact Id</th>
            <th colspan="3">Action</th>
        </tr>
    </thead>
    <tbody>
    @foreach($contracts as $contract)
        <tr>
            <td>{!! $contract->start_date !!}</td>
            <td>{!! $contract->finish_date !!}</td>
            <td>{!! $contract->term_payment !!}</td>
            <td>{!! $contract->contact_id !!}</td>
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