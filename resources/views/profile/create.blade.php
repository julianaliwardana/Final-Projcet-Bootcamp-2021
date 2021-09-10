@extends('layouts.app')

@section('content')
<h1 class="text-white text-center pt-5"><i class='bx bx-plus'></i> Create Profile</h1>

<div class="container-fluid w-75" id="editUser">
    <form action="{{ route('store-profile', Auth::id()) }}" method="POST">
        @csrf
        <div class="row mt-3 inputFullname">
            <div class="col">
                <p class="mb-2 mt-2 fw-bold">Fullname</p>
                <div class="input-group m-auto mb-3">
                    <input type="text" class="form-control @error('fullname') is-invalid @enderror" name="fullname" placeholder="Add Fullname">
                    @error('fullname')
                        <div class="invalid-feedback bg-danger text-white rounded mt-2 p-2">{{$message}}</div>
                    @enderror
                </div>
            </div>
        </div>

        <div class="row mt-3 inputTlp">
            <div class="col">
                <p class="mb-2 mt-2 fw-bold">No. Tlp</p>
                <div class="input-group m-auto mb-3">
                    <input type="text" class="form-control @error('tlp') is-invalid @enderror" name="tlp" placeholder="Add number telephone">
                    @error('tlp')
                        <div class="invalid-feedback bg-danger text-white rounded mt-2 p-2">{{$message}}</div>
                    @enderror
                </div>
            </div>
        </div>

        <div class="row mt-3 checkAdmin">
            <div class="col">
                <p class="mb-2 mt-2 fw-bold">Are you Admin?</p>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="checkbox1">
                    <label class="form-check-label" for="flexCheckDefault">
                    Yes
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="checkbox2">
                    <label class="form-check-label" for="flexCheckDefault">
                        No
                    </label>
                </div>
            </div>
        </div>

        <div class="row idAdmin">
            <div class="col">
                <p class="mb-2 mt-2 fw-bold">ID Admin</p>
                <div class="input-group m-auto mb-3">
                    <input type="text" class="form-control @error('id_admin') is-invalid @enderror" name="id_admin" placeholder="Add id_admin">
                    @error('id_admin')
                        <div class="invalid-feedback bg-danger text-white rounded mt-2 p-2">{{$message}}</div>
                    @enderror
                </div>
            </div>
        </div>

        <div class="row inputEmail">
            <div class="col">
                <p class="mb-2 mt-2 fw-bold">Email</p>
                <div class="input-group m-auto mb-3">
                    <input type="email" class="form-control @error('email') is-invalid @enderror" name="email" placeholder="Add email">
                    @error('email')
                        <div class="invalid-feedback bg-danger text-white rounded mt-2 p-2">{{$message}}</div>
                    @enderror
                </div>
            </div>
        </div>

        <div class="row inputPassword">
            <div class="col">
                <p class="mb-2 mt-2 fw-bold">Password</p>
                <div class="input-group m-auto mb-3">
                    <input type="password" class="form-control @error('password') is-invalid @enderror" name="password" placeholder="Add password">
                    @error('password')
                        <div class="invalid-feedback bg-danger text-white rounded mt-2 p-2">{{$message}}</div>
                    @enderror
                </div>
            </div>
        </div>

        <div class="row buttonCreate">
            <div class="col mt-4">
                <button type="submit" class="btn btn-primary w-100"><i class='bx bx-plus' ></i> Create</button>
            </div>
        </div>
    </form>
</div>
@endsection
