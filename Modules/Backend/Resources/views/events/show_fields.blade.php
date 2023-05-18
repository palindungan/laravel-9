<!-- Name Field -->
<div class="col-sm-12">
    {!! Form::label('name', 'Name:') !!}
    <p>{{ $event->name }}</p>
</div>

<!-- Date Start Field -->
<div class="col-sm-12">
    {!! Form::label('date_start', 'Date Start:') !!}
    <p>{{ $event->date_start }}</p>
</div>

<!-- Date End Field -->
<div class="col-sm-12">
    {!! Form::label('date_end', 'Date End:') !!}
    <p>{{ $event->date_end }}</p>
</div>

<!-- Time Start Field -->
<div class="col-sm-12">
    {!! Form::label('time_start', 'Time Start:') !!}
    <p>{{ $event->time_start }}</p>
</div>

<!-- Time End Field -->
<div class="col-sm-12">
    {!! Form::label('time_end', 'Time End:') !!}
    <p>{{ $event->time_end }}</p>
</div>

<!-- Place Field -->
<div class="col-sm-12">
    {!! Form::label('place', 'Place:') !!}
    <p>{{ $event->place }}</p>
</div>

<!-- Address Field -->
<div class="col-sm-12">
    {!! Form::label('address', 'Address:') !!}
    <p>{{ $event->address }}</p>
</div>

