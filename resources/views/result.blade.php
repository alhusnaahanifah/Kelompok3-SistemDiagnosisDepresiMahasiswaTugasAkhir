<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Stu-DepCheck</title>
    <link rel="icon" href="https://static.vecteezy.com/system/resources/previews/021/656/058/non_2x/relationship-icon-free-png.png" type="image/jpeg">
    <style>
        body {
            font-family: Arial, sans-serif;
            background-image: url('https://static.vecteezy.com/system/resources/previews/022/514/324/non_2x/white-gradient-abstract-curve-pattern-free-photo.jpeg'); 
            background-size: cover;
            background-position: center;
            background-attachment: fixed; /* Background fixed while scrolling */
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 85vh; /* Ensures content fills the viewport */
        }

        .container {
            background-color: white;
            border-radius: 10px;
            padding: 30px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            text-align: center;
            max-width: 600px;
            width: 100%;
            margin: 20px;
        }

        h1 {
            color: #112754;
            font-size: 28px;
            margin-bottom: 40px;
        }

        p {
            font-size: 18px;
            color: #333;
        }

        .result {
            margin-top: 10px;
            font-weight: bold;
            font-size: 24px;
            color: #82552e;
        }

        button {
            padding: 10px 20px;
            background-color: #275f8f;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px;
            margin-top: 20px;
            width: 100%; /* Button takes full width on small screens */
        }

        button:hover {
            background-color: #7a3722;
        }

        @media (min-width: 768px) {
            body {
                padding: 40px;
            }

            h1 {
                font-size: 32px;
            }

            p {
                font-size: 20px;
            }

            button {
                width: auto; /* Button size adjusts on larger screens */
            }
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Result Test Depression</h1>
        <p>Total Skor Anda: <span class="result">{{ $totalScore }}</span></p>
        <p class="result">{{ $result }}</p>
        <button onclick="window.location.href='{{ url('/') }}'">Kembali</button>
    </div>
</body>
</html>
