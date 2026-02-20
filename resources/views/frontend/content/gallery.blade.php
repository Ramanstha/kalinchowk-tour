@extends('frontend.main')
@section('title','Gallery')
@section('content')
<!-- Header Start -->
<div class="container-fluid page-header">
    <div class="container">
        <div class="d-flex flex-column align-items-center justify-content-center" style="min-height: 400px">
            <h3 class="display-4 text-white text-uppercase">Gallery</h3>
            <div class="d-inline-flex text-white">
                <p class="m-0 text-uppercase"><a class="text-white" href="{{route('home')}}">Home</a></p>
                <i class="fa fa-angle-double-right pt-1 px-3"></i>
                <p class="m-0 text-uppercase">Gallery</p>
            </div>
        </div>
    </div>
</div>
<!-- Header End -->

<!-- Service Start -->
<div class="container-fluid pb-5">
    <div class="container pt-5 pb-3">
        <div class="text-center mb-3 pb-3">
            <h6 class="text-primary text-uppercase" style="letter-spacing: 5px;">Gallery</h6>
            <h1>Some Pictures</h1>
        </div>

        <div class="row ">
			<div class="tz-gallery d-flex flex-wrap justify-content-between">
				@foreach ($gallery as $gallery)
				<div class="col-sm-12 col-md-3 col-lg-3 my-3">
					<a href="{{asset('storage/gallery/main/'.$gallery->image)}}" target="_blank">
						<img class="gallery-img" src="{{asset('storage/gallery/thumbnail/'.$gallery->image)}}"
							alt="Gallery Images" width="100%">
					</a>
				</div>
				@endforeach
			</div>
		</div>
        <!-- <div class="col-12">
            <div class="d-flex justify-content-center" style="padding: 30px;">
                {{ $galleryItems->links() }}
            </div>
        </div> -->
    </div>
</div>
<!-- Service End -->
@stop