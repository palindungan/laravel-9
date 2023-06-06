<!-- Code Field -->
<div class="form-group col-sm-6 {{ @$guest ? '' : 'd-none' }}">
    {!! Form::label('code', 'Kode:') !!}
    {!! Form::text('code', null, ['class' => 'form-control', 'maxlength' => 255, 'maxlength' => 255]) !!}
</div>

<!-- Name Field -->
<div class="form-group col-sm-6">
    {!! Form::label('name', 'Nama:') !!}
    {!! Form::text('name', null, ['class' => 'form-control', 'required', 'maxlength' => 255, 'maxlength' => 255]) !!}
</div>

<!-- Time Start Field -->
<div class="form-group col-sm-6">
    {!! Form::label('time_start', 'Waktu Mulai (optional):') !!}
    {!! Form::text('time_start', null, ['class' => 'form-control timepicker']) !!}
</div>

<!-- Time End Field -->
<div class="form-group col-sm-6">
    {!! Form::label('time_end', 'Waktu Berakhir (optional):') !!}
    {!! Form::text('time_end', null, ['class' => 'form-control timepicker']) !!}
</div>
