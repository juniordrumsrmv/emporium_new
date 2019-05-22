<?php

namespace Emporium\Emporium\Lib;

use Emporium\Model\MenuItem;
use Illuminate\Support\Facades\Request;
use PhpParser\Builder\ClassTest;
use Perm;
class Menu
{
    public $currentModel;

    public function __construct()
    {
        $this->currentModel = \Request::route()->parameter('module')?\Request::route()->parameter('module'):\Auth::user()->extra['usr_mode'];
    }

    public function mountMenuModule()
    {
        //Passo 1 - Criar o menu
        if ( !\Menu::exists('EmporiumTopMenu') ) {

            //Passo 2 - Buscar menus do banco
            $menuItem = MenuItem::where('menu_item_level', 0);

            //Wheres wheres
            $menuItem->where('menu_item_module', '<>','x_main');
            $menuItem->where('menu_item_status', '0');
            $menuItem->whereNotIn('menu_item_id', ['logout', 'help']);
            $menuItems = (array) $menuItem->get()->toArray();

            //Passo 3 - Criar o menu
            $topMenu = \Menu::make('EmporiumTopMenu', function(){});

            //Passo 4 - Rodar os menus/verificar permissao/ativo
            foreach ($menuItems as $menuList) {

                //Tem permissao?
                if ( !Perm::allow($menuList['menu_item_authorization_id'], 1) ) continue;

                //Se icone nao cadastrado
                if (empty($menuList['menu_item_img_path'])) $menuList['menu_item_img_path'] = "fa fa-list";

                //Montando o item do menu
                $topMenu->add($menuList['menu_item_text'],
                    [
                        'action' => ['EmporiumController@index', 'module' => $menuList['menu_item_id']],
                        'class' => "hover emporium-title ".$this->activeModule($menuList['menu_item_id'])
                    ]
                )->append('</span>')->prepend("<i class='menu-icon " . $menuList['menu_item_img_path'] . "'></i> <span class='menu-text'>")->after('<b class="arrow"></b>');
            }
        }

        //Passo 5 - Criar o submenu lateral
        if ( !\Menu::exists('EmporiumSideMenu') ) {

            //Passo 6 - Buscar menus do banco
            $menuSide = $this->loadSideMenu();

            //Passo 7 - Montar o menu
            if ( count($menuSide) > 0 ) {
                $this->mountSideMenu($menuSide);
            }
        }

        return false;
    }

    /**
     * Funcao para carregar menu lateral no banco e devolver array dimensional organizado
     */
    protected function loadSideMenu()
    {
        $sideMenu = [];

        //Passo 1 - Buscar todos menu level 1
        $menuItem = MenuItem::where('menu_item_level','>', 0);
        $menuItem->where('menu_item_module', $this->currentModel);
        $menuItem->where('menu_item_status', '0');
        $menuItems = (array) $menuItem->get()->toArray();

        //Passo 2 - Montar o objeto menu
        foreach ( $menuItems as $item ) {

            //Tem permissao?
            if ( !Perm::allow($item['menu_item_authorization_id'], 1) ) continue;

            if ( $item['menu_item_parent_id'] && $item['menu_item_level'] == 2 ) {
                $id = $item['menu_item_parent_id'];
                $sideMenu[$id]['sub'][$item['menu_item_id']] = [
                    'id' => $item['menu_item_id'],
                    'url' => $item['menu_item_href'],
                    'text' => $item['menu_item_text'],
                    'title' => $item['menu_item_title'],
                    'perm_id' => $item['menu_item_authorization_id']
                ];
            }
            else {
                $id = $item['menu_item_id'];
                $sideMenu[$id]['id'] = $item['menu_item_id'];
                $sideMenu[$id]['url'] = $item['menu_item_href'];
                $sideMenu[$id]['text'] = $item['menu_item_text'];
                $sideMenu[$id]['title'] = $item['menu_item_title'];
                $sideMenu[$id]['perm_id'] = $item['menu_item_authorization_id'];
                $sideMenu[$id]['sub'] = array();
            }
        }

        return $sideMenu;
    }

    protected function mountSideMenu(array $submenu)
    {
        //Passo 1 - Se existe array do menu
        if ( count($submenu) > 0 ) {

            //Passo 2 - Criar o menu
            $sideMenu = \Menu::make('EmporiumSideMenu', function(){});

            //Passo 2 - Rodando os itens do menu
            foreach ( $submenu as $menu ) {

                //Tem permissao?
                if ( !Perm::allow($menu['perm_id'], 1) ) continue;

                //Tamanho do texto
                $textLength = strlen($menu['text']);
                if ( $textLength < 21 ) $classText = "emporium-side-menu-normal";
//                elseif ( $textLength < 35 ) $classText = "emporium-side-menu-medium";
                else $classText = "emporium-side-menu-small";

                //Montando o item do menu
                if ( count($menu['sub']) ) {
                    $subItem = $sideMenu->add($menu['text'],
                        [
                            'href' => '#',
                            'class' => 'hover'
                        ]
                    );
                    $subItem->append('</span><b class="arrow fa fa-angle-right"></b>')
                        ->prepend("<i class='menu-icon glyphicon glyphicon-chevron-right '></i> <span class='menu-text $classText'>")
                        ->after('<b class="arrow"></b>')
                        ->id($menu['id'])
                    ;

                    //Montando submenus se existir
                    if ( count($menu['sub']) ) {
                        $subItem->link->attr([
                            'class'         => 'dropdown-toggle'
                        ]);
                        foreach ( $menu['sub'] as $idMenu ){

                            //Tem permissao?
                            if ( !Perm::allow($idMenu['perm_id'], 1) ) continue;

                            $subItem->add($idMenu['text'],
                                [
                                    'action' => ['EmporiumController@index', 'module' => $this->currentModel, 'view' => $idMenu['url']],
                                    'class' => 'emporium-submenu-text'
                                ]
                            )
                                ->id($idMenu['id']);
                            ;
//                            $subItem->attr(['class' => 'emporium_submenu_text']);
                        }

                    }

                }else {
                    $subItem = $sideMenu->add($menu['text'],
                        [
                            'action' => ['EmporiumController@index', 'module' => $this->currentModel, 'view' => $menu['url']],
                        ]
                    );
                    $subItem->append('</span>')
                        ->prepend("<i class='menu-icon glyphicon glyphicon-chevron-right '></i> <span class='menu-text $classText'>")
                        ->after('<b class="arrow"></b>')
                        ->id($menu['id'])
                    ;
                }

            }

        }
//        dd($sideMenu->all());
    }

    protected function activeModule($module){
        //Passo 1 - Verificar a URL
        $moduleUrl = $this->currentModel;

        //Passo 2 - Veerificando module
        if ( !$moduleUrl ) {
            dd(\Auth::user()->extra['usr_mode']);
            if ( \Auth::user()->extra['usr_mode'] == $module ) return "active";
        }
        else {
            if ( $moduleUrl == $module ) return "active";
        }

        return "";
    }

}