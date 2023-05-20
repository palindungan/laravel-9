<!-- jQuery -->
<script src="{{ asset('wedding-master/js/jquery.min.js') }}"></script>

<!-- jQuery Easing -->
<script src="{{ asset('wedding-master/js/jquery.easing.1.3.js') }}"></script>

<!-- Bootstrap -->
<script src="{{ asset('wedding-master/js/bootstrap.min.js') }}"></script>

<!-- Waypoints -->
<script src="{{ asset('wedding-master/js/jquery.waypoints.min.js') }}"></script>

<!-- Carousel -->
<script src="{{ asset('wedding-master/js/owl.carousel.min.js') }}"></script>

<!-- countTo -->
<script src="{{ asset('wedding-master/js/jquery.countTo.js') }}"></script>

<!-- Stellar -->
<script src="{{ asset('wedding-master/js/jquery.stellar.min.js') }}"></script>

<!-- Magnific Popup -->
<script src="{{ asset('wedding-master/js/jquery.magnific-popup.min.js') }}"></script>
<script src="{{ asset('wedding-master/js/magnific-popup-options.js') }}"></script>

<!-- // <script src="https://cdnjs.cloudflare.com/ajax/libs/prism/0.0.1/prism.min.js"></script> -->

{{-- <script src="{{ asset('wedding-master/js/simplyCountdown.js') }}"></script> --}}
<script src="{{ asset('simplyCountdown/dev/simplyCountdown.js') }}"></script>

<!-- Main -->
<script src="{{ asset('wedding-master/js/main.js') }}"></script>

<script>
    var d = new Date("2023-07-01 12:00:00");

    var event_date = "{{ @$wedding->event_date_start }} {{ @$wedding->event_time_start }}";
    if (event_date) {
        d = new Date(event_date);
    }

    console.log(d.getFullYear() + ","
    + (d.getMonth() + 1) + ","
    + d.getDate() + ","
    + d.getHours() + ","
    + d.getMinutes() + ","
    + d.getSeconds() + ",");

    // default example
    simplyCountdown('.simply-countdown-one', {
        year: d.getFullYear(),
        month: (d.getMonth() + 1),
        day: d.getDate(),
        hours: d.getHours(), // Default is 0 [0-23] integer
        minutes: d.getMinutes(), // Default is 0 [0-59] integer
        seconds: d.getSeconds(), // Default is 0 [0-59] integer
        words: { //words displayed into the countdown
            days: { singular: 'day', plural: 'hari' },
            hours: { singular: 'hour', plural: 'jam' },
            minutes: { singular: 'minute', plural: 'menit' },
            seconds: { singular: 'second', plural: 'detik' }
        }
    });
</script>