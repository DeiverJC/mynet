<table class="table table-responsive" id="contacts-table">
    <thead>
        <tr>
            <th>Tipo Identificacion</th>
        <th>Identificacion</th>
        <th>Direccion</th>
        <th>Ciudad</th>
        <th>Departamento</th>
        <th>Tipo Contacto Id</th>
            <th colspan="3">Action</th>
        </tr>
    </thead>
    <tbody>
    @foreach($contacts as $contact)
        <tr>
            <td>{!! $contact->tipo_identificacion !!}</td>
            <td>{!! $contact->identificacion !!}</td>
            <td>{!! $contact->direccion !!}</td>
            <td>{!! $contact->ciudad !!}</td>
            <td>{!! $contact->departamento !!}</td>
            <td>{!! $contact->tipo_contacto_id !!}</td>
            <td>
                {!! Form::open(['route' => ['contacts.destroy', $contact->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('contacts.show', [$contact->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('contacts.edit', [$contact->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>