@extends('frontend.main')
@section('title','Home')
@section('content')
<!-- Carousel Start -->
<div class="container-fluid p-0">
    <div id="header-carousel" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
            @foreach ($banner as $key=> $banner)
            <div class="carousel-item {{$key==0?'active':''}}">
                <img class="w-100" src="{{asset('storage/banner/'.$banner->image)}}" height="600px" alt="Image">
                <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                    <div class="p-3" style="max-width: 900px;">
                        <h1 class="display-3 text-white mb-md-4">{{ $item->title }}</h1>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
        @if(count($banner) > 1)
        <a class="carousel-control-prev" href="#header-carousel" data-slide="prev">
            <div class="btn btn-dark carousel-btn">
                <span class="carousel-control-prev-icon mb-n2"></span>
            </div>
        </a>
        <a class="carousel-control-next" href="#header-carousel" data-slide="next">
            <div class="btn btn-dark carousel-btn">
                <span class="carousel-control-next-icon mb-n2"></span>
            </div>
        </a>
        @endif
    </div>
</div>
<!-- Carousel End -->

<!-- About Start -->
@if(!empty($aboutus))
<div class="container-fluid py-5">
    <div class="container pt-lg-5">
        <div class="row">
            <div class="col-lg-6 about-img-col">
                <div class="position-relative h-100">
                    <img class="position-absolute w-100 h-100" src="{{ asset('storage/aboutus/'.$aboutus->image) }}"
                        alt="{{ $aboutus->title }}" style="object-fit: cover;">
                </div>
            </div>
            <div class="col-lg-6 pt-lg-5 pb-lg-5">
                <div class="about-text bg-white p-4 p-lg-5 my-lg-5">
                    <h6 class="text-primary text-uppercase section-subtitle">About Us</h6>
                    <h1 class="mb-3">{{ $aboutus->title }}</h1>
                    <p>{{ Str::limit(strip_tags($aboutus->description), 500) }}</p>
                    <a href="{{ route('about') }}" class="btn btn-primary mt-1">More</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endif
<!-- About End -->

<!-- Feature Start -->
<div class="container-fluid pt-5 pb-2">
    <div class="container pb-5">
        <div class="row">
            <div class="col-lg-4 col-md-6 mb-4 mb-lg-0">
                <div class="d-flex">
                    <div class="feature-icon d-flex flex-shrink-0 align-items-center justify-content-center bg-primary mr-3">
                        <i class="fa fa-2x fa-money-check-alt text-white"></i>
                    </div>
                    <div class="d-flex flex-column">
                        <h5 class="">Competitive Pricing</h5>
                        <p class="m-0">We offer competitive prices for all our services.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 mb-4 mb-lg-0">
                <div class="d-flex">
                    <div class="feature-icon d-flex flex-shrink-0 align-items-center justify-content-center bg-primary mr-3">
                        <i class="fa fa-2x fa-award text-white"></i>
                    </div>
                    <div class="d-flex flex-column">
                        <h5 class="">Best Services</h5>
                        <p class="m-0">We are proud to provide best services.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 mb-4 mb-lg-0">
                <div class="d-flex">
                    <div class="feature-icon d-flex flex-shrink-0 align-items-center justify-content-center bg-primary mr-3">
                        <i class="fa fa-2x fa-globe text-white"></i>
                    </div>
                    <div class="d-flex flex-column">
                        <h5 class="">All Nepal Coverage</h5>
                        <p class="m-0">We provide comprehensive coverage for all popular tourist destinations in Nepal.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Feature End -->

<!-- Service Start -->
<div class="container-fluid">
    <div class="container pt-5 pb-3">
        <div class="text-center mb-3 pb-3">
            <h6 class="text-primary text-uppercase section-subtitle">Services</h6>
            <h1>Our Services</h1>
        </div>
        <div class="row">
            @foreach ($service as $item)
            <div class="col-lg-4 col-md-6 mb-4">
                <div class="service-item bg-white text-center h-100 py-5 px-4">
                    <i class="fa fa-2x {{ $item->icon }} mx-auto mb-4"></i>
                    <h5 class="text-capitalize mb-2">{{ $item->title }}</h5>
                    <div class="m-0">{!! $item->description !!}</div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>
<!-- Service End -->

