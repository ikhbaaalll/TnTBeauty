@extends('layouts.user')

@section('content')
    <div class="row">
        <div class="card mx-auto">
            <div class="card-header">Recommendation Product</div>
            <div class="card-body">
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
                        @forelse ($products as $product)
                            <tr class="table-light">
                                <th scope="row">{{ $product->name }}</th>
                                <td>{{ $product->brand->name }}</td>
                                <td>{{ $product->category }}</td>
                                <td>
                                    @foreach ($product->skins as $skin)
                                        {{ $skin->name }}@if (!$loop->last),
                                        @endif
                                    @endforeach
                                </td>
                                <td>{{ number_format($product->price, 2) }}</td>
                                <td><a href="{{ $product->link }}" target="_blank" class="btn btn-sm btn-info">Shopee</a></td>
                            </tr>
                            @empty
                                <tr class="table-light">
                                    <th colspan="6">Tidak ada rekomendasi produk</th>
                                </tr>
                                <tr class="table-light">
                                    <th colspan="6"><a href="{{ route('user.products.recommend') }}"
                                            class="btn btn-sm btn-info">Yuk
                                            cari lagi</a></th>
                                </tr>
                            @endforelse
                        </tbody>
                        {{ $products->links() }}
                    </table>
                </div>
            </div>
        </div>
    @endsection
