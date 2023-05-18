<!-- Photo Field -->
<div class="form-group col-sm-6">
    {!! Form::label('photo', 'Foto:') !!}
    {!! Form::file('photo', ['class' => 'form-control img-input', 'accept' => 'image/*']) !!}
    @if (isset($photoGallery))
        <img src="{{ $photoGallery->photo_thumbnail }}" alt="photo" class="img-thumbnail img-thumbnail-photo" style="max-height: 200px;">
    @else
        <img src="{{ asset('image-not-found.jpg') }}" alt="photo" class="img-thumbnail img-thumbnail-photo" style="max-height: 200px;">
    @endif
</div>