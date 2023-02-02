<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cookie;

class shoppingCart
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
        // $cookie = $request->hasCookie('shopping_cart');
        $cookie = Cookie::get('shopping_cart');
        if(!$cookie) { 
            return redirect(route('store'));  
        }
        elseif($cookie)
        {
            $cookie_data = stripslashes($cookie);
            $cart_data = json_decode($cookie_data, true);
            if($cart_data == null)
            {
                return redirect(route('cart'));
            }
        }
        return $next($request); 
        
    }
}
