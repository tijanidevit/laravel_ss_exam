<?php

namespace App\Http\Middleware;

use Closure;
use App\Enums\UserRoles;
use Illuminate\Http\Request;

class AuthTeacher
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

        if ($user->user_role !== UserRoles::TEACHER ) {
            if ($user->user_role === UserRoles::STUDENT) {
                return redirect()->route('student.dashboard');
            }
            
            if ($user->user_role === UserRoles::ADMIN) {
                return redirect()->route('admin.dashboard');
            }
        }
        return $next($request);
    }
}
