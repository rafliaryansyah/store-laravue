@extends('layouts.default')

@section('title', 'Product - Admin Vyna')

@section('content')
<div class="content">
    <div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-header">
                <strong class="card-title">Income Transaction Data</strong>
            </div>
            <div class="table-stats order-table ov-h">
                <table class="table ">
                    <thead>
                        <tr>
                            <th class="serial">#</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Phone</th>
                            <th>Transaction Total</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($items as $item)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $item->name }}</td>
                            <td>{{ $item->email }}</td>
                            <td>  <span class="type">{{ $item->number }}</span> </td>
                            <td> <span class="price">{{ $item->transaction_total }}</span> </td>
                            <td>
                                @if ($item->transaction_status == 'PENDING')
                                    <span class="badge badge-info">
                                @elseif ($item->transaction_status == 'SUCCESS')
                                    <span class="badge badge-success">
                                @elseif ($item->transaction_status == 'FAILED')
                                    <span class="badge badge-danger">
                                @else
                                <span>
                                @endif
                                    {{ $item->transaction_status }}
                                </span>
                            </td>
                            <td>
                                @if ($item->transaction_status == 'PENDING')
                                    {{-- <a href="{{ route('transaction.status', $item->id) }}?status=SUCCESS" class="btn btn-success btn-sm">
                                        <i class="fa fa-check"></i>
                                    </a>
                                    <a href="{{ route('transaction.status', $item->id) }}?status=FAILED" class="btn btn-warning btn-sm">
                                        <i class="fa fa-times"></i>
                                    </a> --}}
                                @endif
                                <a href="#mymodal"
                                   class="btn btn-primary btn-sm"
                                   {{-- data-remote="{{ route('transaciton.show', $item->id) }}" --}}
                                   data-toggle="modal"
                                   data-target="#mymodal"
                                   data-title="Detail Transaction {{ $item->uuid }}">
                                    <i class="fa fa-eye"></i>
                                </a>
                                <a href="{{ route('transaction.destroy', $item->id) }}" class="btn btn-primary btn-sm">
                                    <i class="fa fa-pencil"></i>
                                </a>
                                <form action="{{ route('transaction.destroy', $item->id) }}" method="post" class="d-inline">
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