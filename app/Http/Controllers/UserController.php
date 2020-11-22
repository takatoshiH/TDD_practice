<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    function index(){
        $users = User::all();
        return view('users.index', compact('users'));
    }

    function show(Request $request) {
        $user = User::find($request->input('user_id'));
        return view('users.show', compact('user'));
    }
}
