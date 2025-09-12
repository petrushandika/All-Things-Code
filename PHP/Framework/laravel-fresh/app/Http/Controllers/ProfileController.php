<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function show() {
        return response()->json(['message' => 'Profile show method']);
    }

    public function profile()
    {
        $user = User::with('profile')->first();
        return response()->json($user->profile);
    }
}
