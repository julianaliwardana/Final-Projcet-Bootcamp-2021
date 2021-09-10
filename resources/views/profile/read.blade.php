@extends('layouts.app')

@section('content')
    <div class="container">
        <h1 class="text-center mt-3 mb-3"><i class='bx bxs-user'></i> My Profile</h1>
        <div class="row">
            <div class="col">
                <h5 class="card-title">{{ $profile->fullname }}</h5>
                <p class="card-text"><span class="badge bg-secondary">{{ $profile->id_admin }}</span></p>
                <div class="text-muted d-flex justify-content-between">
                    <div class="email">
                        <p>Email {{ $profile->email }}</p>
                    </div>
                    <div class="tlp">
                        <p>No Tlp. {{ $profile->tlp }}</p>
                    </div>
                </div>
                <div class="link-button">
                    <a href="{{ url('/') }}" class="btn btn-danger">Go to Home Page</a>
                </div>
            </div>
        </div>
    </div>
@endsection
