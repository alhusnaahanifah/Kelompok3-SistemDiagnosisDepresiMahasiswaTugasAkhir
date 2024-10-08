<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Stu-DepCheck</title>
    <link rel="icon" href="https://static.vecteezy.com/system/resources/previews/021/656/058/non_2x/relationship-icon-free-png.png" type="image/png">
    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@400;700&family=Roboto:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" />
    <style>
        /* CSS Reset */
        *, *::before, *::after {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
        }

        body {
            font-family: 'Roboto', sans-serif;
            background-image: url('https://static.vecteezy.com/system/resources/previews/022/514/324/non_2x/white-gradient-abstract-curve-pattern-free-photo.jpeg'); 
            background-size: cover;
            background-position: center;
            background-attachment: fixed;
            display: flex;
            flex-direction: column;
            align-items: center;
            min-height: 100vh;
            padding: 20px;
            color: #333;
        }

        /* Keyframe Animations */
        @keyframes fadeInUp {
            from {
                opacity: 0;
                transform: translateY(20px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        @keyframes fadeIn {
            from {
                opacity: 0;
                transform: translateY(20px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .container {
            background-color: white;
            border-radius: 15px;
            padding: 30px 20px;
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
            text-align: center;
            max-width: 400px;
            width: 100%;
            margin: 20px 0;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            /* Animasi */
            opacity: 0;
            transform: translateY(20px);
            animation: fadeInUp 1s forwards;
        }

        .container:hover {
            transform: translateY(-5px);
            box-shadow: 0 12px 24px rgba(0, 0, 0, 0.3);
        }

        .tips-container {
            background-color: white;
            border-radius: 15px;
            padding: 30px 20px;
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
            text-align: center;
            max-width: 1000px;
            width: 100%;
            margin: 20px 0;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            /* Animasi */
            opacity: 0;
            transform: translateY(20px);
            animation: fadeInUp 1s forwards;
            animation-delay: 0.5s;
        }

        .tips-container:hover {
            transform: translateY(-5px);
            box-shadow: 0 12px 24px rgba(0, 0, 0, 0.3);
        }

        h1, h2 {
            color: #2255bd;
            margin-bottom: 20px;
            transition: color 0.3s ease;
            font-family: 'Lato', sans-serif;
        }

        h1 {
            font-size: 32px;
            font-weight: 700;
            line-height: 1.2;
        }

        h2 {
            font-size: 28px;
            font-weight: 700;
            line-height: 1.3;
        }

        p {
            font-size: 18px;
            color: #333;
            margin-bottom: 10px;
            transition: color 0.3s ease;
            line-height: 1.6;
            font-family: 'Roboto', sans-serif;
        }

        .result {
            font-size: 24px;
            font-weight: 700;
            margin-top: 10px;
            font-family: 'Lato', sans-serif;
            color: #333;
        }

        .result-text {
            font-size: 20px;
            font-weight: 700;
            margin-top: 10px;
            font-family: 'Lato', sans-serif;
            color: #333;
        }

        /* Dynamic classes based on result */
        .result-green {
            background-color: #d4edda; /* Hijau muda */
            border-left: 6px solid green;
        }

        .result-yellow {
            background-color: #fff3cd; /* Kuning muda */
            border-left: 6px solid orange;
        }

        .result-orange {
            background-color: #f7ab6d; /* Oranye muda */
            border-left: 6px solid orange;
        }

        .result-red {
            background-color: #f8d7da; /* Merah muda */
            border-left: 6px solid red;
        }

        .result-darkred {
            background-color: #e05563 ; /* Merah tua */
            border-left: 6px solid darkred;
        }

        /* Wrapper untuk tips */
        .saran-wrapper {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            gap: 20px;
            margin-bottom: 20px;
        }

        .tip-item {
            display: flex;
            align-items: center;
            padding: 15px 20px;
            width: calc(50% - 20px); /* Untuk dua item per baris */
            box-sizing: border-box;
            background-color: #c8d8f7;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            transition: background-color 0.3s ease, transform 0.3s ease, box-shadow 0.3s ease;
            cursor: pointer;
            /* Animasi */
            opacity: 0;
            transform: translateY(20px);
            animation: fadeIn 0.5s forwards;
        }

        .tip-item:hover {
            background-color: #a3c0f2;
            transform: translateY(-3px);
            box-shadow: 0 6px 12px rgba(0, 0, 0, 0.2);
        }

        .tip-item i {
            margin-right: 10px; /* Jarak antara ikon dan teks */
            font-size: 32px; /* Ukuran ikon */
            color: #275f8f; /* Warna ikon */
            flex-shrink: 0; /* Mencegah ikon mengecil */
            transition: color 0.3s ease;
        }

        .tip-item:hover i {
            color: #1a3e8c;
        }

        .tip-item span {
            font-size: 18px;
            color: #333;
            transition: color 0.3s ease;
            font-family: 'Roboto', sans-serif;
        }

        .tip-item:hover span {
            color: #1a3e8c;
        }

        /* Konsultasi Link */
        .consultation-link {
            display: inline-block;
            margin-top: 10px;
            padding: 12px 25px;
            background-color: #275f8f;
            color: white;
            border: none;
            border-radius: 30px;
            text-decoration: none;
            font-size: 16px;
            cursor: pointer;
            transition: background-color 0.3s ease, transform 0.3s ease;
            font-family: 'Roboto', sans-serif;
        }

        .consultation-link:hover {
            background-color: #1a3e8c;
            transform: scale(1.05);
        }

        /* Tombol Kembali */
        button {
            padding: 12px 25px;
            background-color: #275f8f;
            color: white;
            border: none;
            border-radius: 30px;
            cursor: pointer;
            font-size: 16px;
            margin-top: 20px;
            width: 100%;
            max-width: 200px;
            transition: background-color 0.3s ease, transform 0.3s ease;
            opacity: 0;
            transform: translateY(20px);
            animation: fadeInUp 1s forwards;
            animation-delay: 1s;
            font-family: 'Roboto', sans-serif;
        }

        button:hover {
            background-color: #1a3e8c;
            transform: scale(1.05);
        }

        /* Responsive Design */
        @media (min-width: 768px) {
            body {
                padding: 40px;
            }

            h1 {
                font-size: 36px;
            }

            h2 {
                font-size: 30px;
            }

            p {
                font-size: 20px;
            }

            .consultation-link, button {
                width: auto;
            }

            .tip-item {
                width: calc(33.333% - 20px); /* Untuk tiga item per baris */
            }
        }
    </style>
</head>
<body>
    <!-- Container untuk Skor dan Hasil -->
    <div class="container {{ $resultClass }}">
        <h1>Hasil Test</h1>
        <p class="result">Skor: {{ $totalScore }}</p>
        <p class="result-text">{{ $result }}</p>
    </div>

    <!-- Container untuk Tips dan Saran -->
    <div class="tips-container">
        <h2>Tips dan Saran</h2>
        <div class="saran-wrapper">
            @foreach ($tips as $index => $tip)
                <div class="tip-item" style="animation-delay: {{ 0.3 * $index }}s;">
                    <i class="fa-solid {{ $tip['icon'] }}"></i>
                    <span>{{ $tip['text'] }}</span>
                </div>
            @endforeach 
        </div>
        <a class="consultation-link" href="https://www.halodoc.com/kesehatan-mental?srsltid=AfmBOorsIQVgj55VWdFYZTQ02HNBitAg6xKqO3-klzgPiCDTGbW5axTI" target="_blank">Ingin Berkonsultasi lebih lanjut?</a>
    </div>

    <!-- Tombol Kembali -->
    <button onclick="window.location.href='{{ url('/') }}'">Kembali</button>
</body>
</html>