<?php

namespace Emporium\Emporium\Lib;

use Emporium\Model\MenuItem;
use Illuminate\Support\Facades\Request;

class Menu
{

    protected $current;

    public function __construct()
    {
        $this->current = Request::url();
    }

    public function mountMenuModule()
    {
        //Passo 1 - Buscar menus do banco
        $menuItem = MenuItem::where('menu_item_level', 0);

        //Wheres wheres
        $menuItem->where('menu_item_module', '<>','x_main');
        $menuItem->where('menu_item_status', '0');
        $menuItem->whereNotIn('menu_item_id', ['logout']);
        $menuItems = (array) $menuItem->get()->toArray();
        dd($menuItems);
    }

}