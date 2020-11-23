<?php
namespace Kreezalid\Entities;

/**
 * OrderItem Entity
 * Class OrderItem
 * @package Kreezalid\Entities
 *
 * @OA\Schema()
 */

class OrderItem
{

    /**
     * @OA\Property(type="string")
     * @var string
     */
    public $object;

    /**
     * @OA\Property(type="integer")
     * @var int
     */
    public $id;

    /**
     * @OA\Property(type="array", @OA\Items())
     * @var array
     */
    public $add_ons;

    /**
     * @OA\Property(type="int")
     * @var integer
     */
    public $amount;

    /**
     * @OA\Property(type="array", @OA\Items() )
     * @var array
     */
    public $configurable_options;

    /**
     * @OA\Property(type="string")
     * @var string
     */
    public $currency;

    /**
     * @OA\Property(type="array", @OA\Items())
     * @var array
     */
    public $downloadable_assets;

    /**
     * @OA\Property(type="object", ref="#/components/schemas/Listing")
     * @var object
     */
    public $listing;

    /**
     * @OA\Property(type="integer")
     * @var int
     */
    public $listing_id;

    /**
     * @OA\Property(type="string")
     * @var string
     */
    public $listing_image;

    /**
     * @OA\Property(type="string")
     * @var string
     */
    public $listing_sku;

    /**
     * @OA\Property(type="string")
     * @var string
     */
    public $listing_title;

    /**
     * @OA\Property(type="number")
     * @var float
     */
    public $listing_unit_price;

    /**
     * @OA\Property(type="number")
     * @var float
     */
    public $listing_weight;

    /**
     * @OA\Property(type="number")
     * @var float
     */
    public $qty;

    /**
     * @OA\Property(type="string")
     * @var string
     */
    public $token;


}
