<?php
/**
 * User: boliveira
 * Date: 16/05/19
 * Time: 18:16
 * Classe para controle de permissao
 */

namespace Emporium\Emporium\Lib;


class Permission
{
    /**
     * Permite ou nao acesso via entidade e ação
     * @var String $entity
     * @var String $action
     * @return boolean
     */
    public static function allow($entity, $action) {

        //vars
        $permited = false;

        //Recebendo as permissoes do usuario logado
        $userPerms = \Auth::user()->permissions;

        //Verificando a permissao
        $entity = strtoupper($entity);
        if ( array_key_exists($entity, $userPerms) )
            if ( array_key_exists($action, $userPerms[$entity]) )
                if ( $userPerms[$entity][$action] ) $permited = true;

        return $permited;
    }

}