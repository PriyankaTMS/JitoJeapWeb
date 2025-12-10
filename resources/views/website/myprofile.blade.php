{{-- @extends('website.layout.main')

@section('content')
    <!-- Media Queries for Responsive Design -->
    <style>
        @media screen and (max-width: 768px) {
            .profile-container {
                flex-direction: column;
                padding-left: 0;
                /* Reset padding for mobile */
                margin-bottom: 20px;
                /* Space between cards */
                margin-top: 20px;
                /* Add a top margin for mobile */
            }

            .sessions {
                flex-direction: column;
                /* Stack items vertically */
                align-items: flex-start;
                /* Align items to the start */
                margin: 0;
                /* Reset margin */
            }

            .sessions div {
                width: 100%;
                /* Make each session div full width */
                margin-bottom: 10px;
                /* Space between items */
                text-align: center;
                /* Center text within each div */
            }

            .col-lg-6 {
                flex: 0 0 100%;
                /* Full width on small screens */
            }

            .edit-button {
                width: 100%;
                /* Full width on mobile */
                margin-top: 10px;
                /* Space above the button */
            }
        }

        .arrow {
            border: solid black;
            border-width: 0 2.5px 2.5px 0;
            /* Arrow styling */
            display: inline-block;
            padding: 5px;
            margin-left: 10px;
            /* Arrow margin */
        }

        .right {
            transform: rotate(-45deg);
        }

        @media screen and (max-width: 576px) {
            h4 {
                font-size: 18px;
                /* Smaller heading */
            }

            .sessions div h5 {
                font-size: 12px;
                /* Smaller subheadings */
            }
        }

        .edit-button {
            padding: 5px 10px;
            /* Adjust padding as needed */
            margin-left: 20px;
            margin-bottom: 0;
            display: inline-flex;
            align-items: center;
        }
    </style>
    <section class="breadcrumbs-custom bg-image context-dark"
        style="background-image: url({{ asset('website/images/mypro.png') }});background-repeat: no-repeat; display: flex; justify-content: center; align-items: center;">
        <div class="container" style="display: flex; justify-content: center; align-items: center;">
            <img src="{{ asset('website/images/bninmd.png') }}" alt="BNI Logo" style="display: flex;">
        </div>
    </section>
    <section class="section section-lg bg-default" style="font-family: Poppins">
        <div class="container">
            <div>
                <h4>
                    <span
                        style="display: inline-flex; justify-content: center; align-items: center; width: 40px; height: 40px; border: 1px solid black; border-radius: 50%; text-align: center;">
                        <a href="{{ route('index') }}"><i class="fa fa-arrow-left"
                                style="font-size: 20px; color: black;"></i></a>
                    </span>
                    PROFILE
                </h4>
            </div>
            <div class="container profile-container" style="display: flex; flex-wrap: wrap; padding: 20px;">
                <!-- Profile and Contact (col-6) -->
                <div class="col-lg-6 col-sm-12 profile-section" style="flex: 0 0 66.66%; padding-right: 15px;">
                    <div style="text-align: left;">
                        <div class="container"
                            style="position: relative; display: flex; justify-content: center; align-items: center;">
                            <!-- Frame Image -->
                            <img src="{{ asset('website/images/frame.png') }}" alt="BNI Logo"
                                style="height: 70px; width: 120%;">
                            <!-- Profile Image (positioned on top of the frame) -->
                            <img src="{{ Auth::user()->image ? asset('roaster/' . Auth::user()->image) : asset('website/images/defaultuser.png') }}"
                                alt="Profile Picture"
                                style="position: absolute; width: 90px; margin-top: 50px; border-radius: 50%; top: 50%; transform: translateY(-50%);">
                        </div>
                        <!-- Profile Info -->
                        <div>
                            <div
                                style="display: flex; align-items: center; justify-content: center; margin-top: 60px; flex-wrap: wrap;">
                                <h3
                                    style="font-size: 24px; font-weight: bold; color: #1f1f1f; margin: 0; flex: 1; text-align: center; margin-top: 10px">
                                    {{ Auth::user()->name }}
                                </h3>

                            </div>
                            <p style="text-align: center; height: 20px; margin-top: 5px;">{{ Auth::user()->role }}</p>
                            <div style="margin-top: 10px; font-size: 14px; color:#1f1f1f; text-align:left;">
                                <b>Company : <span>{{ Auth::user()->company }}</span></b>
                            </div>
                            <div style="margin-top: 10px; font-size: 14px; color:#1f1f1f; text-align:left;">
                                <b>Power Team : <span>{{ Auth::user()->powerteam->name ?? '' }}</span></b>
                            </div>
                            <div style="margin-top: 10px; font-size: 14px; color:#1f1f1f; text-align:left;">
                                <b>Category : <span>{{ Auth::user()->categories->name ?? '' }}</span></b>
                            </div>
                            <div style="margin-top: 10px; font-size: 14px; color:#1f1f1f; text-align:left;">
                                <b>Chapter Name : <span>{{ Auth::user()->chapters->name ?? '' }}</span></b>
                            </div>
                            <div style="margin-top: 10px; font-size: 14px; color:#1f1f1f; text-align:left;">
                                <b>Chapter Designation : <span>{{ Auth::user()->chap_des }}</span></b>
                            </div>
                        </div>
                    </div>
                    <!-- Contact Info -->
                    <div class="contact-section" style="margin-top: 20px;">
                        <h4 style="color: #D11C2F;">Contact</h4>
                        <p style="color: #1F1F1F;">
                            <i class='fa fa-map-marker' style="color: #1f1f1f; font-size: 20px;"></i>
                            &nbsp; {{ Auth::user()->addr }}
                        </p>
                        <p style="color: #1F1F1F;"><i class="fa fa-phone" style="font-size:20px;"></i>&nbsp;
                            {{ Auth::user()->mobile }}</p>
                        <p style="color: #1F1F1F;"><i class="fa fa-envelope" style="font-size:20px;"></i>&nbsp; Email : <a
                                href="mailto:technetsolutions@gmail.com">{{ Auth::user()->email }}</a></p>
                        <p style="color: #1F1F1F;"><i class='fas fa-globe' style='font-size:20px'></i>&nbsp; Website : <a
                                href="http://technetsolutions.com">{{ Auth::user()->link }}</a></p>
                    </div>
                </div>
                <!-- 1-2-1 Sessions and Form Fields (col-6) -->
                <div class="col-lg-6 col-sm-12 card profile-container" style="padding-left: 15px; font-family: Poppins;">
                    <h4 style="color: #1F1F1F;margin-top:20px;">1-2-1-Sessions</h4>


                    <form action="{{ route('editmyprofile', Auth::user()->id) }}" method="POST"
                        enctype="multipart/form-data" style="display: flex; flex-direction: column;margin-top:15px;">
                        @csrf

                        <div style="margin-bottom: 10px;">
                            <label for="branches" style="color: #1f1f1f;">Branch :</label>
                            <input type="text" id="branches" name="branches"
                                style="width: 100%; padding: 5px; border: 1px solid #B8B8B8; border-radius: 8px;"
                                value="{{ Auth::user()->branches }}">
                        </div>
                        <div style="margin-bottom: 10px;">
                            <label for="exp" style="color: #1f1f1f;">Experience :</label>
                            <input type="text" id="exp" name="exp"
                                style="width: 100%; padding: 5px; border: 1px solid #B8B8B8; border-radius: 8px;"
                                value="{{ Auth::user()->exp }}">
                        </div>
                        <div style="margin-bottom: 10px;">
                            <label for="usp" style="color: #1f1f1f;">USP :</label>
                            <textarea id="usp" name="usp"
                                style="width: 100%; padding: 5px; border: 1px solid #B8B8B8; border-radius: 8px;" rows="4">{{ Auth::user()->usp }}</textarea>
                        </div>
                        <div style="margin-bottom: 10px;">
                            <label for="com_brief" style="color: #1f1f1f;">Company Brief :</label>
                            <textarea id="com_brief" name="com_brief"
                                style="width: 100%; padding: 5px; border: 1px solid #B8B8B8; border-radius: 8px;" rows="4"> {{ Auth::user()->com_brief }}</textarea>
                        </div>
                        <div style="margin-bottom: 10px;">
                            <label for="image" style="color: #1f1f1f;">Add Photo :</label>
                            <input type="file" name="image" id="image" class="form-control" style="width:100%;">
                        </div>
                        <!-- Complete Profile Button -->
                        <div style="text-align: center;">
                            <button type="submit"
                                style="padding: 5px 8px; background: #3E54A5; color: white; border-radius: 8px; cursor: pointer; width: 149px; border: none;margin-bottom:10px;">
                                Complete Profile
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
@endsection --}}


















