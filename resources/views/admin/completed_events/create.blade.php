@extends('admin.layout.master')
@section('container')
    <div class="page-wrapper">
        <div class="page-breadcrumb">
            <div class="row">
                <div class="col-12 d-flex no-block align-items-center">
                    <h4 class="page-title">Add Completed Events</h4>
                    <div class="ms-auto text-end">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{ route('admin.completed') }}">Completed Event</a></li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
        <div class="card">
            <form class="form-horizontal" method="post" action="{{ route('admin.completed.store') }}"
                enctype="multipart/form-data">
                @csrf
                <div class="card-body">

                    <div class="mb-3">
                        <label for="title" class="form-label"> Title
                            <span class="text text-danger">*</span>
                        </label>
                        <input type="text" name="title"  placeholder="Enter Title"
                            class="form-control" id="title" style="font-size:14px;color: #95949E;" required>
                    </div>
                    <div class="mb-3">
                        <label for="name" class="form-label"> Place
                            <span class="text text-danger">*</span>
                        </label>
                        <input type="text" name="place" placeholder="Enter Place"
                            class="form-control" id="place"
                            style="font-size:14px;color: #95949E;" required>
                    </div>
                    {{-- <div class="mb-3">
                        <label for="name" class="form-label"> status
                            <span class="text text-danger">*</span>
                        </label>
                        <input type="text" name="status" placeholder="Enter status" value="{{ $Team->status }}"
                            class="form-control" id="status" style="font-size:14px;color: #95949E;" required>
                    </div> --}}
                    <div class="mb-3">
                        <label for="name" class="form-label"> Photo
                            <span class="text text-danger">*</span>
                        </label>
                        <input type="file" name="photo" placeholder="Add photo" class="form-control" id="photo"
                            style="font-size:14px;color: #95949E;">

                    </div>

                    <!-- Description Textarea -->
                    <div class="mb-3">
                        <label for="description" class="form-label">Description
                            <span class="text text-danger">*</span>
                        </label>
                        <textarea name="description" id="description" rows="4" placeholder="Enter Description"
                            class="form-control" style="font-size:14px; color: #95949E;" required></textarea>
                    </div>

                    <!-- Date Picker -->
                    <div class="mb-3">
                        <label for="date" class="form-label">Date
                            <span class="text text-danger">*</span>
                        </label>
                        <input type="date" name="date" id="date"
                            class="form-control" style="font-size:14px; color: #95949E;" required>
                    </div>
                </div>



                <div class="card-body">
                    <button type="submit" class="btn btn-primary">
                        Submit
                    </button>
                    <a href="{{ route('admin.completed') }}" class="
                    btn btn-primary">Back</a>
                </div>
            </form>
        </div>
    </div>

    </div>
@endsection
