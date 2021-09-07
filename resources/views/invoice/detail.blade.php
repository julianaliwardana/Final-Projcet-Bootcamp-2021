@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row mt-3">
            <div class="col-5">
                <img class="card-img-top" src="{{ asset('upload/photo/' . $invoice['image']) }}" alt="">
            </div>
            <div class="col-7">
                <h3 class="card-text">Detail Pembayaran</h3>
                <h5 class="card-title">Barang yang dibeli: {{ $invoice->item }}</h5>
                <p class="card-text"><span class="badge bg-secondary">{{ $invoice->category }}</span></p>
                <p class="card-text">Jumlah yang dibeli:</p>
                <p class="card-text">{{ $invoice->quantity }}</p><br>
                <p class="card-text">Total Harga:</p>
                <p class="card-text">{{ $invoice->total }}</p><br>
                <p class="card-text">Alamat Pengiriman:</p>
                <p class="card-text">{{ $invoice->address }}</p><br>
                <p class="card-text">Kode Pos:</p>
                <p class="card-text">{{ $invoice->postcode }}</p><br>
                <a href="{{ route('my-invoices') }}" class="btn btn-danger">Go back</a>
            </div>
        </div>
    </div>
@endsection
