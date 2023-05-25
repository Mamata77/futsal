@extends('admin.layouts.admin-dash-layout')

@section('content')

<h1 class="text-center">Manage Futsal</h1>
<br>


<div class="container">
    <div class="row">
        <div class="col-md-12" style="display:flex">
                <table class="table">
                    <thead>
                    <tr>
                        <th scope="col">Id</th>
                        <th scope="col">Address</th>
                        <th scope="col">Price</th>
                        <th scope="col">Description</th>
                        <th scope="col">Images</th>
                        <th scope="col">Action</th>
                    </tr>
                    </thead>
                    <tbody>
                        @foreach ($futsal as $f)
                            <tr>
                                <th scope="row">{{ $f->id }}</th>
                                <td>{{ $f->address }}</td>
                                <td>{{ $f->price }}</td>
                                <td>{{ $f->description }}</td>
                                <td>{{ $f->image }}</td>
                                <td><a href="#" class="btn btn-primary">Edit</a></td>
                                <td>
                                    <form action="" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger">Delete</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
        </div>
    </div>
</div>
@endsection