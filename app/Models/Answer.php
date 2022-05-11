<?php

namespace App\Models;

use App\Models\Identify;
use App\Models\Question;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Answer extends Model
{
    use HasFactory;

    public function question()
    {
        return $this->belongsTo(Question::class, "question_id");
    }

    protected $fillable = [
        "question_id",
        "title",
    ];

    /**
     * Get the identify associated with the Answer
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function identify(): HasOne
    {
        return $this->hasOne(Identify::class, 'identify_id');
    }

}
