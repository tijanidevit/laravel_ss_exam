<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use App\Enums\UserRoles;

class AuthAdmin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        $user = auth()->user();

        if ($user->user_role !== UserRoles::ADMIN ) {
            if ($user->user_role === UserRoles::TEACHER) {
                return redirect()->route('teacher.dashboard');
            }

            
            if ($user->user_role === UserRoles::STUDENT) {
                return redirect()->route('student.dashboard');
            }
        }
        return $next($request);
    }
}
