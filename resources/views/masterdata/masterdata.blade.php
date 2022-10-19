@extends('admin.master')
@section('content')
    <div class="align-content-sm-end">
        <div>
            <div class="btn-wrapper">
                <a href="#" class="btn btn-otline-dark align-items-center"><i class="icon-share"></i> Share</a>
                <a href="#" class="btn btn-otline-dark"><i class="icon-printer"></i> Print</a>
                <a href="{{ route('masterdata.create') }}" class="btn btn-primary text-white me-0"><i class="icon-download"></i> Export</a>
            </div>
        </div>
    </div>
    <br>
    <div class="table-responsive">
        <table class="table">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Part Number</th>
                    <th>Part Name</th>
                    <th>Katalis</th>
                    <th>Channel</th>
                    <th>Chrome</th>
                    <th>Qty Bar</th>
                    <th>Status</th>
                </tr>
            </thead>
            <tbody>
                @php
                    $no=1;
                @endphp
                @foreach ($masterdata as $row)
                <tr>
                    <td>{{ $no++ }}</td>
                    <td>{{ $row->part_number }}</td>
                    <td>{{ $row->part_name }}</td>
                    <td>{{ $row->katalis }}</td>
                    <td>{{ $row->channel }}</td>
                    <td>{{ $row->chrome }}</td>
                    <td>{{ $row->qty_bar }}</td>
                    <td>{{ $row->status }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
