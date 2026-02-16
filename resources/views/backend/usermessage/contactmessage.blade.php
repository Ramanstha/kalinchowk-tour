@extends('backend.main')
@section('content')
<div class="container-fluid pt-4 px-4">
    <div class="col-12">
        <div class="bg-secondary rounded h-100 p-4">
            <div class="row">
                <div class="col-md-12">
                    <p><strong>Name:</strong> {{ $userMessage->name }}</p>
                    <p><strong>Email:</strong> {{ $userMessage->email }}</p>
                    <p><strong>Phone:</strong> {{ $userMessage->phone }}</p>
                    <p><strong>Address:</strong> {{ $userMessage->address }}</p>
                    <p><strong>Message:</strong></p>
                    {!! $userMessage->message !!}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection