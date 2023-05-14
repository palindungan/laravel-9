<!-- Guest Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('guest_id', 'Guest Id:') !!}
    {!! Form::number('guest_id', null, ['class' => 'form-control', 'required']) !!}
</div>

<!-- Greet Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('greet', 'Greet:') !!}
    {!! Form::textarea('greet', null, ['class' => 'form-control', 'required', 'maxlength' => 65535, 'maxlength' => 65535]) !!}
</div>