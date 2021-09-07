@extends('layouts.app')

@section('content')
<h1 class="text-white text-center pt-5"><i class='bx bxs-box' ></i> Add Category</h1>

<div class="container-fluid w-75" id="createCategory">
    <form action=" {{ route('store-category') }} " method="POST" enctype="multipart/form-data">
        @csrf
        <div class="row mt-3">
            <div class="col">
                <p class="mb-2 mt-2 fw-bold">Category</p>
                <div class="input-group mb-3">
                    <input type="text" class="form-control @error('name') is-invalid @enderror" name="name" placeholder="Add Category">
                    @error('name')
                        <div class="invalid-feedback bg-danger text-white rounded mt-2 p-2">{{$message}}</div>
                    @enderror
                </div>
            </div>
        </div>

        {{-- <div class="row">
            <div id="tagDisplay" class="text-white"></div>
        </div>

        <div class="row" style="width: 100%">
            <p class="mb-2 mt-2 fw-bold">Category</p>
            <select class="mul-select" style="margin-left: 15px" name="category[]" multiple>
                @foreach ($categories as $category)
                    <option value="{{ $category->id }}">{{ $category->name }}</option>
                @endforeach
            </select>
        </div> --}}

        <div class="row mt-3">
            <div class="col">
                <button type="submit" class="btn btn-primary w-100"><i class='bx bx-plus' ></i> Add</button>
            </div>
        </div>
    </form>
</div>
@endsection