@extends('website.layout.main')

@section('content')

      <!-- Inline responsive styling -->
<style>
    @media (max-width: 992px) {
      .profile-section {
        width: 95% !important;
        padding-left: 20px !important;
        margin-top: 0px !important; /* or 0 if you want to remove completely */
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

    <section class="container desktop-margin-top" >
        <div style="display: flex; align-items: center; flex-direction: row; gap: 15px;">
            {{-- <div style="width: 3px; height: 40px; background-color: #E31E25;"></div> --}}
            <a href="/index" style="color: #E31E25; text-decoration: none;">
              <span class="material-icons-outlined" style="font-size: 28px; vertical-align: middle;">arrow_back</span>
            </a>
            <h2
                style="font-size: 36px; font-weight: bold; font-family: 'Times New Roman', Times, serif; margin: 0;">
                <span style="color: #FFD800;">PROFILE</span> <span style="color: #393186;">details</span>
            </h2>
        </div>
    </section>
  <!-- Profile Section -->
  <section class="profile-section" style="position: relative; width: 900px; font-family: Arial, sans-serif;">


      <!-- Image Box -->

      <div class="profile-img" style="position: absolute; top: 40px; left: -120px; width: 180px; height: 160px; border-radius: 15px; overflow: hidden; z-index: 2;">
        <img src="{{ Auth::user()->image ? asset('roaster/' . Auth::user()->image) : asset('website/images/defaultuser.png') }}" alt="Profile Image" style="width: 100%; height: 100%; object-fit: cover;">
      </div>


      <!-- Contact Info Box -->
      <div class="contact-box" style="position: absolute; top: 234px; left: -153px; width: 286px; background-color: #FFD800; border-radius: 20px; padding: 20px; z-index: 1; box-shadow: 0 4px 8px rgba(0,0,0,0.1); font-family: Arial; color: #5B5B5B;">
          <p style="font-size: 22px; margin-bottom: 10px;">{{ Auth::user()->name }}</p>
          <p style="margin: 5px 0;">
            <i class="fa fa-phone" style="margin-right: 8px;"></i>
            {{ Auth::user()->mobile }}
          </p>

          <p style="margin: 5px 0;">
            <i class="fa fa-envelope" style="margin-right: 8px;"></i>
            {{ Auth::user()->email }}
          </p>

          <p style="margin: 5px 0;">
            <i class="fa fa-globe" style="margin-right: 8px;"></i>
            {{ Auth::user()->link }}
          </p>

      </div>

      <!-- Main Info Box -->
      <div class="main-info-box" style="background-color: #393186; color: white; border-radius: 20px; padding: 40px 20px 60px 155px; box-shadow: 0 5px 10px rgba(0,0,0,0.2);">
          <div class="main-info-grid" style="display: grid; grid-template-columns: 1fr 1fr; gap: 15px; margin-bottom: 15px;">
              <div style="background-color: #f1f1f1; color: #000; padding: 10px; border-radius: 10px;">ZONE: {{ Auth::user()->zone->name ?? 'N/A'}} </div>
              <div style="background-color: #f1f1f1; color: #000; padding: 10px; border-radius: 10px;">CHAPTER: {{ Auth::user()->chapters->name ?? 'N/A' }} </div>
              <div style="background-color: #f1f1f1; color: #000; padding: 10px; border-radius: 10px;">MEMBERSHIP TYPE: {{ Auth::user()->membership->name ?? 'N/A' }} </div>
              <div style="background-color: #f1f1f1; color: #000; padding: 10px; border-radius: 10px;">DESIGNATION: {{ Auth::user()->designation->name ?? 'N/A' }} </div>
              <div style="background-color: #f1f1f1; color: #000; padding: 10px; border-radius: 10px;">BUSINESS CATEGORY: {{ Auth::user()->categories->name ?? 'N/A' }}</div>
              <div style="background-color: #f1f1f1; color: #000; padding: 10px; border-radius: 10px;">Company NAME: {{Auth::user()->company}}</div>
          </div>
          <div style="background-color: #f1f1f1; color: #000; padding: 10px; border-radius: 10px; margin-bottom: 15px;">
              COMPANY BRIEF: Wholesale & Retails of Electronics and Home appliances for Nashik District as well as North Maharashtra.
          </div>
          <div style="background-color: #f1f1f1; color: #000; padding: 10px; border-radius: 10px; padding-bottom: 50px;">
              USP: {{Auth::user()->usp}}
          </div>
      </div>

      <!-- Book Button -->
      {{-- @auth


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
  </section>





    <div class="modal fade" id="sessionModal" tabindex="-1" aria-labelledby="sessionModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <h4 id="delegate-name-time" class="p-3" style=" font-family: Poppins; color: black;">
                    {{ Auth::user()->name }}</h4>
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
                    <input type="hidden" name="rost_id" id="rost_id_input" value="{{ Auth::user()->id }}">
                    <input type="hidden" name="date" id="date_input" value="">
                    <div class="row px-1 pb-2 m-0" id="time_slot">
                    </div>
                </form>
            </div>
        </div>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <script type="text/javascript">
        const jsonRoasters = @json(Auth::user());

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
