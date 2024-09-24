<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\SurveyQuestion;
use App\Models\SurveyAnswer;

class SurveyController extends Controller
{
    // Menampilkan halaman kuesioner
    public function show()
    {
        $questions = SurveyQuestion::all();
        return view('survey', compact('questions'));
    }

    // Menyimpan jawaban dari pengguna
    public function submit(Request $request)
    {
        $totalScore = 0;

        foreach ($request->answers as $questionId => $answerValue) {
            SurveyAnswer::create([
                'question_id' => $questionId,
                'answer_value' => $answerValue
            ]);

            // Akumulasi nilai
            $totalScore += $answerValue;
        }

        // Analisis hasil berdasarkan skor
        if ($totalScore >= 20) {
            $result = "Depresi sangat berat";
        } elseif ($totalScore >= 15) {
            $result = "Depresi berat";
        } elseif ($totalScore >= 10) {
            $result = "Depresi sedang";
        } elseif ($totalScore >= 5) {
            $result = "Depresi ringan";
        } else {
            $result = "Tidak menunjukkan tanda-tanda depresi";
        }

        return view('result', compact('result', 'totalScore'));
    }
}
