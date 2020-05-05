@extends('layouts.app')

@section('content')
<div class="container">
    <h2>List of registered users <a href="{{url('/create')}}"><button type="button" class="btn btn-primary float-right">add user</button></a> </h2>
        <table class="table table-striped">
        <thead>
            <tr>
            <th scope="col">ID</th>
            <th scope="col">Name</th>
            <th scope="col">Email</th>
            <th scope="col">Option</th>
            
            </tr>
        </thead>
        <tbody>
            @foreach ($users as $user)
            <tr>
            <th scope="row">{{$user->id}}</th>
            <td>{{$user->name}}</td>
            <td>{{$user->email}}</td>
            <td>
            <a href="{{route('users.edit',$user->id)}}"><button type="button" class="btn btn-warning">Edit</button></a>
            <button type="button" class="btn btn-danger">Delete</button>
            </td>
            </tr>
        @endforeach
        </tbody>
        </table>
</div>
@endsection