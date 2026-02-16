@extends('frontend.main')
@section('title', 'Our Team')
@section('content')
<!-- Header Start -->
<div class="container-fluid page-header">
    <div class="container">
        <div class="d-flex flex-column align-items-center justify-content-center" style="min-height: 400px">
            <h3 class="display-4 text-white text-uppercase">Our Team</h3>
            <div class="d-inline-flex text-white">
                <p class="m-0 text-uppercase"><a class="text-white" href="{{route('home')}}">Home</a></p>
                <i class="fa fa-angle-double-right pt-1 px-3"></i>
                <p class="m-0 text-uppercase">Our Team</p>
            </div>
        </div>
    </div>
</div>
<!-- Header End -->

<!-- Team Start -->
<div class="container-fluid py-5">
    <div class="container pt-5 pb-3">
        <div class="text-center mb-3 pb-3">
            <h6 class="text-primary text-uppercase" style="letter-spacing: 5px;">Our Team</h6>
            <h1>Our Travel Team</h1>
        </div>
        <div class="row">
            @foreach($team as $team)
            <div class="col-lg-4 col-md-4 col-sm-12 pb-2">
                <div class="team-item bg-white mb-4">
                    <div class="team-img position-relative overflow-hidden">
                        <img class="img-fluid w-100" src="{{asset('storage/team/'.$team->image)}}"
                            style="height: 250px">
                        <div class="team-social">
                            <a class="btn btn-outline-primary btn-square" href="{{$team->facebook}}"><i
                                    class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-outline-primary btn-square" href="{{$team->instagram}}"><i class="fab fa-instagram"></i></a>
                            <a class="btn btn-outline-primary btn-square" href="{{$team->linkedin}}"><i class="fab fa-linkedin-in"></i></a>
                        </div>
                    </div>
                    <div class="text-center py-4">
                        <h5 class="text-truncate">{{$team->name}}</h5>
                        <p class="m-0">{{$team->designation}}</p>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>
<!-- Team End -->
@endsection