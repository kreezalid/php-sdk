<?php
namespace Kreezalid\Repositories;

use Kreezalid\Entity\Order;

class OrdersRepository extends Repository
{

    public function all($params = [])
    {
        $orders =  $this->api->execute('GET', '/orders.json', $params);
        $orderObjects = [];
        if(!empty($orders['orders'])) {
            foreach ($orders['orders'] as $order) {
                $orderObjects[] = $this->base->castResponseToEntity($order, Order::class);
            }
        }
        return $orderObjects;
    }

    public function get($id, $params = [])
    {
        $order = $this->api->execute('GET', '/orders/' . $id . '.json', $params);
        if(!isset($order['order']) || empty($order['order'])) {
            return $order;
        }
        return $this->base->castResponseToEntity($order['order'], Order::class);


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