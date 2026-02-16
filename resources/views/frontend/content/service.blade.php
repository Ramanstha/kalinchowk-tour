@extends('frontend.main')
@section('title','Services')
@section('content')
<!-- Header Start -->
<div class="container-fluid page-header">
    <div class="container">
        <div class="d-flex flex-column align-items-center justify-content-center" style="min-height: 400px">
            <h3 class="display-4 text-white text-uppercase">Services</h3>
            <div class="d-inline-flex text-white">
                <p class="m-0 text-uppercase"><a class="text-white" href="{{route('home')}}">Home</a></p>
                <i class="fa fa-angle-double-right pt-1 px-3"></i>
                <p class="m-0 text-uppercase">Services</p>
            </div>
        </div>
    </div>
</div>
<!-- Header End -->

<!-- Service Start -->
<div class="container-fluid py-5">
    <div class="container pt-5 pb-3">
        <div class="text-center mb-3 pb-3">
            <h6 class="text-primary text-uppercase" style="letter-spacing: 5px;">Services</h6>
            <h1>Tours & Travel Services</h1>
        </div>
        <div class="row">
            @foreach ($service as $service) 
            <div class="col-lg-4 col-md-6 mb-4">
                <div class="service-item bg-white text-center mb-2 py-5 px-4">
                    <i class="fa {!!$service->icon!!} mx-auto mb-4"></i>
                    <h5 class="mb-2">Travel Guide</h5>
                    <p class="m-0">Justo sit justo eos amet tempor amet clita amet ipsum eos elitr. Amet lorem est amet labore</p>
                </div>
            </div>
            @endforeach
            <div class="col-lg-4 col-md-6 mb-4">
                <div class="service-item bg-white text-center mb-2 py-5 px-4">
                    <i class="fa fa-2x fa-ticket-alt mx-auto mb-4"></i>
                    <h5 class="mb-2">Ticket Booking</h5>
                    <p class="m-0">Justo sit justo eos amet tempor amet clita amet ipsum eos elitr. Amet lorem est amet labore</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 mb-4">
                <div class="service-item bg-white text-center mb-2 py-5 px-4">
                    <i class="fa fa-2x fa-hotel mx-auto mb-4"></i>
                    <h5 class="mb-2">Hotel Booking</h5>
                    <p class="m-0">Justo sit justo eos amet tempor amet clita amet ipsum eos elitr. Amet lorem est amet labore</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 mb-4">
                <div class="service-item bg-white text-center mb-2 py-5 px-4">
                    <i class="fa fa-2x fa-route mx-auto mb-4"></i>
                    <h5 class="mb-2">Travel Guide</h5>
                    <p class="m-0">Justo sit justo eos amet tempor amet clita amet ipsum eos elitr. Amet lorem est amet labore</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 mb-4">
                <div class="service-item bg-white text-center mb-2 py-5 px-4">
                    <i class="fa fa-2x fa-ticket-alt mx-auto mb-4"></i>
                    <h5 class="mb-2">Ticket Booking</h5>
                    <p class="m-0">Justo sit justo eos amet tempor amet clita amet ipsum eos elitr. Amet lorem est amet labore</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 mb-4">
                <div class="service-item bg-white text-center mb-2 py-5 px-4">
                    <i class="fa fa-2x fa-hotel mx-auto mb-4"></i>
                    <h5 class="mb-2">Hotel Booking</h5>
                    <p class="m-0">Justo sit justo eos amet tempor amet clita amet ipsum eos elitr. Amet lorem est amet labore</p>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Service End -->


<!-- Testimonial Start -->
<div class="container-fluid">
    <div class="container py-5">
        <div class="text-center mb-3 pb-3">
            <h6 class="text-primary text-uppercase" style="letter-spacing: 5px;">Testimonial</h6>
            <h1>What Say Our Clients</h1>
        </div>
        <div class="owl-carousel " id="ts">
            @foreach ($testimonial as $client)
            <div class="text-center pb-4">
                <img class="img-fluid mx-auto" src="{{asset('storage/testimonial/'.$client->image)}}"
                    style="width: 100px; height: 100px;">
                <div class="testimonial-text bg-white p-4 mt-n5">
                    <p class="mt-5">{!!Str::limit($client->message,100)!!}</p>
                    <h5 class="text-truncate">{{$client->name}}</h5>
                    <span class="text-capitalize">{{$client->profession}}</span>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>
<!-- Testimonial End -->

@stop