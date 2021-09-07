@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-5">
                <img class="card-img-top" src="{{ asset('upload/photo/' . $stock['image']) }}" alt="">
            </div>
            <div class="col-7">
                <h5 class="card-title">{{ $stock->item }}</h5>
                <p class="card-text"><span class="badge bg-secondary">{{ $stock->category['name'] }}</span></p>
                <div class="text-muted d-flex justify-content-between">
                    <div class="prince">
                        <p>Rp. {{ $stock->price }}</p>
                    </div>
                    <div class="quantity">
                        <p>Produk {{ $stock->quantity }}</p>
                    </div>
                </div>
                <div class="link-button">
                    <a href="{{ url('/') }}" class="btn btn-danger">Go back</a>
                    <a href="#" class="btn btn-primary">Add to cart</a>
                </div>
            </div>
        </div>
    </div>
@endsection
