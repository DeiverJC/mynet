<table class="table table-responsive" id="collectionAccounts-table">
    <thead>
        <tr>
            <th>Contract Id</th>
        <th>Creation</th>
        <th>Expiration</th>
        <th>Total</th>
        <th>Paid</th>
        <th>To Pay</th>
        <th>State</th>
            <th colspan="3">Action</th>
        </tr>
    </thead>
    <tbody>
    @foreach($collectionAccounts as $collectionAccount)
        <tr>
            <td>{!! $collectionAccount->contract_id !!}</td>
            <td>{!! $collectionAccount->creation !!}</td>
            <td>{!! $collectionAccount->expiration !!}</td>
            <td>{!! $collectionAccount->total !!}</td>
            <td>{!! $collectionAccount->paid !!}</td>
            <td>{!! $collectionAccount->to_pay !!}</td>
            <td>{!! $collectionAccount->state !!}</td>
            <td>
                {!! Form::open(['route' => ['collectionAccounts.destroy', $collectionAccount->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('collectionAccounts.show', [$collectionAccount->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('collectionAccounts.edit', [$collectionAccount->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>