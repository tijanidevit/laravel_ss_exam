<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function login(Request $request)
    {
        $data = $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        $check_email = User::whereEmail($data['email'])->first();

        if(!$check_email){
            return back()->with('error', 'Email address not recognised');
        }

        if (Auth::attempt($data)) {
            $user = auth()->user();

            if ($user->isAdmin()) {
                return redirect()->route('admin.dashboard');
            }

            if ($user->isTeacher()) {
                return redirect()->route('teacher.dashboard');
            }

            if ($user->isStudent()) {
                return redirect()->route('student.dashboard');
            }
        }
        else{
            return back()->with('error', 'Invalid Credentials');
        }
    }
}
