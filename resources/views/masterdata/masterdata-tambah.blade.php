@extends('admin.master')
@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Masterdata</h4>
                    <p class="card-description">
                        Tambah Masterdata
                    </p>
                    <form method="POST" action="{{ route('masterdata.store') }}" id="myForm">
                        @csrf
                        <div class="form-group">
                            <label>Part Number</label>
                            <input type="text" class="form-control" id="part_number" name="part_number"
                                placeholder="Part Number">
                        </div>
                        <div class="form-group">
                            <label>Part Name</label>
                            <input type="text" class="form-control" id="part_name" name="part_name"
                                placeholder="Part Name">
                        </div>
                        <div class="form-group">
                            <label>Katalis</label>
                            <input type="text" class="form-control" id="katalis" name="katalis" placeholder="Katalis">
                        </div>
                        <div class="form-group">
                            <label>Channel</label>
                            <input type="text" class="form-control" id="channel" name="channel" placeholder="Channel">
                        </div>
                        <div class="form-group">
                            <label>Chrome</label>
                            <input type="text" class="form-control" id="chrome" name="chrome" placeholder="Chrome">
                        </div>
                        <div class="form-group">
                            <label>Qty Bar</label>
                            <input type="text" class="form-control" id="qty_bar" name="qty_bar" placeholder="Qty Bar">
                        </div>
                        <button type="submit" class="btn btn-primary me-2">Submit</button>
                        <button class="btn btn-light">Cancel</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
