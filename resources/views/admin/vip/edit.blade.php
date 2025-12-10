@extends('admin.layout.master')
@section('container')
    <div class="page-wrapper">
        <div class="page-breadcrumb">
            <div class="row">
                <div class="col-12 d-flex no-block align-items-center">
                    <h4 class="page-title">Edit Vip</h4>
                    <div class="ms-auto text-end">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{ route('admin.vip') }}">Vip</a></li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
        <div class="card">
            <form class="form-horizontal" method="post" action="{{ route('admin.vip.update', $vip->id) }}"
                enctype="multipart/form-data">
                @csrf
                <div class="card-body">
                    <div class="mb-3">
                        <label for="name" class="form-label"> Name
                            <span class="text text-danger">*</span>
                        </label>
                        <input type="text" name="name" placeholder="Enter Name" value="{{ $vip->name }}"
                            class="form-control" id="name" style="font-size:14px;color: #95949E;" required>
                    </div>

                    <div class="mb-3">
                        <label for="email" class="form-label"> Email Id
                            <span class="text text-danger">*</span>
                        </label>
                        <input type="email" name="email" placeholder="Enter email" value="{{ $vip->email }}"
                            class="form-control" id="name" style="font-size:14px;color: #95949E;" required>
                    </div>
                    {{--  <div class="mb-3">
                        <label for="password" class="form-label">Password
                            <span class="text text-danger">*</span>
                        </label>
                        <input type="password" name="password" placeholder="Enter Password" class="form-control"
                            id="password" style="font-size:14px;color:#95949E;" required>
                    </div>  --}}

                    <div class="mb-3">
                        <label for="mobile" class="form-label"> Contact Number
                            <span class="text text-danger">*</span>
                        </label>
                        <input type="number" name="mobile" placeholder="Enter Contact no." value="{{ $vip->mobile }}"
                            class="form-control" id="name" style="font-size:14px;color: #95949E;" required>
                    </div>

                    <div class="mb-3">
                        <label for="company" class="form-label"> Company Name
                            <span class="text text-danger">*</span>
                        </label>
                        <input type="text" name="company" placeholder="Enter Company Name" class="form-control"
                            value="{{ $vip->company }}" id="name" style="font-size:14px;color: #95949E;" required>
                    </div>
                    <div class="mb-3">
                        <label for="image" class="form-label"> Image(Optional)
                            <span class="text text-danger">*</span></label>
                        <div class="row">
                            <div class="col-2">
                                <img height="60" width="60" style=" margin-left:10px; border-radius:5px;"
                                    src="/roaster/{{ $vip->image }}" alt="">
                            </div>
                            <div class="col-10">
                                <input type="file" name="image" id="image" value="" class="form-control"
                                    style="font-size:14px;color:#95949E;">
                            </div>
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="qr_code" class="form-label"> QR Code
                            <span class="text text-danger">*</span>
                        </label>
                        <input type="text" name="qr_code" placeholder="Enter QR Code" value="{{ $vip->qr_code }}"
                            class="form-control" id="name" style="font-size:14px;color: #95949E;" required>
                    </div>

                    <div class="mb-3">
                        <label for="qr_image" class="form-label"> QR Image(Optional)
                        </label>
                        <div class="row">
                            <div class="col-2">
                                <img height="60" width="60" style=" margin-left:10px; border-radius:5px;"
                                    src="/qr_codes/{{ $vip->qr_image }}" alt="">
                            </div>
                            <div class="col-10">
                                <input type="file" name="qr_image" id="qr_image" value=""
                                    class="form-control" style="font-size:14px;color:#95949E;">
                            </div>
                        </div>
                    </div>

                    {{--  <div class="mb-3">
                        <label for="image" class="form-label">Image(Optional)
                        </label>
                        <input type="file" name="image" class="form-control" id="image"
                            style="font-size:14px;color:#95949E;">
                    </div>

                    <div class="mb-3">
                        <label for="qr_image" class="form-label"> QR Image
                            <span class="text text-danger">*</span>
                        </label>
                        <input type="file" name="qr_image" class="form-control" id="name"
                            style="font-size:14px;color: #95949E;" required>

                    </div>  --}}
                </div>

                <div class="card-body">
                    <button type="submit" class="btn btn-primary">
                        Update
                    </button>
                    <a href="{{ route('admin.vip') }}" class="
                    btn btn-primary">Back</a>
                </div>
            </form>
        </div>
    </div>

    </div>
@endsection
