<!-- Guest Id Field -->
<div class="form-group col-sm-12">
    {!! Form::label('guest_id', 'Tamu Undangan:') !!}
    {!! Form::select('guest_id', $guests, null, ['class' => 'form-control select2', 'required']) !!}
</div>

<!-- Greet Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('greet', 'Greet:') !!}
    {!! Form::textarea('greet', null, ['class' => 'form-control', 'required', 'maxlength' => 65535, 'maxlength' => 65535]) !!}
</div>