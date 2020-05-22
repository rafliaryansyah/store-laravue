@extends('layouts.default')

@section('title', 'Edit Product - Admin Vyna')

@section('content')

<div class="content">
<div class="card">
    <div class="card-header">
        <strong>Edit Product - </strong>
        <small>{{ $item->name }}</small>
    </div>
    <div class="card-body card-block">
        <form action="{{ route('product.update', $item->id) }}" method="POST">
            @method('PUT')
            @csrf
            <div class="form-group">
                <label for="name" class="form-control-label">Name Product</label>
                <input type="text" name="name" id="name" value="{{ old('name') ? old('name') : $item->name }}" class="form-control @error('name') is-invalid @enderror">
                @error('name')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
            <div class="form-group">
                <label for="type" class="form-control-label">Type Product</label>
                <input type="text" name="type" id="type" value="{{ old('type') ? old('type') : $item->type }}" class="form-control @error('type') is-invalid @enderror">
                @error('type')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
            <div class="form-group">
                <label for="description" class="form-control-label">Description Product</label>
                <textarea name="description" id="description" class="ckeditor form-control" cols="30" rows="5">{{ old('description') ? old('description') : $item->description }}</textarea>
                @error('description')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
            <div class="form-group">
                <label for="price" class="form-control-label">Price Product</label>
                <input type="text" name="price" id="price" value="{{ old('price') ? old('price') : $item->price }}" class="form-control @error('price') is-invalid @enderror">
                @error('price')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
            <div class="form-group">
                <label for="quantity" class="form-control-label">Quantity Product</label>
                <input type="text" name="quantity" id="quantity" value="{{ old('quantity') ? old('quantity') : $item->quantity }}" class="form-control @error('quantity') is-invalid @enderror">
                @error('quantity')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
            <button class="btn btn-primary btn-block" type="submit">Edit Product</button>
            <a class="btn btn-outline-danger btn-block" href="{{ route('product.index') }}">Cancel</a>
        </form>
    </div>
</div>
</div>

@endsection