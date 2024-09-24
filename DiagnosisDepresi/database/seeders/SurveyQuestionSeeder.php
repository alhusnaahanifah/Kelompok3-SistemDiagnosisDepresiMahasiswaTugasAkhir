<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\SurveyQuestion;

class SurveyQuestionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        SurveyQuestion::create(['question_text' => 'Apakah Anda merasa sedih atau kosong hampir sepanjang hari?']);
        SurveyQuestion::create(['question_text' => 'Apakah Anda kehilangan minat dalam aktivitas yang biasanya menyenangkan?']);
        // Tambahkan lebih banyak pertanyaan
    }
}
