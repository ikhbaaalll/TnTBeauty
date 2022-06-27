@extends('layouts.user')

@section('css')
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/select2-bootstrap-theme/0.1.0-beta.10/select2-bootstrap.min.css"
        integrity="sha512-kq3FES+RuuGoBW3a9R2ELYKRywUEQv0wvPTItv3DSGqjpbNtGWVdvT8qwdKkqvPzT93jp8tSF4+oN4IeTEIlQA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
@endsection

@section('content')
    <div class="row">
        <div class="card mx-auto" style="width: 45rem;">
            <div class="card-header">Products Recommendation</div>
            <div class="card-body">
                <form action="{{ route('user.products.recommend.store') }}" method="POST">
                    @csrf
                    <div class="form-group row input-group input-group-lg">
                        <label for="category" class="col-4 col-form-label">Kategori</label>
                        <div class="col-md-8">
                            <select name="category" id="category" class="form-control select2-container" required>
                                <option value="" disabled selected>Pilih kategori</option>
                                @foreach ($categories as $category)
                                    <option value="{{ $category->category }}">{{ $category->category }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="form-group row input-group input-group-lg">
                        <label for="brand" class="col-4 col-form-label">Brand</label>
                        <div class="col-md-8">
                            <select name="brand" id="brand" class="form-control select2-container" required>
                                <option value="" disabled selected>Pilih brand</option>
                                @foreach ($brands as $id => $name)
                                    <option value="{{ $id }}">{{ $name }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="form-group row input-group input-group-lg">
                        <label for="skin" class="col-4 col-form-label">Tipe Kulit</label>
                        <div class="col-md-8">
                            <select name="skin[]" id="skin" class="form-control select2-multiple select2-container"
                                multiple required>
                                @foreach ($skins as $skin)
                                    <option value="{{ $skin->name }}">{{ $skin->name }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="form-group row input-group input-group-lg">
                        <label for="purpose" class="col-4 col-form-label">Kegunaan</label>
                        <div class="col-md-8">
                            <select name="purpose[]" id="purpose" class="form-control select2-multiple select2-container"
                                multiple required>
                                @foreach ($functions as $function)
                                    <option value="{{ $function->name }}">{{ $function->name }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="purpose" class="col-4 col-form-label">Harga</label>
                        <div class="col-4">
                            <input type="number" class="form-control" name="start" value="0" step="1000"
                                min="0" required>
                        </div>
                        <div class="col-4">
                            <input type="number" class="form-control" name="end" value="100000" step="1000"
                                min="0" required>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-success float-right">Cari Produk</button>
                </form>
            </div>
        </div>
    </div>
@endsection

@section('js')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.0/js/select2.full.min.js"
        integrity="sha512-m7x59G4+NdYoUUKUscYq2qKkineVwmjXA/7WfXm8pukxYiFavrh9uFImpPtbmZGAnHR0rouVWWk+dgcHNurQ5g=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script>
        $(document).ready(function() {
            $('#brand').select2({
                theme: "bootstrap"
            });
            $('#category').select2({
                theme: "bootstrap"
            });
            $('#skin').select2({
                theme: "bootstrap"
            });
            $('#purpose').select2({
                theme: "bootstrap"
            });
        });
    </script>
@endsection
