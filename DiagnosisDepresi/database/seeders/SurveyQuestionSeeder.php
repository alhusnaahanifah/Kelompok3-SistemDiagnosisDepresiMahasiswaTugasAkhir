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
        $questions = [
            // Indikator Psikologis dan Emosional
            'Apakah Anda merasa sedih atau kosong hampir sepanjang hari selama dua minggu terakhir?',
            'Apakah Anda kehilangan minat atau kenikmatan dalam kegiatan yang sebelumnya Anda sukai?',
            'Apakah Anda merasa cemas atau gelisah lebih dari biasanya?',
            'Apakah Anda mengalami kesulitan dalam mengambil keputusan atau berkonsentrasi?',
            'Apakah Anda merasa tidak berharga atau bersalah yang berlebihan?',
            
            // Indikator Fisik
            'Apakah Anda mengalami kesulitan tidur (insomnia) atau tidur berlebihan?',
            'Apakah Anda merasa lelah atau tidak bertenaga meskipun sudah cukup istirahat?',
            'Apakah nafsu makan Anda berubah secara drastis (berkurang atau meningkat)?',
            
            // Indikator Akademis
            'Apakah Anda merasa kewalahan dengan tugas akhir atau persiapan kelulusan?',
            'Apakah Anda mengalami kesulitan dalam menyelesaikan tugas akademik?',
            'Apakah Anda merasa khawatir tentang prospek karir atau masa depan setelah lulus?',
            
            // Indikator Sosial
            'Apakah Anda merasa menarik diri dari teman, keluarga, atau aktivitas sosial?',
            'Apakah Anda merasa kesulitan berbicara dengan orang lain tentang perasaan Anda?',
            'Apakah Anda merasa sendirian atau tidak punya orang yang dapat mendukung Anda secara emosional?',
            
            // Indikator Kesehatan Mental
            'Apakah Anda pernah berpikir untuk menyakiti diri sendiri atau merasa bahwa hidup tidak berarti?',
            'Apakah Anda pernah mencari bantuan profesional untuk masalah mental atau emosional sebelumnya?',
            'Apakah Anda pernah didiagnosis dengan depresi atau gangguan mental lainnya?',
            
            // Indikator Keuangan dan Pekerjaan
            'Apakah Anda merasa khawatir tentang beban keuangan selama masa studi akhir?',
            'Apakah Anda memiliki pekerjaan sampingan atau tanggung jawab finansial yang menambah beban pikiran Anda?',
            
            // Indikator Kualitas Hidup
            'Seberapa puas Anda dengan keseimbangan antara studi, kehidupan pribadi, dan pekerjaan?',
            'Seberapa sering Anda merasa stres berat selama satu bulan terakhir?'
        ];

        foreach ($questions as $question) {
            SurveyQuestion::create(['question_text' => $question]);
        }
    }
}
