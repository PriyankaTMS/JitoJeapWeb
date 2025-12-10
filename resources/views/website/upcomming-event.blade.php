@extends('website.layout.master')
@section('content')
    <style>
        .card-container {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            gap: 20px;
            padding: 60px 20px;
        }

        .event-card {
            flex: 1 1 calc(100% - 40px);
            max-width: 320px;
            height: 380px;
            background-color: #fff;
            border-radius: 12px;
            overflow: hidden;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
            display: flex;
            flex-direction: column;
        }

        .event-card img {
            width: 100%;
            height: 200px;
            object-fit: cover;
        }

        .event-card-body {
            padding: 15px;
            display: flex;
            flex-direction: column;
            justify-content: space-between;
            flex-grow: 1;
        }

        .event-title {
            font-size: 1.1rem;
            font-weight: bold;
            color: #393186;
            text-align: center;
            margin-bottom: 8px;
        }

        .event-description {
            font-size: 0.9rem;
            color: #555;
            text-align: center;
            margin-bottom: 10px;
        }

        .event-info {
            font-size: 0.85rem;
            color: #666;
            text-align: center;
            margin-bottom: 6px;
        }

        .event-footer {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-top: auto;
        }

        .event-date {
            font-size: 0.8rem;
            color: #444;
        }

        .read-more-btn {
            background-color: #393186;
            color: #fff;
            padding: 4px 10px;
            border-radius: 12px;
            font-size: 0.75rem;
            text-decoration: none;
            transition: background-color 0.3s;
        }

        .read-more-btn:hover {
            background-color: #2f286e;
        }

        @media (min-width: 576px) {
            .event-card {
                flex: 1 1 calc(50% - 40px);
            }
        }

        @media (min-width: 992px) {
            .event-card {
                flex: 1 1 calc(25% - 40px);
            }
        }
    </style>


    <section class="section desktop-margin-top">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">


                    <h2 style="font-size: 36px; font-weight: bold; font-family: 'Times New Roman', Times, serif; margin: 0;">
                        <a href="{{ route('index') }}"><i class='fas fa-angle-left'
                                style='font-size:43px;color:#E31E25'></i></a>
                        <span style="color: #FFD800;">UPCOMING</span> <span style="color: #393186;">EVENTS</span>

                    </h2>
                    {{-- </li>
                </ul> --}}
                </div>
            </div>
        </div>
    </section>

    <style>
        /* Custom style for desktop view only */
        @media (min-width: 768px) {
            .reset-desktop-margin {
                margin-right: 293px;
            }
        }

        /* Custom style for mobile view */
        @media (max-width: 767px) {
            .reset-mobile-center {
                justify-content: center;
                padding-left: 15px;
                padding-right: 15px;
            }
        }

        @media (min-width: 993px) {
            .desktop-margin-top {
                margin-top: 300px;
            }
        }
    </style>

    <div class="col-12 col-md-10 col-lg-8"
        style="background: linear-gradient(to right, #FFD800 10%, #393186 10%);
           border-radius: 15px; padding: 20px;
           box-shadow: 0 8px 20px rgba(0,0,0,0.2);
           max-width: 1210px; margin: auto; margin-top: 20px;">

        <div class="d-flex flex-wrap align-items-center reset-mobile-center ">
            <!-- All Filter -->
            {{--  <div class="mb-2 me-2 ">
                <select name="all_filter" id="all_filter"
                    style="border-radius: 50px; height: 46px; width: 347px;
                       font-size: 18px; padding: 10px;
                       box-shadow: 0 2px 6px rgba(0,0,0,0.15); padding-left: 40px;">
                    <option value="">-All-</option>
                    <option value="bridal">THE BRIDAL STORY</option>
                    <option value="option2">Option 2</option>
                </select>
            </div>  --}}
            {{--  <div class="text-center my-4 mb-2 me-2 ">
                <select id="placeFilter" class="form-control"
                    style="width: 500px;height:48px;border-radius:25px; margin: 0 auto;">
                    <option value="all">All Cities</option>
                    @foreach ($upcomings->unique('place') as $upcoming)
                        <option value="{{ $upcoming->place }}">{{ $upcoming->place }}</option>
                    @endforeach
                </select>
            </div>  --}}


            <style>
                .custom-select-wrapper {
                    position: relative;
                    display: inline-block;
                    width: 500px;
                    margin: 0 auto;
                }

                .custom-select {
                    appearance: none;
                    -webkit-appearance: none;
                    -moz-appearance: none;
                    background-color: white;
                    border: 1px solid #ccc;
                    height: 48px;
                    width: 100%;
                    border-radius: 25px;
                    padding: 0 20px;
                    font-size: 16px;
                    color: #333;
                    cursor: pointer;
                }

                .custom-select-arrow {
                    position: absolute;
                    top: 50%;
                    right: 20px;
                    transform: translateY(-50%);
                    pointer-events: none;
                    font-size: 18px;
                    color: #555;
                }

                /* Responsive design for small devices */
                @media (max-width: 575.98px) {
                    .custom-select-wrapper {
                        width: 350px;
                        padding: 0 15px;
                        /* optional padding */
                    }
                }
            </style>


            <div class="text-center my-4 mb-2 me-2">
                <div class="custom-select-wrapper">
                    <select id="placeFilter" class="custom-select">
                        <option value="all">All Cities</option>
                        @foreach ($upcomings->unique('place') as $upcoming)
                            <option value="{{ $upcoming->place }}">{{ $upcoming->place }}</option>
                        @endforeach
                    </select>
                </div>
            </div>



            <!-- Reset Button -->
            <div class="mb-2 d-flex">
                <button type="button" id="resetBtn"
                    style="border-radius: 25px; height: 46px; width: 168px;
                       padding: 4px; font-size: 22px;
                       background-color: #f8f9fa; color:#393186; border: none;">
                    RESET
                </button>
            </div>
        </div>
    </div>
    {{--  <div class="col-lg-10 offset-lg-1 ">
        <section class="card-container">
            @foreach ($upcomings as $upcoming)

            <div class="event-card" data-category="bridal" data-month="april">
                <img src="{{ asset('Upcomings/'.$upcoming->image) }}" alt="Event Image">
                <div class="event-card-body">
                    <div>
                        <h2 class="event-title" style="font-family: Arial;font-size:16px;">{{ $upcoming->title}}</h2>
                        <p class="event-description" style="color:#393186 ;font-family:Arial;font-size:12px; ">
                            {!! $upcoming->description !!}
                        </p>
                        <div class="event-info"><i class="fa fa-map-marker" style="color: #393186;"></i>
                            {{$upcoming->place}}</div>
                    </div>
                    <div class="event-footer">
                        <div class="event-date"><i class="fa fa-calendar" style="color: #393186;"></i>
                            {{$upcoming->date}}</div>
                        <a href="#" class="read-more-btn">Read more</a>
                    </div>
                </div>
            </div>

            @endforeach
        </section>
    </div>  --}}
    <div class="col-lg-10 offset-lg-1">
        <section class="card-container" id="eventList">
            @foreach ($upcomings as $upcoming)
                <div class="event-card" data-place="{{ $upcoming->place }}">
                    <img src="{{ asset('Upcomings/' . $upcoming->image) }}" alt="Event Image">
                    <div class="event-card-body">
                        <div>
                            <h2 class="event-title" style="font-family: Arial;font-size:16px;">{{ $upcoming->title }}</h2>
                            <p class="event-description" style="color:#393186 ;font-family:Arial;font-size:12px;">
                                {!! $upcoming->description !!}
                            </p>
                            <div class="event-info"><i class="fa fa-map-marker" style="color: #393186;"></i>
                                {{ $upcoming->place }}
                            </div>
                        </div>
                        <div class="event-footer">
                            <div class="event-date"><i class="fa fa-calendar" style="color: #393186;"></i>
                                {{ $upcoming->date }}
                            </div>
                            <a href="#" class="read-more-btn">Read more</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </section>
    </div>

    <script>
        document.getElementById('placeFilter').addEventListener('change', function() {
            const selectedPlace = this.value.toLowerCase();
            const cards = document.querySelectorAll('.event-card');

            cards.forEach(card => {
                const cardPlace = card.getAttribute('data-place').toLowerCase();
                if (selectedPlace === 'all' || cardPlace === selectedPlace) {
                    card.style.display = 'block';
                } else {
                    card.style.display = 'none';
                }
            });
        });
    </script>
@endsection
