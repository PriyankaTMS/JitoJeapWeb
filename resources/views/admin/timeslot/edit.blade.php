@extends('admin.layout.master')
@section('container')
    <div class="page-wrapper">
        <div class="page-breadcrumb">
            <div class="row">
                <div class="col-12 d-flex no-block align-items-center">
                    <h4 class="page-title">Edit Time Slot</h4>
                    <div class="ms-auto text-end">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{ route('admin.timeslot') }}">Time Slots</a></li>

                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
        <div class="card">
            <form class="form-horizontal" method="post" action="{{ route('admin.timeslot.update', $slot->id) }}"
                enctype="multipart/form-data">
                @csrf
                <div class="card-body">
                    <div class="mb-3">
                        <label for="slot" class="form-label">Time Slot
                            <span class="text text-danger">*</span>
                        </label>
                        <input type="time" name="slot" value="{{ $slot->slot }}" class="form-control" id="slot"
                            style="font-size:14px;color: #95949E;" required>
                    </div>
                </div>
                <div class="card-body">
                    <button type="submit" class="btn btn-primary">
                        Update
                    </button>
                    <a href="{{ route('admin.timeslot') }}" class="
                    btn btn-primary">Back</a>
                </div>
            </form>
        </div>
    </div>
@endsection
