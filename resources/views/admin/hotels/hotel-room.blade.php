@extends('admin.layouts.app')

@section('content')
<div class="main-content">
    <div class="row">
        <div class="col-12">
            <div class="panel">
                <div class="panel-header">
                    <h5>Hotel Rooms</h5>
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
                                <th>Room Type</th>
                                <th>Price</th>
                                <th>Image</th>
                                <th>User Name</th>
                               
                            </tr>
                        </thead>
                        <tbody>
                             @php $i = 1; @endphp
                            @php $i = ($roomData->currentPage() - 1) * $roomData->perPage() + 1; @endphp
                            @foreach ($roomData as $item) {{ dd($item); }}
                                @php $h = $hotels->where('id', $item->hotelId)->first();  @endphp
                                <tr>
                                    <td>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox">
                                        </div>
                                    </td>
                                    <td>{{ $i }}</td>
                                    <td>{{ $item->roomTypeName ?? 'Na' }}</td>
                                    <td>{{ $item->hour24Price ?? 'Na' }}</td>
                                    <td>{{ $item->roomId }}</td>
                                    <td>{{$item->checkIn}}</td>
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
                        {{-- <div>
                            {!! $booking->links() !!}
                        </div> --}}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
