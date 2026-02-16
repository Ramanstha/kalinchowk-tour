@extends('backend.main')
@section('content')
<div class="container-fluid pt-4 px-4">
    <div class="row g-4">
        <div class="col-sm-12 col-xl-12">
            <div class="bg-secondary rounded h-100 p-4">
                <h6 class="mb-4">Gallery</h6>
                <form action="{{route('store.gallery')}}" method="post" enctype="multipart/form-data">
                    @csrf
                     <div class="col-md-5 col-sm-12 mb-3">
                            <label class="col-form-label col-md-2">Image <span class="text-danger">*</span></label>
                            <div class="col-md-12">
                                <input type="file" class="form-control" name="image[]" multiple>
                                @error('image')
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                    <button type="submit" class="btn btn-primary">Create Gallery</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection