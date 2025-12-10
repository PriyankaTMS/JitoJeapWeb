@extends('website.layout.main')
@section('content')
    <!-- Breadcrumbs-->
    {{-- <section class="breadcrumbs-custom bg-image context-dark"
        style="background-image: url({{ asset('website/images/event.png') }});background-repeat: no-repeat; display: flex; justify-content: center; align-items: center;">
        <div class="container" style="display: flex; justify-content: center; align-items: center;">
            <img src="{{ asset('website/images/bninmd.png') }}" alt="BNI Logo" style="display: flex;">
        </div>
    </section> --}}
    <!--Base typography-->
    {{-- <section class="section section-lg bg-default" style="margin-top:150px">
        <div class="container">
            <div class="row row-50">
                <div class="col-xl-12">
                    <ul class="list-xl">
                        <li style="margin-bottom: 0;">
                            <h4
                                style="font-size: 25px; width: auto; font-family: Times New Roman; color: #1f1f1f; margin-left: 10px; display: inline-flex; align-items: center; margin-bottom: 5px;">
                                <span
                                    style="display: inline-flex; justify-content: center; align-items: center; width: 40px; height: 40px; border: 1px solid black; border-radius: 50%; text-align: center; margin-right: 10px;">
                                    <a href="{{ route('index') }}"><i class="fa fa-arrow-left"
                                            style="font-size: 20px; color: black;"></i></a>
                                </span>
                                Event Agenda
                            </h4>
                        </li>
                    </ul>
                </div>

            </div>
        </div>
    </section> --}}
    <style>
        @media (min-width: 768px) {
            .reset-desktop-margin {
                margin-top: 300px
            }
        }

        .custom-margin {
            margin-top: -75px;
        }

        @media (max-width: 767px) {
            .custom-margin {
                margin-top: 0;
            }
        }
    </style>
    <section class="section reset-desktop-margin">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    {{-- <ul class="list-xl">
                        <li> --}}

                    <h2 style="font-size: 36px; font-weight: bold; font-family: 'Times New Roman', Times, serif; margin: 0;">
                        <a href="{{ route('index') }}"><i class='fas fa-angle-left'
                                style='font-size:43px;color:#E31E25'></i></a>
                        <span style="color: #FFD800;">EVENT</span> <span style="color: #393186;">Agenda</span>

                    </h2>
                    {{-- </li>
                    </ul> --}}
                </div>
            </div>
        </div>
    </section>
    <!--========================Section Conference Schedule=============================-->
    <section class="section section-lg bg-default text-center custom-margin">
        <div class="container">

            <div class="tabs-custom tabs-horizontal tabs-corporate" id="tabs-1">
                <!--Nav tabs-->
                <ul class="nav nav-tabs" style="font-family:Times New Roman">
                    <li class="nav-item" role="presentation">
                        <div class="nav-link nav-link nav-link-secondary-darker"
                            style="background-color: #393186; color:white; font-size: 30px;" href="#tabs-1-1"
                            data-toggle="tab" data-triangle=".nav-link-overlay"><span class="nav-link-overlay"></span>
                            <span class="nav-link-title">Task</span>
                        </div>
                    </li>

                    <li class="nav-item" role="presentation">
                        <div class="nav-link nav-link nav-link-secondary-darker"
                            style="background-color: #393186;color:white;font-size: 30px;" href="#tabs-1-2"
                            data-toggle="tab" data-triangle=".nav-link-overlay"><span class="nav-link-overlay"></span>
                            <span class="nav-link-title">Details</span>
                        </div>
                    </li>

                    {{-- <li class="nav-item" role="presentation"><a class="nav-link nav-link nav-link-secondary-darker" href="#tabs-1-3"
                            data-toggle="tab" data-triangle=".nav-link-overlay"><span class="nav-link-overlay"></span>

                            <span class="nav-link-title">Evening</span></a></li> --}}
                </ul>
                <!--Tab panes-->
                {{-- 1ST PART --}}
                <div>
                    <div>
                        <div class="card-group-custom card-group-corporate" id="accordion1" role="tablist"
                            aria-multiselectable="false">
                            <!--Bootstrap card-1-->
                            <article class="card card-custom card-corporate">
                                <div class="card-header" role="tab">
                                    <div class="card-title row">
                                        <div class="collapsed col-lg-6" id="accordion1-card-head-hxapwahb"
                                            data-toggle="collapse" data-parent="#accordion1"
                                            href="#accordion1-card-body-onwkttkd"
                                            aria-controls="accordion1-card-body-onwkttkd" aria-expanded="false"
                                            role="button">
                                            <span class="schedule-classic"><span
                                                    class="unit unit-spacing-md align-items-center d-block d-md-flex"><span
                                                        class="unit-left"><span class="schedule-classic-img"><img
                                                                src="{{ asset('website/images/event1.png') }}"
                                                                alt="" width="122"
                                                                height="122" /></span></span><span class="unit-body"><span
                                                            class="schedule-classic-content">

                                                            <span class="schedule-classic-title heading-4"
                                                                style="font-family:Arial;font-size: 28px;">Club
                                                                Registrations Open</span>
                                                        </span></span></span></span>
                                        </div>
                                        <div class="collapsed col-lg-6" id="accordion1-card-head-hxapwahb"
                                            data-toggle="collapse" data-parent="#accordion1"
                                            href="#accordion1-card-body-onwkttkd"
                                            aria-controls="accordion1-card-body-onwkttkd" aria-expanded="false"
                                            role="button">
                                            <span class="schedule-classic"><span class=""><span
                                                        class="unit-left"><span
                                                            class="schedule-classic-img"></span></span><span
                                                        class="unit-body"><span class="schedule-classic-content">

                                                            <span class="schedule-classic-title heading-4"
                                                                style="font-family:Arial;font-size: 25px;">First-come,
                                                                first-served. Early bird for first 5 clubs (per member count
                                                                criteria)</span>
                                                        </span></span></span></span>
                                        </div>
                                    </div>
                                </div>
                            </article>
                            <!--Bootstrap card-2-->
                            <article class="card card-custom card-corporate">
                                <div class="card-header" role="tab">
                                    <div class="card-title row">
                                        <div class="collapsed col-lg-6" id="accordion1-card-head-hxapwahb"
                                            data-toggle="collapse" data-parent="#accordion1"
                                            href="#accordion1-card-body-onwkttkd"
                                            aria-controls="accordion1-card-body-onwkttkd" aria-expanded="false"
                                            role="button">
                                            <span class="schedule-classic"><span
                                                    class="unit unit-spacing-md align-items-center d-block d-md-flex"><span
                                                        class="unit-left"><span class="schedule-classic-img"><img
                                                                src="{{ asset('website/images/event2.png') }}"
                                                                alt="" width="122"
                                                                height="122" /></span></span><span class="unit-body"><span
                                                            class="schedule-classic-content">

                                                            <span class="schedule-classic-title heading-4"
                                                                style="font-family:Arial;font-size: 28px;">Player
                                                                Registration (Expression of Interest)</span>
                                                        </span></span></span></span>
                                        </div>
                                        <div class="collapsed col-lg-6" id="accordion1-card-head-hxapwahb"
                                            data-toggle="collapse" data-parent="#accordion1"
                                            href="#accordion1-card-body-onwkttkd"
                                            aria-controls="accordion1-card-body-onwkttkd" aria-expanded="false"
                                            role="button">
                                            <span class="schedule-classic"><span class=""><span
                                                        class="unit-left"><span
                                                            class="schedule-classic-img"></span></span><span
                                                        class="unit-body"><span class="schedule-classic-content">

                                                            <span class="schedule-classic-title heading-4"
                                                                style="font-family:Arial;font-size: 25px;">Players register
                                                                via portal with sport preferences</span>
                                                        </span></span></span></span>
                                        </div>
                                    </div>
                                </div>
                            </article>
                            <!--Bootstrap card-3-->
                            <article class="card card-custom card-corporate">
                                <div class="card-header" role="tab">
                                    <div class="card-title row">
                                        <div class="collapsed col-lg-6" id="accordion1-card-head-hxapwahb"
                                            data-toggle="collapse" data-parent="#accordion1"
                                            href="#accordion1-card-body-onwkttkd"
                                            aria-controls="accordion1-card-body-onwkttkd" aria-expanded="false"
                                            role="button">
                                            <span class="schedule-classic"><span
                                                    class="unit unit-spacing-md align-items-center d-block d-md-flex"><span
                                                        class="unit-left"><span class="schedule-classic-img"><img
                                                                src="{{ asset('website/images/event3.png') }}"
                                                                alt="" width="122"
                                                                height="122" /></span></span><span
                                                        class="unit-body"><span class="schedule-classic-content">

                                                            <span class="schedule-classic-title heading-4"
                                                                style="font-family:Arial;font-size: 28px;">Club Formation
                                                                by Chapter</span>
                                                        </span></span></span></span>
                                        </div>
                                        <div class="collapsed col-lg-6" id="accordion1-card-head-hxapwahb"
                                            data-toggle="collapse" data-parent="#accordion1"
                                            href="#accordion1-card-body-onwkttkd"
                                            aria-controls="accordion1-card-body-onwkttkd" aria-expanded="false"
                                            role="button">
                                            <span class="schedule-classic"><span class=""><span
                                                        class="unit-left"><span
                                                            class="schedule-classic-img"></span></span><span
                                                        class="unit-body"><span class="schedule-classic-content">

                                                            <span class="schedule-classic-title heading-4"
                                                                style="font-family:Arial;font-size: 25px;">Use login to
                                                                select final club team from registered players.</span>
                                                        </span></span></span></span>
                                        </div>
                                    </div>
                                </div>
                            </article>
                            <!-- Schedule Simple-4-->
                            <article class="card card-custom card-corporate">
                                <div class="card-header" role="tab">
                                    <div class="card-title row">
                                        <div class="collapsed col-lg-6" id="accordion1-card-head-hxapwahb"
                                            data-toggle="collapse" data-parent="#accordion1"
                                            href="#accordion1-card-body-onwkttkd"
                                            aria-controls="accordion1-card-body-onwkttkd" aria-expanded="false"
                                            role="button">
                                            <span class="schedule-classic"><span
                                                    class="unit unit-spacing-md align-items-center d-block d-md-flex"><span
                                                        class="unit-left"><span class="schedule-classic-img"><img
                                                                src="{{ asset('website/images/event4.png') }}"
                                                                alt="" width="122"
                                                                height="122" /></span></span><span
                                                        class="unit-body"><span class="schedule-classic-content">

                                                            <span class="schedule-classic-title heading-4"
                                                                style="font-family:Arial;font-size: 28px;">Editing
                                                                Period</span>
                                                        </span></span></span></span>
                                        </div>
                                        <div class="collapsed col-lg-6" id="accordion1-card-head-hxapwahb"
                                            data-toggle="collapse" data-parent="#accordion1"
                                            href="#accordion1-card-body-onwkttkd"
                                            aria-controls="accordion1-card-body-onwkttkd" aria-expanded="false"
                                            role="button">
                                            <span class="schedule-classic"><span class=""><span
                                                        class="unit-left"><span
                                                            class="schedule-classic-img"></span></span><span
                                                        class="unit-body"><span class="schedule-classic-content">

                                                            <span class="schedule-classic-title heading-4"
                                                                style="font-family:Arial;font-size: 25px;">Player/chapter
                                                                details can be edited within this window.</span>
                                                        </span></span></span></span>
                                        </div>
                                    </div>
                                </div>
                            </article>
                            <!--Bootstrap card-5-->
                            <article class="card card-custom card-corporate">
                                <div class="card-header" role="tab">
                                    <div class="card-title row">
                                        <div class="collapsed col-lg-6" id="accordion1-card-head-hxapwahb"
                                            data-toggle="collapse" data-parent="#accordion1"
                                            href="#accordion1-card-body-onwkttkd"
                                            aria-controls="accordion1-card-body-onwkttkd" aria-expanded="false"
                                            role="button">
                                            <span class="schedule-classic"><span
                                                    class="unit unit-spacing-md align-items-center d-block d-md-flex"><span
                                                        class="unit-left"><span class="schedule-classic-img"><img
                                                                src="{{ asset('website/images/event5.png') }}"
                                                                alt="" width="122"
                                                                height="122" /></span></span><span
                                                        class="unit-body"><span class="schedule-classic-content">

                                                            <span class="schedule-classic-title heading-4"
                                                                style="font-family:Arial;font-size: 28px;">Final Club
                                                                Confirmation & Fee Payment</span>
                                                        </span></span></span></span>
                                        </div>
                                        <div class="collapsed col-lg-6" id="accordion1-card-head-hxapwahb"
                                            data-toggle="collapse" data-parent="#accordion1"
                                            href="#accordion1-card-body-onwkttkd"
                                            aria-controls="accordion1-card-body-onwkttkd" aria-expanded="false"
                                            role="button">
                                            <span class="schedule-classic"><span class=""><span
                                                        class="unit-left"><span
                                                            class="schedule-classic-img"></span></span><span
                                                        class="unit-body"><span class="schedule-classic-content">

                                                            <span class="schedule-classic-title heading-4"
                                                                style="font-family:Arial font-size: 25px;"></span>
                                                        </span></span></span></span>
                                        </div>
                                    </div>
                                </div>
                            </article>

                            <!--Bootstrap card-6-->
                            <article class="card card-custom card-corporate">
                                <div class="card-header" role="tab">
                                    <div class="card-title row">
                                        <div class="collapsed col-lg-6" id="accordion1-card-head-hxapwahb"
                                            data-toggle="collapse" data-parent="#accordion1"
                                            href="#accordion1-card-body-onwkttkd"
                                            aria-controls="accordion1-card-body-onwkttkd" aria-expanded="false"
                                            role="button">
                                            <span class="schedule-classic"><span
                                                    class="unit unit-spacing-md align-items-center d-block d-md-flex"><span
                                                        class="unit-left"><span class="schedule-classic-img"><img
                                                                src="{{ asset('website/images/event6.png') }}"
                                                                alt="" width="122"
                                                                height="122" /></span></span><span
                                                        class="unit-body"><span class="schedule-classic-content">

                                                            <span class="schedule-classic-title heading-4"
                                                                style="font-family:Arial;font-size: 28px;">Final Roster
                                                                Submission</span>
                                                        </span></span></span></span>
                                        </div>
                                        <div class="collapsed col-lg-6" id="accordion1-card-head-hxapwahb"
                                            data-toggle="collapse" data-parent="#accordion1"
                                            href="#accordion1-card-body-onwkttkd"
                                            aria-controls="accordion1-card-body-onwkttkd" aria-expanded="false"
                                            role="button">
                                            <span class="schedule-classic"><span class=""><span
                                                        class="unit-left"><span
                                                            class="schedule-classic-img"></span></span><span
                                                        class="unit-body"><span class="schedule-classic-content">

                                                            <span class="schedule-classic-title heading-4"
                                                                style="font-family:Arial;font-size: 25px;"></span>
                                                        </span></span></span></span>
                                        </div>
                                    </div>
                                </div>
                            </article>


                            <article class="card card-custom card-corporate">
                                <div class="card-header" role="tab">
                                    <div class="card-title row">
                                        <div class="collapsed col-lg-6" id="accordion1-card-head-hxapwahb"
                                            data-toggle="collapse" data-parent="#accordion1"
                                            href="#accordion1-card-body-onwkttkd"
                                            aria-controls="accordion1-card-body-onwkttkd" aria-expanded="false"
                                            role="button">
                                            <span class="schedule-classic"><span
                                                    class="unit unit-spacing-md align-items-center d-block d-md-flex"><span
                                                        class="unit-left"><span class="schedule-classic-img"><img
                                                                src="{{ asset('website/images/event7.png') }}"
                                                                alt="" width="122"
                                                                height="122" /></span></span><span
                                                        class="unit-body"><span class="schedule-classic-content">

                                                            <span class="schedule-classic-title heading-4"
                                                                style="font-family:Arial;font-size: 28px;">Final Roster
                                                                Submission</span>
                                                        </span></span></span></span>
                                        </div>
                                        <div class="collapsed col-lg-6" id="accordion1-card-head-hxapwahb"
                                            data-toggle="collapse" data-parent="#accordion1"
                                            href="#accordion1-card-body-onwkttkd"
                                            aria-controls="accordion1-card-body-onwkttkd" aria-expanded="false"
                                            role="button">
                                            <span class="schedule-classic"><span class=""><span
                                                        class="unit-left"><span
                                                            class="schedule-classic-img"></span></span><span
                                                        class="unit-body"><span class="schedule-classic-content">

                                                            <span class="schedule-classic-title heading-4"
                                                                style="font-family:Arial;font-size: 25px;">Sports
                                                                participation details for each player.</span>
                                                        </span></span></span></span>
                                        </div>
                                    </div>
                                </div>
                            </article>



                            <article class="card card-custom card-corporate">
                                <div class="card-header" role="tab">
                                    <div class="card-title row">
                                        <div class="collapsed col-lg-6" id="accordion1-card-head-hxapwahb"
                                            data-toggle="collapse" data-parent="#accordion1"
                                            href="#accordion1-card-body-onwkttkd"
                                            aria-controls="accordion1-card-body-onwkttkd" aria-expanded="false"
                                            role="button">
                                            <span class="schedule-classic"><span
                                                    class="unit unit-spacing-md align-items-center d-block d-md-flex"><span
                                                        class="unit-left"><span class="schedule-classic-img"><img
                                                                src="{{ asset('website/images/event8.png') }}"
                                                                alt="" width="122"
                                                                height="122" /></span></span><span
                                                        class="unit-body"><span class="schedule-classic-content">

                                                            <span class="schedule-classic-title heading-4"
                                                                style="font-family:Arial;font-size: 28px;">Travel & Stay
                                                                Planning</span>
                                                        </span></span></span></span>
                                        </div>
                                        <div class="collapsed col-lg-6" id="accordion1-card-head-hxapwahb"
                                            data-toggle="collapse" data-parent="#accordion1"
                                            href="#accordion1-card-body-onwkttkd"
                                            aria-controls="accordion1-card-body-onwkttkd" aria-expanded="false"
                                            role="button">
                                            <span class="schedule-classic"><span class=""><span
                                                        class="unit-left"><span
                                                            class="schedule-classic-img"></span></span><span
                                                        class="unit-body"><span class="schedule-classic-content">

                                                            <span class="schedule-classic-title heading-4"
                                                                style="font-family:Arial;font-size: 25px;">Bookings for
                                                                travel & accommodation</span>
                                                        </span></span></span></span>
                                        </div>
                                    </div>
                                </div>
                            </article>


                            <article class="card card-custom card-corporate">
                                <div class="card-header" role="tab">
                                    <div class="card-title row">
                                        <div class="collapsed col-lg-6" id="accordion1-card-head-hxapwahb"
                                            data-toggle="collapse" data-parent="#accordion1"
                                            href="#accordion1-card-body-onwkttkd"
                                            aria-controls="accordion1-card-body-onwkttkd" aria-expanded="false"
                                            role="button">
                                            <span class="schedule-classic"><span
                                                    class="unit unit-spacing-md align-items-center d-block d-md-flex"><span
                                                        class="unit-left"><span class="schedule-classic-img"><img
                                                                src="{{ asset('website/images/event9.png') }}"
                                                                alt="" width="122"
                                                                height="122" /></span></span><span
                                                        class="unit-body"><span class="schedule-classic-content">

                                                            <span class="schedule-classic-title heading-4"
                                                                style="font-family:Arial;font-size: 28px;">Packing &
                                                                Readiness Check</span>
                                                        </span></span></span></span>
                                        </div>
                                        <div class="collapsed col-lg-6" id="accordion1-card-head-hxapwahb"
                                            data-toggle="collapse" data-parent="#accordion1"
                                            href="#accordion1-card-body-onwkttkd"
                                            aria-controls="accordion1-card-body-onwkttkd" aria-expanded="false"
                                            role="button">
                                            <span class="schedule-classic"><span class=""><span
                                                        class="unit-left"><span
                                                            class="schedule-classic-img"></span></span><span
                                                        class="unit-body"><span class="schedule-classic-content">

                                                            <span class="schedule-classic-title heading-4"
                                                                style="font-family:Arial;font-size: 25px;"></span>
                                                        </span></span></span></span>
                                        </div>
                                    </div>
                                </div>
                            </article>

                        </div>



                    </div>
                    {{-- 2ND PART --}}
                    <div class="tab-pane fade">
                        {{-- <div class="card-group-custom card-group-corporate" id="accordion2" role="tablist"
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

                        </div> --}}
                    </div>
                    {{-- 3RD PART --}}
                    {{-- <div class="tab-pane fade" id="tabs-1-3">
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
                            <!--Bootstrap card1-->


                        </div>
                    </div> --}}
                </div>
            </div>
        </div>
    </section>
@endsection
