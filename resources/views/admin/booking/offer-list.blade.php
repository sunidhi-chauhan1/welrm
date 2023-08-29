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
                                    <th>Offer Name</th>
                                    <th>Offer Percents</th>
                                </tr>
                            </thead>
                                <tbody>
                                @php $i=1; @endphp
                                @foreach($offers as $h)
                             
                                    <tr>
                                        <td>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox">
                                            </div>
                                        </td>
                                        <td>{{ $i }}</td>
                                        <td>{{ $h->offer_name }}</td>
                                        <td>{{ $h->percentage }}</td>
                                    </tr>
                                    @php $i++; @endphp
                                @endforeach
                            </tbody>

                            </table>

                            <div class="d-flex justify-content-between align-items-center mt-4">
                                <div class="table-bottom-control"></div>
                                <div>
                                    {!! $offers->links() !!}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endsection
