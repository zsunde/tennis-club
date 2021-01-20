<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use App\Enums\RoleEnum;

class Member extends Authenticatable
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

    protected $hidden = [
        'password'
    ];

    public function courts()
    {
    return $this->belongsToMany('App\Models\Court', 'court_reservation')->withPivot(id,'started_at', 'finished_at')->using('App\Models\CourtReservation');;
    }


    public function role() { return $this->belongsTo(Role::class); }

    public function address() { return $this->belongsTo(Address::class); }

    /* authorization */
    public function isAdmin() { return $this->role_id === RoleEnum::ADMIN; } // RoleEnum::ADMIN je 1
    public function isUser() { return $this->role_id === RoleEnum::USER; } // RoleEnum::USER je 2
    public function isGuest() { return $this->role_id === RoleEnum::GUEST; } // RoleEnum::GUEST je 3
}
