@extends('layouts.app')

@section('content')
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-12">
                    <h1>
                    Create Data
                    </h1>
                </div>
            </div>
        </div>
    </section>

    <div class="content px-3">

        {!! Form::open(['enctype' => 'multipart/form-data', 'id' => 'my_form']) !!}

        @include('adminlte-templates::common.errors')

        <div class="card">
            <div class="card-body">
                <div class="row">
                    <div class="form-group col-sm-12 mb-4">
                        {!! Form::label('input_text', 'Kalimat',['class'=>'fw-bold form-label form-label-sm']) !!}
                        {!! Form::textarea('input_text', null, ['class' => "form-control form-control-solid form-control-sm", 'rows' => 3, "style" => "text-transform: lowercase;"]) !!}
                    </div>
                </div>
            </div>

            <div class="card-body">
                <div class="row">
                    <div class="form-group col-sm-12 mb-4">
                        {!! Form::label('setting', 'Setting', ['class' => 'fw-bold form-label form-label-sm']) !!}
                        {!! Form::text('setting', null, ['class' => 'form-control form-control-solid form-control-sm', 'placeholder' => 'h,v,5,-5', "style" => "text-transform: lowercase;"]) !!}
                    </div>
                </div>
            </div>

            <div class="card-footer">
                {!! Form::button('Ubah', ['class' => 'btn btn-primary', 'id' => 'btn_convert']) !!}
            </div>

            <div class="card-body">
                <div class="row">
                    <div class="form-group col-sm-12 mb-4">
                        {!! Form::label('result_text', 'Hasil Konvert',['class'=>'fw-bold form-label form-label-sm']) !!}
                        {!! Form::textarea('result_text', null, ['class' => "form-control form-control-solid form-control-sm", 'rows' => 3, 'disabled']) !!}
                    </div>
                </div>
            </div>
        </div>

        {!! Form::close() !!}
    </div>
@endsection

@push('third_party_scripts')
    <script>
        $(document).on('click', '#btn_convert', function() {
            let myForm = document.getElementById('my_form');
            let formData = new FormData(myForm);
    
            const form = $(myForm);
    
            $.ajax({
                type:"POST",
                url:"{{ url('test-mitra-informatika/hasilSoal1') }}",
                data: formData,
                processData: false,
                contentType: false,
                cache: false,
                enctype: 'multipart/form-data',
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                success:function(result) {
                    console.log(result);
                    $("textarea#result_text").val(result);
                },
                error: function(xhr, err, thrownError) {
                    $("textarea#result_text").val("terjadi kesalahan setting");
                }
            });
        });
    </script>
@endpush