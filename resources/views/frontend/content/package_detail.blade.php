@extends('frontend.main')
@section('title','package-detail')
@section('content')
<!-- Header Start -->
<div class="container-fluid page-header">
    <div class="container">
        <div class="d-flex flex-column align-items-center justify-content-center" style="min-height: 400px">
            <h3 class="display-4 text-white text-uppercase">{{$packagedetail->destination}}</h3>
            <div class="d-inline-flex text-white">
                <p class="m-0 text-uppercase"><a class="text-white" href="{{route('home')}}">Home</a></p>
                <i class="fa fa-angle-double-right pt-1 px-3"></i>
                <p class="m-0 text-uppercase">package-detail</p>
            </div>
        </div>
    </div>
</div>
<!-- Header End -->

<!-- Booking Start -->
<!-- <div class="container-fluid booking mt-5 pb-5">
    <div class="container pb-5">
        <div class="bg-light shadow" style="padding: 30px;">
            <div class="row align-items-center" style="min-height: 60px;">
                <div class="col-md-10">
                    <div class="row">
                        <div class="col-md-3">
                            <div class="mb-3 mb-md-0">
                                <select class="custom-select px-4" style="height: 47px;">
                                    <option selected>Destination</option>
                                    <option value="1">Destination 1</option>
                                    <option value="2">Destination 1</option>
                                    <option value="3">Destination 1</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="mb-3 mb-md-0">
                                <div class="date" id="date1" data-target-input="nearest">
                                    <input type="text" class="form-control p-4 datetimepicker-input" placeholder="Depart Date" data-target="#date1" data-toggle="datetimepicker"/>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="mb-3 mb-md-0">
                                <div class="date" id="date2" data-target-input="nearest">
                                    <input type="text" class="form-control p-4 datetimepicker-input" placeholder="Return Date" data-target="#date2" data-toggle="datetimepicker"/>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="mb-3 mb-md-0">
                                <select class="custom-select px-4" style="height: 47px;">
                                    <option selected>Duration</option>
                                    <option value="1">Duration 1</option>
                                    <option value="2">Duration 1</option>
                                    <option value="3">Duration 1</option>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-2">
                    <button class="btn btn-primary btn-block" type="submit" style="height: 47px; margin-top: -2px;">Submit</button>
                </div>
            </div>
        </div>
    </div>
</div> -->
<!-- Booking End -->

