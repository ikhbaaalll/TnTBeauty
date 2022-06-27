@extends('layouts.app')

@section('content')
    <div class="card mb-4">
        <div class="card-header">
            {{ __('Brand') }}
        </div>

        <form action="{{ route('admin.brands.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <input type="file" name="file">
            <button type="submit">S</button>
        </form>
    </div>
@endsection
