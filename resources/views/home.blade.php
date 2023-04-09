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

    <div id="fh5co-couple">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-md-offset-2 text-center fh5co-heading animate-box">
                    <h2>Hello!</h2>
                    <h3>November 28th, 2016 New York, USA</h3>
                    <p>We invited you to celebrate our wedding</p>
                </div>
            </div>
            <div class="couple-wrap animate-box">
                <div class="couple-half">
                    <div class="groom">
                        <img src="{{ asset('wedding-master/images/groom.jpg') }}" alt="groom" class="img-responsive">
                    </div>
                    <div class="desc-groom">
                        <h3>Joefrey Mahusay</h3>
                        <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there
                            live the blind texts. Separated they live in Bookmarksgrove</p>
                    </div>
                </div>
                <p class="heart text-center"><i class="icon-heart2"></i></p>
                <div class="couple-half">
                    <div class="bride">
                        <img src="{{ asset('wedding-master/images/bride.jpg') }}" alt="groom" class="img-responsive">
                    </div>
                    <div class="desc-bride">
                        <h3>Sheila Mahusay</h3>
                        <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there
                            live the blind texts. Separated they live in Bookmarksgrove</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
