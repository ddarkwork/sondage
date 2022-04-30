<?php

namespace App\Models;

use App\Models\Question;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Answer extends Model
{
    use HasFactory;

    public function question()
    {
        return $this->belongsTo(Question::class);
    }

    protected $fillable = [
        'title',
        "email",
        "age",
        "sex",
        "family_members",
        "job",
        "used_vr",
        "vr_content_store",
        "futur_vr",
        "bs_users",
        "bs_use",
        "bs_pics_score",
        "bs_comfort_score",
        "bs_network_score",
        "bs_3d_score",
        "bs_audio_score",
        "bs_notif",
        "smartphone_use",
        "record_shows",
        "exclusive_games",
        "dream_features",
        "unique_token",
    ];

}
