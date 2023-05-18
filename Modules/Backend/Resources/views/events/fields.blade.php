<!-- Name Field -->
<div class="form-group col-sm-12">
    {!! Form::label('name', 'Nama:') !!}
    {!! Form::text('name', null, ['class' => 'form-control', 'required', 'maxlength' => 255, 'maxlength' => 255]) !!}
</div>

<!-- Date Start Field -->
<div class="form-group col-sm-6">
    {!! Form::label('date_start', 'Tanggal Mulai:') !!}
    {!! Form::text('date_start', null, ['class' => 'form-control datepicker','id'=>'date_start']) !!}
</div>

<!-- Time Start Field -->
<div class="form-group col-sm-6">
    {!! Form::label('time_start', 'Waktu Mulai:') !!}
    {!! Form::text('time_start', null, ['class' => 'form-control timepicker', 'required']) !!}
</div>

<!-- Date End Field -->
<div class="form-group col-sm-6">
    {!! Form::label('date_end', 'Tanggal Berakhir:') !!}
    {!! Form::text('date_end', null, ['class' => 'form-control datepicker','id'=>'date_end']) !!}
</div>

<!-- Time End Field -->
<div class="form-group col-sm-6">
    {!! Form::label('time_end', 'Waktu Berakhir:') !!}
    {!! Form::text('time_end', null, ['class' => 'form-control timepicker', 'required']) !!}
</div>

<!-- Place Field -->
<div class="form-group col-sm-12">
    {!! Form::label('place', 'Tempat:') !!}
    {!! Form::text('place', null, ['class' => 'form-control', 'required', 'maxlength' => 255, 'maxlength' => 255]) !!}
</div>

<!-- Address Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('address', 'Alamat Lengkap:') !!}
    {!! Form::textarea('address', null, ['class' => 'form-control', 'required', 'maxlength' => 65535, 'maxlength' => 65535]) !!}
</div>