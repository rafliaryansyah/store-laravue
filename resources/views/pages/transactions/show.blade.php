<table class="table table-bordered">
    <tr>
        <th>Name</th>
        <td>{{ $item->name }}</td>
    </tr>
    <tr>
        <th>Email</th>
        <td>{{ $item->email }}</td>
    </tr>
    <tr>
        <th>Phone</th>
        <td>{{ $item->number }}</td>
    </tr>
    <tr>
        <th>Address</th>
        <td>{{ $item->address }}</td>
    </tr>
    <tr>
        <th>Transaction Total</th>
        <td>{{ $item->transaction_total }}</td>
    </tr>
    <tr>
        <th>Transaciton Status</th>
        <td>{{ $item->transaction_status }}</td>
    </tr>
    <tr>
        <th>Product Purchase</th>
            <td>
                <table class="table table-bordered w-100">  
                    <tr>
                        <th>Name</th>
                        <th>Type</th>
                        <th>Price</th>
                    </tr>
                    @foreach ($item->details as $detail)
                    <tr>
                        <th>{{ $detail->product->name }}</th>
                        <th>{{ $detail->product->type }}</th>
                        <th>${{ $detail->product->price }}</th>
                    </tr>
                    @endforeach
                </table>
            </td>
    </tr>
</table>
<div class="row">
    <div class="col-4">
        <a href="{{ route('transaction.status', $item->id) }}?status=SUCCESS" class="btn btn-success btn-block">
            <i class="fa fa-check"></i> Set Success
        </a>
    </div>
    <div class="col-4">
        <a href="{{ route('transaction.status', $item->id) }}?status=FAILED" class="btn btn-warning btn-block">
            <i class="fa fa-time"></i> Set Failed
        </a>
    </div>
    <div class="col-4">
        <a href="{{ route('transaction.status', $item->id) }}?status=PENDING" class="btn btn-info btn-block">
            <i class="fa fa-spinner"></i> Set Pending
        </a>
    </div>
</div>