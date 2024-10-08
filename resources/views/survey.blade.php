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
            background-attachment: fixed; /* Makes background fixed while scrolling */
            margin: 0;
            padding: 20px;
        }

        h1 {
            text-align: center;
            color: #112754;
            font-size: 28px;
        }

        form {
            max-width: 1000px;
            margin: 0 auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        .question {
            margin-bottom: 20px;
            padding: 25px;
            background-color: #f9f9f9;
            border-radius: 5px;
            border: 1px solid #ddd;
        }

        .question p {
            font-size: 18px;
            font-weight: bold;
            color: #555;
            margin-bottom: 10px;
        }

        .options {
            display: flex;
            font-size: 16px;
            flex-direction: column;
        }

        label {
            cursor: pointer;
            margin-bottom: 10px;
        }

        label input[type="radio"] {
            margin-right: 10px;
        }

        .button-container {
            display: flex;
            justify-content: space-between; /* Aligns buttons to left and right */
            margin-top: 20px; /* Adds space above the buttons */
        }

        button {
            padding: 10px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px;
            width: 100%;
        }

        button[type="submit"] {
            background-color: #275f8f; /* Green color for submit button */
            color: white;
            margin-left: 10px;
        }

        button[type="submit"]:hover {
            background-color: #1f2ed1;
        }

        button[type="button"] {
            background-color: #9ea6ad; /* Red color for back button */
            color: white;
        }

        button[type="button"]:hover {
            background-color: #7a3722;
        }

        @media (min-width: 768px) {
            .options {
                font-size: 18px;
                flex-direction: row; /* Horizontal options on larger screens */
                justify-content: space-between;
            }

            .question p {
                font-size: 18px; /* Larger question text */
            }

            .button-container {
                justify-content: space-between;
            }

            button {
                width: auto;
                flex: 1;
                margin: 0 10px;
            }

            button[type="submit"] {
                margin-left: 0;
            }
        }
    </style>
</head>

<body>
    <h1>Depression Test</h1>
    <form action="{{ route('survey.submit') }}" method="POST" id="surveyForm">
        @csrf
        @foreach ($questions as $index => $question)
            @if ($index < 10)
                <div class="question page1">
                    <p>{{ $question->question_text }}</p>
                    <div class="options">
                        <label><input type="radio" name="answers[{{ $question->id }}]" value="0" required> Tidak Pernah</label>
                        <label><input type="radio" name="answers[{{ $question->id }}]" value="1" required> Kadang-kadang</label>
                        <label><input type="radio" name="answers[{{ $question->id }}]" value="2" required> Sering</label>
                        <label><input type="radio" name="answers[{{ $question->id }}]" value="3" required> Hampir setiap hari</label>
                    </div>
                </div>
            @else
                <div class="question page2" style="display:none;">
                    <p>{{ $question->question_text }}</p>
                    <div class="options">
                        <label><input type="radio" name="answers[{{ $question->id }}]" value="0" required> Tidak Pernah</label>
                        <label><input type="radio" name="answers[{{ $question->id }}]" value="1" required> Kadang-kadang</label>
                        <label><input type="radio" name="answers[{{ $question->id }}]" value="2" required> Sering</label>
                        <label><input type="radio" name="answers[{{ $question->id }}]" value="3" required> Hampir setiap hari</label>
                    </div>
                </div>
            @endif
        @endforeach
        <div class="button-container">
            <button type="button" id="backButton" onclick="confirmBack()">Kembali ke Beranda</button>
            <button type="submit" id="nextButton" onclick="nextPage()">Lanjut</button>
            <button type="button" id="prevButton" onclick="prevPage()" style="display:none;">Kembali</button>
            <button type="submit" id="submitButton" style="display:none;">Kirim Jawaban</button>
        </div>
    </form>

    <script>
        function confirmBack() {
            if (confirm("Semua data yang telah diisi akan terhapus. Apakah Anda yakin ingin kembali?")) {
                window.location.href = '{{ url('/') }}';
            }
        }

        function nextPage() {
            const allAnswered = Array.from(document.querySelectorAll('.page1 input[type="radio"]:checked')).length === 10;
            if (allAnswered) {
                document.querySelectorAll('.page1').forEach(element => element.style.display = 'none');
                document.querySelectorAll('.page2').forEach(element => element.style.display = 'block');
                document.getElementById('backButton').style.display = 'none';
                document.getElementById('nextButton').style.display = 'none';
                document.getElementById('prevButton').style.display = 'block';
                document.getElementById('submitButton').style.display = 'block';
            }
        }
        function prevPage() {
            document.querySelectorAll('.page2').forEach(element => element.style.display = 'none');
            document.querySelectorAll('.page1').forEach(element => element.style.display = 'block');
            document.getElementById('backButton').style.display = 'block';
            document.getElementById('nextButton').style.display = 'block';
            document.getElementById('prevButton').style.display = 'none';
            document.getElementById('submitButton').style.display = 'none';
        }
    </script>
</body>
</html>
