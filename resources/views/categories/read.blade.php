@extends('layouts.app')

@section('content')
    <div class="container">
        <h3>Categories</h3>
        <a href=" {{ route('create-category') }} " class="btn btn-primary float-right mb-4">Add Categories</a>
        <table class="table table-striped">
            <thead class="bg-white">
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Name</th>
                    <th scope="col">Date Created</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($categories as $category)
                    <tr class="text-white">
                        <th scope="row">{{ $category->id }}</th>
                        <th>{{ $category->name }}</th>
                        <th>{{ $category->created_at->diffForHumans() }}</th>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
