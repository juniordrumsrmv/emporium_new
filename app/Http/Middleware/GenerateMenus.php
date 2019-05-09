<?php

namespace Emporium\Http\Middleware;

use Closure;
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
            $this->loadModuleMenu();
        }

        return $next($request);
    }

    public function loadModuleMenu(){
        //Passo 1 - Buscar menus do banco
        $menuItem = MenuItem::where('menu_item_level', 0);

        //Wheres wheres
        $menuItem->where('menu_item_module', '<>','x_main');
        $menuItem->where('menu_item_status', '0');
        $menuItem->whereNotIn('menu_item_id', ['logout']);
        $menuItems = (array) $menuItem->get()->toArray();
//        $menuItems = $menuItem->get();

        //Passo 2 - Criar o menu
        $topMenu = \Menu::make('EmporiumTopMenu', function(){});

        //Passo 3 - Rodar os menus e verificar permissao
        foreach ( $menuItems as $menuList ) {

            if ( empty($menuList['menu_item_img_path']) ) $menuList['menu_item_img_path'] = "fa fa-list";
            $topMenu->add($menuList['menu_item_text'],
                [
                    //'route' => 'home',
                    'class' => 'hover'
                ]
            )->append('</span>')->prepend("<i class='menu-icon ".$menuList['menu_item_img_path']."'></i> <span class='menu-text'>")->after('<b class="arrow"></b>');
        }

        return $topMenu;
    }
}
