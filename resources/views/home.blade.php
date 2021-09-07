@extends('layouts.app')

@section('content')
<div class="container">
    <h1 class="mt-2 text-center"><i class='bx bxs-hot'></i> Hot Product</h1>
    <div class="row justify-content-center">
        {{-- @php(dd($stocks)) --}}
        @php($count = 0)
        @foreach($stocks as $stock)
            @php($count++)
        @endforeach
        @if($count === 0)
        <div class="col-6 mt-4">
            <div class="card text-white p-0 mb-5 border-0 justify-content-center" style="height: 500px">
                <h5 class="text-center text-white">Barang sudah habis, silahkan tunggu hingga barang di-restock ulang</h5>
            </div>
        </div>
        @else
            @foreach ($stocks as $stock)
            <div class="col-3 mt-5">
                <div class="card">
                    {{-- @if (Auth::user()->name === 'Admin') --}}
                        <a href="{{ route('edit-stock', $stock->id) }}" class="btn btn-warning text-white" style="position: absolute; top: -10px; right: 28px"><i class="bx bxs-edit" style="color: #2e2f34;"></i></a>
                        <form action="{{ route('delete-stock', $stock->id) }}" method="POST" class="d-inline">
                            @method('delete')
                            @csrf
                            <button type="submit" class="btn btn-danger" style="font-size: 14px; position: absolute; top: -10px; right: -10px" onclick="return confirm('Are you sure?')"><i class='bx bxs-trash' style="color: #2e2f34;"></i></button>
                        </form>
                    {{-- @endif --}}
                    <div class="card-header">
                        <img class="card-img-top" src="{{ asset('upload/photo/' . $stock['image']) }}" alt="" style="height: 145px;">
                    </div>

                    <div class="card-body">
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
                        <div class="link-button d-flex justify-content-between">
                            <a href="{{ route('detail-stock', $stock->id) }}" class="btn btn-primary">View item</a>
                            <a href="{{ route('checkout', $stock->id) }}" class="btn btn-primary">Add to cart</a>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        @endif
    </div>
</div>
@endsection
