<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>License Details - {{ config('app.name', 'Laravel') }}</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Noto+Sans+Myanmar:wght@400;600;700&display=swap');


        body {
            font-family: Arial, sans-serif;
            background: white;
            margin: 0;
            padding: 0px;
            display: flex;
            justify-content: center;
        }

        .license-container {
            padding: 1px;
            width: 1200px;
            border: 3px solid #e1ff94;
            background: url('/images/knn_bg.png');
            background-size: 115px;
            background-repeat: repeat;
            background-position: center;
            position: relative;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        .license-container::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: url('/images/knn_bg.png');
            background-size: 115px;
            background-repeat: repeat;
            background-position: center;
            opacity: 0.9;
            pointer-events: none;
            z-index: 0;
        }

        @media screen and (max-width: 600px) {
            .license-container::before {
                content: '';
                position: absolute;
                top: 0;
                left: 0;
                right: 0;
                bottom: 0;
                background: url('/images/knn_bg.png');
                background-size: 74px;
                background-repeat: repeat;
                background-position: center;
                opacity: 0.9;
                pointer-events: none;
                z-index: 0;
            }
        }

        .header-section {
            background: rgba(253, 253, 253, 0.8);
            padding: 20px;
            display: flex;
            align-items: center;
            justify-content: center;
            position: relative;
            z-index: 1;
        }

        .logo-img {
            height: 100px;
            width: auto;
            border: none !important;
            outline: none;
            box-shadow: none;
        }

        .content-section {
            display: flex;
            border-top: none;
            position: relative;
            z-index: 1;
        }

        .photo-section {
            width: 25%;
            padding: 10px;
            position: relative;

        }

        .photo-section::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: transparent;
            background-size: 110px;
            background-repeat: repeat;
            opacity: 0.9;
            pointer-events: none;
            z-index: 0;
        }

        .photo-frame {
            border: 3px solid #e1ff94;
            padding: 1px;
            background: white;
            width: 180px;
            height: 180px;
            margin: 0 auto;
            position: relative;
            z-index: 1;
        }

        .photo-frame img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            background: #1e40af;
        }

        .details-section {
            width: 80%;
            padding: 2px;
            position: relative;
        }

        .details-section::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: transparent;
            background-size: 110px;
            background-repeat: repeat;
            opacity: 0.9;
            pointer-events: none;
            z-index: 0;
        }

        .details-table {
            border-collapse: collapse;
            margin: 0;
            padding: 0px;
            table-layout: fixed;
            width: 100%;
            background: transparent;
            position: relative;
            z-index: 1;
        }

        .details-table tr {
            background: transparent;
            border-bottom: 1px solid rgba(255, 255, 255, 1);

        }

        .details-table tr:last-child {
            border-bottom: none;
        }

        .details-table th,
        .details-table td {
            background: #e1ff94;
            padding: 10px 12px;
            vertical-align: middle;
        }

        .details-table th {
            background: transparent !important;
            color: #000;
            font-size: 13px;
            font-weight: 400;
            width: 160px;
            text-align: left;
            border-right: 1px solid rgba(255, 255, 255, 1);
        }

        .details-table td {
            color: #000;
            font-weight: 700;
            font-size: 14px;
            letter-spacing: 0.5px;
            word-break: break-word;

        }

        .details-table td:before {
            content: attr(data-label);
        }

        @media screen and (max-width: 600px) {
            body {
                padding: 2px;
            }

            .license-container {
                width: 100%;
                max-width: 100%;
                margin: 0 auto;
                background-size: 74px;
                border: 2px solid #e1ff94;
            }

            .header-section {
                padding: 15px 10px;
            }

            .logo-img {
                height: 100px;
                max-width: 100%;
            }

            .content-section {
                flex-direction: column;
            }

            .photo-section {
                width: 100%;
                padding: 5px;
                border-right: none;
                border-bottom: 3px solid rgb(249, 251, 243);
                display: flex;
                justify-content: center;
            }

            .photo-frame {
                width: 250px;
                height: 256px;
            }

            .details-section {
                width: 100%;
            }

            .details-table thead {
                border: none;
                clip: rect(0 0 0 0);
                height: 1px;
                margin: -1px;
                overflow: hidden;
                padding: 0;
                position: absolute;
                width: 1px;
            }

            .details-table tr {
                border-bottom: 1px solid rgba(255, 255, 255, 1);
                display: block;
                margin-bottom: 8px;
                background: transparent;
            }

            .details-table th {
                display: block;
            }

            .details-table td {
                border-bottom: 1px solid rgba(255, 255, 255, 1);
                display: block;
                text-align: left;
                padding: 10px 12px;
                font-size: 13px;
            }

            .details-table td:before {
                content: attr(data-label);
                float: left;
                font-weight: 600;
                margin-right: 8px;
                display: block;
                width: 100%;
                margin-bottom: 4px;
            }

            .details-table td:last-child {
                border-bottom: 0;
            }

            .footer {
                padding: 8px 10px;
                font-size: 13px;
            }
        }

        .footer {

            padding: 30px 10px;
            text-align: left;
            font-size: 13px;
            color: #666;
            border-top: 1px solid #ddd;
            position: relative;
            z-index: 1;
        }

        @media print {
            body {
                padding: 0;
            }


        }
    </style>
