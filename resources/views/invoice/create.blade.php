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
            </div>
        </div>

        <div class="row">
            <div class="col">
                <h1 class="text-center mt-4">Checkout</h1>
            </div>
        </div>

        <form action=" {{ route('store-invoice', $stock->id) }} " method="POST" enctype="multipart/form-data">
            @csrf
            <div class="row">
                <div class="col">
                    <p class="mb-2 mt-2 fw-bold">Jumlah item yang ingin dibeli</p>
                    <div class="input-group mb-3">
                        <input type="number" class="form-control @error('quantity') is-invalid @enderror" name="quantity" placeholder="Add Quantity" min="1" max="1000">
                        @error('quantity')
                            <div class="invalid-feedback bg-danger text-white rounded mt-2 p-2">{{$message}}</div>
                        @enderror
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col">
                    <p class="mb-2 mt-2 fw-bold">Alamat Pengiriman</p>
                    <div class="input-group mb-3">
                        <input type="text" class="form-control @error('address') is-invalid @enderror" name="address" placeholder="Add address">
                        @error('address')
                            <div class="invalid-feedback bg-danger text-white rounded mt-2 p-2">{{$message}}</div>
                        @enderror
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col">
                    <p class="mb-2 mt-2 fw-bold">Kode Pos</p>
                    <div class="input-group mb-3">
                        <input type="text" class="form-control @error('postcode') is-invalid @enderror" name="postcode" placeholder="Add postcode">
                        @error('postcode')
                            <div class="invalid-feedback bg-danger text-white rounded mt-2 p-2">{{$message}}</div>
                        @enderror
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-6 mt-3">
                    <a href="{{ url('/') }}" class="btn btn-danger w-100">Cancel</a>
                </div>
                <div class="col-6 mt-3">
                    <button type="submit" class="btn btn-success w-100"><i class='bx bx-plus' ></i> Pay</button>
                </div>
            </div>
        </form>
    </div>
@endsection
