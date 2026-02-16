@extends('backend.main')
@section('content')
<div class="container-fluid pt-4 px-4">
    <div class="row g-4">
        <div class="col-sm-12 col-xl-6">
            <div class="bg-secondary rounded h-100 p-4">
                <h6 class="mb-4">Socialmedia</h6>
                <form action="{{route('update.socialmedia',$data->id)}}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-3">
                        <label class="col-form-label col-md-2">Facebook</label>
                        <div class="col-md-12">
                            <input type="url" class="form-control" name="facebook" value="{{$data->facebook}}">
                            @error('facebook')
                            <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                    <div class="mb-3">
                        <label class="col-form-label col-md-2">Instagram</label>
                        <div class="col-md-12">
                            <input type="url" class="form-control" name="instagram" value="{{$data->instagram}}">
                            @error('instagram')
                            <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                    <div class="mb-3">
                        <label class="col-form-label col-md-2">Whatsapp</label>
                        <div class="col-md-12">
                            <input type="url" class="form-control" name="whatsapp" value="{{$data->whatsapp}}">
                            @error('whatsapp')
                            <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                    <div class="mb-3">
                        <label class="col-form-label col-md-2">Youtube</label>
                        <div class="col-md-12">
                            <input type="url" class="form-control" name="youtube" value="{{$data->youtube}}">
                            @error('youtube')
                            <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                    <div class="mb-3">
                        <label class="col-form-label col-md-2">Viber</label>
                        <div class="col-md-12">
                            <input type="url" class="form-control" name="viber" value="{{$data->viber}}">
                            @error('viber')
                            <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>

                    <button type="submit" class="btn btn-primary">Update Socialmedia</button>
                </form>
            </div>
        </div>
    </div>
</div>
<script src="https://cdn.ckeditor.com/4.20.1/standard/ckeditor.js"></script>
<script>
    CKEDITOR.replace('description');
</script>
@endsection