@php
use App\Models\Contact;
use App\Models\Sitesetting;
use App\Models\SocialMedia;

$contact = Contact::first();
$sitesetting = Sitesetting::first();
$media = SocialMedia::first();
@endphp
<header>
    <div class="all-nav container-fluid bg-light pt-3 d-none d-lg-block">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 text-center text-lg-left mb-2 mb-lg-0">
                    @if (!empty($contact))
                    <div class="d-inline-flex align-items-center" style="color: #7ab830;">
                        <p><i class="fa fa-envelope mr-2"></i>{{$contact->email}}</p>
                        <p class="text-body px-3">|</p>
                        <p><i class="fa fa-phone-alt mr-2"></i>{{$contact->phone}}</p>
                    </div>
                    @endif
                </div>
                <div class="col-lg-6 text-center text-lg-right">
                    @if (!empty($media))
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
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid position-relative nav-bar p-0">
        <div class="container-lg position-relative p-0 px-lg-3" style="z-index: 9;">
            @if (!empty($sitesetting))
            <nav class="navbar navbar-expand-lg bg-light navbar-light shadow-lg py-3 py-lg-0 pl-3 pl-lg-5">
                <a href="{{route('home')}}" class="navbar-brand">
                    <h1 class="m-0 text-capitalize text-dark">{{$sitesetting->name}}</h1>
                </a>
                <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse justify-content-between px-3" id="navbarCollapse">
                    <div class="navbar-nav ml-auto py-0">
                        <a href="{{route('home')}}"
                            class="nav-item nav-link {{ Request::is('/') ? 'active' : '' }}">Home</a>
                        <a href="{{route('about')}}"
                            class="nav-item nav-link {{ Request::is('about-us') ? 'active' : '' }}">About</a>
                        <a href="{{route('service')}}"
                            class="nav-item nav-link {{ Request::is('services') ? 'active' : '' }}">Services</a>
                        <a href="{{route('package')}}"
                            class="nav-item nav-link {{ Request::is('packages') ? 'active' : '' }}">Packages</a>
                        <div class="nav-item dropdown">
                            <a href="#"
                                class="nav-link dropdown-toggle {{ Request::is('blog','gallery') ? 'active' : '' }}"
                                data-toggle="dropdown">Pages</a>
                            <div class="dropdown-menu border-0 rounded-0 m-0">
                                <a href="{{route('blog')}}"
                                    class="dropdown-item {{ Request::is('blog') ? 'active' : '' }}">Blog</a>
                                <a href="{{route('gallery')}}"
                                    class="dropdown-item {{ Request::is('gallery') ? 'active' : '' }}">Gallery</a>
                                <a href="{{route('ourteam')}}" class="dropdown-item">Our Team</a>
                            </div>
                        </div>
                        <a href="{{route('contact-us')}}"
                            class="nav-item nav-link {{ Request::is('contact-us') ? 'active' : '' }}">Contact</a>
                    </div>
                </div>
            </nav>
            @endif
        </div>
    </div>
</header>