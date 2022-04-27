<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Survey extends Model
{
    use HasFactory;

    protected $fillable = [
        'email',
        'age',
        'sex',
        'family_members',
        'job',
        'used_vr',
        'vr_content_store',
        'futur_vr',
        'bs_users',
        'bs_use',
        'bs_pics_score',
        'bs_comfort_score',
        'bs_network_score',
        'bs_3d_score',
        'bs_audio_score',
        'bs_notif',
        'smartphone_use',
        'record_shows',
        'exclusive_games',
        'dream_features',
    ];
}
