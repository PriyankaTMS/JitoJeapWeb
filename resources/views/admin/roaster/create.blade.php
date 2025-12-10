@extends('admin.layout.master')
@section('container')
    <div class="page-wrapper">
        <div class="page-breadcrumb">
            <div class="row">
                <div class="col-12 d-flex no-block align-items-center">
                    <h4 class="page-title">Add Roaster</h4>
                    <div class="ms-auto text-end">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{ route('admin.roaster') }}">Roaster</a></li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
        <div class="card " style="margin:10px;">
            <form class="form-horizontal" method="post" action="{{ route('admin.roaster.store') }}"
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
                        <label for="image" class="form-label">Photo
                            <span class="text text-danger">*</span></label>
                        <input type="file" name="image" class="form-control" id="image"
                            style="font-size:14px;color:#95949E;" required>
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Email ID
                            <span class="text text-danger">*</span>
                        </label>
                        <input type="email" name="email" placeholder="Enter Email" class="form-control" id="email"
                            style="font-size:14px;color:#95949E;" required>
                    </div>
                    {{--  <div class="mb-3">
                        <label for="email" class="form-label">Password
                            <span class="text text-danger">*</span>
                        </label>
                        <input type="password" name="password" placeholder="Enter Password" class="form-control"
                            id="password" style="font-size:14px;color:#95949E;" required>
                    </div>  --}}
                    <div class="mb-3">
                        <label for="mobile" class="form-label">Contact
                            <span class="text text-danger">*</span>
                        </label>
                        <input type="text" name="mobile" placeholder="+91" class="form-control" id="mobile"
                            pattern="[0-9]*" style="font-size:14px;color:#95949E;" required>
                    </div>

                    <div class="mb-3">
                        <label for="dob" class="form-label">Date of Birth
                            <span class="text text-danger">*</span>
                        </label>
                        {{--  <input type="date" name="dob" placeholder="Enter Date of Birth" class="form-control"
                            id="dob" style="font-size:14px;color:#95949E;" required>  --}}
                        <input type="date" name="dob" placeholder="Enter Date of Birth" class="form-control"
                            id="dob" style="font-size:14px;color:#95949E;" required
                            max="{{ \Carbon\Carbon::now()->subDay()->toDateString() }}">

                    </div>


                    <div class="mb-3">
                        <label for="cat_id" class="form-label">Business Category
                            <span class="text text-danger">*</span>
                        </label>
                        <select name="cat_id" class="form-control" required>
                            <option value="">Select Business Category </option>
                            @foreach ($category as $list)
                                <option value="{{ $list->id }}">{{ $list->name }}</option>
                            @endforeach
                        </select>
                    </div>
                    {{--  <div class="mb-3">
                        <label for="zone_id" class="form-label">Zone
                            <span class="text text-danger">*</span>
                        </label>
                        <select name="zone_id" id="zone_id" class="form-control" required>
                            <option value="">Select Chapter</option>
                            @foreach ($zone as $cap)
                                <option value="{{ $cap->id }}">{{ $cap->name }}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="mb-3">
                        <label for="cap_id" class="form-label">Chapter
                            <span class="text text-danger">*</span>
                        </label>
                        <select name="cap_id" id="cap_id" class="form-control" required>
                            <option value="">Select Chapter</option>
                            @foreach ($chapter as $cap)
                                <option value="{{ $cap->id }}">{{ $cap->name }}</option>
                            @endforeach
                        </select>
                    </div>  --}}

                    <div class="mb-3">
                        <label for="zone_id" class="form-label">Zone
                            <span class="text text-danger">*</span>
                        </label>
                        <select name="zone_id" id="zone_id" class="form-control" required>
                            <option value="">Select Zone</option>
                            @foreach ($zone as $cap)
                                <option value="{{ $cap->id }}">{{ $cap->name }}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="mb-3">
                        <label for="cap_id" class="form-label">Chapter
                            <span class="text text-danger">*</span>
                        </label>
                        <select name="cap_id" id="cap_id" class="form-control" required>
                            <option value="">Select Chapter</option>
                            @foreach ($chapter as $cap)
                                <option value="{{ $cap->id }}" data-zone-id="{{ $cap->zone_id }}">{{ $cap->name }}
                                </option>
                            @endforeach
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="mem_id" class="form-label">Membership Type
                            <span class="text text-danger">*</span>
                        </label>
                        <select name="mem_id" id="mem_id" class="form-control" required>
                            <option value="">Select Membership Type</option>
                            @foreach ($member as $cap)
                                <option value="{{ $cap->id }}">{{ $cap->name }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="company" class="form-label">Company
                            <span class="text text-danger">*</span>
                        </label>
                        <input type="text" name="company" placeholder="Enter company " class="form-control"
                            id="company" style="font-size:14px;color:#95949E;" required>
                    </div>
                    <div class="mb-3">
                        <label for="usp" class="form-label">USP
                            <span class="text text-danger">*</span>
                        </label>
                        <input type="text" name="usp" placeholder="Enter USP " class="form-control"
                            id="usp" style="font-size:14px;color:#95949E;" required>
                    </div>
                    <div class="mb-3">
                        <label for="link" class="form-label">Website Link
                            <span class="text text-danger">*</span>
                        </label>
                        <input type="text" name="link" class="form-control" id="link"
                            placeholder="Enter Link" style="font-size:14px;color:#95949E;" required>
                    </div>
                    {{-- <div class="mb-3">
                        <label for="chap_des" class="form-label"> Designation
                        </label>
                        <input type="text" name="chap_des" placeholder="Enter  Designation " class="form-control"
                            id="chap_des" style="font-size:14px;color:#95949E;">
                    </div> --}}
                    <div class="mb-3">
                        <label for="chap_des" class="form-label">Designation</label>
                        <span class="text text-danger">*</span>
                        <select name="designation_id" id="designation_id" class="form-control"
                            style="font-size:14px; color:#95949E;" required>
                            <option value="">-- Select Designation --</option>
                            @foreach ($designations as $designation)
                                <option value="{{ $designation->id }}">{{ $designation->name }}</option>
                            @endforeach
                        </select>
                    </div>


                    <div class="mb-3">
                        <label for="com_brief" class="form-label">Company Brief<span
                                class="text text-danger">*</span></label>
                        <textarea name="com_brief" id="summernote2" cols="30" rows="10"></textarea>

                    </div>

                </div>

                <div class="card-body">
                    <button type="submit" class="btn btn-primary">
                        Submit
                    </button>
                    <a href="{{ route('admin.roaster') }}" class="
                    btn btn-primary">Back</a>
                </div>
            </form>
        </div>


        <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
        <script>
            $(document).ready(function() {
                $('#summernote').summernote({
                    height: 200,
                    focus: true
                });
            });
            $(document).ready(function() {
                $('#summernote2').summernote({
                    height: 200,
                    focus: true
                });
            });
        </script>
        <script>
            document.addEventListener("DOMContentLoaded", function() {
                let zoneDropdown = document.getElementById("zone_id");
                let chapterDropdown = document.getElementById("cap_id");
                let chapterOptions = Array.from(chapterDropdown.querySelectorAll(
                    "option[data-zone-id]")); // Store chapter options only

                zoneDropdown.addEventListener("change", function() {
                    let selectedZone = this.value;

                    // Clear chapter dropdown and add a single "Select Chapter" option
                    chapterDropdown.innerHTML = '<option value="">Select Chapter</option>';

                    // Filter and add only matching chapters
                    chapterOptions.forEach(option => {
                        if (option.getAttribute("data-zone-id") === selectedZone) {
                            chapterDropdown.appendChild(option.cloneNode(true));
                        }
                    });
                });
            });
        </script>
    @endsection
