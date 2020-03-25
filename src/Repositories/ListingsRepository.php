<?php
namespace Kreezalid\Repositories;

class ListingsRepository extends Repository
{

    public function all($params = [])
    {
        return $this->api->execute('GET', '/listings.json', $params);
    }

    public function get($id, $params = [])
    {
        return $this->api->execute('GET', '/listings/' . $id . '.json', $params);
    }

    public function create($params = [])
    {
        return $this->api->execute('POST', '/listings.json', $params);
    }

    public function update($id, $params = [])
    {
        return $this->api->execute('PUT', '/listings/' . $id . '.json', $params);
    }

    public function delete($id, $params = [])
    {
        return $this->api->execute('DELETE', '/listings/' . $id . '.json', $params);
    }
}