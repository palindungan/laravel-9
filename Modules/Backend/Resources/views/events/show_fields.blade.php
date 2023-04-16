<!-- Name Field -->
<div class="col-sm-12">
    {!! Form::label('name', 'Name:') !!}
    <p>{{ $event->name }}</p>
</div>

<!-- Start Field -->
<div class="col-sm-12">
    {!! Form::label('start', 'Start:') !!}
    <p>{{ $event->start }}</p>
</div>

<!-- End Field -->
<div class="col-sm-12">
    {!! Form::label('end', 'End:') !!}
    <p>{{ $event->end }}</p>
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

