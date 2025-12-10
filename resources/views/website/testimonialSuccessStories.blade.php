@extends('website.layout.main')

@section('content')
    <style>
        #testimonialContainer {
            display: flex;
            transition: transform 0.5s ease;
            /* overflow: hidden; */
        }

        .testimonial-item {
            flex: 0 0 33.333%;
            box-sizing: border-box;
            transition: transform 0.5s ease;
        }
    </style>

    <style>
        .video-carousel {
            display: flex;
            cursor: grab;
            transition: transform 0.5s ease;
        }

        .video-item {
            flex-shrink: 0;
            margin-right: 20px;
            width: 280px;
            height: 254px;
        }
    </style>
    <section style="padding: 288px 0 80px 0px;background-color: #FFF9E6;max-width:100vw;">
        <div class="container" style="display: flex; flex-direction: column; gap: 30px;    max-width: 90vw;">

            <!-- About Us Section -->
            <div class="text-image-wrapper align-items-center" style="overflow: hidden;background-color: #FFF9E6;">
                <div class="row">
                    <div class="col-12 mt-3 mb-5">

                        <!-- Text -->
                        <div style="flex: 1 1 50%; max-width: 700px;">
                            <div style="display: flex; align-items: center; flex-direction: row; gap: 15px;">
                                <div style="width: 3px; height: 40px; background-color: #E31E25;"></div>
                                <h2
                                    style="font-size: 36px; font-weight: bold; font-family: 'Times New Roman', Times, serif; margin: 0;">
                                    <span style="color: #FFD800;">Our</span> <span
                                        style="color: #393186;">Testimonials</span>
                                </h2>
                            </div>

                        </div>
                    </div>
                    <div class="col-12 my-5">
                        <div class="row">
                            <div class="col-1 d-flex justify-content-center align-items-center"
                                style="background-color: #FFF9E6;z-index:10;">
                                <img src="{{ asset('website/images/leftPointedArrow.png') }}" alt=""
                                    style="width: 45px;height:45px;cursor:pointer;z-index:10;" id="leftArrow">
                            </div>
                            <div class="col-10" style="background-color: #FFF9E6;">
                                <div id="testimonialContainer" class="testimonial-slider">
                                    <div class="testimonial-item d-flex justify-content-center align-items-center">
                                        <div class="row position-relative"
                                            style="background-color:#FFFFFF;border:2px solid #DCDCDC; padding: 15px;width: 80%;">
                                            <div class="col-12 mb-2 d-flex align-items-center justify-content-center">
                                                <div class="testOwner position-absolute"
                                                    style="height:115px;width:115px;border-radius:50%;background-color:#FFFFFF;border:2px solid #DCDCDC;    display: flex;align-items: center;justify-content: center;">
                                                    <img src="{{ asset('website/images/speaker-01-270x303.jpg') }}"
                                                        alt="" class=""
                                                        style="height:105px;width:105px;border-radius:50%;">
                                                </div>
                                            </div>
                                            <div class="col-12 mb-2 mt-5 d-flex align-items-center justify-content-center">
                                                <p>“<span
                                                        style="color:#393186;font-size:15px;font-weight:bold;font-family:Poppins;letter-spacing: 1px;">Life-Changing
                                                        Support</span>”</p>
                                            </div>
                                            <div class="col-12 mb-2">
                                                <p>JEAP’s assistance helped me pursue my education without financial
                                                    stress.</p>
                                            </div>
                                            <div class="col-12 mb-2">
                                                <p
                                                    style="color:#5B5B5B;font-size:15px;font-weight:bold;font-family:Poppins;letter-spacing: 1px;">
                                                    Sanyukta Shah </p>
                                            </div>
                                            <div class="col-12 mb-2">
                                                <p>24 Dec 2024</p>
                                            </div>
                                            <div class="col-12 mb-2 position-absolute" style="bottom: 15px;">
                                                <img src="{{ asset('website/images/endingQuotes.png') }}" alt=""
                                                    style="width:48px;height:36px;position:absolute;right:43px">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="testimonial-item d-flex justify-content-center align-items-center">
                                        <div class="row position-relative"
                                            style="background-color:#FFFFFF;border:2px solid #DCDCDC; padding: 15px;width: 80%;">
                                            <div class="col-12 mb-2 d-flex align-items-center justify-content-center">
                                                <div class="testOwner position-absolute"
                                                    style="height:115px;width:115px;border-radius:50%;background-color:#FFFFFF;border:2px solid #DCDCDC;    display: flex;align-items: center;justify-content: center;">
                                                    <img src="{{ asset('website/images/speaker-01-270x303.jpg') }}"
                                                        alt="" class=""
                                                        style="height:105px;width:105px;border-radius:50%;">
                                                </div>
                                            </div>
                                            <div class="col-12 mb-2 mt-5 d-flex align-items-center justify-content-center">
                                                <p>“<span
                                                        style="color:#393186;font-size:15px;font-weight:bold;font-family:Poppins;letter-spacing: 1px;">Life-Changing
                                                        Support</span>”</p>
                                            </div>
                                            <div class="col-12 mb-2">
                                                <p>Another great experience with JEAP.</p>
                                            </div>
                                            <div class="col-12 mb-2">
                                                <p
                                                    style="color:#5B5B5B;font-size:15px;font-weight:bold;font-family:Poppins;letter-spacing: 1px;">
                                                    John Doe </p>
                                            </div>
                                            <div class="col-12 mb-2">
                                                <p>25 Dec 2024</p>
                                            </div>
                                            <div class="col-12 mb-2 position-absolute" style="bottom: 15px;">
                                                <img src="{{ asset('website/images/endingQuotes.png') }}" alt=""
                                                    style="width:48px;height:36px;position:absolute;right:43px">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="testimonial-item d-flex justify-content-center align-items-center">
                                        <div class="row position-relative"
                                            style="background-color:#FFFFFF;border:2px solid #DCDCDC; padding: 15px;width: 80%;">
                                            <div class="col-12 mb-2 d-flex align-items-center justify-content-center">
                                                <div class="testOwner position-absolute"
                                                    style="height:115px;width:115px;border-radius:50%;background-color:#FFFFFF;border:2px solid #DCDCDC;    display: flex;align-items: center;justify-content: center;">
                                                    <img src="{{ asset('website/images/speaker-01-270x303.jpg') }}"
                                                        alt="" class=""
                                                        style="height:105px;width:105px;border-radius:50%;">
                                                </div>
                                            </div>
                                            <div class="col-12 mb-2 mt-5 d-flex align-items-center justify-content-center">
                                                <p>“<span
                                                        style="color:#393186;font-size:15px;font-weight:bold;font-family:Poppins;letter-spacing: 1px;">Excellent
                                                        Service</span>”</p>
                                            </div>
                                            <div class="col-12 mb-2">
                                                <p>Highly satisfied with the support provided.</p>
                                            </div>
                                            <div class="col-12 mb-2">
                                                <p
                                                    style="color:#5B5B5B;font-size:15px;font-weight:bold;font-family:Poppins;letter-spacing: 1px;">
                                                    Jane Smith </p>
                                            </div>
                                            <div class="col-12 mb-2">
                                                <p>26 Dec 2024</p>
                                            </div>
                                            <div class="col-12 mb-2 position-absolute" style="bottom: 15px;">
                                                <img src="{{ asset('website/images/endingQuotes.png') }}" alt=""
                                                    style="width:48px;height:36px;position:absolute;right:43px">
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Duplicate for cycling -->
                                    <div class="testimonial-item d-flex justify-content-center align-items-center">
                                        <div class="row position-relative"
                                            style="background-color:#FFFFFF;border:2px solid #DCDCDC; padding: 15px;width: 80%;">
                                            <div class="col-12 mb-2 d-flex align-items-center justify-content-center">
                                                <div class="testOwner position-absolute"
                                                    style="height:115px;width:115px;border-radius:50%;background-color:#FFFFFF;border:2px solid #DCDCDC;    display: flex;align-items: center;justify-content: center;">
                                                    <img src="{{ asset('website/images/speaker-01-270x303.jpg') }}"
                                                        alt="" class=""
                                                        style="height:105px;width:105px;border-radius:50%;">
                                                </div>
                                            </div>
                                            <div class="col-12 mb-2 mt-5 d-flex align-items-center justify-content-center">
                                                <p>“<span
                                                        style="color:#393186;font-size:15px;font-weight:bold;font-family:Poppins;letter-spacing: 1px;">Life-Changing
                                                        Support</span>”</p>
                                            </div>
                                            <div class="col-12 mb-2">
                                                <p>JEAP’s assistance helped me pursue my education without financial
                                                    stress.</p>
                                            </div>
                                            <div class="col-12 mb-2">
                                                <p
                                                    style="color:#5B5B5B;font-size:15px;font-weight:bold;font-family:Poppins;letter-spacing: 1px;">
                                                    Sanyukta Shah </p>
                                            </div>
                                            <div class="col-12 mb-2">
                                                <p>24 Dec 2024</p>
                                            </div>
                                            <div class="col-12 mb-2 position-absolute" style="bottom: 15px;">
                                                <img src="{{ asset('website/images/endingQuotes.png') }}" alt=""
                                                    style="width:48px;height:36px;position:absolute;right:43px">
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Additional testimonials for longer slider -->
                                    <div class="testimonial-item d-flex justify-content-center align-items-center">
                                        <div class="row position-relative"
                                            style="background-color:#FFFFFF;border:2px solid #DCDCDC; padding: 15px;width: 80%;">
                                            <div class="col-12 mb-2 d-flex align-items-center justify-content-center">
                                                <div class="testOwner position-absolute"
                                                    style="height:115px;width:115px;border-radius:50%;background-color:#FFFFFF;border:2px solid #DCDCDC;    display: flex;align-items: center;justify-content: center;">
                                                    <img src="{{ asset('website/images/speaker-01-270x303.jpg') }}"
                                                        alt="" class=""
                                                        style="height:105px;width:105px;border-radius:50%;">
                                                </div>
                                            </div>
                                            <div class="col-12 mb-2 mt-5 d-flex align-items-center justify-content-center">
                                                <p>“<span
                                                        style="color:#393186;font-size:15px;font-weight:bold;font-family:Poppins;letter-spacing: 1px;">Great
                                                        Opportunity</span>”</p>
                                            </div>
                                            <div class="col-12 mb-2">
                                                <p>JEAP opened doors for my career growth.</p>
                                            </div>
                                            <div class="col-12 mb-2">
                                                <p
                                                    style="color:#5B5B5B;font-size:15px;font-weight:bold;font-family:Poppins;letter-spacing: 1px;">
                                                    Alex Johnson </p>
                                            </div>
                                            <div class="col-12 mb-2">
                                                <p>27 Dec 2024</p>
                                            </div>
                                            <div class="col-12 mb-2 position-absolute" style="bottom: 15px;">
                                                <img src="{{ asset('website/images/endingQuotes.png') }}" alt=""
                                                    style="width:48px;height:36px;position:absolute;right:43px">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="testimonial-item d-flex justify-content-center align-items-center">
                                        <div class="row position-relative"
                                            style="background-color:#FFFFFF;border:2px solid #DCDCDC; padding: 15px;width: 80%;">
                                            <div class="col-12 mb-2 d-flex align-items-center justify-content-center">
                                                <div class="testOwner position-absolute"
                                                    style="height:115px;width:115px;border-radius:50%;background-color:#FFFFFF;border:2px solid #DCDCDC;    display: flex;align-items: center;justify-content: center;">
                                                    <img src="{{ asset('website/images/speaker-01-270x303.jpg') }}"
                                                        alt="" class=""
                                                        style="height:105px;width:105px;border-radius:50%;">
                                                </div>
                                            </div>
                                            <div class="col-12 mb-2 mt-5 d-flex align-items-center justify-content-center">
                                                <p>“<span
                                                        style="color:#393186;font-size:15px;font-weight:bold;font-family:Poppins;letter-spacing: 1px;">Supportive
                                                        Community</span>”</p>
                                            </div>
                                            <div class="col-12 mb-2">
                                                <p>JEAP’s network is invaluable for businessmen.</p>
                                            </div>
                                            <div class="col-12 mb-2">
                                                <p
                                                    style="color:#5B5B5B;font-size:15px;font-weight:bold;font-family:Poppins;letter-spacing: 1px;">
                                                    Michael Lee </p>
                                            </div>
                                            <div class="col-12 mb-2">
                                                <p>28 Dec 2024</p>
                                            </div>
                                            <div class="col-12 mb-2 position-absolute" style="bottom: 15px;">
                                                <img src="{{ asset('website/images/endingQuotes.png') }}" alt=""
                                                    style="width:48px;height:36px;position:absolute;right:43px">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="testimonial-item d-flex justify-content-center align-items-center">
                                        <div class="row position-relative"
                                            style="background-color:#FFFFFF;border:2px solid #DCDCDC; padding: 15px;width: 80%;">
                                            <div class="col-12 mb-2 d-flex align-items-center justify-content-center">
                                                <div class="testOwner position-absolute"
                                                    style="height:115px;width:115px;border-radius:50%;background-color:#FFFFFF;border:2px solid #DCDCDC;    display: flex;align-items: center;justify-content: center;">
                                                    <img src="{{ asset('website/images/speaker-01-270x303.jpg') }}"
                                                        alt="" class=""
                                                        style="height:105px;width:105px;border-radius:50%;">
                                                </div>
                                            </div>
                                            <div class="col-12 mb-2 mt-5 d-flex align-items-center justify-content-center">
                                                <p>“<span
                                                        style="color:#393186;font-size:15px;font-weight:bold;font-family:Poppins;letter-spacing: 1px;">Inspiring
                                                        Growth</span>”</p>
                                            </div>
                                            <div class="col-12 mb-2">
                                                <p>JEAP inspires continuous professional development.</p>
                                            </div>
                                            <div class="col-12 mb-2">
                                                <p
                                                    style="color:#5B5B5B;font-size:15px;font-weight:bold;font-family:Poppins;letter-spacing: 1px;">
                                                    Priya Patel </p>
                                            </div>
                                            <div class="col-12 mb-2">
                                                <p>29 Dec 2024</p>
                                            </div>
                                            <div class="col-12 mb-2 position-absolute" style="bottom: 15px;">
                                                <img src="{{ asset('website/images/endingQuotes.png') }}" alt=""
                                                    style="width:48px;height:36px;position:absolute;right:43px">
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                            <div class="col-1 d-flex justify-content-center align-items-center"
                                style="background-color: #FFF9E6;z-index:10;">
                                <img src="{{ asset('website/images/rightPointedArrow.png') }}" alt=""
                                    style="width: 45px;height:45px;cursor:pointer;z-index:10;" id="rightArrow">
                            </div>
                        </div>
                    </div>
                </div>



            </div>

        </div>
    </section>

    <section style="padding: 80px 0; background: #FFF;">
        <div class="container" style="max-width: 1400px;">
            <div class="text-image-wrapper align-items-center" style="overflow: hidden;">
                <div class="row">
                    <div class="col-12 mb-5">
                        <div style="display: flex; align-items: center; flex-direction: row; gap: 15px;">
                            <div style="width: 3px; height: 40px; background-color: #E31E25;"></div>
                            <h2
                                style="font-size: 36px; font-weight: bold; font-family: 'Times New Roman', Times, serif; margin: 0;">
                                <span style="color: #FFD800;">SUCCESS</span> <span style="color: #393186;">STORIES</span>
                            </h2>
                        </div>
                    </div>
                    <div class="col-12">
                        <div id="videoCarousel" class="video-carousel">
                            <div class="video-item">
                                <div class="p-3" style="width:280px;height:254px;border:1px solid #ccc;">
                                    <div class="col-12" style="display:flex;align-items:center;justify-content:center;">
                                        <a href="https://www.youtube.com/watch?v=video1" target="_blank"
                                            style="text-decoration:none;color:#393186;">

                                            <div class="col-12 thumbnail"
                                                style="width:240px;height:130px;border:1px solid #ccc;display:flex;align-items:center;justify-content:center;background:url('{{ asset('website/images/speaker-05-270x303.jpg') }}')  center center /cover no-repeat;">
                                                <img src="{{ asset('website/images/youtubePlayButton.png') }}"
                                                    alt="" style="width:52px;height:auto;">
                                            </div>

                                        </a>
                                    </div>
                                    <div class="row">

                                        <div class="col-6" style="background-color: #393186;">
                                            <a href="https://www.youtube.com/watch?v=video1" target="_blank">
                                                <p style="color:white;">Watch on Youtube</p>
                                            </a>
                                        </div>
                                        <div class="col-3">
                                            <p>Watch Later</p>
                                        </div>
                                        <div class="col-3">
                                            <p>share</p>

                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const container = document.getElementById('testimonialContainer');
            const items = container.querySelectorAll('.testimonial-item');
            const totalItems = items.length; // 7
            const visibleItems = 3;
            const maxIndex = totalItems - visibleItems; // 4
            let currentIndex = 0;

            document.getElementById('rightArrow').addEventListener('click', function() {
                currentIndex++;
                if (currentIndex >= maxIndex) {
                    setTimeout(function() {
                        container.style.transition = 'none';
                        currentIndex = 0;
                        updateTransform();
                        setTimeout(function() {
                            container.style.transition = 'transform 0.5s ease';
                        }, 50);
                    }, 250);
                } else {
                    updateTransform();
                }
            });

            document.getElementById('leftArrow').addEventListener('click', function() {
                currentIndex--;
                if (currentIndex < 0) {
                    setTimeout(function() {
                        container.style.transition = 'none';
                        currentIndex = maxIndex - 1;
                        updateTransform();
                        setTimeout(function() {
                            container.style.transition = 'transform 0.5s ease';
                        }, 50);
                    }, 250 casc);
                } else {
                    updateTransform();
                }
            });

            function updateTransform() {
                const transformValue = -(currentIndex * (100 / visibleItems)) + '%';
                container.style.transform = 'translateX(' + transformValue + ')';
                // Scale the middle testimonial
                items.forEach((item, i) => {
                    if (i === currentIndex + 1) {
                        item.style.transform = 'scale(1.1)';
                    } else {
                        item.style.transform = 'scale(1)';
                    }
                });
            }
        });
    </script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const container = document.getElementById('testimonialContainer');
            const items = container.querySelectorAll('.testimonial-item');
            const totalItems = items.length;
            const visibleItems = 3;
            let currentIndex = 0;

            document.getElementById('rightArrow').addEventListener('click', function() {
                currentIndex = (currentIndex + 1) % (totalItems - visibleItems + 1);
                updateTransform();
            });

            document.getElementById('leftArrow').addEventListener('click', function() {
                currentIndex = (currentIndex - 1 + (totalItems - visibleItems + 1)) % (totalItems -
                    visibleItems + 1);
                updateTransform();
            });

            function updateTransform() {
                const transformValue = -(currentIndex * (100 / visibleItems)) + '%';
                container.style.transform = 'translateX(' + transformValue + ')';
            }
        });
    </script>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const carousel = document.getElementById('videoCarousel');
            let isDown = false;
            let startX;
            let transformAmount = 0;

            carousel.addEventListener('mousedown', (e) => {
                isDown = true;
                startX = e.clientX - transformAmount;
                carousel.style.cursor = 'grabbing';
            });

            carousel.addEventListener('mouseleave', () => {
                isDown = false;
                carousel.style.cursor = 'grab';
            });

            carousel.addEventListener('mouseup', () => {
                isDown = false;
                carousel.style.cursor = 'grab';
            });

            carousel.addEventListener('mousemove', (e) => {
                if (!isDown) return;
                e.preventDefault();
                const x = e.clientX;
                transformAmount = x - startX;
                // Limit drag: min - (totalWidth - visible) * .3 or something, but for simplicity, free
                carousel.style.transform = `translateX(${transformAmount}px)`;
            });
        });
    </script>
@endsection
