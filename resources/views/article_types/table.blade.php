<table class="table table-responsive" id="articleTypes-table">
    <thead>
        <tr>
            <th>Nombre</th>
            <th colspan="3">Action</th>
        </tr>
    </thead>
    <tbody>
    @foreach($articleTypes as $articleType)
        <tr>
            <td>{!! $articleType->nombre !!}</td>
            <td>
                {!! Form::open(['route' => ['articleTypes.destroy', $articleType->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('articleTypes.show', [$articleType->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('articleTypes.edit', [$articleType->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>