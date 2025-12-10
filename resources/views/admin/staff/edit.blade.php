@extends('admin.layout.master')
@section('container')
    <div class="page-wrapper">
        <div class="page-breadcrumb">
            <div class="row">
                <div class="col-12 d-flex no-block align-items-center">
                    <h4 class="page-title">Edit Staff</h4>
                    <div class="ms-auto text-end">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{ route('admin.staff') }}">Staff</a></li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
        <div class="card">
            <form class="form-horizontal" method="post" action="{{ route('admin.staff.update', $staff->id) }}"
                enctype="multipart/form-data">
                @csrf
                <div class="card-body">
                    <div class="mb-3">
                        <label for="name" class="form-label"> Name
                            <span class="text text-danger">*</span>
                        </label>
                        <input type="text" name="name" placeholder="Enter Staff Name" value="{{ $staff->name }}"
                            class="form-control" id="name" style="font-size:14px;color: #95949E;" required>
                    </div>

                    <div class="mb-3">
                        <label for="email" class="form-label">Email ID
                            <span class="text text-danger">*</span>
                        </label>
                        <input type="email" name="email" placeholder="Enter Email" value="{{ $staff->email }}"
                            class="form-control" id="email" style="font-size:14px;color:#95949E;" required>
                    </div>
                    <div class="mb-3">
                        <label for="password" class="form-label">Password
                            <span class="text text-danger">*</span>
                        </label>
                        <input type="password" name="password" placeholder="Enter New Password" class="form-control"
                            style="font-size:14px;color:#95949E;">
                        <small class="form-text text-muted">Leave this blank if you dont want to change the
                            password.</small>
                    </div>

                    <div class="mb-3">
                        <label for="mobile" class="form-label">Mobile No
                            <span class="text text-danger">*</span>
                        </label>
                        <input type="text" name="mobile" placeholder="+91" value="{{ $staff->mobile }}"
                            class="form-control" id="mobile" pattern="[0-9]*" style="font-size:14px;color:#95949E;"
                            required>
                    </div>

                    <div class="mb-3">
                        <label for="status" class="form-label">Status<span class="text text-danger">*
                            </span>
                        </label>
                        <select name="status" id="status" class="form-control" required>
                            <option {{ $staff->status == 1 ? 'selected' : '' }} value="1">Active
                            </option>
                            <option {{ $staff->status == 0 ? 'selected' : '' }} value="0">Deactive
                            </option>
                        </select>
                    </div>
                </div>
                <div class="card-body">
                    <button type="submit" class="btn btn-primary">
                        Update
                    </button>
                    <a href="{{ route('admin.staff') }}" class="
                    btn btn-primary">Back</a>
                </div>
        </div>
        </form>
    </div>
    </div>
@endsection
