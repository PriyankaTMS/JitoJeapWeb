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
                        <span style="color: #FFD800;">Completed</span> <span style="color: #393186;">EVENTS</span>

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
            <div class="mb-2 me-2 ">
                <select name="all_filter" id="all_filter"
                    style="border-radius: 50px; height: 46px; width: 347px;
                       font-size: 18px; padding: 10px;
                       box-shadow: 0 2px 6px rgba(0,0,0,0.15); padding-left: 40px;">
                    <option value="">-All-</option>
                    <option value="bridal">THE BRIDAL STORY</option>
                    <option value="option2">Option 2</option>
                </select>
            </div>

            <!-- Month Filter -->
            <div class="mb-2 me-2">
                <select name="month_filter" id="month_filter"
                    style="border-radius: 50px; height: 46px; width: 347px;
                       font-size: 18px; padding: 10px;
                       box-shadow: 0 2px 6px rgba(0,0,0,0.15); padding-left: 40px;">
                    <option value="">-Month-</option>
                    <option value="january">January</option>
                    <option value="february">February</option>
                    <option value="march">March</option>
                    <option value="april">April</option>
                    <option value="may">May</option>
                    <option value="june">June</option>
                    <option value="july">July</option>
                    <option value="august">August</option>
                    <option value="september">September</option>
                    <option value="october">October</option>
                    <option value="november">November</option>
                    <option value="december">December</option>
                    <!-- Add more months as needed -->
                </select>
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
    <div class="col-lg-10 offset-lg-1 ">
        <section class="card-container">
            @foreach ($completeds as $completed)


            <div class="event-card" data-category="bridal" data-month="april">
                <img src="{{ asset('Completed/'.$completed->image) }}" alt="Event Image">
                <div class="event-card-body">
                    <div>
                        <h2 class="event-title" style="font-family: Arial;font-size:16px;">{{$completed->title}}</h2>
                        <p class="event-description" style="color:#393186 ;font-family:Arial;font-size:12px; ">
                            {!! $completed->description !!}
                        </p>
                        <div class="event-info"><i class="fa fa-map-marker" style="color: #393186;"></i>
                            {{ $completed->place }}</div>
                    </div>
                    <div class="event-footer">
                        <div class="event-date"><i class="fa fa-calendar" style="color: #393186;"></i>
                            {{ $completed->date }}</div>
                        <a href="#" class="read-more-btn">Read more</a>
                    </div>
                </div>
            </div>

            @endforeach

            {{-- <div class="event-card" data-category="bridal" data-month="march">
                <img src="{{ asset('website/images/ie8-panel/Group 57 2.png') }}" alt="Event Image">
                <div class="event-card-body">
                    <div>
                        <h2 class="event-title" style="font-family: Arial;font-size:16px;">THE BRIDAL STORY</h2>
                        <p class="event-description" style="color:#393186 ;font-family:Arial;font-size:12px; ">
                            The most exclusive, luxury lifestyle exhibition, Presented by JITO Ladies Wing Pune
                        </p>
                        <div class="event-info"><i class="fa fa-map-marker" style="color: #393186;"></i>
                            Pune</div>
                    </div>
                    <div class="event-footer">
                        <div class="event-date"><i class="fa fa-calendar" style="color: #393186;"></i>
                            9th March 2025</div>
                        <a href="#" class="read-more-btn">Read more</a>
                    </div>
                </div>
            </div>

            <div class="event-card" data-category="bridal" data-month="january">
                <img src="{{ asset('website/images/ie8-panel/Group 57 2.png') }}" alt="Event Image">
                <div class="event-card-body">
                    <div>
                        <h2 class="event-title" style="font-family: Arial;font-size:16px;">THE BRIDAL STORY</h2>
                        <p class="event-description" style="color:#393186 ;font-family:Arial;font-size:12px; ">
                            The most exclusive, luxury lifestyle exhibition, Presented by JITO Ladies Wing Pune
                        </p>
                        <div class="event-info"><i class="fa fa-map-marker" style="color: #393186;"></i>
                            Pune</div>
                    </div>
                    <div class="event-footer">
                        <div class="event-date"><i class="fa fa-calendar" style="color: #393186;"></i>
                            9th January 2025</div>
                        <a href="#" class="read-more-btn">Read more</a>
                    </div>
                </div>
            </div>

            <div class="event-card" data-category="bridal" data-month="october">
                <img src="{{ asset('website/images/ie8-panel/Group 57 2.png') }}" alt="Event Image">
                <div class="event-card-body">
                    <div>
                        <h2 class="event-title" style="font-family: Arial;font-size:16px;">THE BRIDAL STORY</h2>
                        <p class="event-description" style="color:#393186 ;font-family:Arial;font-size:12px; ">
                            The most exclusive, luxury lifestyle exhibition, Presented by JITO Ladies Wing Pune
                        </p>
                        <div class="event-info"><i class="fa fa-map-marker" style="color: #393186;"></i>
                            Pune</div>
                    </div>
                    <div class="event-footer">
                        <div class="event-date"><i class="fa fa-calendar" style="color: #393186;"></i>
                            9th October 2025</div>
                        <a href="#" class="read-more-btn">Read more</a>
                    </div>
                </div>
            </div>

            <div class="event-card" data-category="bridal" data-month="april">
                <img src="{{ asset('website/images/ie8-panel/Group 57 2.png') }}" alt="Event Image">
                <div class="event-card-body">
                    <div>
                        <h2 class="event-title" style="font-family: Arial;font-size:16px;">THE BRIDAL STORY</h2>
                        <p class="event-description" style="color:#393186 ;font-family:Arial;font-size:12px; ">
                            The most exclusive, luxury lifestyle exhibition, Presented by JITO Ladies Wing Pune
                        </p>
                        <div class="event-info"><i class="fa fa-map-marker" style="color: #393186;"></i>
                            Pune</div>
                    </div>
                    <div class="event-footer">
                        <div class="event-date"><i class="fa fa-calendar" style="color: #393186;"></i>
                            9th April 2025</div>
                        <a href="#" class="read-more-btn">Read more</a>
                    </div>
                </div>
            </div>

            <div class="event-card" data-category="bridal" data-month="april">
                <img src="{{ asset('website/images/ie8-panel/Group 57 2.png') }}" alt="Event Image">
                <div class="event-card-body">
                    <div>
                        <h2 class="event-title" style="font-family: Arial;font-size:16px;">THE BRIDAL STORY</h2>
                        <p class="event-description" style="color:#393186 ;font-family:Arial;font-size:12px; ">
                            The most exclusive, luxury lifestyle exhibition, Presented by JITO Ladies Wing Pune
                        </p>
                        <div class="event-info"><i class="fa fa-map-marker" style="color: #393186;"></i>
                            Pune</div>
                    </div>
                    <div class="event-footer">
                        <div class="event-date"><i class="fa fa-calendar" style="color: #393186;"></i>
                            9th April 2025</div>
                        <a href="#" class="read-more-btn">Read more</a>
                    </div>
                </div>
            </div>

            <div class="event-card" data-category="bridal" data-month="april">
                <img src="{{ asset('website/images/ie8-panel/Group 57 2.png') }}" alt="Event Image">
                <div class="event-card-body">
                    <div>
                        <h2 class="event-title" style="font-family: Arial;font-size:16px;">THE BRIDAL STORY</h2>
                        <p class="event-description" style="color:#393186 ;font-family:Arial;font-size:12px; ">
                            The most exclusive, luxury lifestyle exhibition, Presented by JITO Ladies Wing Pune
                        </p>
                        <div class="event-info"><i class="fa fa-map-marker" style="color: #393186;"></i>
                            Pune</div>
                    </div>
                    <div class="event-footer">
                        <div class="event-date"><i class="fa fa-calendar" style="color: #393186;"></i>
                            9th April 2025</div>
                        <a href="#" class="read-more-btn">Read more</a>
                    </div>
                </div>
            </div>

            <div class="event-card" data-category="bridal" data-month="may">
                <img src="{{ asset('website/images/ie8-panel/Group 57 2.png') }}" alt="Event Image">
                <div class="event-card-body">
                    <div>
                        <h2 class="event-title" style="font-family: Arial;font-size:16px;">THE BRIDAL STORY</h2>
                        <p class="event-description" style="color:#393186 ;font-family:Arial;font-size:12px; ">
                            The most exclusive, luxury lifestyle exhibition, Presented by JITO Ladies Wing Pune
                        </p>
                        <div class="event-info"><i class="fa fa-map-marker" style="color: #393186;"></i>
                            Pune</div>
                    </div>
                    <div class="event-footer">
                        <div class="event-date"><i class="fa fa-calendar" style="color: #393186;"></i>
                            9th May 2025</div>
                        <a href="#" class="read-more-btn">Read more</a>
                    </div>
                </div>
            </div> --}}



        </section>
    </div>
@endsection

<script>
    document.addEventListener('DOMContentLoaded', function() {
        const allFilter = document.getElementById('all_filter');
        const monthFilter = document.getElementById('month_filter');
        const resetBtn = document.querySelector('resetBtn');

        const filterCards = () => {
            const selectedCategory = allFilter.value;
            const selectedMonth = monthFilter.value;

            document.querySelectorAll('.event-card').forEach(card => {
                const cardCategory = card.getAttribute('data-category');
                const cardMonth = card.getAttribute('data-month');

                const matchCategory = !selectedCategory || cardCategory === selectedCategory;
                const matchMonth = !selectedMonth || cardMonth === selectedMonth;

                if (matchCategory && matchMonth) {
                    card.style.display = 'flex'; // or 'block' depending on layout
                } else {
                    card.style.display = 'none';
                }
            });
        };

        allFilter.addEventListener('change', filterCards);
        monthFilter.addEventListener('change', filterCards);

        resetBtn.addEventListener('click', () => {
            allFilter.value = '';
            monthFilter.value = '';
            filterCards();
        });
    });
</script>
