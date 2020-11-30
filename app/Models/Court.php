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
    return $this->belongsToMany('App\Models\Member', 'court_reservation')->withPivot(id,'started_at', 'finished_at');
    }
}
