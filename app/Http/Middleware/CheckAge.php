<?php

namespace App\Http\Middleware;

use Carbon\Carbon;
use Closure;
use Illuminate\Support\Facades\Redirect;

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
        /* Normal Login Validation */
        if ($request['dob']) {
            $dob = Carbon::createFromFormat('d/m/Y', $request['dob']);
            $today = Carbon::today();

            $diff_in_days = $today->diffInYears($dob);
        } 
        
        /* Guest Login Validation */
        if (isset($request['year_digit_1']) && isset($request['year_digit_2']) && isset($request['year_digit_3']) && isset($request['year_digit_4'])) {
            $dob = $request['year_digit_1'] . '' . $request['year_digit_2'] . '' . $request['year_digit_3'] . '' . $request['year_digit_4'];
            $today = Carbon::now();

            $dob = (int) $dob;
            $current_year = (int) $today->year;
            $diff_in_days = $current_year - $dob;
        } 
       
        if ($diff_in_days < 18) {                       
            return redirect('redirecttoerror');            
        }

        return $next($request);
    }
}
