@extends('layouts.app')

@section('content')
    <div class="card">
        <div class="card-header">
            Add Skin Type
        </div>

        @if ($errors->any())
            <div class="alert alert-danger mx-3 mt-2">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <div class="card-body">
            <form method="POST" action="{{ route('admin.products.skins.store', $product) }}">
                @csrf
                <div class="form-group">
                    <label class="form-label" for="name">Nama</label>
                    <input type="text" name="name" value="{{ old('name') }}" id="name"
                        class="form-control @error('name') is-invalid @enderror" required autofocus
                        placeholder="Masukkan nama">
                </div>
                <div class="form-group">
                    <button class="btn btn-danger" type="submit">
                        Simpan
                    </button>
                </div>
            </form>
        </div>
    </div>
@endsection
