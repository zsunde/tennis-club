<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Address extends Model
{
    use HasFactory;

    protected $fillable = [
        'street',
        'city_id',
    ];

    public function city() { return $this->belongsTo(City::class); }

    public function addresses() { return $this->hasMany(Address::class); }

    public function members() { return $this->hasMany(Member::class); }



}
