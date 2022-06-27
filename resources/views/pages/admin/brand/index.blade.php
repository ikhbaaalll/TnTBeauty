@extends('layouts.app')

@section('content')
    <div class="card mb-4">
        <div class="card-header">
            {{ __('Brand') }}
        </div>

        <!-- <div class="alert alert-info" role="alert">Sample table page</div> -->

        <div class="card-body">

            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">Name</th>
                        <th scope="col">Product</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($brands as $brand)
                        <tr>
                            <td>{{ $brand->name }}</td>
                            <td><a href="{{ route('admin.products.index', ['brand' => $brand->id]) }}"
                                    class="btn btn-sm btn-info">Product</a></td>
                        </tr>
                    @endforeach
                </tbody>
            </table>

        </div>

        <div class="card-footer">
            {{ $brands->links() }}
        </div>
    </div>
@endsection
