<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SurveyAnswer extends Model
{
    use HasFactory;

    protected $fillable = ['question_id', 'answer_value'];

    public function question()
    {
        return $this->belongsTo(SurveyQuestion::class);
    }
}
