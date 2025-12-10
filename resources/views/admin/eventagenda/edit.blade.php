@extends('admin.layout.master')
@section('container')
    <div class="page-wrapper">
        <div class="page-breadcrumb">
            <div class="row">
                <div class="col-12 d-flex no-block align-items-center">
                    <h4 class="page-title">Edit Event Agenda</h4>
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
            <form class="form-horizontal" method="post" action="{{ route('admin.eventagenda.update', $eve_agd) }}"
                enctype="multipart/form-data">
                @csrf
                <div class="card-body">
                    <div class="mb-3">
                        <label for="name" class="form-label"> Name
                            <span class="text text-danger">*</span>
                        </label>
                        <input type="text" name="name" placeholder="Enter Name" value="{{ $eve_agd->name }}"
                            class="form-control" id="name" style="font-size:14px;color: #95949E;" required>
                    </div>

                    <div class="mb-3">
                        <label for="date" class="form-label"> Date
                            <span class="text text-danger">*</span>
                        </label>
                        <input type="date" name="date" placeholder="Enter date" class="form-control" id="date"
                            value="{{ $eve_agd->date }}" style="font-size:14px;color: #95949E;" required>
                    </div>


                    <div class="mb-3">
                        <label for="start_time" class="form-label"> Start Time
                            <span class="text text-danger">*</span>
                        </label>
                        <input type="time" name="start_time" placeholder="Enter start time"
                            value="{{ $eve_agd->start_time }}"class="form-control" id="start_time"
                            style="font-size:14px;color: #95949E;" required>
                    </div>


                    <div class="mb-3">
                        <label for="end_time" class="form-label"> End Time
                            <span class="text text-danger">*</span>
                        </label>
                        <input type="time" name="end_time" placeholder="Enter End time" value="{{ $eve_agd->end_time }}"
                            class="form-control" id="end_time" style="font-size:14px;color: #95949E;" required>
                    </div>

                    {{--  <div class="mb-3">
                        <label for="attendance" class="form-label"> Apply for Attendance
                            <span class="text text-danger">*</span>
                        </label>
                        <>
                            <input type="checkbox" name="attendance" id="attendance" value="1" class="form-control"
                                style="font-size:14px;color: #95949E;" {{ $eve_agd->attendance == 1 ? 'checked' : '' }}>
                    </div>  --}}
                    <div class="mb-3">
                        <label for="attendance" class="form-label">
                            Apply for Attendance
                        </label>
                        <input type="hidden" name="attendance" value="0">
                        <input type="checkbox" name="attendance" id="attendance" value="1" class="form-check-input"
                            style="width: 25px; height: 25px;border-radius:5px;font-size:14px; color: #95949E;margin-left:8px !important;margin-top:6px !important;"
                            {{ $eve_agd->attendance == 1 ? 'checked' : '' }}>
                    </div>
                    <div class="mb-3">
                        <label for="staff_id" class="form-label">Staff
                            <span class="text text-danger">*</span>
                        </label>
                        <select name="staff_id" id="staff_id" class="form-control">
                            @foreach ($staff as $cap)
                                <option value="{{ $cap->id }}" {{ $cap->id == $eve_agd->staff_id ? 'selected' : '' }}>
                                    {{ $cap->name }}
                                </option>
                            @endforeach
                        </select>
                    </div>


                    <div class="mb-3">
                        <label for="status" class="form-label">Status<span class="text text-danger">*
                            </span>
                        </label>
                        <select name="status" id="status" class="form-control" required>
                            <option {{ $eve_agd->status == 1 ? 'selected' : '' }} value="1">Active
                            </option>
                            <option {{ $eve_agd->status == 0 ? 'selected' : '' }} value="0">Deactive
                            </option>
                        </select>
                    </div>
                </div>
                <div class="card-body">
                    <button type="submit" class="btn btn-primary">
                        Update
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
