@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col">
                <h5 class="card-title">{{ $profile->fullname }}</h5>
                <p class="card-text"><span class="badge bg-secondary">{{ $profile->id_admin }}</span></p>
                <div class="text-muted d-flex justify-content-between">
                    <div class="prince">
                        <p>Rp. {{ $profile->email }}</p>
                    </div>
                    <div class="quantity">
                        <p>Produk {{ $profile->tlp }}</p>
                    </div>
                </div>
                <div class="link-button">
                    <a href="{{ url('/') }}" class="btn btn-danger">Go to Home Page</a>
                </div>
            </div>
        </div>
    </div>
@endsection
