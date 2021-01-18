@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">

            <div class="card">
                <div class="card-header"><a href="{{route('product.show', ['product'=> $product->id])}}">{{ $product->name }}</a></div>
                <div class="card-body">
                    <img src="/{{str_replace('public','storage', $product->image)}}" class="w-100" alt="">
                    <p>{{$product->desc}}</p>
                    <span>{{$product->price}}</span>
                    <span>{{$product->created_at}}</span>
                </div>
                @if(auth()->user())
                <form action="{{route('like.add',['product' => $product->id])}}" method="post" >
                    @csrf
                    <button type="submit" class="btn btn-danger">{{ $product->isLiked($product->id) ? 'Dislike' : 'Like'  }}</button></form>
                    @endif
            </div>
            </div>
        </div>
    </div>
@endsection
