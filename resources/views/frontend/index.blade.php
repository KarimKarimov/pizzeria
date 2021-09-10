@extends('layouts.app')

@section('title','Главная страница')

@section('content')

<div class="page-content">
    <div class="container-fluid">
        @include('inc.alerts')
        <div class="row">
            @if(isset($products))
            @foreach($products as $product)
            <div class="col-lg-4">
                <form class="card" action="{{route('orders.store')}}" method="POST">
                    @csrf
                    <img class="card-img-top img-fluid" src="./images/{{isset($product->photo) ? $product->photo : 'not.jpg'}}" alt="Card image cap">
                    <div class="card-body">
                        <h4 class="card-title mt-0" name="title">{{$product->title}}</h4>
                        <p class="card-text">{{isset($product->topping) ? $product->topping->title : '--'}}</p>
                        <input class="d-none" name="title" value="{{$product->title}}"></input>
                        <input class="d-none" name="product_id" value="{{$product->id}}"></input>
                        
                        <input class="d-none" name="price" value="{{$product->price}}"></input>
                        <div class="row align-items-center no-gutters">
                            <div class="col-5 text-left">
                                <div class="price">от
                                    <span name="price" class="" >{{$product->price}}</span>
                                    <i class="fas fa-ruble-sign"></i>
                                </div>
                            </div>
                            <div class="col-7" style="text-align: end;">
                                <button type="submite" class="btn btn-primary waves-effect waves-light">В корзину</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
            @endforeach
            @endif
        </div>
    </div>
</div>


@endsection