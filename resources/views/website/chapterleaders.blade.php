@extends('website.layout.main')
@section('content')
    <style>
        @media (min-width: 768px) {
            .reset-desktop-margin {
                margin-top: 300px
            }
        }

        .custom-margin {
            margin-top: -75px;
        }

        @media (max-width: 767px) {
            .custom-margin {
                margin-top: 0;
            }
        }
    </style>
    <section class="section reset-desktop-margin">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    {{-- <ul class="list-xl">
                        <li> --}}

                    <h2 style="font-size: 36px; font-weight: bold; font-family: 'Times New Roman', Times, serif; margin: 0;">
                        <a href="{{ route('index') }}"><i class='fas fa-angle-left'
                                style='font-size:43px;color:#E31E25'></i></a>
                        <span style="color: #FFD800;">Chapter</span> <span style="color: #393186;">Details -</span><span
                            style="color: #393186;font-weight:400;">&nbsp;{{ $chapleader->first()->chapter->name ?? 'Leader Not Present!!!!' }}</span>

                    </h2>
                    {{-- </li>
                    </ul> --}}
                </div>

                <div class="col-lg-12 col-sm-6" style="margin-top:50px;">
                    <div class="row">
                        {{--  <div class="col-lg-3 col-sm-6 card" style="border-radius:15px;"></div>  --}}
                        <div class="col-lg-3 col-sm-6 mb-2">
                            <div class="card  text-center"
                                style="border-radius:15px; box-shadow: 0 8px 20px rgba(0, 0, 0, 0.2);">
                                <div style="margin:20px 0 25px 0;">
                                    <p><span
                                            style="font-family:Arial;font-size:48px; font-weight:700;color:#5B5B5B;">{{ $chapleader->first()->chapter->members ?? '00' }}</span>
                                    </p>
                                    <p style="margin-top:-15px !important;">
                                        <span
                                            style="font-family:Arial;font-size:20px; font-weight:400;color:#5B5B5B;">MEMBERS</span>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-sm-6 mb-2">
                            <div class="card  text-center"
                                style="border-radius:15px; box-shadow: 0 8px 20px rgba(0, 0, 0, 0.2);">
                                <div style="margin:20px 0 25px 0;">
                                    <p><span
                                            style="font-family:Arial;font-size:48px; font-weight:700;color:#5B5B5B;">{{ $chapleader->first()->chapter->com_evt ?? '00' }}</span>
                                    </p>
                                    <p style="margin-top:-15px !important;">
                                        <span
                                            style="font-family:Arial;font-size:20px; font-weight:400;color:#5B5B5B;">COMPLETED
                                            EVENTS</span>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-sm-6 mb-2">
                            <div class="card  text-center"
                                style="border-radius:15px; box-shadow: 0 8px 20px rgba(0, 0, 0, 0.2);">
                                <div style="margin:20px 0 25px 0;">
                                    <p><span
                                            style="font-family:Arial;font-size:48px; font-weight:700;color:#5B5B5B;">{{ $chapleader->first()->chapter->up_evt ?? '00' }}</span>
                                    </p>
                                    <p style="margin-top:-15px !important;">
                                        <span
                                            style="font-family:Arial;font-size:20px; font-weight:400;color:#5B5B5B;">UPCOMING
                                            EVENTS</span>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-sm-6 mb-2 ">
                            <div class="card  text-center"
                                style="border-radius:15px; box-shadow: 0 8px 20px rgba(0, 0, 0, 0.2);">
                                <div style="margin:20px 0 25px 0;">
                                    <p><span
                                            style="font-family:Arial;font-size:48px; font-weight:700;color:#5B5B5B;">{{ $chapleader->first()->chapter->rank ?? '00' }}</span>
                                    </p>
                                    <p style="margin-top:-15px !important;">
                                        <span style="font-family:Arial;font-size:20px; font-weight:400;color:#5B5B5B;">% Active</span>
                                    </p>
                                </div>
                            </div>
                        </div>

                        {{--  <div class="col-lg-3 col-sm-6 card"></div>
                        <div class="col-lg-3 col-sm-6 card"></div>
                        <div class="col-lg-3 col-sm-6 card"></div>  --}}
                    </div>
                </div>

                <div class="col-lg-12 col-sm-6" style="margin-top:50px;">
                    {{--  <div class="card" style="border-radius:15px;"></div>  --}}
                    <div class="card"
                        style="border-radius:20px; background: linear-gradient(to right, #FFD800 20%, #393186 20%);border:none;">
                        <div class="row " style="margin:45px;">
                            @foreach ($chapleader as $leader)
                                <div class="col-lg-6 col-sm-6 mt-2">
                                    <div class="card " style="border-radius:20px;border:none;background:#ffff;">
                                        <div class="row" style="margin:18px;">
                                            <div class="col-lg-4 col-sm-6">
                                                {{--  <img
                                                    src="{{ asset('roaster/' . $leader->image) }}" alt="Logo"
                                                   class="rounded-circle" style="width: 200px;height:200px;">  --}}
                                                <img src="{{ asset('roaster/' . $leader->image) }}" alt="Logo"
                                                    alt="Leader Image" style="width:130px;height:130px; border-radius:20%;">
                                            </div>
                                            <div class="col-lg-8 col-sm-6 " style="margin:20px 0;">
                                                <p><b>NAME:</b>&nbsp;&nbsp;<span>{{ $leader->name }}</span></p>
                                                <p><b>DESIGNATION:</b>&nbsp;&nbsp;<span>{{ $leader->designation }}</span></p>
                                                <p><b>CONTACT NO.:</b>&nbsp;&nbsp;<span>{{ $leader->phone }}</span></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach

                            {{--  <div class="col-lg-6 col-sm-6">
                                <div class="card row">
                                    <div class="col-4"></div>
                                    <div class="col-8"></div>
                                </div>
                            </div>  --}}

                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>
    <!--========================Section Conference Schedule=============================-->
    <section class="section section-lg bg-default text-center custom-margin">
        <div class="container">

            <div>

            </div>
        </div>
    </section>
@endsection
