@extends('frontend.main')
@section('title','Packages')
@section('content')
<!-- Header Start -->
<div class="container-fluid page-header">
    <div class="container">
        <div class="d-flex flex-column align-items-center justify-content-center" style="min-height: 400px">
            <h3 class="display-4 text-white text-uppercase">Packages</h3>
            <div class="d-inline-flex text-white">
                <p class="m-0 text-uppercase"><a class="text-white" href="{{route('home')}}">Home</a></p>
                <i class="fa fa-angle-double-right pt-1 px-3"></i>
                <p class="m-0 text-uppercase">Packages</p>
            </div>
        </div>
    </div>
</div>
<!-- Header End -->

<!-- Packages Start -->
<div class="container-fluid">
    <div class="container pt-5 pb-3">
        <div class="text-center mb-3 pb-3">
            <h6 class="text-primary text-uppercase" style="letter-spacing: 5px;">Packages</h6>
            <h1>Pefect Tour Packages</h1>
        </div>
        <div class="row">
            @foreach ($packages as $packages)
            <div class="col-lg-4 col-md-6 mb-4">
                <div class="package-item bg-white mb-2">
                    <img class="package-img" src="{{asset('storage/package/'.$packages->image)}}" alt="">
                    <div class="p-2">
                        <a href="{{route('package-detail',$packages->id)}}" class=" text-capitalize font-weight-bolder">
                            <i class="fa fa-map-marker-alt text-primary mr-2"></i>{{$packages->destination}}</a>
                        <div class="pt-2 d-flex justify-content-between mb-3">
                            <small class="m-0"><i class="fa fa-calendar-alt text-primary mr-2"></i>{{$packages->days}}
                                days</small>
                            <small class="m-0">Rs.{{$packages->price1}}/ <span class="text-success">Bus</span></small>
                            <small class="m-0">Rs.{{$packages->price2}}/ <span class="text-success">Jeep</span></small>
                        </div>
                        <p class="h5 text-decoration-none">{!!Str::limit($packages->description,100)!!}</p>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>
<!-- Packages End -->

<!-- Blog Start -->
<div class="container-fluid">
    <div class="container pt-5 pb-3">
        <div class="text-center mb-3 pb-3">
            <h6 class="text-primary text-uppercase" style="letter-spacing: 5px;">Our Blog</h6>
            <h1>Latest From Our Blog</h1>
        </div>
        <div class="row pb-3">
            @foreach ($blog as $blog)
            <div class="col-lg-4 col-md-6 mb-4">
                <div class="blog-item">
                    <div class="position-relative">
                        <img class="blog-img" src="{{asset('storage/blog/'.$blog->image)}}" alt="">
                        <div class="blog-date">
                            <h6 class="font-weight-bold mb-n1">{{date('d', strtotime($blog->created_at))}}</h6>
                            <small class="text-white text-uppercase">{{date('M', strtotime($blog->created_at))}}</small>
                        </div>
                    </div>
                    <div class="bg-white p-2">
                        <div class="d-flex justify-content-center">
                            <a class="blog-title text-decoration-none text-center font-weight-bold "
                                href="{{route('blog-detail',$blog->id)}}">{{$blog->title}}</a>
                        </div>
                        <p>{!!Str::limit($blog->description,100)!!}
                    </div>
                </div>
            </div>
            @endforeach
            <div class="col-12">
                <nav aria-label="Page navigation">
                    <ul class="pagination pagination-lg justify-content-center bg-white mb-0" style="padding: 30px;">
                        <li class="page-item disabled">
                            <a class="page-link" href="#" aria-label="Previous">
                                <span aria-hidden="true">&laquo;</span>
                                <span class="sr-only">Previous</span>
                            </a>
                        </li>
                        <li class="page-item active"><a class="page-link" href="#">1</a></li>
                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                        <li class="page-item">
                            <a class="page-link" href="#" aria-label="Next">
                                <span aria-hidden="true">&raquo;</span>
                                <span class="sr-only">Next</span>
                            </a>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
    </div>
</div>
<!-- Blog End -->
@stop