@extends('admin.layout.master')
@section('container')
    <style>
        .switch {
            position: relative;
            display: inline-block;
            width: 60px;
            height: 34px;
        }

        .switch input {
            opacity: 0;
            width: 0;
            height: 0;
        }

        .slider {
            position: absolute;
            cursor: pointer;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background-color: #ccc;
            -webkit-transition: .4s;
            transition: .4s;
        }

        .slider:before {
            position: absolute;
            content: "";
            height: 26px;
            width: 26px;
            left: 4px;
            bottom: 4px;
            background-color: white;
            -webkit-transition: .4s;
            transition: .4s;
        }

        input:checked+.slider {
            background-color: #2196F3;
        }

        input:focus+.slider {
            box-shadow: 0 0 1px #2196F3;
        }

        input:checked+.slider:before {
            -webkit-transform: translateX(26px);
            -ms-transform: translateX(26px);
            transform: translateX(26px);
        }

        /* Rounded sliders */
        .slider.round {
            border-radius: 34px;
        }

        .slider.round:before {
            border-radius: 50%;
        }
    </style>
    <div class="page-wrapper">
        <div class="page-breadcrumb">
            <div class="row">
                <div class="col-12 d-flex no-block align-items-center">
                    <h4 class="page-title">Chapter Leader List</h4>
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


        <div class="card" style="margin: 10px;">
            <x-session-message />
            <div class="card-body">
                <div class="row mb-2">
                    <div class="col-sm-6 col-lg-12 text-end">
                        <a href="{{ route('admin.chapterleader.create') }}" class="btn btn-primary">Add
                            New</a>
                    </div>
                </div>
            </div>
            <div class="table-responsive container">
                <table class="table">
                    <thead class="thead-light">
                        <tr>
                            <th scope="col">Sr.</th>
                            <th scope="col">Name</th>
                            <th scope="col">Designation</th>
                            <th scope="col">Contact No.</th>
                            <th scope="col">Chapter</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody class="customtable">
                        @foreach ($chapleader as $list)
                            <tr>
                                <td>{{ $loop->index + 1 }}</td>
                                <td>
                                    <img src="{{ asset('roaster/' . $list->image) }}" alt="Logo" width="50"
                                        height="50">
                                    &nbsp;&nbsp;{{ $list->name }}
                                </td>
                                <td>{{ $list->designation }}</td>
                                <td>{{ $list->phone }}</td>
                                <td>{{ $list->chapter->name }}</td>

                                {{--  <td>
                                    @if ($list->status == 1)
                                        <a href="{{ route('admin.question.status', $list->id) }}">
                                            <label class="switch">
                                                <input type="checkbox" name="status" checked>
                                                <span class="slider"></span>
                                            </label>
                                        </a>
                                    @elseif($list->status == 0)
                                        <a href="{{ route('admin.question.status', $list->id) }}">
                                            <label class="switch">
                                                <input type="checkbox" name="status">
                                                <span class="slider"></span>
                                            </label>
                                        </a>
                                    @endif
                                </td>  --}}
                                <td>
                                    <a href=" {{ route('admin.chapterleader.edit', $list->id) }}"><button type="button"
                                            class="btn btn-success">Edit</button></a>

                                    <a href="{{ route('admin.chapterleader.delete', $list->id) }}"><button type="button"
                                            class="btn btn-danger">Delete</button></a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    @endsection
