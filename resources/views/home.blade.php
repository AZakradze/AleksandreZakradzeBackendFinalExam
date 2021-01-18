@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if(auth()->user()->role == 'admin')
                        <h2>Add Categories</h2>
                        <form action="{{ route('category.add') }}" method="Post" class="d-flex flex-column">
                            @csrf
                            <label for="">Category name</label>
                            <input type="text" name="title" class="mb-2">
                            <button type="submit" class="btn btn-success">Add</button>
                        </form>
                        <h2>Add Product</h2>
                        <form action="{{ route('product.add') }}" method="Post" enctype="multipart/form-data" class="d-flex flex-column">
                            @csrf
                              <label for="">Name</label>
                            <input type="text" name="name">
                            <label for="">Price</label>
                            <input type="text" name="price">
                            <label for="">Desc</label>
                            <textarea type="text" name="desc"></textarea>
                            <label for="">Category</label>
                                @foreach($categories as $cat)
                                    <div>
                                        <input type="checkbox" id="{{ $cat->id }}" name="categories[{{$cat->title}}]" value="{{ $cat->id }}">
                                        <label for="{{$cat->id}}">{{$cat->title}}</label>
                                    </div>
                                @endforeach
                            <input type="file"   name="image" id="" class="mt-2 mb-2">
                            <button type="submit" class="btn btn-success">Add</button>
                        </form>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
