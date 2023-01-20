<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <style>
        .classku {
            color: orange
        }
    </style>
</head>
<body>
    <p>
        Selamat Datang di 
        <b class="classku" id="namaperusahaan">Olympic Group</b>
    </p>

    <ul>
        <li id="txt_1">Nama : Jhon Dhoe</li>
        <li id="txt_2">Umur : 25 tahun</li>
    </ul>

    <div class="form-group col-sm-6">
        {!! Form::label('name', 'Nama:') !!}
        {!! Form::text('name', null, ['class' => 'form-control', 'required', 'maxlength' => 255, 'maxlength' => 255]) !!}
    </div>
    <div class="form-group col-sm-6">
        {!! Form::label('age', 'Umur:') !!}
        {!! Form::text('age', null, ['class' => 'form-control', 'required', 'maxlength' => 255, 'maxlength' => 255]) !!}
    </div>
    <button id="btn_change" class="btn btn-default"> Ubah Data Diri </button>

    <script src="{{ mix('js/app.js') }}"></script>
    <script>
        $(document).on('click', '#btn_change', function() {
            var name = $("#name").val();
            var age = $("#age").val();

            $("#txt_1").text("Nama : " + name);
            $("#txt_2").text("Umur : " + age);

            $("#namaperusahaan").css({ 'color': 'blue' });
        });
    </script>
</body>
</html>