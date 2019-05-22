<?php

use Emporium\Model\Agent;
use Emporium\Model\AgentGroup;
use Emporium\Model\User;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Criar os grupos
        Agent::create(
            [
                'agent_key' => 1,
                'agent_type' => 1,
                'id' => 'CONECTO',
                'name' => 'Suporte Conecto',
                'remark' => 'Distribuição',
                'sub_type' => 0,
                'pos_send_group' => 0
            ]
        );
        Agent::create(
            [
                'agent_key' => 2,
                'agent_type' => 1,
                'id' => 'ADMINISTR',
                'name' => 'Administradores de Moderator',
                'remark' => 'Distribuição',
                'sub_type' => 0,
                'pos_send_group' => 0
            ]
        );
        Agent::create(
            [
                'agent_key' => 3,
                'agent_type' => 1,
                'id' => 'FISCAIS',
                'name' => 'Fiscais de Caixa',
                'remark' => 'Distribuição',
                'sub_type' => 0,
                'pos_send_group' => 0
            ]
        );
        Agent::create(
            [
                'agent_key' => 4,
                'agent_type' => 1,
                'id' => 'CAIXAS',
                'name' => 'Operadores de Caixa',
                'remark' => 'Distribuição',
                'sub_type' => 0,
                'pos_send_group' => 0
            ]
        );
        Agent::create(
            [
                'agent_key' => 5,
                'agent_type' => 1,
                'id' => 'GERENCIA',
                'name' => 'Usuários de Moderator',
                'remark' => 'Distribuição',
                'sub_type' => 0,
                'pos_send_group' => 0
            ]
        );
        Agent::create(
            [
                'agent_key' => 6,
                'agent_type' => 1,
                'id' => 'VENDEDORES',
                'name' => 'Vendedores',
                'remark' => 'Distribuição',
                'sub_type' => 0,
                'pos_send_group' => 0
            ]
        );
        Agent::create(
            [
                'agent_key' => 7,
                'agent_type' => 1,
                'id' => 'WEBSERVICE',
                'name' => 'Usuários de API',
                'remark' => 'Distribuição',
                'sub_type' => 0,
                'pos_send_group' => 0
            ]
        );

        //Criar usuários
        Agent::create(
            [
                'agent_key' => 10,
                'agent_type' => 2,
                'id' => 'adm',
                'name' => 'Administrador'
            ]
        );
        Agent::create(
            [
                'agent_key' => 11,
                'agent_type' => 2,
                'id' => 'api',
                'name' => 'Integrador API'
            ]
        );
        Agent::create(
            [
                'agent_key' => 12,
                'agent_type' => 2,
                'id' => '1190',
                'name' => 'Bianou Oliveira'
            ]
        );

        User::create(
            [
                'agent_key' => 10,
                'alternate_id' => 'adm',
                'password' => 'adm',
                'language' => 'br',
                'usr_mode' => 'amount',
                'store_key' => 0
            ]
        );
        User::create(
            [
                'agent_key' => 11,
                'alternate_id' => 'api',
                'password' => 'api',
                'language' => 'br',
                'usr_mode' => 'amount',
                'store_key' => 0
            ]
        );
        User::create(
            [
                'agent_key' => 12,
                'alternate_id' => '1190',
                'password' => '1190',
                'language' => 'br',
                'usr_mode' => 'plu',
                'store_key' => 0
            ]
        );


        //Ligando usuários a grupo
        AgentGroup::create(
            [
                'group_key' => 2,
                'agent_key' => 10
            ]
        );
        AgentGroup::create(
            [
                'group_key' => 7,
                'agent_key' => 11
            ]
        );
        AgentGroup::create(
            [
                'group_key' => 2,
                'agent_key' => 12
            ]
        );

    }

}
