<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class IsAdmin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    // public function handle(Request $request, Closure $next)
    // {
    //     if(auth()->user()->isadmin == 1){}
    //     return $next($request);
    // }


    public function handle(Request $request, Closure $next)
        {
            // ตรวจสอบว่ามีผู้ใช้เข้าสู่ระบบหรือไม่
            if(auth()->check()) {
                // ถ้ามีผู้ใช้เข้าสู่ระบบ ตรวจสอบว่าเป็นแอดมินหรือไม่
                if(auth()->user()->IsAdmin == 1){
                    return redirect()->route('login')->with('error', 'กรุณาเข้าสู่ระบบก่อน');
                }
            } else {
                // หากไม่มีผู้ใช้เข้าสู่ระบบ ให้กลับไปหน้าเดิม
                return redirect()->back()->with('error', 'กรุณาเข้าสู่ระบบก่อน');
            }
            
            return $next($request);
        }
        
}
