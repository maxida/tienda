@extends('store.templeate')

@section('content')
<div class="container text-center"></div>
<div class="page-header mx-5 my-5">
    <h1><i class="fa fa-shopping-cart "></i>-Detalle del producto</h1>
</div>
<div class="container">
    <div class="row">
        <div class="col-md-5 mx-3">
            <div class="product-block">
                <img src="{{ $product->image }}">
            </div>
        </div>
        <div class="col-md-5 mx-3">
            <div class="product-block">
                <h3>{{ $product->name }}</h3>
                <hr>
                <div class="product-info panel">
                    <p>{{ $product->description }}</p>
                    <h3>
                        <span class="btn btn-success">Precio: ${{ number_format($product->price,2) }}</span>
                    </h3>
                    <p>
                        <a class="btn btn-warning btn-block" href="{{ route('cart-add', $product->slug)}}">
                            La quiero <i class="fa fa-cart-plus fa-2x"></i>
                        </a>
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>


<hr>
<div class="text-center">
<a class="btn btn-primary text-center" href="{{ route('home') }}"><i class="fa fa-chevron-cicle-left"></i>Regresar></a>
</div>
<hr>
</div>
@stop