<?php

namespace App\Models;

use App\Models\Type;
use App\Models\Answer;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Question extends Model
{
    use HasFactory;

    protected $fillable = [
        'type',
        'title',
        'propositions',
    ];

    public function answers(){
        return $this->hasMany(Answer::class);
    }

}
