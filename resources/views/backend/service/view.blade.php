@extends('backend.main')
@section('content')
<div class="container-fluid pt-4 px-4">
    <div class="col-12">
        <div class="bg-secondary rounded h-100 p-4">
            <div class="row mb-2">
                <div class="col-sm-4">
                    <a href="{{route('create.service')}}" class="btn btn-danger mb-2"><i
                            class="fa fa-plus-circle mr-2"></i> Add Service</a>
                </div>
            </div>
            <div class="table-responsive">
                @if(Session::has('message'))
                <span class="text-primary">{{Session::get('message')}}</span>
                @endif
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">S.N</th>
                            <th scope="col">Title</th>
                            <th scope="col">Icon</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody id="tablecontents">
                        @foreach($service as $key=>$service)
                        <tr>
                            <td>{{$key+1}}</td>
                            <td class="text-capitalize">{{$service->title}}</td>
                            <td>{{$service->icon}}</td>
                            <td>
                                <a href="{{route('edit.service',$service->id)}}" title="Edit"><i
                                        class="fa fa-edit "></i></a>
                                <a href="{{route('delete.service',$service->id)}}"
                                    onclick="return confirm('Are you sure you want to delete?')" id="sa-params"
                                    title="Delete"><i class="fa fa-trash mx-3"></i>
                                </a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection