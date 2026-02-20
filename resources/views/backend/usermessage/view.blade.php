@extends('backend.main')
@section('title','User Messages')
@section('content')
<div class="container-fluid pt-4 px-4">
    <div class="col-12">
        <div class="bg-secondary rounded h-100 p-4">
            <div class="table-responsive">
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">S.N</th>
                            <th scope="col">Name</th>
                            <th scope="col">Email</th>
                            <th scope="col">Phone</th>
                            <th scope="col">Address</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody id="tablecontents">
                        @foreach($viewUserMessage as $key=>$message)
                        <tr class="{{ $message->is_read == '0' ? 'text-white fw-bolder fs-5' : '' }}"
                            id="message-{{ $message->id }}">
                            <td>{{$key+1}}</td>
                            <td class="text-capitalize">{{$message->name}}</td>
                            <td>{{$message->email}}</td>
                            <td>{{$message->phone}}</td>
                            <td>{{$message->address}}</td>
                            <td>
                                <a href="{{route('view_user_message.contact',$message->id)}}" title="View"
                                    onclick="markAsRead({{ $message->id }})"><i class="fa fa-eye"></i>
                                    <a href="{{route('delete_user_message.contact',$message->id)}}"
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