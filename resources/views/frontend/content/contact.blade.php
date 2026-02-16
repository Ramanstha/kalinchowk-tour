@extends('frontend.main')
@section('title','Contact Us')
@section('content')
<!-- Header Start -->
<div class="container-fluid page-header">
    <div class="container">
        <div class="d-flex flex-column align-items-center justify-content-center" style="min-height: 400px">
            <h3 class="display-4 text-white text-uppercase">Contact</h3>
            <div class="d-inline-flex text-white">
                <p class="m-0 text-uppercase"><a class="text-white" href="{{route('home')}}">Home</a></p>
                <i class="fa fa-angle-double-right pt-1 px-3"></i>
                <p class="m-0 text-uppercase">Contact</p>
            </div>
        </div>
    </div>
</div>
<!-- Header End -->
<div class="container py-5">
    <div class="usercontact-row row">
        <div class="col-md-6 col-sm-12">
            @if (!empty($contact))
            <iframe src="{{$contact->map}}" frameborder="0" height="590px" width="100%">{{$contact->map}}</iframe>
            @endif
        </div>
        <div class="col-md-6 col-sm-12 " id="contact-form">
            @if(Session::has('message'))
            <span class="text-primary">{{Session::get('message')}}</span>
            @endif
            <form action="{{route('store.contact.message')}}" method="POST">
                @csrf
                <div class="mb-3">
                    <label class="form-label" for="name">Name: <span class="text-danger">*</span></label>
                    <input class="form-control" type="text" placeholder="Full Name" name="name" />
                    @error('name')
                    <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>

                <div class="mb-3">
                    <label class="form-label" for="email">Email: <span class="text-danger">*</span></label>
                    <input class="form-control" type="email" placeholder="Email" name="email" />
                    @error('email')
                    <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>

                <div class="mb-3">
                    <label class="form-label" for="Address"> Address: <span class="text-danger">*</span></label>
                    <input class="form-control" type="text" placeholder=" Address" name="address" />
                    @error('address')
                    <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>

                <div class="mb-3">
                    <label class="form-label" for="emailAddress">Phone: <span class="text-danger">*</span></label>
                    <input class="form-control" type="tel" placeholder="+977" name="phone" />
                    @error('phone')
                    <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>

                <div class="mb-3">
                    <label class="form-label" for="message">Message: <span class="text-danger">*</span></label>
                    <textarea class="form-control" type="text" placeholder="Message" style="height: 10rem;"
                        name="message"></textarea>
                    @error('message')
                    <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>

                <div class="d-grid text-center ">
                    <button class="btn btn-rounded-pill btn-primary" type="submit">Submit</button>
                </div>
            </form>
        </div>
    </div>
</div>
@stop