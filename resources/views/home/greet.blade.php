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

<div id="fh5co-couple-story" class="greetings-class">
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2 text-center fh5co-heading animate-box" style="margin-bottom: 0px;">
                <h2>Ucapan</h2>
                <div id="greetings-list">
                    <hr style="border: 1px solid;">
                    <h2 style="font-size: 30px;">ِNama Pengirim</h2>
                    <p style="">Pesan</p>
                </div>
                <button type="button" class="btn btn-primary" id="next_page_btn" style="display: none" onclick="greetingGetDataNext();">
                    {{-- <i class="fa fa-eye" aria-hidden="true"></i>  --}}
                    Lihat Lainnya
                </button>
            </div>
        </div>
    </div>
</div>

@push('third_party_scripts')
    <script>
        $(document).ready(function() {
            greetingGetData();
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
                    Swal.fire(
                        'Pesan Terkirim!',
                        'Terima kasih',
                        'success'
                    )
                    $('#greet').val('');
                    greetingGetData();
                }
            })
        }
    </script>

    <script>
        function greetingGetData() {
            $.ajax({
                url : '{{ url()->current() }}',
                method: 'GET',
                data: {
                    "action": "greeting-get-data"
                },
                success: function(result) {
                    var html = ``;
                    var arr = result.data.data;
                    $.each(arr, function(index, value) {
                        html += `
                            <hr style="border: 1px solid;">
                            <h2 style="font-size: 25px; font-family: 'Work Sans', Arial, sans-serif;">ِNama Pengirim</h2>
                            <p style="">Pesan</p>
                        `;
                    });
                    $('#greetings-list').html(html);

                    if (result.data.next_page_url) {
                        $('#next_page_btn').show();
                        next_page_url = result.data.next_page_url;
                    } else {
                        $('#next_page_btn').hide();
                        next_page_url = null;
                    }
                }
            })
        }

        var next_page_url = null;
        function greetingGetDataNext() {
            $('#next_page_btn').prop('disabled', true);
            if (next_page_url) {
                $.ajax({
                    url : next_page_url,
                    method: 'GET',
                    data: {
                        "action": "greeting-get-data"
                    },
                    success: function(result) {
                        var html = ``;
                        var arr = result.data.data;
                        $.each(arr, function(index, value) {
                            html += `
                                <hr style="border: 1px solid;">
                                <h2 style="font-size: 25px; font-family: 'Work Sans', Arial, sans-serif;">ِNama Pengirim</h2>
                                <p style="">Pesan</p>
                            `;
                        });
                        $('#greetings-list').append(html);

                        if (result.data.next_page_url) {
                            $('#next_page_btn').show();
                            next_page_url = result.data.next_page_url;
                        } else {
                            $('#next_page_btn').hide();
                            next_page_url = null;
                        }

                        $('#next_page_btn').prop('disabled', false);
                    }
                })
            }
        }
    </script>
@endpush