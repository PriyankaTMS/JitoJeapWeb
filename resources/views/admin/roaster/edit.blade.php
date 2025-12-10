@extends('admin.layout.master')
@section('container')
    <div class="page-wrapper">
        <div class="page-breadcrumb">
            <div class="row">
                <div class="col-12 d-flex no-block align-items-center">
                    <h4 class="page-title">Edit Roaster</h4>
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
        <div class="card" style="margin:10px;">
            <form class="form-horizontal" method="post" action="{{ route('admin.roaster.update', $roaster->id) }}"
                enctype="multipart/form-data">
                @csrf
                <div class="card-body">
                    <div class="mb-3">
                        <label for="name" class="form-label"> Name
                            <span class="text text-danger">*</span>
                        </label>
                        <input type="text" name="name" placeholder="Enter Name" class="form-control"
                            value="{{ $roaster->name }}" style="font-size:14px;color: #95949E;" required>
                    </div>
                    {{--  <div class="mb-3">
                        <label for="image" class="form-label">Image
                            <span class="text text-danger">*</span></label>
                        <input type="file" name="image" class="form-control" id="image"
                            style="font-size:14px;color:#95949E;" required>
                    </div>  --}}

                    <div class="mb-3">
                        <label for="image" class="form-label"> Photo
                            <span class="text text-danger">*</span></label>
                        <div class="row">
                            <div class="col-1">
                                <img height="80" width="80" style=" margin-left:10px; border-radius:5px;"
                                    src="/roaster/{{ $roaster->image }}" alt="">
                            </div>
                            <div class="col-11">
                                <input type="file" name="image" id="image" value="" class="form-control"
                                    style="font-size:14px;color:#95949E;">
                            </div>
                        </div>
                    </div>

                    <div class="mb-3">
                        <label for="email" class="form-label">Email ID
                            <span class="text text-danger">*</span>
                        </label>
                        <input type="email" name="email" placeholder="Enter Email" class="form-control"
                            value="{{ $roaster->email }}" style="font-size:14px;color:#95949E;" required>
                    </div>
                    {{--  <div class="mb-3">
                        <label for="password" class="form-label">Password
                            <span class="text text-danger">*</span>
                        </label>
                        <input type="password" name="password" placeholder="Enter Password" class="form-control"
                            value="{{ $roaster->password }}" style="font-size:14px;color:#95949E;" required>
                    </div>  --}}
                    <div class="mb-3">
                        <label for="password" class="form-label">Password
                            <span class="text text-danger">*</span>
                        </label>
                        <input type="password" name="password" placeholder="Enter New Password" class="form-control"
                            style="font-size:14px;color:#95949E;">
                        <small class="form-text text-muted">Leave this blank if you dont want to change the
                            password.</small>
                    </div>

                    {{--  <div class="mb-3">
                        <label for="addr" class="form-label">Address
                            <span class="text text-danger">*</span>
                        </label>
                        <textarea name="addr" id="addr" cols="30" rows="3" class="form-control">{{ $roaster->addr }}</textarea>

                    </div>  --}}
                    {{--  <div class="mb-3">
                        <label for="mobile" class="form-label">Contact
                            <span class="text text-danger">*</span>
                        </label>
                        <input type="text" name="mobile" placeholder="+91" class="form-control"
                            value="{{ $roaster->mobile }}" pattern="[0-9]*" style="font-size:14px;color:#95949E;" required>
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
                                <option value="{{ $cap->id }}" data-zone-id="{{ $cap->zone_id }}">
                                    {{ $cap->name }}
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
                        <label for="link" class="form-label">Website Link
                            <span class="text text-danger">*</span>
                        </label>
                        <input type="text" name="link" value="{{ $roaster->link }}" class="form-control"
                            id="link" placeholder="Enter Link" style="font-size:14px;color:#95949E;" required>
                    </div>  --}}
                    <div class="mb-3">
                        <label for="mobile" class="form-label">Contact
                            <span class="text text-danger">*</span>
                        </label>
                        <input type="text" name="mobile" placeholder="+91" class="form-control"
                            value="{{ $roaster->mobile }}" pattern="[0-9]*" style="font-size:14px;color:#95949E;" required>
                    </div>

                    <div class="mb-3">
                        <label for="dob" class="form-label">Date of Birth
                            <span class="text text-danger">*</span>
                        </label>
                        {{--  <input type="date" name="dob" placeholder="Enter Date of Birth" class="form-control"
                            id="dob" style="font-size:14px;color:#95949E;" required>  --}}
                        <input type="date" name="dob" placeholder="Enter Date of Birth" value="{{ $roaster->dob }}"
                            class="form-control" id="dob" style="font-size:14px;color:#95949E;" required
                            max="{{ \Carbon\Carbon::now()->subDay()->toDateString() }}">

                    </div>

                    <div class="mb-3">
                        <label for="cat_id" class="form-label">Business Category
                            <span class="text text-danger">*</span>
                        </label>
                        <select name="cat_id" class="form-control" required>
                            <option value="">Select Business Category</option>
                            @foreach ($category as $list)
                                <option value="{{ $list->id }}" {{ $roaster->cat_id == $list->id ? 'selected' : '' }}>
                                    {{ $list->name }}
                                </option>
                            @endforeach
                        </select>
                    </div>

                    <div class="mb-3">
                        <label for="zone_id" class="form-label">Zone
                            <span class="text text-danger">*</span>
                        </label>
                        <select name="zone_id" id="zone_id" class="form-control" required>
                            <option value="">Select Zone</option>
                            @foreach ($zone as $cap)
                                <option value="{{ $cap->id }}"
                                    {{ $roaster->zone_id == $cap->id ? 'selected' : '' }}>
                                    {{ $cap->name }}
                                </option>
                            @endforeach
                        </select>
                    </div>

                    {{--  <div class="mb-3">
                        <label for="cap_id" class="form-label">Chapter
                            <span class="text text-danger">*</span>
                        </label>
                        <select name="cap_id" id="cap_id" class="form-control" required>
                            <option value="">Select Chapter</option>
                            @foreach ($chapter as $cap)
                                <option value="{{ $cap->id }}" data-zone-id="{{ $cap->zone_id }}"
                                    {{ $roaster->cap_id == $cap->id ? 'selected' : '' }}>
                                    {{ $cap->name }}
                                </option>
                            @endforeach
                        </select>
                    </div>  --}}
                    <div class="mb-3">
                        <label for="cap_id" class="form-label">Chapter
                            <span class="text text-danger">*</span>
                        </label>
                        <select name="cap_id" id="cap_id" class="form-control"
                            data-selected="{{ $roaster->cap_id }}" required>
                            <option value="">Select Chapter</option>
                            @foreach ($chapter as $cap)
                                <option value="{{ $cap->id }}" data-zone-id="{{ $cap->zone_id }}"
                                    {{ $roaster->cap_id == $cap->id ? 'selected' : '' }}>
                                    {{ $cap->name }}
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
                                <option value="{{ $cap->id }}" {{ $roaster->mem_id == $cap->id ? 'selected' : '' }}>
                                    {{ $cap->name }}
                                </option>
                            @endforeach
                        </select>
                    </div>

                    <div class="mb-3">
                        <label for="link" class="form-label">Website Link
                            <span class="text text-danger">*</span>
                        </label>
                        <input type="text" name="link" value="{{ $roaster->link }}" class="form-control"
                            id="link" placeholder="Enter Link" style="font-size:14px;color:#95949E;" required>
                    </div>

                    <div class="mb-3">
                        <label for="company" class="form-label">Company
                            <span class="text text-danger">*</span>
                        </label>
                        <input type="text" name="company" placeholder="Enter company "
                            value="{{ $roaster->company }}" class="form-control" id="company"
                            style="font-size:14px;color:#95949E;" required>
                    </div>
                    <div class="mb-3">
                        <label for="usp" class="form-label">USP
                            <span class="text text-danger">*</span>
                        </label>
                        <input type="text" name="usp" placeholder="Enter USP " value="{{ $roaster->usp }}"
                            class="form-control" id="usp" style="font-size:14px;color:#95949E;" required>
                    </div>
                    {{-- <div class="mb-3">
                        <label for="chap_des" class="form-label"> Designation
                        </label>
                        <input type="text" name="chap_des" placeholder="Enter  Designation "
                            value="{{ $roaster->chap_des }}"class="form-control" id="chap_des"
                            style="font-size:14px;color:#95949E;">
                    </div> --}}

                    {{-- <div class="mb-3">
                        <label for="chap_des" class="form-label">Designation</label>
                        <select name="chap_des" id="chap_des" class="form-control" style="font-size:14px; color:#95949E;" required>
                            <option value="">-- Select Designation --</option>
                            @foreach ($designations as $designation)
                                <option value="{{ $designation->id }}">{{ $designation->name }}</option>
                            @endforeach
                        </select>
                    </div> --}}
                    <div class="mb-3">
                        <label for="designation_id" class="form-label">Designation
                            <span class="text text-danger">*</span>
                        </label>
                        <select name="designation_id" id="designation_id" class="form-control" required>
                            <option value="">Select Designation</option>
                            @foreach ($designations as $item)
                                <option value="{{ $item->id }}"
                                    {{ $roaster->designation_id == $item->id ? 'selected' : '' }}>
                                    {{ $item->name }}
                                </option>
                            @endforeach
                        </select>
                    </div>


                    <div class="mb-3">
                        <label for="com_brief" class="form-label">Company Brief<span
                                class="text text-danger">*</span></label>
                        <textarea name="com_brief" id="summernote2" cols="30" rows="10">{{ $roaster->com_brief }}</textarea>

                    </div>
                    {{--  <div class="mb-3">
                        <label for="link" class="form-label">Link
                            <span class="text text-danger">*</span>
                        </label>
                        <input type="text" name="link" class="form-control" value="{{ $roaster->link }}"
                            placeholder="Enter Link" style="font-size:14px;color:#95949E;" required>
                    </div>

                    <div class="mb-3">
                        <label for="company" class="form-label">Company
                            <span class="text text-danger">*</span>
                        </label>
                        <input type="text" name="company" placeholder="Enter company " class="form-control"
                            value="{{ $roaster->company }}" style="font-size:14px;color:#95949E;" required>
                    </div>
                    <div class="mb-3">
                        <label for="pt_id" class="form-label">Power Team
                            <span class="text text-danger">*</span>
                        </label>
                        <select name="pt_id" id="pt_id" class="form-control">
                            @foreach ($powteam as $list)
                                <option value="{{ $list->id }}" {{ $list->id == $roaster->pt_id ? 'selected' : '' }}>
                                    {{ $list->name }}
                                </option>
                            @endforeach
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="cat_id" class="form-label">Category
                            <span class="text text-danger">*</span>
                        </label>
                        <select name="cat_id" id="cat_id" class="form-control">
                            @foreach ($category as $cat)
                                <option value="{{ $cat->id }}" {{ $cat->id == $roaster->cat_id ? 'selected' : '' }}>
                                    {{ $cat->name }}
                                </option>
                            @endforeach
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="cap_id" class="form-label">Chapter
                            <span class="text text-danger">*</span>
                        </label>
                        <select name="cap_id" id="cap_id" class="form-control">
                            @foreach ($chapter as $cap)
                                <option value="{{ $cap->id }}" {{ $cap->id == $roaster->cap_id ? 'selected' : '' }}>
                                    {{ $cap->name }}
                                </option>
                            @endforeach
                        </select>
                    </div>

                    <div class="mb-3">
                        <label for="chap_des" class="form-label">Chapter Designation
                            <span class="text text-danger">*</span>
                        </label>
                        <input type="text" name="chap_des" placeholder="Enter Chapter Designation "
                            class="form-control" value="{{ $roaster->chap_des }}" style="font-size:14px;color:#95949E;"
                            required>
                    </div>
                    <div class="mb-3">
                        <label for="usp" class="form-label">Usp<span class="text text-danger">*</span></label>
                        <textarea name="usp" id="summernote" cols="30" rows="10">{{ $roaster->usp }}</textarea>
                    </div>
                    <div class="mb-3">
                        <label for="branches" class="form-label">Branch
                            <span class="text text-danger">*</span>
                        </label>
                        <input type="text" name="branches" placeholder="Enter branch " class="form-control"
                            value="{{ $roaster->branches }}" style="font-size:14px;color:#95949E;" required>
                    </div>
                    <div class="mb-3">
                        <label for="exp" class="form-label">Experience
                            <span class="text text-danger">*</span>
                        </label>
                        <input type="text" name="exp" placeholder="Enter Expertise" class="form-control"
                            value="{{ $roaster->exp }}" style="font-size:14px;color:#95949E;" required>
                    </div>

                    <div class="mb-3">
                        <label for="dream_r" class="form-label">Dream Referral
                            <span class="text text-danger">*</span>
                        </label>
                        <input type="text" name="dream_r" placeholder="Enter Dream Referral " class="form-control"
                            value="{{ $roaster->dream_r }}" style="font-size:14px;color:#95949E;" required>
                    </div>
                    <div class="mb-3">
                        <label for="com_brief" class="form-label">Company Brief<span
                                class="text text-danger">*</span></label>
                        <textarea name="com_brief" id="summernote2" cols="30" rows="10">{{ $roaster->com_brief }}</textarea>

                    </div>  --}}
                </div>

                <div class="card-body">
                    <button type="submit" class="btn btn-primary">
                        Update
                    </button>
                    <a href="{{ route('admin.roaster') }}" class="
                    btn btn-primary">Back</a>
                </div>
        </div>
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
            let selectedChapter = chapterDropdown.getAttribute("data-selected"); // Store selected chapter for edit
            let chapterOptions = Array.from(chapterDropdown.querySelectorAll(
                "option[data-zone-id]")); // Store all chapter options

            function updateChapterDropdown() {
                let selectedZone = zoneDropdown.value;

                // Clear current options and add "Select Chapter"
                chapterDropdown.innerHTML = '<option value="">Select Chapter</option>';

                // Filter and append only matching chapters
                chapterOptions.forEach(option => {
                    if (option.getAttribute("data-zone-id") === selectedZone) {
                        chapterDropdown.appendChild(option.cloneNode(true));
                    }
                });

                // Restore previously selected chapter if it matches the new zone
                if (selectedChapter) {
                    let restoredOption = chapterDropdown.querySelector(`option[value="${selectedChapter}"]`);
                    if (restoredOption) {
                        restoredOption.selected = true;
                    }
                }
            }

            // Initialize the dropdown on page load
            updateChapterDropdown();

            // Update chapters when zone is changed
            zoneDropdown.addEventListener("change", function() {
                selectedChapter = null; // Reset selected chapter when changing zone
                updateChapterDropdown();
            });
        });
    </script>
@endsection
