<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Laravel\Socialite\Facades\Socialite;

class authController extends Controller
{
    function redirect(){
        return Socialite::driver('google')->redirect();
    }

    function callback(){
        try {
            $user = Socialite::driver('google')->user();
            $id = $user->id;
            $email = $user->email;
            $name = $user->name;

            return "$id - $email - $name";
        } catch (\Exception $e) {
            // Tampilkan pesan kesalahan atau lakukan tindakan lain sesuai kebutuhan
            return "Error: " . $e->getMessage();
        }
    }
}
