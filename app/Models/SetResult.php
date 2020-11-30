<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SetResult extends Model
{
    use HasFactory;

    protected $fillable = [
        'set_number',
        'match_id',
        'player1_games',
        'player2_games',
    ];
}
