<div id="fh5co-started" class="fh5co-bg" style="background-image:url({{ asset('wedding-master/images/img_bg_4.jpg') }});">
    <div class="overlay"></div>
    <div class="container">
        <div class="row animate-box">
            <div class="col-md-8 col-md-offset-2 text-center fh5co-heading">
                <h2>Harapan, Ucapan dan Doa</h2>
                <p>Terima kasih.</p>
            </div>
        </div>
        <div class="row animate-box">
            <div class="col-md-10 col-md-offset-1">
                <form class="form-inline" id="greetingForm">
                    <input type="hidden" id="code" name="code" value="{{ @$guest->code }}" readonly>
                    <div class="col-md-4 col-sm-4">
                        <div class="form-group">
                            <label for="name" class="sr-only">Nama</label>
                            <input type="text" class="form-control" id="name" name="name" placeholder="Nama" value="{{ @$guest->name }}" readonly>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-4">
                        <div class="form-group">
                            <label for="greet" class="sr-only">Ucapan</label>
                            <input type="text" class="form-control" id="greet" name="greet" placeholder="Ucapan" required>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-4">
                        <button type="submit" class="btn btn-default btn-block btn-submit">Kirim</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

@push('third_party_scripts')
    <script>
        $(document).ready(function() {
            
        });
        $("#greetingForm").on("submit", function (e) {
            e.preventDefault();

            greetingSubmit();

            $('.btn-submit').prop('disabled', true);
            setTimeout(function() {
                $('.btn-submit').prop('disabled', false);
            }, 10000);
        });
        function greetingSubmit() {
            var data = $("#greetingForm").serialize();
            $.ajax({
                type: 'POST',
                url: "{{ url('greeting-store') }}",
                data: data,
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                success: function (result) {
                    console.log(result);
                }
            })
        }
    </script>
@endpush