</head>

<body>
    <div>
        <!-- Header -->
        <div class="header-section">
            <img src="{{ asset('images/KaNyaNa_LogoWithText.jpg') }}" alt="Department Logo" class="logo-img">
        </div>
        <div class="license-container">
            <!-- Content -->

            <div class="content-section">
                <!-- Photo Section -->
                <div class="photo-section">
                    @if ($license->photo_path)
                        <div class="photo-frame">
                            <img src="{{ str_starts_with($license->photo_path, 'http') || str_starts_with($license->photo_path, '/') ? $license->photo_path : asset('storage/' . $license->photo_path) }}"
                                alt="License Photo"
                                onerror="this.src='data:image/svg+xml,%3Csvg xmlns=%22http://www.w3.org/2000/svg%22 width=%22220%22 height=%22220%22%3E%3Crect fill=%22%231e40af%22 width=%22220%22 height=%22220%22/%3E%3C/svg%3E';">
                        </div>
                    @else
                        <div class="photo-frame">
                            <div style="width: 100%; height: 100%; background: #1e40af;"></div>
                        </div>
                    @endif
                </div>

                <!-- Details Section -->
                <div class="details-section">
                    <table class="details-table">
                        <tbody>
                            <tr>
                                <th>License Number</th>
                                <td>{{ strtoupper($license->license_number) }}</td>
                            </tr>

                            <tr>
                                <th>Name</th>
                                <td>{{ strtoupper($license->name) }}</td>
                            </tr>

                            <tr>
                                <th>NRC Number</th>
                                <td>{{ strtoupper($license->nrc_number) }}</td>
                            </tr>

                            <tr>
                                <th>Date of Birth</th>
                                <td>{{ $license->date_of_birth->format('d.m.Y') }}</td>
                            </tr>

                            <tr>
                                <th>Blood Type</th>
                                <td>
                                    {{ $license->blood_type ? strtoupper($license->blood_type) : '-' }}</td>
                            </tr>

                            <tr>
                                <th>Expiry Date</th>
                                <td>{{ $license->expiry_date->format('d.m.Y') }}</td>
                            </tr>

                            <tr>
                                <th>License Type</th>
                                <td>{{ strtoupper($license->license_type) }}</td>
                            </tr>

                            @if ($license->address)
                                <tr>
                                    <th>Address</th>
                                    <td>{{ strtoupper($license->address) }}</td>
                                </tr>
                            @endif
                        </tbody>
                    </table>
                </div>

            </div>
        </div>
        <!-- Footer -->
        <div class="footer">
            © 2025 - Ministry of Transport and Communication
        </div>
    </div>
</body>

</html>
