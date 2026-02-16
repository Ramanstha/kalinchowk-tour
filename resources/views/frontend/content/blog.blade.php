@extends('frontend.main')
@section('title','Blogs')
@section('content')
<!-- Header Start -->
<div class="container-fluid page-header">
    <div class="container">
        <div class="d-flex flex-column align-items-center justify-content-center" style="min-height: 400px">
            <h3 class="display-4 text-white text-uppercase">Blog</h3>
            <div class="d-inline-flex text-white">
                <p class="m-0 text-uppercase"><a class="text-white" href="">Home</a></p>
                <i class="fa fa-angle-double-right pt-1 px-3"></i>
                <p class="m-0 text-uppercase">Blog</p>
            </div>
        </div>
    </div>
</div>
<!-- Header End -->

<!-- Blog Start -->
<div class="container-fluid">
    <div class="container py-5">
        <div class="row">
            <div class="col-lg-9">
                <div class="row pb-3">
                    @foreach ($blog as $blog)
                    <div class="col-lg-6 col-md-6 mb-4 pb-2">
                        <div class="blog-item">
                            <div class="position-relative">
                                <img class="blog-img" src="{{asset('storage/blog/'.$blog->image)}}" alt="">
                                <div class="blog-date">
                                    <h6 class="font-weight-bold mb-n1">{{date('d', strtotime($blog->created_at))}}</h6>
                                    <small
                                        class="text-white text-uppercase">{{date('M', strtotime($blog->created_at))}}</small>
                                </div>
                            </div>
                            <div class="bg-white p-4">
                                <div class="d-flex mb-2 justify-content-center">
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
                            <ul class="pagination pagination-lg justify-content-center bg-white mb-0"
                                style="padding: 30px; position: relative; z-index: 1;">
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

            <div class="col-lg-3 mt-5 mt-lg-0">
                <!-- Category List -->
                <!-- <div class="mb-5">
                    <h4 class="text-uppercase mb-4" style="letter-spacing: 5px;">Categories</h4>
                    <div class="bg-white" style="padding: 30px;">
                        <ul class="list-inline m-0">
                            @foreach ($category as $category)
                            <li class="mb-3 d-flex justify-content-between align-items-center">
                                <a class="text-dark text-capitalize" href=""><i
                                        class="fa fa-angle-right text-primary mr-2"></i>{{$category->category}}</a>
                                {{-- <span
                                    class="badge badge-primary badge-pill">{{App\Models\package::where('category','value')->count()}}</span> --}}
                            </li>
                            @endforeach
                        </ul>
                    </div>
                </div> -->

                <!-- Recent Post -->
                <div class="mb-5">
                    <h4 class="text-uppercase mb-4" style="letter-spacing: 5px;">Recent Post</h4>
                    @foreach ($recent as $recent)
                    <a class="d-flex align-items-center text-decoration-none bg-white mb-3"
                        href="{{route('blog-detail',$recent->id)}}">
                        <img class="recent-post" src="{{asset('storage/blog/'.$recent->image)}}" alt="">
                        <div class="pl-3">
                            <h6 class="m-1">{{$recent->title}}</h6>
                            <small>{{date('d M Y', strtotime($blog->created_at))}}</small>
                        </div>
                    </a>
                    @endforeach
                </div>

                <!-- Tag Cloud -->
                <div class="mb-5">
                    <h4 class="text-uppercase mb-4" style="letter-spacing: 5px;">Tag Cloud</h4>
                    <div class="d-flex flex-wrap m-n1">
                        <a href="" class="btn btn-light m-1">Design</a>
                        <a href="" class="btn btn-light m-1">Development</a>
                        <a href="" class="btn btn-light m-1">Marketing</a>
                        <a href="" class="btn btn-light m-1">SEO</a>
                        <a href="" class="btn btn-light m-1">Writing</a>
                        <a href="" class="btn btn-light m-1">Consulting</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Blog End -->
@stop