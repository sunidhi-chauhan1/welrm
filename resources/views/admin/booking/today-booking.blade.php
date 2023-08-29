@extends('admin.layouts.app')

@section('content')

     <!-- main sidebar end -->

        <!-- main content start -->
        <div class="main-content">
            <div class="row">
                <div class="col-12">
                    <div class="panel">
                        <div class="panel-header">
                            <h5>Today's Booking</h5>

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
                                        <th>Room number</th>
                                        <th>Check In</th>
                                        <th>Check Out</th>
                                        <th>Total Days</th>

                                    </tr>
                                </thead>
                                <tbody>

                                    @php $i = ($TodayBookings->currentPage() - 1) * $TodayBookings->perPage() + 1; @endphp
                                    @if ($TodayBookings->isEmpty())
                                        <p>No bookings available for today.</p>
                                    @else
                                        @foreach ($TodayBookings as $item)
                                            <tr>
                                                <td>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox">
                                                    </div>
                                                </td>

                                                <td>{{ $i }}</td>
                                                @if ($item->hotelName)
                                                    <td>{{ $item->hotelName }}</td>
                                                @endif
                                                @if ($item->address)
                                                    <td>{{ $item->address }}</td>
                                                @endif
                                                <td>{{ $item->roomId }}</td>
                                                <td>{{$item->bookingFromDate}}</td>
                                                <td>{{$item->bookingToDate}}</td>
                                                <td class="text-center" style="vertical-align:middle">
                                                    {{ \Carbon\Carbon::parse($item->bookingFromDate)->diffInDays($item->bookingToDate) }}</td>
                                            </tr>
                                </tbody>
                                @php $i++; @endphp
                                @endforeach
                                @endif

                            </table>

                            <div class="d-flex justify-content-between align-items-center mt-4">
                                <div class="table-bottom-control"></div>
                                <div>
                                    {!! $TodayBookings->links() !!}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endsection
