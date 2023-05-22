<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserDetailsController extends Controller
{
    public function show($id)
    {
        $user = User::where('id', $id)->first();
        return view('users.show', [
            'user' => $user,
        ]);
    }
}
