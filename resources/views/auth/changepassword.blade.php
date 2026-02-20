@extends('backend.main')
@section('title','Change Password')
@section('content')
<div class="container-fluid pt-4 px-4">
    <div class="row g-4">
        <div class="col-sm-12 col-xl-12">
            <div class="bg-secondary rounded h-100 p-4">
                <h6 class="mb-4">Change Password</h6>
                @if(Session::has('status'))
                <span class="alert alert-success">{{Session::get('status')}}
                </span>
                @elseif(Session::has('error'))
                <span class="alert alert-danger">{{Session::get('error')}}
                </span>
                @endif
                <form action="{{route('updatenewpassword')}}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-3">
                        <label class="col-form-label col-md-2">Old Password <span class="text-danger">*</span></label>
                        <div class="col-md-12">
                            <input type="password" class="form-control" name="oldpassword" placeholder="Old Password">
                            @error('oldpassword')
                            <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                    <div class="mb-3">
                        <label class="col-form-label col-md-2">New Password <span class="text-danger">*</span></label>
                        <div class="col-md-12">
                            <input type="password" class="form-control" name="newpassword" placeholder="New Password">
                            @error('newpassword')
                            <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                    <div class="mb-3">
                        <label class="col-form-label col-md-2">Confirm Password <span
                                class="text-danger">*</span></label>
                        <div class="col-md-12">
                            <input type="password" class="form-control" name="confirmpassword"
                                placeholder="Confirm Password">
                            @error('confirmpassword')
                            <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary">Update Password</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection