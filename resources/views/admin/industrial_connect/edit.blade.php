@extends('admin.layout.master')
@section('container')
    <div class="page-wrapper">
        <div class="page-breadcrumb">
            <div class="row">
                <div class="col-12 d-flex no-block align-items-center">
                    <h4 class="page-title">Edit Industrial Connect</h4>
                    <div class="ms-auto text-end">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{ route('admin.industrial_connect') }}"> Industrial
                                        Connect</a></li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
        <div class="card">
            <form class="form-horizontal" method="post"
                action="{{ route('admin.industrial_connect.update', $ind_con->id) }}" enctype="multipart/form-data">
                @csrf
                <div class="card-body">

                    <div class="mb-3">
                        <label for="name" class="form-label"> Name
                            <span class="text text-danger">*</span>
                        </label>
                        <input type="text" name="name" placeholder="Enter Name" value="{{ $ind_con->name }}"
                            class="form-control" id="name" style="font-size:14px;color: #95949E;" required>
                    </div>
                    <div class="mb-3">
                        <label for="logo" class="form-label">Logo
                            <span class="text text-danger">*</span></label>
                        <div class="row">
                            <div class="col-2">
                                <img height="60" width="60" style=" margin-left:10px; border-radius:5px;"
                                    src="/admin/assets/images/industryLogo/{{ $ind_con->logo }}" alt="">
                            </div>
                            <div class="col-10">
                                <input type="file" name="logo" id="logo" value="" class="form-control"
                                    style="font-size:14px;color:#95949E;">
                            </div>
                        </div>
                    </div>

                    <div class="mb-3">
                        <label for="con_per_name" class="form-label"> Contact Person Name
                            <span class="text text-danger">*</span>
                        </label>
                        <input type="text" name="con_per_name" placeholder="Enter Contact Person Name"
                            class="form-control" value="{{ $ind_con->con_per_name }}" id="con_per_name"
                            style="font-size:14px;color: #95949E;" required>
                    </div>

                    <div class="mb-3">
                        <label for="designation" class="form-label">Designation
                            <span class="text text-danger">*</span>
                        </label>
                        <input type="text" name="designation" placeholder="Enter Designation" class="form-control"
                            value="{{ $ind_con->designation }}" id="designation" style="font-size:14px;color: #95949E;"
                            required>
                    </div>

                    <div class="mb-3">
                        <label for="seats" class="form-label"> Seats
                            <span class="text text-danger">*</span>
                        </label>
                        <input type="number" name="seats" placeholder="Enter Number Of Seats" class="form-control"
                            value="{{ $ind_con->seats }}" id="seats" style="font-size:14px;color: #95949E;" required>
                    </div>

                    <div class="mb-3">
                        <label for="desc" class="form-label">Description</label>
                        <textarea name="desc" id="summernote" cols="30" rows="10"> {{ $ind_con->desc }}</textarea>
                    </div>
                    <div class="mb-3">
                        <label for="status" class="form-label">Status<span class="text text-danger">*
                            </span>
                        </label>
                        <select name="status" id="status" class="form-control" required>
                            <option {{ $ind_con->status == 1 ? 'selected' : '' }} value="1">Active
                            </option>
                            <option {{ $ind_con->status == 0 ? 'selected' : '' }} value="0">Deactive
                            </option>
                        </select>
                    </div>
                </div>

                <div class="card-body">
                    <button type="submit" class="btn btn-primary">
                        Update
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
