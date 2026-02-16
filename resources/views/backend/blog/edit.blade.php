@extends('backend.main')
@section('content')
<div class="container-fluid pt-4 px-4">
    <div class="row g-4">
        <div class="col-sm-12 col-xl-12">
            <div class="bg-secondary rounded h-100 p-4">
                <h6 class="mb-4">Blog</h6>
                <form action="{{route('update.blog',$data->id)}}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <div class="col-md-5 col-sm-12 mb-3">
                            <label class="col-form-label col-md-2">Title <span class="text-danger">*</span></label>
                            <div class="col-md-12">
                                <input type="text" class="form-control" name="title" value="{{$data->title}}">
                                @error('title')
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-5 col-sm-12 mb-3">
                            <label class="col-form-label col-md-2">Image <span class="text-danger">*</span></label>
                            <div class="col-md-12">
                                <input type="file" class="form-control" name="image">
                                <img class="mt-2" src="{{asset('storage/blog/'.$data->image)}}" height="100" width="100" alt="">
                                @error('image')
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                    </div>
                    <div class="mb-3">
                        <label class="col-form-label col-md-2">Description <span class="text-danger">*</span></label>
                        <div class="col-md-12">
                            <textarea class="form-control" name="description" id="description"
                                rows="3" value="{{$data->description}}">{{$data->description}}</textarea>
                            @error('description')
                            <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary">Update Blog</button>
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