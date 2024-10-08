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
        if ($totalScore >= 49) {
            $result = "Anda mengalami Depresi sangat berat";
            $resultClass = "result-darkred";
            $tips = [
                ['icon' => 'fa-user-doctor', 'text' => "Segera temui psikolog atau psikiater untuk mendapatkan bantuan profesional"],
                ['icon' => 'fa-user-friends', 'text' => "Jangan ragu untuk meminta dukungan dari orang terdekat"]
            ];

        } elseif ($totalScore >= 37) {
            $result = "Anda mengalami Depresi berat";
            $resultClass = "result-red";
            $tips = [
                ['icon' => 'fa-user-doctor', 'text' => "Pertimbangkan untuk berkonsultasi dengan profesional kesehatan mental"],
                ['icon' => 'fa-hiking', 'text' => "Coba lakukan aktivitas yang Anda nikmati"],
                ['icon' => 'fa-user-friends', 'text' => "Tetap aktif dan berbicaralah dengan teman atau keluarga"]
            ];
    
        } elseif ($totalScore >= 25) {
            $result = "Anda mengalami Depresi sedang";
            $resultClass = "result-orange";
            $tips = [
                ['icon' => 'fa-peace', 'text' => "Lakukan meditasi atau olahraga ringan untuk mengurangi stres"],
                ['icon' => 'fa-user-doctor', 'text' => "Pertimbangkan untuk berbicara dengan seorang konselor"]
            ];

        } elseif ($totalScore >= 13) {
            $result = "Anda mengalami Depresi ringan";
            $resultClass = "result-yellow";
            $tips = [
                ['icon' => 'fa-bed', 'text' => "Beristirahat yang cukup"],
                ['icon' => 'fa-user-friends', 'text' => "Berbicara dengan orang yang Anda percaya"],
                ['icon' => 'fa-hiking', 'text' => "Lakukan kegiatan yang menyenangkan bisa membantu mengurangi gejala"]
            ];

        } else {
            $result = "Hasil Anda tidak menunjukkan tanda-tanda depresi";
            $resultClass = "result-green";
            $tips = [
                ['icon' => 'fa-check-circle', 'text' => "Anda tampaknya dalam kondisi yang baik"],
                ['icon' => 'fa-balance-scale', 'text' => "Teruslah jaga keseimbangan hidup"],
                ['icon' => 'fa-exclamation-triangle', 'text' => "Tetap waspada terhadap tanda-tanda perubahan suasana hati"]
            ];
        }

        return view('result', compact('result', 'totalScore', 'tips', 'resultClass'));
    }
}