<!-- Packages Start -->
<div class="container-fluid">
    <div class="container pt-5 pb-3">
        <div class="text-center mb-3 pb-3">
            <h6 class="text-primary text-uppercase section-subtitle">Packages</h6>
            <h1>Perfect Tour Packages</h1>
        </div>
        <div class="row g-4">
            @foreach ($packages as $packages)
            <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.3s">
                <div class="service-item pb-4">
                    <div class="overflow-hidden mb-2">
                        <img class="img-fluid" src="{{asset('storage/package/'.$packages->image)}}" alt="">
                    </div>
                    <div class="text-center px-4">
                        <h4 class="text-uppercase font-weight-bolder">{{$packages->destination}}</h4>
                        <div class="pt-2 d-flex justify-content-between mb-3">
                            <small class="m-0">{{$packages->days}}-days</small>
                            <small class="m-0">Rs.{{$packages->price1}}/ <span class="text-success">Bus</span></small>
                            <small class="m-0">Rs.{{$packages->price2}}/ <span class="text-success">Jeep</span></small>
                        </div>
                        <p>{!!Str::limit($packages->description,400)!!}</p>
                    </div>
                        <a class="btn-slide mt-2" href="{{route('package-detail',$packages->id)}}"><i
                                class="fa fa-arrow-right"></i><span>Read More</span></a>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>
<!-- Packages End -->

<!-- Team Start -->
<div class="container-fluid">
    <div class="container pt-5 pb-3">
        <div class="text-center mb-3 pb-3">
            <h6 class="text-primary text-uppercase section-subtitle">Members</h6>
            <h1>Our Travel Members</h1>
        </div>
        <div class="row">
            @foreach ($team as $member)
            <div class="col-lg-3 col-md-4 col-sm-6 pb-2">
                <div class="team-item bg-white mb-4">
                    <div class="team-img position-relative overflow-hidden">
                        <img class="img-fluid w-100" src="{{ asset('storage/team/'.$member->image) }}" alt="{{ $member->name }}">
                        <div class="team-social">
                            @if($member->facebook)
                            <a class="btn btn-outline-primary btn-square" href="{{ $member->facebook }}" target="_blank" rel="noopener"><i
                                    class="fab fa-facebook-f"></i></a>
                            @endif
                            @if($member->instagram)
                            <a class="btn btn-outline-primary btn-square" href="{{ $member->instagram }}" target="_blank" rel="noopener"><i
                                    class="fab fa-instagram"></i></a>
                            @endif
                            @if($member->linkedin)
                            <a class="btn btn-outline-primary btn-square" href="{{ $member->linkedin }}" target="_blank" rel="noopener"><i
                                    class="fab fa-linkedin-in"></i></a>
                            @endif
                        </div>
                    </div>
                    <div class="text-center py-4">
                        <h5 class="text-capitalize">{{ $member->name }}</h5>
                        <p class="text-capitalize m-0">{{ $member->designation }}</p>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>
<!-- Team End -->

<!-- Testimonial Start -->
<div class="container-fluid">
    <div class="container py-5">
        <div class="text-center mb-3 pb-3">
            <h6 class="text-primary text-uppercase section-subtitle">Testimonial</h6>
            <h1>What Say Our Clients</h1>
        </div>
        <div class="owl-carousel testimonial-carousel" id="ts">
            @foreach ($testimonial as $client)
            <div class="text-center pb-4">
                <img class="testimonial-img mx-auto" src="{{ asset('storage/testimonial/'.$client->image) }}" alt="{{ $client->name }}">
                <div class="testimonial-text bg-white p-4 mt-n5">
                    <p class="mt-5">{{ Str::limit(strip_tags($client->message), 100) }}</p>
                    <h5 class="text-truncate">{{ $client->name }}</h5>
                    <span class="text-capitalize">{{ $client->profession }}</span>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>
<!-- Testimonial End -->

<!-- Blog Start -->
<div class="container-fluid">
    <div class="container pt-5 pb-3">
        <div class="text-center mb-3 pb-3">
            <h6 class="text-primary text-uppercase section-subtitle">Our Blog</h6>
            <h1>Latest From Our Blog</h1>
        </div>
        <div class="row pb-3">
            @foreach ($blog as $post)
            <div class="col-lg-4 col-md-6 mb-4">
                <div class="blog-item h-100 bg-white">
                    <div class="position-relative">
                        <a class="blog-img-wrap d-block" href="{{ route('blog-detail', $post->id) }}">
                            <img class="blog-img" src="{{ asset('storage/blog/'.$post->image) }}" alt="{{ $post->title }}">
                        </a>
                        <div class="blog-date">
                            <h6 class="font-weight-bold mb-0">{{ date('d', strtotime($post->created_at)) }}</h6>
                            <small class="text-white text-uppercase">{{ date('M', strtotime($post->created_at)) }}</small>
                        </div>
                    </div>
                    <div class="blog-content p-3">
                        <div class="d-flex justify-content-center mb-2">
                            <a class="blog-title text-decoration-none text-center font-weight-bold"
                                href="{{ route('blog-detail', $post->id) }}">{{ $post->title }}</a>
                        </div>
                        <p class="m-0">{{ Str::limit(strip_tags($post->description), 100) }}</p>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>
<!-- Blog End -->
@endsection
