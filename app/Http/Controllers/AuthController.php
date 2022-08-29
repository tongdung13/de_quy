<?php

namespace App\Http\Controllers;

use App\Models\UserHistory;
use App\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function login()
    {
        return view('login');
    }

    public function authenticate(Request $request)
    {
        $credentials = $request->only('email', 'password');
        $now = Carbon::now('Asia/Ho_Chi_Minh');

        if (Auth::attempt($credentials)) {
            Auth::login(Auth::user(), true);

            $userHistory = new UserHistory();
            $userHistory->user_id = Auth::user()->id;
            $userHistory->start_date = $now->toDateTimeString();
            $userHistory->save();
        }
        return redirect()->route('user');
    }

    public function logout()
    {
        $userHistory = UserHistory::query()->where('user_id', Auth::user()->id)
            ->where('end_date', null)
            ->first();
        Auth::logout();
        $now = Carbon::now('Asia/Ho_Chi_Minh');
        $userHistory->end_date = $now->toDateTimeString();
        $userHistory->save();
        return redirect()->route('login');
    }

    public function index()
    {
        $users = User::query()->orderBy('id', 'desc')->get();

        return view('users.index', compact('users'));
    }

    public function history($id)
    {
        $userHistories = UserHistory::query()->where('user_id', $id)
            ->where('end_date', '!=', null)
            ->get();

        return view('users.history', compact('userHistories'));
    }
}
