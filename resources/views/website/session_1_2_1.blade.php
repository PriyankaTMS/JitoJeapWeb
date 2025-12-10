@extends('website.layout.master')
@section('content')
    <section class="section " style="margin: 30px 0px;">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    {{-- <ul class="list-xl">
                        <li> --}}

                    <h2 style="font-size: 36px; font-weight: bold; font-family: 'Times New Roman', Times, serif; margin: 0;">
                        <a href="{{ route('index') }}"><i class='fas fa-angle-left'
                                style='font-size:43px;color:#E31E25'></i></a>
                        <span style="color: #FFD800;">Rom</span> <span style="color: #393186;">directory</span>

                    </h2>
                    {{-- </li>
                    </ul> --}}
                </div>
            </div>
        </div>
    </section>

    <section class="breadcrumbs-custom bg-image context-dark"
        style="background-image: url({{ asset('website/images/Banner06.png') }});
           background-repeat: no-repeat;
           background-size: cover;
           display: flex;
           justify-content: center;
           align-items: center;

           height: 500px;
           ">



    </section>



    <style>
        .custom-search-container {
            background: #fff;

            border-radius: 50px;
            padding: 8px;
            display: flex;
            justify-content: center;
            {{--  border-color: #393186 !important;  --}}
        }

        .search-form {
            border: 2px solid #393186;
            border-radius: 50px;
            padding: 8px 20px;
            display: flex;
            align-items: center;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
            width: 100%;
        }

        .search-icon {
            font-size: 20px;
            color: #333;
            margin-right: 10px;
        }

        .search-input {
            border: none;
            outline: none;
            font-size: 16px;
            background: transparent;
            width: 100%;
        }
    </style>

    <div class="container position-relative" style="margin-top: -60px; z-index: 2;">
        <form action="{{ route('delegate.profile') }}" method="GET">
            <div class="row justify-content-center">
                <div class="col-8 col-md-10 col-lg-10"
                    style="background: linear-gradient(to right, #FFD800 10%, #393186 10%);
                        border-radius: 15px; padding: 20px; box-shadow: 0 8px 20px rgba(0,0,0,0.2);">
                    <div class="row justify-content-center">

                        {{--  <!-- Chapter Dropdown -->
                        <div class="col-lg-4 col-md-5 mb-3 mb-md-0 px-2">
                            <div class="custom-search-container">
                                <form action="" method="GET" class="search-form">
                                    <span class="search-icon">&#128269;</span> <!-- Unicode search icon -->
                                    <input type="text" name="query" class="search-input" placeholder="Search here"
                                        value="{{ request('query') }}">
                                </form>
                            </div>
                        </div>  --}}





                        <!-- Chapter Dropdown -->
                        <div class="col-lg-6 col-md-5 mb-3 mb-md-0 px-2">
                            <select name="cap_id" id="cap_id"
                                style="border-radius: 50px; height: 50px; font-size: 18px; padding: 10px; width: 100%; box-shadow: 0 2px 6px rgba(0,0,0,0.15);"
                                required>
                                <option value="">Select Chapter</option>
                                @foreach ($chapters as $chapter)
                                    <option value="{{ $chapter->id }}">{{ $chapter->name }}</option>
                                @endforeach
                            </select>
                        </div>

                        <!-- Delegate Dropdown -->
                        <div class="col-lg-6 col-md-5 px-2">
                            <select name="rost_id" id="rost_id"
                                style="border-radius: 50px; height: 50px; font-size: 18px; padding: 10px; width: 100%; box-shadow: 0 2px 6px rgba(0,0,0,0.15);"
                                required>
                                <option value="">Select Delegate</option>
                            </select>
                        </div>

                    </div>

                </div>
                <div class="text-center mt-3">
                    <button id="showButton" class="btn  px-4 py-2 mb-2"
                        style="border-radius: 10px; display: none;background-color: #393186 !important;color:#ffff;">
                        Show
                    </button>
                </div>
            </div>
        </form>
    </div>



    <div class="container">
        <div class="row ">
            <div class="col-lg-7 col-sm-6">
                <h2 style="font-size: 36px; font-weight: bold; font-family: 'Times New Roman', Times, serif; margin: 0;">
                    <a href="{{ route('index') }}"><i class='fas fa-angle-left'
                            style='font-size:43px;color:#E31E25'></i></a>
                    <span style="color: #FFD800;">Our</span> <span style="color: #393186;">Delegates</span>

                </h2>
            </div>
            <!-- Chapter Dropdown -->
            <div class="col-lg-5  col-md-5 mb-3 mb-md-0 px-2">
                <div class="custom-search-container">
                    <form action="" method="GET" class="search-form">
                        <span class="search-icon">&#128269;</span> <!-- Unicode search icon -->
                        <input type="text" id="searchInput" name="query" class="search-input" placeholder="Search here"
                            value="{{ request('query') }}" style="">
                    </form>
                </div>
            </div>

        </div>
        <table id="delegateTable" class="table table-bordered mt-4 mb-4" style="border-color:#393186;font-family:Arial; ">
            <thead>
                <tr>
                    {{--  <th scope="col" style="background:#FFD800; color:#ffff;border-top-left-radius: 15px;">
                        Sr.No</th>  --}}
                    <th scope="col" style="background:#FFD800; color:#ffff; border-top-left-radius: 15px;">
                        Sr.No
                    </th>
                    <th scope="col" style="background:#393186; color:#ffff;">Name</th>
                    <th scope="col" style="background:#393186; color:#ffff;">Chapter</th>
                    <th scope="col" style="background:#393186; color:#ffff;">Business Category </th>
                    {{--  <th scope="col" style="background:#393186; color:#ffff;border-top-right-radius: 15px;">
                        Company Name
                    </th>  --}}
                    <th scope="col" style="background:#393186; color:#ffff; border-top-right-radius: 15px;">
                        Company Name
                    </th>
                </tr>
            </thead>
            <tbody>
                @foreach ($delegates as $list)
                    <tr style="font-family:Arial;">
                        <th scope="row">{{ $loop->index + 1 }}</th>
                        <td style="font-family:Arial;">
                            {{--  <a href="{{ route('delegate_profile') }}">{{ $list->name }}
                                </a>  --}}
                            <a href="{{ route('delegate.profile', ['rost_id' => $list->id]) }}">
                                <b
                                    style="text-decoration: underline; text-decoration-color: #FFD800;">{{ $list->name }}</b>
                            </a>
                        </td>
                        <td style="font-family:Arial;">{{ $list->chapters->name }}</td>
                        <td style="font-family:Arial;">{{ $list->categories->name }}</td>
                        <td style="font-family:Arial;">{{ $list->company }}</td>
                    </tr>
                @endforeach

                {{--  <tr>
                    <th scope="row">2</th>
                    <td>Jacob</td>
                    <td>Thornton</td>
                    <td>@fat</td>
                </tr>
                <tr>
                    <th scope="row">3</th>
                    <td colspan="2">Larry the Bird</td>
                    <td>@twitter</td>
                </tr>  --}}
            </tbody>
        </table>
    </div>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const searchInput = document.getElementById('searchInput');
            const table = document.getElementById('delegateTable');
            const rows = table.querySelectorAll('tbody tr');

            searchInput.addEventListener('keyup', function() {
                const filter = searchInput.value.toLowerCase();

                rows.forEach(row => {
                    const cells = row.querySelectorAll('td, th');
                    let match = false;

                    cells.forEach(cell => {
                        if (cell.textContent.toLowerCase().includes(filter)) {
                            match = true;
                        }
                    });

                    row.style.display = match ? '' : 'none';
                });
            });
        });
    </script>



    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const ptSelect = document.getElementById('cap_id');
            const rostSelect = document.getElementById('rost_id');
            const showButton = document.getElementById('showButton');

            function toggleButton() {
                if (ptSelect.value !== '' && rostSelect.value !== '') {
                    showButton.style.display = 'inline-block';
                } else {
                    showButton.style.display = 'none';
                }
            }

            ptSelect.addEventListener('change', toggleButton);
            rostSelect.addEventListener('change', toggleButton);
        });
    </script>





    @if (Session::has('failed'))
        <div class="alert alert-dismissible alert-danger fade show decodeme" role="alert">
            <strong>Error!</strong> {{ Session::get('failed') }}.
        </div>
    @endif




    {{--  <section class="section section-md bg-default" id="delegate-details-section" style="display:none;">
        <div class="container">
            <div class="row">
                <div class="col-12"
                    style="background-image: url('{{ asset('website/images/frame_8.png') }}'); background-size: cover; background-position: center; background-repeat: no-repeat; padding: 10px 0;border-radius:15px;">
                    <div class="row justify-content-center align-items-stretch">
                        <div class="col-lg-2 col-md-3 mb-3 mt-3 d-flex justify-content-center align-items-center">
                            <img class="img-fluid" id="delegate-image" src="{{ asset('website/images/profile.png') }}"
                                alt="profile image" style="height: 130px; width: 130px; border-radius: 50%;">
                        </div>
                        <div
                            class="col-lg-4 col-md-6 mb-4 d-flex flex-column justify-content-center align-items-center align-items-md-start">
                            <h1 id="delegate-name" class="mt-3">Mr. John Doe</h1> <!-- Removed extra margin -->
                            <p id="delegate-company" style="margin-bottom: 10px;">ABC Company</p> <!-- Adjusted margin -->
                            <div class="mt-0 d-flex flex-column flex-md-row justify-content-center">
                                <a href="#" id="view-profile" class="btn mb-2 mb-md-0 me-0 me-md-2"
                                    style="color: white; border: 2px solid white; background-color: transparent; padding: 10px; width: 170px; height: 41px; text-decoration: none; display: flex; align-items: center; justify-content: center;border-radius:5px;">
                                    View Profile
                                </a>
                                <a href="#" id="book-session" class="btn btn-danger" data-bs-toggle="modal"
                                    data-bs-target="#sessionModal"
                                    style="padding: 10px; width: 170px; height: 41px; display: flex; align-items: center; justify-content: center; border-radius: 5px;">
                                    Book 1-2-1
                                </a>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div class="modal fade" id="sessionModal" tabindex="-1" aria-labelledby="sessionModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <h4 id="delegate-name-time" class="p-3" style=" font-family: Poppins; color: black;">Rohit Jain</h4>
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
                    <input type="hidden" name="rost_id" id="rost_id_input" value="">
                    <input type="hidden" name="date" id="date_input" value="">
                    <div class="row px-1 pb-2 m-0" id="time_slot">
                    </div>
                </form>
            </div>
        </div>
    </div>  --}}


    <script>
        // All delegates (Laravel blade passing PHP array to JS)
        const allDelegates = @json($delegates);

        const chapterSelect = document.getElementById('cap_id');
        const delegateSelect = document.getElementById('rost_id');

        chapterSelect.addEventListener('change', function() {
            const selectedChapterId = this.value;

            // Clear old delegates
            delegateSelect.innerHTML = '<option value="">Select Delegate</option>';

            if (selectedChapterId) {
                // Filter delegates for this chapter
                const filteredDelegates = allDelegates.filter(d => d.cap_id == selectedChapterId);

                // Populate delegate dropdown
                filteredDelegates.forEach(delegate => {
                    const option = document.createElement('option');
                    option.value = delegate.id;
                    option.textContent = delegate.name;
                    delegateSelect.appendChild(option);
                });
            }
        });
    </script>
@endsection
