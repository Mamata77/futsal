@extends('admin.layouts.admin-dash-layout')

@section('content')

<div class="container mt-5 mb-5">

    <h2>Create Futsal Item</h2>
    <hr>

    <form action="{{route('futsal.store')}}" enctype="multipart/form-data" method="POST">
        @csrf

        <div class="mb-3">
            <label for="address" class="form-label">Address</label>
            <input type="text" class="form-control" name="address" id="address" placeholder="Enter Address">
            @error('address')
                <div class="alert alert-danger mt-1 mb-1">{{$message}}</div>
            @enderror
          </div>

          <div class="mb-3">
            <label for="price" class="form-label">Price</label>
            <input type="text" class="form-control" name="price" id="price" placeholder="Enter price">
            @error('price')
                <div class="alert alert-danger mt-1 mb-1">{{$message}}</div>
            @enderror
          </div>

          <div class="mb-3">
            <label for="description" class="form-label">Description</label>
            <textarea class="form-control" name="description" id="description" placeholder="Enter Description"></textarea>
            @error('description')
                <div class="alert alert-danger mt-1 mb-1">{{$message}}</div>
            @enderror
          </div>

          <div class="mb-3">
            <label for="image" class="form-label">Choose Picture</label>
            <input class="form-control" type="file" name="image" id="image">
            @error('image')
                <div class="alert alert-danger mt-1 mb-1">{{$message}}</div>
            @enderror
          </div>

          <button type="submit" class="btn btn-primary">Create Futsal Item</button>

    </form>

</div>

@endsection