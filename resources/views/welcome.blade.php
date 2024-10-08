<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Stu-DepCheck</title>
    <link rel="icon" href="https://static.vecteezy.com/system/resources/previews/021/656/058/non_2x/relationship-icon-free-png.png"
        type="image/jpeg">
    <style>
        body {
            font-family: Arial, sans-serif;
            background-image: url('https://static.vecteezy.com/system/resources/previews/022/514/324/non_2x/white-gradient-abstract-curve-pattern-free-photo.jpeg'); 
            background-size: cover;
            background-position: center;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
        }

        .container {
            display: flex;
            justify-content: center;
            align-items: center;
            padding: 20px;
            width: 100%;
            max-width: 1200px;
            height: 100%;
        }

        .content {
            background-color: rgba(255, 255, 255, 0.8);
            padding: 30px;
            border-radius: 10px;
            max-width: 1000px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        h1 {
            font-size: 36px;
            margin-bottom: 20px;
            color: #112754;
        }

        p {
            font-size: 16px;
            margin-bottom: 15px;
            color: #112754;
            line-height: 1.5;
        }

        .description {
            margin-bottom: 20px;
        }

        a.button {
            display: inline-block;
            background-color: #224563;
            color: white;
            padding: 10px 20px;
            text-decoration: none;
            border-radius: 5px;
            font-size: 16px;
        }

        a.button:hover {
            background-color: #6a89a3;
        }

        .logo {
            float: right;
            width: 100px;
            height: auto;
        }

        @media (min-width: 768px) {
            .content {
                padding: 40px;
            }

            h1 {
                font-size: 48px;
            }

            p {
                font-size: 18px;
            }

            .logo {
                width: 150px;
            }
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="content">
            <img src="https://static.vecteezy.com/system/resources/previews/021/656/058/non_2x/relationship-icon-free-png.png" alt="Logo" class="logo">
            <h1>Student-DepCheck</h1>
            <div class="description">
                <p>Depresi adalah kondisi kesehatan mental yang memengaruhi perasaan, pikiran, dan perilaku seseorang. Ini lebih dari sekadar rasa sedih biasa dan bisa mengganggu aktivitas sehari-hari.</p>
                <p>Mengecek depresi itu penting, terutama bagi mahasiswa tingkat akhir yang menghadapi banyak tekanan. Dengan mengenali gejala lebih awal, Anda bisa mendapatkan bantuan yang tepat dan mencegah masalah menjadi lebih serius.</p>
                <p>Student-DepCheck membantu Anda mengenali tanda-tanda depresi melalui beberapa pertanyaan sederhana. Ingat, ini bukan diagnosis, tapi langkah awal untuk memahami kesehatan mental Anda.</p>
            </div>
            <a href="{{ route('survey.show') }}" class="button">Get Test</a>
        </div>
    </div>
</body>
</html>
