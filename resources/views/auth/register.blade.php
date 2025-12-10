@extends('layouts.app')
@section('content')
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet">
    <style>
        .image-container {
            overflow: hidden;
            margin-top: -25px;
            /* Adjust this value to move the image upward */
        }

        .image-container img {
            width: 100%;
            height: auto;
            min-height: 100%;
            object-fit: cover;
            margin-top: -30px;
            /* Additional upward shift for the image */
        }

        /* For mobile view adjustments */
        @media (max-width: 768px) {
            .image-container {
                height: auto;
                /* Adjust for mobile */
            }

            .image-container img {
                margin-top: -25px;
                /* Reduced negative margin for mobile */
                height: auto;
                /* Ensure height auto for responsive image */
            }

            .logo-container {
                margin-bottom: 10px;
                /* Reduced space between logo and image */
            }
        }

        @font-face {
            font-family: 'A750-Sans-Cd';
            src: url('{{ asset(' fonts/A750-Sans-Cd.woff2') }}') format('woff2'),
                url('{{ asset(' fonts/A750-Sans-Cd.woff') }}') format('woff');
            font-weight: normal;
            font-style: normal;
        }

        .circle-container {
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 20px 0;
        }

        .form-floating {
            margin-top: 10px;
        }

        .mb-4 {
            margin-bottom: 1.5rem !important;
        }

        .circle {
            width: 25px;
            height: 25px;
            border-radius: 50%;
            border: 1px solid #D11E30;
            color: #D11E30;
            display: flex;
            align-items: center;
            justify-content: center;
            font-weight: bold;
            font-size: 12px;
            text-decoration: none;
            cursor: pointer;
            /* Add cursor pointer for clickability */
        }

        .light-circle {
            background-color: #f8d4d7;
        }

        .dark-circle {
            background-color: #D11E30;
            color: white;
        }

        .line {
            width: 30px;
            height: 2px;
            background-color: #D11E30;
            margin: 0 6px;
        }

        .custom-file-container {
            position: relative;
            width: 100%;
            display: flex;
            align-items: center;
        }

        .custom-file-input {
            position: absolute;
            left: 0;
            top: 0;
            opacity: 0;
            width: 100%;
            height: 100%;
            z-index: 2;
            cursor: pointer;
        }

        .custom-file-text {
            flex-grow: 1;
            padding: 10px;
            background-color: #f8f9fa;
            border: 1px solid #ced4da;
            border-right: none;
            text-align: left;
        }

        .custom-upload-btn {
            background-color: #007bff;
            color: white;
            border: 1px solid #007bff;
            border-radius: 0;
        }

        .custom-margin {
            margin-top: -100px;
        }



        @media (max-width: 768px) {

            /* For devices smaller than 768px (like tablets and mobile phones) */
            .custom-margin {
                margin-top: 0;
            }
        }
    </style>
    <section class="text-center text-lg-start vh-100">
        <div class="card h-100" style="border: none; margin-bottom: 0;">
            <div class="row g-0 h-100 d-flex align-items-center">
                <!-- Image Section -->
                {{-- <div class="col-lg-6 d-flex align-items-stretch image-container "> --}}
                <div class="col-lg-6 d-none d-lg-flex align-items-stretch image-container">
                    <img src="{{ asset('roaster/regibg6.png') }}" alt="Trendy Pants and Shoes" style="" />
                </div>
                <!-- Form Section -->
                <div class="col-lg-6 text-center ml-2 custom-margin">
                    <form method="POST" action="{{ route('register') }}" enctype="multipart/form-data">
                        @csrf
                        {{--  <div class="d-flex justify-content-center mb-4 image-marge">
                            <img src="{{ asset('roaster/LR.png') }}" alt="bni logo" style="max-width: 100%; height: auto;">
                        </div>  --}}
                        <div class="row mb-4 mt-4">
                            <div class="col-6 text-start mt-4 "><img src="{{ asset('roaster/regilogo_1.png') }}"
                                    alt="bni logo" style="max-width: 100%; height: auto;margin-left:15px;"></div>
                            <div class="col-6 text-end mt-4"><img src="{{ asset('roaster/regilogo_2.png') }}" alt="bni logo"
                                    style="max-width: 60%; height: auto;"></div>
                        </div>
                        <div class="d-flex justify-content-center mb-2 mt-4" style="margin-top:50px !important;">
                            <h1
                                style="text-transform: uppercase; font-size: 35px; font-weight: 300; font-family: 'A750-Sans-Cd-Medium-Regular'; text-align: center;">
                                <b>Register now and be a part of our thriving community.</b>
                            </h1>
                        </div>
                        {{--  <div class="d-flex justify-content-center mb-4" style="size: 16px;">
                            <h5 style="font-family: 'Poppins';"><b>New Here?
                                    <a href="{{ route('login') }}" style="color: red; text-decoration: none;">Login</a>
                                </b></h5>
                        </div>  --}}
                        <div style="margin-left:25px;margin-right:25px;margin-top:30px;">
                            <div>
                                <div class="row mb-3">
                                    <div class="col-md-12 text-center">
                                        <input id="name" type="text"
                                            class="form-control @error('name') is-invalid @enderror" name="name"
                                            placeholder="Your Name*" value="{{ old('name') }}"
                                            style="background: #F7F7F7;font-size:16px; padding:13px 10px;border-radius:10px;"
                                            required autocomplete="name" autofocus>

                                        @error('name')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <div class="col-md-12">
                                        <input id="mobile" type="tel"
                                            class="form-control @error('mobile') is-invalid @enderror" name="mobile"
                                            placeholder="Contact No.*"
                                            style="background: #F7F7F7; font-size:16px; padding:13px 10px; border-radius:10px;"
                                            required autocomplete="off" pattern="[0-9]{10}"
                                            title="Please enter a valid 10-digit mobile number">

                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <div class="col-md-12">
                                        <div class="custom-file-container">
                                            <input id="image" type="file" name="image" class="custom-file-input"
                                                required>
                                            <div class="custom-file-text" style="border-radius:10px;padding:13px 10px;">
                                                Add
                                                Photo*</div>
                                            <button type="button" class="btn "
                                                style="border-radius:10px;padding:13px 25px;background-color:#393186;color:white;">ADD</button>
                                        </div>
                                    </div>
                                </div>


                                <div class="row mb-3">
                                    <div class="col-md-12">
                                        <input id="email" type="email"
                                            class="form-control @error('email') is-invalid @enderror" name="email"
                                            value="{{ old('email') }}" placeholder="Email ID*"
                                            style="background: #F7F7F7;font-size:16px; padding:13px 10px;border-radius:10px;"
                                            required autocomplete="email"
                                            pattern="[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$"
                                            title="Please enter a valid email address">
                                    </div>
                                </div>

                                {{--  <div class="row mb-3">
                                    <div class="col-md-12">
                                        <input id="dob" type="date"
                                            class="form-control @error('date') is-invalid @enderror" name="dob"
                                            value="{{ old('dob') }}" placeholder="Date of Birth*"
                                            style="background: #F7F7F7;font-size:16px; padding:13px 10px;border-radius:10px;"
                                            required autocomplete="dob" title="Please enter a valid date of birth">
                                    </div>
                                </div>  --}}

                                {{--  <div class="row mb-3">
                                    <div class="col-md-12">
                                        <input id="dob" type="text"
                                            class="form-control @error('dob') is-invalid @enderror" name="dob"
                                            placeholder="Date of Birth*"
                                            value="{{ old('dob') }}"
                                            style="background: #F7F7F7; font-size:16px; padding:13px 10px; border-radius:10px;"
                                            required autocomplete="bday" title="Please enter a valid date of birth"
                                            required>
                                        @error('dob')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>  --}}
                                <div class="row mb-3">
                                    <div class="col-md-12">
                                        {{--  <input id="dob" type="text"
                                            class="form-control @error('dob') is-invalid @enderror" name="dob"
                                            placeholder="Date of Birth*" value="{{ old('dob') }}"
                                            style="background: #F7F7F7; font-size:16px; padding:13px 10px; border-radius:10px;"
                                            required autocomplete="bday" title="Please enter date in dd/mm/yyyy format"
                                            pattern="^(0[1-9]|[12][0-9]|3[01])/(0[1-9]|1[0-2])/\d{4}$"> --}}

                                        <input id="dob" type="text"
                                            class="form-control @error('dob') is-invalid @enderror" name="dob"
                                            placeholder="Date of Birth*" value="{{ old('dob') }}"
                                            style="background: #F7F7F7; font-size:16px; padding:13px 10px; border-radius:10px;"
                                            required autocomplete="bday"
                                            title="Enter a valid past date in dd/mm/yyyy format"
                                            pattern="^(0[1-9]|[12][0-9]|3[01])/(0[1-9]|1[0-2])/\d{4}$">
                                        <span id="dob-error" style="color: red; font-size: 14px;"></span>
                                        @error('dob')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>



                                <div class="row mb-3">

                                    <div class="col-md-6 col-sm-12">

                                        <input type="text" class="form-control"
                                            style="background: #F7F7F7; font-size:16px; padding:13px 10px; border-radius:10px;"
                                            value="{{ $zone->name }}" readonly>

                                        <!-- Hidden input to pass the zone ID in the form submission -->
                                        <input type="hidden" name="zone_id" value="{{ $zone->id }}">
                                    </div>

                                    <div class="col-md-6 col-sm-12">
                                        <select class="form-select form-control" name="cap_id" id="cap_id"
                                            style="background: #F7F7F7;font-size:16px; padding:13px 10px;border-radius:10px;"
                                            aria-label="Chapter" required>
                                            <option value="">Chapter Name*</option>
                                            @foreach ($chapter as $cap)
                                                <option value="{{ $cap->id }}" data-zone-id="{{ $cap->zone_id }}">
                                                    {{ $cap->name }}
                                                </option>
                                            @endforeach
                                        </select>
                                    </div>

                                </div>
                                <div class="row mb-3">
                                    <div class="col-md-6 col-sm-12">
                                        <select class="form-select form-control" name="mem_id" id="mem_id"
                                            style="background: #F7F7F7;font-size:16px; padding:13px 10px;border-radius:10px;"
                                            aria-label="Membership" required>
                                            <option value="">Membership Type*</option>
                                            @foreach ($member as $mem)
                                                <option value="{{ $mem->id }}">{{ $mem->name }}</option>
                                            @endforeach
                                        </select>
                                    </div>

                                    {{--  </div>
                                <div class="row mb-3">  --}}
                                    <div class="col-md-6 col-sm-12">
                                        {{--  <select class="form-select form-control" name="cat_id" id="cat_id"
                                            style="background: #F7F7F7;font-size:16px; padding:13px 10px;border-radius:10px;"
                                            aria-label="Category" required>
                                            <option value="">Business Category*</option>
                                            @foreach ($category as $cat)
                                                <option value="{{ $cat->id }}">{{ $cat->name }}</option>
                                            @endforeach
                                        </select>  --}}
                                        <select class="form-select" name="designation_id" id="designation_id"
                                            style="background: #F7F7F7;font-size:16px; padding:13px 10px;border-radius:10px;"
                                            aria-label="Membership" required>
                                            <option hidden value="">Designation*</option>
                                            @foreach ($designations as $designation)
                                                <option value="{{ $designation->id }}">{{ $designation->name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                            </div>

                            <div>

                                <div class="row mb-3">
                                    <div class="col-md-12">
                                        <select class="form-select form-control" name="cat_id" id="cat_id"
                                            style="background: #F7F7F7;font-size:16px; padding:13px 10px;border-radius:10px;"
                                            aria-label="Category" required>
                                            <option value="">Business Category*</option>
                                            @foreach ($category as $cat)
                                                <option value="{{ $cat->id }}">{{ $cat->name }}</option>
                                            @endforeach
                                        </select>

                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <div class="col-md-12 text-center">
                                        <input id="company" type="text" class="form-control" name="company"
                                            placeholder="Company Name*" value="{{ old('company') }}"
                                            style="background: #F7F7F7;font-size:16px; padding:13px 10px;border-radius:10px;"
                                            required autocomplete="company" autofocus>
                                    </div>
                                </div>
                                {{-- <div class="row mb-3">
                                    <div class="col-md-12">
                                        <input id="usp" type="text" class="form-control " name="usp"
                                            placeholder="Enter USP*" value="{{ old('usp') }}"
                                            style="background: #F7F7F7;font-size:16px; padding:13px 10px;border-radius:10px;"
                                            autocomplete="usp" required>
                                    </div>
                                </div> --}}
                                {{-- <div class="row mb-3">
                                    <div class="col-md-12">


                                        <textarea id="com_brief" class="form-control" name="com_brief" placeholder="Write Short Company Brief* "
                                            style="background: #F7F7F7; font-size:16px; padding:13px 10px; border-radius:10px; height:80px;"
                                            autocomplete="off" maxlength="255" required></textarea>
                                        <small id="com_brief_error" style="color: red; display: none;">Maximum 255
                                            characters allowed.</small>
                                    </div>
                                </div> --}}

                                <div class="row mb-3">
                                    <div class="col-md-12 text-center">

                                        <input id="link" type="text" class="form-control" name="link"
                                            placeholder="Website Link* " value="{{ old('link') }}"
                                            style="background: #F7F7F7; font-size:16px; padding:13px 10px; border-radius:10px;"
                                            autocomplete="link" autofocus title="Please enter a valid website link."
                                            >
                                    </div>
                                </div>



                                <div class="row mb-3">
                                    <div class="col-md-12">
                                        <input id="usp" type="text" class="form-control " name="usp"
                                            placeholder="Enter USP*" value="{{ old('usp') }}"
                                            style="background: #F7F7F7;font-size:16px; padding:13px 10px;border-radius:10px;"
                                            autocomplete="usp" required>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <div class="col-md-12">


                                        <textarea id="com_brief" class="form-control" name="com_brief" placeholder="Company Brief* "
                                            style="background: #F7F7F7; font-size:16px; padding:13px 10px; border-radius:10px; height:80px;"
                                            autocomplete="off" maxlength="255" required></textarea>
                                        <small id="com_brief_error" style="color: red; display: none;">Maximum 255
                                            characters allowed.</small>
                                    </div>
                                </div>
                            </div>


                            <div class="row mb-0">
                                <div class="col-md-12 " style="margin-top:20px;">
                                    <button type="submit p-1" class="btn"
                                        style="width: 250px;background: #393186;color: white;border-radius: 10px; height:44px;font-size: 16px; ">
                                        {{ __('REGISTER') }}
                                    </button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>

    {{--  <script>
        document.getElementById('image').addEventListener('change', function(event) {
            const fileName = event.target.files[0] ? event.target.files[0].name : "Add Photo";
            document.querySelector('.custom-file-text').textContent = fileName;
        });
    </script>  --}}
    <script>
        document.getElementById('image').addEventListener('change', function(event) {
            const file = event.target.files[0];

            if (file) {
                const allowedTypes = ['image/jpeg', 'image/png', 'image/gif', 'image/webp'];
                if (!allowedTypes.includes(file.type)) {
                    alert('Please upload a valid image file (JPG, PNG, GIF, or WEBP).');
                    event.target.value = ''; // Clear invalid file
                    document.querySelector('.custom-file-text').textContent = 'Add Photo'; // Reset text
                    return;
                }

                // If valid image, update the file name text
                const fileName = file.name;
                document.querySelector('.custom-file-text').textContent = fileName;
            } else {
                // If no file selected, keep default text
                document.querySelector('.custom-file-text').textContent = 'Add Photo';
            }
        });
    </script>

    <script>
        document.querySelector('form').addEventListener('submit', function(e) {
            const linkInput = document.getElementById('link');
            const link = linkInput.value.trim();

            // Regex to match domain or full URL
            const linkPattern = /^(https?:\/\/)?(www\.)?[a-zA-Z0-9-]+\.[a-zA-Z]{2,}(\/\S*)?$/;

            if (link !== '' && !linkPattern.test(link)) {
                e.preventDefault(); // Stop form from submitting
                alert('Please enter a valid website link (e.g., techmetsolutions.in or https://example.com)');
                linkInput.focus();
            }
        });
    </script>

    <script>
        const dobInput = document.getElementById('dob');
        const errorSpan = document.getElementById('dob-error');

        dobInput.addEventListener('input', function() {
            // Block all characters except digits and /
            this.value = this.value.replace(/[^0-9/]/g, '');
            errorSpan.textContent = ''; // clear old errors
        });

        dobInput.addEventListener('blur', function() {
            const dobValue = this.value;
            const datePattern = /^(0[1-9]|[12][0-9]|3[01])\/(0[1-9]|1[0-2])\/\d{4}$/;

            if (!datePattern.test(dobValue)) {
                errorSpan.textContent = "Invalid date format (dd/mm/yyyy)";
                return;
            }

            const [day, month, year] = dobValue.split('/');
            const inputDate = new Date(`${year}-${month}-${day}`);
            const today = new Date();

            // Check for invalid real-world dates like 31/02/2023
            if (inputDate.getDate() != parseInt(day) ||
                inputDate.getMonth() + 1 != parseInt(month) ||
                inputDate.getFullYear() != parseInt(year)) {
                errorSpan.textContent = "Invalid calendar date";
                return;
            }

            // Remove time part from today for comparison
            today.setHours(0, 0, 0, 0);

            if (inputDate >= today) {
                errorSpan.textContent = "Date of birth must be in the past";
            }
        });
    </script>
@endsection
