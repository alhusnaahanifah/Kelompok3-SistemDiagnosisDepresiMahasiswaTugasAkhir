<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SurveyQuestion extends Model
{
    use HasFactory;

    protected $fillable = ['question_text'];

    public function answers()
    {
        return $this->hasMany(SurveyAnswer::class);
    }
}

