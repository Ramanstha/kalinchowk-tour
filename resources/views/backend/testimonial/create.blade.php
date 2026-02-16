@extends('backend.main')
@section('content')
<div class="container-fluid pt-4 px-4">
    <div class="row g-4">
        <div class="col-sm-12 col-xl-12">
            <div class="bg-secondary rounded h-100 p-4">
                <h6 class="mb-4">Testimonial</h6>
                <form action="{{route('store.testimonial')}}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <div class="col-md-5 col-sm-12 mb-3">
                            <label class="col-form-label col-md-2">Name <span class="text-danger">*</span></label>
                            <div class="col-md-12">
                                <input type="text" class="form-control" name="name" value="{{old('name')}}">
                                @error('name')
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-5 col-sm-12 mb-3">
                            <label class="col-form-label col-md-3">Profession <span class="text-danger">*</span></label>
                            <div class="col-md-12">
                                <input type="text" class="form-control" name="profession" value="{{old('profession')}}">
                                @error('profession')
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                    </div>
                    <div class="col-md-5 col-sm-12 mb-3">
                        <label class="col-form-label col-md-2">Image <span class="text-danger">*</span></label>
                        <div class="col-md-12">
                            <input type="file" class="form-control" name="image">
                            @error('image')
                            <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                    <div class="mb-3">
                        <label class="col-form-label col-md-2">Message <span class="text-danger">*</span></label>
                        <div class="col-md-12">
                            <textarea class="form-control" name="message" id="message"
                                rows="3">{{old('message')}}</textarea>
                            @error('message')
                            <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary">Create Testimonial</button>
                </form>
            </div>
        </div>
    </div>
</div>
<script src="https://cdn.ckeditor.com/4.20.1/standard/ckeditor.js"></script>
<script>
    CKEDITOR.replace('message');
</script>
@endsection