<?php
namespace Kreezalid\Repositories;

class UsersRepository extends Repository
{

    public function all($params = [])
    {
        return $this->api->execute('GET', '/users.json', $params);
    }

    public function get($id, $params = [])
    {
        return $this->api->execute('GET', '/users/' . $id . '.json', $params);
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