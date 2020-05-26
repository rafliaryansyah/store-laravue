@extends('layouts.default')

@section('title', 'Edit Product - Admin Vyna')

@section('content')

<div class="content">
<div class="card">
    <div class="card-header">
        <strong>Edit Transaction - </strong>
        <small>{{ $item->name }}</small>
    </div>
    <div class="card-body card-block">
        <form action="{{ route('transaction.update', $item->id) }}" method="POST">
            @method('PUT')
            @csrf
            <div class="form-group">
                <label for="name" class="form-control-label">Name Cust</label>
                <input type="text" name="name" id="name" value="{{ old('name') ? old('name') : $item->name }}" class="form-control @error('name') is-invalid @enderror">
                @error('name')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
            <div class="form-group">
                <label for="email" class="form-control-label">Email Cust</label>
                <input type="text" name="email" id="email" value="{{ old('email') ? old('email') : $item->email }}" class="form-control @error('email') is-invalid @enderror">
                @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
            <div class="form-group">
                <label for="number" class="form-control-label">Phone Cust</label>
                <input type="text" name="number" id="number" value="{{ old('number') ? old('number') : $item->number }}" class="form-control @error('number') is-invalid @enderror">
                @error('number')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
            <div class="form-group">
                <label for="address" class="form-control-label">Address Cust</label>
                <input type="text" name="address" id="address" value="{{ old('address') ? old('address') : $item->address }}" class="form-control @error('address') is-invalid @enderror">
                @error('address')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
            <button class="btn btn-primary btn-block" type="submit">Edit Product</button>
            <a class="btn btn-outline-danger btn-block" href="{{ route('transaction.index') }}">Cancel</a>
        </form>
    </div>
</div>
</div>

@endsection