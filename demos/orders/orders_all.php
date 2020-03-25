<?php
/**
 * Get a list of all orders
 */
error_reporting( E_ALL );

require_once '../../vendor/autoload.php';

use Kreezalid\Repositories\OrdersRepository;

$ordersRepository = new OrdersRepository();

$orders = $ordersRepository->all();

echo '<pre>';
var_dump($orders);
echo '</pre>';

