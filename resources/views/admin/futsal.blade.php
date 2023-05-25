@extends('admin.layouts.admin-dash-layout')

@section('content')
<style>
        nav svg {
            height: 20px;
        }
        nav .hidden {
            display: block !important;
        }
        .sclist{
            list-style:none;
        }
        .sclist li{
            line-height: 33px;
            border-bottom: 1px solid #ccc;
        }
        .slink i{
            font-size:17px;
            margin-left: 13px;
        }
    </style>
<div><h1 class="text-center">Manage Futsal</h1></div>
<div class="pull-right mb-2">
    <a class="btn btn-success" href="{{route('futsal.create')}}">Create</a>
</div>

<br>

@if ($message = Session::get('success'))
    <div class="alert alert-success">
        <p>{{ $message }}</p>
    </div>
@endif
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
                                <td><a href="{{route('futsal.edit', $f->id)}}" class="btn btn-primary">Edit</a></td>
                                <td>
                                    <form action="{{route('futsal.destroy', $f->id)}}" method="POST">
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
        {{$futsal->links()}}
    </div>
</div>
@endsection