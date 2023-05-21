@extends('layouts_wedding.app')

@section('content')
    <header id="fh5co-header" class="fh5co-cover" role="banner" style="background-image:url({{ asset('wedding-master/images/img_bg_2.jpg') }}); height: 850px;"
        data-stellar-background-ratio="0.5">
        <div class="overlay"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-md-offset-2 text-center">
                    <div class="display-t" style="height: 850px;">
                        <div class="display-tc animate-box" data-animate-effect="fadeIn" style="height: 850px;">
                            <h2 style="margin-bottom: 0px;">{{ @$setting['1_1']->value }}</h2>
                            <h1 style="margin-bottom: 30px;">{{ @$bride->name_short }} &amp; {{ @$groom->name_short }}</h1>
                            <div class="simply-countdown simply-countdown-one"></div>
                            <h2 style="margin-bottom: 0px;">{{ @$wedding->event_date_start }}</h2>
                            <div class="swipe_up" style="margin: auto;"></div>
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

    <!-- Modal -->
    <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document" style="height: 100%;">
            <div class="modal-content" style="height: 100%;">
                {{-- <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle">
                        Modal title
                    </h5>
                </div> --}}
                <div class="modal-body" style="text-align: center; background: linear-gradient( rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5) ), url({{ asset('wedding-master/images/img_bg_2.jpg') }}); height: 100%;">
                    <h1 style="color: white;">Undangan Pernikahan</h1>
                    <h1 style="color: white;">{{ @$bride->name_short }} &amp; {{ @$groom->name_short }}</h1>
                    <h1 style="color: white;">Dear Mr/Mrs/Ms</h1>
                    <h1 style="color: white;">Nama Tamu</h1>
                    <button type="button" class="btn btn-primary" data-dismiss="modal">Buka Undangan</button>
                </div>
                {{-- <div class="modal-footer"></div> --}}
            </div>
        </div>
    </div>
@endsection

@push('third_party_scripts')
    <script>
        $('#exampleModalCenter').modal('show');
        // $('#exampleModalCenter').modal('hide');
    </script>
@endpush
