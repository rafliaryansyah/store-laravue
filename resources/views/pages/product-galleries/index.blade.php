@extends('layouts.default')

@section('title', 'Product - Admin Vyna')

@section('content')
<div class="content">
    <div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-header">
                <strong class="card-title">List Product Photo</strong>
            </div>
            <div class="table-stats order-table ov-h">
                <table class="table ">
                    <thead>
                        <tr>
                            <th class="serial">#</th>
                            <th>Name Product</th>
                            <th>Photo</th>
                            <th>Default</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($items as $item)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td class="name">{{ $item->product->name }}</td>
                            <td>  <img class="type" src="{{ $item->photo }}" alt=""> </td>
                            <td> <span class="price">{{ $item->is_default ? 'Yes' : 'No' }}</span> </td>
                            <td>
                                <form action="{{ route('product-galleries.destroy', $item->id) }}" method="post" class="d-inline">
                                    @method('delete')
                                    @csrf
                                    <button class="btn btn-danger btn-sm">
                                        <i class="fa fa-trash"></i>
                                    </button>
                                </form>
                            </>
                        </tr>
                        @empty
                        <tr>
                            <td colspan="6" class="text-center">
                                Data is empty
                            </td>
                        </tr>
                        @endforelse
                    </tbody>
                </table>
            </div> <!-- /.table-stats -->
        </div>
    </div>
    </div>
</div>
@endsection