@extends('layouts_wedding.app')

@section('content')
    <header id="fh5co-header" class="fh5co-cover" role="banner" style="background-image:url({{ asset('wedding-master/images/img_bg_2.jpg') }}); height: 700px;"
        data-stellar-background-ratio="0.5">
        <div class="overlay"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-md-offset-2 text-center">
                    <div class="display-t" style="height: 700px;">
                        <div class="display-tc animate-box" data-animate-effect="fadeIn" style="height: 700px;">
                            <h2 style="margin-bottom: 0px;">{{ @$setting['1_1']->value }}</h2>
                            <h1 style="margin-bottom: 30px;">{{ @$bride->name_short }} &amp; {{ @$groom->name_short }}</h1>
                            <div class="simply-countdown simply-countdown-one"></div>
                            <h2 style="margin-bottom: 0px;">{{ @$wedding->event_date_start }}</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <audio id="audio" controls autoplay loop style="width: 100%;">
        <source src="{{ asset('background-music.mp3') }}" type="audio/mpeg">
        Please update your browser does not support the audio element.
    </audio>

    @include('home.couple')

    @include('home.schedule')

    @include('home.prayer')

    @include('home.gallery')

    @include('home.gift')

    {{-- @include('home.greet') --}}
@endsection
