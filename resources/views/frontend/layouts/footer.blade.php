@php
use App\Models\Contact;
use App\Models\Sitesetting;
use App\Models\SocialMedia;
use App\Models\Service;

$contact = Contact::first();
$sitesetting = Sitesetting::first();
$media = SocialMedia::first();
$service = Service::orderBy('id','asc')->take(5)->get();
@endphp
<footer>
    <div class="container-fluid bg-dark text-white-50">
        <div class="container">
            <div class="row pt-5">
                <div class="col-lg-3 col-md-6 mb-3">
                    @if (!empty($sitesetting->image))
                    <a href="{{route('home')}}" class="navbar-brand">
                        <img src="{{asset('storage/sitesetting/'.$sitesetting->image)}}" alt="home" class="f-logo">
                    </a>
                    <!-- <p>{!!$sitesetting->description!!}</p> -->
                    <h6 class="text-white text-uppercase mt-4 mb-3" style="letter-spacing: 5px;">Follow Us</h6>
                    @if(!empty($media))
                    <div class="d-inline-flex align-items-center">
                        <a class="text-primary px-2" href="{{$media->facebook}}" target="_blank" title="Facebook">
                            <i class="fab fa-facebook-f"></i>
                        </a>
                        <a class="text-primary px-2" href="{{$media->linkedin}}" target="_blank" title="Viber">
                            <i class="fab fa-viber"></i>
                        </a>
                        <a class="text-primary px-2" href="{{$media->youtube}}" target="_blank" title="Youtube">
                            <i class="fab fa-youtube"></i>
                        </a>
                        <a class="text-primary px-2" href="{{$media->instagram}}" target="_blank" title="Instagram">
                            <i class="fab fa-instagram"></i>
                        </a>
                        <a class="text-primary px-2" href="{{$media->linkedin}}" target="_blank" title="Whatsapp">
                            <i class="fab fa-whatsapp"></i>
                        </a>    
                    </div>
                    @endif
                    @endif
                </div>
                <div class="col-lg-3 col-md-6 mb-3">
                    <h5 class="text-white text-uppercase mb-4" style="letter-spacing: 5px;">Our Services</h5>
                    @foreach ($service as $service)
                    <div class="d-flex flex-column justify-content-start">
                        <p class="text-white-50 mb-2"><i class="fa fa-angle-right mr-2"></i>fghihugyuftygiuho</p>
                    </div>
                    @endforeach
                </div>
                <div class="col-lg-3 col-md-6 mb-3">
                    <h5 class="text-white text-uppercase mb-4" style="letter-spacing: 5px;">Usefull Links</h5>
                    <div class="d-flex flex-column justify-content-start">
                        <a class="text-white-50 mb-2" href="{{route('about')}}"><i class="fa fa-angle-right mr-2"></i>About</a>
                        <a class="text-white-50 mb-2" href="{{route('service')}}"><i class="fa fa-angle-right mr-2"></i>Services</a>
                        <a class="text-white-50 mb-2" href="{{route('package')}}"><i class="fa fa-angle-right mr-2"></i>Packages</a>
                        <a class="text-white-50 mb-2" href="#"><i class="fa fa-angle-right mr-2"></i>Our Team</a>
                        <a class="text-white-50 mb-2" href="#"><i class="fa fa-angle-right mr-2"></i>Testimonial</a>
                        <a class="text-white-50" href="{{route('blog')}}"><i class="fa fa-angle-right mr-2"></i>Blog</a>
                    </div>
                </div>
                @if (!empty($contact))
                <div class="col-lg-3 col-md-6 mb-3">
                    <h5 class="text-white text-uppercase mb-4" style="letter-spacing: 5px;">Contact Us</h5>
                    <p class="text-capitalize"><i class="fa fa-map-marker-alt mr-2 text-capitalize"></i>{{$contact->address}}</p>
                    <p><i class="fa fa-phone-alt mr-2"></i>{{$contact->phone}}</p>
                    <p><i class="fa fa-envelope mr-2"></i>{{$contact->email}}</p>
                </div>
                @endif
            </div>
        </div>
    </div>
    <div class="container-fluid bg-dark text-white border-top py-4 px-sm-3 px-md-5"
        style="border-color: rgba(256, 256, 256, .1) !important;">
        <div class="row">
            <div class="col-lg-6 text-center text-md-left mb-3 mb-md-0">
                @if(!empty($sitesetting))
                <p class="m-0 text-white-50">Copyright &copy; <a class="text-capitalize" href="{{route('home')}}">{{$sitesetting->name}}</a>. All Rights Reserved.</a>
                </p>
                @endif
            </div>
            <div class="col-lg-6 text-center text-md-right">
                <p class="m-0 text-white-50">Designed by <a href="https://ramanstha.com.np/">Raman Shrestha</a>
                </p>
            </div>
        </div>
    </div>
</footer>