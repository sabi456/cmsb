@extends('master.layout')

@section('title')
Add person 
@endsection

@section('content')
    <div class="container alert alert-success my-5 w-50">
        <h1 class="text-center">Add a person</h1>
        <hr>
        <form action="{{ route('store') }}" method="post">
            @csrf
            <div class="mb-3">
              <label for="name" class="form-label">Name</label>
              <input type="text" value="{{ old('name') }}" class="form-control @error('name') is-invalid @enderror" name="name" id="name">
              @error('name')<p class="text-danger">{{ $message }}</p>@enderror
            </div>
            <div class="mb-3">
              <label for="age" class="form-label">Age</label>
              <input type="number" name="age" value="{{ old('age') }}" class="form-control @error('age') is-invalid @enderror" id="age">
              @error('age')<p class="text-danger">{{ $message }}</p>@enderror
            </div>
            <div class="mb-3">
              <label for="Image" class="form-label">Image</label>
              <input type="file" name="image" class="form-control" id="Image">
            </div>
            <div class="mb-3">
              <label for="Salary" value="{{ old('salary') }}" class="form-label @error('salary') is-invalid @enderror"">Salary</label>
              <input type="number" name="salary" class="form-control @error('salary') is-invalid @enderror" id="Salary">
              @error('salary')<p class="text-danger">{{ $message }}</p>@enderror
            </div>
            <button type="submit" name="valid" class="btn btn-success w-25">Valid</button>
        </form>
    </div>
    
@endsection