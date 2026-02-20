@extends('backend.main')
@section('title','Change User Details')
@section('content')
<div class="container-fluid pt-4 px-4">
    <div class="row g-4">
        <div class="col-sm-12 col-xl-12">
            <div class="bg-secondary rounded h-100 p-4">
                <h6 class="mb-4">Change User Details</h6>
                @if(Session::has('status'))
                <span class="alert alert-success">{{Session::get('status')}}
                </span>
                @endif
                <form action="{{route('updatedetails')}}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-3">
                        <label class="col-form-label col-md-2">Change User's Name <span
                                class="text-danger">*</span></label>
                        <div class="col-md-12">
                            <input type="text" class="form-control" name="name" placeholder="Change Name"
                                value="{{Auth::user()->name}}">
                            @error('name')
                            <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                    <div class="mb-3">
                        <label class="col-form-label col-md-2">Email <span class="text-danger">*</span></label>
                        <div class="col-md-12">
                            <input type="text" class="form-control" name="email" placeholder="Change Email"
                                value="{{Auth::user()->email}}">
                            @error('email')
                            <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary">Update Details</button>
                </form>
            </div>
        </div>
    </div>
</div>
<script src="https://cdn.ckeditor.com/4.20.1/standard/ckeditor.js"></script>
<script>
    CKEDITOR.replace('map');
</script>
@endsection