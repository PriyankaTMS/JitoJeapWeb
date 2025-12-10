@extends('admin.layout.master')
@section('container')
    <div class="page-wrapper">
        <div class="page-breadcrumb">
            <div class="row">
                <div class="col-12 d-flex no-block align-items-center">
                    <h4 class="page-title">Add Chapter</h4>
                    <div class="ms-auto text-end">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{ route('admin.chapter') }}">Chapter</a></li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
        <div class="card" style="margin: 10px;">
            <form class="form-horizontal" method="post" action="{{ route('admin.chapter.store') }}"
                enctype="multipart/form-data">
                @csrf
                <div class="card-body">
                    <div class="mb-3">
                        <label for="name" class="form-label"> Select Zone
                            <span class="text text-danger">*</span>
                        </label>
                        <select name="zone" id="zone" class="form-control" required>
                            <option value="">Select Zone</option>

                            @foreach ($zones as $zone)
                                <option value="{{ $zone->id }}">

                                    {{ $zone->name }}
                                </option>
                            @endforeach
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="name" class="form-label"> Name
                            <span class="text text-danger">*</span>
                        </label>
                        <input type="text" name="name" placeholder="Enter Name" class="form-control" id="name"
                            style="font-size:14px;color: #95949E;" required>
                    </div>

                    <div class="mb-3">
                        <label for="name" class="form-label"> City
                            <span class="text text-danger">*</span>
                        </label>
                        <input type="text" name="city" placeholder="Enter city" class="form-control" id="city"
                            style="font-size:14px;color: #95949E;" required>
                    </div>
                    {{--  <div class="mb-3">
                        <label for="name" class="form-label"> status
                            <span class="text text-danger">*</span>
                        </label>
                        <input type="text" name="status" placeholder="Enter status" class="form-control" id="status"
                            style="font-size:14px;color: #95949E;" required>
                    </div>  --}}
                    <div class="mb-3">
                        <label for="status" class="form-label">Status
                            <span class="text text-danger">*</span>
                        </label>
                        <select name="status" id="status" class="form-control" required>
                            <option value="">Select Status</option>
                            <option value="active">Active</option>
                            <option value="inactive">Inactive</option>
                        </select>
                    </div>

                    <div class="mb-3">
                        <label for="name" class="form-label"> Logo
                            <span class="text text-danger">*</span>
                        </label>
                        <input type="file" name="logo" placeholder="Add Logo" class="form-control" id="logo"
                            style="font-size:14px;color: #95949E;" required>
                    </div>
                </div>
                <div class="mb-3">
                    <label for="members" class="form-label"> Members
                        <span class="text text-danger">*</span>
                    </label>
                    <input type="text" name="members" placeholder="Enter Members" class="form-control" id="members"
                        style="font-size:14px;color: #95949E;" required>
                </div>
                <div class="mb-3">
                    <label for="com_evt" class="form-label"> Completed Events
                        <span class="text text-danger">*</span>
                    </label>
                    <input type="text" name="com_evt" placeholder="Enter Completed Events" class="form-control"
                        id="com_evt" style="font-size:14px;color: #95949E;" required>
                </div>
                <div class="mb-3">
                    <label for="up_evt" class="form-label"> Upcoming Events
                        <span class="text text-danger">*</span>
                    </label>
                    <input type="text" name="up_evt" placeholder="Enter upcoming events" class="form-control"
                        id="up_evt" class="form-control" id="up_evt" style="font-size:14px;color: #95949E;" required>
                </div>
                <div class="mb-3">
                    <label for="rank" class="form-label"> Rom Rank
                        <span class="text text-danger">*</span>
                    </label>
                    <input type="text" name="rank" placeholder="Enter Rom Rank" class="form-control"
                        id="rank" style="font-size:14px;color: #95949E;" required>
                </div>



                <div class="card-body">
                    <button type="submit" class="btn btn-primary">
                        Submit
                    </button>
                    <a href="{{ route('admin.chapter') }}" class="
                    btn btn-primary">Back</a>
                </div>
            </form>
        </div>
    </div>

    </div>
@endsection
