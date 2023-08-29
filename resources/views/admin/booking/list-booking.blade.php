@extends('admin.layouts.app')

@section('content')
    <!-- main sidebar end -->

    <!-- main content start -->
    <div class="main-content">
        <div class="row">
            <div class="col-12">
                <div class="panel">
                    <div class="panel-header">
                        <h5>All Booking</h5>
                    </div>
                    <div class="panel-body">
                        <div class="table-filter-option">

                        </div>

                        <table class="table table-dashed table-hover digi-dataTable all-product-table table-striped"
                            id="allProductTable">
                            <thead>
                                <tr>
                                    <th class="no-sort">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" id="markAllProduct">
                                        </div>
                                    </th>
                                    <th>S.No</th>
                                    <th>Hotel Name</th>
                                    <th style="width:200px;">Address</th>
                                    <th>Room Number</th>
                                    <th>Check In</th>
                                    <th>Check Out</th>
                                    <th>Total Days</th>
                                </tr>
                            </thead>
                            <tbody>
                                @php $i = 1; @endphp
                                @php $i = ($booking->currentPage() - 1) * $booking->perPage() + 1; @endphp
                                @foreach ($booking as $item)
                                    @php
                                        $h = $hotels->where('id', $item->hotelId)->first();
                                    @endphp
                                    <tr>
                                        <td>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox">
                                            </div>
                                        </td>
                                        <td>{{ $i }}</td>
                                        <td>{{ $h->hotelName ?? 'Na' }}</td>
                                        <td>{{ $h->address ?? 'Na' }}</td>
                                        <td>{{ $item->roomId }}</td>
                                        <td>{{$item->checkin_date}}</td>
                                        <td>{{$item->bookingTillDate}}</td>
                                        <td class="text-center" style="vertical-align: middle;">
                                            {{ \Carbon\Carbon::parse($item->checkin_date)->diffInDays($item->bookingTillDate) }}
                                        </td>
                                    </tr>
                                    @php $i++; @endphp
                                @endforeach
                            </tbody>
                        </table>
                        <div class="d-flex justify-content-between align-items-center mt-4">
                            <div class="table-bottom-control"></div>
                            <div>
                                {!! $booking->links() !!}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
