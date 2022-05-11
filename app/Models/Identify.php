<?php

namespace App\Models;

use App\Models\Answer;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Identify extends Model
{
    use HasFactory;

    public function answer()
    {
        return $this->belongsTo(Answer::class, "answer_id");
    }

    protected $fillable = [
        "token",
    ];
}
