<?php
namespace Kreezalid\Repositories;

class OrderRepository extends Repository
{

    public function all($params = [])
    {
        return $this->api->execute('GET', '/orders.json', $params);
    }

    public function get($id, $params = [])
    {
        return $this->api->execute('GET', '/orders/' . $id . '.json', $params);
    }

    public function create($params = [])
    {
        return $this->api->execute('POST', '/orders.json', $params);
    }

    public function update($id, $params = [])
    {
        return $this->api->execute('PUT', '/orders/' . $id . '.json', $params);
    }

    public function delete($id, $params = [])
    {
        return $this->api->execute('DELETE', '/orders/' . $id . '.json', $params);
    }
}