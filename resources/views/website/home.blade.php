@extends('website.layout.main')
@section('content')
    <section>
        <!-- Image -->
        {{-- <div class="desktop-margin" style="position: relative;background-color: #393186; padding-bottom: 150px;">

        </div> --}}

        {{-- <div style="margin-top: 100px;">
            <p style="color: red; background-color: white; padding: 10px; text-align: center;">*Note :- 1) Welcome to our
                Website, this application should be filled in Laptop or Desktop specifically. Request you to please clear
                the
                history and cache of your Laptop or Desktop</p>
        </div> --}}
        {{-- <style>
            @media (max-width: 1199px) {
                .note-container {
                    margin-top: 0;
                }
            }

            @media (min-width: 1200px) {
                .note-container {
                    margin-top: 100px;
                }
            }
        </style> --}}

        <div class="desktop-margin" style="position: relative; background-color: #393186; padding: 80px 0;">
            {{-- <p style="color: red; background-color: white; padding: 30px; text-align: center;    margin-top: -13px;">*Note :-
                1) Welcome to our
                Website, this application should be filled in Laptop or Desktop specifically. Request you to please clear
                the history and cache of your Laptop or Desktop</p> --}}
            <style>
                /* Large Devices (Laptop / Desktop) */
                @media (min-width: 992px) {
                    .note-margin {
                        margin-top: -13px !important;
                    }
                }

                /* Mobile Devices */
                @media (max-width: 576px) {
                    .note-margin {
                        margin-top: -80px !important;
                    }
                }
            </style>

            <p class="note-margin" style="color: red; background-color: white; padding: 30px; text-align: center;">
                *Note :- 1) Welcome to our Website, this application should be filled in Laptop or Desktop specifically.
                Request you to please clear the history and cache of your Laptop or Desktop
            </p>


            <div class="container">
                <div class="row align-items-center" style="margin-top: 50px;">

                    <!-- LEFT SIDE CONTENT -->
                    <div class="col-lg-7 col-md-12 text-white mb-5 ">

                        <h2 class=" mb-3"
                            style="font-family:
                                    Times New Roman;font-size:48px; line-height: 1.3;color:#ffff;font-weight:400;text-transform:none !important;">
                            Empowering Your <br>Dreams
                        </h2>

                        <p class="mb-4" style="font-size: 18px; color: #ffff;font-family:'Poppins', sans-serif; ">
                            JEAP’s mission is to empower deserving students to pursue their
                            academic aspirations and reach their highest potential.
                        </p>

                        <!-- ICON ROW -->
                        <div class="icons-container" style="position: relative;">
                            <div class="row text-center">

                                <div class="col-6 col-md-3 mb-4">
                                    <div class="p-3 bg-white rounded-circle mx-auto"
                                        style="width:80px;height:80px; display:flex; justify-content:center; align-items:center;    z-index: 9;
                                        position: relative;">
                                        {{-- <img src="ICON1.png" width="40"> --}}
                                        <svg width="50" height="41" viewBox="0 0 50 41" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M40.3906 18.6055L30.1172 23.5283C28.5151 24.294 26.7649 24.6914 24.9932 24.6914C23.2214 24.6914 21.4713 24.2941 19.8691 23.5283H19.8701L9.5957 18.6055L8.87988 18.2617V29.9443C8.87988 31.7772 9.47652 33.4018 10.7402 34.3242C13.0727 36.0522 17.5785 38.3349 24.9932 38.335C32.4126 38.335 36.905 36.0334 39.2461 34.3242C40.5145 33.4073 41.1074 31.7909 41.1074 29.9443V18.2617L40.3906 18.6055ZM24.9932 2.65625C23.5362 2.65629 22.0976 2.98323 20.7812 3.61328L2.91895 12.1348L1.97363 12.5859L2.91895 13.0371L20.7803 21.5576V21.5586C22.0968 22.1889 23.5359 22.5156 24.9932 22.5156C26.3594 22.5156 27.7097 22.2282 28.958 21.6729L29.2061 21.5586L47.0674 13.0371L48.0137 12.5859L47.0674 12.1348L29.2051 3.61328C27.8888 2.98334 26.45 2.65625 24.9932 2.65625ZM6.75684 17.2666L6.47266 17.1309L2.00684 15.001V15L1.84082 14.9141C1.46339 14.7003 1.14277 14.3944 0.90918 14.0225C0.642089 13.5972 0.5 13.1032 0.5 12.5986C0.500021 12.0941 0.642103 11.6001 0.90918 11.1748C1.17624 10.7496 1.55744 10.4109 2.00684 10.1973L2.04004 10.1816L2.05859 10.168L19.8877 1.66309C21.4898 0.897379 23.24 0.500071 25.0117 0.5C26.7836 0.5 28.5345 0.89731 30.1367 1.66309L47.998 10.1846V10.1836C48.4465 10.3982 48.8266 10.7379 49.0928 11.1631C49.359 11.5883 49.5001 12.0819 49.5 12.5859V29.9443C49.5 30.232 49.3871 30.5072 49.1875 30.709C48.9881 30.9105 48.7182 31.0225 48.4385 31.0225C48.159 31.0224 47.8898 30.9103 47.6904 30.709C47.4908 30.5072 47.377 30.2319 47.377 29.9443V15.2959L46.6621 15.6387L43.5391 17.1309L43.2549 17.2666V29.9541C43.2548 32.2311 42.5305 34.6399 40.5117 36.1143C37.8113 38.0609 32.8857 40.5 25.0059 40.5C17.6153 40.5 12.8138 38.3687 10.0303 36.4873L9.5 36.1143C7.48128 34.6335 6.75689 32.2057 6.75684 29.9541V17.2666Z"
                                                fill="#FFD800" stroke="#FFD800" />
                                        </svg>

                                    </div>
                                    <div class="dotted-connector"></div>
                                    <p class="mt-2 text-white"
                                        style="font-family:'Poppins', sans-serif;font-size:18px;font-weight:400;">Student
                                        <br>
                                        Empowerment
                                    </p>
                                </div>

                                <div class="col-6 col-md-3 mb-4">
                                    <div class="p-3 bg-white rounded-circle mx-auto"
                                        style="width:80px;height:80px; display:flex; justify-content:center; align-items:center;    z-index: 9;
                                        position: relative;">
                                        <svg width="35" height="43" viewBox="0 0 35 43" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M17.4305 19.863C15.1026 18.1548 11.6137 15.1677 1.61102 15.1677V36.5562C11.6137 36.5562 15.1026 39.5433 17.4305 41.2515M17.4305 19.863V41.2515M17.4305 19.863C19.7585 18.1548 23.2473 15.1677 33.25 15.1677V36.5562C23.2473 36.5562 19.7585 39.5433 17.4305 41.2515M23.6114 1.41834V8.93088M29.1418 1.25153H8.36146C7.78088 1.25083 7.21169 1.41133 6.7182 1.71488L1.25 5.0943L6.7182 8.46753C7.21169 8.77109 7.78088 8.93159 8.36146 8.93088H29.1418C29.6589 8.94545 30.1736 8.85694 30.6556 8.67061C31.1376 8.48427 31.577 8.20389 31.9479 7.84605C32.3188 7.4882 32.6137 7.06016 32.815 6.58725C33.0163 6.11434 33.1201 5.60615 33.1201 5.09275C33.1201 4.57935 33.0163 4.07117 32.815 3.59825C32.6137 3.12534 32.3188 2.6973 31.9479 2.33946C31.577 1.98161 31.1376 1.70123 30.6556 1.5149C30.1736 1.32856 29.6589 1.23697 29.1418 1.25153Z"
                                                stroke="#FFD800" stroke-width="2.5" stroke-linecap="round"
                                                stroke-linejoin="round" />
                                        </svg>

                                    </div>
                                    <div class="dotted-connector"></div>
                                    <p class="mt-2 text-white"
                                        style="font-family:'Poppins', sans-serif;font-size:18px;font-weight:400;">
                                        Educational
                                        <br> Access
                                    </p>
                                </div>

                                <div class="col-6 col-md-3 mb-4">
                                    <div class="p-3 bg-white rounded-circle mx-auto"
                                        style="width:80px;height:80px; display:flex; justify-content:center; align-items:center;    z-index: 9;
                                        position: relative;">
                                        <svg width="36" height="41" viewBox="0 0 36 41" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M32.2143 41H29.2857V36.6071C29.2834 34.6661 28.5113 32.8052 27.1388 31.4327C25.7662 30.0601 23.9053 29.288 21.9643 29.2857H13.1786C11.2375 29.288 9.37664 30.0601 8.00411 31.4327C6.63158 32.8052 5.85947 34.6661 5.85714 36.6071V41H2.92857V36.6071C2.93245 33.8898 4.0136 31.285 5.935 29.3636C7.85641 27.4421 10.4613 26.361 13.1786 26.3571H21.9643C24.6816 26.361 27.2864 27.4421 29.2079 29.3636C31.1293 31.285 32.2104 33.8898 32.2143 36.6071V41ZM1.46429 5.85712C1.07593 5.85712 0.703487 6.01139 0.42888 6.286C0.154273 6.5606 0 6.93305 0 7.3214V20.5H2.92857V7.3214C2.92857 6.93305 2.7743 6.5606 2.49969 6.286C2.22509 6.01139 1.85264 5.85712 1.46429 5.85712Z"
                                                fill="#FFD800" />
                                            <path
                                                d="M0 0V2.92857H7.32143V13.1786C7.32143 15.897 8.40134 18.5042 10.3236 20.4264C12.2458 22.3487 14.853 23.4286 17.5714 23.4286C20.2899 23.4286 22.897 22.3487 24.8193 20.4264C26.7415 18.5042 27.8214 15.897 27.8214 13.1786V2.92857H35.1429V0H0ZM10.25 2.92857H24.8929V7.32143H10.25V2.92857ZM17.5714 20.5C15.6297 20.5 13.7674 19.7286 12.3944 18.3556C11.0214 16.9826 10.25 15.1203 10.25 13.1786V10.25H24.8929V13.1786C24.8929 15.1203 24.1215 16.9826 22.7485 18.3556C21.3754 19.7286 19.5132 20.5 17.5714 20.5Z"
                                                fill="#FFD800" />
                                        </svg>

                                    </div>
                                    <div class="dotted-connector"></div>
                                    <p class="mt-2 text-white"
                                        style="font-family:'Poppins', sans-serif;font-size:18px;font-weight:400;">Financial
                                        <br>
                                        Support
                                    </p>
                                </div>

                                <div class="col-6 col-md-3 mb-4">
                                    <div class="p-3 bg-white rounded-circle mx-auto"
                                        style="width:80px;height:80px; display:flex; justify-content:center; align-items:center;    z-index: 9;
                                        position: relative;">
                                        <svg width="37" height="39" viewBox="0 0 37 39" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M1.46289 29.75C1.7172 29.7501 1.96153 29.851 2.1416 30.0312C2.3218 30.2117 2.42285 30.4574 2.42285 30.7129V37.5371C2.42285 37.7926 2.3218 38.0383 2.1416 38.2188C1.96153 38.399 1.7172 38.4999 1.46289 38.5C1.20839 38.5 0.963375 38.3992 0.783203 38.2188C0.60301 38.0383 0.501953 37.7926 0.501953 37.5371V30.7129C0.501953 30.4574 0.603009 30.2117 0.783203 30.0312C0.963375 29.8508 1.20839 29.75 1.46289 29.75ZM11.1992 21.9502C11.4536 21.9503 11.6979 22.0511 11.8779 22.2314C12.058 22.4118 12.1591 22.6568 12.1592 22.9121V37.5371C12.1592 37.7926 12.0581 38.0383 11.8779 38.2188C11.6979 38.399 11.4535 38.4999 11.1992 38.5C10.9447 38.5 10.6997 38.3992 10.5195 38.2188C10.3393 38.0383 10.2383 37.7926 10.2383 37.5371V22.9121C10.2384 22.6568 10.3395 22.4118 10.5195 22.2314C10.6997 22.051 10.9447 21.9502 11.1992 21.9502ZM20.9355 25.8496C21.1899 25.8497 21.4342 25.9515 21.6143 26.1318C21.7943 26.3123 21.8955 26.5571 21.8955 26.8125V37.5371C21.8955 37.7926 21.7945 38.0383 21.6143 38.2188C21.4342 38.399 21.1899 38.4999 20.9355 38.5C20.6811 38.5 20.436 38.3992 20.2559 38.2188C20.0757 38.0383 19.9746 37.7926 19.9746 37.5371V26.8125C19.9746 26.5571 20.0758 26.3123 20.2559 26.1318C20.436 25.9514 20.681 25.8496 20.9355 25.8496ZM30.6719 16.0996C30.9262 16.0997 31.1705 16.2015 31.3506 16.3818C31.5306 16.5623 31.6318 16.8071 31.6318 17.0625V37.5371C31.6318 37.7926 31.5308 38.0383 31.3506 38.2188C31.1705 38.399 30.9262 38.4999 30.6719 38.5C30.4174 38.5 30.1724 38.3991 29.9922 38.2188C29.812 38.0383 29.7109 37.7926 29.7109 37.5371V17.0625C29.7109 16.8071 29.8121 16.5623 29.9922 16.3818C30.1724 16.2014 30.4174 16.0996 30.6719 16.0996ZM35.6084 0.5L35.7314 0.516602L35.8584 0.552734L35.9482 0.59082C36.0416 0.63135 36.1309 0.691329 36.2168 0.775391L36.2656 0.829102L36.3262 0.908203L36.3975 1.0293L36.4463 1.14355L36.4707 1.22266L36.4863 1.29492L36.5 1.43359V10.2451C36.4999 10.4892 36.4074 10.7242 36.2412 10.9023C36.075 11.0805 35.847 11.1885 35.6045 11.2051C35.3622 11.2215 35.1222 11.1458 34.9336 10.9922C34.7481 10.841 34.6256 10.6255 34.5898 10.3887L34.5791 10.2246V3.78223L33.7256 4.63672L21.1846 17.1943C21.0219 17.3573 20.8063 17.4565 20.5771 17.4736C20.3515 17.4904 20.1277 17.4266 19.9443 17.2939L19.8115 17.1797L13.9209 11.5146L13.5674 11.1748L13.2207 11.5225L2.14062 22.6152V22.6162C1.9692 22.7884 1.73841 22.8893 1.49609 22.8984C1.25396 22.9074 1.01769 22.8236 0.833984 22.665C0.650141 22.5063 0.532547 22.2839 0.505859 22.042C0.479621 21.8039 0.542559 21.5647 0.682617 21.3711L0.794922 21.2412L12.8955 9.125C13.0583 8.96225 13.2747 8.86361 13.5039 8.84668C13.729 8.83014 13.9527 8.89319 14.1357 9.02539L14.2588 9.13184H14.2598L20.1602 14.8057L20.5137 15.1465L20.8604 14.7988L32.3652 3.27832L33.2168 2.4248H26.7734L26.6875 2.4209C26.487 2.40252 26.2965 2.32122 26.1436 2.1875C25.9724 2.0378 25.8594 1.83237 25.8252 1.60742L25.8145 1.4502C25.8174 1.22182 25.9018 1.00224 26.0518 0.830078C26.2014 0.658275 26.4064 0.544866 26.6309 0.510742L26.7949 0.5H35.6084Z"
                                                fill="#FFD800" stroke="#FFD800" />
                                        </svg>

                                    </div>
                                    <p class="mt-2 text-white"
                                        style="font-family:'Poppins', sans-serif;font-size:18px;font-weight:400;">Future
                                        <br>
                                        Growth
                                    </p>
                                </div>

                            </div>
                        </div>
                    </div>

                    <!-- RIGHT SIDE IMAGE -->
                    <div class="col-lg-5 col-md-12 text-center">
                        <img src="{{ asset('website/images/books.png') }}" alt="" class="img-fluid" style="">
                    </div>

                </div>
            </div>

        </div>

        <style>
            @media (min-width: 1200px) {
                .desktop-margin {
                    margin-top: 200px;
                }
            }

            @media (max-width: 1199px) {
                .desktop-margin {
                    margin-top: 0;
                }
            }

            /* Dotted connectors */
            .dotted-connector {
                /* display: none;
                                                                                                                                        position: absolute;
                                                                                                                                        top: 40px;
                                                                                                                                        left: calc(100% + 20px);
                                                                                                                                        width: 40px;
                                                                                                                                        height: 1px;
                                                                                                                                        background-image: radial-gradient(circle, white 2px, transparent 2px);
                                                                                                                                        background-size: 4px 1px;
                                                                                                                                        background-position: 0 0;
                                                                                                                                        transform: translateY(-50%); */
                position: absolute;
                top: 40px;
                left: 32%;
                width: 100%;
                height: 3px;
                background-image: radial-gradient(circle, white 2px, transparent 2px);
                background-size: 10px 1px;
                background-position: 0 0;
                transform: translateY(-50%);
                z-index: 0;
            }

            /* Show dotted lines only on desktop (≥768px) */
            @media (min-width: 768px) {
                .dotted-connector {
                    display: block;
                }
            }
        </style>





        <script>
            function updateCardLayout() {
                const container = document.getElementById('cardContainer');
                if (window.innerWidth < 768) {
                    container.style.position = 'static';
                    container.style.transform = 'none';
                    container.style.flexDirection = 'column';
                    container.style.alignItems = 'center';
                    container.style.gap = '20px';
                } else {
                    container.style.position = 'absolute';
                    container.style.bottom = '-150px';
                    container.style.left = '50%';
                    container.style.transform = 'translateX(-50%)';
                    container.style.flexDirection = 'row';
                    container.style.gap = '100px';
                }
            }

            window.addEventListener('resize', updateCardLayout);
            window.addEventListener('load', updateCardLayout);
        </script>
        </div>



    </section>




    <!-- Responsive CSS -->
    <style>
        @media (max-width: 768px) {
            .card-container {
                flex-wrap: wrap !important;
            }
        }
    </style>







    <!-- Container -->

    {{-- =============================Section Swiper Slider{{ asset('website/')}}============= --}}
    <!--============================Section Book Your Ticket===========================-->

    <style>
        @media (max-width: 768px) {

            /* Center image container on mobile */
            .about-img-container {
                display: flex !important;
                justify-content: center !important;
            }

            .about-img-container img {
                margin: 0 auto !important;
                display: block !important;
                width: 100% !important;
                max-width: 300px !important;
                transform: none !important;
            }

            /* Reduce gap on smaller screens */
            .text-image-wrapper {
                gap: 30px !important;
            }
        }
    </style>

    {{-- =============================KEY INSTRUCTIONS SECTION{{ asset('website/')}}============= --}}
    <section class="key-instructions-section" style="background: #ffffff; padding: 80px 0;">
        <div class="container">
            <!-- Title -->
            <div class="text-start mb-5">
                <div style="display: flex; align-items: center; flex-direction: row; gap: 15px;">
                    <div style="width: 3px; height: 40px; background-color: #E31E25;"></div>
                    <h2
                        style="font-size: 36px; font-weight: bold; font-family: 'Times New Roman', Times, serif; margin: 0;">
                        <span style="color: #FFD800;">KEY</span> <span style="color: #393186;">INSTRUCTIONS</span>
                    </h2>
                </div>
            </div>

            <!-- Cards Row -->
            <div class="row justify-content-center mt-4">
                <!-- Card 1 -->
                <div class="col-lg-2 col-md-4 col-sm-6 col-xs-12 mb-4">
                    <div class="key-card"
                        style="position: relative; background: #ffffff;     border-radius: 0px;
                        border: 2px solid #00008B; box-shadow: 0 4px 12px rgba(0,0,0,0.1); padding: 30px 25px 30px; height: 200px; display: flex; flex-direction: column; justify-content: center; align-items: center; ">
                        <div class="icon-circle"
                            style="position: absolute; top: -40px; left: 50%; transform: translateX(-50%); background: #00008B; border-radius: 50%;     border: 5px solid #ffff;
                            width: 45%;
                            height: 45%; display: flex; align-items: center; justify-content: center; box-shadow: 0 4px 8px rgba(0,0,0,0.2);">
                            <svg width="40" height="40" viewBox="0 0 40 40" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M35.4167 1.5H4.58333C2.88046 1.5 1.5 2.88046 1.5 4.58333V27.1944C1.5 28.8973 2.88046 30.2778 4.58333 30.2778H35.4167C37.1195 30.2778 38.5 28.8973 38.5 27.1944V4.58333C38.5 2.88046 37.1195 1.5 35.4167 1.5Z"
                                    stroke="white" stroke-width="3" stroke-linejoin="round" />
                                <path d="M9.72266 38.5H30.2782M20.0004 30.2778V38.5" stroke="white" stroke-width="3"
                                    stroke-linecap="round" stroke-linejoin="round" />
                            </svg>

                        </div>
                        <h5 class="card-title"
                            style="font-family:'Poppins', sans-serif;font-size: 16px; font-weight: 600; color: #3E3E3E; text-align: center; margin-top: 45px; margin-bottom: 6px;">
                            Use a Computer</h5>
                        <p class="card-text"
                            style="font-size: 13px; color: #5B5B5B; text-align: center; line-height: 1.5;">
                            Use a laptop or desktop to complete the application (not a mobile device).</p>
                    </div>
                </div>

                <!-- Card 2 -->
                <div class="col-lg-2 col-md-4 col-sm-6 col-xs-12 mb-4">
                    <div class="key-card"
                        style="position: relative; background: #ffffff; border-radius: 12px; box-shadow: 0 4px 12px rgba(0,0,0,0.1); padding: 30px 25px 30px; height: 200px; display: flex; flex-direction: column; justify-content: center; align-items: center; border-right: 2px dotted #e0e0e0;">
                        <div class="icon-circle"
                            style="position: absolute; top: -20px; left: 50%; transform: translateX(-50%); background: #009746; border-radius: 50%; width: 50px; height: 50px; display: flex; align-items: center; justify-content: center; box-shadow: 0 4px 8px rgba(0,0,0,0.2);">
                            <svg width="20" height="20" viewBox="0 0 24 24" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path d="M3 6h18" stroke="#ffffff" stroke-width="2" stroke-linecap="round" />
                                <path d="M7 6V4a1 1 0 0 1 2 0v2m8-2v2a1 1 0 1 0 2 0v2" stroke="#ffffff"
                                    stroke-width="2" />
                                <path d="M5 8h14l-1 12H6L5 8z" stroke="#ffffff" stroke-width="2" />
                                <path d="M10 13h4v4h-4v-4z" stroke="#ffffff" stroke-width="2" />
                            </svg>
                        </div>
                        <h5 class="card-title"
                            style="font-size: 18px; font-weight: bold; color: #393186; text-align: center; margin-top: 20px; margin-bottom: 10px;">
                            Clear History</h5>
                        <p class="card-text" style="font-size: 14px; color: #666; text-align: center; line-height: 1.5;">
                            Remove browsing history completely</p>
                    </div>
                </div>

                <!-- Card 3 -->
                <div class="col-lg-2 col-md-4 col-sm-6 col-xs-12 mb-4">
                    <div class="key-card"
                        style="position: relative; background: #ffffff; border-radius: 12px; box-shadow: 0 4px 12px rgba(0,0,0,0.1); padding: 30px 25px 30px; height: 200px; display: flex; flex-direction: column; justify-content: center; align-items: center; border-right: 2px dotted #e0e0e0;">
                        <div class="icon-circle"
                            style="position: absolute; top: -20px; left: 50%; transform: translateX(-50%); background: #FFD800; border-radius: 50%; width: 50px; height: 50px; display: flex; align-items: center; justify-content: center; box-shadow: 0 4px 8px rgba(0,0,0,0.2);">
                            <svg width="20" height="20" viewBox="0 0 24 24" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <rect x="3" y="4" width="18" height="18" rx="2" ry="2"
                                    stroke="#ffffff" stroke-width="2" />
                                <line x1="16" y1="2" x2="16" y2="6" stroke="#ffffff"
                                    stroke-width="2" />
                                <line x1="8" y1="2" x2="8" y2="6" stroke="#ffffff"
                                    stroke-width="2" />
                                <line x1="3" y1="10" x2="21" y2="10" stroke="#ffffff"
                                    stroke-width="2" />
                            </svg>
                        </div>
                        <h5 class="card-title"
                            style="font-size: 18px; font-weight: bold; color: #393186; text-align: center; margin-top: 20px; margin-bottom: 10px;">
                            Check Calendar</h5>
                        <p class="card-text" style="font-size: 14px; color: #666; text-align: center; line-height: 1.5;">
                            Review important dates and events</p>
                    </div>
                </div>

                <!-- Card 4 -->
                <div class="col-lg-2 col-md-4 col-sm-6 col-xs-12 mb-4">
                    <div class="key-card"
                        style="position: relative; background: #ffffff; border-radius: 12px; box-shadow: 0 4px 12px rgba(0,0,0,0.1); padding: 30px 25px 30px; height: 200px; display: flex; flex-direction: column; justify-content: center; align-items: center; border-right: 2px dotted #e0e0e0;">
                        <div class="icon-circle"
                            style="position: absolute; top: -20px; left: 50%; transform: translateX(-50%); background: #E31E25; border-radius: 50%; width: 50px; height: 50px; display: flex; align-items: center; justify-content: center; box-shadow: 0 4px 8px rgba(0,0,0,0.2);">
                            <svg width="20" height="20" viewBox="0 0 24 24" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <circle cx="12" cy="12" r="10" stroke="#ffffff" stroke-width="2" />
                                <path d="M12 6v6l4 2" stroke="#ffffff" stroke-width="2" stroke-linecap="round" />
                            </svg>
                        </div>
                        <h5 class="card-title"
                            style="font-size: 18px; font-weight: bold; color: #393186; text-align: center; margin-top: 20px; margin-bottom: 10px;">
                            Check Time</h5>
                        <p class="card-text" style="font-size: 14px; color: #666; text-align: center; line-height: 1.5;">
                            Verify current time and schedule</p>
                    </div>
                </div>

                <!-- Card 5 -->
                <div class="col-lg-2 col-md-4 col-sm-6 col-xs-12 mb-4">
                    <div class="key-card"
                        style="position: relative; background: #ffffff; border-radius: 12px; box-shadow: 0 4px 12px rgba(0,0,0,0.1); padding: 30px 25px 30px; height: 200px; display: flex; flex-direction: column; justify-content: center; align-items: center; border-right: 2px dotted #e0e0e0;">
                        <div class="icon-circle"
                            style="position: absolute; top: -20px; left: 50%; transform: translateX(-50%); background: #7B3FF2; border-radius: 50%; width: 50px; height: 50px; display: flex; align-items: center; justify-content: center; box-shadow: 0 4px 8px rgba(0,0,0,0.2);">
                            <svg width="20" height="20" viewBox="0 0 24 24" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path d="M9 11l3 3L22 4" stroke="#ffffff" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round" />
                                <path d="M21 12v7a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h11" stroke="#ffffff"
                                    stroke-width="2" />
                            </svg>
                        </div>
                        <h5 class="card-title"
                            style="font-size: 18px; font-weight: bold; color: #393186; text-align: center; margin-top: 20px; margin-bottom: 10px;">
                            Review Checklist</h5>
                        <p class="card-text" style="font-size: 14px; color: #666; text-align: center; line-height: 1.5;">
                            Go through required preparation steps</p>
                    </div>
                </div>

                <!-- Card 6 -->
                <div class="col-lg-2 col-md-4 col-sm-6 col-xs-12 mb-4">
                    <div class="key-card"
                        style="position: relative; background: #ffffff; border-radius: 12px; box-shadow: 0 4px 12px rgba(0,0,0,0.1); padding: 30px 25px 30px; height: 200px; display: flex; flex-direction: column; justify-content: center; align-items: center;">
                        <div class="icon-circle"
                            style="position: absolute; top: -20px; left: 50%; transform: translateX(-50%); background: #009746; border-radius: 50%; width: 50px; height: 50px; display: flex; align-items: center; justify-content: center; box-shadow: 0 4px 8px rgba(0,0,0,0.2);">
                            <svg width="20" height="20" viewBox="0 0 24 24" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path d="M14 2H6a2 2 0 0 0-2 2v10a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z" stroke="#ffffff"
                                    stroke-width="2" />
                                <path d="M14 2v6h6" stroke="#ffffff" stroke-width="2" />
                                <line x1="16" y1="13" x2="8" y2="13" stroke="#ffffff"
                                    stroke-width="2" />
                                <line x1="16" y1="17" x2="8" y2="17" stroke="#ffffff"
                                    stroke-width="2" />
                                <line x1="10" y1="9" x2="9" y2="9" stroke="#ffffff"
                                    stroke-width="2" />
                                <line x1="10" y1="9" x2="9" y2="9" stroke="#ffffff"
                                    stroke-width="2" />
                            </svg>
                        </div>
                        <h5 class="card-title"
                            style="font-size: 18px; font-weight: bold; color: #393186; text-align: center; margin-top: 20px; margin-bottom: 10px;">
                            Prepare Documents</h5>
                        <p class="card-text" style="font-size: 14px; color: #666; text-align: center; line-height: 1.5;">
                            Have all required documents ready</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section style="padding: 100px 0; background: #ffffff;">
        <div class="container" style="display: flex; flex-direction: column; gap: 30px;">

            <!-- About Us Section -->
            <div class="text-image-wrapper"
                style="display: flex; flex-wrap: wrap; justify-content: space-between; align-items: center; gap: 75px;">

                <!-- Text -->
                <div style="flex: 1 1 50%; max-width: 700px;">
                    <div style="display: flex; align-items: center; flex-direction: row; gap: 15px;">
                        <div style="width: 3px; height: 40px; background-color: #E31E25;"></div>
                        <h2
                            style="font-size: 36px; font-weight: bold; font-family: 'Times New Roman', Times, serif; margin: 0;">
                            <span style="color: #FFD800;">About</span> <span style="color: #393186;">Us</span>
                        </h2>
                    </div>
                    <p
                        style="font-size: 16px; line-height: 1.6; margin-top: 20px; font-family: Arial; color: #5B5B5B; text-align: justify;">
                        Jain International Trade Organisation (JITO) is a global body that unites a vibrant community of
                        Jain
                        industrialists, entrepreneurs, business leaders, and professionals. With a strong foundation in Jain
                        values, JITO serves as a collaborative platform to encourage ethical business practices,
                        entrepreneurship, and inclusive economic growth.
                        <br><br>
                        Committed to the principles of unity, integrity, and service, JITO envisions a future where the Jain
                        community leads with purpose and responsibility. Through its various initiatives in education,
                        mentorship, trade facilitation, and community welfare, JITO supports the development of future
                        leaders
                        and changemakers.
                    </p>
                </div>

                <!-- Image -->
                <div class="about-img-container" style="position: relative; flex: 1 1 45%; max-width: 500px;">
                    <div
                        style="background-color: #FFD800; width: 80%; height: 100%; position: absolute; top: -20px; right: 15px; z-index: 1; border-radius: 10px;">
                    </div>
                    <!--<img src="{{ asset('website/images/ie8-panel/WhatsApp Image 2025-04-04 at 15.13.07_23e8a8d5 (1).png') }}"-->
                    <!--    alt="About Us Image"-->
                    <!--    style="width: 80%; border-radius: 10px; position: relative; z-index: 2; display: block; margin: auto; transform: translateX(10px);">-->

                    <img src="{{ asset('website/images/about01.png') }}" alt="About Us Image"
                        style="width: 80%; border-radius: 10px; position: relative; z-index: 2; display: block; margin: auto; transform: translateX(10px);">

                </div>
            </div>

            <!-- Vision & Mission Section -->
            <div class="text-image-wrapper"
                style="display: flex; flex-wrap: wrap; justify-content: space-between; align-items: center; gap: 75px;">

                <!-- Text -->
                <div style="flex: 1 1 50%; max-width: 700px;">
                    <div style="display: flex; align-items: center; flex-direction: row; gap: 15px;">
                        <div style="width: 3px; height: 40px; background-color: #E31E25;"></div>
                        <h2
                            style="font-size: 36px; font-weight: bold; font-family: 'Times New Roman', Times, serif; margin: 0;">
                            <span style="color: #FFD800;">Our</span> <span style="color: #393186;">VISSION &
                                MISSION</span>
                        </h2>
                    </div>
                    <p
                        style="font-size: 16px; line-height: 1.6; margin-top: 20px; font-family: Arial; color: #5B5B5B; text-align: justify;">
                        To become a world-class organization that not only drives economic prosperity but also serves as a
                        catalyst for social transformation. JITO envisions a future where Jain values inspire ethical
                        leadership, compassion, and collective growth.
                        <br><br>
                        Our ultimate goal is to help build a world that is free from violence, poverty, and disease—a world
                        where humanity thrives with dignity, peace, and purpose.
                        <br><br>
                        Together, we aspire to create a legacy of purpose-driven progress that benefits both community and
                        humanity.
                    </p>
                </div>

                <!-- Image -->
                <div class="about-img-container" style="position: relative; flex: 1 1 45%; max-width: 500px;">
                    <div
                        style="background-color: #393186; width: 80%; height: 100%; position: absolute; top: -20px; right: 15px; z-index: 1; border-radius: 10px;">
                    </div>
                    <img src="{{ asset('website/images/ie8-panel/WhatsApp Image 2025-04-04 at 15.13.07_23e8a8d5 (1).png') }}"
                        alt="Vision Image"
                        style="width: 80%; border-radius: 10px; position: relative; z-index: 2; display: block; margin: auto; transform: translateX(10px);">
                </div>
            </div>

        </div>
    </section>









    <!--========================Section Biggest 2019 Digital Conference=================-->







    <section id="chapter"
        style=" font-family: 'Segoe UI', sans-serif; display: flex; flex-direction: row; flex-wrap: wrap; gap: 40px; padding: 0px; box-sizing: border-box; height: auto;">

        <!-- Left Side: ROM CHAPTERS -->
        <div class="rom-chapters"
            style="flex: 1; min-width: 300px; background: linear-gradient(to right, #FFD700 30%, #2F2477 30%); display: flex; justify-content: center; align-items: center; border-end-end-radius: 22px;border-top-right-radius: 22px;">
            <div
                style="width: 90%; border-radius: 20px; padding: 5px 25px; box-sizing: border-box; color: white;height: 734px; ">
                <h1
                    style="border-left: 4px solid white; padding-left: 10px; font-weight: bold; font-size: 28px; font-family: Times New Roman; color: white;margin-top:40px;">
                    ROM CHAPTERS</h1>

                <!-- Search box -->
                <div
                    style="margin: 20px 0; background-color: white; border-radius: 25px; padding: 8px 16px; display: flex; align-items: center;">
                    <i class="fas fa-search" style="font-size: 20px; color: gray;"></i>
                    <input type="text" id="search" placeholder="Search here"
                        style="border: none; outline: none; margin-left: 10px; font-size: 16px; width: 100%;" />
                </div>

                <!-- Scrollable Chapter List -->
                <div id="chapterList"
                    style="height: 535px; overflow-y: auto; background-color: white; border-radius: 20px; padding: 10px; font-family: Arial; color: #5B5B5B;  padding-left: 63px; padding-right: 63px; ">
                    @foreach ($chapters as $chapter)
                        <div
                            style="margin: 10px 0; padding: 10px; background-color: #E6E6E6; border-radius: 20px; text-align: center;">
                            <a href="{{ route('chapterleader', $chapter->id) }}">{{ $chapter->name }}</a>
                        </div>
                    @endforeach

                    {{--  <div
                        style="margin: 10px 0; padding: 10px; background-color: #E6E6E6; border-radius: 20px; text-align: center;">
                        Ahemednagar</div>
                    <div
                        style="margin: 10px 0; padding: 10px; background-color: #E6E6E6; border-radius: 20px; text-align: center;">
                        Akola</div>
                    <div
                        style="margin: 10px 0; padding: 10px; background-color: #E6E6E6; border-radius: 20px; text-align: center;">
                        Aurangabad</div>
                    <div
                        style="margin: 10px 0; padding: 10px; background-color: #E6E6E6; border-radius: 20px; text-align: center;">
                        Beed</div>
                    <div
                        style="margin: 10px 0; padding: 10px; background-color: #E6E6E6; border-radius: 20px; text-align: center;">
                        Chinchwad - Pimpari</div>
                    <div
                        style="margin: 10px 0; padding: 10px; background-color: #E6E6E6; border-radius: 20px; text-align: center;">
                        Dhule</div>
                    <div
                        style="margin: 10px 0; padding: 10px; background-color: #E6E6E6; border-radius: 20px; text-align: center;">
                        Ichalkaranji</div>
                    <div
                        style="margin: 10px 0; padding: 10px; background-color: #E6E6E6; border-radius: 20px; text-align: center;">
                        Jalgaon</div>
                    <div
                        style="margin: 10px 0; padding: 10px; background-color: #E6E6E6; border-radius: 20px; text-align: center;">
                        Jalna (unit)
                    </div>
                    <div
                        style="margin: 10px 0; padding: 10px; background-color: #E6E6E6; border-radius: 20px; text-align: center;">
                        Kolhapur
                    </div>
                    <div
                        style="margin: 10px 0; padding: 10px; background-color: #E6E6E6; border-radius: 20px; text-align: center;">
                        Malegaon
                    </div>
                    <div
                        style="margin: 10px 0; padding: 10px; background-color: #E6E6E6; border-radius: 20px; text-align: center;">
                        Nagpur
                    </div>
                    <div
                        style="margin: 10px 0; padding: 10px; background-color: #E6E6E6; border-radius: 20px; text-align: center;">
                        Nashik
                    </div>
                    <div
                        style="margin: 10px 0; padding: 10px; background-color: #E6E6E6; border-radius: 20px; text-align: center;">
                        Parbhani
                    </div>
                    <div
                        style="margin: 10px 0; padding: 10px; background-color: #E6E6E6; border-radius: 20px; text-align: center;">
                        Pune
                    </div>
                    <div
                        style="margin: 10px 0; padding: 10px; background-color: #E6E6E6; border-radius: 20px; text-align: center;">
                        Shirur
                    </div>
                    <div
                        style="margin: 10px 0; padding: 10px; background-color: #E6E6E6; border-radius: 20px; text-align: center;">
                        Solapur
                    </div>
                    <div
                        style="margin: 10px 0; padding: 10px; background-color: #E6E6E6; border-radius: 20px; text-align: center;">
                        Yavatmal
                    </div>  --}}



                </div>
            </div>
        </div>

        <!-- Right Side: PROJECTS -->
        <style>
            .svg-button svg {
                transition: opacity 0.3s ease;
            }

            .svg-button .svg-hover {
                display: none;
                color: #5B5B5B;
            }

            .svg-button:hover .svg-default {
                display: none;
            }

            .svg-button:hover * {
                color: #5B5B5B;
            }

            .svg-button:hover .svg-hover {
                display: inline;
            }

            a.custom-link {
                color: #ffffff;
                /* Default white color */
                text-decoration: none;
            }

            a.custom-link:hover {
                color: #5B5B5B;
                /* Dark gray on hover */
            }
        </style>


        <div class="projects"
            style="flex: 2;min-width: 300px;background-color: #2F2477;color: white;padding: 50px 65px;display: flex;flex-direction: column;justify-content: flex-start;/* border-radius: 20px; */border-end-start-radius: 22px;border-top-left-radius: 22px;">
            <h1
                style="border-left: 4px solid white; padding-left: 10px; font-weight: bold; font-size: 28px; font-family: Times New Roman; color: white;">
                PROJECTS</h1>

            <div class="projects-grid"
                style="display: grid; grid-template-columns: repeat(2, 1fr); gap: 15px; margin-top: 30px; font-size: 20px;">
                <div class="project-item svg-button">
                    {{--  <i class="fas fa-lightbulb" style="font-size: 37px; margin-right: 8px;"></i>  --}}
                    <svg class="svg-default" width="27" height="33" viewBox="0 0 27 33" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M2.76215 19.5C1.60537 17.6056 0.995484 15.4281 1.00003 13.2085C1.00003 6.46521 6.52227 1 13.3334 1C20.1444 1 25.6667 6.46521 25.6667 13.2085C25.6712 15.4281 25.0613 17.6056 23.9046 19.5M17.9584 27.2083L17.7579 28.2058C17.5421 29.2957 17.4326 29.84 17.1875 30.2716C16.8098 30.9369 16.1982 31.4381 15.4716 31.6776C15.0014 31.8333 14.4434 31.8333 13.3334 31.8333C12.2234 31.8333 11.6653 31.8333 11.1951 31.6792C10.4682 31.4392 9.85662 30.9375 9.47919 30.2716C9.23407 29.84 9.12461 29.2957 8.90877 28.2058L8.70836 27.2083M6.21548 24.2761C6.07365 23.8506 6.00273 23.6363 6.01044 23.4636C6.01916 23.2851 6.07942 23.1129 6.18394 22.9679C6.28845 22.8229 6.43274 22.7113 6.59936 22.6465C6.75969 22.5833 6.98477 22.5833 7.43186 22.5833H19.2349C19.6835 22.5833 19.907 22.5833 20.0674 22.645C20.2342 22.7098 20.3787 22.8217 20.4832 22.967C20.5877 23.1123 20.6478 23.2848 20.6563 23.4636C20.664 23.6363 20.5931 23.849 20.4512 24.2761C20.1892 25.0639 20.0581 25.4585 19.8562 25.7777C19.4337 26.4446 18.7716 26.9241 18.0061 27.1174C17.6392 27.2083 17.2261 27.2083 16.3982 27.2083H10.2685C9.44065 27.2083 9.02594 27.2083 8.66057 27.1158C7.89538 26.9229 7.23327 26.444 6.81057 25.7777C6.60861 25.4585 6.47757 25.0639 6.21548 24.2761Z"
                            stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                        <path
                            d="M7.552 12.9479L11.0208 16.4166V22.5833M19.1145 12.9479L15.6458 16.4166V22.5833M7.552 14.1041C7.85866 14.1041 8.15275 13.9823 8.36959 13.7655C8.58643 13.5486 8.70825 13.2545 8.70825 12.9479C8.70825 12.6412 8.58643 12.3471 8.36959 12.1303C8.15275 11.9134 7.85866 11.7916 7.552 11.7916C7.24535 11.7916 6.95125 11.9134 6.73441 12.1303C6.51757 12.3471 6.39575 12.6412 6.39575 12.9479C6.39575 13.2545 6.51757 13.5486 6.73441 13.7655C6.95125 13.9823 7.24535 14.1041 7.552 14.1041ZM19.1145 14.1041C18.8078 14.1041 18.5137 13.9823 18.2969 13.7655C18.0801 13.5486 17.9583 13.2545 17.9583 12.9479C17.9583 12.6412 18.0801 12.3471 18.2969 12.1303C18.5137 11.9134 18.8078 11.7916 19.1145 11.7916C19.4212 11.7916 19.7153 11.9134 19.9321 12.1303C20.1489 12.3471 20.2708 12.6412 20.2708 12.9479C20.2708 13.2545 20.1489 13.5486 19.9321 13.7655C19.7153 13.9823 19.4212 14.1041 19.1145 14.1041Z"
                            stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                    </svg>

                    <svg class="svg-hover" width="27" height="33" viewBox="0 0 27 33" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M2.76215 19.5C1.60537 17.6056 0.995484 15.4281 1.00003 13.2085C1.00003 6.46521 6.52227 1 13.3334 1C20.1444 1 25.6667 6.46521 25.6667 13.2085C25.6712 15.4281 25.0613 17.6056 23.9046 19.5M17.9584 27.2083L17.7579 28.2058C17.5421 29.2957 17.4326 29.84 17.1875 30.2716C16.8098 30.9369 16.1982 31.4381 15.4716 31.6776C15.0014 31.8333 14.4434 31.8333 13.3334 31.8333C12.2234 31.8333 11.6653 31.8333 11.1951 31.6792C10.4682 31.4392 9.85662 30.9375 9.47919 30.2716C9.23407 29.84 9.12461 29.2957 8.90877 28.2058L8.70836 27.2083M6.21548 24.2761C6.07365 23.8506 6.00273 23.6363 6.01044 23.4636C6.01916 23.2851 6.07942 23.1129 6.18394 22.9679C6.28845 22.8229 6.43274 22.7113 6.59936 22.6465C6.75969 22.5833 6.98477 22.5833 7.43186 22.5833H19.2349C19.6835 22.5833 19.907 22.5833 20.0674 22.645C20.2342 22.7098 20.3787 22.8217 20.4832 22.967C20.5877 23.1123 20.6478 23.2848 20.6563 23.4636C20.664 23.6363 20.5931 23.849 20.4512 24.2761C20.1891 25.0639 20.0581 25.4585 19.8562 25.7777C19.4337 26.4446 18.7716 26.9241 18.0061 27.1174C17.6392 27.2083 17.2261 27.2083 16.3982 27.2083H10.2685C9.44065 27.2083 9.02594 27.2083 8.66057 27.1158C7.89538 26.9229 7.23327 26.444 6.81057 25.7777C6.60861 25.4585 6.47757 25.0639 6.21548 24.2761Z"
                            stroke="#5B5B5B" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                        <path
                            d="M7.55225 12.948L11.021 16.4167V22.5834M19.1147 12.948L15.646 16.4167V22.5834M7.55225 14.1042C7.8589 14.1042 8.153 13.9824 8.36984 13.7656C8.58668 13.5488 8.7085 13.2547 8.7085 12.948C8.7085 12.6413 8.58668 12.3472 8.36984 12.1304C8.153 11.9136 7.8589 11.7917 7.55225 11.7917C7.24559 11.7917 6.95149 11.9136 6.73465 12.1304C6.51781 12.3472 6.396 12.6413 6.396 12.948C6.396 13.2547 6.51781 13.5488 6.73465 13.7656C6.95149 13.9824 7.24559 14.1042 7.55225 14.1042ZM19.1147 14.1042C18.8081 14.1042 18.514 13.9824 18.2972 13.7656C18.0803 13.5488 17.9585 13.2547 17.9585 12.948C17.9585 12.6413 18.0803 12.3472 18.2972 12.1304C18.514 11.9136 18.8081 11.7917 19.1147 11.7917C19.4214 11.7917 19.7155 11.9136 19.9323 12.1304C20.1492 12.3472 20.271 12.6413 20.271 12.948C20.271 13.2547 20.1492 13.5488 19.9323 13.7656C19.7155 13.9824 19.4214 14.1042 19.1147 14.1042Z"
                            stroke="#5B5B5B" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                    </svg>

                    &nbsp;&nbsp; <a href="https://jitojiif.com/" target="_blank" class="custom-link">JITO Incubation &
                        Innovation
                        Foundation</a>
                </div>

                <div class="project-item svg-button">
                    {{--  <i class="fas fa-briefcase" style="font-size: 37px; margin-right: 8px;"></i>  --}}
                    <svg class="svg-default" width="29" height="25" viewBox="0 0 29 25" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M3.11633 24.8333C2.40614 24.8333 1.81363 24.5959 1.33879 24.121C0.863958 23.6462 0.626028 23.0532 0.625 22.342V7.28296C0.625 6.57277 0.862931 5.98025 1.33879 5.50542C1.81465 5.03059 2.40665 4.79266 3.11479 4.79163H9.875V2.65642C9.875 1.94725 10.1129 1.35474 10.5888 0.878879C11.0647 0.403018 11.6572 0.165602 12.3663 0.166629H16.6352C17.3444 0.166629 17.9369 0.404046 18.4128 0.878879C18.8886 1.35371 19.126 1.94623 19.125 2.65642V4.79163H25.8852C26.5944 4.79163 27.1864 5.02956 27.6612 5.50542C28.136 5.98128 28.374 6.5738 28.375 7.28296V22.3435C28.375 23.0527 28.1371 23.6452 27.6612 24.121C27.1853 24.5969 26.5933 24.8343 25.8852 24.8333H3.11633ZM3.11633 23.2916H25.8852C26.1216 23.2916 26.339 23.193 26.5373 22.9956C26.7357 22.7983 26.8344 22.5804 26.8333 22.342V7.28296C26.8333 7.04555 26.7347 6.82766 26.5373 6.6293C26.34 6.43094 26.1226 6.33227 25.8852 6.3333H3.11479C2.8784 6.3333 2.66103 6.43196 2.46267 6.6293C2.26431 6.82663 2.16564 7.04452 2.16667 7.28296V22.3435C2.16667 22.5799 2.26533 22.7973 2.46267 22.9956C2.66 23.194 2.87737 23.2927 3.11479 23.2916M11.4167 4.79163H17.5833V2.65642C17.5833 2.42003 17.4847 2.20266 17.2873 2.0043C17.09 1.80593 16.8726 1.70727 16.6352 1.7083H12.3648C12.1284 1.7083 11.911 1.80696 11.7127 2.0043C11.5143 2.20163 11.4156 2.419 11.4167 2.65642V4.79163Z"
                            fill="white" />
                    </svg>
                    <svg class="svg-hover" width="28" height="25" viewBox="0 0 28 25" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M2.49133 24.6667C1.78114 24.6667 1.18863 24.4293 0.713792 23.9544C0.238958 23.4796 0.00102778 22.8866 0 22.1753V7.11634C0 6.40614 0.237931 5.81363 0.713792 5.33879C1.18965 4.86396 1.78165 4.62603 2.48979 4.625H9.25V2.48979C9.25 1.78063 9.48793 1.18811 9.96379 0.712253C10.4397 0.236392 11.0322 -0.00102446 11.7413 3.32256e-06H16.0102C16.7194 3.32256e-06 17.3119 0.23742 17.7877 0.712253C18.2636 1.18709 18.501 1.7796 18.5 2.48979V4.625H25.2602C25.9694 4.625 26.5614 4.86293 27.0362 5.33879C27.511 5.81466 27.749 6.40717 27.75 7.11634V22.1769C27.75 22.886 27.5121 23.4786 27.0362 23.9544C26.5603 24.4303 25.9683 24.6677 25.2602 24.6667H2.49133ZM2.49133 23.125H25.2602C25.4966 23.125 25.714 23.0263 25.9123 22.829C26.1107 22.6317 26.2094 22.4138 26.2083 22.1753V7.11634C26.2083 6.87892 26.1097 6.66103 25.9123 6.46267C25.715 6.26431 25.4976 6.16564 25.2602 6.16667H2.48979C2.2534 6.16667 2.03603 6.26534 1.83767 6.46267C1.63931 6.66 1.54064 6.87789 1.54167 7.11634V22.1769C1.54167 22.4133 1.64033 22.6306 1.83767 22.829C2.035 23.0274 2.25237 23.126 2.48979 23.125M10.7917 4.625H16.9583V2.48979C16.9583 2.25341 16.8597 2.03603 16.6623 1.83767C16.465 1.63931 16.2476 1.54064 16.0102 1.54167H11.7398C11.5034 1.54167 11.286 1.64034 11.0877 1.83767C10.8893 2.035 10.7906 2.25238 10.7917 2.48979V4.625Z"
                            fill="#5B5B5B" />
                    </svg>

                    &nbsp;&nbsp;<a href="https://www.jitojobs.org/" target="_blank" class="custom-link">JITO Jobs &
                        Internships</a>
                </div>
                <div class="project-item svg-button">
                    {{--  <i class="fas fa-ring" style="font-size: 37px; margin-right: 8px;"></i>  --}}
                    <svg class="svg-default" width="31" height="34" viewBox="0 0 31 34" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" clip-rule="evenodd"
                            d="M12.4167 0.3125C9.90375 0.3125 8.17708 2.40917 8.17708 4.76792C8.17708 7.60458 10.0579 9.77833 11.6767 11.135C12.6086 11.9145 13.6217 12.5916 14.6983 13.1546C14.7908 13.2008 14.8679 13.2471 14.9296 13.2625L14.9913 13.2933H15.0067C15.315 13.4475 15.685 13.4475 15.9933 13.3088H16.0087L16.0704 13.2625C16.1321 13.2471 16.2092 13.2008 16.3017 13.1546C17.3783 12.5916 18.3914 11.9145 19.3233 11.135C20.9421 9.77833 22.8229 7.60458 22.8229 4.76792C22.8229 2.40917 21.0962 0.3125 18.5833 0.3125C17.6737 0.3125 16.8567 0.512917 16.1167 0.96C15.9008 1.09875 15.685 1.26833 15.5 1.43792C15.315 1.26833 15.0992 1.09875 14.8833 0.96C14.1433 0.512917 13.3263 0.3125 12.4167 0.3125ZM15.87 10.7496C15.7312 10.8267 15.6079 10.9037 15.5 10.9654C15.3921 10.9037 15.2688 10.8267 15.13 10.7496C14.437 10.3393 13.7772 9.87541 13.1567 9.36208C11.6921 8.14417 10.4896 6.55625 10.4896 4.76792C10.4896 3.48833 11.3683 2.625 12.4167 2.625C12.9717 2.625 13.3571 2.74833 13.65 2.91792C13.9429 3.10292 14.2204 3.41125 14.4671 3.90458C14.6675 4.29 15.0683 4.53667 15.5 4.53667C15.9317 4.53667 16.3325 4.29 16.5329 3.90458C16.7796 3.41125 17.0571 3.10292 17.35 2.91792C17.6429 2.74833 18.0283 2.625 18.5833 2.625C19.6317 2.625 20.5104 3.48833 20.5104 4.76792C20.5104 6.55625 19.3079 8.14417 17.8433 9.36208C17.1342 9.96333 16.4096 10.4258 15.87 10.7496ZM10.1042 16.5C6.065 16.5 2.78125 19.7838 2.78125 23.8229C2.78125 27.8621 6.065 31.1458 10.1042 31.1458C11.3992 31.1458 12.6325 30.8067 13.6808 30.2054C12.116 28.4483 11.2542 26.1758 11.2604 23.8229C11.2604 21.3717 12.17 19.1362 13.6808 17.4404C12.6325 16.8392 11.3992 16.5 10.1042 16.5ZM10.1042 33.4583C12.1083 33.4583 13.9583 32.8571 15.5 31.8088C17.0417 32.8571 18.8917 33.4583 20.8958 33.4583C26.2146 33.4583 30.5312 29.1417 30.5312 23.8229C30.5312 18.5042 26.2146 14.1875 20.8958 14.1875C18.8917 14.1875 17.0417 14.7887 15.5 15.8371C13.9583 14.7887 12.1083 14.1875 10.1042 14.1875C4.78542 14.1875 0.46875 18.5042 0.46875 23.8229C0.46875 29.1417 4.78542 33.4583 10.1042 33.4583ZM20.8958 16.5C19.6008 16.5 18.3675 16.8392 17.3192 17.4404C18.83 19.1362 19.7396 21.3717 19.7396 23.8229C19.7396 26.2742 18.83 28.5096 17.3192 30.2054C18.3675 30.8067 19.6008 31.1458 20.8958 31.1458C24.935 31.1458 28.2188 27.8621 28.2188 23.8229C28.2188 19.7838 24.935 16.5 20.8958 16.5ZM17.4271 23.8229C17.4271 21.9112 16.7025 20.1692 15.5 18.8742C14.2975 20.1692 13.5729 21.9112 13.5729 23.8229C13.5729 25.7346 14.2975 27.4767 15.5 28.7717C16.7025 27.4767 17.4271 25.7346 17.4271 23.8229Z"
                            fill="white" />
                    </svg>
                    </svg>
                    <svg class="svg-hover" width="31" height="34" viewBox="0 0 31 34" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" clip-rule="evenodd"
                            d="M12.4875 0.3125C9.97455 0.3125 8.24788 2.40917 8.24788 4.76792C8.24788 7.60458 10.1287 9.77833 11.7475 11.135C12.6794 11.9145 13.6925 12.5916 14.7691 13.1546C14.8616 13.2008 14.9387 13.2471 15.0004 13.2625L15.0621 13.2933H15.0775C15.3858 13.4475 15.7558 13.4475 16.0641 13.3088H16.0796L16.1412 13.2625C16.2029 13.2471 16.28 13.2008 16.3725 13.1546C17.4491 12.5916 18.4622 11.9145 19.3941 11.135C21.0129 9.77833 22.8937 7.60458 22.8937 4.76792C22.8937 2.40917 21.1671 0.3125 18.6541 0.3125C17.7446 0.3125 16.9275 0.512917 16.1875 0.96C15.9716 1.09875 15.7558 1.26833 15.5708 1.43792C15.3858 1.26833 15.17 1.09875 14.9541 0.96C14.2141 0.512917 13.3971 0.3125 12.4875 0.3125ZM15.9408 10.7496C15.8021 10.8267 15.6787 10.9037 15.5708 10.9654C15.4629 10.9037 15.3396 10.8267 15.2008 10.7496C14.5078 10.3393 13.848 9.87541 13.2275 9.36208C11.7629 8.14417 10.5604 6.55625 10.5604 4.76792C10.5604 3.48833 11.4391 2.625 12.4875 2.625C13.0425 2.625 13.4279 2.74833 13.7208 2.91792C14.0137 3.10292 14.2912 3.41125 14.5379 3.90458C14.7383 4.29 15.1391 4.53667 15.5708 4.53667C16.0025 4.53667 16.4033 4.29 16.6037 3.90458C16.8504 3.41125 17.1279 3.10292 17.4208 2.91792C17.7137 2.74833 18.0991 2.625 18.6541 2.625C19.7025 2.625 20.5812 3.48833 20.5812 4.76792C20.5812 6.55625 19.3787 8.14417 17.9141 9.36208C17.205 9.96333 16.4804 10.4258 15.9408 10.7496ZM10.175 16.5C6.1358 16.5 2.85205 19.7837 2.85205 23.8229C2.85205 27.8621 6.1358 31.1458 10.175 31.1458C11.47 31.1458 12.7033 30.8067 13.7516 30.2054C12.1868 28.4483 11.325 26.1758 11.3312 23.8229C11.3312 21.3717 12.2408 19.1362 13.7516 17.4404C12.7033 16.8392 11.47 16.5 10.175 16.5ZM10.175 33.4583C12.1791 33.4583 14.0291 32.8571 15.5708 31.8087C17.1125 32.8571 18.9625 33.4583 20.9666 33.4583C26.2854 33.4583 30.6021 29.1417 30.6021 23.8229C30.6021 18.5042 26.2854 14.1875 20.9666 14.1875C18.9625 14.1875 17.1125 14.7887 15.5708 15.8371C14.0291 14.7887 12.1791 14.1875 10.175 14.1875C4.85622 14.1875 0.539551 18.5042 0.539551 23.8229C0.539551 29.1417 4.85622 33.4583 10.175 33.4583ZM20.9666 16.5C19.6716 16.5 18.4383 16.8392 17.39 17.4404C18.9008 19.1362 19.8104 21.3717 19.8104 23.8229C19.8104 26.2742 18.9008 28.5096 17.39 30.2054C18.4383 30.8067 19.6716 31.1458 20.9666 31.1458C25.0058 31.1458 28.2896 27.8621 28.2896 23.8229C28.2896 19.7837 25.0058 16.5 20.9666 16.5ZM17.4979 23.8229C17.4979 21.9112 16.7733 20.1692 15.5708 18.8742C14.3683 20.1692 13.6437 21.9112 13.6437 23.8229C13.6437 25.7346 14.3683 27.4767 15.5708 28.7717C16.7733 27.4767 17.4979 25.7346 17.4979 23.8229Z"
                            fill="#5B5B5B" />
                    </svg>
                    &nbsp;&nbsp;<a href="https://www.jitomatrimony.in/" target="_blank" class="custom-link">JITO
                        Matrimony</a>
                </div>
                <div class="project-item svg-button">
                    {{--  <i class="material-icons" style="font-size: 37px; margin-right: 8px;">forum</i>  --}}
                    <svg class="svg-default" width="27" height="24" viewBox="0 0 27 24" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M26.4269 23.1333C26.3797 23.529 26.152 23.7921 25.744 23.9227C25.337 24.0532 24.9773 23.9622 24.6648 23.6498L22.0409 21.0212H7.3334C6.68076 21.0212 6.12268 20.789 5.65915 20.3244C5.19562 19.8599 4.96334 19.3013 4.96232 18.6486V18.294H21.563C22.2475 18.294 22.8333 18.0499 23.3205 17.5618C23.8087 17.0736 24.0528 16.4877 24.0528 15.8042V5.25H24.4089C25.0615 5.25 25.6201 5.48228 26.0847 5.94683C26.5492 6.41139 26.7815 6.96999 26.7815 7.62262V22.7695C26.7815 22.8754 26.7456 22.9627 26.6736 23.0316C26.6027 23.0994 26.5215 23.1333 26.4269 23.1333ZM1.75873 16.222L4.31173 13.6706H18.4796C18.7561 13.6706 18.9833 13.5817 19.1611 13.4039C19.3389 13.2261 19.4278 12.9984 19.4278 12.7209V3.11633C19.4278 2.83883 19.3389 2.61118 19.1611 2.43337C18.9833 2.25557 18.7566 2.16667 18.4812 2.16667H2.7084C2.4309 2.16667 2.20376 2.25557 2.02698 2.43337C1.84918 2.61118 1.76027 2.83883 1.76027 3.11633L1.75873 16.222ZM1.45194 18.2108C1.14669 18.2108 0.864051 18.0977 0.604023 17.8716C0.343996 17.6455 0.21501 17.3367 0.217065 16.9451V3.11633C0.217065 2.43081 0.460648 1.84446 0.947815 1.35729C1.43704 0.869097 2.0239 0.625 2.7084 0.625H18.4796C19.1652 0.625 19.752 0.869097 20.2402 1.35729C20.7274 1.84446 20.971 2.43029 20.971 3.11479V12.7209C20.971 13.4064 20.7274 13.9928 20.2402 14.48C19.752 14.9682 19.1657 15.2122 18.4812 15.2122H4.95923L2.33377 17.8393C2.19913 17.9729 2.05679 18.0684 1.90673 18.126C1.75668 18.1836 1.60508 18.2123 1.45194 18.2123"
                            fill="white" />
                    </svg>

                    <svg class="svg-hover" width="28" height="24" viewBox="0 0 28 24" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M26.8019 22.9667C26.7547 23.3624 26.527 23.6255 26.119 23.756C25.712 23.8866 25.3523 23.7956 25.0398 23.4832L22.4159 20.8546H7.7084C7.05576 20.8546 6.49768 20.6223 6.03415 20.1578C5.57062 19.6932 5.33834 19.1346 5.33732 18.482V18.1274H21.938C22.6225 18.1274 23.2083 17.8833 23.6955 17.3951C24.1837 16.9069 24.4278 16.3211 24.4278 15.6376V5.08337H24.7839C25.4365 5.08337 25.9951 5.31565 26.4597 5.78021C26.9242 6.24476 27.1565 6.80336 27.1565 7.456V22.6029C27.1565 22.7087 27.1206 22.7961 27.0486 22.865C26.9777 22.9328 26.8965 22.9667 26.8019 22.9667ZM2.13373 16.0554L4.68673 13.504H18.8546C19.1311 13.504 19.3583 13.4151 19.5361 13.2372C19.7139 13.0594 19.8028 12.8318 19.8028 12.5543V2.94971C19.8028 2.67221 19.7139 2.44455 19.5361 2.26675C19.3583 2.08894 19.1316 2.00004 18.8562 2.00004H3.0834C2.8059 2.00004 2.57876 2.08894 2.40198 2.26675C2.22418 2.44455 2.13527 2.67221 2.13527 2.94971L2.13373 16.0554ZM1.82694 18.0442C1.52169 18.0442 1.23905 17.9311 0.979023 17.705C0.718996 17.4789 0.59001 17.17 0.592065 16.7785V2.94971C0.592065 2.26418 0.835648 1.67783 1.32282 1.19067C1.81204 0.702471 2.3989 0.458374 3.0834 0.458374H18.8546C19.5402 0.458374 20.127 0.702471 20.6152 1.19067C21.1024 1.67783 21.346 2.26367 21.346 2.94817V12.5543C21.346 13.2398 21.1024 13.8262 20.6152 14.3133C20.127 14.8015 19.5407 15.0456 18.8562 15.0456H5.33423L2.70877 17.6726C2.57413 17.8062 2.43179 17.9018 2.28173 17.9594C2.13168 18.0169 1.98008 18.0457 1.82694 18.0457"
                            fill="#5B5B5B" />
                    </svg>

                    &nbsp;&nbsp;<a href="https://temp.jito.org/jpf/" target="_blank" class="custom-link">JITO
                        Professional Forum</a>
                </div>
                <div class="project-item svg-button">
                    {{--  <i class="fas fa-graduation-cap" style="font-size: 37px; margin-right: 8px;"></i>  --}}
                    <svg class="svg-default" width="37" height="27" viewBox="0 0 37 27" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <path d="M1.625 8.1375L18.7054 1.3125L35.7858 8.1375L18.7054 14.9625L1.625 8.1375Z" stroke="white"
                            stroke-width="2" stroke-linejoin="round" />
                        <path
                            d="M35.7857 8.22693V15.7206M9.38916 11.7329V21.842C9.38916 21.842 13.2973 25.6876 18.7053 25.6876C24.1141 25.6876 28.0222 21.842 28.0222 21.842V11.7329"
                            stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                    </svg>
                    <svg class="svg-hover" width="37" height="27" viewBox="0 0 37 27" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <path d="M1.6958 8.1375L18.7762 1.3125L35.8566 8.1375L18.7762 14.9625L1.6958 8.1375Z"
                            stroke="#5B5B5B" stroke-width="2" stroke-linejoin="round" />
                        <path
                            d="M35.8565 8.22693V15.7206M9.45996 11.7329V21.842C9.45996 21.842 13.3681 25.6876 18.7761 25.6876C24.1849 25.6876 28.093 21.842 28.093 21.842V11.7329"
                            stroke="#5B5B5B" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                    </svg>


                    &nbsp;&nbsp;<a href="https://www.jatf.in/" target="_blank" class="custom-link">JITO Administrative
                        Training Foundation</a>
                </div>

                <div class="project-item svg-button">
                    {{--  <i class="fas fa-briefcase" style="font-size: 37px; margin-right: 8px;"></i>  --}}
                    <svg class="svg-default" width="29" height="25" viewBox="0 0 29 25" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M3.11633 24.8333C2.40614 24.8333 1.81363 24.5959 1.33879 24.121C0.863958 23.6462 0.626028 23.0532 0.625 22.342V7.28296C0.625 6.57277 0.862931 5.98025 1.33879 5.50542C1.81465 5.03059 2.40665 4.79266 3.11479 4.79163H9.875V2.65642C9.875 1.94725 10.1129 1.35474 10.5888 0.878879C11.0647 0.403018 11.6572 0.165602 12.3663 0.166629H16.6352C17.3444 0.166629 17.9369 0.404046 18.4128 0.878879C18.8886 1.35371 19.126 1.94623 19.125 2.65642V4.79163H25.8852C26.5944 4.79163 27.1864 5.02956 27.6612 5.50542C28.136 5.98128 28.374 6.5738 28.375 7.28296V22.3435C28.375 23.0527 28.1371 23.6452 27.6612 24.121C27.1853 24.5969 26.5933 24.8343 25.8852 24.8333H3.11633ZM11.4167 4.79163H17.5833V2.65642C17.5833 2.42003 17.4847 2.20266 17.2873 2.0043C17.09 1.80593 16.8726 1.70727 16.6352 1.7083H12.3648C12.1284 1.7083 11.911 1.80696 11.7127 2.0043C11.5143 2.20163 11.4156 2.419 11.4167 2.65642V4.79163ZM26.8333 16.3541H17.5833V17.421C17.5833 17.7786 17.4651 18.0757 17.2288 18.312C16.9924 18.5484 16.6953 18.6666 16.3377 18.6666H12.6623C12.3047 18.6666 12.0076 18.5484 11.7712 18.312C11.5349 18.0757 11.4167 17.7786 11.4167 17.421V16.3541H2.16667V22.3435C2.16667 22.5799 2.26533 22.7973 2.46267 22.9956C2.66 23.194 2.87737 23.2927 3.11479 23.2916H25.8852C26.1216 23.2916 26.339 23.193 26.5373 22.9956C26.7357 22.7983 26.8344 22.5804 26.8333 22.342V16.3541ZM12.9583 17.125H16.0417V14.0416H12.9583V17.125ZM2.16667 14.8125H11.4167V13.7456C11.4167 13.388 11.5349 13.0909 11.7712 12.8545C12.0076 12.6182 12.3047 12.5 12.6623 12.5H16.3377C16.6953 12.5 16.9924 12.6182 17.2288 12.8545C17.4651 13.0909 17.5833 13.388 17.5833 13.7456V14.8125H26.8333V7.28296C26.8333 7.04555 26.7347 6.82766 26.5373 6.6293C26.34 6.43094 26.1226 6.33227 25.8852 6.3333H3.11479C2.8784 6.3333 2.66103 6.43196 2.46267 6.6293C2.26431 6.82663 2.16564 7.04452 2.16667 7.28296V14.8125Z"
                            fill="white" />
                    </svg>

                    <svg class="svg-hover" width="28" height="25" viewBox="0 0 28 25" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M2.49133 24.6667C1.78114 24.6667 1.18863 24.4293 0.713792 23.9544C0.238958 23.4796 0.00102778 22.8866 0 22.1753V7.11634C0 6.40614 0.237931 5.81363 0.713792 5.33879C1.18965 4.86396 1.78165 4.62603 2.48979 4.625H9.25V2.48979C9.25 1.78063 9.48793 1.18811 9.96379 0.712253C10.4397 0.236392 11.0322 -0.00102446 11.7413 3.32256e-06H16.0102C16.7194 3.32256e-06 17.3119 0.23742 17.7877 0.712253C18.2636 1.18709 18.501 1.7796 18.5 2.48979V4.625H25.2602C25.9694 4.625 26.5614 4.86293 27.0362 5.33879C27.511 5.81466 27.749 6.40717 27.75 7.11634V22.1769C27.75 22.886 27.5121 23.4786 27.0362 23.9544C26.5603 24.4303 25.9683 24.6677 25.2602 24.6667H2.49133ZM10.7917 4.625H16.9583V2.48979C16.9583 2.25341 16.8597 2.03603 16.6623 1.83767C16.465 1.63931 16.2476 1.54064 16.0102 1.54167H11.7398C11.5034 1.54167 11.286 1.64034 11.0877 1.83767C10.8893 2.035 10.7906 2.25238 10.7917 2.48979V4.625ZM26.2083 16.1875H16.9583V17.2543C16.9583 17.612 16.8401 17.909 16.6038 18.1454C16.3674 18.3818 16.0703 18.5 15.7127 18.5H12.0373C11.6797 18.5 11.3826 18.3818 11.1462 18.1454C10.9099 17.909 10.7917 17.612 10.7917 17.2543V16.1875H1.54167V22.1769C1.54167 22.4133 1.64033 22.6306 1.83767 22.829C2.035 23.0274 2.25237 23.126 2.48979 23.125H25.2602C25.4966 23.125 25.714 23.0263 25.9123 22.829C26.1107 22.6317 26.2094 22.4138 26.2083 22.1753V16.1875ZM12.3333 16.9583H15.4167V13.875H12.3333V16.9583ZM1.54167 14.6458H10.7917V13.579C10.7917 13.2213 10.9099 12.9243 11.1462 12.6879C11.3826 12.4515 11.6797 12.3333 12.0373 12.3333H15.7127C16.0703 12.3333 16.3674 12.4515 16.6038 12.6879C16.8401 12.9243 16.9583 13.2213 16.9583 13.579V14.6458H26.2083V7.11634C26.2083 6.87892 26.1097 6.66103 25.9123 6.46267C25.715 6.26431 25.4976 6.16564 25.2602 6.16667H2.48979C2.2534 6.16667 2.03603 6.26534 1.83767 6.46267C1.63931 6.66 1.54064 6.87789 1.54167 7.11634V14.6458Z"
                            fill="#5B5B5B" />
                    </svg>

                    &nbsp;&nbsp;<a href="https://jitojbn.org/" target="_blank" class="custom-link">JITO Business
                        Network</a>
                </div>
                <div class="project-item svg-button">
                    {{--  <i class="fas fa-child" style="font-size: 37px; margin-right: 8px;"></i>  --}}
                    <svg class="svg-default" width="31" height="35" viewBox="0 0 31 35" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" clip-rule="evenodd"
                            d="M15.4999 3.23962C15.1456 3.23962 14.7947 3.30941 14.4674 3.44499C14.1401 3.58057 13.8427 3.7793 13.5921 4.02983C13.3416 4.28035 13.1429 4.57777 13.0073 4.90509C12.8717 5.23242 12.8019 5.58325 12.8019 5.93754C12.8019 6.29184 12.8717 6.64266 13.0073 6.96999C13.1429 7.29731 13.3416 7.59473 13.5921 7.84526C13.8427 8.09578 14.1401 8.29451 14.4674 8.43009C14.7947 8.56567 15.1456 8.63546 15.4999 8.63546C16.2154 8.63546 16.9016 8.35121 17.4076 7.84526C17.9135 7.3393 18.1978 6.65307 18.1978 5.93754C18.1978 5.22201 17.9135 4.53578 17.4076 4.02983C16.9016 3.52387 16.2154 3.23962 15.4999 3.23962ZM10.4894 5.93754C10.4894 4.6087 11.0173 3.33428 11.957 2.39464C12.8966 1.45501 14.171 0.927124 15.4999 0.927124C16.8287 0.927124 18.1031 1.45501 19.0428 2.39464C19.9824 3.33428 20.5103 4.6087 20.5103 5.93754C20.5103 7.26639 19.9824 8.5408 19.0428 9.48044C18.1031 10.4201 16.8287 10.948 15.4999 10.948C14.171 10.948 12.8966 10.4201 11.957 9.48044C11.0173 8.5408 10.4894 7.26639 10.4894 5.93754ZM16.8396 14.1423C15.9525 13.9949 15.0472 13.9949 14.1601 14.1423C10.2952 14.7944 7.40765 18.1876 7.40765 22.1559C7.40765 23.0254 6.91894 23.8286 6.13732 24.2232L2.14594 26.2413C1.87393 26.3669 1.56378 26.3821 1.28083 26.2835C0.997879 26.185 0.764233 25.9804 0.629121 25.713C0.494009 25.4456 0.467983 25.1361 0.556525 24.8499C0.645067 24.5637 0.841264 24.323 1.10377 24.1785L5.09207 22.162L5.09361 22.1574C5.09361 17.0607 8.79669 12.7024 13.7763 11.8637C14.9175 11.6735 16.0823 11.6735 17.2234 11.8637C22.203 12.7024 25.9061 17.0607 25.9061 22.1574V22.162L29.8959 24.1785C30.0369 24.2436 30.1633 24.3365 30.2676 24.4515C30.3719 24.5665 30.452 24.7013 30.503 24.8479C30.5541 24.9946 30.5751 25.15 30.5648 25.3049C30.5546 25.4598 30.5132 25.6111 30.4431 25.7496C30.3731 25.8882 30.2759 26.0113 30.1573 26.1115C30.0387 26.2117 29.9012 26.287 29.7528 26.3329C29.6045 26.3787 29.4484 26.3943 29.294 26.3785C29.1395 26.3628 28.9898 26.3161 28.8538 26.2413L24.8624 24.2248C24.4802 24.0315 24.1592 23.7358 23.9352 23.3708C23.7112 23.0058 23.5929 22.5857 23.5936 22.1574C23.5936 18.1892 20.7061 14.796 16.8396 14.1438M12.3394 22.7417C12.5848 22.9257 12.747 23.1996 12.7903 23.5032C12.8337 23.8068 12.7547 24.1151 12.5707 24.3605L10.9581 26.5111L10.8486 26.6545C10.253 27.4079 9.41919 27.9368 8.48373 28.1545L8.4714 28.1576L6.18202 28.7295C5.65058 28.8618 5.17873 29.1682 4.84175 29.5999C4.50477 30.0316 4.32206 30.5638 4.32277 31.1114C4.32277 31.4691 4.61415 31.7605 4.97182 31.7605H7.37065C8.32186 31.7605 8.70419 31.7589 9.07111 31.7142C9.96265 31.6098 10.8232 31.3233 11.5994 30.8725C11.917 30.6875 12.2238 30.4593 12.9839 29.8889L13.2644 29.6792L16.3478 27.3667C16.5931 27.1827 16.9015 27.1037 17.205 27.1471C17.5086 27.1904 17.7825 27.3526 17.9665 27.598C18.1505 27.8433 18.2295 28.1516 18.1862 28.4552C18.1428 28.7588 17.9806 29.0327 17.7353 29.2167L16.3416 30.262L18.2795 30.9896C19.2461 31.3519 19.6361 31.4953 20.0324 31.5893C20.2451 31.6387 20.4609 31.6777 20.6799 31.7065C21.0822 31.7589 21.4969 31.7605 22.5299 31.7605H26.0279C26.1132 31.7607 26.1977 31.744 26.2765 31.7115C26.3554 31.6789 26.427 31.6311 26.4873 31.5708C26.5476 31.5105 26.5954 31.4389 26.628 31.36C26.6605 31.2812 26.6771 31.1967 26.6769 31.1114C26.6769 29.986 25.9107 29.0024 24.8177 28.7295L22.516 28.1545L22.3433 28.1082C21.4178 27.8518 20.6068 27.2886 20.0431 26.5111L20.0354 26.5018L18.429 24.3605C18.3379 24.239 18.2716 24.1008 18.2339 23.9537C18.1963 23.8066 18.1879 23.6535 18.2094 23.5032C18.2309 23.3529 18.2817 23.2083 18.3591 23.0776C18.4365 22.9469 18.5388 22.8328 18.6603 22.7417C18.7817 22.6506 18.92 22.5843 19.0671 22.5466C19.2142 22.5089 19.3672 22.5006 19.5175 22.5221C19.6679 22.5436 19.8125 22.5944 19.9431 22.6718C20.0738 22.7491 20.1879 22.8515 20.279 22.973L21.8854 25.1143L21.9656 25.2207C22.2468 25.5771 22.6448 25.8228 23.0895 25.9145L25.3789 26.4849C26.4105 26.7423 27.3264 27.3374 27.9807 28.1755C28.635 29.0137 28.9901 30.0466 28.9894 31.1099C28.9894 32.7471 27.6636 34.073 26.0279 34.073H22.4512C21.5216 34.073 20.9496 34.073 20.3808 33.999C20.0865 33.9601 19.7943 33.9071 19.5051 33.8402C18.947 33.7091 18.4105 33.5087 17.5426 33.1834L14.1463 31.91C13.5589 32.3494 13.1719 32.6346 12.7588 32.872C11.7096 33.4823 10.5463 33.8706 9.3409 34.0128C8.82444 34.0745 8.29873 34.073 7.44465 34.073H4.97336C4.58452 34.073 4.19948 33.9963 3.84026 33.8475C3.48103 33.6986 3.15466 33.4805 2.87978 33.2054C2.6049 32.9304 2.3869 32.6039 2.23823 32.2446C2.08957 31.8853 2.01316 31.5003 2.01336 31.1114C2.01262 30.0483 2.36749 29.0156 3.02149 28.1775C3.67548 27.3394 4.59103 26.7441 5.6224 26.4864L7.91177 25.9145L8.04128 25.8805C8.47847 25.7596 8.85898 25.4882 9.11582 25.1143L10.7207 22.973C10.8118 22.8515 10.9259 22.7491 11.0566 22.6718C11.1872 22.5944 11.3319 22.5436 11.4822 22.5221C11.6325 22.5006 11.7856 22.5089 11.9326 22.5466C12.0797 22.5843 12.218 22.6506 12.3394 22.7417Z"
                            fill="white" />
                    </svg>
                    <svg class="svg-hover" width="31" height="35" viewBox="0 0 31 35" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" clip-rule="evenodd"
                            d="M15.5707 3.23975C15.2164 3.23975 14.8655 3.30953 14.5382 3.44511C14.2109 3.5807 13.9135 3.77942 13.6629 4.02995C13.4124 4.28047 13.2137 4.57789 13.0781 4.90521C12.9425 5.23254 12.8727 5.58337 12.8727 5.93766C12.8727 6.29196 12.9425 6.64278 13.0781 6.97011C13.2137 7.29744 13.4124 7.59485 13.6629 7.84538C13.9135 8.0959 14.2109 8.29463 14.5382 8.43021C14.8655 8.5658 15.2164 8.63558 15.5707 8.63558C16.2862 8.63558 16.9724 8.35134 17.4784 7.84538C17.9843 7.33942 18.2686 6.65319 18.2686 5.93766C18.2686 5.22213 17.9843 4.53591 17.4784 4.02995C16.9724 3.52399 16.2862 3.23975 15.5707 3.23975ZM10.5602 5.93766C10.5602 4.60882 11.0881 3.3344 12.0278 2.39476C12.9674 1.45513 14.2418 0.927246 15.5707 0.927246C16.8995 0.927246 18.1739 1.45513 19.1136 2.39476C20.0532 3.3344 20.5811 4.60882 20.5811 5.93766C20.5811 7.26651 20.0532 8.54093 19.1136 9.48056C18.1739 10.4202 16.8995 10.9481 15.5707 10.9481C14.2418 10.9481 12.9674 10.4202 12.0278 9.48056C11.0881 8.54093 10.5602 7.26651 10.5602 5.93766ZM16.9104 14.1424C16.0233 13.995 15.118 13.995 14.231 14.1424C10.366 14.7945 7.47845 18.1877 7.47845 22.156C7.47845 23.0255 6.98974 23.8287 6.20812 24.2234L2.21674 26.2414C1.94473 26.367 1.63458 26.3822 1.35163 26.2836C1.06868 26.1851 0.835034 25.9805 0.699922 25.7131C0.56481 25.4457 0.538783 25.1363 0.627325 24.85C0.715868 24.5638 0.912064 24.3231 1.17458 24.1787L5.16287 22.1622L5.16441 22.1575C5.16441 17.0608 8.86749 12.7025 13.8471 11.8638C14.9883 11.6736 16.1531 11.6736 17.2942 11.8638C22.2738 12.7025 25.9769 17.0608 25.9769 22.1575V22.1622L29.9667 24.1787C30.1077 24.2438 30.2341 24.3366 30.3384 24.4516C30.4427 24.5666 30.5228 24.7014 30.5739 24.8481C30.6249 24.9947 30.6459 25.1501 30.6356 25.305C30.6254 25.4599 30.584 25.6112 30.5139 25.7498C30.4439 25.8883 30.3467 26.0114 30.2281 26.1116C30.1095 26.2118 29.972 26.2871 29.8236 26.333C29.6753 26.3789 29.5192 26.3944 29.3648 26.3787C29.2103 26.3629 29.0606 26.3163 28.9246 26.2414L24.9332 24.2249C24.551 24.0316 24.23 23.736 24.006 23.3709C23.782 23.0059 23.6637 22.5858 23.6644 22.1575C23.6644 18.1893 20.7769 14.7961 16.9104 14.144M12.4102 22.7418C12.6556 22.9258 12.8178 23.1997 12.8611 23.5033C12.9045 23.8069 12.8255 24.1153 12.6415 24.3606L11.0289 26.5112L10.9194 26.6546C10.3238 27.408 9.49 27.9369 8.55453 28.1546L8.5422 28.1577L6.25283 28.7297C5.72138 28.8619 5.24954 29.1683 4.91255 29.6001C4.57557 30.0318 4.39286 30.5639 4.39358 31.1115C4.39358 31.4692 4.68495 31.7606 5.04262 31.7606H7.44145C8.39266 31.7606 8.77499 31.759 9.14191 31.7143C10.0334 31.6099 10.894 31.3234 11.6702 30.8726C11.9878 30.6876 12.2946 30.4594 13.0547 29.889L13.3352 29.6793L16.4186 27.3668C16.6639 27.1828 16.9723 27.1038 17.2758 27.1472C17.5794 27.1906 17.8533 27.3528 18.0373 27.5981C18.2213 27.8434 18.3003 28.1518 18.257 28.4553C18.2136 28.7589 18.0514 29.0328 17.8061 29.2168L16.4124 30.2621L18.3503 30.9897C19.3169 31.352 19.707 31.4954 20.1032 31.5895C20.3159 31.6388 20.5317 31.6778 20.7507 31.7066C21.153 31.759 21.5677 31.7606 22.6007 31.7606H26.0987C26.184 31.7608 26.2685 31.7441 26.3473 31.7116C26.4262 31.679 26.4978 31.6312 26.5581 31.5709C26.6184 31.5106 26.6662 31.439 26.6988 31.3602C26.7313 31.2813 26.7479 31.1968 26.7477 31.1115C26.7477 29.9861 25.9815 29.0025 24.8885 28.7297L22.5868 28.1546L22.4141 28.1084C21.4886 27.8519 20.6776 27.2887 20.114 26.5112L20.1062 26.502L18.4998 24.3606C18.4087 24.2391 18.3424 24.1009 18.3048 23.9538C18.2671 23.8067 18.2587 23.6536 18.2802 23.5033C18.3017 23.353 18.3525 23.2084 18.4299 23.0777C18.5073 22.9471 18.6096 22.8329 18.7311 22.7418C18.8525 22.6507 18.9908 22.5844 19.1379 22.5468C19.285 22.5091 19.438 22.5007 19.5883 22.5222C19.7387 22.5437 19.8833 22.5945 20.0139 22.6719C20.1446 22.7493 20.2587 22.8516 20.3498 22.9731L21.9562 25.1145L22.0364 25.2208C22.3176 25.5772 22.7156 25.8229 23.1603 25.9146L25.4497 26.485C26.4813 26.7424 27.3972 27.3375 28.0515 28.1756C28.7058 29.0138 29.0609 30.0467 29.0602 31.11C29.0602 32.7472 27.7344 34.0731 26.0987 34.0731H22.522C21.5924 34.0731 21.0205 34.0731 20.4516 33.9991C20.1573 33.9602 19.8651 33.9072 19.5759 33.8403C19.0178 33.7092 18.4813 33.5088 17.6134 33.1835L14.2171 31.9101C13.6297 32.3495 13.2427 32.6347 12.8296 32.8721C11.7804 33.4824 10.6171 33.8707 9.4117 34.013C8.89524 34.0746 8.36953 34.0731 7.51545 34.0731H5.04416C4.65532 34.0731 4.27028 33.9965 3.91106 33.8476C3.55184 33.6988 3.22546 33.4806 2.95058 33.2056C2.6757 32.9305 2.4577 32.6041 2.30903 32.2448C2.16037 31.8855 2.08396 31.5004 2.08416 31.1115C2.08342 30.0485 2.43829 29.0157 3.09229 28.1776C3.74629 27.3395 4.66183 26.7442 5.6932 26.4865L7.98258 25.9146L8.11208 25.8807C8.54927 25.7597 8.92978 25.4884 9.18662 25.1145L10.7915 22.9731C10.8826 22.8516 10.9967 22.7493 11.1274 22.6719C11.258 22.5945 11.4027 22.5437 11.553 22.5222C11.7033 22.5007 11.8564 22.5091 12.0035 22.5468C12.1505 22.5844 12.2888 22.6507 12.4102 22.7418Z"
                            fill="#5B5B5B" />
                    </svg>

                    &nbsp;&nbsp;<a href="https://shraman.jito.org/" target="_blank" class="custom-link">JITO Shraman
                        Arogyam</a>
                </div>
                <div class="project-item svg-button">
                    {{--  <i class="fas fa-baseball-ball" style="font-size: 37px; margin-right: 8px;"></i>  --}}
                    <svg class="svg-default" width="29" height="29" viewBox="0 0 29 29" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M5.10817 22.5521C6.38261 21.6138 7.36722 20.4328 8.062 19.0094C8.75678 17.5859 9.10417 16.0828 9.10417 14.5C9.10417 12.9172 8.75678 11.4141 8.062 9.99063C7.36722 8.56715 6.38261 7.38624 5.10817 6.44788C4.15233 7.58563 3.42312 8.83849 2.92054 10.2065C2.41796 11.5744 2.16667 13.0056 2.16667 14.5C2.16667 15.9944 2.41847 17.4256 2.92208 18.7935C3.42569 20.1615 4.15439 21.4144 5.10817 22.5521ZM14.5 26.8333C16.0314 26.8333 17.5037 26.5641 18.9169 26.0255C20.3301 25.4869 21.605 24.6986 22.7418 23.6606C21.3563 22.5187 20.2787 21.1554 19.5089 19.5705C18.7391 17.9867 18.3542 16.2966 18.3542 14.5C18.3542 12.7034 18.7391 11.0128 19.5089 9.42792C20.2787 7.84514 21.3563 6.48231 22.7418 5.33942C21.604 4.30136 20.329 3.51306 18.9169 2.9745C17.5047 2.43594 16.0324 2.16667 14.5 2.16667C12.9676 2.16667 11.4958 2.43594 10.0847 2.9745C8.67353 3.51306 7.39806 4.30136 6.25825 5.33942C7.64369 6.48128 8.72081 7.84411 9.48958 9.42792C10.2604 11.0128 10.6458 12.7034 10.6458 14.5C10.6458 16.2966 10.2609 17.9873 9.49113 19.5721C8.72132 21.1549 7.64369 22.5177 6.25825 23.6606C7.396 24.6986 8.67096 25.4869 10.0831 26.0255C11.4953 26.5641 12.9676 26.8333 14.5 26.8333ZM23.8918 22.5521C24.8477 21.4144 25.5769 20.161 26.0795 18.792C26.582 17.4251 26.8333 15.9944 26.8333 14.5C26.8333 13.0056 26.5815 11.5749 26.0779 10.208C25.5743 8.84105 24.8456 7.58768 23.8918 6.44788C22.6174 7.38726 21.6328 8.56818 20.938 9.99063C20.2432 11.4131 19.8958 12.9162 19.8958 14.5C19.8958 16.0838 20.2432 17.5869 20.938 19.0094C21.6328 20.4318 22.6174 21.6127 23.8918 22.5521ZM14.5046 28.375C12.5868 28.375 10.783 28.0112 9.09338 27.2835C7.40474 26.5548 5.93553 25.5661 4.68575 24.3173C3.43597 23.0686 2.44674 21.6009 1.71804 19.9143C0.989347 18.2278 0.625 16.4245 0.625 14.5046C0.625 12.5847 0.989347 10.781 1.71804 9.09338C2.44571 7.40474 3.43289 5.93553 4.67958 4.68575C5.92628 3.43597 7.39446 2.44674 9.08413 1.71804C10.7738 0.989347 12.5775 0.625 14.4954 0.625C16.4132 0.625 18.217 0.989347 19.9066 1.71804C21.5953 2.44571 23.0645 3.4334 24.3142 4.68113C25.564 5.92885 26.5533 7.39703 27.282 9.08567C28.0107 10.7743 28.375 12.5775 28.375 14.4954C28.375 16.4132 28.0112 18.217 27.2835 19.9066C26.5558 21.5963 25.5671 23.0655 24.3173 24.3143C23.0676 25.563 21.5999 26.5522 19.9143 27.282C18.2288 28.0117 16.4255 28.376 14.5046 28.375Z"
                            fill="white" />
                    </svg>
                    <svg class="svg-hover" width="28" height="29" viewBox="0 0 28 29" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M4.48317 22.3855C5.75761 21.4471 6.74222 20.2662 7.437 18.8428C8.13178 17.4193 8.47917 15.9162 8.47917 14.3334C8.47917 12.7506 8.13178 11.2475 7.437 9.824C6.74222 8.40053 5.75761 7.21961 4.48317 6.28125C3.52733 7.419 2.79812 8.67186 2.29554 10.0398C1.79296 11.4078 1.54167 12.839 1.54167 14.3334C1.54167 15.8278 1.79347 17.2589 2.29708 18.6269C2.80069 19.9949 3.52939 21.2477 4.48317 22.3855ZM13.875 26.6667C15.4064 26.6667 16.8787 26.3974 18.2919 25.8589C19.7051 25.3203 20.98 24.532 22.1168 23.494C20.7313 22.3521 19.6537 20.9887 18.8839 19.4039C18.1141 17.8201 17.7292 16.1299 17.7292 14.3334C17.7292 12.5368 18.1141 10.8461 18.8839 9.26129C19.6537 7.67851 20.7313 6.31568 22.1168 5.17279C20.979 4.13474 19.704 3.34643 18.2919 2.80787C16.8797 2.26932 15.4074 2.00004 13.875 2.00004C12.3426 2.00004 10.8708 2.26932 9.45967 2.80787C8.04853 3.34643 6.77306 4.13474 5.63325 5.17279C7.01869 6.31465 8.09581 7.67749 8.86458 9.26129C9.63542 10.8461 10.0208 12.5368 10.0208 14.3334C10.0208 16.1299 9.63593 17.8206 8.86613 19.4055C8.09632 20.9882 7.01869 22.3511 5.63325 23.494C6.771 24.532 8.04596 25.3203 9.45813 25.8589C10.8703 26.3974 12.3426 26.6667 13.875 26.6667ZM23.2668 22.3855C24.2227 21.2477 24.9519 19.9944 25.4545 18.6254C25.957 17.2584 26.2083 15.8278 26.2083 14.3334C26.2083 12.839 25.9565 11.4083 25.4529 10.0414C24.9493 8.67443 24.2206 7.42105 23.2668 6.28125C21.9924 7.22064 21.0078 8.40155 20.313 9.824C19.6182 11.2464 19.2708 12.7496 19.2708 14.3334C19.2708 15.9172 19.6182 17.4203 20.313 18.8428C21.0078 20.2652 21.9924 21.4461 23.2668 22.3855ZM13.8796 28.2084C11.9618 28.2084 10.158 27.8445 8.46837 27.1169C6.77974 26.3882 5.31053 25.3995 4.06075 24.1507C2.81097 22.902 1.82174 21.4343 1.09304 19.7477C0.364347 18.0611 0 16.2579 0 14.338C0 12.4181 0.364347 10.6144 1.09304 8.92675C1.82071 7.23811 2.80789 5.7689 4.05458 4.51912C5.30128 3.26935 6.76946 2.28011 8.45913 1.55142C10.1488 0.822721 11.9525 0.458374 13.8704 0.458374C15.7882 0.458374 17.592 0.822721 19.2816 1.55142C20.9703 2.27908 22.4395 3.26678 23.6892 4.5145C24.939 5.76222 25.9283 7.2304 26.657 8.91904C27.3857 10.6077 27.75 12.4109 27.75 14.3287C27.75 16.2466 27.3862 18.0503 26.6585 19.74C25.9308 21.4297 24.9421 22.8989 23.6923 24.1476C22.4426 25.3964 20.9749 26.3856 19.2893 27.1153C17.6038 27.8451 15.8005 28.2094 13.8796 28.2084Z"
                            fill="#5B5B5B" />
                    </svg>

                    &nbsp;&nbsp;<a href="https://temp.jito.org/our-initiatives/jito-games" target="_blank"
                        class="custom-link">JITO Sports</a>
                </div>
                <div class="project-item svg-button">
                    {{--  <i class="fas fa-chart-pie" style="font-size: 37px; margin-right: 8px;"></i>  --}}
                    <svg class="svg-default" width="33" height="33" viewBox="0 0 33 33" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <circle cx="16.5" cy="16.5" r="15.5" stroke="white" stroke-width="2" />
                        <path d="M16.5 17.0001L15.5 1.50008C20.8456 0.757297 23.0732 1.8876 26.5 5.00008L16.5 17.0001Z"
                            stroke="white" stroke-width="2" />
                        <circle cx="18.5" cy="5.5" r="0.5" fill="white" />
                        <circle cx="18.5" cy="9.5" r="0.5" fill="white" />
                        <circle cx="17.5" cy="12.5" r="0.5" fill="white" />
                        <circle cx="20.5" cy="7.5" r="0.5" fill="white" />
                        <circle cx="21.5" cy="9.5" r="0.5" fill="white" />
                        <circle cx="23.5" cy="7.5" r="0.5" fill="white" />
                        <circle cx="16.5" cy="8.5" r="0.5" fill="white" />
                        <circle cx="21.5" cy="5.5" r="0.5" fill="white" />
                        <circle cx="20.5" cy="3.5" r="0.5" fill="white" />
                        <circle cx="22.5" cy="2.5" r="0.5" fill="white" />
                        <circle cx="24.5" cy="4.5" r="0.5" fill="white" />
                        <circle cx="17.5" cy="2.5" r="0.5" fill="white" />
                        <circle cx="16.5" cy="5.5" r="0.5" fill="white" />
                    </svg>
                    <svg class="svg-hover" width="34" height="33" viewBox="0 0 34 33" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <circle cx="16.5708" cy="16.5" r="15.5" stroke="#5B5B5B" stroke-width="2" />
                        <path
                            d="M16.5708 17.0001L15.5708 1.50008C20.9164 0.757297 23.144 1.8876 26.5708 5.00008L16.5708 17.0001Z"
                            stroke="#5B5B5B" stroke-width="2" />
                        <circle cx="18.5708" cy="5.5" r="0.5" fill="#5B5B5B" />
                        <circle cx="18.5708" cy="9.5" r="0.5" fill="#5B5B5B" />
                        <circle cx="17.5708" cy="12.5" r="0.5" fill="#5B5B5B" />
                        <circle cx="20.5708" cy="7.5" r="0.5" fill="#5B5B5B" />
                        <circle cx="21.5708" cy="9.5" r="0.5" fill="#5B5B5B" />
                        <circle cx="23.5708" cy="7.5" r="0.5" fill="#5B5B5B" />
                        <circle cx="16.5708" cy="8.5" r="0.5" fill="#5B5B5B" />
                        <circle cx="21.5708" cy="5.5" r="0.5" fill="#5B5B5B" />
                        <circle cx="20.5708" cy="3.5" r="0.5" fill="#5B5B5B" />
                        <circle cx="22.5708" cy="2.5" r="0.5" fill="#5B5B5B" />
                        <circle cx="24.5708" cy="4.5" r="0.5" fill="#5B5B5B" />
                        <circle cx="17.5708" cy="2.5" r="0.5" fill="#5B5B5B" />
                        <circle cx="16.5708" cy="5.5" r="0.5" fill="#5B5B5B" />
                    </svg>

                    &nbsp;&nbsp;<a href="https://jitominority.org/" target="_blank" class="custom-link">JITO Seva &
                        Minority</a>
                </div>
                <div class="project-item svg-button">
                    {{--  <i class="fas fa-lightbulb" style="font-size: 37px; margin-right: 8px;"></i>  --}}
                    <svg class="svg-default" width="31" height="32" viewBox="0 0 31 32" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M23.5968 17.2554C23.1589 20.9014 20.7709 22.3583 19.7395 23.4159C18.7066 24.4766 18.8916 24.6878 18.961 26.2433C18.9726 26.4358 18.9446 26.6286 18.8788 26.8098C18.8131 26.991 18.7109 27.1569 18.5786 27.2971C18.4463 27.4374 18.2867 27.5491 18.1096 27.6253C17.9325 27.7015 17.7416 27.7406 17.5488 27.7403H13.4511C13.2584 27.7399 13.0678 27.7003 12.8909 27.6239C12.7141 27.5475 12.5546 27.4358 12.4223 27.2958C12.29 27.1557 12.1877 26.9901 12.1215 26.8092C12.0553 26.6282 12.0267 26.4357 12.0374 26.2433C12.0374 24.7171 12.1792 24.3625 11.2604 23.4159C10.0887 22.2442 7.33219 20.59 7.33219 16.0406C7.32515 14.9105 7.55229 13.7913 7.99929 12.7534C8.44629 11.7155 9.10345 10.7814 9.92935 10.0101C10.7553 9.23878 11.732 8.64692 12.798 8.27183C13.864 7.89673 14.9961 7.74654 16.1231 7.83071C17.25 7.91488 18.3473 8.2316 19.3457 8.76089C20.3442 9.29018 21.2221 10.0206 21.9243 10.906C22.6264 11.7915 23.1376 12.8128 23.4254 13.9056C23.7133 14.9984 23.7716 16.1389 23.5968 17.2554Z"
                            stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                        <path
                            d="M13.1258 27.6555V29.9865C13.1258 30.6232 13.4804 31.1458 13.9167 31.1458H17.0817C17.5211 31.1458 17.8741 30.6217 17.8741 29.9865V27.6555M14.2975 11.4063C13.3872 11.4068 12.5143 11.7687 11.8708 12.4125C11.2272 13.0563 10.8657 13.9293 10.8657 14.8396M26.8035 16.352H29.6309M23.9576 7.08351L25.9633 5.0778M25.4992 24.2083L27.5049 26.2125M15.5 1.66455V3.95084M5.07831 5.07626L7.07015 7.08351M3.53665 26.2125L5.52848 24.2083M4.19648 16.352H1.37061"
                            stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                    </svg>
                    <svg class="svg-hover" width="30" height="32" viewBox="0 0 30 32" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M22.9718 17.0888C22.5339 20.7348 20.1459 22.1917 19.1145 23.2493C18.0816 24.3099 18.2666 24.5211 18.336 26.0767C18.3476 26.2691 18.3196 26.4619 18.2538 26.6432C18.1881 26.8244 18.0859 26.9903 17.9536 27.1305C17.8213 27.2708 17.6617 27.3824 17.4846 27.4586C17.3075 27.5349 17.1166 27.574 16.9238 27.5736H12.8261C12.6334 27.5733 12.4428 27.5337 12.2659 27.4573C12.0891 27.3809 11.9296 27.2692 11.7973 27.1291C11.665 26.9891 11.5627 26.8235 11.4965 26.6425C11.4303 26.4616 11.4017 26.2691 11.4124 26.0767C11.4124 24.5504 11.5542 24.1958 10.6354 23.2493C9.46369 22.0776 6.70719 20.4234 6.70719 15.8739C6.70015 14.7439 6.92729 13.6246 7.37429 12.5867C7.82129 11.5488 8.47845 10.6148 9.30435 9.84347C10.1303 9.07215 11.107 8.4803 12.173 8.1052C13.239 7.73011 14.3711 7.57991 15.4981 7.66409C16.625 7.74826 17.7223 8.06497 18.7207 8.59426C19.7192 9.12355 20.5971 9.85395 21.2993 10.7394C22.0014 11.6248 22.5126 12.6462 22.8004 13.7389C23.0883 14.8317 23.1466 15.9723 22.9718 17.0888Z"
                            stroke="#5B5B5B" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                        <path
                            d="M12.5008 27.4889V29.8199C12.5008 30.4566 12.8554 30.9792 13.2917 30.9792H16.4567C16.8961 30.9792 17.2491 30.455 17.2491 29.8199V27.4889M13.6725 11.2397C12.7622 11.2401 11.8893 11.602 11.2458 12.2459C10.6022 12.8897 10.2407 13.7627 10.2407 14.673M26.1785 16.1854H29.0059M23.3326 6.91688L25.3383 4.91117M24.8742 24.0417L26.8799 26.0459M14.875 1.49792V3.78422M4.45331 4.90963L6.44515 6.91688M2.91165 26.0459L4.90348 24.0417M3.57148 16.1854H0.745605"
                            stroke="#5B5B5B" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                    </svg>

                    &nbsp;&nbsp;<a href="https://temp.jito.org/leaders-speak/1282-jito-cfe" target="_blank"
                        class="custom-link">JITO Center For Excellence</a>
                </div>
                <div class="project-item svg-button">
                    {{--  <i class="fas fa-book" style="font-size: 37px; margin-right: 8px;"></i>  --}}
                    <svg class="svg-default" width="27" height="31" viewBox="0 0 27 31" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M1.1665 26.2917V4.70833C1.1665 3.89058 1.49135 3.10632 2.06959 2.52809C2.64783 1.94985 3.43209 1.625 4.24984 1.625H24.9082C25.1535 1.625 25.3888 1.72246 25.5622 1.89593C25.7357 2.0694 25.8332 2.30467 25.8332 2.55V22.7674M4.24984 23.2083H25.8332M4.24984 29.375H25.8332"
                            stroke="white" stroke-width="1.5" stroke-linecap="round" />
                        <path
                            d="M4.24984 29.375C3.43209 29.375 2.64783 29.0502 2.06959 28.472C1.49135 27.8937 1.1665 27.1095 1.1665 26.2917C1.1665 25.474 1.49135 24.6897 2.06959 24.1115C2.64783 23.5332 3.43209 23.2084 4.24984 23.2084"
                            stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                        <path d="M8.875 7.79163H18.125" stroke="white" stroke-width="1.5" stroke-linecap="round" />
                    </svg>
                    <svg class="svg-hover" width="27" height="31" viewBox="0 0 27 31" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M1.2373 26.2917V4.70833C1.2373 3.89058 1.56215 3.10632 2.14039 2.52809C2.71863 1.94985 3.50289 1.625 4.32064 1.625H24.979C25.2243 1.625 25.4596 1.72246 25.633 1.89593C25.8065 2.0694 25.904 2.30467 25.904 2.55V22.7674M4.32064 23.2083H25.904M4.32064 29.375H25.904"
                            stroke="#5B5B5B" stroke-width="1.5" stroke-linecap="round" />
                        <path
                            d="M4.32064 29.375C3.50289 29.375 2.71863 29.0502 2.14039 28.472C1.56215 27.8937 1.2373 27.1095 1.2373 26.2917C1.2373 25.474 1.56215 24.6897 2.14039 24.1115C2.71863 23.5332 3.50289 23.2084 4.32064 23.2084"
                            stroke="#5B5B5B" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                        <path d="M8.9458 7.79163H18.1958" stroke="#5B5B5B" stroke-width="1.5" stroke-linecap="round" />
                    </svg>


                    &nbsp;&nbsp;<a href="https://jitojeap.in/" target="_blank" class="custom-link">JITO Jeap</a>
                </div>
                <div class="project-item svg-button">
                    {{--  <i class="fas fa-globe" style="font-size: 37px; margin-right: 8px;"></i>  --}}
                    <svg class="svg-default" width="30" height="29" viewBox="0 0 30 29" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M0.625 14.5C0.625 12.5842 0.989861 10.7825 1.71958 9.09492C2.45033 7.40731 3.4406 5.93913 4.69037 4.69037C5.93913 3.43957 7.40731 2.44931 9.09492 1.71958C10.7825 0.989861 12.5842 0.625 14.5 0.625C17.8814 0.625 20.826 1.67744 23.3337 3.78233C25.8415 5.88722 27.4063 8.53375 28.0281 11.7219C28.0898 11.9809 28.0718 12.225 27.9742 12.4542C27.8755 12.6834 27.7069 12.816 27.4685 12.852C27.2352 12.8818 27.0358 12.8186 26.8703 12.6623C26.7059 12.5061 26.5954 12.3108 26.5389 12.0765C26.1596 10.0415 25.323 8.22028 24.029 6.61283C22.733 5.00744 21.0983 3.81471 19.125 3.03463V3.70833C19.125 4.55625 18.8233 5.28237 18.22 5.88671C17.6167 6.49104 16.8906 6.79269 16.0417 6.79167H12.9583V9.875C12.9583 10.3118 12.8103 10.6782 12.5143 10.9742C12.2183 11.2702 11.8524 11.4177 11.4167 11.4167H8.33333V14.5H9.93512C10.2918 14.5 10.5883 14.6182 10.8247 14.8546C11.0611 15.091 11.1792 15.388 11.1792 15.7457V19.125H9.875L2.475 11.725C2.39792 12.1875 2.32751 12.65 2.26379 13.1125C2.20007 13.575 2.16769 14.0375 2.16667 14.5C2.16667 17.7539 3.26536 20.5649 5.46275 22.9329C7.66014 25.3009 10.4043 26.5954 13.6952 26.8164C13.9296 26.8277 14.1223 26.9068 14.2734 27.0538C14.4245 27.2018 14.5 27.3853 14.5 27.6042C14.5 27.8231 14.4167 28.0065 14.2502 28.1545C14.0837 28.3025 13.8833 28.3704 13.649 28.358C9.99422 28.1299 6.90986 26.6879 4.39592 24.0321C1.88197 21.3763 0.625 18.199 0.625 14.5ZM27.8662 27.4145L23.0917 22.7001C22.6313 23.029 22.1323 23.286 21.5947 23.471C21.0572 23.657 20.4909 23.75 19.8958 23.75C18.384 23.75 17.107 23.2289 16.0648 22.1868C15.0216 21.1425 14.5 19.865 14.5 18.3542C14.5 16.8433 15.0216 15.5663 16.0648 14.5231C17.108 13.4799 18.385 12.9583 19.8958 12.9583C21.4067 12.9583 22.6842 13.4799 23.7284 14.5231C24.7726 15.5663 25.2937 16.8433 25.2917 18.3542C25.2917 18.9688 25.194 19.5495 24.9987 20.0963C24.8035 20.6441 24.5311 21.1482 24.1817 21.6086L28.9562 26.323C29.1207 26.4669 29.2029 26.6437 29.2029 26.8534C29.2029 27.063 29.1207 27.2501 28.9562 27.4145C28.8123 27.5584 28.6355 27.6304 28.4259 27.6304C28.2162 27.6304 28.0307 27.5584 27.8662 27.4145ZM19.8958 22.2083C20.975 22.2083 21.8872 21.8358 22.6323 21.0906C23.3774 20.3455 23.75 19.4333 23.75 18.3542C23.75 17.275 23.3774 16.3628 22.6323 15.6177C21.8872 14.8726 20.975 14.5 19.8958 14.5C18.8167 14.5 17.9045 14.8726 17.1594 15.6177C16.4142 16.3628 16.0417 17.275 16.0417 18.3542C16.0417 19.4333 16.4142 20.3455 17.1594 21.0906C17.9045 21.8358 18.8167 22.2083 19.8958 22.2083Z"
                            fill="white" />
                    </svg>
                    <svg class="svg-hover" width="29" height="29" viewBox="0 0 29 29" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M0 14.3334C0 12.4176 0.364861 10.6159 1.09458 8.92829C1.82533 7.24068 2.8156 5.7725 4.06538 4.52375C5.31412 3.27294 6.78231 2.28268 8.46992 1.55296C10.1575 0.823235 11.9592 0.458374 13.875 0.458374C17.2564 0.458374 20.201 1.51082 22.7087 3.61571C25.2165 5.7206 26.7813 8.36712 27.4031 11.5553C27.4648 11.8143 27.4468 12.0584 27.3492 12.2876C27.2505 12.5168 27.0819 12.6494 26.8435 12.6853C26.6102 12.7151 26.4108 12.6519 26.2453 12.4957C26.0809 12.3395 25.9704 12.1442 25.9139 11.9099C25.5346 9.87487 24.698 8.05365 23.404 6.44621C22.108 4.84082 20.4733 3.64808 18.5 2.868V3.54171C18.5 4.38962 18.1983 5.11575 17.595 5.72008C16.9917 6.32442 16.2656 6.62607 15.4167 6.62504H12.3333V9.70837C12.3333 10.1452 12.1853 10.5116 11.8893 10.8076C11.5933 11.1036 11.2274 11.2511 10.7917 11.25H7.70833V14.3334H9.31012C9.66676 14.3334 9.96328 14.4516 10.1997 14.688C10.4361 14.9243 10.5542 15.2214 10.5542 15.579V18.9584H9.25L1.85 11.5584C1.77292 12.0209 1.70251 12.4834 1.63879 12.9459C1.57507 13.4084 1.54269 13.8709 1.54167 14.3334C1.54167 17.5873 2.64036 20.3983 4.83775 22.7663C7.03514 25.1343 9.7793 26.4288 13.0702 26.6497C13.3046 26.6611 13.4973 26.7402 13.6484 26.8872C13.7995 27.0352 13.875 27.2186 13.875 27.4375C13.875 27.6565 13.7918 27.8399 13.6253 27.9879C13.4588 28.1359 13.2583 28.2037 13.024 28.1914C9.36922 27.9632 6.28486 26.5213 3.77092 23.8655C1.25697 21.2097 0 18.0323 0 14.3334ZM27.2412 27.2479L22.4667 22.5335C22.0063 22.8624 21.5073 23.1193 20.9697 23.3043C20.4322 23.4904 19.8659 23.5834 19.2708 23.5834C17.759 23.5834 16.482 23.0623 15.4398 22.0201C14.3966 20.9759 13.875 19.6984 13.875 18.1875C13.875 16.6767 14.3966 15.3997 15.4398 14.3565C16.483 13.3133 17.76 12.7917 19.2708 12.7917C20.7817 12.7917 22.0592 13.3133 23.1034 14.3565C24.1476 15.3997 24.6687 16.6767 24.6667 18.1875C24.6667 18.8022 24.569 19.3828 24.3737 19.9296C24.1785 20.4774 23.9061 20.9816 23.5567 21.442L28.3312 26.1564C28.4957 26.3003 28.5779 26.4771 28.5779 26.6867C28.5779 26.8964 28.4957 27.0835 28.3312 27.2479C28.1873 27.3918 28.0105 27.4637 27.8009 27.4637C27.5912 27.4637 27.4057 27.3918 27.2412 27.2479ZM19.2708 22.0417C20.35 22.0417 21.2622 21.6691 22.0073 20.924C22.7524 20.1789 23.125 19.2667 23.125 18.1875C23.125 17.1084 22.7524 16.1962 22.0073 15.4511C21.2622 14.7059 20.35 14.3334 19.2708 14.3334C18.1917 14.3334 17.2795 14.7059 16.5344 15.4511C15.7892 16.1962 15.4167 17.1084 15.4167 18.1875C15.4167 19.2667 15.7892 20.1789 16.5344 20.924C17.2795 21.6691 18.1917 22.0417 19.2708 22.0417Z"
                            fill="#5B5B5B" />
                    </svg>


                    &nbsp;&nbsp;<a href="https://www.jitoworld.org/Internationalwing.aspx" target="_blank"
                        class="custom-link">JITO International</a>
                </div>
                <div class="project-item svg-button">
                    {{--  <i class="fas fa-laptop-medical" style="font-size: 37px; margin-right: 8px;"></i>  --}}
                    <svg class="svg-default" width="33" height="23" viewBox="0 0 33 23" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M15.3434 8.80216V6.10425H16.8851V8.80216H19.583V10.3438H16.8851V13.0417H15.3434V10.3438H12.6455V8.80216H15.3434Z"
                            fill="white" />
                        <path fill-rule="evenodd" clip-rule="evenodd"
                            d="M3.43962 17.2628C3.41031 17.1427 3.39556 17.0195 3.39568 16.8959V2.25004C3.39568 1.84117 3.5581 1.44904 3.84722 1.15992C4.13634 0.870799 4.52847 0.708374 4.93734 0.708374H28.0623C28.4712 0.708374 28.8633 0.870799 29.1525 1.15992C29.4416 1.44904 29.604 1.84117 29.604 2.25004V16.8959C29.604 17.084 29.5701 17.2636 29.5092 17.4301L31.9073 21.0992C31.9832 21.2155 32.0264 21.3502 32.0321 21.489C32.0379 21.6277 32.006 21.7655 31.9399 21.8877C31.8738 22.0099 31.7759 22.1119 31.6566 22.183C31.5373 22.2541 31.401 22.2917 31.2621 22.2917H1.69984C1.56242 22.2917 1.4275 22.2549 1.30906 22.1852C1.19062 22.1155 1.09297 22.0154 1.02622 21.8953C0.959477 21.7751 0.926059 21.6393 0.929431 21.502C0.932804 21.3646 0.972845 21.2306 1.04541 21.1139L3.43962 17.2628ZM4.93734 2.25004H28.0623V16.8959H4.93734V2.25004Z"
                            fill="white" />
                    </svg>
                    <svg class="svg-hover" width="32" height="23" viewBox="0 0 32 23" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M14.4142 8.80229V6.10437H15.9559V8.80229H18.6538V10.344H15.9559V13.0419H14.4142V10.344H11.7163V8.80229H14.4142Z"
                            fill="#5B5B5B" />
                        <path fill-rule="evenodd" clip-rule="evenodd"
                            d="M2.51042 17.2629C2.48111 17.1428 2.46636 17.0196 2.46648 16.896V2.25016C2.46648 1.84129 2.6289 1.44916 2.91802 1.16004C3.20714 0.870922 3.59927 0.708496 4.00814 0.708496H27.1331C27.542 0.708496 27.9342 0.870922 28.2233 1.16004C28.5124 1.44916 28.6748 1.84129 28.6748 2.25016V16.896C28.6748 17.0841 28.6409 17.2637 28.58 17.4302L30.9781 21.0994C31.054 21.2156 31.0972 21.3503 31.1029 21.4891C31.1087 21.6279 31.0768 21.7656 31.0107 21.8878C30.9446 22.01 30.8467 22.112 30.7274 22.1831C30.6081 22.2543 30.4718 22.2918 30.3329 22.2918H0.770645C0.633218 22.2918 0.498298 22.255 0.37986 22.1853C0.261422 22.1156 0.163772 22.0155 0.0970247 21.8954C0.0302774 21.7753 -0.00314057 21.6395 0.000232236 21.5021C0.00360504 21.3647 0.0436459 21.2307 0.116208 21.114L2.51042 17.2629ZM4.00814 2.25016H27.1331V16.896H4.00814V2.25016Z"
                            fill="#5B5B5B" />
                    </svg>

                    &nbsp;&nbsp;<a href="https://jitojbn.org/" target="_blank" class="custom-link">JITO IT</a>
                </div>
                <div class="project-item svg-button custom-link">
                    {{--  <i class="fab fa-youtube" style="font-size: 37px; margin-right: 8px;"></i>  --}}
                    <svg class="svg-default" width="37" height="31" viewBox="0 0 37 31" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <g filter="url(#filter0_d_57_1748)">
                            <path d="M21.5833 12.5001L16.1875 15.5834V9.41675L21.5833 12.5001Z" fill="white"
                                stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                            <path
                                d="M3.08325 13.5915V11.4085C3.08325 6.94541 3.08325 4.71307 4.47846 3.27778C5.87521 1.84095 8.07363 1.77928 12.4689 1.65441C14.5502 1.59582 16.6777 1.5542 18.4999 1.5542C20.3222 1.5542 22.4481 1.59582 24.5309 1.65441C28.9262 1.77928 31.1246 1.84095 32.5198 3.27778C33.915 4.71462 33.9166 6.94695 33.9166 11.4085V13.59C33.9166 18.0547 33.9166 20.2855 32.5214 21.7223C31.1246 23.1576 28.9278 23.2208 24.5309 23.3441C22.4497 23.4042 20.3222 23.4459 18.4999 23.4459C16.6777 23.4459 14.5517 23.4042 12.4689 23.3441C8.07363 23.2208 5.87521 23.1591 4.47846 21.7223C3.08171 20.2855 3.08325 18.0531 3.08325 13.5915Z"
                                stroke="white" stroke-width="1.5" />
                        </g>
                        <defs>
                            <filter id="filter0_d_57_1748" x="-1.66675" y="0.804199" width="40.3333" height="31.3917"
                                filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                                <feFlood flood-opacity="0" result="BackgroundImageFix" />
                                <feColorMatrix in="SourceAlpha" type="matrix"
                                    values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha" />
                                <feOffset dy="4" />
                                <feGaussianBlur stdDeviation="2" />
                                <feComposite in2="hardAlpha" operator="out" />
                                <feColorMatrix type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                                <feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow_57_1748" />
                                <feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_57_1748"
                                    result="shape" />
                            </filter>
                        </defs>
                    </svg>
                    <svg class="svg-hover" width="34" height="25" viewBox="0 0 34 25" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <path d="M19.9583 12.3335L14.5625 15.4168V9.25012L19.9583 12.3335Z" fill="#5B5B5B"
                            stroke="#5B5B5B" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                        <path
                            d="M1.45825 13.4249V11.2419C1.45825 6.77878 1.45825 4.54645 2.85346 3.11116C4.25021 1.67432 6.44863 1.61266 10.8439 1.48778C12.9252 1.4292 15.0527 1.38757 16.8749 1.38757C18.6972 1.38757 20.8231 1.4292 22.9059 1.48778C27.3012 1.61266 29.4996 1.67432 30.8948 3.11116C32.29 4.54799 32.2916 6.78032 32.2916 11.2419V13.4234C32.2916 17.888 32.2916 20.1188 30.8964 21.5557C29.4996 22.991 27.3028 23.0542 22.9059 23.1775C20.8247 23.2376 18.6972 23.2792 16.8749 23.2792C15.0527 23.2792 12.9267 23.2376 10.8439 23.1775C6.44863 23.0542 4.25021 22.9925 2.85346 21.5557C1.45671 20.1188 1.45825 17.8865 1.45825 13.4249Z"
                            stroke="#5B5B5B" stroke-width="1.5" />
                    </svg>


                    &nbsp;&nbsp;<a href="https://www.jpoint.in/" target="_blank" class="custom-link">JITO Public Relation
                        & Social Media</a>
                </div>
                <div class="project-item svg-button">
                    {{--  <i class="fas fa-brain" style="font-size: 37px; margin-right: 8px;"></i>  --}}
                    <svg class="svg-default" width="33" height="33" viewBox="0 0 33 33" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M8.70991 19.4993C8.03695 19.5003 7.37231 19.6481 6.76239 19.9325C6.15246 20.2169 5.61195 20.6309 5.17856 21.1458C4.74517 21.6606 4.42935 22.2638 4.25315 22.9133C4.07695 23.5628 4.0446 24.2429 4.15837 24.9062C4.27214 25.5694 4.52928 26.1999 4.91185 26.7535C5.29442 27.3072 5.79321 27.7706 6.37339 28.1116C6.95357 28.4526 7.60117 28.6629 8.271 28.7277C8.94083 28.7926 9.61675 28.7105 10.2516 28.4872"
                            stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                        <path
                            d="M4.4917 21.9737C3.56911 21.5296 2.77164 20.8627 2.17127 20.0332C1.57089 19.2038 1.1865 18.2379 1.0528 17.2227C0.919096 16.2075 1.04028 15.175 1.40542 14.2184C1.77056 13.2618 2.36816 12.4111 3.14429 11.7432M3.19054 11.6184C2.68494 10.8618 2.46334 9.95073 2.56496 9.04646C2.66659 8.14218 3.08489 7.30303 3.74581 6.67756C4.40673 6.05208 5.26764 5.68062 6.17614 5.62895C7.08464 5.57727 7.98212 5.84871 8.70971 6.3952M9.07662 6.49541C8.83068 5.97286 8.70533 5.40171 8.70982 4.82419C8.71431 4.24667 8.84854 3.67754 9.10257 3.15887C9.35661 2.64021 9.72396 2.18526 10.1775 1.82767C10.631 1.47007 11.1591 1.21897 11.7227 1.09292C12.2863 0.966866 12.871 0.969093 13.4337 1.09943C13.9963 1.22977 14.5225 1.48489 14.9732 1.84592C15.424 2.20696 15.7879 2.66469 16.038 3.18528C16.2881 3.70587 16.4179 4.276 16.418 4.85354V28.7494C16.418 29.5671 16.0932 30.3514 15.5149 30.9296C14.9367 31.5079 14.1525 31.8327 13.3347 31.8327C12.517 31.8327 11.7327 31.5079 11.1545 30.9296C10.5762 30.3514 10.2514 29.5671 10.2514 28.7494M16.418 8.7077C16.418 9.93433 16.9053 11.1107 17.7727 11.9781C18.64 12.8454 19.8164 13.3327 21.043 13.3327M24.1264 19.4994C24.7993 19.5004 25.464 19.6482 26.0739 19.9326C26.6838 20.217 27.2243 20.631 27.6577 21.1459C28.0911 21.6607 28.4069 22.2639 28.5831 22.9134C28.7593 23.5629 28.7917 24.243 28.6779 24.9063C28.5641 25.5695 28.307 26.2 27.9244 26.7536C27.5419 27.3073 27.0431 27.7707 26.4629 28.1117C25.8827 28.4527 25.2351 28.663 24.5653 28.7278C23.8954 28.7927 23.2195 28.7106 22.5847 28.4873"
                            stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                        <path
                            d="M28.3443 21.9737C29.2669 21.5296 30.0644 20.8627 30.6647 20.0332C31.2651 19.2038 31.6495 18.2379 31.7832 17.2227C31.9169 16.2075 31.7957 15.175 31.4306 14.2184C31.0654 13.2618 30.4678 12.4111 29.6917 11.7432M29.6455 11.6184C30.1511 10.8618 30.3727 9.95073 30.271 9.04646C30.1694 8.14218 29.7511 7.30303 29.0902 6.67756C28.4293 6.05208 27.5684 5.68062 26.6599 5.62895C25.7514 5.57727 24.8539 5.84871 24.1263 6.3952M16.418 4.85354C16.4181 4.276 16.548 3.70587 16.798 3.18528C17.0481 2.66469 17.412 2.20696 17.8628 1.84592C18.3135 1.48489 18.8397 1.22977 19.4023 1.09943C19.965 0.969093 20.5497 0.966866 21.1133 1.09292C21.6769 1.21897 22.205 1.47007 22.6585 1.82767C23.112 2.18526 23.4794 2.64021 23.7334 3.15887C23.9875 3.67754 24.1217 4.24667 24.1262 4.82419C24.1307 5.40171 24.0053 5.97286 23.7594 6.49541M22.5846 28.7494C22.5846 29.5671 22.2598 30.3514 21.6815 30.9296C21.1033 31.5079 20.3191 31.8327 19.5013 31.8327C18.6836 31.8327 17.8993 31.5079 17.3211 30.9296C16.7428 30.3514 16.418 29.5671 16.418 28.7494"
                            stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                    </svg>
                    <svg class="svg-hover" width="33" height="33" viewBox="0 0 33 33" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M8.70991 19.4993C8.03695 19.5003 7.37231 19.6481 6.76239 19.9325C6.15246 20.2169 5.61195 20.6309 5.17856 21.1458C4.74517 21.6606 4.42935 22.2638 4.25315 22.9133C4.07695 23.5628 4.0446 24.2429 4.15837 24.9062C4.27214 25.5694 4.52928 26.1999 4.91185 26.7535C5.29442 27.3072 5.79321 27.7706 6.37339 28.1116C6.95357 28.4526 7.60117 28.6629 8.271 28.7277C8.94083 28.7926 9.61675 28.7105 10.2516 28.4872"
                            stroke="#5B5B5B" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                        <path
                            d="M4.4917 21.9737C3.56911 21.5296 2.77164 20.8627 2.17127 20.0332C1.57089 19.2038 1.1865 18.2379 1.0528 17.2227C0.919096 16.2075 1.04028 15.175 1.40542 14.2184C1.77056 13.2618 2.36816 12.4111 3.14429 11.7432M3.19054 11.6184C2.68494 10.8618 2.46334 9.95073 2.56496 9.04646C2.66659 8.14218 3.08489 7.30303 3.74581 6.67756C4.40673 6.05208 5.26764 5.68062 6.17614 5.62895C7.08464 5.57727 7.98212 5.84871 8.70971 6.3952M9.07662 6.49541C8.83068 5.97286 8.70533 5.40171 8.70982 4.82419C8.71431 4.24667 8.84854 3.67754 9.10257 3.15887C9.35661 2.64021 9.72396 2.18526 10.1775 1.82767C10.631 1.47007 11.1591 1.21897 11.7227 1.09292C12.2863 0.966866 12.871 0.969093 13.4337 1.09943C13.9963 1.22977 14.5225 1.48489 14.9732 1.84592C15.424 2.20696 15.7879 2.66469 16.038 3.18528C16.2881 3.70587 16.4179 4.276 16.418 4.85354V28.7494C16.418 29.5671 16.0932 30.3514 15.5149 30.9296C14.9367 31.5079 14.1525 31.8327 13.3347 31.8327C12.517 31.8327 11.7327 31.5079 11.1545 30.9296C10.5762 30.3514 10.2514 29.5671 10.2514 28.7494M16.418 8.7077C16.418 9.93433 16.9053 11.1107 17.7727 11.9781C18.64 12.8454 19.8164 13.3327 21.043 13.3327M24.1264 19.4994C24.7993 19.5004 25.464 19.6482 26.0739 19.9326C26.6838 20.217 27.2243 20.631 27.6577 21.1459C28.0911 21.6607 28.4069 22.2639 28.5831 22.9134C28.7593 23.5629 28.7917 24.243 28.6779 24.9063C28.5641 25.5695 28.307 26.2 27.9244 26.7536C27.5419 27.3073 27.0431 27.7707 26.4629 28.1117C25.8827 28.4527 25.2351 28.663 24.5653 28.7278C23.8954 28.7927 23.2195 28.7106 22.5847 28.4873"
                            stroke="#5B5B5B" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                        <path
                            d="M28.3443 21.9737C29.2669 21.5296 30.0644 20.8627 30.6647 20.0332C31.2651 19.2038 31.6495 18.2379 31.7832 17.2227C31.9169 16.2075 31.7957 15.175 31.4306 14.2184C31.0654 13.2618 30.4678 12.4111 29.6917 11.7432M29.6455 11.6184C30.1511 10.8618 30.3727 9.95073 30.271 9.04646C30.1694 8.14218 29.7511 7.30303 29.0902 6.67756C28.4293 6.05208 27.5684 5.68062 26.6599 5.62895C25.7514 5.57727 24.8539 5.84871 24.1263 6.3952M16.418 4.85354C16.4181 4.276 16.548 3.70587 16.798 3.18528C17.0481 2.66469 17.412 2.20696 17.8628 1.84592C18.3135 1.48489 18.8397 1.22977 19.4023 1.09943C19.965 0.969093 20.5497 0.966866 21.1133 1.09292C21.6769 1.21897 22.205 1.47007 22.6585 1.82767C23.112 2.18526 23.4794 2.64021 23.7334 3.15887C23.9875 3.67754 24.1217 4.24667 24.1262 4.82419C24.1307 5.40171 24.0053 5.97286 23.7594 6.49541M22.5846 28.7494C22.5846 29.5671 22.2598 30.3514 21.6815 30.9296C21.1033 31.5079 20.3191 31.8327 19.5013 31.8327C18.6836 31.8327 17.8993 31.5079 17.3211 30.9296C16.7428 30.3514 16.418 29.5671 16.418 28.7494"
                            stroke="#5B5B5B" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                    </svg>

                    &nbsp;&nbsp;<a href="https://jitojeap.in/" target="_blank" class="custom-link">JITO Talent</a>
                </div>
            </div>


            <!-- JavaScript for Search Filter -->
            <script>
                const searchInput = document.getElementById('search');
                const chapterList = document.getElementById('chapterList');
                const chapters = chapterList.querySelectorAll('div');

                searchInput.addEventListener('input', function() {
                    const filter = this.value.toLowerCase();
                    chapters.forEach(chapter => {
                        const text = chapter.textContent.toLowerCase();
                        chapter.style.display = text.includes(filter) ? 'block' : 'none';
                    });
                });
            </script>
        </div>
    </section>

    <!-- Mobile Responsive Styles -->
    <style>
        /* Desktop styles (default) */
        .project-grid {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            gap: 15px;
            margin-top: 30px;
            font-size: 16px;
        }

        /* .project-item svg-button {
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                background-color: transparent;
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                padding: 12px;
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                border-radius: 10px;
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                transition: all 0.3s ease;
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                            } */
        .project-item {
            background-color: transparent;
            padding: 12px;
            border-radius: 10px;
            transition: all 0.3s ease;
            display: flex;
            align-items: center;
            gap: 8px;
            font-size: 16px;
            word-break: break-word;
        }

        .project-item:hover {
            background-color: white;
            color: black;
            cursor: pointer;
        }

        /* Mobile responsive override */
        @media (max-width: 768px) {

            /* .project-grid {
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                    grid-template-columns: repeat(auto-fit, minmax(150px, 1fr)) !important;
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                }

                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                .project-item {
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                    font-size: 14px !important;
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                } */
            .projects-grid {
                grid-template-columns: 1fr !important;
                gap: 12px;
            }

            .project-item {
                font-size: 14px !important;
                padding: 10px;
                justify-content: flex-start;
                text-align: left;
            }
        }
    </style>





    <!--========================Section Who Is Speaking================================-->

    <section class="custom-padding"
        style="padding:100px 40px 40px 40px; font-family: Arial, sans-serif; background: #fff; overflow: hidden;">
        <div class="container" style="display: flex; align-items: center; flex-direction: row; gap: 15px;">
            <div style="width: 3px; height: 40px; background-color: #E31E25;"></div>
            <h2 style="font-size: 36px; font-weight: bold; font-family: 'Times New Roman', Times, serif; margin: 0;">
                <span style="color: #FFD800;">Our</span> <span style="color: #393186;">Team</span>
            </h2>
        </div>
        <div class="container" class="row">
            <!-- Slider Wrapper -->
            <div class="slider slider-width"
                style="margin: 30px auto 0 auto; position: relative; width: 1235px; overflow: hidden; text-align: center;">
                {{-- <div class="slider" style="margin: 30px auto 0 auto; position: relative; max-width: 100%; overflow: hidden; text-align: center;"> --}}
                <div class="slider-track" style="display: flex; transition: transform 0.8s ease; gap: 30px;">
                    <!-- Each card is 220px + 30px right margin = 250px total width -->
                    <!-- Showing 5 cards at once => 5 x 220px + 4 x 30px gap = 1150px container -->

                    <!-- Card Start (Repeat this block for each team member) -->
                    <div class="card"
                        style="min-width: 220px; background: #fff; border-radius: 15px; box-shadow: 0 4px 12px rgba(0,0,0,0.1); text-align: center; padding-bottom: 20px;">
                        <img src="{{ asset('website/images/ie8-panel/team/team1.png') }}" alt="Saurav Parakh"
                            style="width: 100%; height: 220px; border-top-left-radius: 15px; border-top-right-radius: 15px; object-fit: cover;">
                        <div style="margin-top: -25px; margin-bottom: 10px;">
                            <img src="{{ asset('Teams/ZONE CONVENOR.png') }}"
                                style="width: 50px; background: #f2f0ff; border-radius: 50%; padding: 10px;" />
                        </div>


                        <h3 style="font-size: 20px; font-weight: bold; color: #5B5B5B; margin-bottom: 5px;">ZONE CONVENOR
                        </h3>
                        <p style="font-size: 14px; color: #555;">Saurav Parakh</p>
                    </div>

                    <div class="card"
                        style="min-width: 220px; background: #fff; border-radius: 15px; box-shadow: 0 4px 12px rgba(0,0,0,0.1); text-align: center; padding-bottom: 20px;">
                        <img src="{{ asset('website/images/ie8-panel/team/team2.png') }}" alt="Saurav Parakh"
                            style="width: 100%; height: 220px; border-top-left-radius: 15px; border-top-right-radius: 15px; object-fit: cover;">
                        <div style="margin-top: -25px; margin-bottom: 10px;">
                            <img src="{{ asset('Teams/ZONE CONVENOR.png') }}"
                                style="width: 50px; background: #f2f0ff; border-radius: 50%; padding: 10px;" />

                        </div>
                        <h3 style="font-size: 20px; font-weight: bold; color: #5B5B5B; margin-bottom: 5px;">ZONE
                            CO-CONVENOR</h3>
                        <p style="font-size: 14px; color: #555;">Mihir Bamb</p>
                    </div>

                    <div class="card"
                        style="min-width: 220px; background: #fff; border-radius: 15px; box-shadow: 0 4px 12px rgba(0,0,0,0.1); text-align: center; padding-bottom: 20px;">
                        <img src="{{ asset('website/images/ie8-panel/team/team3.png') }}" alt="Saurav Parakh"
                            style="width: 100%; height: 220px; border-top-left-radius: 15px; border-top-right-radius: 15px; object-fit: cover;">
                        <div style="margin-top: -25px; margin-bottom: 10px;">
                            <img src="{{ asset('Teams/JBN CONVENOR.png') }}"
                                style="width: 50px; background: #f2f0ff; border-radius: 50%; padding: 10px;" />
                        </div>
                        <h3 style="font-size: 20px; font-weight: bold; color: #5B5B5B; margin-bottom: 5px;">JBN CONVENOR
                        </h3>
                        <p style="font-size: 14px; color: #555;">Sanket Chhoriya</p>
                    </div>

                    <div class="card"
                        style="min-width: 220px; background: #fff; border-radius: 15px; box-shadow: 0 4px 12px rgba(0,0,0,0.1); text-align: center; padding-bottom: 20px;">
                        <img src="{{ asset('website/images/ie8-panel/team/team4.png') }}" alt="Saurav Parakh"
                            style="width: 100%; height: 220px; border-top-left-radius: 15px; border-top-right-radius: 15px; object-fit: cover;">
                        <div style="margin-top: -25px; margin-bottom: 10px;">
                            <img src="{{ asset('Teams/CFE CONVENOR.png') }}"
                                style="width: 50px; background: #f2f0ff; border-radius: 50%; padding: 10px;" />
                        </div>
                        <h3 style="font-size: 20px; font-weight: bold; color: #5B5B5B; margin-bottom: 5px;">CFE CONVENOR
                        </h3>
                        <p style="font-size: 14px; color: #555;">Aarya Chordiya</p>
                    </div>

                    <div class="card"
                        style="min-width: 220px; background: #fff; border-radius: 15px; box-shadow: 0 4px 12px rgba(0,0,0,0.1); text-align: center; padding-bottom: 20px;">
                        <img src="{{ asset('website/images/ie8-panel/team/team5.png') }}" alt="Saurav Parakh"
                            style="width: 100%; height: 220px; border-top-left-radius: 15px; border-top-right-radius: 15px; object-fit: cover;">
                        <div style="margin-top: -25px; margin-bottom: 10px;">
                            <img src="{{ asset('Teams/JITEM CONVENOR.png') }}"
                                style="width: 50px; background: #f2f0ff; border-radius: 50%; padding: 10px;" />
                        </div>
                        <h3 style="font-size: 20px; font-weight: bold; color: #5B5B5B; margin-bottom: 5px;">JITEM CONVENOR
                        </h3>
                        <p style="font-size: 14px; color: #555;">Aashish Desai</p>
                    </div>

                    <div class="card"
                        style="min-width: 220px; background: #fff; border-radius: 15px; box-shadow: 0 4px 12px rgba(0,0,0,0.1); text-align: center; padding-bottom: 20px;">
                        <img src="{{ asset('website/images/ie8-panel/team/team6.png') }}" alt="Saurav Parakh"
                            style="width: 100%; height: 220px; border-top-left-radius: 15px; border-top-right-radius: 15px; object-fit: cover;">
                        <div style="margin-top: -25px; margin-bottom: 10px;">
                            <img src="{{ asset('Teams/IT CONVENOR.png') }}"
                                style="width: 50px; background: #f2f0ff; border-radius: 50%; padding: 10px;" />
                        </div>
                        <h3 style="font-size: 20px; font-weight: bold; color: #5B5B5B; margin-bottom: 5px;">IT CONVENOR
                        </h3>
                        <p style="font-size: 14px; color: #555;">Aayushi Dungarwal</p>
                    </div>

                    <div class="card"
                        style="min-width: 220px; background: #fff; border-radius: 15px; box-shadow: 0 4px 12px rgba(0,0,0,0.1); text-align: center; padding-bottom: 20px;">
                        <img src="{{ asset('website/images/ie8-panel/team/team7.png') }}" alt="Saurav Parakh"
                            style="width: 100%; height: 220px; border-top-left-radius: 15px; border-top-right-radius: 15px; object-fit: cover;">
                        <div style="margin-top: -25px; margin-bottom: 10px;">
                            <img src="{{ asset('Teams/JATF CONVENOR.png') }}"
                                style="width: 50px; background: #f2f0ff; border-radius: 50%; padding: 10px;" />
                        </div>
                        <h3 style="font-size: 20px; font-weight: bold; color: #5B5B5B; margin-bottom: 5px;">JATF CONVENOR
                        </h3>
                        <p style="font-size: 14px; color: #555;">Aakash Mutha</p>
                    </div>

                    <div class="card"
                        style="min-width: 220px; background: #fff; border-radius: 15px; box-shadow: 0 4px 12px rgba(0,0,0,0.1); text-align: center; padding-bottom: 20px;">
                        <img src="{{ asset('website/images/ie8-panel/team/team8.png') }}" alt="Saurav Parakh"
                            style="width: 100%; height: 220px; border-top-left-radius: 15px; border-top-right-radius: 15px; object-fit: cover;">
                        <div style="margin-top: -25px; margin-bottom: 10px;">
                            <img src="{{ asset('Teams/JIIF CONVENOR.png') }}"
                                style="width: 50px; background: #f2f0ff; border-radius: 50%; padding: 10px;" />
                        </div>
                        <h3 style="font-size: 20px; font-weight: bold; color: #5B5B5B; margin-bottom: 5px;">JIIF CONVENOR
                        </h3>
                        <p style="font-size: 14px; color: #555;"> CA. Aman Jain</p>
                    </div>

                    <div class="card"
                        style="min-width: 220px; background: #fff; border-radius: 15px; box-shadow: 0 4px 12px rgba(0,0,0,0.1); text-align: center; padding-bottom: 20px;">
                        <img src="{{ asset('website/images/ie8-panel/team/team9.png') }}" alt="Saurav Parakh"
                            style="width: 100%; height: 220px; border-top-left-radius: 15px; border-top-right-radius: 15px; object-fit: cover;">
                        <div style="margin-top: -25px; margin-bottom: 10px;">
                            <img src="{{ asset('Teams/JOBS CONVENOR.png') }}"
                                style="width: 50px; background: #f2f0ff; border-radius: 50%; padding: 10px;" />
                        </div>
                        <h3 style="font-size: 20px; font-weight: bold; color: #5B5B5B; margin-bottom: 5px;">JOBS CONVENOR
                        </h3>
                        <p style="font-size: 14px; color: #555;">Prajkat Mudholkar</p>
                    </div>

                    <div class="card"
                        style="min-width: 220px; background: #fff; border-radius: 15px; box-shadow: 0 4px 12px rgba(0,0,0,0.1); text-align: center; padding-bottom: 20px;">
                        <img src="{{ asset('website/images/ie8-panel/team/team10.png') }}" alt="Saurav Parakh"
                            style="width: 100%; height: 220px; border-top-left-radius: 15px; border-top-right-radius: 15px; object-fit: cover;">
                        <div style="margin-top: -25px; margin-bottom: 10px;">
                            <img src="{{ asset('Teams/JPF CONVENOR.png') }}"
                                style="width: 50px; background: #f2f0ff; border-radius: 50%; padding: 10px;" />
                        </div>
                        <h3 style="font-size: 20px; font-weight: bold; color: #5B5B5B; margin-bottom: 5px;">JPF CONVENOR
                        </h3>
                        <p style="font-size: 14px; color: #555;">Romil Sojatia</p>
                    </div>

                    <div class="card"
                        style="min-width: 220px; background: #fff; border-radius: 15px; box-shadow: 0 4px 12px rgba(0,0,0,0.1); text-align: center; padding-bottom: 20px;">
                        <img src="{{ asset('website/images/ie8-panel/team/team11.png') }}" alt="Saurav Parakh"
                            style="width: 100%; height: 220px; border-top-left-radius: 15px; border-top-right-radius: 15px; object-fit: cover;">
                        <div style="margin-top: -25px; margin-bottom: 10px;">
                            <img src="{{ asset('Teams/PR CONVENOR.png') }}"
                                style="width: 50px; background: #f2f0ff; border-radius: 50%; padding: 10px;" />
                        </div>
                        <h3 style="font-size: 20px; font-weight: bold; color: #5B5B5B; margin-bottom: 5px;">PR CONVENOR
                        </h3>
                        <p style="font-size: 14px; color: #555;">Khushboo Munot</p>
                    </div>

                    <div class="card"
                        style="min-width: 220px; background: #fff; border-radius: 15px; box-shadow: 0 4px 12px rgba(0,0,0,0.1); text-align: center; padding-bottom: 20px;">
                        <img src="{{ asset('website/images/ie8-panel/team/team12.png') }}" alt="Saurav Parakh"
                            style="width: 100%; height: 220px; border-top-left-radius: 15px; border-top-right-radius: 15px; object-fit: cover;">
                        <div style="margin-top: -25px; margin-bottom: 10px;">
                            <img src="{{ asset('Teams/MATRIMONY CONVENOR.png') }}"
                                style="width: 50px; background: #f2f0ff; border-radius: 50%; padding: 10px;" />
                        </div>
                        <h3 style="font-size: 20px; font-weight: bold; color: #5B5B5B; margin-bottom: 5px;">SEVA & MINORITY
                            CONVENOR</h3>
                        <p style="font-size: 14px; color: #555;">Shreyans Lalwani</p>
                    </div>

                    <div class="card"
                        style="min-width: 220px; background: #fff; border-radius: 15px; box-shadow: 0 4px 12px rgba(0,0,0,0.1); text-align: center; padding-bottom: 20px;">
                        <img src="{{ asset('website/images/ie8-panel/team/team13.png') }}" alt="Saurav Parakh"
                            style="width: 100%; height: 220px; border-top-left-radius: 15px; border-top-right-radius: 15px; object-fit: cover;">
                        <div style="margin-top: -25px; margin-bottom: 10px;">
                            <img src="{{ asset('Teams/SPORTS CONVENOR.png') }}"
                                style="width: 50px; background: #f2f0ff; border-radius: 50%; padding: 10px;" />
                        </div>
                        <h3 style="font-size: 20px; font-weight: bold; color: #5B5B5B; margin-bottom: 5px;">SPORTS CONVENOR
                        </h3>
                        <p style="font-size: 14px; color: #555;">Niraj Sethia</p>
                    </div>

                    <div class="card"
                        style="min-width: 220px; background: #fff; border-radius: 15px; box-shadow: 0 4px 12px rgba(0,0,0,0.1); text-align: center; padding-bottom: 20px;">
                        <img src="{{ asset('website/images/ie8-panel/team/team14.png') }}" alt="Saurav Parakh"
                            style="width: 100%; height: 220px; border-top-left-radius: 15px; border-top-right-radius: 15px; object-fit: cover;">
                        <div style="margin-top: -25px; margin-bottom: 10px;">
                            <img src="{{ asset('Teams/TALENT CONVENOR.png') }}"
                                style="width: 50px; background: #f2f0ff; border-radius: 50%; padding: 10px;" />
                        </div>
                        <h3 style="font-size: 20px; font-weight: bold; color: #5B5B5B; margin-bottom: 5px;">TALENT CONVENOR
                        </h3>
                        <p style="font-size: 14px; color: #555;">Snehal Gugale</p>
                    </div>
                    <!-- Repeat card blocks as needed... -->
                </div>
            </div>
        </div>
    </section>


    <script>
        const track = document.querySelector('.slider-track');
        const cards = document.querySelectorAll('.slider-track .card');
        const cardWidth = cards[0].offsetWidth + 30;
        const cardsPerView = window.innerWidth <= 600 ? 1 : window.innerWidth <= 1024 ? 2 : 5;

        let index = 0;

        // Clone first N cards and append to the end
        for (let i = 0; i < cardsPerView; i++) {
            const clone = cards[i].cloneNode(true);
            track.appendChild(clone);
        }

        function slide() {
            index++;
            track.style.transition = "transform 0.5s ease-in-out";
            track.style.transform = `translateX(-${index * cardWidth}px)`;

            // Reset when reaching the cloned end
            if (index === cards.length) {
                setTimeout(() => {
                    track.style.transition = "none";
                    track.style.transform = `translateX(0px)`;
                    index = 0;
                }, 500); // match the transition duration
            }
        }

        setInterval(slide, 4000);
    </script>










    <style>
        @media (max-width: 768px) {
            section.custom-padding {
                padding: 77px !important;
            }
        }

        .slider-width {
            width: 1235px;
            margin: 30px auto 0 auto;
            position: relative;
            overflow: hidden;
            text-align: center;
        }

        @media (max-width: 768px) {
            .slider {
                width: 250px !important;
            }
        }
    </style>











    <!--========================Section Conference Schedule=============================-->
    {{-- <section class="section section-lg bg-default text-center">
        <div class="container">
            <h6>Event Schedule plan</h6>
            <h3>Conference Schedule.</h3>
            <div class="tabs-custom tabs-horizontal tabs-corporate" id="tabs-1">
                <!--Nav tabs-->
                <ul class="nav nav-tabs">
                    <li class="nav-item" role="presentation"><a class="nav-link nav-link nav-link-secondary-darker"
                            href="#tabs-1-1" data-toggle="tab" data-triangle=".nav-link-overlay"><span
                                class="nav-link-overlay"></span>

                            <span class="nav-link-title">Morning</span></a></li>
                    <li class="nav-item" role="presentation"><a class="nav-link nav-link-purple-heart" href="#tabs-1-2"
                            data-toggle="tab" data-triangle=".nav-link-overlay"><span class="nav-link-overlay"></span>

                            <span class="nav-link-title">Afternoon</span></a></li>
                    <li class="nav-item" role="presentation"><a class="nav-link nav-link-primary" href="#tabs-1-3"
                            data-toggle="tab" data-triangle=".nav-link-overlay"><span class="nav-link-overlay"></span>

                            <span class="nav-link-title">Evening</span></a></li>
                </ul>
                <!--Tab panes-->

                <div class="tab-content wow fadeIn">
                    <div class="tab-pane fade" id="tabs-1-1">
                        <div class="card-group-custom card-group-corporate" id="accordion1" role="tablist"
                            aria-multiselectable="false">
                            <!--Bootstrap card-1-->
                            <article class="card card-custom card-corporate">
                                <div class="card-header" role="tab">
                                    <div class="card-title"><a class="collapsed" id="accordion1-card-head-hxapwahb"
                                            data-toggle="collapse" data-parent="#accordion1"
                                            href="#accordion1-card-body-onwkttkd"
                                            aria-controls="accordion1-card-body-onwkttkd" aria-expanded="false"
                                            role="button"><span class="schedule-classic"><span
                                                    class="unit unit-spacing-md align-items-center d-block d-md-flex"><span
                                                        class="unit-left"><span class="schedule-classic-img"><img
                                                                src="{{ asset('website/images/event1.png') }}"
                                                                alt="" width="122"
                                                                height="122" /></span></span><span
                                                        class="unit-body"><span class="schedule-classic-content">

                                                            <span
                                                                class="schedule-classic-title heading-4">Registration</span>
                                                        </span></span></span></span></a></div>
                                </div>
                            </article>
                            <!--Bootstrap card-2-->
                            <article class="card card-custom card-corporate">
                                <div class="card-header" role="tab">
                                    <div class="card-title"><a class="collapsed" id="accordion1-card-head-hijijucp"
                                            data-toggle="collapse" data-parent="#accordion1"
                                            href="#accordion1-card-body-lffuwxio"
                                            aria-controls="accordion1-card-body-lffuwxio" aria-expanded="false"
                                            role="button"><span class="schedule-classic"><span
                                                    class="unit unit-spacing-md align-items-center d-block d-md-flex"><span
                                                        class="unit-left"><span class="schedule-classic-img"><img
                                                                src="{{ asset('website/images/event2.png') }}"
                                                                alt="" width="122"
                                                                height="122" /></span></span><span
                                                        class="unit-body"><span class="schedule-classic-content">

                                                            <span class="schedule-classic-title heading-4">Opening
                                                                Ceremony</span>
                                                        </span></span></span></span></a></div>
                                </div>
                            </article>
                            <!--Bootstrap card-3-->
                            <article class="card card-custom card-corporate">
                                <div class="card-header" role="tab">
                                    <div class="card-title"><a class="collapsed" id="accordion1-card-head-hpaxeker"
                                            data-toggle="collapse" data-parent="#accordion1"
                                            href="#accordion1-card-body-qdqkcamp"
                                            aria-controls="accordion1-card-body-qdqkcamp" aria-expanded="false"
                                            role="button"><span class="schedule-classic"><span
                                                    class="unit unit-spacing-md align-items-center d-block d-md-flex"><span
                                                        class="unit-left"><span class="schedule-classic-img"><img
                                                                src="{{ asset('website/images/event3.png') }}"
                                                                alt="" width="122"
                                                                height="122" /></span></span><span
                                                        class="unit-body"><span class="schedule-classic-content">

                                                            <span class="schedule-classic-title heading-4">Welcome
                                                                Speech</span>
                                                        </span></span></span></span></a></div>
                                </div>
                            </article>
                            <!-- Schedule Simple-4-->
                            <article class="card card-custom card-corporate">
                                <div class="card-header" role="tab">
                                    <div class="card-title"><a class="collapsed" id="accordion1-card-head-hxapwahb"
                                            data-toggle="collapse" data-parent="#accordion1"
                                            href="#accordion1-card-body-onwkttkd"
                                            aria-controls="accordion1-card-body-onwkttkd" aria-expanded="false"
                                            role="button"><span class="schedule-classic"><span
                                                    class="unit unit-spacing-md align-items-center d-block d-md-flex"><span
                                                        class="unit-left"><span class="schedule-classic-img"><img
                                                                src="{{ asset('website/images/event4.png') }}"
                                                                alt="" width="122"
                                                                height="122" /></span></span><span
                                                        class="unit-body"><span class="schedule-classic-content">

                                                            <span class="schedule-classic-title heading-4">Member Awards
                                                                1</span>
                                                        </span></span></span></span></a></div>
                                </div>
                            </article>
                            <!--Bootstrap card-5-->
                            <article class="card card-custom card-corporate">
                                <div class="card-header" role="tab">
                                    <div class="card-title"><a class="collapsed" id="accordion1-card-head-hxapwahb"
                                            data-toggle="collapse" data-parent="#accordion1"
                                            href="#accordion1-card-body-onwkttkd"
                                            aria-controls="accordion1-card-body-onwkttkd" aria-expanded="false"
                                            role="button"><span class="schedule-classic"><span
                                                    class="unit unit-spacing-md align-items-center d-block d-md-flex"><span
                                                        class="unit-left"><span class="schedule-classic-img"><img
                                                                src="{{ asset('website/images/event5.png') }}"
                                                                alt="" width="122"
                                                                height="122" /></span></span><span
                                                        class="unit-body"><span class="schedule-classic-content">

                                                            <span class="schedule-classic-title heading-4">1-2-1
                                                                Conclave</span>
                                                        </span></span></span></span></a></div>
                                </div>
                            </article>
                            <!--Bootstrap card-6-->
                            <article class="card card-custom card-corporate">
                                <div class="card-header" role="tab">
                                    <div class="card-title"><a class="collapsed" id="accordion1-card-head-hxapwahb"
                                            data-toggle="collapse" data-parent="#accordion1"
                                            href="#accordion1-card-body-onwkttkd"
                                            aria-controls="accordion1-card-body-onwkttkd" aria-expanded="false"
                                            role="button"><span class="schedule-classic"><span
                                                    class="unit unit-spacing-md align-items-center d-block d-md-flex"><span
                                                        class="unit-left"><span class="schedule-classic-img"><img
                                                                src="{{ asset('website/images/event6.png') }}"
                                                                alt="" width="122"
                                                                height="122" /></span></span><span
                                                        class="unit-body"><span class="schedule-classic-content">

                                                            <span class="schedule-classic-title heading-4">30
                                                                seconds competition</span>
                                                        </span></span></span></span></a></div>
                                </div>
                            </article>
                            <!--Bootstrap card-5-->


                        </div>
                    </div>

                    <div class="tab-pane fade" id="tabs-1-2">
                        <div class="card-group-custom card-group-corporate" id="accordion2" role="tablist"
                            aria-multiselectable="false">
                            <!--Bootstrap card-7-->
                            <article class="card card-custom card-corporate">
                                <div class="card-header" role="tab">
                                    <div class="card-title"><a class="collapsed" id="accordion1-card-head-hxapwahb"
                                            data-toggle="collapse" data-parent="#accordion1"
                                            href="#accordion1-card-body-onwkttkd"
                                            aria-controls="accordion1-card-body-onwkttkd" aria-expanded="false"
                                            role="button"><span class="schedule-classic"><span
                                                    class="unit unit-spacing-md align-items-center d-block d-md-flex"><span
                                                        class="unit-left"><span class="schedule-classic-img"><img
                                                                src="{{ asset('website/images/event7.png') }}"
                                                                alt="" width="122"
                                                                height="122" /></span></span><span
                                                        class="unit-body"><span class="schedule-classic-content">

                                                            <span class="schedule-classic-title heading-4">Member Awards
                                                                2</span>
                                                        </span></span></span></span></a></div>
                                </div>
                            </article>
                            <!--Bootstrap card-8-->
                            <article class="card card-custom card-corporate">
                                <div class="card-header" role="tab">
                                    <div class="card-title"><a class="collapsed" id="accordion1-card-head-hxapwahb"
                                            data-toggle="collapse" data-parent="#accordion1"
                                            href="#accordion1-card-body-onwkttkd"
                                            aria-controls="accordion1-card-body-onwkttkd" aria-expanded="false"
                                            role="button"><span class="schedule-classic"><span
                                                    class="unit unit-spacing-md align-items-center d-block d-md-flex"><span
                                                        class="unit-left"><span class="schedule-classic-img"><img
                                                                src="{{ asset('website/images/event8.png') }}"
                                                                alt="" width="122"
                                                                height="122" /></span></span><span
                                                        class="unit-body"><span class="schedule-classic-content">

                                                            <span class="schedule-classic-title heading-4">Member Awards
                                                                3</span>
                                                        </span></span></span></span></a></div>
                                </div>
                            </article>
                            <!--Bootstrap card9-->
                            <article class="card card-custom card-corporate">
                                <div class="card-header" role="tab">
                                    <div class="card-title"><a class="collapsed" id="accordion2-card-head-spnrcijv"
                                            data-toggle="collapse" data-parent="#accordion2"
                                            href="#accordion2-card-body-shdhqwhj"
                                            aria-controls="accordion2-card-body-shdhqwhj" aria-expanded="false"
                                            role="button"><span class="schedule-classic"><span
                                                    class="unit unit-spacing-md align-items-center d-block d-md-flex"><span
                                                        class="unit-left"><span class="schedule-classic-img"><img
                                                                src="{{ asset('website/images/event9.png') }}"
                                                                alt="" width="122"
                                                                height="122" /></span></span><span
                                                        class="unit-body"><span class="schedule-classic-content">

                                                            <span class="schedule-classic-title heading-4">Regional Team
                                                                Awards 1</span>
                                                        </span></span></span></span></a></div>
                                </div>
                            </article>
                            <!--Bootstrap card10-->
                            <article class="card card-custom card-corporate">
                                <div class="card-header" role="tab">
                                    <div class="card-title"><a class="collapsed" id="accordion2-card-head-vrmbocua"
                                            data-toggle="collapse" data-parent="#accordion2"
                                            href="#accordion2-card-body-eqwqapab"
                                            aria-controls="accordion2-card-body-eqwqapab" aria-expanded="false"
                                            role="button"><span class="schedule-classic"><span
                                                    class="unit unit-spacing-md align-items-center d-block d-md-flex"><span
                                                        class="unit-left"><span class="schedule-classic-img"><img
                                                                src="{{ asset('website/images/event10.png') }}"
                                                                alt="" width="122"
                                                                height="122" /></span></span><span
                                                        class="unit-body"><span class="schedule-classic-content">

                                                            <span class="schedule-classic-title heading-4">Regional Team
                                                                Awards 2</span>
                                                        </span></span></span></span></a></div>
                                </div>
                            </article>
                            <!--Bootstrap card11-->
                            <article class="card card-custom card-corporate">
                                <div class="card-header" role="tab">
                                    <div class="card-title"><a class="collapsed" id="accordion2-card-head-vrmbocua"
                                            data-toggle="collapse" data-parent="#accordion2"
                                            href="#accordion2-card-body-eqwqapab"
                                            aria-controls="accordion2-card-body-eqwqapab" aria-expanded="false"
                                            role="button"><span class="schedule-classic"><span
                                                    class="unit unit-spacing-md align-items-center d-block d-md-flex"><span
                                                        class="unit-left"><span class="schedule-classic-img"><img
                                                                src="{{ asset('website/images/event11.png') }}"
                                                                alt="" width="122"
                                                                height="122" /></span></span><span
                                                        class="unit-body"><span class="schedule-classic-content">

                                                            <span class="schedule-classic-title heading-4">Turbo Cup Member
                                                                Awards</span>
                                                        </span></span></span></span></a></div>
                                </div>
                            </article>
                            <!--Bootstrap card12-->
                            <article class="card card-custom card-corporate">
                                <div class="card-header" role="tab">
                                    <div class="card-title"><a class="collapsed" id="accordion2-card-head-vrmbocua"
                                            data-toggle="collapse" data-parent="#accordion2"
                                            href="#accordion2-card-body-eqwqapab"
                                            aria-controls="accordion2-card-body-eqwqapab" aria-expanded="false"
                                            role="button"><span class="schedule-classic"><span
                                                    class="unit unit-spacing-md align-items-center d-block d-md-flex"><span
                                                        class="unit-left"><span class="schedule-classic-img"><img
                                                                src="{{ asset('website/images/event12.png') }}"
                                                                alt="" width="122"
                                                                height="122" /></span></span><span
                                                        class="unit-body"><span class="schedule-classic-content">

                                                            <span class="schedule-classic-title heading-4">LT
                                                                Awards</span>
                                                        </span></span></span></span></a></div>
                                </div>
                            </article>
                            <!--Bootstrap card1-->

                        </div>
                    </div>

                    <div class="tab-pane fade" id="tabs-1-3">
                        <div class="card-group-custom card-group-corporate" id="accordion3" role="tablist"
                            aria-multiselectable="false">
                            <!--Bootstrap card13-->
                            <article class="card card-custom card-corporate">
                                <div class="card-header" role="tab">
                                    <div class="card-title"><a class="collapsed" id="accordion2-card-head-vrmbocua"
                                            data-toggle="collapse" data-parent="#accordion2"
                                            href="#accordion2-card-body-eqwqapab"
                                            aria-controls="accordion2-card-body-eqwqapab" aria-expanded="false"
                                            role="button"><span class="schedule-classic"><span
                                                    class="unit unit-spacing-md align-items-center d-block d-md-flex"><span
                                                        class="unit-left"><span class="schedule-classic-img"><img
                                                                src="{{ asset('website/images/event13.png') }}"
                                                                alt="" width="122"
                                                                height="122" /></span></span><span
                                                        class="unit-body"><span class="schedule-classic-content">

                                                            <span class="schedule-classic-title heading-4">Digital
                                                                Conference 2019
                                                                Chapter Go Green Awards</span>
                                                        </span></span></span></span></a></div>
                                </div>
                            </article>
                            <!--Bootstrap card14-->
                            <article class="card card-custom card-corporate">
                                <div class="card-header" role="tab">
                                    <div class="card-title"><a class="collapsed" id="accordion3-card-head-spqeafxt"
                                            data-toggle="collapse" data-parent="#accordion3"
                                            href="#accordion3-card-body-nxplbtnu"
                                            aria-controls="accordion3-card-body-nxplbtnu" aria-expanded="false"
                                            role="button"><span class="schedule-classic"><span
                                                    class="unit unit-spacing-md align-items-center d-block d-md-flex"><span
                                                        class="unit-left"><span class="schedule-classic-img"><img
                                                                src="{{ asset('website/images/event14.png') }}"
                                                                alt="" width="122"
                                                                height="122" /></span></span><span
                                                        class="unit-body"><span class="schedule-classic-content">

                                                            <span class="schedule-classic-title heading-4">Chapter Awards
                                                            </span>
                                                        </span></span></span></span></a></div>
                                </div>
                            </article>
                            <!--Bootstrap card15-->
                            <article class="card card-custom card-corporate">
                                <div class="card-header" role="tab">
                                    <div class="card-title"><a class="collapsed" id="accordion3-card-head-twpndpre"
                                            data-toggle="collapse" data-parent="#accordion3"
                                            href="#accordion3-card-body-isrhhksp"
                                            aria-controls="accordion3-card-body-isrhhksp" aria-expanded="false"
                                            role="button"><span class="schedule-classic"><span
                                                    class="unit unit-spacing-md align-items-center d-block d-md-flex"><span
                                                        class="unit-left"><span class="schedule-classic-img"><img
                                                                src="{{ asset('website/images/event15.png') }}"
                                                                alt="" width="122"
                                                                height="122" /></span></span><span
                                                        class="unit-body"><span class="schedule-classic-content">

                                                            <span class="schedule-classic-title heading-4">Chapter
                                                                Awards</span>
                                                        </span></span></span></span></a></div>
                                </div>
                            </article>
                            <!--Bootstrap card16-->
                            <article class="card card-custom card-corporate">
                                <div class="card-header" role="tab">
                                    <div class="card-title"><a class="collapsed" id="accordion3-card-head-twpndpre"
                                            data-toggle="collapse" data-parent="#accordion3"
                                            href="#accordion3-card-body-isrhhksp"
                                            aria-controls="accordion3-card-body-isrhhksp" aria-expanded="false"
                                            role="button"><span class="schedule-classic"><span
                                                    class="unit unit-spacing-md align-items-center d-block d-md-flex"><span
                                                        class="unit-left"><span class="schedule-classic-img"><img
                                                                src="{{ asset('website/images/event16.png') }}"
                                                                alt="" width="122"
                                                                height="122" /></span></span><span
                                                        class="unit-body"><span class="schedule-classic-content">

                                                            <span class="schedule-classic-title heading-4">Chapter
                                                                Awards</span>
                                                        </span></span></span></span></a></div>
                                </div>
                            </article>
                            <!--Bootstrap card17-->
                            <article class="card card-custom card-corporate">
                                <div class="card-header" role="tab">
                                    <div class="card-title"><a class="collapsed" id="accordion3-card-head-twpndpre"
                                            data-toggle="collapse" data-parent="#accordion3"
                                            href="#accordion3-card-body-isrhhksp"
                                            aria-controls="accordion3-card-body-isrhhksp" aria-expanded="false"
                                            role="button"><span class="schedule-classic"><span
                                                    class="unit unit-spacing-md align-items-center d-block d-md-flex"><span
                                                        class="unit-left"><span class="schedule-classic-img"><img
                                                                src="{{ asset('website/images/event17.png') }}"
                                                                alt="" width="122"
                                                                height="122" /></span></span><span
                                                        class="unit-body"><span class="schedule-classic-content">

                                                            <span class="schedule-classic-title heading-4">Chapter Awards
                                                                stages</span>
                                                        </span></span></span></span></a></div>
                                </div>
                            </article>
                            <!--Bootstrap card18-->
                            <article class="card card-custom card-corporate">
                                <div class="card-header" role="tab">
                                    <div class="card-title"><a class="collapsed" id="accordion3-card-head-twpndpre"
                                            data-toggle="collapse" data-parent="#accordion3"
                                            href="#accordion3-card-body-isrhhksp"
                                            aria-controls="accordion3-card-body-isrhhksp" aria-expanded="false"
                                            role="button"><span class="schedule-classic"><span
                                                    class="unit unit-spacing-md align-items-center d-block d-md-flex"><span
                                                        class="unit-left"><span class="schedule-classic-img"><img
                                                                src="{{ asset('website/images/event18.png') }}"
                                                                alt="" width="122"
                                                                height="122" /></span></span><span
                                                        class="unit-body"><span class="schedule-classic-content">

                                                            <span class="schedule-classic-title heading-4">Chapter
                                                                Awards</span>
                                                        </span></span></span></span></a></div>
                                </div>

                            </article>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> --}}
    <!--========================Section Photo Gallery====================================-->

    <section style="background: #f0f0f0; padding: 20px 0;">
        <div class="container mt-4"
            style="display: flex; align-items: center; flex-direction: row; gap: 15px; padding-left: 15px;">
            <div style="width: 3px; height: 40px; background-color: #E31E25; margin-top: 50px;"></div>
            <h2
                style="font-size: 36px; font-weight: bold; font-family: 'Times New Roman', Times, serif; margin-left: 0; margin-top: 50px;">
                <span style="color: #FFD800;">PHOTO</span> <span style="color: #393186;">gallery</span>
            </h2>
        </div>

        <div class="gallery-wrapper"
            style="height: 320px; width: 100%; display: flex; align-items: center; justify-content: center; gap: 10px; max-width: 1400px; margin: 0 auto;">
            <button onclick="scrollImages(-1)" class="scroll-btn">&#10094;</button>

            <div style="width: 100%; display: flex; justify-content: center;">



                <div id="imageContainer" class="image-container">
                    @foreach ($images as $image)
                        <img src="{{ asset('Images/' . $image->image) }}" />
                    @endforeach
                </div>

            </div>

            <button onclick="scrollImages(1)" class="scroll-btn">&#10095;</button>
        </div>

        {{--  <script>
            function scrollImages(direction) {
                const container = document.getElementById('imageContainer');
                const imageWidth = container.querySelector('img')?.offsetWidth || 275;
                const gap = 20; // your image gap
                container.scrollBy({
                    left: direction * (imageWidth + gap),
                    behavior: 'smooth'
                });
            }
        </script>  --}}

        <script>
            const container = document.getElementById('imageContainer');
            const imageWidth = container.querySelector('img')?.offsetWidth || 255;
            const gap = 20;
            const imagesPerView = 4;
            const scrollStep = (imageWidth + gap) * imagesPerView;

            function autoSlide() {
                // Scroll by 4 images
                container.scrollBy({
                    left: scrollStep,
                    behavior: 'smooth'
                });

                // If near the end, reset to start
                if (container.scrollLeft + container.offsetWidth >= container.scrollWidth - 1) {
                    setTimeout(() => {
                        container.scrollTo({
                            left: 0,
                            behavior: 'smooth'
                        });
                    }, 2000); // Wait before resetting
                }
            }

            setInterval(autoSlide, 4000); // Every 4 seconds
        </script>


        <style>
            {{--  .image-container {
                display: flex;
                gap: 20px;
                overflow-x: auto;
                scroll-behavior: smooth;
                width: 1080px;
                flex-shrink: 0;
                scrollbar-width: none;
                /* Firefox */
                -ms-overflow-style: none;
                /* IE/Edge */
            }  --}} .image-container {
                display: flex;
                gap: 20px;
                overflow-x: auto;
                scroll-behavior: smooth;
                width: calc((255px + 20px) * 4 - 20px);
                /* 4 images, 3 gaps */
                flex-shrink: 0;
                scrollbar-width: none;
                -ms-overflow-style: none;
            }

            .image-container::-webkit-scrollbar {
                display: none;
                /* Chrome/Safari */
            }

            .image-container img {
                width: 255px;
                height: 255px;
                border-radius: 12px;
                flex-shrink: 0;
                background: #ddd;
            }

            .scroll-btn {
                font-size: 24px;
                padding: 10px;
                background: none;
                border: none;
                cursor: pointer;
            }

            @media (max-width: 768px) {
                .gallery-wrapper {
                    flex-direction: column;
                    height: auto;
                    gap: 0;
                }

                .scroll-btn {
                    display: none;
                }

                .image-container {
                    width: 100%;
                    padding: 0 10px;
                    overflow-x: auto;
                    scroll-snap-type: x mandatory;
                }

                .image-container img {
                    width: 94vw;
                    height: 266px;
                    scroll-snap-align: center;
                }

                h2 {
                    font-size: 28px !important;
                }
            }
        </style>
    </section>








    {{-- <section class="parallax-container section" >
        <div class="parallax-content section-lg context-dark text-center parallax-overlay-gradient-primary-1">
            <div class="container container-wide">
                <h6>event album</h6>
                <h3>Photo Gallery</h3>
                <div class="row row-ten row-narrow row-30 row-lg-50 justify-content-center" data-lightgallery="group">
                    <div class="col-sm-4 col-md-3 col-lg-2">
                        <div class="wow">
                            <div>
                                <!-- Gallery Thumbnail--><a class="thumbnail"
                                    href="{{ asset('website/images/gallery_img_1.png') }}"
                                    data-lightgallery="item"><span></span><span></span><img
                                        src="{{ asset('website/images/gallery_img_1.png') }}" alt=""
                                        width="298" height="343" /></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4 col-md-3 col-lg-2">
                        <div class="wow">
                            <div>
                                <!-- Gallery Thumbnail--><a class="thumbnail"
                                    href="{{ asset('website/images/gallery_img_2.png') }}"
                                    data-lightgallery="item"><span></span><span></span><img
                                        src="{{ asset('website/images/gallery_img_2.png') }}" alt=""
                                        width="298" height="343" /></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4 col-md-3 col-lg-2">
                        <div class="wow">
                            <div>
                                <!-- Gallery Thumbnail--><a class="thumbnail"
                                    href="{{ asset('website/images/gallery_img_3.png') }}"
                                    data-lightgallery="item"><span></span><span></span><img
                                        src="{{ asset('website/images/gallery_img_3.png') }}" alt=""
                                        width="298" height="343" /></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4 col-md-3 col-lg-2">
                        <div class="wow">
                            <div>
                                <!-- Gallery Thumbnail--><a class="thumbnail"
                                    href="{{ asset('website/images/gallery_img_4.png') }}"
                                    data-lightgallery="item"><span></span><span></span><img
                                        src="{{ asset('website/images/gallery_img_4.png') }}" alt=""
                                        width="298" height="343" /></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4 col-md-3 col-lg-2">
                        <div class="wow">
                            <div>
                                <!-- Gallery Thumbnail--><a class="thumbnail"
                                    href="{{ asset('website/images/gallery_img_5.png') }}"
                                    data-lightgallery="item"><span></span><span></span><img
                                        src="{{ asset('website/images/gallery_img_5.png') }}" alt=""
                                        width="298" height="343" /></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </section> --}}
    <!--========================Section Official Sponsors=================================-->
    {{-- <section class="parallax-container section"
        data-parallax-img="{{ asset('website/images/bg-parallax-04-1894x1170.jpg') }}">
        <div class="parallax-content section-lg context-dark text-center">
            <div class="container">

                <h3>Official Sponsors</h3>
                <div class="row row-30 row-lg-50 justify-content-center">
                    <div class="col-sm-4 col-lg-4">
                        <div class="wow">
                            <div>
                                <!-- Sponsor Heading -->
                                <h5 class="sponsor-heading" style="margin-bottom: 15px;">TITLE SPONSOR</h5>
                                <!-- Sponsor--><a class="sponsor" href="#" data-triangle=".sponsor-overlay">
                                    <div class="sponsor-overlay"></div>
                                    <div class="sponsor-img"><img src="{{ asset('website/images/Rishiraj_02.png') }}"
                                            alt="" width="210" height="70" />
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4 col-lg-4">
                        <div class="wow">
                            <div>
                                <!-- Sponsor Heading -->
                                <h5 class="sponsor-heading" style="margin-bottom: 15px;">CO SPONSORED BY</h5>
                                <!-- Sponsor-->
                                <a class="sponsor" href="#" data-triangle=".sponsor-overlay">

                                    <div class="sponsor-img">
                                        <img src="{{ asset('website/images/impressive_impressions.png') }}"
                                            alt="" width="210" height="70" />
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4 col-lg-4">
                        <div class="wow">
                            <div>
                                <!-- Sponsor Heading -->
                                <h5 class="sponsor-heading" style="margin-bottom: 15px;">BADGE SPONSORED</h5>
                                <!-- Sponsor--><a class="sponsor" href="#" data-triangle=".sponsor-overlay">
                                    <div class="sponsor-overlay"></div>
                                    <div class="sponsor-img"><img src="{{ asset('website/images/real_buildcon.png') }}"
                                            alt="" width="210" height="70" />
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        </section> --}}
    <!--=========================Section Grid Gallery=====================================-->
    {{-- <section class="section section-lg bg-default text-center">
        <div class="container container-wide">
            <h4 class="font-weight-bold">Event Partners</h4>
            <div class="row row-ten row-narrow row-30 row-lg-50 justify-content-center" data-lightgallery="group">
                <div class="col-sm-4 col-md-3 col-lg-2">
                    <!-- Gallery Thumbnail--><img src="{{ asset('website/images/logo4.png') }}" alt=""
                        width="298" height="343" />
                </div>
                <div class="col-sm-4 col-md-3 col-lg-2">
                    <!-- Gallery Thumbnail--><img src="{{ asset('website/images/logo3.png') }}" alt=""
                        width="298" height="343" />
                </div>
                <div class="col-sm-4 col-md-3 col-lg-2">
                    <!-- Gallery Thumbnail--><img src="{{ asset('website/images/logo5.png') }}" alt=""
                        width="298" height="343" />
                </div>
                <div class="col-sm-4 col-md-3 col-lg-2">
                    <!-- Gallery Thumbnail--><img src="{{ asset('website/images/logo1.png') }}" alt=""
                        width="298" height="343" />
                </div>

            </div>
        </div>
     </section> --}}
    <!--=======================Section We Have Top Executive And Start Up Here=========-->


    {{-- <section class="section section-lg bg-default text-center">
        <div class="container container-wide">
            <h4 class="font-weight-bold" style="margin-bottom:60px;margin-top:-12px">Event Supported BY</h4>
            <div class="brand-area pb-120">
                <div class="brand-slider">
                    <div class="brand-gallery">
                        <!-- Add your images here -->
                        <div class="brand-item">
                            <a href="#"><img src="{{ asset('website/images/L1.png') }}" alt="Gallery 1"
                                    class="brand-image"></a>
                        </div>
                        <div class="brand-item">
                            <a href="#"><img src="{{ asset('website/images/L2.png') }}" alt="Gallery 2"
                                    class="brand-image"></a>
                        </div>
                        <div class="brand-item">
                            <a href="#"><img src="{{ asset('website/images/L3.png') }}" alt="Gallery 3"
                                    class="brand-image"></a>
                        </div>
                        <div class="brand-item">
                            <a href="#"><img src="{{ asset('website/images/L4.png') }}" alt="Gallery 4"
                                    class="brand-image"></a>
                        </div>
                        <div class="brand-item">
                            <a href="#"><img src="{{ asset('website/images/L5.png') }}" alt="Gallery 5"
                                    class="brand-image"></a>
                        </div>
                        <div class="brand-item">
                            <a href="#"><img src="{{ asset('website/images/L6.png') }}" alt="Gallery 6"
                                    class="brand-image"></a>
                        </div>
                        <div class="brand-item">
                            <a href="#"><img src="{{ asset('website/images/L7.png') }}" alt="Gallery 7"
                                    class="brand-image"></a>
                        </div>
                        <div class="brand-item">
                            <a href="#"><img src="{{ asset('website/images/L8.png') }}" alt="Gallery 8"
                                    class="brand-image"></a>
                        </div>
                        <div class="brand-item">
                            <a href="#"><img src="{{ asset('website/images/L9.png') }}" alt="Gallery 9"
                                    class="brand-image"></a>
                        </div>
                        <div class="brand-item">
                            <a href="#"><img src="{{ asset('website/images/L10.png') }}" alt="Gallery 10"
                                    class="brand-image"></a>
                        </div>
                        <div class="brand-item">
                            <a href="#"><img src="{{ asset('website/images/L11.png') }}" alt="Gallery 11"
                                    class="brand-image"></a>
                        </div>
                        <div class="brand-item">
                            <a href="#"><img src="{{ asset('website/images/L12.png') }}" alt="Gallery 12"
                                    class="brand-image"></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </section> --}}


    <!--=======================Section We Have Top Executive And Start Up Here=========-->
    {{-- <section class="parallax-container section"
        data-parallax-img="{{ asset('website/images/bg-parallax-05-1894x758.jpg') }}">
        <div class="parallax-content section-lg context-dark text-center">
            <div class="container">
                <div class="row row-30 justify-content-center">
                    <div class="col-md-10 col-lg-8"><a class="video-link wow fadeScale"
                            href="https://youtu.be/G6N4CVXy1dk?si=vSgKsRE8WvvV4BRd" data-lightgallery="item">
                            <div class="video-link-bg" data-triangle=".video-link-overlay"><span
                                    class="video-link-overlay"></span>
                            </div><span class="icon fa-play"></span>
                        </a>
                        <h6 class="text-secondary wow" data-splitting>click here to Watch our promo</h6>
                        <h2 class="wow" data-splitting>We Have Top Executive And Start Up Here.</h2>
                    </div>
                </div>
            </div>
        </div>
        </section> --}}


    {{-- <section class="bg-gray-800 h-[282px] flex items-center justify-between px-10 text-white">
        <div class="text-2xl font-semibold">
          | POWERED BY
        </div>
        <div>
          <img src="" alt="TMS Logo" class="h-[242px]" />
        </div>
        <div class="text-sm leading-tight text-right">
          <p><span class="font-bold">Website link:</span> <a href="http://www.techmetsolutions.com" class="underline text-blue-400">http://www.techmetsolutions.com</a></p>
          <p class="mt-2 font-bold">Follow us for updates on our work, projects, <br />and impact.</p>
          <div class="mt-2">
            <img src="/path-to-instagram-icon.png" alt="Instagram" class="h-6 inline-block" />
          </div>
        </div>
      </section> --}}

    <style>
        body {
            margin: 0;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }

        .powered-by {
            background-color: #414042;
            color: white;
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            align-items: center;
            padding: 40px 20px;
            column-gap: 40px;
            text-align: center;
        }

        .powered-by .label {
            font-weight: bold;
            font-size: 1.5rem;
            border-left: 2px solid white;
            padding-left: 10px;
        }

        .powered-by .logo img {
            max-width: 150px;
            border-radius: 15px;
        }

        .powered-by .info {
            max-width: 355px;
        }




        .powered-by .info p {
            margin: 5px 0;
        }

        .powered-by .info a {
            color: #ddd;
            text-decoration: none;
        }

        .powered-by .info a:hover {
            color: #fff;
            text-decoration: underline;
        }

        .powered-by .social-icon {
            font-size: 1.8rem;
            margin-top: 10px;
        }
    </style>


    <div class="powered-by" style="margin:50px 0;padding:30px 0;">

        <div class="label">
            <p style="font-family: 'Times New Roman'; font-size:36px">POWERED BY</p>
        </div>
        <div class="logo text-center mt-4 mb-4" style="background-color: white; border-radius: 15px;margin:0 40px; ">
            <a href="http://techmetsolutions.com/#/" target="_blank" style="text-decoration: none; color: black;"><img
                    src="{{ asset('website/images/ie8-panel/TMS-LOGO[1] 2 (1).png') }}" alt="TechMET IT Solutions Logo"
                    style="max-width: 270px !important; margin:30px 30px;" /></a>
        </div>
        <div class="info">
            <p><strong>Website link:</strong> <a href="http://www.techmetsolutions.com"
                    target="_blank">http://www.techmetsolutions.com</a></p>
            <p style="font-family: Arial;font-size:16px"><strong>Follow us for updates on our work, projects,<br> and
                    impact.</strong> </p>
            <div class="social-icon">
                <a href="https://www.instagram.com/techmet.solutions_?igsh=c291MjkzdWVpbWZ2&utm_source=qr" target="blank"
                    style="text-decoration: none; color: black;">
                    <svg width="43" height="43" viewBox="0 0 43 43" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M23.3416 3.5835C25.3572 3.58887 26.3802 3.59962 27.2635 3.6247L27.6111 3.63725C28.0124 3.65158 28.4084 3.6695 28.8868 3.691C30.7931 3.78058 32.0938 4.08158 33.2351 4.52412C34.4176 4.9792 35.4138 5.59554 36.41 6.58991C37.3214 7.48527 38.0264 8.56876 38.4758 9.76475C38.9183 10.906 39.2193 12.2068 39.3089 14.1149C39.3304 14.5915 39.3483 14.9875 39.3626 15.3906L39.3734 15.7382C39.4003 16.6197 39.411 17.6427 39.4146 19.6583L39.4164 20.9949V23.342C39.4207 24.6488 39.407 25.9557 39.3752 27.2622L39.3644 27.6097C39.3501 28.0129 39.3322 28.4088 39.3107 28.8854C39.2211 30.7935 38.9165 32.0925 38.4758 33.2356C38.0264 34.4316 37.3214 35.5151 36.41 36.4104C35.5146 37.3218 34.4311 38.0268 33.2351 38.4762C32.0938 38.9187 30.7931 39.2197 28.8868 39.3093L27.6111 39.3631L27.2635 39.3738C26.3802 39.3989 25.3572 39.4115 23.3416 39.415L22.005 39.4168H19.6597C18.3522 39.4214 17.0448 39.4077 15.7377 39.3756L15.3901 39.3649C14.9648 39.3488 14.5396 39.3302 14.1145 39.3093C12.2081 39.2197 10.9074 38.9187 9.7643 38.4762C8.56895 38.0266 7.48609 37.3216 6.59126 36.4104C5.6792 35.5152 4.97358 34.4317 4.52368 33.2356C4.08113 32.0943 3.78013 30.7935 3.69055 28.8854L3.6368 27.6097L3.62784 27.2622C3.59481 25.9557 3.57988 24.6489 3.58305 23.342V19.6583C3.57809 18.3515 3.59123 17.0446 3.62247 15.7382L3.63501 15.3906C3.64934 14.9875 3.66726 14.5915 3.68876 14.1149C3.77834 12.2068 4.07934 10.9078 4.52188 9.76475C4.97284 8.56827 5.6797 7.48474 6.59305 6.58991C7.48737 5.67894 8.5696 4.97396 9.7643 4.52412C10.9074 4.08158 12.2063 3.78058 14.1145 3.691C14.5911 3.6695 14.9888 3.65158 15.3901 3.63725L15.7377 3.6265C17.0442 3.59466 18.351 3.58093 19.6579 3.58529L23.3416 3.5835ZM21.4997 12.5418C19.1238 12.5418 16.8452 13.4857 15.1652 15.1657C13.4852 16.8457 12.5414 19.1243 12.5414 21.5002C12.5414 23.8761 13.4852 26.1546 15.1652 27.8347C16.8452 29.5147 19.1238 30.4585 21.4997 30.4585C23.8756 30.4585 26.1542 29.5147 27.8342 27.8347C29.5142 26.1546 30.4581 23.8761 30.4581 21.5002C30.4581 19.1243 29.5142 16.8457 27.8342 15.1657C26.1542 13.4857 23.8756 12.5418 21.4997 12.5418ZM21.4997 16.1252C22.2056 16.125 22.9045 16.264 23.5567 16.534C24.2089 16.804 24.8015 17.1998 25.3007 17.6988C25.7999 18.1979 26.1959 18.7903 26.4661 19.4424C26.7364 20.0945 26.8755 20.7934 26.8756 21.4993C26.8757 22.2051 26.7368 22.9041 26.4668 23.5563C26.1968 24.2084 25.801 24.801 25.3019 25.3002C24.8029 25.7994 24.2104 26.1954 23.5584 26.4657C22.9063 26.7359 22.2074 26.875 21.5015 26.8752C20.076 26.8752 18.7088 26.3089 17.7008 25.3009C16.6928 24.2929 16.1265 22.9257 16.1265 21.5002C16.1265 20.0746 16.6928 18.7075 17.7008 17.6995C18.7088 16.6915 20.076 16.1252 21.5015 16.1252M30.9078 9.85433C30.3138 9.85433 29.7441 10.0903 29.3241 10.5103C28.9041 10.9303 28.6682 11.4999 28.6682 12.0939C28.6682 12.6879 28.9041 13.2575 29.3241 13.6775C29.7441 14.0975 30.3138 14.3335 30.9078 14.3335C31.5017 14.3335 32.0714 14.0975 32.4914 13.6775C32.9114 13.2575 33.1473 12.6879 33.1473 12.0939C33.1473 11.4999 32.9114 10.9303 32.4914 10.5103C32.0714 10.0903 31.5017 9.85433 30.9078 9.85433Z"
                            fill="white" />
                    </svg>
                </a>
            </div>
        </div>
    </div>
@endsection
