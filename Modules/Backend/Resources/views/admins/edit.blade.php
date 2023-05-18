@extends('layouts.app')

@section('content')
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-12">
                    <h1>
                        Edit Pengantin
                    </h1>
                </div>
            </div>
        </div>
    </section>

    <div class="content px-3">

        @include('adminlte-templates::common.errors')

        <div class="card">

            {!! Form::model($admin, ['route' => ['admins.update', $admin->id], 'method' => 'patch', 'enctype' => 'multipart/form-data']) !!}

            <div class="card-body">
                <div class="row">
                    @include('backend::admins.fields')
                </div>
            </div>

            <div class="card-footer">
                {!! Form::submit('Simpan', ['class' => 'btn btn-primary btn-submit']) !!}
                <a href="{{ route('admins.index') }}" class="btn btn-default"> Kembali </a>
            </div>

            {!! Form::close() !!}

        </div>
    </div>
@endsection
