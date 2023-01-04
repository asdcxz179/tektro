<?php

namespace App\Http\Middleware\Front;

use Closure;
use Illuminate\Http\Request;
use App\Models\ProductBrand;
use App\Models\About;
use App\Models\Community;
use App\Models\ProductKeyword;

class Init
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
        \View::share('lang',$request->lang);
        $brands = ProductBrand::where([
            'status'    =>  1,
        ])->orderby('sort','asc')->get();
        \View::share('brands',$brands);
        $abouts = About::where('status',1)->orderby('sort','asc')->get();
        \View::share('abouts',$abouts);
        $community = Community::first();
        \View::share('community',$community);
        $keywords = ProductKeyword::where('status',1)->orderby('sort','asc')->get();
        \View::share('keywords',$keywords);
        return $next($request);
    }
}
