@extends('admin.layout.master')
@section('container')
    <div class="page-wrapper">
        <div class="page-breadcrumb">
            <div class="row">
                <div class="col-12 d-flex no-block align-items-center">
                    <h4 class="page-title">Edit Rom Chapter Leader</h4>
                    <div class="ms-auto text-end">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{ route('admin.chapterleader') }}">Chapter Leaders</a>
                                </li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
        <div class="card" style="margin: 10px;">
            <form class="form-horizontal" method="post" action="{{ route('admin.chapterleader.update', $chapleader->id) }}"
                enctype="multipart/form-data">
                @csrf
                <div class="card-body">
                    <div class="mb-3">
                        <label for="name" class="form-label"> Leader Name
                            <span class="text text-danger">*</span>
                        </label>
                        <input type="text" name="name" value="{{ $chapleader->name }}" placeholder="Enter Name"
                            class="form-control" id="name" style="font-size:14px;color: #95949E;" required>
                    </div>


                    <div class="mb-3">
                        <label for="designation" class="form-label"> Designation
                            <span class="text text-danger">*</span>
                        </label>
                        <input type="text" name="designation" value="{{ $chapleader->designation }}"
                            placeholder="Enter Designation" class="form-control" id="designation"
                            style="font-size:14px;color: #95949E;" required>
                    </div>
                    <div class="mb-3">
                        <label for="phone" class="form-label"> Contact No.
                            <span class="text text-danger">*</span>
                        </label>
                        <input type="text" name="phone" value="{{ $chapleader->phone }}"
                            placeholder="Enter Contact Number" class="form-control" id="phone"
                            style="font-size:14px;color: #95949E;" required>
                    </div>

                    <div class="mb-3">
                        <label for="image" class="form-label"> Photo
                            <span class="text text-danger">*</span></label>
                        <div class="row">
                            <div class="col-1">
                                <img height="80" width="80" style=" margin-left:10px; border-radius:5px;"
                                    src="/roaster/{{ $chapleader->image }}" alt="">
                            </div>
                            <div class="col-11">
                                <input type="file" name="image" id="image" value="" class="form-control"
                                    style="font-size:14px;color:#95949E;">
                            </div>
                        </div>
                    </div>

                    <div class="mb-3">
                        <label for="chap_id" class="form-label">Chapter
                            <span class="text text-danger">*</span>
                        </label>
                        <select name="chap_id" id="chap_id" class="form-control" required>
                            <option value="">Select Chapter</option>
                            @foreach ($chapter as $cap)
                                <option value="{{ $cap->id }}"
                                    {{ $chapleader->chap_id == $cap->id ? 'selected' : '' }}>{{ $cap->name }}
                                </option>
                            @endforeach
                        </select>
                    </div>

                    {{--  <div class="mb-3">
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
                    </div>  --}}


                </div>
                <div class="card-body">
                    <button type="submit" class="btn btn-primary">
                        Submit
                    </button>
                    <a href="{{ route('admin.chapterleader') }}" class="
                    btn btn-primary">Back</a>
                </div>

                {{--  <div class="card-body">
                    <button type="submit" class="btn btn-primary">
                        Update
                    </button>
                    <a href="{{ route('admin.designation') }}" class="
                    btn btn-primary">Back</a>
                </div>  --}}
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
