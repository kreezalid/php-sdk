<?php
namespace Kreezalid\Entities;

/**
 * Class AddOn
 * @package Kreezalid\Entities
 *
 * @OA\Schema()
 * Addon Entity
 */

class AddOn
{
    /**
     * @OA\Property(type="integer")
     * @var int
     */
    public $id;

    /**
     * @OA\Property(type="integer")
     * @var int
     */
    public $addon_id;

    /**
     * @OA\Property(type="number")
     * @var float
     */
    public $addon_title;

    /**
     * @OA\Property(type="number")
     * @var float
     */
    public $addon_qty;

    /**
     * @OA\Property(type="number")
     * @var float
     */
    public $addon_unit_price;

    /**
     * @OA\Property(type="integer")
     * @var int
     */
    public $app_id;

    /**
     * @OA\Property(type="string", format="date-time")
     * @var \DateTimeInterface
     */
    public $created;

    /**
     * @OA\Property(type="string", format="date-time")
     * @var \DateTimeInterface
     */
    public $deleted_at;

    /**
     * @OA\Property(type="integer")
     * @var int
     */
    public $item_id;

    /**
     * @OA\Property(type="object", ref="#/components/schemas/Listing")
     * @var Listing
     */
    public $listing;

    /**
     * @OA\Property(type="integer")
     * @var int
     */
    public $listing_id;

    /**
     * @OA\Property(type="string", format="date-time")
     * @var \DateTimeInterface
     */
    public $modified;

    /**
     * @OA\Property(type="integer")
     * @var int
     */
    public $old_id;

    /**
     * @OA\Property(type="object", ref="#/components/schemas/Order")
     * @var Order
     */
    public $order;

    /**
     * @OA\Property(type="integer")
     * @var int
     */
    public $order_id;

    /**
     * @OA\Property(type="integer")
     * @var int
     */
    public $sort_priority;
}
