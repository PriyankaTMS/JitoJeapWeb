@extends('admin.layout.master')
@section('container')
    <div class="page-wrapper">
        <div class="page-breadcrumb">
            <div class="row">
                <div class="col-12 d-flex no-block align-items-center">
                    <h4 class="page-title">Add Teams</h4>
                    <div class="ms-auto text-end">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{ route('admin.image') }}">Image</a></li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
        <div class="card">
            <form class="form-horizontal" method="post" action="{{ route('admin.image.store') }}"
                enctype="multipart/form-data">
                @csrf
                <div class="card-body">





                    <div class="mb-3">
                        <label for="name" class="form-label"> Photo
                            <span class="text text-danger">*</span>
                        </label>
                        <input type="file" name="photo" placeholder="Add Photo" class="form-control" id="photo"
                            style="font-size:14px;color: #95949E;" required>
                    </div>
                </div>



                <div class="card-body">
                    <button type="submit" class="btn btn-primary">
                        Submit
                    </button>
                    <a href="{{ route('admin.image') }}" class="
                    btn btn-primary">Back</a>
                </div>
            </form>
        </div>
    </div>

    </div>
@endsection
