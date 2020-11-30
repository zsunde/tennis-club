<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\Pivot;

class CourtReservation extends Pivot
{
    use HasFactory;

    protected $fillable = [
        'started_at',
        'finished_at',
        'court_id',
        'member_id',
    ];
}
