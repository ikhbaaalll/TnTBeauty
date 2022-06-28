@extends('layouts.app')

@section('content')
    <div class="card">
        <div class="card-header">
            Edit Product
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
            <form method="POST" action="{{ route('admin.products.update', $product) }}" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="form-group">
                    <label class="form-label" for="name">Nama</label>
                    <input type="text" name="name" value="{{ $product->name }}" id="name"
                        class="form-control @error('name') is-invalid @enderror" required autofocus
                        placeholder="Masukkan nama">
                </div>
                <div class="form-group">
                    <label class="form-label" for="variation">Nilai Variasi</label>
                    <input type="text" name="variation" value="{{ $product->variation }}" id="variation"
                        class="form-control @error('variation') is-invalid @enderror" required autofocus
                        placeholder="Masukkan variasi">
                </div>
                <div class="form-group">
                    <label class="form-label" for="description">Deskripsi</label>
                    <textarea name="description" id="description" class="form-control" cols="10" rows="5">{{ $product->description }}</textarea>
                </div>
                <div class="form-group">
                    <label class="form-label" for="price">Harga</label>
                    <input type="number" name="price" value="{{ $product->price }}" id="price"
                        class="form-control @error('price') is-invalid @enderror" required autofocus
                        placeholder="Masukkan harga">
                </div>
                <div class="form-group">
                    <label class="form-label" for="brand_id">Brand</label>
                    <select name="brand_id" id="brand_id" class="form-control">
                        @foreach ($brands as $brand)
                            <option value="{{ $brand->id }}" {{ $product->brand_id != $brand->id ?: 'selected' }}>
                                {{ $brand->name }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label class="form-label" for="link">Link</label>
                    <input type="text" name="link" value="{{ $product->link }}" id="link"
                        class="form-control @error('link') is-invalid @enderror" required autofocus
                        placeholder="Masukkan variasi">
                </div>
                <div class="form-group">
                    <label class="form-label" for="category">Kategori</label>
                    <select name="category" id="category" class="form-control">
                        <option value="Serum" {{ $product->category != 'Serum' ?: 'selected' }}>Serum</option>
                        <option value="Facial Foam" {{ $product->category != 'Facial Foam' ?: 'selected' }}>Facial Foam
                        </option>
                        <option value="Daily Cream" {{ $product->category != 'Daily Cream' ?: 'selected' }}>Daily Cream
                        </option>
                        <option value="Cleanser" {{ $product->category != 'Cleanser' ?: 'selected' }}>Cleanser</option>
                        <option value="Face Mist" {{ $product->category != 'Face Mist' ?: 'selected' }}>Face Mist
                        </option>
                        <option value="EyeCream" {{ $product->category != 'EyeCream' ?: 'selected' }}>EyeCream</option>
                        <option value="Sunscreen" {{ $product->category != 'Sunscreen' ?: 'selected' }}>Sunscreen
                        </option>
                        <option value="Moisturizer" {{ $product->category != 'Moisturizer' ?: 'selected' }}>Moisturizer
                        </option>
                        <option value="Mask" {{ $product->category != 'Mask' ?: 'selected' }}>Mask</option>
                        <option value="Essence Toner" {{ $product->category != 'Essence Toner' ?: 'selected' }}>Essence
                            Toner</option>
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
