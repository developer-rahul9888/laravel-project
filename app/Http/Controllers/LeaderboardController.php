<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class LeaderboardController extends Controller
{
    public function index(Request $request) {

        $users = User::withCount('posts')->orderBy('posts_count', 'desc')->limit(3)->get();

        return view('leaderboardView', compact('users'));
    }
}
