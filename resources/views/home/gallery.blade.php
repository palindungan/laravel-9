<div id="fh5co-gallery" class="fh5co-section-gray" style="padding-top: 0px;">
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2 text-center fh5co-heading animate-box">
                <span>{{ @$setting['5_1']->value }}</span>
                <h2>{{ @$setting['5_2']->value }}</h2>
                <p>{{ @$setting['5_3']->value }}</p>
            </div>
        </div>
        <div class="row row-bottom-padded-md">
            <div class="col-md-12">
                <ul id="fh5co-gallery-list">
                    @foreach ($photo_galleries as $item)
                        <li class="one-third animate-box" data-animate-effect="fadeIn" style="background-image: url({{ @$item->photo_thumbnail }}); ">
                            {{-- <a href="{{ asset('wedding-master/images/gallery-1.jpg') }}">
                                <div class="case-studies-summary">
                                    <span>-</span>
                                    <h2>-</h2>
                                </div>
                            </a> --}}
                        </li>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>
</div>