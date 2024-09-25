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
            min-height: 100vh; /* Ensures content fills the viewport vertically */
        }

        .container {
            display: flex;
            justify-content: center;
            align-items: center;
            padding: 20px;
            width: 100%;
            max-width: 1200px;
            height: 100%; /* Makes sure the container takes full height */
        }

        .content {
            background-color: rgba(255, 255, 255, 0.8);
            padding: 20px;
            border-radius: 10px;
            max-width: 1000px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
        }

        .text-section {
            text-align: center;
            margin-bottom: 20px;
        }

        h1 {
            font-size: 36px;
            margin-bottom: 20px;
            color: #112754;
        }

        p {
            font-size: 18px;
            margin-bottom: 20px;
            color: #112754;
        }

        .text-section a {
            display: inline-block;
            background-color: #224563;
            color: white;
            padding: 15px 25px;
            text-decoration: none;
            border-radius: 5px;
            font-size: 18px;
        }

        .text-section a:hover {
            background-color: #6a89a3;
        }

        .image-section img {
            max-width: 100%;
            height: auto;
            border-radius: 10px;
            margin-top: 20px;
        }

        @media (min-width: 768px) {
            .container {
                flex-direction: row;
            }

            .content {
                flex-direction: row;
                justify-content: space-between;
                align-items: center;
                padding: 40px;
            }

            .text-section {
                text-align: left;
                flex: 1;
            }

            h1 {
                font-size: 54px;
            }

            p {
                font-size: 24px;
            }

            .image-section {
                margin-left: 20px;
            }

            .image-section img {
                max-width: 400px;
                margin-top: 0;
            }
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="content">
            <div class="text-section">
                <h1>Student-DepCheck</h1>
                <p>This website helps you detect symptoms of depression by answering several questions.</p>
                <a href="{{ route('survey.show') }}">Get Test</a> <!-- Tautan ke halaman survei -->
            </div>
            <div class="image-section">
                <img src="https://static.vecteezy.com/system/resources/previews/021/656/058/non_2x/relationship-icon-free-png.png" alt="Illustration"> <!-- Replace with your image URL -->
            </div>
        </div>
    </div>
</body>
</html>
