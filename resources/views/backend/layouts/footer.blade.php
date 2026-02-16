@php
use App\Models\Sitesetting;
$sitesetting = Sitesetting::first();
@endphp
<div class="container-fluid pt-4 px-4">
                <div class="bg-secondary rounded-top p-4">
                    <div class="row">
                        @if(!empty($sitesetting))
                        <div class="col-12 col-sm-6 text-center text-sm-start">
                            &copy; <a class="text-capitalize" href="#">{{$sitesetting->name}}</a>, All Right Reserved. 
                        </div>
                        @endif
                        <div class="col-12 col-sm-6 text-center text-sm-end">
                            Designed By <a href="ramanstha.com.np">Raman Shrestha</a>
                        </div>
                    </div>
                </div>
            </div>