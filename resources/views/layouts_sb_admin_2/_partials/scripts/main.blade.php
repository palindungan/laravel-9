<!-- Bootstrap core JavaScript-->
<script src="{{ asset('sb-admin-2/vendor/jquery/jquery.min.js') }}"></script>
<script src="{{ asset('sb-admin-2/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>

<!-- Core plugin JavaScript-->
<script src="{{ asset('sb-admin-2/vendor/jquery-easing/jquery.easing.min.js') }}"></script>

<!-- Custom scripts for all pages-->
<script src="{{ asset('sb-admin-2/js/sb-admin-2.min.js') }}"></script>

<script>
    function btnSubmitDisabled() {
        console.log('disabled');
        $('.btn-submit').prop('disabled', true);
        setTimeout(function() {
            $('.btn-submit').prop('disabled', false);
        }, 10000);
        return true;
    }
</script>

<script>
    $(document).ready(() => {
        $('.img-input').change(function () {
            img_input_id = $(this).attr("id");

            const file = this.files[0];
            if (file) {
                let reader = new FileReader();
                reader.onload = function (event) {
                    $('.img-thumbnail-' + img_input_id).attr('src', event.target.result);
                }
                reader.readAsDataURL(file);
            }
        });
    });
</script>