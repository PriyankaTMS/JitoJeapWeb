@extends('website.layout.main')

@section('content')
    {{-- <section class="breadcrumbs-custom bg-image context-dark"
        style="background-image: url({{ asset('website/images/1-2-1-pro.png') }});background-repeat: no-repeat; display: flex; justify-content: center; align-items: center;">
        <div class="container" style="display: flex; justify-content: center; align-items: center;">
            <img src="{{ asset('website/images/bninmd.png') }}" alt="BNI Logo" style="display: flex;">
        </div>
    </section> --}}

    {{-- <section class="section section-lg bg-default" style="font-family: Poppins; margin-top: 150px;">
        <div class="container">
            <h4>
                <span
                    style="display: inline-flex; justify-content: center; align-items: center; width: 40px;
                    height: 40px; border: 1px solid #1f1f1f; border-radius: 50%; text-align: center;">
                    <a href="{{ route('session_1_2_1') }}"><i class="fa fa-arrow-left"
                            style="font-size: 20px; color: black;"></i></a>
                </span>
                PROFILE
            </h4>
            <div class="row row-30 justify-content-center">
                <div class="col-lg-4 col-sm-6"
                    style="background-color: #1f1f1f; color: white; flex: 1; display: flex; flex-direction: column; align-items: center; text-align: center; height: 800px; position: relative; margin-bottom: 20px;">
                    <span
                        style="display: inline-block; width: 40px; height: 40px; solid #1f1f1f; border-radius: 50%; text-align: center; line-height: 50px; vertical-align: middle; margin-top:-25px;"></span>

                    <div>
                        <img src="{{ asset('roaster/' . $roaster->image) }}" alt="Profile Image"
                            style="width: 345px; height: 345px;">
                    </div>
                    <div style="text-align: left; margin-top: 30px;">
                        <h4 style="margin-bottom: 30px; color:#D11C2F;">CONTACT</h4>
                        <p style="margin-bottom: 10px;">
                            <i class='fa fa-map-marker' style="color: #fff !important;font-size:28px;"></i>
                            &nbsp; {{ $roaster->addr }}
                        </p>
                        <p style="margin-bottom: 10px;"><i class="fa fa-phone" style="font-size:28px;"></i>&nbsp;
                          <span style="color:white !important;">{{ $roaster->mobile }}</span>  </p>
                        <p style="margin-bottom: 10px;"><i class="fa fa-envelope" style="font-size:23px;"></i>&nbsp;
                          {{ $roaster->email }}</p>
                        <p style="margin-bottom: 5px;"><i class='fas fa-globe' style='font-size:25px'></i>
                            <a href="http://techmetsolutions.com" style="color: white; text-decoration: none;">&nbsp;
                                {{ $roaster->link }}</a>
                        </p>
                    </div>
                    @auth
                        <a href="#" id="book-session" class="btn btn-danger" data-bs-toggle="modal"
                            data-bs-target="#sessionModal"
                            style="width: 80%; height: 50px; text-align: center; border-radius: 8px; padding: 11px; font-size: 16px;margin-top:50px;">
                            Book 1-2-1
                        </a>
                    @else
                        <a href="{{ route('login') }}" class="btn btn-danger"
                            style="width: 80%; height: 50px; text-align: center; border-radius: 8px; padding: 11px; font-size: 16px;margin-top:50px;">
                            Book 1-2-1
                        </a>
                    @endauth
                </div>
                <div class="col-lg-8 col-sm-6" style="text-align: justify; line-height: 1.6; margin-top: 20px; ">

                    <div style="font-size: 24px; font-weight: bold; color: #1f1f1f;">{{ $roaster->name }}</div>


                    <div style="margin-top: 15px; color: #1f1f1f;">
                        <b>COMPANY :</b>&nbsp;&nbsp;{{ $roaster->company }}
                    </div>
                    <div style="margin-top: 15px; color: #1f1f1f;">
                        <b>CATEGORY :</b>&nbsp;&nbsp;{{ $roaster->categories->name }}
                    </div>
                    <div style="margin-top: 15px; color: #1f1f1f;">
                        <b>CHAPTER :</b>&nbsp;&nbsp;{{ $roaster->chapters->name }}
                    </div>
                    <div style="margin-top: 15px; color: #1f1f1f;">
                        <b>CHAPTER DESIGNATION :</b>&nbsp;&nbsp;{{ $roaster->chap_des }}
                    </div>
                    <div style="margin-top: 15px; color: #1f1f1f;">
                        <b>BRANCHES :</b>&nbsp;&nbsp;{{ $roaster->branches }}
                    </div>
                    <div style="margin-top: 15px; color: #1f1f1f;">
                        <b>EXPERIENCE :</b>&nbsp;&nbsp;{{ $roaster->exp }}
                    </div>

                    <h5 style="font-size: 20px; margin: 30px 0 10px; font-weight: bold;color: #1f1f1f;">COMPANY BRIEF</h5>
                    <p style="margin-bottom: 20px;color: #1f1f1f;">{!! $roaster->com_brief !!}
                    </p>



                    <h5 style="font-size: 20px; margin-bottom: 10px; font-weight: bold;color: #1f1f1f;">USP</h5>
                    <p style="margin-bottom: 15px;color: #1f1f1f;">Our USP as a software development
                        {!! $roaster->usp !!}</p>

                    <h5 style="font-size: 20px; margin-bottom: 10px; font-weight: bold;color: #1f1f1f;">DREAM
                        REFERRAL</h5>
                    <p style="margin-bottom: 15px;color: #1f1f1f;">{{ $roaster->dream_r }}</p>

                </div>

            </div>

        </div>
    </section> --}}
    {{-- <div >
        <div style="width: 3px; height: 40px; background-color: #E31E25; margin-bottom: 20px;"></div>
        <h2
            style="font-size: 36px; font-weight: bold; font-family: 'Times New Roman', Times, serif; margin: 0;">
            <span style="color: #FFD800;">PROFILE</span> <span style="color: #393186;">details</span>
        </h2>
    </div>

    <section style="position: relative; width: 900px; margin: 50px auto; font-family: Arial, sans-serif; margin-top: 200px;">
        <div style="display: flex; align-items: center; flex-direction: row; gap: 15px;">
            <div style="width: 3px; height: 40px; background-color: #E31E25;"></div>
            <h2
                style="font-size: 36px; font-weight: bold; font-family: 'Times New Roman', Times, serif; margin: 0;">
                <span style="color: #FFD800;">PROFILE</span> <span style="color: #393186;">details</span>
            </h2>
        </div>

        <!-- Image Box -->
        <div style="position: absolute; top: 82px; left: -130px; width: 180px; height: 160px; border-radius: 15px; overflow: hidden; z-index: 2;">
          <img src="{{ asset('roaster/' . $roaster->image) }}" alt="Profile Image" style="width: 100%; height: 100%; object-fit: cover;">
        </div>

        <!-- Contact Info Box -->
        <div style="position: absolute; top: 268px; left: -153px; width: 286px; background-color: #FFD800; border-radius: 20px; padding: 20px; z-index: 1; box-shadow: 0 4px 8px rgba(0,0,0,0.1);">
          <p style="font-weight: bold; font-size: 16px; margin-bottom: 10px;">{{ $roaster->name }}</p>
          <p style="margin: 5px 0;">{{ $roaster->addr }}</p>
          <p style="margin: 5px 0;">{{ $roaster->email }}</p>
          <p style="margin: 5px 0;">{{ $roaster->link }}</p>
        </div>

        <!-- Main Profile Info Box -->
        <div style="background-color: #393186; color: white; border-radius: 20px; padding: 40px 20px 60px 155px; box-shadow: 0 5px 10px rgba(0,0,0,0.2);">
          <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 15px; margin-bottom: 15px;">
            <div style="background-color: #f1f1f1; color: #000; padding: 10px; border-radius: 10px;">ZONE: {{ $roaster->company }}</div>
            <div style="background-color: #f1f1f1; color: #000; padding: 10px; border-radius: 10px;">CHAPTER: {{ $roaster->chapters->name }}</div>
            <div style="background-color: #f1f1f1; color: #000; padding: 10px; border-radius: 10px;">MEMBERSHIP TYPE: {{ $roaster->categories->name }}</div>
            <div style="background-color: #f1f1f1; color: #000; padding: 10px; border-radius: 10px;">DESIGNATION: {{ $roaster->designation_id }}</div>
            <div style="background-color: #f1f1f1; color: #000; padding: 10px; border-radius: 10px;">BUSINESS CATEGORY:</div>
            <div style="background-color: #f1f1f1; color: #000; padding: 10px; border-radius: 10px;">BUSINESS NAME:</div>
          </div>
          <div style="background-color: #f1f1f1; color: #000; padding: 10px; border-radius: 10px; margin-bottom: 15px;">
            COMPANY BRIEF: Wholesale & Retails of Electronics and Home appliances for Nashik District as well as North Maharashtra.
          </div>
          <div style="background-color: #f1f1f1; color: #000; padding: 10px; border-radius: 10px;">
            USP:
          </div>
        </div>

        <!-- Book Button -->

        @auth
                    <div style="text-align: center; margin-top: 20px;">
                        <a href="#" id="book-session"  data-bs-toggle="modal"
                            data-bs-target="#sessionModal"
                            style="background-color: #393186; color: white; padding: 10px 20px; border: none; border-radius: 10px; cursor: pointer;">
                            Book 1-2-1
                        </a>
                    </div>
                    @else
                    <div style="text-align: center; margin-top: 20px;">

                        <a href="{{ route('login') }}" class="btn btn-danger"
                        style="background-color: #393186; color: white; padding: 10px 20px; border: none; border-radius: 10px; cursor: pointer;">
                            Book 1-2-1
                        </a>
                    </div>
                    @endauth

      </section> --}}
    <!-- Inline responsive styling -->
    <style>
        @media (max-width: 992px) {
            .profile-section {
                width: 95% !important;
                padding-left: 20px !important;
                margin-top: 0px !important;
                /* or 0 if you want to remove completely */
            }

            .profile-img {
                position: static !important;
                margin: 0 auto 20px;
                display: block;
            }

            .contact-box {
                position: static !important;
                width: 100% !important;
                margin-bottom: 20px;
            }

            .main-info-box {
                padding-left: 20px !important;
            }

            .main-info-grid {
                grid-template-columns: 1fr !important;
            }

        }

        @media (min-width: 993px) {
            .profile-section {
                margin: 50px 380px;
            }
        }

        @media (min-width: 993px) {
            .desktop-margin-top {
                margin-top: 300px;
            }
        }
    </style>

    <section class="container desktop-margin-top">
        <div style="display: flex; align-items: center; flex-direction: row; gap: 15px;">
            {{-- <div style="width: 3px; height: 40px; background-color: #E31E25;"></div> --}}
            <a href="/index" style="color: #E31E25; text-decoration: none;">
                <span class="material-icons-outlined" style="font-size: 28px; vertical-align: middle;">arrow_back</span>
            </a>
            <h2 style="font-size: 36px; font-weight: bold; font-family: 'Times New Roman', Times, serif; margin: 0;">
                <span style="color: #FFD800;">PROFILE</span> <span style="color: #393186;">details</span>
            </h2>
        </div>
    </section>
    <!-- Profile Section -->
    <section class="profile-section" style="position: relative; width: 900px; font-family: Arial, sans-serif;">


        <!-- Image Box -->
        {{-- <div class="profile-img" style="position: absolute; top: 82px; left: -130px; width: 180px; height: 160px; border-radius: 15px; overflow: hidden; z-index: 2;">
          <img src="{{ asset('roaster/' . $roaster->image) }}" alt="Profile Image" style="width: 100%; height: 100%; object-fit: cover;">
      </div> --}}
        <div class="profile-img"
            style="position: absolute; top: 40px; left: -120px; width: 180px; height: 160px; border-radius: 15px; overflow: hidden; z-index: 2;">
            <img src="{{ asset('roaster/' . $roaster->image) }}" alt="Profile Image"
                style="width: 100%; height: 100%; object-fit: cover;">
        </div>


        <!-- Contact Info Box -->
        <div class="contact-box"
            style="position: absolute; top: 234px; left: -153px; width: 286px; background-color: #FFD800; border-radius: 20px; padding: 20px; z-index: 1; box-shadow: 0 4px 8px rgba(0,0,0,0.1); font-family: Arial; color: #5B5B5B;">
            <p style="font-size: 22px; margin-bottom: 10px;">{{ $roaster->name }}</p>
            <p style="margin: 5px 0;">
                <i class="fa fa-phone" style="margin-right: 8px;"></i>
                {{ $roaster->mobile }}
            </p>

            <p style="margin: 5px 0;">
                <i class="fa fa-envelope" style="margin-right: 8px;"></i>
                {{ $roaster->email }}
            </p>

            <p style="margin: 5px 0;">
                <i class="fa fa-globe" style="margin-right: 8px;"></i>
                {{ $roaster->link }}
            </p>

        </div>

        <!-- Main Info Box -->
        <div class="main-info-box"
            style="background-color: #393186; color: white; border-radius: 20px; padding: 40px 20px 60px 155px; box-shadow: 0 5px 10px rgba(0,0,0,0.2);">
            <div class="main-info-grid"
                style="display: grid; grid-template-columns: 1fr 1fr; gap: 15px; margin-bottom: 15px;">
                <div style="background-color: #f1f1f1; color: #000; padding: 10px; border-radius: 10px;">ZONE:
                    {{ $roaster->zone->name ?? 'N/A' }} </div>
                <div style="background-color: #f1f1f1; color: #000; padding: 10px; border-radius: 10px;">CHAPTER:
                    {{ $roaster->chapters->name ?? 'N/A' }} </div>
                <div style="background-color: #f1f1f1; color: #000; padding: 10px; border-radius: 10px;">MEMBERSHIP TYPE:
                    {{ $roaster->membership->name ?? 'N/A' }} </div>
                <div style="background-color: #f1f1f1; color: #000; padding: 10px; border-radius: 10px;">DESIGNATION:
                    {{ $roaster->designation->name ?? 'N/A' }} </div>
                <div style="background-color: #f1f1f1; color: #000; padding: 10px; border-radius: 10px;">BUSINESS CATEGORY:
                    {{ $roaster->categories->name ?? 'N/A' }}</div>
                <div style="background-color: #f1f1f1; color: #000; padding: 10px; border-radius: 10px;">COMPANY NAME:
                    {{ $roaster->company }}</div>
            </div>
            <div style="background-color: #f1f1f1; color: #000; padding: 10px; border-radius: 10px; margin-bottom: 15px;">
                COMPANY BRIEF: {!! $roaster->com_brief !!}
            </div>
            <div style="background-color: #f1f1f1; color: #000; padding: 10px; border-radius: 10px; padding-bottom: 50px;">
                USP: {{ $roaster->usp }}
            </div>
        </div>

        <!-- Book Button -->
        {{-- @auth
      <div style="text-align: center; margin-top: 20px;">
          <a href="#" id="book-session" data-bs-toggle="modal" data-bs-target="#sessionModal"
              style="background-color: #393186; color: white; padding: 10px 20px; border: none; border-radius: 10px; cursor: pointer;">
              Book 1-2-1
          </a>
      </div>

      <div style="text-align: center; margin-top: 20px;">
        <a href="{{route('session_1_2_1')}}"
            style="background-color: #393186; color: white; padding: 10px 20px; border: none; border-radius: 10px; cursor: pointer;">
            Back
        </a>
    </div>
      @else
      <div style="text-align: center; margin-top: 20px;">
          <a href="{{ route('login') }}" class="btn btn-danger"
              style="background-color: #393186; color: white; padding: 10px 20px; border: none; border-radius: 10px; cursor: pointer;">
              Book 1-2-1
          </a>
      </div>
      @endauth --}}
        <div style="text-align: center; margin-top: 20px;">
            <a href="{{ route('session_1_2_1') }}"
                style="background-color: #393186; color: white; padding: 10px 20px; border: none; border-radius: 10px; cursor: pointer;">
                Back
            </a>
        </div>
    </section>





    <div class="modal fade" id="sessionModal" tabindex="-1" aria-labelledby="sessionModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <h4 id="delegate-name-time" class="p-3" style=" font-family: Poppins; color: black;">
                    {{ $roaster->name }}</h4>
                <div style=" font-family: Poppins; color: white; background-color: red;" class="px-3 py-2">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        width="24" height="24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M6.75 3v2.25M17.25 3v2.25M3 18.75V7.5a2.25 2.25 0 0 1 2.25-2.25h13.5A2.25 2.25 0 0 1 21 7.5v11.25m-18 0A2.25 2.25 0 0 0 5.25 21h13.5A2.25 2.25 0 0 0 21 18.75m-18 0v-7.5A2.25 2.25 0 0 1 5.25 9h13.5A2.25 2.25 0 0 1 21 11.25v7.5" />
                    </svg>
                    <span class="mt-3 m-2" id="todays-date"></span>

                </div>
                <p class="text-dark px-3">Choose Time Slot</p>
                <form action="{{ route('book_session') }}" method="POST"
                    onsubmit="return confirm('Are you sure you want to book this session?')">
                    @csrf
                    <input type="hidden" name="rost_id" id="rost_id_input" value="{{ $roaster->id }}">
                    <input type="hidden" name="date" id="date_input" value="">
                    <div class="row px-1 pb-2 m-0" id="time_slot">
                    </div>
                </form>
            </div>
        </div>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <script type="text/javascript">
        const jsonRoasters = @json($roaster);

        $(document).ready(function() {
            updatePowerTeamSelect();
            updateTimeSlots();
            $("#date_input").val("28 September 2024");
            $("#todays-date").text("28 September 2024");
        });

        function updateTimeSlots() {
            var timeHtml = '';
            var startTime = 12 * 60; // Start time in minutes (12:00 PM)
            var endTime = 14 * 60 + 40; // End time in minutes (2:40 PM)
            var interval = 20; // Time interval in minutes

            for (var i = startTime; i <= endTime; i += interval) {
                const hour = Math.floor(i / 60) % 12 || 12;
                const minutes = i % 60;
                const period = i < 720 ? "AM" : "PM"; // 720 minutes = 12:00 PM

                let timeToShow = `${String(hour).padStart(2, '0')}:${String(minutes).padStart(2, '0')} ${period}`;

                timeHtml +=
                    `<button type="submit" name="time" value="${i}" style="border: none; background:none;  padding: 5px; cursor: pointer; font-family: Poppins;" class="col-4 text-center">
            <div class="text-center border border-0 bg-light rounded-card py-2 text-black">${timeToShow}</div>
        </button>`;
            }

            $('#time_slot').html(timeHtml);
        }

        function updatePowerTeamSelect() {
            var powerTeams = [];

            for (var i = 0; i < jsonRoasters.length; i++) {
                var pt = jsonRoasters[i].powerteam;
                let alreadyExists = false;
                if (pt == null) {
                    continue;
                }
                for (var j = 0; j < powerTeams.length; j++) {
                    if (powerTeams[j].name == pt.name) {
                        alreadyExists = true;
                        break;
                    }
                }
                if (!alreadyExists) {
                    powerTeams.push({
                        id: pt.id,
                        name: pt.name
                    });
                }
            }
            let powerTeamHtml = '<option value="">Select Power Team</option>';
            for (var i = 0; i < powerTeams.length; i++) {
                powerTeamHtml += '<option value="' + powerTeams[i].id + '">' + powerTeams[i].name +
                    '</option>';
            }
            $('#pt_id').html(powerTeamHtml);
        }
    </script>
@endsection
