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
                    <h5>Contact Us</h5>

                </div>
                <div class="panel-body">
                    <div class="table-filter-option">

                    </div>
                    @if (session('success'))
                    <div class="alert alert-success">
                        {{ session('success') }}
                    </div>
                    @endif

                    @if (session('error'))
                    <div class="alert alert-danger">
                        {{ session('error') }}
                    </div>
                    @endif
                    <table class="table table-dashed table-hover digi-dataTable all-product-table table-striped" id="allProductTable">
                        <thead>
                            <tr>
                                <th class="no-sort">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" id="markAllProduct">
                                    </div>
                                </th>
                                <th>S.No</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Phone</th>
                                <th>Message</th>
                                <th>Action</th>

                            </tr>
                        </thead>
                        <tbody>

                            @php $i = ($contactUs->currentPage() - 1) * $contactUs->perPage() + 1; @endphp

                            @if ($contactUs->isEmpty())
                            <p>No data available .</p>
                            @else
                            @foreach ($contactUs as $item)
                            <tr>
                                <td>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox">
                                    </div>
                                </td>

                                <td>{{$i}}</td>

                                <td class="{{ $item->name ? '' : 'text-danger' }}">
                                    {{ $item->name ?? 'Na' }}
                                </td>


                                <td class="{{ $item->email ? '' : 'text-danger' }}">
                                    {{ $item->email ?? 'Na' }}
                                </td>

                                <td class="{{ $item->phone ? 'text-center' : 'text-center text-danger' }}">
                                    {{ $item->phone ?? 'Na' }}
                                </td>

                                <td class="{{ $item->message ? 'text-center' : 'text-center text-danger' }}">
                                    {{ $item->message ?? 'Na' }}
                                </td>

                                <td>
                                    <form action="{{ route('admin.delete-contactUs', ['id' => $item->id]) }}" method="POST" onsubmit="return confirm('Are you sure you want to delete this contact?')">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger btn-sm">
                                            Delete
                                        </button>
                                    </form>
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
                            {!! $contactUs->links() !!}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endsection