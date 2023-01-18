@extends('layouts.app')

@section('content')
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>
                    @lang('models/admins.singular') @lang('crud.detail')
                    </h1>
                </div>
                <div class="col-sm-6">
                    <a class="btn btn-default float-right"
                       href="{{ route('admins.index') }}">
                                                    @lang('crud.back')
                                            </a>
                </div>
            </div>
        </div>
    </section>

    <div class="content px-3">
        <div class="card">
            <div class="card-body">
                <div class="row">
                    @include('admins.show_fields')
                </div>
            </div>
        </div>

        <div class="card">
            <div class="card-body">
                <ul>
                    @forelse ($audits as $audit)
                    <li>
                        @lang('article.updated.metadata', $audit->getMetadata())
                
                        @foreach ($audit->getModified() as $attribute => $modified)
                        <ul>
                            <li>@lang('article.'.$audit->event.'.modified.'.$attribute, $modified)</li>
                        </ul>
                        @endforeach
                    </li>
                    @empty
                    <p>@lang('article.unavailable_audits')</p>
                    @endforelse
                </ul>
            </div>
        </div>
    </div>
@endsection
