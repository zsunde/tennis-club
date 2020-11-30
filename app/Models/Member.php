<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Member extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'email',
        'password',
        'gender',
        'role_id',
        'address_id',
    ];

    public function courts()
    {
    return $this->belongsToMany('App\Models\Court', 'court_reservation')->withPivot(id,'started_at', 'finished_at')->using('App\Models\CourtReservation');;
    }
}
