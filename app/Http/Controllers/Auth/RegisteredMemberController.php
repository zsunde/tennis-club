<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\Member;
use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\Address;

class RegisteredMemberController extends Controller
{
    /* otvori registracijsku formu */
    public function create()
    {
        $addresses = Address::pluck('street', 'id');
        return view('auth.register', compact('addresses'));
    }

    /* pozvano na Register gumb */
    public function store(Request $request)
    {
        $data = $request->validate([
            'name' => 'required|max:255',
            'email' => 'required|email|max:255|unique:members',
            'password' => 'required|min:7|confirmed',
            'address_id' => 'required'
        ]);

        $data['role_id'] = 2; /* hardkodirano na 'User' jer samo admin može dodati drugog admina */
        $data['password'] = Hash::make($data['password']);

        /* dodaj korisnika u bazu */
        $member = Member::create($data);

        /* prijavi se u sustav novim korisnikom */
        Auth::login($member);
        event(new Registered($member));
        return redirect()->route('home');
    }
}
