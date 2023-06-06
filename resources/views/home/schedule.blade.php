<div id="fh5co-event" class="fh5co-bg" 
    style="
        background-image: url({{ asset('wedding-master/images/img_bg_3.jpg') }}); 
        background-repeat: no-repeat;
        background-position: center
    "
>
    <div class="overlay"></div>
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2 text-center fh5co-heading animate-box">
                <span>{{ @$setting['3_1']->value }}</span>
                <h2>{{ @$setting['3_2']->value }}</h2>
            </div>
        </div>
        <div class="row">
            <div class="display-t">
                <div class="display-tc">
                    <div class="col-md-10 col-md-offset-1">
                        @foreach (@$events as $key => $item)
                            <div class="col-md-12 col-sm-12 text-center">
                                <div class="event-wrap animate-box">
                                    <h3>{{ @$item->name }}</h3>
                                    <div class="event-col">
                                        <i class="icon-clock"></i>
                                        @if ($key == 0 && !empty(@$guest->time_start) && !empty(@$guest->time_end))
                                            <span>{{ \Carbon\Carbon::parse(@$guest->time_start)->format("H:i") }}</span>
                                            <span>{{ \Carbon\Carbon::parse(@$guest->time_end)->format("H:i") }}</span>
                                        @else
                                            <span>{{ \Carbon\Carbon::parse(@$item->time_start)->format("H:i") }}</span>
                                            <span>{{ \Carbon\Carbon::parse(@$item->time_end)->format("H:i") }}</span>
                                        @endif
                                    </div>
                                    <div class="event-col">
                                        <i class="icon-calendar"></i>
                                        <span>{{ @$item->date_start->locale('id')->settings(['formatFunction' => 'translatedFormat'])->format("l") }} {{ @$item->date_start->format("d") }}</span>
                                        <span>{{ @$item->date_start->locale('id')->settings(['formatFunction' => 'translatedFormat'])->format("F") }}, {{ @$item->date_start->format("Y") }}</span>
                                    </div>
                                    <p style="margin-bottom: 0px;">{{ @$item->place }}</p>
                                    <p>{{ @$item->address }}</p>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>