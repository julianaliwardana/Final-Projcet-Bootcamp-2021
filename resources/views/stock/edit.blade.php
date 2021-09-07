@extends('layouts.app')

@section('content')
<h1 class="text-white text-center pt-5"><i class='bx bxs-pencil'></i> Edit Stock</h1>

<div class="container-fluid w-75" id="createStock">
    <form action=" {{ route('update-stock', $stock->id) }} " method="POST" enctype="multipart/form-data">
        @csrf
        <div class="row mt-3">
            <div class="col">
                <p class="mb-2 mt-2 fw-bold">Item</p>
                <div class="input-group mb-3">
                    <input type="text" class="form-control @error('item') is-invalid @enderror" name="item" placeholder="Add Item" value="{{ $stock->item }}">
                    @error('item')
                        <div class="invalid-feedback bg-danger text-white rounded mt-2 p-2">{{$message}}</div>
                    @enderror
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col">
                <p class="mb-2 mt-2 fw-bold">Price</p>
                <div class="input-group mb-3">
                    <input type="number" class="form-control @error('price') is-invalid @enderror" name="price" placeholder="Add Price" value="{{ $stock->price }}">
                    @error('price')
                        <div class="invalid-feedback bg-danger text-white rounded mt-2 p-2">{{$message}}</div>
                    @enderror
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col">
                <p class="mb-2 mt-2 fw-bold">Quantity</p>
                <div class="input-group mb-3">
                    <input type="number" class="form-control @error('quantity') is-invalid @enderror" name="quantity" placeholder="Add Quantity" value="{{ $stock->quantity }}" min="1" max="1000">
                    @error('quantity')
                        <div class="invalid-feedback bg-danger text-white rounded mt-2 p-2">{{$message}}</div>
                    @enderror
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col">
                <p class="mb-2 mt-2 fw-bold">Category</p>
                <div class="form-group mb-3">
                    <select class="form-select form-select-sm"  name="category" aria-label=".form-select-sm example">
                        @foreach ($categories as $category)
                            <option value="{{ $category->id }}">{{ $category->name }}</option>
                        @endforeach
                    </select>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col">
                <p class="mb-2 mt-2 fw-bold">Choose Image</p>
                <div class="input-group mb-3">
                    <input class="form-control @error('image') is-invalid @enderror" type="file" name="image" id="formFile">
                    @error('image')
                        <div class="invalid-feedback bg-danger text-white rounded mt-2 p-2">{{ $message }}</div>
                    @enderror
                </div>
            </div>
        </div>

        <div class="row mt-3">
            <div class="col">
                <button type="submit" class="btn btn-primary w-100"><i class='bx bxs-pencil'></i> Update</button>
            </div>
        </div>
    </form>
</div>
@endsection
