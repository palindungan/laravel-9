<!-- Name Field -->
<div class="form-group col-sm-6">
    {!! Form::label('name', 'Nama Lengkap:') !!}
    {!! Form::text('name', null, ['class' => 'form-control', 'required', 'maxlength' => 255, 'maxlength' => 255]) !!}
</div>

<!-- Email Field -->
<div class="form-group col-sm-6">
    {!! Form::label('email', 'Alamat Email:') !!}
    {!! Form::email('email', null, ['class' => 'form-control', 'required', 'maxlength' => 255, 'maxlength' => 255]) !!}
</div>

{{-- <!-- Email Verified At Field -->
<div class="form-group col-sm-6">
    {!! Form::label('email_verified_at', 'Email Verified At:') !!}
    {!! Form::text('email_verified_at', null, ['class' => 'form-control','id'=>'email_verified_at']) !!}
</div> --}}

{{-- @push('page_scripts')
    <script type="text/javascript">
        $('#email_verified_at').datepicker()
    </script>
@endpush --}}

<!-- password Field -->
<div class="form-group col-sm-6">
    {!! Form::label('password', 'Password:') !!}
    {!! Form::password('password', ['class' => 'form-control', 'required', 'maxlength' => 255, 'maxlength' => 255]) !!}
</div>

<!-- Konfirmasi Password Field -->
<div class="form-group col-sm-6">
    {!! Form::label('password_confirmation', 'Konfirmasi Password:') !!}
    {!! Form::password('password_confirmation', ['class' => 'form-control', 'required', 'maxlength' => 255, 'maxlength' => 255]) !!}
</div>

{{-- <!-- Remember Token Field -->
<div class="form-group col-sm-6">
    {!! Form::label('remember_token', 'Remember Token:') !!}
    {!! Form::text('remember_token', null, ['class' => 'form-control', 'maxlength' => 100, 'maxlength' => 100]) !!}
</div> --}}

<!-- Photo Field -->
<div class="form-group col-sm-6">
    {!! Form::label('photo', 'Foto:') !!}
    {!! Form::text('photo', null, ['class' => 'form-control', 'maxlength' => 255, 'maxlength' => 255]) !!}
</div>

{{-- <!-- Attachment Field -->
<div class="form-group col-sm-6">
    {!! Form::label('attachment', 'Attachment:') !!}
    {!! Form::text('attachment', null, ['class' => 'form-control', 'maxlength' => 255, 'maxlength' => 255]) !!}
</div> --}}

<!-- Name Short Field -->
<div class="form-group col-sm-6">
    {!! Form::label('name_short', 'Nama Panggilan:') !!}
    {!! Form::text('name_short', null, ['class' => 'form-control', 'required', 'maxlength' => 255, 'maxlength' => 255]) !!}
</div>

<!-- Name Degree First Field -->
<div class="form-group col-sm-6">
    {!! Form::label('name_degree_first', 'Gelar Awal:') !!}
    {!! Form::text('name_degree_first', null, ['class' => 'form-control', 'maxlength' => 255, 'maxlength' => 255]) !!}
</div>

<!-- Name Degree Last Field -->
<div class="form-group col-sm-6">
    {!! Form::label('name_degree_last', 'Gelar Akhir:') !!}
    {!! Form::text('name_degree_last', null, ['class' => 'form-control', 'maxlength' => 255, 'maxlength' => 255]) !!}
</div>

<!-- Name Parent Male Field -->
<div class="form-group col-sm-6">
    {!! Form::label('name_parent_male', 'Nama Ayah:') !!}
    {!! Form::text('name_parent_male', null, ['class' => 'form-control', 'maxlength' => 255, 'maxlength' => 255]) !!}
</div>

<!-- Name Parent Female Field -->
<div class="form-group col-sm-6">
    {!! Form::label('name_parent_female', 'Nama Ibu:') !!}
    {!! Form::text('name_parent_female', null, ['class' => 'form-control', 'maxlength' => 255, 'maxlength' => 255]) !!}
</div>