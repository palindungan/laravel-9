@extends('layouts_wedding.app')

@section('content')
    <header id="fh5co-header" class="fh5co-cover" role="banner" style="background-image:url({{ asset('wedding-master/images/img_bg_2.jpg') }}); height: 600px;"
        data-stellar-background-ratio="0.5">
        <div class="overlay"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-md-offset-2 text-center">
                    <div class="display-t" style="height: 600px;">
                        <div class="display-tc animate-box" data-animate-effect="fadeIn" style="height: 600px;">
                            <h2 style="margin-bottom: 0px;">PERNIKAHAN DARI</h2>
                            <h1 style="margin-bottom: 30px;">Salsa &amp; Rizki</h1>
                            <div class="simply-countdown simply-countdown-one"></div>
                            <h2 style="margin-bottom: 0px;">01.07.23</h2>
                            {{-- <p><a href="#" class="btn btn-default btn-sm">01.07.23</a></p> --}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
@endsection
