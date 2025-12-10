@extends('admin.layout.master')
@section('container')
    <div class="page-wrapper">
        <div class="page-breadcrumb">
            <div class="row">
                <div class="col-12 d-flex no-block align-items-center">
                    <h4 class="page-title">Add Industrial Connect</h4>
                    <div class="ms-auto text-end">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{ route('admin.industrial_connect') }}">Industrial
                                        Connect</a></li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
        <div class="card">
            <form class="form-horizontal" method="post" action="{{ route('admin.industrial_connect.store') }}"
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
                        <label for="logo" class="form-label">Logo
                            <span class="text text-danger">*</span></label>
                        <input type="file" name="logo" class="form-control" id="logo"
                            style="font-size:14px;color:#95949E;" required>
                    </div>

                    <div class="mb-3">
                        <label for="con_per_name" class="form-label"> Contact Person Name
                            <span class="text text-danger">*</span>
                        </label>
                        <input type="text" name="con_per_name" placeholder="Enter Contact Person Name"
                            class="form-control" id="con_per_name" style="font-size:14px;color: #95949E;" required>
                    </div>

                    <div class="mb-3">
                        <label for="designation" class="form-label"> Designation
                            <span class="text text-danger">*</span>
                        </label>
                        <input type="text" name="designation" placeholder="Enter Designation" class="form-control"
                            id="designation" style="font-size:14px;color: #95949E;" required>
                    </div>

                    <div class="mb-3">
                        <label for="seats" class="form-label"> Seats
                            <span class="text text-danger">*</span>
                        </label>
                        <input type="number" name="seats" placeholder="Enter Number Of Seats" class="form-control"
                            id="seats" style="font-size:14px;color: #95949E;" required>
                    </div>

                    <div class="mb-3">
                        <label for="desc" class="form-label">Description</label>
                        <textarea name="desc" id="summernote" cols="30" rows="10"></textarea>
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
                    <a href="{{ route('admin.industrial_connect') }}" class="
                    btn btn-primary">Back</a>
                </div>
            </form>
        </div>
    </div>

    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#summernote').summernote({
                height: 200,
                focus: true
            });
        });
    </script>
@endsection
