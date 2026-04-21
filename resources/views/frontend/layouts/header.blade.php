@php
use App\Models\Contact;
use App\Models\Sitesetting;
use App\Models\SocialMedia;

$contact = Contact::first();
$sitesetting = Sitesetting::first();
$media = SocialMedia::first();
@endphp

<style>
    .top-bar { background: #f8f9fa; border-bottom: 1px solid #e9ecef; }
    .top-bar .contact-info a, .top-bar .contact-info p { color: #7ab830; font-size: 14px; }
    .top-bar .social-icons a { font-size: 14px; transition: color 0.3s; }
    .top-bar .social-icons a:hover { color: #7ab830 !important; }
    .navbar-brand img { height: 55px; }
    .navbar-brand h3 { font-size: 1.2rem; }
    .nav-link { font-weight: 500; font-size: 15px; }
    .nav-link.active, .nav-link:hover { color: #7ab830 !important; }
    .dropdown-item.active, .dropdown-item:hover { color: #7ab830 !important; background: #f8f9fa; }
    .mobile-info { border-top: 1px solid #e9ecef; padding-top: 10px; margin-top: 10px; }
    .mobile-info p, .mobile-info a { font-size: 13px; color: #7ab830; }
    @media (min-width: 992px) {
        .navbar-brand img { height: 70px; }
        .navbar-brand h3 { font-size: 1.5rem; }
    }
    @media (max-width: 576px) {
        .navbar-brand h3 { font-size: 0.95rem; }
        .navbar-brand img { height: 42px; }
    }
</style>

<header>
    {{-- Top bar: visible on lg+ --}}
    <div class="top-bar d-none d-lg-block py-2">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    @if (!empty($contact))
                    <div class="contact-info d-flex align-items-center">
                        <p class="mb-0"><i class="fa fa-envelope mr-2"></i>{{ $contact->email }}</p>
                        <span class="text-muted mx-2">|</span>
                        <p class="mb-0"><i class="fa fa-phone-alt mr-2"></i>{{ $contact->phone }}</p>
                    </div>
                    @endif
                </div>
                <div class="col-lg-6 text-right">
                    @if (!empty($media))
                    <div class="social-icons">
                        <a class="text-primary px-2" href="{{ $media->facebook }}" target="_blank" title="Facebook"><i class="fab fa-facebook-f"></i></a>
                        <a class="text-primary px-2" href="{{ $media->linkedin }}" target="_blank" title="Viber"><i class="fab fa-viber"></i></a>
                        <a class="text-primary px-2" href="{{ $media->youtube }}" target="_blank" title="Youtube"><i class="fab fa-youtube"></i></a>
                        <a class="text-primary px-2" href="{{ $media->instagram }}" target="_blank" title="Instagram"><i class="fab fa-instagram"></i></a>
                        <a class="text-primary px-2" href="{{ $media->whatsapp ?? $media->linkedin }}" target="_blank" title="Whatsapp"><i class="fab fa-whatsapp"></i></a>
                    </div>
                    @endif
                </div>
            </div>
        </div>
    </div>

    {{-- Main navbar --}}
    <div class="container-fluid position-relative nav-bar p-0">
        <div class="container-lg position-relative p-0 px-lg-3" style="z-index: 9;">
            @if (!empty($sitesetting))
            <nav class="navbar navbar-expand-lg bg-light navbar-light shadow-lg py-2 py-lg-0 px-3">
                <a href="{{ route('home') }}" class="navbar-brand d-flex align-items-center">
                    <img src="{{ asset('storage/sitesetting/' . $sitesetting->image) }}" alt="Logo">
                    <h3 class="m-0 text-capitalize text-dark ml-2">{{ $sitesetting->name }}</h3>
                </a>
                <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <div class="navbar-nav ml-auto py-0">
                        <a href="{{ route('home') }}" class="nav-item nav-link {{ Request::is('/') ? 'active' : '' }}">Home</a>
                        <a href="{{ route('about') }}" class="nav-item nav-link {{ Request::is('about-us') ? 'active' : '' }}">About</a>
                        <a href="{{ route('service') }}" class="nav-item nav-link {{ Request::is('services') ? 'active' : '' }}">Services</a>
                        <a href="{{ route('package') }}" class="nav-item nav-link {{ Request::is('packages') ? 'active' : '' }}">Packages</a>
                        <div class="nav-item dropdown">
                            <a href="#" class="nav-link dropdown-toggle {{ Request::is('blog', 'gallery') ? 'active' : '' }}" data-toggle="dropdown">Pages</a>
                            <div class="dropdown-menu border-0 rounded-0 m-0">
                                <a href="{{ route('blog') }}" class="dropdown-item {{ Request::is('blog') ? 'active' : '' }}">Blog</a>
                                <a href="{{ route('gallery') }}" class="dropdown-item {{ Request::is('gallery') ? 'active' : '' }}">Gallery</a>
                                <a href="{{ route('ourteam') }}" class="dropdown-item">Our Team</a>
                            </div>
                        </div>
                        <a href="{{ route('contact-us') }}" class="nav-item nav-link {{ Request::is('contact-us') ? 'active' : '' }}">Contact</a>
                    </div>

                    {{-- Mobile: contact info + social shown inside collapsed menu --}}
                    <div class="d-lg-none mobile-info">
                        @if (!empty($contact))
                        <div class="d-flex flex-wrap gap-2 mb-2">
                            <p class="mb-1 mr-3"><i class="fa fa-envelope mr-1"></i>{{ $contact->email }}</p>
                            <p class="mb-1"><i class="fa fa-phone-alt mr-1"></i>{{ $contact->phone }}</p>
                        </div>
                        @endif
                        @if (!empty($media))
                        <div class="social-icons">
                            <a class="text-primary px-1" href="{{ $media->facebook }}" target="_blank" title="Facebook"><i class="fab fa-facebook-f"></i></a>
                            <a class="text-primary px-1" href="{{ $media->linkedin }}" target="_blank" title="Viber"><i class="fab fa-viber"></i></a>
                            <a class="text-primary px-1" href="{{ $media->youtube }}" target="_blank" title="Youtube"><i class="fab fa-youtube"></i></a>
                            <a class="text-primary px-1" href="{{ $media->instagram }}" target="_blank" title="Instagram"><i class="fab fa-instagram"></i></a>
                            <a class="text-primary px-1" href="{{ $media->whatsapp ?? $media->linkedin }}" target="_blank" title="Whatsapp"><i class="fab fa-whatsapp"></i></a>
                        </div>
                        @endif
                    </div>
                </div>
            </nav>
            @endif
        </div>
    </div>
</header>
