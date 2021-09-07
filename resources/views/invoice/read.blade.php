@extends('layouts.app')

@section('content')
<div class="container">
    <h1 class="mt-2 text-center"><i class='bx bxs-hot'></i> My Invoice</h1>
    <div class="row justify-content-center">
        {{-- @php(dd($invoices)) --}}
        @php($count = 0)
        @foreach($invoices as $invoice)
            @php($count++)
        @endforeach
        @if($count === 0)
        <div class="col-6 mt-4">
            <div class="card text-white p-0 mb-5 border-0 justify-content-center" style="height: 500px">
                <h5 class="text-center text-white">Anda belum membeli apapun. Silahkan beli sesuatu di Hydra Store</h5>
            </div>
        </div>
        @else
            @foreach ($invoices as $invoice)
            <div class="col-3 mt-5">
                <div class="card">
                    <div class="card-header">
                        <img class="card-img-top" src="{{ asset('upload/photo/' . $invoice['image']) }}" alt="" style="height: 145px;">
                    </div>

                    <div class="card-body">
                        <h5 class="card-title">{{ $invoice->item }}</h5>
                        <p class="card-text"><span class="badge bg-secondary">{{ $invoice->category }}</span></p>
                        <div class="text-muted d-flex justify-content-between">
                            <div class="prince">
                                <p>Total Rp. {{ $invoice->total }}</p>
                            </div>
                            <div class="quantity">
                                <p>x{{ $invoice->quantity }}</p>
                            </div>
                        </div>
                        <div class="link-button d-flex justify-content-between">
                            <a href="{{ route('detail-invoice', $invoice->id) }}" class="btn btn-primary">View invoice</a>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        @endif
    </div>
</div>
@endsection
