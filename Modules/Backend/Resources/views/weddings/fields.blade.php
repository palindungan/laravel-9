<!-- Bride Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('bride_id', 'Bride Id:') !!}
    {!! Form::number('bride_id', null, ['class' => 'form-control', 'required']) !!}
</div>

<!-- Groom Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('groom_id', 'Groom Id:') !!}
    {!! Form::number('groom_id', null, ['class' => 'form-control', 'required']) !!}
</div>

<!-- Main Event Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('main_event_id', 'Main Event Id:') !!}
    {!! Form::number('main_event_id', null, ['class' => 'form-control', 'required']) !!}
</div>