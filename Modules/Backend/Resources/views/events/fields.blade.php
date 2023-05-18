<!-- Name Field -->
<div class="form-group col-sm-6">
    {!! Form::label('name', 'Name:') !!}
    {!! Form::text('name', null, ['class' => 'form-control', 'required', 'maxlength' => 255, 'maxlength' => 255]) !!}
</div>

<!-- Date Start Field -->
<div class="form-group col-sm-6">
    {!! Form::label('date_start', 'Date Start:') !!}
    {!! Form::text('date_start', null, ['class' => 'form-control','id'=>'date_start']) !!}
</div>

@push('page_scripts')
    <script type="text/javascript">
        $('#date_start').datepicker()
    </script>
@endpush

<!-- Date End Field -->
<div class="form-group col-sm-6">
    {!! Form::label('date_end', 'Date End:') !!}
    {!! Form::text('date_end', null, ['class' => 'form-control','id'=>'date_end']) !!}
</div>

@push('page_scripts')
    <script type="text/javascript">
        $('#date_end').datepicker()
    </script>
@endpush

<!-- Time Start Field -->
<div class="form-group col-sm-6">
    {!! Form::label('time_start', 'Time Start:') !!}
    {!! Form::text('time_start', null, ['class' => 'form-control', 'required']) !!}
</div>

<!-- Time End Field -->
<div class="form-group col-sm-6">
    {!! Form::label('time_end', 'Time End:') !!}
    {!! Form::text('time_end', null, ['class' => 'form-control', 'required']) !!}
</div>

<!-- Place Field -->
<div class="form-group col-sm-6">
    {!! Form::label('place', 'Place:') !!}
    {!! Form::text('place', null, ['class' => 'form-control', 'required', 'maxlength' => 255, 'maxlength' => 255]) !!}
</div>

<!-- Address Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('address', 'Address:') !!}
    {!! Form::textarea('address', null, ['class' => 'form-control', 'required', 'maxlength' => 65535, 'maxlength' => 65535]) !!}
</div>