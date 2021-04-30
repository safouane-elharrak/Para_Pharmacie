

@extends('layouts.admin')
@section('title', 'Orders')
@section('content')
    <div class="app-title" style="margin-left:40%">
        <div>
            <h1><i class="fa fa-bar-chart"></i> Liste des Commandes</h1>
        </div>
    </div>
    <div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="tile">
                <div class="tile-body">
                <div class="table-responsive shadow mb-3">
                    <table class="table table-bordered table-hover bg-white mb-0" id="sampleTable">
                        <thead class=" bg-dark "style="color:white;" >
                        <tr>
                            <th> Order Number </th>
                            <th> Placed By </th>
                            <th class="text-center"> Total Amount </th>
                            <th class="text-center"> Items Qty </th>
                            <th class="text-center"> Status </th>
                           
                        </tr>
                        </thead>
                        <tbody>
                        @forelse ($orders as $order)
                        <tr>
                                    <th scope="row">{{ $order->order_number }}</th>
                                    <td>{{ $order->first_name }} {{ $order->last_name }}</td>
                                    <td>{{ config('settings.currency_symbol') }}{{ $order->grand_total }}</td>
                                    <td>{{ $order->item_count  }}</td>
                                    <td><span class="badge badge-success">{{ strtoupper($order->status) }}</span></td>
                                </tr>
                            @empty
                                <div class="col-sm-12">
                                    <p class="alert alert-warning">No orders to display.</p>
                                </div>
                            @endforelse
                        </tbody>
                        </div>
                    </table>
                </div>
            </div>
        </div>
    </div>
    </div>
@endsection
@push('scripts')
    <script type="text/javascript" src="{{ asset('backend/js/plugins/jquery.dataTables.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('backend/js/plugins/dataTables.bootstrap.min.js') }}"></script>
    <script type="text/javascript">$('#sampleTable').DataTable();</script>
@endpush