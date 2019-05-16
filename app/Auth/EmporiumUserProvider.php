<?php

namespace Emporium\Auth;

use Illuminate\Auth\DatabaseUserProvider;
use Illuminate\Contracts\Auth\Authenticatable as UserContract;
use Illuminate\Contracts\Hashing\Hasher as HasherContract;
use Illuminate\Database\ConnectionInterface;
use Illuminate\Support\Str;

class EmporiumUserProvider extends DatabaseUserProvider
{


    /**
     * The active database connection.
     *
     * @var \Illuminate\Database\ConnectionInterface
     */
    protected $conn;

    /**
     * The hasher implementation.
     *
     * @var \Illuminate\Contracts\Hashing\Hasher
     */
    protected $hasher;

    /**
     * The table containing the users.
     *
     * @var array
     */
    protected $tables;

    /**
     * Create a new database user provider.
     *
     * @param  \Illuminate\Database\ConnectionInterface  $conn
     * @param  \Illuminate\Contracts\Hashing\Hasher  $hasher
     * @param  string  $table
     * @return void
     */
    public function __construct(ConnectionInterface $conn, HasherContract $hasher, array $tables)
    {
        $this->conn = $conn;
        $this->tables = $tables;
        $this->hasher = $hasher;
    }

    /**
     * Retrieve a user by their unique identifier.
     *
     * @param  mixed  $identifier
     * @return \Illuminate\Contracts\Auth\Authenticatable|null
     */
    public function retrieveById($identifier)
    {
        $user = $this->conn->table($this->tables['id'])->find($identifier);

        //Se usuario existir, carregar dados extras
        if ( count($user) > 0 ) {

            //Carregar grupos
            $queryGroup = $this->conn->table($this->tables['group']); //agent_group
            $queryGroup->where('agent_key',$user->agent_key)->select('group_key');
            $userGroup = $queryGroup->get();
            if ( count($userGroup) > 0 ) {
                foreach ($userGroup as $group) {
                    $userGroups[] = $group->group_key;
                }
                $user->grupos = $userGroups;
            }

            //Carregar dados extras do usuario
            $queryUser = $this->conn->table($this->tables['comp']); //user
            $queryUser->where('agent_key',$user->agent_key)->select([
                'language',
                'usr_mode'
            ]);
            $userData = $queryUser->get();
            if ( count($userData) > 0 ) {
                $userExtra = (array) $userData;
                foreach ($userExtra as $userComp ) {
                    foreach ( $userComp as $fields ) {
                        $fields = (array) $fields;
                    }
                }
                $user->extra = $fields;
            }

        }
        return $this->getGenericUser($user);
    }

    /**
     * Retrieve a user by their unique identifier and "remember me" token.
     *
     * @param  mixed  $identifier
     * @param  string  $token
     * @return \Illuminate\Contracts\Auth\Authenticatable|null
     */
    public function retrieveByToken($identifier, $token)
    {
        $user = $this->getGenericUser(
            $this->conn->table($this->table)->find($identifier)
        );
        return $user && $user->getRememberToken() && hash_equals($user->getRememberToken(), $token)
            ? $user : null;
    }

    /**
     * Update the "remember me" token for the given user in storage.
     *
     * @param  \Illuminate\Contracts\Auth\Authenticatable  $user
     * @param  string  $token
     * @return void
     */
    public function updateRememberToken(UserContract $user, $token)
    {
        // Disable update remember token para logout
//        $this->conn->table($this->table)
//            ->where($user->getAuthIdentifierName(), $user->getAuthIdentifier())
//            ->update([$user->getRememberTokenName() => $token]);
    }

    /**
     * Retrieve a user by the given credentials.
     *
     * @param  array  $credentials
     * @return \Illuminate\Contracts\Auth\Authenticatable|null
     */
    public function retrieveByCredentials(array $credentials)
    {
        //Validacao das credenciais
        if (empty($credentials) ||
            (count($credentials) === 1 &&
                array_key_exists('password', $credentials))) {
            return;
        }

        // First we will add each credential element to the query as a where clause.
        // Then we can execute the query and, if we found a user, return it in a
        // generic "user" object that will be utilized by the Guard instances.
        $query = $this->conn->table($this->tables['id']); //Buscando em agent

        foreach ($credentials as $key => $value) {
            if (! Str::contains($key, 'password')) {
                $query->where($key, $value);
            }
        }

        //Aqui tentamos identificar o usuário somente se ele for usuário em 'agent'
        $query->where('agent_type', '2');


        //Juntando dados de agent com user
        $query->join('user', 'user.agent_key', '=', 'agent.agent_key');

        // Now we are ready to execute the query to see if we have an user matching
        // the given credentials. If not, we will just return nulls and indicate
        // that there are no matching users for these given credential arrays.
        $user = $query->first();

        //Transformar em array para facilitar a utilizacao
        $user = (array) $user;

        //Criptografando com hash a senha e listando grupos
        if ( count($user) > 0 ) { //Sucesso na busca
            $user['password'] = bcrypt($user['password']);
        }
        else { //Usuario nao encontrado
            $user['password'] = "";
        }

        return $this->getGenericUser($user);
    }

    /**
     * Validate a user against the given credentials.
     *
     * @param  \Illuminate\Contracts\Auth\Authenticatable  $user
     * @param  array  $credentials
     * @return bool
     */
    public function validateCredentials(UserContract $user, array $credentials)
    {
        return $this->hasher->check(
            $credentials['password'], $user->getAuthPassword()
        );
    }

}