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
            color: white;
        }

        .container {
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 90vh;
            padding: 20px;
            margin-left: 60px;
        }

        .content {
            background-color: rgba(255, 255, 255, 0.8); /* Slight transparency for better readability */
            padding: 20px;
            border-radius: 10px;
            max-width: 800px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            display: flex;
            align-items: center;
        }

        .text-section {
            flex: 1;
        }

        h1 {
            font-size: 54px;
            margin-bottom: 20px;
            color: #112754;
        }

        p {
            font-size: 24px;
            margin-bottom: 20px;
            color: #112754;
        }

        .text-section a {
            display: inline-block;
            background-color: #224563;
            color: white;
            padding: 20px 30px;
            text-decoration: none;
            border-radius: 5px;
            font-size: 20px;
        }

        .text-section a:hover {
            background-color: #6a89a3;
        }

        .image-section img {
            max-width: 400px;
            border-radius: 10px;
            margin-right: 100px;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="text-section">
            <h1>Selamat Datang di Student-DepCheck</h1>
            <p>Website ini membantu Anda dalam mendeteksi gejala depresi dengan menjawab beberapa pertanyaan.</p>
           <a href="{{ route('survey.show') }}">Get Test</a> <!-- Tautan ke halaman survei -->
        </div>
       <div class="image-section">
            <img src="https://static.vecteezy.com/system/resources/previews/021/656/058/non_2x/relationship-icon-free-png.png" alt="Illustration"> <!-- Replace with your image URL -->
        </div>
    </div>

</body>
</html>
