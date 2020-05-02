@extends('store.templeate')

@section('content')
<div class="container"></div>
    <div class="page-header">
        <h1>Example page header <small>Sbutext for header</small></h1>
    </div>
    <div class="product-block">
        <img src="{{ $product->image }}" width="200">
    </div>
    <div class="product-block">
        <h3>{{ $product->name }}</h3> <hr>
        <div class="product-info">
            <p>{{ $product->description }}</p>
            <p>Precio: ${{ number_format($product->price,2) }}</p>
               <p> 
                   <a href="#">La quiero</a>
              </p>
        </div>
    </div>
    <a href="{{ route('home') }}">Regresar</a> <hr>
@stop