<?php

namespace Emporium\Http\Middleware;

use Closure;
use Emporium\Emporium\Lib\Menu;
use Emporium\Model\MenuItem;
use Emporium\Model\User;

class GenerateMenus
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
        if(\Auth::check()){
            //Passo 1 -  Carregar menu dos modulos
            $menu = new Menu();
            $menu->mountMenuModule();

            //Passo 2 -  Carregar menu das telas/views
//            $menu->mountSubMenus();
        }

        return $next($request);
    }
}
