@php
use App\Models\Sitesetting;
$sitesetting = Sitesetting::first();
@endphp
<div class="sidebar pe-4 pb-3">
    <nav class="navbar bg-secondary navbar-dark">
        <a href="index.html" class="navbar-brand mx-4 mb-3">
            <h3 class="text-primary"><i class="fa fa-user-edit me-2"></i>Travels</h3>
        </a>
        @if(!empty($sitesetting))
        <div class="d-flex align-items-center ms-4 mb-4">
            <div class="position-relative">
                <img class="rounded-circle" src="{{asset('storage/sitesetting/'.$sitesetting->image)}}" alt=""
                    style="width: 40px; height: 40px;">
                <div
                    class="bg-success rounded-circle border border-2 border-white position-absolute end-0 bottom-0 p-1">
                </div>
            </div>
            <div class="ms-3">
                <h6 class="mb-0">Jhon Doe</h6>
                <span>Admin</span>
            </div>
        </div>
        @endif
        <div class="navbar-nav w-100">
            <a href="{{route('dashboard')}}"
                class="nav-item nav-link {{ Request::routeIs('dashboard') ? 'active' : '' }}"><i
                    class="fa fa-tachometer-alt me-2"></i>Dashboard</a>
            <div class="nav-item dropdown">
                <a href="#"
                    class="nav-link dropdown-toggle {{ Request::routeIs('view.sitesetting','view.banner','view.aboutus') ? 'active' : '' }}"
                    data-bs-toggle="dropdown"><i class="fa fa-laptop me-2"></i>Sitesetting</a>
                <div class="dropdown-menu bg-transparent border-0">
                    <a href="{{route('view.sitesetting')}}"
                        class="dropdown-item {{ Request::routeIs('view.sitesetting') ? 'active' : '' }}">Sitesetting</a>
                    <a href="{{route('view.banner')}}"
                        class="dropdown-item {{ Request::routeIs('view.banner') ? 'active' : '' }}">Banner</a>
                    <a href="{{route('view.aboutus')}}"
                        class="dropdown-item {{ Request::routeIs('view.aboutus') ? 'active' : '' }}">About Us</a>
                </div>
            </div>

            <div class="nav-item dropdown">
                <a href="#"
                    class="nav-link dropdown-toggle {{ Request::routeIs('view.contact','view.socialmedia') ? 'active' : '' }}"
                    data-bs-toggle="dropdown"><i class="fa fa-phone me-2"></i>Contact</a>
                <div class="dropdown-menu bg-transparent border-0">
                    <a href="{{route('view.contact')}}"
                        class="dropdown-item {{ Request::routeIs('view.contact') ? 'active' : '' }}">Contact</a>
                    <a href="{{route('view.socialmedia')}}"
                        class="dropdown-item {{ Request::routeIs('view.socialmedia') ? 'active' : '' }}">Socialmedia</a>
                </div>
            </div>

            <a href="{{route('view.package')}}"
                class="nav-item nav-link {{ Request::routeIs('view.package') ? 'active' : '' }}"><i
                    class="fa fa-hand-holding-heart me-2"></i>Packages</a>
            <a href="{{route('view.service')}}"
                class="nav-item nav-link {{ Request::routeIs('view.service') ? 'active' : '' }}"><i
                    class="fa fa-toolbox me-2"></i>Service</a>
            <a href="{{route('view.gallery')}}"
                class="nav-item nav-link {{ Request::routeIs('view.gallery') ? 'active' : '' }}"><i
                    class="fa fa-images me-2"></i>Gallery</a>

            <div class="nav-item dropdown">
                <a href="#"
                    class="nav-link dropdown-toggle {{ Request::routeIs('view.team','view.testimonial','view.blog') ? 'active' : '' }}"
                    data-bs-toggle="dropdown"><i class="far fa-file-alt me-2"></i>Pages</a>
                <div class="dropdown-menu bg-transparent border-0">
                    <a href="{{route('view.team')}}"
                        class="nav-item nav-link {{ Request::routeIs('view.team') ? 'active' : '' }}"><i
                            class="fa fa-users me-2"></i>Team</a>
                    <a href="{{route('view.testimonial')}}"
                        class="nav-item nav-link {{ Request::routeIs('view.testimonial') ? 'active' : '' }}"><i
                            class="fa fa-user me-2"></i>Testimonial</a>
                    <a href="{{route('view.blog')}}"
                        class="nav-item nav-link {{ Request::routeIs('view.blog') ? 'active' : '' }}"><i
                            class="fa fa-blog me-2"></i>Blog</a>
                    <a href="{{route('view_user.contact')}}"
                        class="nav-item nav-link {{ Request::routeIs('view.message') ? 'active' : '' }}"><i
                            class="fa fa-comment me-2"></i>User Message</a>
                </div>
            </div>

            <!-- <a href="form.html" class="nav-item nav-link"><i class="fa fa-keyboard me-2"></i>Forms</a>
                    <a href="table.html" class="nav-item nav-link"><i class="fa fa-table me-2"></i>Tables</a>
                    <a href="chart.html" class="nav-item nav-link"><i class="fa fa-chart-bar me-2"></i>Charts</a> -->
            <!-- <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"><i class="far fa-file-alt me-2"></i>Pages</a>
                        <div class="dropdown-menu bg-transparent border-0">
                            <a href="signin.html" class="dropdown-item">Sign In</a>
                            <a href="signup.html" class="dropdown-item">Sign Up</a>
                            <a href="404.html" class="dropdown-item">404 Error</a>
                            <a href="blank.html" class="dropdown-item">Blank Page</a>
                        </div>
                    </div> -->
        </div>
    </nav>
</div>