@extends('layouts.default')

@section('title', 'Create Product - Admin Vyna')

@section('content')

<div class="content">
<div class="card">
    <div class="card-header">
        <strong>Add Photo Product</strong>
    </div>
    <div class="card-body card-block">
        <form action="{{ route('product-galleries.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label class="form-control-label">Name Product</label>
                <select name="products_id" class="form-control @error('products_id') is-invalid @enderror">
                    @foreach ($products as $product)
                        <option value="{{ $product->id }}">{{ $product->name }}</option>
                    @endforeach
                </select>
                @error('products_id')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
            <div class="form-group">
                <label for="photo" class="form-control-label">Photo Product</label>
                {{-- <input type="file"
                       name="photo" 
                       id="photo"
                       accept="image/*"
                       required
                       value="{{ old('photo') }}"
                       class="custom-file-input @error('photo') is-invalid @enderror">
                        <label class="custom-file-label" for="inputGroupFile03">Choose file</label> --}}
                        <div class="input-group mb-3">
                            <div class="custom-file">
                              <input type="file"
                                     class="custom-file-input"
                                     id="inputGroupFile02"
                                     name="photo"
                                     required
                                     value="{{ old('photo') }}"
                                     accept="image/*">
                              <label class="custom-file-label" for="inputGroupFile02" aria-describedby="inputGroupFileAddon02">Choose image</label>
                            </div>
                          </div>
                @error('photo')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
            <div class="form-group">
                <label class="form-control-label">Make default image?</label>
                <br>
                <label>
                    <input type="radio" name="is_default" id="is_default" value="1" class="form-control @error('is_default') is-invalid @enderror">Yes
                </label>
                &nbsp;
                <label>
                    <input type="radio" name="is_default" id="is_default" value="0" class="form-control @error('is_default') is-invalid @enderror">No
                </label>
                @error('is_default')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
            <button class="btn btn-primary btn-block" type="submit">Add Photo Product</button>
            <a class="btn btn-outline-danger btn-block" href="{{ route('product-galleries.index') }}">Cancel</a>
        </form>
    </div>
</div>
</div>

@endsection