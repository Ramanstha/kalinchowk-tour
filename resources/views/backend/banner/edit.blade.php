@extends('backend.main')
@section('content')
<div class="container-fluid pt-4 px-4">
    <div class="row g-4">
        <div class="col-sm-12 col-xl-6">
            <div class="bg-secondary rounded h-100 p-4">
                <h6 class="mb-4">Banner</h6>
                <form action="{{route('update.banner',$data->id)}}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-3">
                        <label class="col-form-label col-md-2">Title <span class="text-danger">*</span></label>
                        <div class="col-md-12">
                            <input type="text" class="form-control" name="title" value="{{$data->title}}">
                            @error('title')
                            <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>

                    <div class="mb-3">
                        <label class="col-form-label col-md-2">Image<span class="text-danger">*</span></label>
                        <div class="col-md-12">
                            <input type="file" class="form-control" name="image">
                            <img class="mt-2" src="{{asset('storage/banner/'.$data->image)}}" height="100" width="100" alt="">
                            @error('image')
                            <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>

                    <button type="submit" class="btn btn-primary">Update Banner</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection