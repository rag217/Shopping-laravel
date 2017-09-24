@extends('layouts.master')

@section('title')
Shopping Cart
@endsection


@section('content')
@foreach($products->chunk(3) as $productChunk)
<div class="card-group">
 @foreach($productChunk as $product)
<div class="card" style="width: 20rem;">
  <img class="card-img-top" src="{{$product->imagePath}}" alt="Card image cap" class="img-responsive">
  <div class="card-body">
    <h4 class="card-title">{{$product->title}}</h4>
    <p class="card-text">Awesome jeans that youl will want to wear all the time.</p>
    <div class="pull-left price">${{$product->price}}</div>
    <a href="#" class="btn btn-success pull-right">Add to Cart</a>
  </div>

</div>
@endforeach

</div>

@endforeach
@endsection




