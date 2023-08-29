@extends('admin.layouts.app')

@section('content')
    <style>
        .td {}
    </style>
     <!-- main sidebar end -->
        <!-- main content start -->
        <div class="main-content">
            <div class="row">
                <div class="col-12">
                    <div class="panel">
                        <div class="panel-header">
                            <h5>All Customer's</h5>

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
                                        <th>Full Name</th>
                                        <th>Address</th>
                                        <th>Mobile</th>

                                    </tr>
                                </thead>
                                <tbody>

                                    @php $i = ($customerUsers->currentPage() - 1) * $customerUsers->perPage() + 1; @endphp

                                    @if ($customerUsers->isEmpty())
                                        <p>No bookings available for today.</p>
                                    @else
                                        @foreach ($customerUsers as $item)
                                            <tr>
                                                <td>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox">
                                                    </div>
                                                </td>

                                                <td>{{ $i }}</td>

                                                <td class="{{ $item->fullName ? '' : 'text-danger' }}">
                                                    {{ $item->fullName ?? 'Na' }}
                                                </td>


                                                <td class="{{ $item->address ? '' : 'text-danger' }}">
                                                    {{ $item->address ?? 'Na' }}</td>

                                                <td class="{{ $item->mobile ? 'text-center' : 'text-center text-danger' }}">
                                                    {{ $item->mobile ?? 'Na' }}
                                                </td>
                                            </tr>
                                </tbody>
                                @php $i++; @endphp
                                @endforeach
                                @endif

                            </table>



                            <div class="d-flex justify-content-between align-items-center mt-4">
                                <div class="table-bottom-control"></div>
                                <div>
                                    {!! $customerUsers->links() !!}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endsection
