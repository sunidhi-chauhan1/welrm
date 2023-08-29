@extends('admin.layouts.app')

@section('content')

     <!-- main sidebar end -->

        <!-- main content start -->
        <div class="main-content">
            <div class="row">
                <div class="col-12">
                    <div class="panel">
                        <div class="panel-header">
                            <h5>Coupons</h5>

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
                                        <th>Hotel Owner Name</th>
                                        <th style="width:200px;">Coupon Code</th>
                                        <th>Used</th>
                                        <th>Starting Days</th>

                                    </tr>
                                </thead>
                                <tbody>

                                    @php $i = ($coupons->currentPage() - 1) * $coupons->perPage() + 1; @endphp
                                    @if ($coupons->isEmpty())
                                        <p>No bookings available for today.</p>
                                    @else
                                        @foreach ($coupons as $item)
                                            <tr>
                                                <td>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox">
                                                    </div>
                                                </td>

                                                <td>{{ $i }}</td>
                                                @if ($item->userId)
                                                
                                                    <td>{{ $item->userId }}</td>
                                                @endif
                                                <td>{{ $item->coupon_code }}</td>
                                                @if($item->couponUsed == 0)
                                                <td>No</td>
                                                @else
                                                <td>yes</td>
                                                @endif
                                                <td>{{ \Carbon\Carbon::parse($item->created_at)->format('Y-m-d') }}</td>
                                            </tr>
                                </tbody>
                                @php $i++; @endphp
                                @endforeach
                                @endif

                            </table>

                            <div class="d-flex justify-content-between align-items-center mt-4">
                                <div class="table-bottom-control"></div>
                                <div>
                                    {!! $coupons->links() !!}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endsection
