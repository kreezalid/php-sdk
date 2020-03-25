<?php
namespace Kreezalid\Repositories;

use Kreezalid\Entity\User;

class UsersRepository extends Repository
{

    public function all($params = [])
    {
        $users =  $this->api->execute('GET', '/users.json', $params);
        $userObjects = [];
        if(!empty($users['users'])) {
            foreach ($users['users'] as $user) {
                $userObjects[] = $this->base->castResponseToEntity($user, User::class);
            }
        }
        return $userObjects;
    }

    public function get($id, $params = [])
    {
        $user = $this->api->execute('GET', '/users/' . $id . '.json', $params);
        if(!isset($user['user']) || empty($user['user'])) {
            return $user;
        }
        return $this->base->castResponseToEntity($user['user'], User::class);


    }

    public function create($params = [])
    {
        return $this->api->execute('POST', '/users.json', $params);
    }

    public function update($id, $params = [])
    {
        return $this->api->execute('PUT', '/users/' . $id . '.json', $params);
    }

    public function delete($id, $params = [])
    {
        return $this->api->execute('DELETE', '/users/' . $id . '.json', $params);
    }
}