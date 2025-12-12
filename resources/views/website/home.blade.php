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
                                            style="font-family:'Poppins', sans-serif;font-size:18px;font-weight:400;">
                                            Student
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
                                            style="font-family:'Poppins', sans-serif;font-size:18px;font-weight:400;">
                                            Financial
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
                            <img src="{{ asset('website/images/books.png') }}" alt="" class="img-fluid"
                                style="">
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
        <section class="key-instructions-section" style="background:#ffffff;  padding:80px 0;">
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
                            style="position: relative; background: #ffffff;        border-radius: 0px;
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
                            style="position: relative; background: #ffffff;     border-radius: 0px;
                        border: 2px solid #009846; box-shadow: 0 4px 12px rgba(0,0,0,0.1); padding: 30px 25px 30px; height: 200px; display: flex; flex-direction: column; justify-content: center; align-items: center; ">
                            <div class="icon-circle"
                                style="position: absolute; top: -40px; left: 50%; transform: translateX(-50%); background: #009846; border-radius: 50%;     border: 5px solid #ffff;
                            width: 45%;
                            height: 45%; display: flex; align-items: center; justify-content: center; box-shadow: 0 4px 8px rgba(0,0,0,0.2);">
                                <svg width="38" height="42" viewBox="0 0 38 42" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M23.375 18.8333V31.8333M14.625 18.8333V31.8333M5.875 10.1667V36.1667C5.875 37.3159 6.33594 38.4181 7.15641 39.2308C7.97688 40.0435 9.08968 40.5 10.25 40.5H27.75C28.9103 40.5 30.0231 40.0435 30.8436 39.2308C31.6641 38.4181 32.125 37.3159 32.125 36.1667V10.1667M1.5 10.1667H36.5M8.0625 10.1667L12.4375 1.5H25.5625L29.9375 10.1667"
                                        stroke="white" stroke-width="3" stroke-linecap="round"
                                        stroke-linejoin="round" />
                                </svg>


                            </div>
                            <h5 class="card-title"
                                style="font-family:'Poppins', sans-serif;font-size: 16px; font-weight: 600; color: #3E3E3E; text-align: center; margin-top: 45px; margin-bottom: 6px;">
                                Clear Browser Cache</h5>
                            <p class="card-text"
                                style="font-size: 13px; color: #5B5B5B; text-align: center; line-height: 1.5;">
                                Clear your browser cache and history before beginning.</p>
                        </div>
                    </div>

                    <!-- Card 3 -->
                    <div class="col-lg-2 col-md-4 col-sm-6 col-xs-12 mb-4">
                        <div class="key-card"
                            style="position: relative; background: #ffffff;     border-radius: 0px;
                        border: 2px solid #FFD800; box-shadow: 0 4px 12px rgba(0,0,0,0.1); padding: 30px 25px 30px; height: 200px; display: flex; flex-direction: column; justify-content: center; align-items: center; ">
                            <div class="icon-circle"
                                style="position: absolute; top: -40px; left: 50%; transform: translateX(-50%); background: #FFD800; border-radius: 50%;     border: 5px solid #ffff;
                            width: 45%;
                            height: 45%; display: flex; align-items: center; justify-content: center; box-shadow: 0 4px 8px rgba(0,0,0,0.2);">
                                <svg width="41" height="41" viewBox="0 0 41 41" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M28.5 0.25C28.8315 0.25 29.1494 0.381791 29.3838 0.616211C29.6182 0.850632 29.75 1.16848 29.75 1.5V4.25H35.5C36.8924 4.25 38.2273 4.80352 39.2119 5.78809C40.1965 6.77265 40.75 8.10761 40.75 9.5V35.5C40.75 36.8924 40.1965 38.2273 39.2119 39.2119C38.2273 40.1965 36.8924 40.75 35.5 40.75H5.5C4.1082 40.7483 2.77321 40.1951 1.78906 39.2109C0.804914 38.2268 0.251667 36.8918 0.25 35.5V9.5L0.256836 9.23926C0.32269 7.94234 0.866478 6.71165 1.78906 5.78906C2.77321 4.80491 4.1082 4.25167 5.5 4.25H11.25V1.5C11.25 1.16848 11.3818 0.850631 11.6162 0.616211C11.8506 0.381791 12.1685 0.25 12.5 0.25C12.8315 0.25 13.1494 0.381791 13.3838 0.616211C13.6182 0.850632 13.75 1.16848 13.75 1.5V4.25H27.25V1.5C27.25 1.16848 27.3818 0.850632 27.6162 0.616211C27.8506 0.381791 28.1685 0.25 28.5 0.25ZM2.75 35.5C2.75 36.2293 3.03994 36.9286 3.55566 37.4443C4.07139 37.9601 4.77065 38.25 5.5 38.25H35.5C36.2293 38.25 36.9286 37.9601 37.4443 37.4443C37.9601 36.9286 38.25 36.2293 38.25 35.5V18.75H2.75V35.5ZM5.5 6.75C3.97829 6.75 2.75 7.98185 2.75 9.5V16.25H38.25V9.5C38.25 8.77065 37.9601 8.07139 37.4443 7.55566C36.9286 7.03994 36.2293 6.75 35.5 6.75H29.75V9.5C29.75 9.83152 29.6182 10.1494 29.3838 10.3838C29.1494 10.6182 28.8315 10.75 28.5 10.75C28.1685 10.75 27.8506 10.6182 27.6162 10.3838C27.3818 10.1494 27.25 9.83152 27.25 9.5V6.75H13.75V9.5C13.75 9.83152 13.6182 10.1494 13.3838 10.3838C13.1494 10.6182 12.8315 10.75 12.5 10.75C12.1685 10.75 11.8506 10.6182 11.6162 10.3838C11.3818 10.1494 11.25 9.83152 11.25 9.5V6.75H5.5Z"
                                        fill="white" stroke="white" stroke-width="0.5" />
                                </svg>



                            </div>
                            <h5 class="card-title"
                                style="font-family:'Poppins', sans-serif;font-size: 16px; font-weight: 600; color: #3E3E3E; text-align: center; margin-top: 45px; margin-bottom: 6px;">
                                Application Deadline</h5>
                            <p class="card-text"
                                style="font-size: 13px; color: #5B5B5B; text-align: center; line-height: 1.5;">
                                Apply at least 90 days before your course start date.</p>
                        </div>
                    </div>

                    <!-- Card 4 -->
                    <div class="col-lg-2 col-md-4 col-sm-6 col-xs-12 mb-4">
                        <div class="key-card"
                            style="position: relative; background: #ffffff;     border-radius: 0px;
                        border: 2px solid #E31E25; box-shadow: 0 4px 12px rgba(0,0,0,0.1); padding: 30px 25px 30px; height: 200px; display: flex; flex-direction: column; justify-content: center; align-items: center; ">
                            <div class="icon-circle"
                                style="position: absolute; top: -40px; left: 50%; transform: translateX(-50%); background: #E31E25; border-radius: 50%;     border: 5px solid #ffff;
                            width: 45%;
                            height: 45%; display: flex; align-items: center; justify-content: center; box-shadow: 0 4px 8px rgba(0,0,0,0.2);">
                                <svg width="44" height="42" viewBox="0 0 44 42" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M21.9289 40.5C32.1856 40.5 40.5003 32.1853 40.5003 21.9285C40.5003 11.6718 32.1856 3.35712 21.9289 3.35712C11.6721 3.35712 3.35742 11.6718 3.35742 21.9285C3.35742 32.1853 11.6721 40.5 21.9289 40.5Z"
                                        stroke="white" stroke-width="3" stroke-linecap="round"
                                        stroke-linejoin="round" />
                                    <path
                                        d="M21.9286 12.6429V21.9286L27.5 27.5M1.5 7.07143L7.07143 1.5M36.7857 1.5L42.3571 7.07143"
                                        stroke="white" stroke-width="3" stroke-linecap="round"
                                        stroke-linejoin="round" />
                                </svg>



                            </div>
                            <h5 class="card-title"
                                style="font-family:'Poppins', sans-serif;font-size: 16px; font-weight: 600; color: #3E3E3E; text-align: center; margin-top: 45px; margin-bottom: 6px;">
                                Submission Validity</h5>
                            <p class="card-text"
                                style="font-size: 13px; color: #5B5B5B; text-align: center; line-height: 1.5;">
                                Submit your form within 30 days of creation or it will be disabled.</p>
                        </div>
                    </div>

                    <!-- Card 5 -->
                    <div class="col-lg-2 col-md-4 col-sm-6 col-xs-12 mb-4">
                        <div class="key-card"
                            style="position: relative; background: #ffffff;     border-radius: 0px;
                        border: 2px solid #393186; box-shadow: 0 4px 12px rgba(0,0,0,0.1); padding: 30px 25px 30px; height: 200px; display: flex; flex-direction: column; justify-content: center; align-items: center; ">
                            <div class="icon-circle"
                                style="position: absolute; top: -40px; left: 50%; transform: translateX(-50%); background: #393186; border-radius: 50%;     border: 5px solid #ffff;
                            width: 45%;
                            height: 45%; display: flex; align-items: center; justify-content: center; box-shadow: 0 4px 8px rgba(0,0,0,0.2);">
                                <svg width="38" height="42" viewBox="0 0 38 42" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M23.375 18.8333V31.8333M14.625 18.8333V31.8333M5.875 10.1667V36.1667C5.875 37.3159 6.33594 38.4181 7.15641 39.2308C7.97688 40.0435 9.08968 40.5 10.25 40.5H27.75C28.9103 40.5 30.0231 40.0435 30.8436 39.2308C31.6641 38.4181 32.125 37.3159 32.125 36.1667V10.1667M1.5 10.1667H36.5M8.0625 10.1667L12.4375 1.5H25.5625L29.9375 10.1667"
                                        stroke="white" stroke-width="3" stroke-linecap="round"
                                        stroke-linejoin="round" />
                                </svg>


                            </div>
                            <h5 class="card-title"
                                style="font-family:'Poppins', sans-serif;font-size: 16px; font-weight: 600; color: #3E3E3E; text-align: center; margin-top: 45px; margin-bottom: 6px;">
                                Required Documents</h5>
                            <p class="card-text"
                                style="font-size: 13px; color: #5B5B5B; text-align: center; line-height: 1.5;">
                                Keep all required documents ready before starting.<br>Checklist on JEAP website.</p>

                        </div>
                    </div>

                    <!-- Card 6 -->
                    <div class="col-lg-2 col-md-4 col-sm-6 col-xs-12 mb-4">
                        <div class="key-card"
                            style="position: relative; background: #ffffff;     border-radius: 0px;
                        border: 2px solid #009846; box-shadow: 0 4px 12px rgba(0,0,0,0.1); padding: 30px 25px 30px; height: 200px; display: flex; flex-direction: column; justify-content: center; align-items: center; ">
                            <div class="icon-circle"
                                style="position: absolute; top: -40px; left: 50%; transform: translateX(-50%); background: #009846; border-radius: 50%;     border: 5px solid #ffff;
                            width: 45%;
                            height: 45%; display: flex; align-items: center; justify-content: center; box-shadow: 0 4px 8px rgba(0,0,0,0.2);">
                                <svg width="38" height="42" viewBox="0 0 38 42" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M23.375 18.8333V31.8333M14.625 18.8333V31.8333M5.875 10.1667V36.1667C5.875 37.3159 6.33594 38.4181 7.15641 39.2308C7.97688 40.0435 9.08968 40.5 10.25 40.5H27.75C28.9103 40.5 30.0231 40.0435 30.8436 39.2308C31.6641 38.4181 32.125 37.3159 32.125 36.1667V10.1667M1.5 10.1667H36.5M8.0625 10.1667L12.4375 1.5H25.5625L29.9375 10.1667"
                                        stroke="white" stroke-width="3" stroke-linecap="round"
                                        stroke-linejoin="round" />
                                </svg>


                            </div>
                            <h5 class="card-title"
                                style="font-family:'Poppins', sans-serif;font-size: 16px; font-weight: 600; color: #3E3E3E; text-align: center; margin-top: 45px; margin-bottom: 6px;">
                                Clear Browser Cache</h5>
                            <p class="card-text"
                                style="font-size: 13px; color: #5B5B5B; text-align: center; line-height: 1.5;">
                                Clear your browser cache and history before beginning.</p>
                        </div>
                    </div>


                </div>
            </div>
        </section>

        {{-- =============================WORKING COMMITTEE SECTION================= --}}
        <section style="padding: 0px 0 0 0;background:#FFFF !important;">
            <div class="container">
                <!-- Header -->
                <div class="text-start mb-5" style="background:#FFFF !important;">
                    <div style="display: flex; align-items: center; flex-direction: row; gap: 15px;">
                        <div style="width: 3px; height: 40px; background-color: #E31E25;"></div>
                        <h2
                            style="font-size: 36px; font-weight: bold; font-family: 'Times New Roman', Times, serif; margin: 0;">
                            <span style="color: #FFD800;">WORKING</span> <span style="color: #393186;">COMMITTEE</span>
                        </h2>
                    </div>
                </div>
        </section>
        <section style="padding: 80px 0;background:#FFF9E6 !important;">
            <!-- Cards Container -->
            <div class="carousel-outer"
                style="display: flex; justify-content: center; align-items: center; position: relative; overflow: hidden;">
                <!-- Left Arrow -->
                {{-- <button class="left-arrow"
                    style="background: #98789D; color: white; border: none; border-radius: 50%; width: 45px; height: 45px; cursor: pointer; display: flex; align-items: center; justify-content: center; font-size: 24px; box-shadow: 0 4px 8px rgba(0,0,0,0.2); position: absolute; left: 100px; z-index: 10;">
                    <img src="{{ asset('website/images/leftPointedArrow.png') }}" alt=""
                        style="width: 45px;height:45px;cursor:pointer;z-index:10;" id="leftArrow"></button> --}}
                <img src="{{ asset('website/images/leftPointedArrow.png') }}" class="left-arrow"
                    style="width:45px; height:45px; cursor:pointer; position:absolute; left:100px; z-index:10;">


                <!-- Carousel Container -->
                <div class="carousel-container" style="overflow: hidden; flex: 4; max-width: calc(4 * 270px);">
                    <div class="carousel-track" style="display: flex; gap: 20px; transition: transform 0.5s ease;">
                        <!-- Card 1 -->
                        <div class="card"
                            style="width: 250px; background: white; border-radius: 0px; box-shadow: 0 4px 12px rgba(0,0,0,0.1); text-align: center; padding: 20px;border:1px solid #D7D7D7;">
                            <div
                                style="border-radius: 50%; width: 150px; height: 150px; margin: 0 auto 15px; overflow: hidden; box-shadow: 0 2px 8px rgba(0,0,0,0.2); border: 2px solid #ccc;">
                                <img src="{{ asset('website/images/wc11.png') }}" alt="Photo"
                                    style="width: 100%; height: 100%; object-fit: cover;">
                            </div>
                            <h3
                                style="font-size: 16px; font-weight: 600; color: #393186; margin-bottom: -4px;font-family: 'Poppins', sans-serif !important; text-transform: none !important;">
                                Hitesh Doshi
                            </h3>
                            <p style="font-size: 16px; color: #4D4D4D;font-weight: 600; margin-bottom: -4px;">Designation 1
                            </p>
                            <a href="#" style="font-size: 16px;  color: #FFD800; text-decoration:underline;">Show
                                more</a>
                        </div>

                        <!-- Card 2 -->
                        <div class="card"
                            style="width: 250px; background: white; border-radius: 0px; box-shadow: 0 4px 12px rgba(0,0,0,0.1); text-align: center; padding: 20px;border:1px solid #D7D7D7;">
                            <div
                                style="border-radius: 50%; width: 150px; height: 150px; margin: 0 auto 15px; overflow: hidden; box-shadow: 0 2px 8px rgba(0,0,0,0.2); border: 2px solid #ccc;">
                                <img src="{{ asset('website/images/wc11.png') }}" alt="Photo"
                                    style="width: 100%; height: 100%; object-fit: cover;">
                            </div>
                            <h3
                                style="font-size: 16px; font-weight: 600; color: #393186; margin-bottom: -4px;font-family: 'Poppins', sans-serif !important; text-transform: none !important;">
                                Hitesh Doshi
                            </h3>
                            <p style="font-size: 16px; color: #4D4D4D;font-weight: 600; margin-bottom: -4px;">Designation 1
                            </p>
                            <a href="#" style="font-size: 16px;  color: #FFD800; text-decoration:underline;">Show
                                more</a>
                        </div>

                        <!-- Card 3 -->
                        <div class="card"
                            style="width: 250px; background: white; border-radius: 0px; box-shadow: 0 4px 12px rgba(0,0,0,0.1); text-align: center; padding: 20px;border:1px solid #D7D7D7;">
                            <div
                                style="border-radius: 50%; width: 150px; height: 150px; margin: 0 auto 15px; overflow: hidden; box-shadow: 0 2px 8px rgba(0,0,0,0.2); border: 2px solid #ccc;">
                                <img src="{{ asset('website/images/wc11.png') }}" alt="Photo"
                                    style="width: 100%; height: 100%; object-fit: cover;">
                            </div>
                            <h3
                                style="font-size: 16px; font-weight: 600; color: #393186; margin-bottom: -4px;font-family: 'Poppins', sans-serif !important; text-transform: none !important;">
                                Hitesh Doshi
                            </h3>
                            <p style="font-size: 16px; color: #4D4D4D;font-weight: 600; margin-bottom: -4px;">Designation 1
                            </p>
                            <a href="#" style="font-size: 16px;  color: #FFD800; text-decoration:underline;">Show
                                more</a>
                        </div>


                        <!-- Card 4 -->
                        <div class="card"
                            style="width: 250px; background: white; border-radius: 0px; box-shadow: 0 4px 12px rgba(0,0,0,0.1); text-align: center; padding: 20px;border:1px solid #D7D7D7;">
                            <div
                                style="border-radius: 50%; width: 150px; height: 150px; margin: 0 auto 15px; overflow: hidden; box-shadow: 0 2px 8px rgba(0,0,0,0.2); border: 2px solid #ccc;">
                                <img src="{{ asset('website/images/wc11.png') }}" alt="Photo"
                                    style="width: 100%; height: 100%; object-fit: cover;">
                            </div>
                            <h3
                                style="font-size: 16px; font-weight: 600; color: #393186; margin-bottom: -4px;font-family: 'Poppins', sans-serif !important; text-transform: none !important;">
                                Hitesh Doshi
                            </h3>
                            <p style="font-size: 16px; color: #4D4D4D;font-weight: 600; margin-bottom: -4px;">Designation 1
                            </p>
                            <a href="#" style="font-size: 16px;  color: #FFD800; text-decoration:underline;">Show
                                more</a>
                        </div>

                    </div>
                </div>

                <!-- Right Arrow -->
                {{-- <button class="right-arrow"
                    style="background: #98789D; color: white; border: none; border-radius: 50%; width: 50px; height: 50px; cursor: pointer; display: flex; align-items: center; justify-content: center; font-size: 24px; box-shadow: 0 4px 8px rgba(0,0,0,0.2); position: absolute; right:0; z-index: 10;">
                    <img src="{{ asset('website/images/rightPointedArrow.png') }}" alt=""
                        style="width: 45px;height:45px;cursor:pointer;z-index:10;" id="rightArrow"></button> --}}

                <img src="{{ asset('website/images/rightPointedArrow.png') }}" class="right-arrow"
                    style="width:45px; height:45px; cursor:pointer; position:absolute; right:100px; z-index:10;">
            </div>
            </div>

            <!-- CSS for responsiveness -->
            <style>
                @media (max-width: 768px) {
                    .carousel-outer {
                        padding: 0 60px;
                    }

                    .carousel-container {
                        max-width: calc(100vw - 120px);
                    }

                    .card {
                        flex-shrink: 0;
                        /* min-width: 250px; */
                        width: 225px;
                    }
                }

                @media (max-width: 576px) {
                    .card {
                        width: 200px;
                    }
                }
            </style>

            <!-- JavaScript for carousel functionality -->
            <script>
                document.addEventListener('DOMContentLoaded', function() {
                    const track = document.querySelector('.carousel-track');
                    const cards = document.querySelectorAll('.card');
                    const leftBtn = document.querySelector('.left-arrow');
                    const rightBtn = document.querySelector('.right-arrow');
                    let currentIndex = 0;

                    function getCardsPerView() {
                        const width = window.innerWidth;
                        if (width <= 576) return 1;
                        if (width <= 992) return 2;
                        return 4;
                    }

                    function slide() {
                        const cardsPerView = getCardsPerView();
                        const cardWidth = cards[0].offsetWidth + 20; // 250 + gap
                        const maxIndex = Math.max(0, cards.length - cardsPerView);
                        currentIndex = Math.max(0, Math.min(currentIndex, maxIndex));
                        track.style.transform = `translateX(-${currentIndex * cardWidth}px)`;
                    }

                    leftBtn.addEventListener('click', function() {
                        currentIndex--;
                        slide();
                    });

                    rightBtn.addEventListener('click', function() {
                        currentIndex++;
                        slide();
                    });

                    window.addEventListener('resize', function() {
                        currentIndex = 0; // Reset on resize might be good, but optional
                        slide();
                    });

                    // Initial call
                    window.addEventListener('load', slide);
                });
            </script>
        </section>
        {{-- =============================ABOUT US SECTION================= --}}




        <section style="padding: 100px 0; background: #ffffff;">
            <div class="container" style="display: flex; flex-direction: column; gap: 30px;">

                <!-- About Us Section -->
                <div class="text-image-wrapper row">



                    <!-- Image -->
                    <div class="about-img-container col-md-5" style="">
                        {{-- <div
                            style="background-color: #FFD800; width: 80%; height: 100%; position: absolute; top: -20px; right: 15px; z-index: 1; border-radius: 10px;">
                        </div> --}}


                        <img src="{{ asset('website/images/books22.png') }}" alt="About Us Image"
                            style="width: 80%; border-radius: 10px; position: relative; z-index: 2; display: block; margin: auto; transform: translateX(10px);">

                    </div>
                    <!-- Text -->
                    <div style="" class="col-md-7">
                        <div style="display: flex; align-items: center; flex-direction: row; gap: 15px;">
                            <div style="width: 3px; height: 40px; background-color: #E31E25;"></div>
                            <h2
                                style="font-size: 36px; font-weight: bold; font-family: 'Times New Roman', Times, serif; margin: 0;">
                                <span style="color: #FFD800;">Empowering</span> <span
                                    style="color: #393186;">Futures</span>
                            </h2>
                        </div>
                        <p
                            style="font-size: 16px; line-height: 1.6; margin-top: 20px; font-family: Arial; color: #5B5B5B; text-align: justify;">
                            We are committed to empowering deserving, needy, and meritorious students to pursue higher
                            education in India and abroad. Through financial assistance and essential resources, we enable
                            them to access top-tier institutions and unlock their true potential.
                        </p>
                        <div style="display: flex; align-items: center; flex-direction: row; gap: 15px;margin-top:30px;">
                            <div style="width: 10px; height: 10px; background-color: #FFD800;border-radius:50%"></div>
                            <h2
                                style="font-size: 20px; font-weight: bold; font-family: 'Times New Roman', Times, serif; margin: 0;">
                                <span style="color: #FFD800;">Vision</span> <span style="color: #393186;">of JEAP</span>
                            </h2>
                        </div>
                        <p
                            style="font-size: 16px; line-height: 1.6; margin-top: 10px; font-family: Arial; color: #5B5B5B; text-align: justify;">
                            Aligned with JITO’s overarching vision, JEAP (JITO Education Assistance Program) was established
                            with a dedicated focus on uplifting Jain students through quality education and meaningful
                            opportunities.
                        </p>
                        <div style="display: flex; align-items: center; flex-direction: row; gap: 15px;margin-top:30px;">
                            <div style="width: 10px; height: 10px; background-color: #FFD800;border-radius:50%"></div>
                            <h2
                                style="font-size: 20px; font-weight: bold; font-family: 'Times New Roman', Times, serif; margin: 0;">
                                <span style="color: #FFD800;">Mission</span> <span style="color: #393186;">of JEAP</span>
                            </h2>
                        </div>
                        <p
                            style="font-size: 16px; line-height: 1.6; margin-top: 10px; font-family: Arial; color: #5B5B5B; text-align: justify;">
                            To reach every deserving and underprivileged Jain student by extending timely and impactful
                            support that enables meaningful academic progress and nurtures their overall personal growth.
                        </p>

                    </div>
                </div>

                {{-- <!-- Vision & Mission Section -->
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
                            To become a world-class organization that not only drives economic prosperity but also serves as
                            a
                            catalyst for social transformation. JITO envisions a future where Jain values inspire ethical
                            leadership, compassion, and collective growth.
                            <br><br>
                            Our ultimate goal is to help build a world that is free from violence, poverty, and disease—a
                            world
                            where humanity thrives with dignity, peace, and purpose.
                            <br><br>
                            Together, we aspire to create a legacy of purpose-driven progress that benefits both community
                            and
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
                </div> --}}

            </div>
        </section>


        <section style="padding: 0px 0 0 0; background: #ffffff; margin-bottom:50px;">

            <div class="container" style="display: flex; flex-direction: column; gap: 30px;">
                <div style="display: flex; align-items: center; flex-direction: row; gap: 15px;">
                    <div style="width: 3px; height: 40px; background-color: #E31E25;"></div>
                    <h2
                        style="font-size: 36px; font-weight: bold; font-family: 'Times New Roman', Times, serif; margin: 0;">
                        <span style="color: #FFD800;">Achievements</span> <span style="color: #393186;">& Impact</span>
                    </h2>
                </div>
            </div>
        </section>

        <section style="padding:60px 0 0 0; background: #393186;">

            <div class="container" style="display: flex; flex-direction: column; gap: 30px;">

                <!-- About Us Section -->
                <div class="text-image-wrapper row">
                    <!-- Text -->
                    <div style="" class="col-md-7">

                        <p
                            style="font-size: 16px; line-height: 1.6; margin-top: 20px; font-family: Arial; color: #FFFF; text-align: justify;">
                            At JEAP, we’ve reshaped student financing with the support of 250+ generous donors who have
                            contributed over ₹39.85 crore. This has enabled us to assist 561+ students, disbursing ₹39.80+
                            crore to date. These numbers reflect transformed lives and fulfilled dreams. Join us in ensuring
                            that financial barriers never limit a student’s pursuit of education.
                        </p>
                        <div class="row">
                            <div class="col-md-3 ">
                                <div class="card text-center"
                                    style="background: #ffff; border-radius: 0px; padding: 15px; margin: 10px;height:120px;">
                                    <h3
                                        style="font-size: 24px; font-weight: 600; font-family: 'Poppins', sans-serif; color: #393186; margin: 0;">
                                        250+</h3>
                                    <p
                                        style="font-size: 14px; color: #5B5B5B; margin-top: 10px; font-family: Arial; text-align: center;">
                                        Number of Donors
                                    </p>
                                </div>
                            </div>
                            <div class="col-md-3 ">
                                <div class="card text-center"
                                    style="background: #ffff; border-radius: 0px; padding: 15px; margin: 10px;height:120px;">
                                    <h3
                                        style="font-size: 24px; font-weight: 600; font-family: 'Poppins', sans-serif; color: #393186; margin: 0;">
                                        261+</h3>
                                    <p
                                        style="font-size: 14px; color: #5B5B5B; margin-top: 10px; font-family: Arial; text-align: center;">
                                        Students got benefits
                                    </p>
                                </div>
                            </div>
                            <div class="col-md-3 ">
                                <div class="card text-center"
                                    style="background: #ffff; border-radius: 0px; padding: 15px; margin: 10px;height:120px;">
                                    <h3
                                        style="font-size: 24px; font-weight: 600; font-family: 'Poppins', sans-serif; color: #393186; margin: 0;">
                                        39.80+</h3>
                                    <p
                                        style="font-size: 14px; color: #5B5B5B; margin-top: 10px; font-family: Arial; text-align: center;">
                                        Financial Assistance Amount
                                    </p>
                                </div>
                            </div>
                            <div class="col-md-3 ">
                                <div class="card text-center"
                                    style="background: #ffff; border-radius: 0px; padding: 15px; margin: 10px;height:120px;">
                                    <h3
                                        style="font-size: 24px; font-weight: 600; font-family: 'Poppins', sans-serif; color: #393186; margin: 0;">
                                        39.85 Cr+</h3>
                                    <p
                                        style="font-size: 14px; color: #5B5B5B; margin-top: 10px; font-family: Arial; text-align: center;">
                                        Amount collected from Donors
                                    </p>
                                </div>
                            </div>

                        </div>

                    </div>
                    <!-- Image -->
                    <div class="about-img-container col-md-5" style="">
                        {{-- <div
                            style="background-color: #FFD800; width: 80%; height: 100%; position: absolute; top: -20px; right: 15px; z-index: 1; border-radius: 10px;">
                        </div> --}}


                        <img src="{{ asset('website/images/trophy22.png') }}" alt="About Us Image"
                            style="width: 80%; border-radius: 10px; position: relative; z-index: 2; display: block; margin: auto; transform: translateX(10px);margin-bottom:-9.5px;">

                    </div>
                </div>



            </div>
        </section>




        {{-- Photo Gallery Section --}}
        <section style="padding:80px 0; background: #fff;">

            <div class="container">

                <div class="text-start mb-5">

                    <div style="display: flex; align-items: center; flex-direction: row; gap: 15px;">

                        <div style="width: 3px; height: 40px; background-color: #E31E25;"></div>

                        <h2
                            style="font-size: 36px; font-weight: bold; font-family: 'Times New Roman', Times, serif; margin: 0;">

                            <span style="color: #FFD800;">Photo</span> <span style="color: #393186;">Gallery</span>

                        </h2>

                    </div>

                </div>

                <div class="gallery-slider-container" style="overflow: hidden; position: relative; width: 100%;">

                    <div class="gallery-slider"
                        style="display: flex; animation: slide 20s linear infinite; gap: 20px; padding: 0 15px;">

                        <img src="{{ asset('website/images/gallery_img_1.png') }}" class="gallery-img"
                            style="flex: 1; width:250px;height: 250px; object-fit: cover;" alt="Gallery Image 1">

                        <img src="{{ asset('website/images/gallery_img_2.png') }}" class="gallery-img"
                            style="flex: 1; width:250px;height: 250px; object-fit: cover;" alt="Gallery Image 2">

                        <img src="{{ asset('website/images/gallery_img_3.png') }}" class="gallery-img"
                            style="flex: 1; width:250px;height: 250px; object-fit: cover;" alt="Gallery Image 3">

                        <img src="{{ asset('website/images/gallery_img_4.png') }}" class="gallery-img"
                            style="flex: 1; width:250px;height: 250px; object-fit: cover;" alt="Gallery Image 4">

                        <img src="{{ asset('website/images/gallery_img_5.png') }}" class="gallery-img"
                            style="flex: 1; width:250px;height: 250px; object-fit: cover;" alt="Gallery Image 5">

                        <!-- Duplicate for seamless loop -->

                        <img src="{{ asset('website/images/gallery_img_1.png') }}" class="gallery-img"
                            style="flex: 1; height: 250px; object-fit: cover;" alt="Gallery Image 1">

                        <img src="{{ asset('website/images/gallery_img_2.png') }}" class="gallery-img"
                            style="flex: 1; height: 250px; object-fit: cover;" alt="Gallery Image 2">

                        <img src="{{ asset('website/images/gallery_img_3.png') }}" class="gallery-img"
                            style="flex: 1; height: 250px; object-fit: cover;" alt="Gallery Image 3">

                        <img src="{{ asset('website/images/gallery_img_4.png') }}" class="gallery-img"
                            style="flex: 1; height: 250px; object-fit: cover;" alt="Gallery Image 4">

                        <img src="{{ asset('website/images/gallery_img_5.png') }}" class="gallery-img"
                            style="flex: 1; height: 250px; object-fit: cover;" alt="Gallery Image 5">

                    </div>

                </div>

            </div>

        </section>

        <style>
            @keyframes slide {
                0% {
                    transform: translateX(0);
                }

                100% {
                    transform: translateX(-50%);
                }
            }

            .gallery-img:hover {
                transform: scale(1.1);
                transition: transform 0.3s ease;
            }
        </style>



        <!--========================Section Our Team================================-->

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


                            <h3 style="font-size: 20px; font-weight: bold; color: #5B5B5B; margin-bottom: 5px;">ZONE
                                CONVENOR
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
                            <h3 style="font-size: 20px; font-weight: bold; color: #5B5B5B; margin-bottom: 5px;">JBN
                                CONVENOR
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
                            <h3 style="font-size: 20px; font-weight: bold; color: #5B5B5B; margin-bottom: 5px;">CFE
                                CONVENOR
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
                            <h3 style="font-size: 20px; font-weight: bold; color: #5B5B5B; margin-bottom: 5px;">JITEM
                                CONVENOR
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
                            <h3 style="font-size: 20px; font-weight: bold; color: #5B5B5B; margin-bottom: 5px;">JATF
                                CONVENOR
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
                            <h3 style="font-size: 20px; font-weight: bold; color: #5B5B5B; margin-bottom: 5px;">JIIF
                                CONVENOR
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
                            <h3 style="font-size: 20px; font-weight: bold; color: #5B5B5B; margin-bottom: 5px;">JOBS
                                CONVENOR
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
                            <h3 style="font-size: 20px; font-weight: bold; color: #5B5B5B; margin-bottom: 5px;">JPF
                                CONVENOR
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
                            <h3 style="font-size: 20px; font-weight: bold; color: #5B5B5B; margin-bottom: 5px;">PR
                                CONVENOR
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
                            <h3 style="font-size: 20px; font-weight: bold; color: #5B5B5B; margin-bottom: 5px;">SEVA &
                                MINORITY
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
                            <h3 style="font-size: 20px; font-weight: bold; color: #5B5B5B; margin-bottom: 5px;">SPORTS
                                CONVENOR
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
                            <h3 style="font-size: 20px; font-weight: bold; color: #5B5B5B; margin-bottom: 5px;">TALENT
                                CONVENOR
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
                <a href="http://techmetsolutions.com/#/" target="_blank"
                    style="text-decoration: none; color: black;"><img
                        src="{{ asset('website/images/ie8-panel/TMS-LOGO[1] 2 (1).png') }}"
                        alt="TechMET IT Solutions Logo" style="max-width: 270px !important; margin:30px 30px;" /></a>
            </div>
            <div class="info">
                <p><strong>Website link:</strong> <a href="http://www.techmetsolutions.com"
                        target="_blank">http://www.techmetsolutions.com</a></p>
                <p style="font-family: Arial;font-size:16px"><strong>Follow us for updates on our work, projects,<br> and
                        impact.</strong> </p>
                <div class="social-icon">
                    <a href="https://www.instagram.com/techmet.solutions_?igsh=c291MjkzdWVpbWZ2&utm_source=qr"
                        target="blank" style="text-decoration: none; color: black;">
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
