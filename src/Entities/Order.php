<?php
namespace Kreezalid\Entities;
/**
 * Class Order
 * @package Kreezalid\Entities
 *
 * @OA\Schema()
 */
class Order
{
    /**
     * @OA\Property(type="integer")
     * @var int
     */
    public $id;

    /**
     * @OA\Property(type="string")
     * @var string
     */
    public $object;

    /**
     * @OA\Property(type="string")
     * @var string
     */
    public $number;

    /**
     * @OA\Property(type="string")
     * @var string
     */
    public $order_number;

    /**
     * @OA\Property(type="number")
     * @var double
     */
    public $amount;

    /**
     * @OA\Property(type="string")
     * @var string
     */
    public $currency;

    /**
     * @OA\Property(type="number")
     * @var double
     */
    public $amount_with_currency;

    /**
     * @OA\Property(type="string")
     * @var string
     */
    public $status;
    
    /**
     * @OA\Property(type="string")
     * @var string
     */
    public $fulfillment_status;

    /**
     * @OA\Property(type="object", ref="#/components/schemas/User")
     * @var User
     */
    public $supplier;

    /**
     * @OA\Property(type="object", ref="#/components/schemas/User")
     * @var User
     */
    public $customer;

    /**
     * @OA\Property(type="string")
     * @var string
     */
    public $customer_url;

    /**
     * @OA\Property(type="string")
     * @var string
     */
    public $supplier_url;

    /**
     * @OA\Property(type="string", format="date-time")
     * @var \DateTimeInterface
     */
    public $checkout_at;

    /**
     * @OA\Property(type="object", ref="#/components/schemas/Shippings")
     * @var object
     */
    public $shippings;

    /**
     * @OA\Property(type="object", ref="#/components/schemas/Payout")
     * @var object
     */
    public $payout;

    /**
     * @OA\Property(type="array", @OA\Items(ref="#/components/schemas/SmartFees"))
     * @var array
     */
    public $smart_fees;


    /**
     * @OA\Property(type="array", @OA\Items(ref="#/components/schemas/OrderItem"))
     * @var array
     */
    public $order_items;
}
