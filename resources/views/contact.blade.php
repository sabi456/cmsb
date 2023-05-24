@extends('master.layout')

@section('title')
Contact 
@endsection

@section('content')
    <div class="container alert alert-success my-5 text-center">
        <h1>Contact us</h1>
        <hr>
        <table class="table">
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Age</th>
                <th>salary</th>
                <th>Image</th>
                <th>Action</th>
            </tr>
            @foreach($tab as $t)
            <tr>
                <td>{{$t->id}}</td>
                <td>{{$t->name}}</td>
                <td>{{$t->age}}</td>
                <td>{{$t->salary}}</td>
                <td><img width=100 src="{{ asset($t->image) }}" alt=""></td>
                <td><a class="btn btn-success" href="{{ route('person', $t->id) }}">Show</a></td>
            </tr>
            @endforeach
        </table>
        <div class="d-flex justify-content-center">
            {{ $tab->links() }}
        </div>
    </div>
    
@endsection