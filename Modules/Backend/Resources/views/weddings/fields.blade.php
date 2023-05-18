<!-- Bride Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('bride_id', 'Pengantin Perempuan:') !!}
    {!! Form::select('bride_id', $admins, null, ['class' => 'form-control', 'required']) !!}
</div>

<!-- Groom Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('groom_id', 'Pengantin Pria:') !!}
    {!! Form::select('groom_id', $admins, null, ['class' => 'form-control', 'required']) !!}
</div>

<!-- Main Event Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('main_event_id', 'Acara Utama:') !!}
    {!! Form::select('main_event_id', $events, null, ['class' => 'form-control', 'required']) !!}
</div>