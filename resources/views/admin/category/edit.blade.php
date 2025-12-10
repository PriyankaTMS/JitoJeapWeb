@extends('admin.layout.master')
@section('container')
    <div class="page-wrapper">
        <div class="page-breadcrumb">
            <div class="row">
                <div class="col-12 d-flex no-block align-items-center">
                    <h4 class="page-title">Edit Business Category</h4>
                    <div class="ms-auto text-end">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{ route('admin.category') }}">Business Category</a></li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
        <div class="card" style="margin: 10px;">
            <form class="form-horizontal" method="post" action="{{ route('admin.category.update', $category->id) }}"
                enctype="multipart/form-data">
                @csrf
                <div class="card-body">

                    <div class="mb-3">
                        <label for="name" class="form-label"> Name
                            <span class="text text-danger">*</span>
                        </label>
                        <input type="text" name="name" value="{{ $category->name }}" placeholder="Enter Name"
                            class="form-control" id="name" style="font-size:14px;color: #95949E;" required>
                    </div>
                    {{--  <div class="mb-3">
                        <label for="pt_id" class="form-label">Power Team
                            <span class="text text-danger">*</span>
                        </label>
                        <select name="pt_id" id="pt_id" class="form-control">
                            @foreach ($powteam as $list)
                                <option value="{{ $list->id }}" {{ $list->id == $category->pt_id ? 'selected' : '' }}>
                                    {{ $list->name }}
                                </option>
                            @endforeach
                        </select>
                    </div>  --}}
                    <div class="mb-3">
                        <label for="desc" class="form-label">Description</label>
                        <textarea name="desc" id="summernote" cols="30" rows="10">{{ $category->desc }}</textarea>
                    </div>
                </div>

                <div class="card-body">
                    <button type="submit" class="btn btn-primary">
                        Submit
                    </button>
                    <a href="{{ route('admin.category') }}" class="
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
