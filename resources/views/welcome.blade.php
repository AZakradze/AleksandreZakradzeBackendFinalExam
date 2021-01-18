@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                @foreach($products as $product)
                <div class="card">
                    <div class="card-header"><a href="{{route('product.show', ['product'=> $product->id])}}">{{ $product->name }}</a></div>

                    <div class="card-body">
                        <img src="{{str_replace('public','storage', $product->image)}}" class="w-100" alt="">
                        <span>{{$product->created_at}}</span>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection
