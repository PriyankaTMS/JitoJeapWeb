<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BNI Roaster</title>
    <style>
        body {
            background-image: url('{{ public_path('roaster/NMD NEW ID.png') }}');
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            margin: 0;
            padding: 20px;
            color: white;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .main_div {
            text-align: center;
        }

        .main_title {
            margin-top: 350px;
            font-size: 40px;
            font-weight: bold;
            color: black;
        }
    </style>
</head>

<body>
    <div class="main_div">
        @php
            $cleanedName = str_replace("\u{202d}", '', $rost->name);
        @endphp
        <h3 class="main_title">{{ $cleanedName }}</h3>
        <img src="{{ public_path('qr_codes/' . $rost->qr_image . '.png') }}" alt="QR Code for {{ $cleanedName }}"
            width="350" height="350" class="main_qr">
    </div>
</body>

</html>
