@extends('backend.main')
@section('content')
<div class="container-fluid pt-4 px-4">
    <div class="row g-4">
        <div class="col-sm-12 col-xl-12">
            <div class="bg-secondary rounded h-100 p-4">
                <h6 class="mb-4">Packages</h6>
                <form action="{{route('update.package',$data->id)}}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-3">
                        <label class="col-form-label col-md-2">Destination <span class="text-danger">*</span></label>
                        <div class="col-md-12">
                            <input type="text" class="form-control" name="destination" value="{{$data->destination}}">
                            @error('destination')
                            <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                    <div class="mb-3">
                        <label class="col-form-label col-md-2">Price By Bus</label>
                        <div class="col-md-12">
                            <input type="number" class="form-control" name="price1" value="{{$data->price1}}">
                        </div>
                    </div>
                    <div class="mb-3">
                        <label class="col-form-label col-md-2">Price By Jeep</label>
                        <div class="col-md-12">
                            <input type="number" class="form-control" name="price2" value="{{$data->price2}}">
                        </div>
                    </div>
                    <div class="mb-3">
                        <label class="col-form-label col-md-2">Days <span class="text-danger">*</span></label>
                        <div class="col-md-12">
                            <input type="number" class="form-control" name="days" value="{{$data->days}}">
                            @error('days')
                            <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                    <div class="mb-3">
                        <label class="col-form-label col-md-2">Description <span class="text-danger">*</span></label>
                        <div class="col-md-12">
                            <textarea class="form-control" name="description" id="description" rows="4">{{$data->description}}</textarea>
                            @error('description')
                            <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                    <div class="mb-3">
                        <label class="col-form-label col-md-2">Image <span class="text-danger">*</span></label>
                        <div class="col-md-12">
                            <input type="file" class="form-control" name="image">
                            <img src="{{asset('storage/package/'.$data->image)}}" alt="package image" width="100" height="100" class="mt-2">
                            @error('image')
                            <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>

                    <button type="submit" class="btn btn-primary">Create Package</button>
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