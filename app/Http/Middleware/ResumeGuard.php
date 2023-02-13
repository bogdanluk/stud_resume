<?php

namespace App\Http\Middleware;

use App\Models\Resume;
use Closure;
use Illuminate\Http\Request;

class ResumeGuard
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
        $id = substr($request->decodedPath(), -1);
        $resume = Resume::find($id);
        if($resume){
            if($resume->user_id == $request->user()->id){
                return $next($request);
            }
        }
        return redirect()->route('404');
    }
}
