<?php

namespace App\Models;

use App\Models\Answer;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Identify extends Model
{
    use HasFactory;

    protected $fillable = [
        'url',
    ];

    public function answers(){
        return $this->hasMany(Answer::class);
    }
}
