<?php

namespace App\Http\Controllers;

use App\Models\users;
use Illuminate\Http\Request;

class userController extends Controller
{
    public function Users(){
        $user = users::all();
        return view('users', compact('user'));
    }
}
