@extends('admin.layout.master')
@section('container')
    <div class="page-wrapper">
        <div class="page-breadcrumb">
            <div class="row">
                <div class="col-12 d-flex no-block align-items-center">
                    <h4 class="page-title">Add Event Agenda</h4>
                    <div class="ms-auto text-end">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{ route('admin.eventagenda') }}">Event Agenda</a></li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
        <div class="card">
            <form class="form-horizontal" method="post" action="{{ route('admin.eventagenda.store') }}"
                enctype="multipart/form-data">
                @csrf
                <div class="card-body">
                    <div class="mb-3">
                        <label for="name" class="form-label"> Name
                            <span class="text text-danger">*</span>
                        </label>
                        <input type="text" name="name" placeholder="Enter Name" class="form-control" id="name"
                            style="font-size:14px;color: #95949E;" required>
                    </div>

                    <div class="mb-3">
                        <label for="date" class="form-label"> Date
                            <span class="text text-danger">*</span>
                        </label>
                        <input type="date" name="date" placeholder="Enter date" class="form-control" id="date"
                            style="font-size:14px;color: #95949E;" required>
                    </div>

                    <div class="mb-3">
                        <label for="start_time" class="form-label"> Start Time
                            <span class="text text-danger">*</span>
                        </label>
                        <input type="time" name="start_time" placeholder="Enter start time" class="form-control"
                            id="start_time" style="font-size:14px;color: #95949E;" required>
                    </div>

                    <div class="mb-3">
                        <label for="end_time" class="form-label"> End Time
                            <span class="text text-danger">*</span>
                        </label>
                        <input type="time" name="end_time" placeholder="Enter End time" class="form-control"
                            id="end_time" style="font-size:14px;" required>
                    </div>
                    <div class="mb-3">
                        <label for="staff_id" class="form-label">Staff
                            <span class="text text-danger">*</span>
                        </label>
                        <select name="staff_id" class="form-control" required>
                            <option value="">Select Staff</option>
                            @foreach ($staff as $listc)
                                <option value="{{ $listc->id }}">{{ $listc->name }}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="mb-3">
                        <label for="attendance" class="form-label">
                            Apply for Attendance
                        </label>
                        <input type="hidden" name="attendance" value="0">
                        <input type="checkbox" name="attendance" id="attendance" value="1"
                            style="width: 25px; height: 25px;color:blue; margin-left:8px !important;margin-top:6px !important;">
                    </div>

                    <div class="mb-3">
                        <label for="status" class="form-label">Status<span class="text text-danger">*
                            </span>
                        </label>
                        <select name="status" id="status" class="form-control" style="font-size:14px;color: #95949E;"
                            required>
                            <option>Select Option </option>
                            <option value="1">Active</option>
                            <option value="0">Deactive</option>
                        </select>
                    </div>
                </div>

                <div class="card-body">
                    <button type="submit" class="btn btn-primary">
                        Submit
                    </button>
                    <a href="{{ route('admin.eventagenda') }}" class="
                    btn btn-primary">Back</a>
                </div>
            </form>
        </div>
    </div>

    </div>
    <script>
        const today = new Date().toISOString().split('T')[0];
        document.getElementById("date").setAttribute("min", today);
    </script>
@endsection
