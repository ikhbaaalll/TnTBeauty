@extends('layouts.user')

@section('content')
    <div class="row">
        <div class="card p-5 card-shadow">
            <div class="card-header">Products</div>
            <div class="card-body">
                <div class="dropdown show mb-3">
                    <a class="btn btn-secondary dropdown-toggle" href="#" role="button" id="dropdownMenuLink"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Kategori
                    </a>

                    <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                        <a class="dropdown-item" href="{{ route('user.products', ['type' => 'Serum']) }}">Serum</a>
                        <a class="dropdown-item" href="{{ route('user.products', ['type' => 'Facial Foam']) }}">Facial
                            Foam</a>
                        <a class="dropdown-item" href="{{ route('user.products', ['type' => 'Daily Cream']) }}">Daily
                            Cream</a>
                        <a class="dropdown-item" href="{{ route('user.products', ['type' => 'Cleanser']) }}">Cleanser</a>
                        <a class="dropdown-item" href="{{ route('user.products', ['type' => 'Face Mist']) }}">Face
                            Mist</a>
                        <a class="dropdown-item" href="{{ route('user.products', ['type' => 'EyeCream']) }}">EyeCream</a>
                        <a class="dropdown-item"
                            href="{{ route('user.products', ['type' => 'Sunscreen']) }}">Sunscreen</a>
                        <a class="dropdown-item"
                            href="{{ route('user.products', ['type' => 'Moisturizer']) }}">Moisturizer</a>
                        <a class="dropdown-item" href="{{ route('user.products', ['type' => 'Mask']) }}">Mask</a>
                        <a class="dropdown-item" href="{{ route('user.products', ['type' => 'Essence Toner']) }}">Essence
                            Toner</a>
                    </div>
                </div>
                <table class="table table-bordered">
                    <thead>
                        <tr class="table-light">
                            <th scope="col">Nama</th>
                            <th scope="col">Brand</th>
                            <th scope="col">Kategori</th>
                            <th scope="col">Tipe Kulit</th>
                            <th scope="col">Harga</th>
                            <th scope="col">Link</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($products as $product)
                            <tr class="table-light">
                                <th scope="row">{{ $product->name }}</th>
                                <td>{{ $product->brand->name }}</td>
                                <td>{{ $product->category }}</td>
                                <td>
                                    @foreach ($product->skins as $skin)
                                        {{ $skin->name }}@if (!$loop->last)
                                            ,
                                        @endif
                                    @endforeach
                                </td>
                                <td>{{ number_format($product->price, 2) }}</td>
                                <td><a href="{{ $product->link }}" class="btn btn-sm btn-info">Shopee</a></td>
                            </tr>
                        @endforeach
                    </tbody>
                    {{ $products->links() }}
                </table>
            </div>
        </div>
    </div>
@endsection
