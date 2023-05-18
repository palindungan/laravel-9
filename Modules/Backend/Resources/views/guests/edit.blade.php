@extends('layouts.app')

@section('content')
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-12">
                    <h1>
                        Edit Tamu Undangan
                    </h1>
                </div>
            </div>
        </div>
    </section>

    <div class="content px-3">

        @include('adminlte-templates::common.errors')

        <div class="card">

            {!! Form::model($guest, ['route' => ['guests.update', $guest->id], 'method' => 'patch']) !!}

            <div class="card-body">
                <div class="row">
                    @include('backend::guests.fields')
                </div>
            </div>

            <div class="card-footer">
                {!! Form::submit('Simpan', ['class' => 'btn btn-primary']) !!}
                <a href="{{ route('guests.index') }}" class="btn btn-default"> Kembali </a>
            </div>

            {!! Form::close() !!}

        </div>
    </div>
@endsection
