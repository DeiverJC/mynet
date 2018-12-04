<table class="table table-responsive" id="typeContacts-table">
    <thead>
        <tr>
            <th>Nombre</th>
        <th>Observacion</th>
            <th colspan="3">Action</th>
        </tr>
    </thead>
    <tbody>
    @foreach($typeContacts as $typeContact)
        <tr>
            <td>{!! $typeContact->nombre !!}</td>
            <td>{!! $typeContact->observacion !!}</td>
            <td>
                {!! Form::open(['route' => ['typeContacts.destroy', $typeContact->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('typeContacts.show', [$typeContact->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('typeContacts.edit', [$typeContact->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>