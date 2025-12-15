@extends('website.layout.main')

@section('content')
<section style="padding: 288px 80px 80px 80px; background: #ffffff; color: #000000; font-family: 'Poppins', sans-serif;">
    <div class="container" style="max-width: 1400px; margin: 0 auto;">

        <!-- Header -->
        <div style="display: flex; align-items: center; flex-direction: row; gap: 15px; margin-bottom: 30px;">
            <div style="width: 3px; height: 40px; background-color: #E31E25;"></div>
            <h2 style="font-size: 36px; font-weight: bold; font-family: 'Times New Roman', Times, serif; margin: 0;">
                <span style="color: #FFD800;">How</span> <span style="color: #393186;">To Apply</span>
            </h2>
        </div>

        <p
            style="font-family: 'Poppins'; font-size: 28px; font-weight: 400; color: #5B5B5B; text-align: center; margin-bottom: 50px;">
            Process of Financial Assistance Application
        </p>

            @/resources/views/website/howtoapply.blade.php after <p
                style="font-family:'Poppins';font-size:28px;font-weight:400;color:#5B5B5B;">Process of
                Financial Assistance Application</p>
            <p style="font-family:'Poppins';">
                1. Meritorious, deserving, and financially needy Jain student residing in India.
            </p>
            <p style="font-family:'Poppins';">
                2. The applicant must be between 18 and 30 years of age, having completed HSC or a Diploma,
                with a minimum of 60% overall academic score.
            </p>
            <p style="font-family:'Poppins';">
                3. The applicant must log in and register on the official website to complete and submit the
                application form: www.jitojeap.in
            </p>

            <!-- Timeline -->
            <div class="timeline">

                <!-- Step 1 (Right) -->
                <div class="step"
                    style="display: grid; grid-template-columns: 1fr auto 1fr; grid-template-areas: '. circle content'; align-items: center; margin-bottom: 40px;">
                    <div class="circle"
                        style="grid-area: circle; width: 80px; height: 80px; background: #4c63d2; border: 3px solid white; border-radius: 50%; display: flex; align-items: center; justify-content: center; color: white; font-size: 24px; font-weight: bold; position: relative;">
                        1
                        <!-- Connector -->
                        <div
                            style="position: absolute; right: -100px; top: 50%; transform: translateY(-50%); width: 100px; height: 2px; background: repeating-linear-gradient(to right, #4c63d2 0 5px, transparent 5px 10px);">
                        </div>
                        <div
                            style="position: absolute; right: -110px; top: 50%; transform: translateY(-50%); width: 10px; height: 10px; background: #4c63d2; border-radius: 50%;">
                        </div>
                    </div>
                    <div class="content"
                        style="grid-area: content; text-align: left; color: #5B5B5B; font-size: 16px; line-height: 1.5;">
                        Student have to go to google & search – https://jitojeap.in
                    </div>
                </div>

                <!-- Step 2 (Left) -->
                <div class="step"
                    style="display: grid; grid-template-columns: 1fr auto 1fr; grid-template-areas: 'content circle .'; align-items: center; margin-bottom: 40px;">
                    <div class="content"
                        style="grid-area: content; text-align: right; color: #f0f0f0; font-size: 16px; line-height: 1.5;">
                        Explore website for understanding what actually JEAP does
                    </div>
                    <div class="circle"
                        style="grid-area: circle; width: 80px; height: 80px; background: #28a745; border: 3px solid white; border-radius: 50%; display: flex; align-items: center; justify-content: center; color: white; font-size: 24px; font-weight: bold; position: relative;">
                        2
                        <!-- Connector -->
                        <div
                            style="position: absolute; left: -100px; top: 50%; transform: translateY(-50%); width: 100px; height: 2px; background: repeating-linear-gradient(to left, #28a745 0 5px, transparent 5px 10px);">
                        </div>
                        <div
                            style="position: absolute; left: -110px; top: 50%; transform: translateY(-50%); width: 10px; height: 10px; background: #28a745; border-radius: 50%;">
                        </div>
                    </div>
                </div>

                <!-- Step 3 (Right) -->
                <div class="step"
                    style="display: grid; grid-template-columns: 1fr auto 1fr; grid-template-areas: '. circle content'; align-items: center; margin-bottom: 40px;">
                    <div class="circle"
                        style="grid-area: circle; width: 80px; height: 80px; background: #ffc107; border: 3px solid white; border-radius: 50%; display: flex; align-items: center; justify-content: center; color: white; font-size: 24px; font-weight: bold; position: relative;">
                        3
                        <!-- Connector -->
                        <div
                            style="position: absolute; right: -100px; top: 50%; transform: translateY(-50%); width: 100px; height: 2px; background: repeating-linear-gradient(to right, #ffc107 0 5px, transparent 5px 10px);">
                        </div>
                        <div
                            style="position: absolute; right: -110px; top: 50%; transform: translateY(-50%); width: 10px; height: 10px; background: #ffc107; border-radius: 50%;">
                        </div>
                    </div>
                    <div class="content"
                        style="grid-area: content; text-align: left; color: #f0f0f0; font-size: 16px; line-height: 1.5;">
                        Who can apply for the Financial Assistance from JEAP? Click the link for FAQ's section.
                    </div>
                </div>

                <!-- Step 4 (Left) -->
                <div class="step"
                    style="display: grid; grid-template-columns: 1fr auto 1fr; grid-template-areas: 'content circle .'; align-items: center; margin-bottom: 40px;">
                    <div class="content"
                        style="grid-area: content; text-align: right; color: #f0f0f0; font-size: 16px; line-height: 1.5;">
                        You'll find list of documents according to the Financial Assistance you want to appear for i.e
                        Foreign or Domestic
                    </div>
                    <div class="circle"
                        style="grid-area: circle; width: 80px; height: 80px; background: #dc3545; border: 3px solid white; border-radius: 50%; display: flex; align-items: center; justify-content: center; color: white; font-size: 24px; font-weight: bold; position: relative;">
                        4
                        <!-- Connector -->
                        <div
                            style="position: absolute; left: -100px; top: 50%; transform: translateY(-50%); width: 100px; height: 2px; background: repeating-linear-gradient(to left, #dc3545 0 5px, transparent 5px 10px);">
                        </div>
                        <div
                            style="position: absolute; left: -110px; top: 50%; transform: translateY(-50%); width: 10px; height: 10px; background: #dc3545; border-radius: 50%;">
                        </div>
                    </div>
                </div>

                <!-- Step 5 (Right) -->
                <div class="step"
                    style="display: grid; grid-template-columns: 1fr auto 1fr; grid-template-areas: '. circle content'; align-items: center; margin-bottom: 40px;">
                    <div class="circle"
                        style="grid-area: circle; width: 80px; height: 80px; background: #4c63d2; border: 3px solid white; border-radius: 50%; display: flex; align-items: center; justify-content: center; color: white; font-size: 24px; font-weight: bold; position: relative;">
                        5
                        <!-- Connector -->
                        <div
                            style="position: absolute; right: -100px; top: 50%; transform: translateY(-50%); width: 100px; height: 2px; background: repeating-linear-gradient(to right, #4c63d2 0 5px, transparent 5px 10px);">
                        </div>
                        <div
                            style="position: absolute; right: -110px; top: 50%; transform: translateY(-50%); width: 10px; height: 10px; background: #4c63d2; border-radius: 50%;">
                        </div>
                    </div>
                    <div class="content"
                        style="grid-area: content; text-align: left; color: #f0f0f0; font-size: 16px; line-height: 1.5;">
                        Go through the list of Documents and keep ready all the documents before you start filling the
                        application
                    </div>
                </div>

                <!-- Step 6 (Left) -->
                <div class="step"
                    style="display: grid; grid-template-columns: 1fr auto 1fr; grid-template-areas: 'content circle .'; align-items: center; margin-bottom: 40px;">
                    <div class="content"
                        style="grid-area: content; text-align: right; color: #f0f0f0; font-size: 16px; line-height: 1.5;">
                        Once you are ready with all your documents you have to fill (Personal Details, Family Details,
                        Education Details, Funding Details, Guarantor Details, Documents & Submit Section)
                    </div>
                    <div class="circle"
                        style="grid-area: circle; width: 80px; height: 80px; background: #28a745; border: 3px solid white; border-radius: 50%; display: flex; align-items: center; justify-content: center; color: white; font-size: 24px; font-weight: bold; position: relative;">
                        6
                        <!-- Connector -->
                        <div
                            style="position: absolute; left: -100px; top: 50%; transform: translateY(-50%); width: 100px; height: 2px; background: repeating-linear-gradient(to left, #28a745 0 5px, transparent 5px 10px);">
                        </div>
                        <div
                            style="position: absolute; left: -110px; top: 50%; transform: translateY(-50%); width: 10px; height: 10px; background: #28a745; border-radius: 50%;">
                        </div>
                    </div>
                </div>

                <!-- Step 7 (Right) -->
                <div class="step"
                    style="display: grid; grid-template-columns: 1fr auto 1fr; grid-template-areas: '. circle content'; align-items: center; margin-bottom: 40px;">
                    <div class="circle"
                        style="grid-area: circle; width: 80px; height: 80px; background: #ffc107; border: 3px solid white; border-radius: 50%; display: flex; align-items: center; justify-content: center; color: white; font-size: 24px; font-weight: bold; position: relative;">
                        7
                        <!-- Connector -->
                        <div
                            style="position: absolute; right: -100px; top: 50%; transform: translateY(-50%); width: 100px; height: 2px; background: repeating-linear-gradient(to right, #ffc107 0 5px, transparent 5px 10px);">
                        </div>
                        <div
                            style="position: absolute; right: -110px; top: 50%; transform: translateY(-50%); width: 10px; height: 10px; background: #ffc107; border-radius: 50%;">
                        </div>
                    </div>
                    <div class="content"
                        style="grid-area: content; text-align: left; color: #f0f0f0; font-size: 16px; line-height: 1.5;">
                        For any queries do mail us on support.jitojeap@jito.org You'll get reply within 24 to 48 hours
                    </div>
                </div>

                <!-- Step 8 (Left) -->
                <div class="step"
                    style="display: grid; grid-template-columns: 1fr auto 1fr; grid-template-areas: 'content circle .'; align-items: center; margin-bottom: 40px;">
                    <div class="content"
                        style="grid-area: content; text-align: right; color: #f0f0f0; font-size: 16px; line-height: 1.5;">
                        JEAP working hours are 9am to 5pm from MON – FRI
                    </div>
                    <div class="circle"
                        style="grid-area: circle; width: 80px; height: 80px; background: #dc3545; border: 3px solid white; border-radius: 50%; display: flex; align-items: center; justify-content: center; color: white; font-size: 24px; font-weight: bold; position: relative;">
                        8
                        <!-- Connector -->
                        <div
                            style="position: absolute; left: -100px; top: 50%; transform: translateY(-50%); width: 100px; height: 2px; background: repeating-linear-gradient(to left, #dc3545 0 5px, transparent 5px 10px);">
                        </div>
                        <div
                            style="position: absolute; left: -110px; top: 50%; transform: translateY(-50%); width: 10px; height: 10px; background: #dc3545; border-radius: 50%;">
                        </div>
                    </div>
                </div>

            </div>

        </div>
    </section>
@endsection
