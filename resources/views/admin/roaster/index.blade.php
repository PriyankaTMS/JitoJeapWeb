@extends('admin.layout.master')
@section('container')
    <style>
        input[type="checkbox"] {
            transform: scale(1.5);
            margin: 10px;
            accent-color: #1f262d;
        }
    </style>
    <div class="page-wrapper">
        <div class="page-breadcrumb">
            <div class="row">
                <div class="col-12 d-flex no-block align-items-center">
                    <h4 class="page-title">Roasters</h4>
                    <div class="ms-auto text-end">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{ route('admin.home') }}">Home</a></li>
                                {{--  <li class="breadcrumb-item active" aria-current="page">
                                Library
                            </li>  --}}
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>


        <div class="card" style="margin:10px;">
            <x-session-message />
            <div class="card-body">
                <div class="row mb-2">
                    <div class="col-sm-6 col-lg-12 text-end">
                        <button class="btn btn-success" data-bs-toggle="modal" data-bs-target="#addExcel">Upload
                            Excel</button>&nbsp;&nbsp;
                        <a href="{{ route('roasterpdf') }}" class="btn btn-success"><i class='fas fa-download'
                                style="font-size:20px;"></i></a>&nbsp;&nbsp;
                        <a href="{{ route('admin.roaster.create') }}" class="btn btn-primary">Add
                            New</a>
                    </div>
                </div>
            </div>
            <div class="table-responsive m-2">
                <table class="table">
                    <thead class="thead-light">
                        <tr>
                            <th scope="col">Id</th>
                            <th scope="col">Image</th>
                            <th scope="col">Name</th>
                            <th scope="col">Email</th>
                            {{--  <th scope="col"> Team</th>  --}}
                            <th scope="col">Zone</th>
                            <th scope="col">Chapter</th>
                            <th scope="col">Active</th>
                            <th scope="col">Action</th>
                            {{--  <th scope="col">QR Code</th>  --}}
                        </tr>
                    </thead>
                    <tbody class="customtable">
                        @foreach ($roaster as $user)
                            <tr>
                                <td class="align-middle">{{ $loop->index+1 }}</td>
                                <td>
                                    <img src="{{ asset('roaster/' . $user->image) }}" alt="Logo" width="50"
                                        height="50">
                                </td>
                                <td class="align-middle">{{ $user->name }}</td>
                                <td class="align-middle">{{ $user->email }}</td>
                                {{--  <td class="align-middle">{{ $user->team->name ?? '' }}</td>  --}}
                                <td class="align-middle">{{ $user->zone->name ?? '' }}</td>
                                <td class="align-middle">{{ $user->chapters->name ?? '' }}</td>
                                <td class="align-middle">
                                    <input type="checkbox" @if ($user->status != '0') Checked @endif
                                        onclick="toggleCheckbox('{{ $user->id }}')" id="checkbox-{{ $user->id }}">
                                </td>
                                <td class="align-middle"
                                    style="max-width: 200px;overflow: hidden;text-overflow: ellipsis;white-space: nowrap;">
                                    <a href=" {{ route('admin.roaster.edit', $user->id) }}"><button type="button"
                                            class="btn btn-success">Edit</button></a>

                                    <a href="{{ route('admin.roaster.delete', $user->id) }}"><button type="button"
                                            class="btn btn-danger">Delete</button></a>

                                </td>
                                {{--  <td class="align-middle">

                                    <img src="{{ asset('qr_codes/' . $user->qr_image . '.png') }}" alt="qr_code"
                                        width="60" height="60" data-bs-toggle="modal" data-bs-target="#qrCodeModal"
                                        onclick="showQrCode('{{ asset('qr_codes/' . $user->qr_image . '.png') }}')">

                                </td>  --}}
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>

        <div class="modal fade" id="addExcel" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
            aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Upload Roater List</h5>
                        <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <form action="{{ route('admin.importexcel') }}" method="POST" enctype="multipart/form-data">
                        <div class="modal-body">
                            @csrf

                            <div class="input-group">
                                <input type="file" name="import_file" class="form-control" required>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="submit" class="btn btn-primary">Import</button>
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>


        <!-- Bootstrap Modal -->
        <div class="modal fade" id="qrCodeModal" tabindex="-1" aria-labelledby="qrCodeModalLabel" aria-hidden="true">

            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content text-center">
                    <h5 class="modal-title mt-2" id="qrCodeModalLabel">QR Code</h5>
                    <p id="qrCodeName" class="text-secondary my-1"></p>
                    <img id="modalQrCodeImage" src="" alt="QR Code" class="img-fluid" width="300"
                        height="300" style="margin: auto;">
                    <div class="text-center">
                        <button type="button" class="btn btn-secondary m-2 mx-auto"
                            data-bs-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <script>
        const statusUrl = '{{ route('admin.roaster.status', 0) }}';

        function showQrCode(imageSrc) {
            document.getElementById('modalQrCodeImage').src = imageSrc;

            const fileNameWithExtension = imageSrc.split('/').pop();
            const fileName = fileNameWithExtension.split('.')[0];
            document.getElementById('qrCodeName').innerHTML = fileName;
        }



        function toggleCheckbox(id) {
            var updatedUrl = statusUrl.replace('/0', `/${id}`);
            var xhr = new XMLHttpRequest();
            xhr.open('GET', updatedUrl, true);
            xhr.onreadystatechange = function() {
                if (xhr.readyState == 4) {
                    if (xhr.status == 200) {
                        var response = JSON.parse(xhr.responseText);
                        console.log(response);
                    } else if (xhr.status == 404) {
                        var checkbox = document.getElementById('checkbox-' + id);
                        checkbox.checked = !checkbox.checked;
                        alert('Data Not Found');
                    }
                }
            };
            xhr.send();
        }
    </script>
@endsection
