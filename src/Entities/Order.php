<?php
namespace Kreezalid\Entity;

class Order extends Entity
{
    public $number;
    public $order_number;
    public $amount;
    public $currency;
    public $amount_with_currency;
    public $status;
    public $supplier;
    public $customer;
    public $supplier_url;
    public $customer_url;
    public $checkout_at;
    public $payout;
}