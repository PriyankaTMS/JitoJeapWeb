<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Success</title>
    <!-- Include Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <div class="d-flex justify-content-center align-items-center vh-100">
        <div class="d-flex justify-content-center align-items-center vh-100">
            <div class="card shadow p-4 text-center">
                <div class="card-body">
                    <div class="m-4">

                        <img src="{{ asset('roaster/regilogo_2.png') }}" alt="bni logo"
                            style="max-width: 60%; height: auto;">
                    </div>
                    <div class="m-4">
                        <h2 class="text-primary">Registration Successful !!!!</h2>
                        {{--  <p class="mt-3">Registration Successful!</p>  --}}
                    </div>
                    <div style="text-align: center; margin-top: 20px;">
                        <a href="{{route('index')}}"
                            style="background-color: #393186; color: white; padding: 10px 20px; border: none; border-radius: 10px; cursor: pointer;">
                            Back
                        </a></div>
                </div>
            </div>
        </div>
</body>

</html>
