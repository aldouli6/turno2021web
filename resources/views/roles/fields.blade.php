<!-- Name Field -->
<div class="form-group col-sm-6">
    {!! Form::label('name', __('models/roles.fields.name').':') !!}
    {!! Form::text('name', null, ['class' => 'form-control']) !!}
</div>

<!-- Permissions Field -->
<div class="form-group col-sm-6">
    {!! Form::label('permissions', __('models/roles.fields.permissions').':') !!}
    {!! Form::select('permissions', $permissionItems, null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit(__('crud.save'), ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('roles.index') }}" class="btn btn-default">@lang('crud.cancel')</a>
</div>
