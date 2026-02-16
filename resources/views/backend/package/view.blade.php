@extends('backend.main')
@section('content')
<div class="container-fluid pt-4 px-4">
    <div class="col-12">
        <div class="bg-secondary rounded h-100 p-4">
            <div class="row mb-2">
                <div class="col-sm-4">
                    <a href="{{route('create.package')}}" class="btn btn-danger mb-2"><i
                            class="fa fa-plus-circle mr-2"></i> Add Package</a>
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
                            <th scope="col">Destination</th>
                            <th scope="col" class="text-center">Days</th>
                            <th scope="col" class="text-center">Price By Bus</th>
                            <th scope="col" class="text-center">Price By Jeep</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody id="tablecontents">
                        @foreach($package as $key=>$package)
                        <tr>
                            <td>{{$key+1}}</td>
                            <td class="text-capitalize">{{$package->destination}}</td>
                            <td class="text-center">{{$package->days}}</td>
                            <td class="text-center">{{$package->price1}}</td>
                            <td class="text-center">{{$package->price2}}</td>
                            <td>
                                <a href="{{route('edit.package',$package->id)}}" title="Edit"><i
                                        class="fa fa-edit "></i></a>
                                <a href="{{route('delete.package',$package->id)}}"
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