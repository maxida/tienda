@extends('store.templeate')

@section('content')
<div class="container text-center"></div>
    <div class="page-header">
        <h1><i class="fa fa-shopping-cart"></i>-Detalle del producto</h1>
    </div>

    <div class="row">
        <div class="col-md-6">
                <div class="product-block">
                <img src="{{ $product->image }}">
                </div>
        </div>
        <div class="col-md-6">
                    <div class="product-block">
                     <h3>{{ $product->name }}</h3> <hr>
                         <div class="product-info panel">
                        <p>{{ $product->description }}</p>
                        <h3>
                            <span class="btn btn-success">Precio: ${{ number_format($product->price,2) }}</span>
                        </h3>
                        <p> 
                            <a class="btn btn-warning btn-block" href="#">La quiero</a>
                        </p>
                        </div>
                    </div>
        </div>
    </div>

    
    
    <a class="btn btn-primary" href="{{ route('home') }}"><i class="fa fa-chevron-cicle-left"></i>Regresar</a> <hr>
</div>
@stop