<!-- Pagkage Start -->
<div class="container-fluid py-5">
    <div class="container py-5">
        <div class="row">
            <div class="col-lg-8">
                <!-- Pagkage Detail Start -->
                <div class="pb-3">
                    @if (!empty($packagedetail))
                    <div class="col-lg-12 col-md-12 mb-4">
                        <div class="package-item bg-white mb-2">
                            <img class="img-fluid" src="{{asset('storage/package/'.$packagedetail->image)}}" alt="">
                            <div class="p-4">
                                <h3 class="m-0 text-uppercase text-center font-weight-bolder pb-2">
                            <i class="fa fa-map-marker-alt text-primary mr-2"></i>{{$packagedetail->destination}}</h3>
                                <div class="pt-2 d-flex justify-content-between mb-3">
                            <small class="m-0"><i class="fa fa-calendar-alt text-primary mr-2"></i>{{$packagedetail->days}}
                                days</small>
                            <small class="m-0">Rs.{{$packagedetail->price1}}/ <span class="text-success">Bus</span></small>
                            <small class="m-0">Rs.{{$packagedetail->price2}}/ <span class="text-success">Jeep</span></small>
                        </div>
                                <p>{!!$packagedetail->description!!}</p>
                            </div>
                        </div>
                    </div>
                    @endif
                </div>
                <!-- Blog Detail End -->

                <!-- Comment List Start -->
                <!-- <div class="bg-white" style="padding: 30px; margin-bottom: 30px;">
                    <h4 class="text-uppercase mb-4" style="letter-spacing: 5px;">3 Comments</h4>
                    <div class="media mb-4">
                        <img src="img/user.jpg" alt="Image" class="img-fluid mr-3 mt-1" style="width: 45px;">
                        <div class="media-body">
                            <h6><a href="">John Doe</a> <small><i>01 Jan 2045</i></small></h6>
                            <p>Diam amet duo labore stet elitr invidunt ea clita ipsum voluptua, tempor labore
                                accusam ipsum et no at. Kasd diam tempor rebum magna dolores sed sed eirmod ipsum.
                                Gubergren clita aliquyam consetetur sadipscing, at tempor amet ipsum diam tempor
                                consetetur at sit.</p>
                            <button class="btn btn-sm btn-outline-primary">Reply</button>
                        </div>
                    </div>
                    <div class="media">
                        <img src="img/user.jpg" alt="Image" class="img-fluid mr-3 mt-1" style="width: 45px;">
                        <div class="media-body">
                            <h6><a href="">John Doe</a> <small><i>01 Jan 2045</i></small></h6>
                            <p>Diam amet duo labore stet elitr invidunt ea clita ipsum voluptua, tempor labore
                                accusam ipsum et no at. Kasd diam tempor rebum magna dolores sed sed eirmod ipsum.
                                Gubergren clita aliquyam consetetur sadipscing, at tempor amet ipsum diam tempor
                                consetetur at sit.</p>
                            <button class="btn btn-sm btn-outline-primary">Reply</button>
                            <div class="media mt-4">
                                <img src="img/user.jpg" alt="Image" class="img-fluid mr-3 mt-1"
                                    style="width: 45px;">
                                <div class="media-body">
                                    <h6><a href="">John Doe</a> <small><i>01 Jan 2045</i></small></h6>
                                    <p>Diam amet duo labore stet elitr invidunt ea clita ipsum voluptua, tempor
                                        labore accusam ipsum et no at. Kasd diam tempor rebum magna dolores sed sed
                                        eirmod ipsum. Gubergren clita aliquyam consetetur sadipscing, at tempor amet
                                        ipsum diam tempor consetetur at sit.</p>
                                    <button class="btn btn-sm btn-outline-primary">Reply</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> -->
                <!-- Comment List End --> 

                <!-- Comment Form Start -->
                <!-- <div class="bg-white mb-3" style="padding: 30px;">
                    <h4 class="text-uppercase mb-4" style="letter-spacing: 5px;">Leave a comment</h4>
                    <form>
                        <div class="form-group">
                            <label for="name">Name *</label>
                            <input type="text" class="form-control" id="name">
                        </div>
                        <div class="form-group">
                            <label for="email">Email *</label>
                            <input type="email" class="form-control" id="email">
                        </div>
                        <div class="form-group">
                            <label for="website">Website</label>
                            <input type="url" class="form-control" id="website">
                        </div>

                        <div class="form-group">
                            <label for="message">Message *</label>
                            <textarea id="message" cols="30" rows="5" class="form-control"></textarea>
                        </div>
                        <div class="form-group mb-0">
                            <input type="submit" value="Leave a comment"
                                class="btn btn-primary font-weight-semi-bold py-2 px-3">
                        </div>
                    </form>
                </div> -->
                <!-- Comment Form End -->
            </div>

            <!-- Category List -->
            <div class="col-lg-4 mt-5 mt-lg-0">
                
                <!-- Recent Post -->
                <div class="mb-5">
                    <h4 class="text-uppercase mb-4" style="letter-spacing: 5px;">Recent Post</h4>
                    @foreach ($recent as $recent)
                    <a class="d-flex align-items-center text-decoration-none bg-white mb-3" href="{{$recent->id}}">
                <img class="recent-post" src="{{asset('storage/blog/'.$recent->image)}}" alt="">
                <div class="pl-3">
                    <h6 class="m-1">{{$recent->title}}</h6>
                    <small>{{date('d M Y', strtotime($recent->created_at))}}</small>
                </div>
                </a>
                @endforeach
            </div>
            <!-- End Category List -->

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
@endsection