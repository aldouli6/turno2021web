<div class="table-responsive-sm">
    <table class="table table-striped" id="sessions-table">
        <thead>
            <tr>
                <th>@lang('models/sessions.fields.enabled')</th>
        <th>@lang('models/sessions.fields.establishment_id')</th>
        <th>@lang('models/sessions.fields.name')</th>
        <th>@lang('models/sessions.fields.duration')</th>
        <th>@lang('models/sessions.fields.cost')</th>
                <th colspan="3">@lang('crud.action')</th>
            </tr>
        </thead>
        <tbody>
        @foreach($sessions as $session)
            <tr>
                <td>{{ $session->enabled }}</td>
            <td>{{ $session->establishment_id }}</td>
            <td>{{ $session->name }}</td>
            <td>{{ $session->duration }}</td>
            <td>{{ $session->cost }}</td>
                <td>
                    {!! Form::open(['route' => ['sessions.destroy', $session->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('sessions.show', [$session->id]) }}" class='btn btn-ghost-success'><i class="fa fa-eye"></i></a>
                        <a href="{{ route('sessions.edit', [$session->id]) }}" class='btn btn-ghost-info'><i class="fa fa-edit"></i></a>
                        {!! Form::button('<i class="fa fa-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-ghost-danger', 'onclick' => 'return confirm("'.__('crud.are_you_sure').'")']) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>