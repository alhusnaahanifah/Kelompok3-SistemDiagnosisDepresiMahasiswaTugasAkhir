<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kuesioner Depresi</title>
</head>
<body>
    <h1>Kuesioner Deteksi Depresi</h1>
    <form action="{{ route('survey.submit') }}" method="POST">
        @csrf
        @foreach ($questions as $question)
            <div>
                <p>{{ $question->question_text }}</p>
                <label><input type="radio" name="answers[{{ $question->id }}]" value="0" required> Tidak Pernah</label>
                <label><input type="radio" name="answers[{{ $question->id }}]" value="1" required> Kadang-kadang</label>
                <label><input type="radio" name="answers[{{ $question->id }}]" value="2" required> Sering</label>
                <label><input type="radio" name="answers[{{ $question->id }}]" value="3" required> Hampir setiap hari</label>
            </div>
        @endforeach
        <button type="submit">Kirim Jawaban</button>
    </form>
</body>
</html>
