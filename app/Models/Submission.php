<?php

namespace App\Models;

use App\AreYou;
use App\Expertize;
use Illuminate\Database\Eloquent\Model;

class Submission extends Model
{
    protected $fillable = [
        'email',
        'linkedin',
        'are_you',
        'looking_to',
        'expertize',
    ];

    protected $casts = [
        'are_you' => AreYou::class,
        'looking_to' => 'array',
        'expertize' => Expertize::class,
    ];
}
