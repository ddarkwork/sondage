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
        'type_id',
        'title',
    ];

    public function type()
    {
        return $this->belongsTo(Type::class);
    }

}
