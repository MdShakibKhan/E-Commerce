@extends('backend.master')
@section('title')
    Add Product
@endsection
@section('content')
    <section class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <h3 class="text-success">Add New Product {{ Session::get('msg') }}</h3>
                    <form action="{{ route('create.product') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="mb-3">
                            <label for="title" class="form-label">Product Title</label>
                            <input type="text" class="form-control" name="title" id="title" aria-describedby="emailHelp">
                            <div id="emailHelp" class="form-text">Insert your Product title.</div>
                        </div>
                        <div class="mb-3">
                            <label for="desp" class="form-label">Product Description</label>
                            <input type="text" class="form-control" name="desp" id="desp">
                        </div>
                        <div class="mb-3">
                            <label for="price" class="form-label">Product Price</label>
                            <input type="text" class="form-control" name="price" id="price">
                        </div>
                        <div class="mb-3">
                            <label for="img" class="form-label">Product Image</label>
                            <input type="file" class="form-control" name="img" id="img">
                        </div>

                        <button type="submit" name="btn" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </section>`
@endsection
