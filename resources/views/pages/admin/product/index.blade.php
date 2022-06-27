@extends('layouts.app')

@section('content')
    <div class="card mb-4">
        <div class="card-header">
            {{ __('Product') }}
        </div>

        <!-- <div class="alert alert-info" role="alert">Sample table page</div> -->

        <div class="card-body">
            <a href="{{ route('admin.products.create') }}" class="btn btn-success">Create</a>
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">Name</th>
                        <th scope="col">Brand</th>
                        <th scope="col">Category</th>
                        <th scope="col">Variation</th>
                        <th scope="col">Price</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($products as $product)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $product->name }}</td>
                            <td>{{ $product->brand->name }}</td>
                            <td>{{ $product->category }}</td>
                            <td>{{ $product->variation }}</td>
                            <td>{{ number_format($product->price, 2) }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>

        </div>

        <div class="card-footer">
            {{ $products->links() }}
        </div>
    </div>
@endsection
