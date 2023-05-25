@extends('admin.layouts.admin-dash-layout')

@section('content')

<div class="container mt-5 mb-5">

    <h2>Create Futsal Item</h2>
    <hr>

    <form action="{{route('futsal.update', $futsal->id)}}" enctype="multipart/form-data" method="POST">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="address" class="form-label">Address</label>
            <input type="text" class="form-control" name="address" value="{{$futsal->address}}" id="address" placeholder="Enter Address">
            @error('address')
                <div class="alert alert-danger mt-1 mb-1">{{$message}}</div>
            @enderror
          </div>

          <div class="mb-3">
            <label for="price" class="form-label">Price</label>
            <input type="text" class="form-control" name="price" value="{{$futsal->price}}" id="price" placeholder="Enter price">
            @error('price')
                <div class="alert alert-danger mt-1 mb-1">{{$message}}</div>
            @enderror
          </div>

          <div class="mb-3">
            <label for="description" class="form-label">Description</label>
            <textarea class="form-control" name="description" id="description" placeholder="Enter Description">{{$futsal->description}}</textarea>
            @error('description')
                <div class="alert alert-danger mt-1 mb-1">{{$message}}</div>
            @enderror
          </div>

          <div class="mb-3">
            <label for="image" class="form-label">Choose Picture</label>
            <input class="form-control" type="file" name="image" id="image">
            @if($futsal->image)
                <img src="{{asset('images')}}/{{$futsal->image}}" width="20%" height="15%" />
            @endif
            @error('image')
                <div class="alert alert-danger mt-1 mb-1">{{$message}}</div>
            @enderror
          </div>

          <button type="submit" class="btn btn-primary">Update</button>

    </form>

</div>

@endsection