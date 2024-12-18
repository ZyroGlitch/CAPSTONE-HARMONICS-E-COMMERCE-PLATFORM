<?php

namespace App\Http\Middleware;

use Closure;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Symfony\Component\HttpFoundation\Response;

class CustomerMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        $userID = Session::get('userID');

        $user = User::where('userID',$userID)->first();

        switch($user->role){
            case 'Customer':
                return $next($request);
                break;
            default:
                // Return unauthorized if user is not found or not a customer
                abort(401);
        }
        
    }
}