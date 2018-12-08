<table class="table table-responsive" id="contactTypes-table">
    <thead>
        <tr>
            <th>Title</th>
        <th>Description</th>
            <th colspan="3">Action</th>
        </tr>
    </thead>
    <tbody>
    @foreach($contactTypes as $contactType)
        <tr>
            <td>{!! $contactType->title !!}</td>
            <td>{!! $contactType->description !!}</td>
            <td>
                {!! Form::open(['route' => ['contactTypes.destroy', $contactType->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('contactTypes.show', [$contactType->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('contactTypes.edit', [$contactType->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>