<?php

namespace App\Models;

use App\Models\Identify;
use App\Models\Question;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Answer extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'question_id',
        'identify_id',
    ];
    public $timestamps = false;

    public function question(){

        return $this->belongsTo(Question::class);
    }
    public function identify(){

        return $this->belongsTo(Identify::class);
    }

}
