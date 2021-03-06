@extends('layouts.app')

@section('content')
    <div class="card">
        <div class="card-header">
            Add Product
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
            <form method="POST" action="{{ route('admin.products.store') }}" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label class="form-label" for="name">Nama</label>
                    <input type="text" name="name" value="{{ old('name') }}" id="name"
                        class="form-control @error('name') is-invalid @enderror" required autofocus
                        placeholder="Masukkan nama">
                </div>
                <div class="form-group">
                    <label class="form-label" for="variation">Nilai Variasi</label>
                    <input type="text" name="variation" value="{{ old('variation') }}" id="variation"
                        class="form-control @error('variation') is-invalid @enderror" required autofocus
                        placeholder="Masukkan variasi">
                </div>
                <div class="form-group">
                    <label class="form-label" for="description">Deskripsi</label>
                    <textarea name="description" id="description" class="form-control" cols="10" rows="5">{{ old('description') }}</textarea>
                </div>
                <div class="form-group">
                    <label class="form-label" for="price">Harga</label>
                    <input type="number" name="price" value="{{ old('price') }}" id="price"
                        class="form-control @error('price') is-invalid @enderror" required autofocus
                        placeholder="Masukkan harga">
                </div>
                <div class="form-group">
                    <label class="form-label" for="brand">Brand</label>
                    <select name="brand" id="brand" class="form-control">
                        <option value="" disabled selected>Pilih brand</option>
                        @foreach ($brands as $brand)
                            <option value="{{ $brand->id }}">{{ $brand->name }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label class="form-label" for="link">Link</label>
                    <input type="text" name="link" value="{{ old('link') }}" id="link"
                        class="form-control @error('link') is-invalid @enderror" required autofocus
                        placeholder="Masukkan variasi">
                </div>
                <div class="form-group">
                    <label class="form-label" for="category">Kategori</label>
                    <select name="category" id="category" class="form-control">
                        <option value="" disabled selected>Pilih Kategori</option>
                        <option value="Serum">Serum</option>
                        <option value="Facial Foam">Facial Foam</option>
                        <option value="Daily Cream">Daily Cream</option>
                        <option value="Cleanser">Cleanser</option>
                        <option value="Face Mist">Face Mist</option>
                        <option value="EyeCream">EyeCream</option>
                        <option value="Sunscreen">Sunscreen</option>
                        <option value="Moisturizer">Moisturizer</option>
                        <option value="Mask">Mask</option>
                        <option value="Essence Toner">Essence Toner</option>
                    </select>
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
