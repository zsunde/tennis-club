<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Court extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
    ];

    public function members()
    {
    return $this->belongsToMany(Member::class, 'court_reservation', 'court_id', 'member_id')->withPivot('started_at', 'finished_at')->using('App\Models\CourtReservation');
    }
}
