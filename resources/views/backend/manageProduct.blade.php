@extends('backend.master')
@section('title')
    Manage
@endsection

@section('content')
    <div class="container py-5">
        <div class="row">
            <div class="col-md-8 mx-auto">
                <table class="table table-bordered ">
                    <thead class="table-danger">
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Title</th>
                        <th scope="col">Description</th>
                        <th scope="col">Image</th>
                        <th scope="col">Edit / Delete</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($products as $value)
                        <tr>
                            <th scope="col">{{ $value->id }}</th>
                            <th scope="col">{{ $value->title }}</th>
                            <th scope="col">{{ $value->description }}</th>
                            <th scope="col"><img src="{{ $value->image }}" width="200px" height="200px"></th>
                            <th scope="col"> <a href=""><button class="btn btn-success"> Edit </button> </a>  <a href=""><button class="btn btn-danger"> Delete </button> <a href=""><button class="btn btn-primary"> Details </button> </a> </th>
                        </tr>
                    @endforeach
                    </tbody>
                </table>

            </div>

        </div>

    </div>
@endsection
