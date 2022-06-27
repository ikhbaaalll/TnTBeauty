@extends('layouts.app')

@section('content')
    <div class="card mb-4">
        <div class="card-header">
            {{ __('Brand') }}
        </div>

        <form action="{{ route('admin.products.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <input type="text" name="category">
            <input type="file" name="file">
            <button type="submit">S</button>
        </form>
    </div>
@endsection
