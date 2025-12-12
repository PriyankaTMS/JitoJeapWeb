@extends('website.layout.main')

@section('content')
    <section style="padding: 288px 0 80px 0px; background: #ffffff;">
        <div class="container" style="display: flex; flex-direction: column; gap: 30px;        max-width: 1400px;">

            <!-- About Us Section -->
            <div class="text-image-wrapper row align-items-center" style="">
                <div class="col-lg-12 col-md-12 col-12">
                    <div class="row">
                        <div class="col-12 ">

                            <!-- Text -->

                            <div style="display: flex; align-items: center; flex-direction: row; gap: 15px;">
                                <div style="width: 3px; height: 40px; background-color: #E31E25;"></div>
                                <h2
                                    style="font-size: 36px; font-weight: bold; font-family: 'Times New Roman', Times, serif; margin: 0;">
                                    <span style="color: #FFD800;">BE A </span> <span style="color: #393186;">DONOR</span>
                                </h2>
                            </div>
                            <div class="my-3" style="display: flex; align-items: center; flex-direction: row; gap: 15px;">
                                <span
                                    style="font-size: 32px;color: #5B5B5B; font-weight: 400; font-family: 'Times New Roman', Times, serif; margin: 0;">
                                    Benefits
                                </span>
                            </div>

                            <!-- About Us Section -->
                            <div class="text-image-wrapper align-items-center" style="">
                                <div class="row">

                                    <div class="col-12 my-5">
                                        <div class="row p-5 justify-content-center">

                                            <div class="col-lg-3 col-md-4 col-sm-12 col-12 p-3"
                                                style="height: 222px;width: 268px;color:white;text-align:center;">
                                                <div class="testimonial-item d-flex justify-content-center align-items-center"
                                                    style="background-color:#393186;">
                                                    <div class="row position-relative" style="padding: 15px;">
                                                        <div
                                                            class="col-12 mb-4 d-flex align-items-center justify-content-center">
                                                            <div class="testOwner position-absolute"
                                                                style="height:115px;width:115px;border-radius:50%;background-color:#FFFFFF;border-top: 58px solid #393186;display: flex;align-items: center;justify-content: center;top: -70px;">
                                                                <div class="position-absolute"
                                                                    style="height:100px;width:100px;bottom: 7px;border-radius:50%;background-color:#FFFFFF;display: flex;align-items: center;justify-content: center;">
                                                                    <img src="{{ asset('website/images/studentICon.png') }}"
                                                                        alt="">
                                                                </div>
                                                            </div>

                                                        </div>
                                                        <div
                                                            class="col-12 mb-2 mt-5 d-flex align-items-center justify-content-center">
                                                            <p
                                                                style="font-size:15px;font-weight:bold;font-family:Poppins;letter-spacing: 1px;">
                                                                Social Impact</p>
                                                        </div>
                                                        <div class="col-12 mb-2">
                                                            <p style="font-size: 12px;font-family:Poppins;">Give back to
                                                                society by supporting
                                                                the educational dreams of
                                                                students. The contribution directly impacts the lives of
                                                                aspiring Jain students.</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-3 col-md-4 col-sm-12 col-12 p-3"
                                                style="height: 222px;width: 268px;color:white;text-align:center;">
                                                <div class="testimonial-item d-flex justify-content-center align-items-center"
                                                    style="background-color:#009846;">
                                                    <div class="row position-relative" style="padding: 15px;">
                                                        <div
                                                            class="col-12 mb-4 d-flex align-items-center justify-content-center">
                                                            <div class="testOwner position-absolute"
                                                                style="height:115px;width:115px;border-radius:50%;background-color:#FFFFFF;border-top: 58px solid #009846;display: flex;align-items: center;justify-content: center;top: -70px;">
                                                                <div class="position-absolute"
                                                                    style="height:100px;width:100px;bottom: 7px;border-radius:50%;background-color:#FFFFFF;display: flex;align-items: center;justify-content: center;">
                                                                    <img src="{{ asset('website/images/BookPencilIcon.png') }}"
                                                                        alt="">
                                                                </div>
                                                            </div>

                                                        </div>
                                                        <div
                                                            class="col-12 mb-2 mt-5 d-flex align-items-center justify-content-center">
                                                            <p
                                                                style="font-size:15px;font-weight:bold;font-family:Poppins;letter-spacing: 1px;">
                                                                Social Impact</p>
                                                        </div>
                                                        <div class="col-12 mb-2">
                                                            <p style="font-size: 12px;font-family:Poppins;">Give back to
                                                                society by supporting
                                                                the educational dreams of
                                                                students. The contribution directly impacts the lives of
                                                                aspiring Jain students.</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-3 col-md-4 col-sm-12 col-12 p-3"
                                                style="height: 222px;width: 268px;color:white;text-align:center;">
                                                <div class="testimonial-item d-flex justify-content-center align-items-center"
                                                    style="background-color:#FFD800;">
                                                    <div class="row position-relative" style="padding: 15px;">
                                                        <div
                                                            class="col-12 mb-4 d-flex align-items-center justify-content-center">
                                                            <div class="testOwner position-absolute"
                                                                style="height:115px;width:115px;border-radius:50%;background-color:#FFFFFF;border-top: 58px solid #FFD800;display: flex;align-items: center;justify-content: center;top: -70px;">
                                                                <div class="position-absolute"
                                                                    style="height:100px;width:100px;bottom: 7px;border-radius:50%;background-color:#FFFFFF;display: flex;align-items: center;justify-content: center;">
                                                                    <img src="{{ asset('website/images/saveTax.png') }}"
                                                                        alt="">
                                                                </div>
                                                            </div>

                                                        </div>
                                                        <div
                                                            class="col-12 mb-2 mt-5 d-flex align-items-center justify-content-center">
                                                            <p
                                                                style="font-size:15px;font-weight:bold;font-family:Poppins;letter-spacing: 1px;">
                                                                Social Impact</p>
                                                        </div>
                                                        <div class="col-12 mb-2">
                                                            <p style="font-size: 12px;font-family:Poppins;">Give back to
                                                                society by supporting
                                                                the educational dreams of
                                                                students. The contribution directly impacts the lives of
                                                                aspiring Jain students.</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-3 col-md-4 col-sm-12 col-12 p-3"
                                                style="height: 222px;width: 268px;color:white;text-align:center;">
                                                <div class="testimonial-item d-flex justify-content-center align-items-center"
                                                    style="background-color:#E31E24;">
                                                    <div class="row position-relative" style="padding: 15px;">
                                                        <div
                                                            class="col-12 mb-4 d-flex align-items-center justify-content-center">
                                                            <div class="testOwner position-absolute"
                                                                style="height:115px;width:115px;border-radius:50%;background-color:#FFFFFF;border-top: 58px solid #E31E24;display: flex;align-items: center;justify-content: center;top: -70px;">
                                                                <div class="position-absolute"
                                                                    style="height:100px;width:100px;bottom: 7px;border-radius:50%;background-color:#FFFFFF;display: flex;align-items: center;justify-content: center;">
                                                                    <img src="{{ asset('website/images/peopleIcon.png') }}"
                                                                        alt="">
                                                                </div>
                                                            </div>

                                                        </div>
                                                        <div
                                                            class="col-12 mb-2 mt-5 d-flex align-items-center justify-content-center">
                                                            <p
                                                                style="font-size:15px;font-weight:bold;font-family:Poppins;letter-spacing: 1px;">
                                                                Social Impact</p>
                                                        </div>
                                                        <div class="col-12 mb-2">
                                                            <p style="font-size: 12px;font-family:Poppins;">Give back to
                                                                society by supporting
                                                                the educational dreams of
                                                                students. The contribution directly impacts the lives of
                                                                aspiring Jain students.</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="my-3" style="display: flex; align-items: center; flex-direction: row; gap: 15px;">
                                <span
                                    style="font-size: 32px;color: #5B5B5B; font-weight: 400; font-family: 'Times New Roman', Times, serif; margin: 0;">
                                    How to Become JEAP Member (Donor)
                                </span>
                            </div>

                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>
@endsection
