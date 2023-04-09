@extends('layouts_wedding.app')

@section('content')
    <header id="fh5co-header" class="fh5co-cover" role="banner" style="background-image:url({{ asset('wedding-master/images/img_bg_2.jpg') }});"
        data-stellar-background-ratio="0.5">
        <div class="overlay"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-md-offset-2 text-center">
                    <div class="display-t">
                        <div class="display-tc animate-box" data-animate-effect="fadeIn">
                            <h1>Joefrey &amp; Sheila</h1>
                            <h2>We Are Getting Married</h2>
                            <div class="simply-countdown simply-countdown-one"></div>
                            <p><a href="#" class="btn btn-default btn-sm">Save the date</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
@endsection
