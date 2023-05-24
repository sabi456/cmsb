@extends('master.layout')

@section('title')
Contact 
@endsection

@section('content')
    <div class="container alert alert-success my-5 text-center">
        <h1>Welcome {{$tab->name}}</h1>
        <hr>
        <table class="table">
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Age</th>
                <th>salary</th>
                <th>Image</th>
            </tr>
            <tr>
                <td>{{$tab->id}}</td>
                <td>{{$tab->name}}</td>
                <td>{{$tab->age}}</td>
                <td>{{$tab->salary}}</td>
                <td><img width=100 src="{{ asset($tab->image) }}" alt=""></td>
            </tr>
        </table>
    </div>
    
@endsection