<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MatchResult extends Model
{
    use HasFactory;

    protected $fillable = [
        'match_id',
        'winner_player_id',
        'number_of_sets',
    ];
    protected $primaryKey = 'match_id';
}
