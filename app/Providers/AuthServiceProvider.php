<?php

namespace Emporium\Providers;

use Emporium\Policies\MenuItemPolicy;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Emporium\Auth\EmporiumUserProvider;
use Emporium\Model\MenuItem;
use Laravel\Passport\Passport;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array
     */
    protected $policies = [
        'App\Model' => 'App\Policies\ModelPolicy',
        MenuItem::class => MenuItemPolicy::class,
        'Emporium\Model\MenuItem' => 'Emporium\Policies\MenuItemPolicy'
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        //Registro das politicas
        $this->registerPolicies();

        //Registros das rotas de passport para autenticacao
        Passport::routes();

        \Auth::provider('emporium-user', function ($app){

            //Recebendo conexao global através da FACADE de DB
            $connection = \DB::connection();

            //Tabelas envolvidas no login do Emporium
            $tables = [
                'id' => 'agent',
                'comp' => 'user',
                'group' => 'agent_group'
            ];

            return new EmporiumUserProvider($connection, $app['hash'], $tables);
        });
    }
}