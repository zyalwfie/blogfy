<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index(User $user)
    {
        $blogs = $user->blogs;

        return view('blogs', compact('blogs'));
    }
}
