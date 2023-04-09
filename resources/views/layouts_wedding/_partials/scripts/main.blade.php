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
<script src="{{ asset('wedding-master/js/simplyCountdown.js') }}"></script>
<!-- Main -->
<script src="{{ asset('wedding-master/js/main.js') }}"></script>

<script>
    var d = new Date(new Date().getTime() + 200 * 120 * 120 * 2000);

    // default example
    simplyCountdown('.simply-countdown-one', {
        year: d.getFullYear(),
        month: d.getMonth() + 1,
        day: d.getDate()
    });

    //jQuery example
    $('#simply-countdown-losange').simplyCountdown({
        year: d.getFullYear(),
        month: d.getMonth() + 1,
        day: d.getDate(),
        enableUtc: false
    });
</script>