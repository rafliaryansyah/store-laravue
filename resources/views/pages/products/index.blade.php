@extends('layouts.default')

@section('title', 'Product - Admin Vyna')

@section('content')
<div class="content">
    <div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-header">
                <strong class="card-title">Custom Table</strong>
            </div>
            <div class="table-stats order-table ov-h">
                <table class="table ">
                    <thead>
                        <tr>
                            <th class="serial">#</th>
                            <th>Name</th>
                            <th>Type</th>
                            <th>Price</th>
                            <th>Quantity</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($items as $item)
                        <tr>
                            <td class="name">{{ $item->id }}</td>
                            <td>{{ $item->name }}</td>
                            <td>  <span class="type">{{ $item->type }}</span> </td>
                            <td> <span class="price">{{ $item->price }}</span> </td>
                            <td>
                                <span class="quantit">{{ $item->quantity }}</span>
                            </td>
                            <td>
                                <a href="" class="btn btn-info btn-sm">
                                    <i class="fa fa-picture-o"></i>
                                </a>
                                <a href="{{ route('product.edit', $item->id) }}" class="btn btn-primary btn-sm">
                                    <i class="fa fa-pencil"></i>
                                </a>
                                <form action="{{ route('product.destroy', $item->id) }}" method="post" class="d-inline">
                                    @method('delete')
                                    @csrf
                                    <button class="btn btn-danger btn-sm">
                                        <i class="fa fa-trash"></i>
                                    </button>
                                </form>
                            </td>
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