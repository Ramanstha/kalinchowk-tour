@extends('backend.main')
@section('content')
<div class="container-fluid pt-4 px-4">
    <div class="col-12">
        <div class="bg-secondary rounded h-100 p-4">
            <div class="row mb-2">
                <div class="col-sm-4">
                    <a href="{{route('create.team')}}" class="btn btn-danger mb-2"><i
                            class="fa fa-plus-circle mr-2"></i> Add Team</a>
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
                            <th scope="col">Name</th>
                            <th scope="col">Designation</th>
                            <th scope="col">Image</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody id="tablecontents">
                        @foreach($team as $key=>$team)
                        <tr>
                            <td>{{$key+1}}</td>
                            <td class="text-capitalize">{{$team->name}}</td>
                            <td>{{$team->designation}}</td>
                            <td><img src="{{asset('storage/team/'.$team->image)}}" alt="Image" style="width: 50px; height: 50px;"></td>
                            <td>
                                <a href="{{route('edit.team',$team->id)}}" title="Edit"><i
                                        class="fa fa-edit "></i></a>
                                <a href="{{route('delete.team',$team->id)}}"
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