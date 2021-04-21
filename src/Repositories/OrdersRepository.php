<?php
namespace Kreezalid\Repositories;

use Kreezalid\Entities\Order;
use Kreezalid\Libraries\Exception;

class OrdersRepository extends Repository
{

    /**
     * @var MetafieldsRepository
     */
    public $Metafields;

    public function __construct($api)
    {
        $this->Metafields = new MetafieldsRepository($api, 'orders');

        parent::__construct($api);
    }

    public function all($params = [])
    {
        $orders = $this->api->execute('GET', '/orders.json', $params);

        if(!isset($orders['orders']) || empty($orders['orders'])) {
            return $orders;
        }

        $orderObjects = [];
        foreach ($orders['orders'] as $order) {
            $orderObjects[] = $this->base->castResponseToEntity($order, Order::class);
        }

        return $orderObjects;
    }

    public function get($id, $params = [])
    {
        if(empty($id)) {
            throw new Exception('Missing or undefined param ID');
        }
        if(!is_scalar($id)) {
            throw new Exception('Wrong ID:' . $id);
        }

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