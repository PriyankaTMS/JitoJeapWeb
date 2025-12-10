@extends('website.layout.main')
@section('content')
    <!-- Breadcrumbs-->
    <style>
        .list-container {
            display: flex;
            /* Enable flexbox */
            justify-content: center;
            /* Center the list */
        }

        ol {
            list-style-type: decimal;
            /* Ensure numbers are shown */
            text-align: left;
            /* Left-align the text */
            margin: 0;
            /* Remove default margin */
            padding: 0;
            /* Remove default padding */
        }

        li {
            text-align: left;
            /* Left-align individual list items */
        }

        .pricing-modern-header {
            background-color: #B8B8B8;
            /* Change background color to blue */
        }
    </style>
    </style>
    </style>
    <section class="breadcrumbs-custom bg-image context-dark"
        style="background-image: url({{ asset('website/images/Pricing_bg.png') }});">
        <div class="container">
            <ul class="breadcrumbs-custom-path">
                {{-- <li><a href="index.html">Home</a></li>
            <li><a href="#">Pages</a></li> --}}
                {{-- <li class="active">Pricing</li> --}}
            </ul>
            <h3 class="breadcrumbs-custom-title">Pricing Table</h3>
        </div>
    </section>
    <!-- Section Small Packages-->
    <section class="section section-lg bg-default text-center">
        <x-session-message />
        <div class="container">
            {{-- <h4 class="font-weight-bold">Small Packages.</h4> --}}
            <div class="row row-30">
                @foreach ($pricingPlans as $plan)
                    <div class="col-sm-6 col-md-4">
                        <div class="pricing-modern <?= $plan['title'] == 'Fashion Shows' ? 'pricing-modern-primary' : '' ?>">
                            <div class="pricing-modern-header">
                                <h6 class="pricing-modern-title"
                                    style="color: {{ $loop->iteration % 2 == 0 ? 'white' : '#1f1f1f' }};">
                                    {{ $plan['title'] }}</h6>
                                <p class="pricing-modern-price heading-3"
                                    style="color: {{ $loop->iteration % 2 == 0 ? 'white' : '#1f1f1f' }};">
                                    ₹{{ $plan['price'] }}
                                </p>
                                <p class="pricing-modern-description"
                                    style="color: {{ $loop->iteration % 2 == 0 ? 'white' : '#1f1f1f' }};">
                                    {{ $plan['gst'] }}</p>
                            </div>
                            <div class="pricing-modern-body">
                                <ul class="pricing-modern-list" style="margin-bottom: 50px;">
                                    <li style="color: #1f1f1f;">Maximum Entry: <b><?= $plan['maxEntry'] ?></b></li>
                                    <li style="color: #1f1f1f;">Minimum Entry: <b><?= $plan['minEntry'] ?></b></li>
                                    <li style="color: #1f1f1f;"><?= $plan['details'] ?></li>
                                    <li style="color: #1f1f1f;">Last Date for Registration: <b><?= $plan['lastDate'] ?></b>
                                    </li>
                                </ul>
                                @auth
                                    <a href="{{ route('add_to_cart', $plan['id']) }}">
                                        <button class="button button-buy" type="submit" data-triangle=".button-overlay">
                                            <span>ADD TO CART</span>
                                            <span class="button-overlay"></span>
                                        </button>
                                    </a>
                                    <a href="{{ route('buy', $plan['id']) }}">
                                        <button style="margin-left: 5px;" class="button button-primary" type="submit"
                                            data-triangle=".button-overlay">
                                            <span>Buy Now</span>
                                            <span class="button-overlay"></span>
                                        </button>
                                    </a>
                                @else
                                    <a href="{{ route('login') }}">
                                        <button class="button button-buy" type="submit" data-triangle=".button-overlay">
                                            <span>ADD TO CART</span>
                                            <span class="button-overlay"></span>
                                        </button>
                                    </a>
                                    <a href="{{ route('login') }}">
                                        <button style="margin-left: 5px;" class="button button-primary" type="submit"
                                            data-triangle=".button-overlay">
                                            <span>Buy Now</span>
                                            <span class="button-overlay"></span>
                                        </button>
                                    </a>
                                @endauth
                            </div>
                        </div>
                    </div>
                @endforeach
                @if (count($cartItems) != 0)
                    <div class="col-12 col-md-12">
                        <h4 style="margin: 50px 0px;">Your Cart Items</h4>
                        <div id="cartItemsContainer">
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th scope="col">Item</th>
                                        <th scope="col">Price</th>
                                        <th scope="col">Total&nbsp;&nbsp;(Price + GST)</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @php
                                        $total = 0;
                                    @endphp
                                    @foreach ($cartItems as $item)
                                        @php
                                            $total += $item->total_price;
                                        @endphp
                                        <tr>
                                            <td>{{ $item->name }}</td>
                                            <td>₹{{ $item->price }}</td>
                                            <td>₹{{ $item->total_price }}</td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                            <a href="{{ route('buy', 'all') }}">
                                <button style="margin-left: 5px;" class="button button-primary" type="submit"
                                    data-triangle=".button-overlay">
                                    <span>Buy Now (₹{{ $total }})</span>
                                    <span class="button-overlay"></span>
                                </button>
                            </a>
                        </div>
                    </div>
                @endif
                <div class="col-12 col-md-12">
                    <h4 style="margin-top: 50px;">IMPORTANT</h4>
                    <div class="list-container">
                        <ol>
                            <li style="color: #1f1f1f;text-size:50px;">1. Stalls will be allocated as per your booking on a
                                first come, first served basis.</li>
                            <li style="color: #1f1f1f;">2. The 22 stall owners will get the stalls at the same price for
                                equivalent area at the BNI EXPO 2025.</li>
                        </ol>
                    </div>
                </div>

            </div>
        </div>
    </section>
@endsection
