<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BNI Roaster</title>
    <style>
        body {
            background-image: url('{{ public_path('roaster/roster6.png') }}');
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            margin: 0;
            padding: 20px;
            color: white;
        }

        .row {
            display: flex;
            margin-bottom: 20px;
        }

        .col-lg-4,
        .col-lg-8 {
            padding: 10px;
            box-sizing: border-box;
        }

        img {
            max-width: 100%;
            height: auto;
        }

        h1 {
            color: #D11C2F;
            margin: 0;
        }

        .label {
            text-align: end;
        }

        .value {
            text-align: start;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 20px;
        }

        td {
            padding: 10px;
        }

        img {
            max-width: 100%;
            margin-left: -20px;
            height: auto;
        }

        .label {
            text-align: right;
            width: 36%;
        }

        .value {
            text-align: start;
            color: #1f1f1f;
            width: 64%;
            padding-left: 30px;
        }

        /* Add page breaks after each roaster */
        .page-break {
            page-break-after: always;
        }

        .roaster-image {
            height: 250px;
            /* Set the desired height */
            object-fit: cover;
            /* This will ensure the image covers the entire area without distortion */
            width: auto;
            /* Maintain aspect ratio */
        }
    </style>
</head>

<body>
    @foreach ($roasters as $rost)
        <div class="roaster-page">
            <table>
                <tr>
                    <td style="width: 40%; text-align: center;">
                        @if ($rost->image != null)
                            <img src="{{ public_path('roaster/' . $rost->image) }}" alt="" class="roaster-image">
                        @endif
                    </td>
                    <td style="width: 60%;">
                        <h1>{{ $rost->name }}</h1>
                    </td>
                </tr>
            </table>
            <table>
                <tr>
                    <td class="label"><strong>CATEGORY</strong></td>
                    <td class="value">{{ $rost->categories->name ?? '' }}</td>
                </tr>
            </table>
            <table>
                <tr>
                    <td class="label"><strong>CHAPTER</strong></td>
                    <td class="value">{{ $rost->chapters->name ?? '' }}</td>
                </tr>
            </table>
            <table>
                <tr>
                    <td class="label"><strong>COMPANY NAME</strong></td>
                    <td class="value">{{ $rost->company }}</td>
                </tr>
            </table>

            <table>
                <tr>
                    <td class="label"><strong>PHONE</strong></td>
                    <td class="value">{{ $rost->mobile }}</td>
                </tr>
            </table>
            <table>
                <tr>
                    <td class="label"><strong>ADDRESS</strong></td>
                    <td class="value">{{ $rost->addr }}</td>
                </tr>
            </table>

            <table>
                <tr>
                    <td class="label"><strong>EMAIL</strong></td>
                    <td class="value">{{ $rost->email }}</td>
                </tr>
            </table>

            <table>
                <tr>
                    <td class="label"><strong>PRODUCT AND SERVICES</strong></td>
                    <td class="value">{!! $rost->com_brief !!}</td>
                </tr>
            </table>

            <table>
                <tr>
                    <td class="label"><strong>USP</strong></td>
                    <td class="value">{!! $rost->usp !!}</td>
                </tr>
            </table>

            <table>
                <tr>
                    <td class="label"><strong>EXPERIENCE</strong></td>
                    <td class="value">{{ $rost->exp }}</td>
                </tr>
            </table>

            <table>
                <tr>
                    <td class="label"><strong>LOOKING FOR REFERENCES</strong></td>
                    <td class="value">{{ $rost->dream_r }}</td>
                </tr>
            </table>
        </div>

        <!-- Add page break after every roaster except the last one -->
        @if (!$loop->last)
            <div class="page-break"></div>
        @endif
    @endforeach
</body>

</html>
