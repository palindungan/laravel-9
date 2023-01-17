@extends('layouts.app')

@section('content')
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Admins</h1>
                </div>
                <div class="col-sm-6">
                    <a class="btn btn-primary float-right"
                       href="{{ route('admins.create') }}">
                        Add New
                    </a>
                </div>
            </div>
        </div>
    </section>

    <div class="content px-3">

        @include('flash::message')

        <div class="clearfix"></div>

        <div class="card">
            <form action="{{ url('admin/import') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <input type="file" name="file">
                <br>
                <button class="btn btn-success">
                    Import Data
                </button>
            </form>

            @include('admins.table')
        </div>
    </div>

@endsection
