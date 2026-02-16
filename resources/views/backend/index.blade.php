@extends('backend.main')
@section('title','Homepage')
@section('content')

<!-- Dashboard Counter Start -->
<div class="container-fluid pt-4 px-4">
    <div class="row g-4">
        <div class="col-sm-6 col-xl-3">
            <div class="bg-secondary rounded d-flex align-items-center justify-content-between p-4">
                <i class="fa fa-hand-holding-heart fa-3x text-primary"></i>
                <div class="ms-3">
                    <p class="mb-2">Total Packages</p>
                    <h6 class="mb-0">{{App\Models\Package::count()}}</h6>
                </div>
            </div>
        </div>
        <div class="col-sm-6 col-xl-3">
            <div class="bg-secondary rounded d-flex align-items-center justify-content-between p-4">
                <i class="fa fa-images fa-3x text-primary"></i>
                <div class="ms-3">
                    <p class="mb-2">Total Images</p>
                    <h6 class="mb-0">{{App\Models\Gallery::count()}}</h6>
                </div>
            </div>
        </div>
        <div class="col-sm-6 col-xl-3">
            <div class="bg-secondary rounded d-flex align-items-center justify-content-between p-4">
                <i class="fa fa-blog fa-3x text-primary"></i>
                <div class="ms-3">
                    <p class="mb-2">Total Blog</p>
                    <h6 class="mb-0">{{App\Models\Blog::count()}}</h6>
                </div>
            </div>
        </div>
        <div class="col-sm-6 col-xl-3">
            <div class="bg-secondary rounded d-flex align-items-center justify-content-between p-4">
                <i class="fa fa-comment fa-3x text-primary"></i>
                <div class="ms-3">
                    <p class="mb-2">User Messages</p>
                    <h6 class="mb-0">{{App\Models\UserMessage::count()}}</h6>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Dashboard Counter End -->

<!-- Widgets Start -->
<div class="container-fluid pt-4 px-4">
    <div class="row g-4">
        <div class="col-sm-12 col-md-12 col-xl-12">
            <div class="h-100 bg-secondary rounded p-4">
                <div class="d-flex align-items-center justify-content-between mb-2">
                    <h6 class="mb-0">Messages</h6>
                    <a href="">Show All</a>
                </div>

                <div class="d-flex align-items-center border-bottom py-3">
                    <div class="w-100 ms-3">
                        <div class="d-flex w-100 justify-content-between">
                            <h6 class="mb-0">Name</h6>
                            <small>22/15</small>
                        </div>
                        <span>Message</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Widgets End -->
@endsection