<?php

namespace App\Http\Middleware;

use Closure;
use Carbon\Carbon;


class CheckAge
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        $diff_in_days = 0;
        if ($request['dob']) {
            $dob = Carbon::createFromFormat('Y-m-d', $request['dob']);
            $today = Carbon::today();

            $diff_in_days = $today->diffInYears($dob);
        }

        if ($diff_in_days < 18 && $diff_in_days != 0) {
            echo 'You are not allowed for the registration as your age is under 18.<br>Please go back.';
            exit;
        }
        return $next($request);
    }
}
