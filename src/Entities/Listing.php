<?php
namespace Kreezalid\Entities;

/**
 * Class Listing
 * @package Kreezalid\Entities
 *
 * @OA\Schema()
 */

class Listing
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
     * @OA\Property(type="array")
     * @var string
     */
    public $attributes;

    /**
     * @OA\Property(type="object", ref="#/components/schemas/Category")
     * @var Category
     */
    public $category;

    /**
     * @OA\Property(type="string")
     * @var string
     */
    public $city;

    /**
     * @OA\Property(type="string")
     * @var string
     */
    public $country;

    /**
     * @OA\Property(type="string")
     * @var string
     */
    public $cover;

    /**
     * @OA\Property(type="string")
     * @var string
     */
    public $currency;

    /**
     * @OA\Property(type="string", format="date-time")
     * @var \DateTimeInterface
     */
    public $date_online;

    /**
     * @OA\Property(type="string")
     * @var string
     */
    public $description;

    /**
     * @OA\Property(type="integer")
     * @var int
     */
    public $external_id;

    /**
     * @OA\Property(type="string")
     * @var string
     */
    public $formatted_price;

    /**
     * @OA\Property(type="number")
     * @var double
     */
    public $lat;

    /**
     * @OA\Property(type="number")
     * @var double
     */
    public $lng;

    /**
     * @OA\Property(type="string")
     * @var string
     */
    public $location;

    /**
     * @OA\Property(type="string")
     * @var string
     */
    public $medias;

    /**
     * @OA\Property(type="number")
     * @var double
     */
    public $price;

    /**
     * @OA\Property(type="integer")
     * @var int
     */
    public $price_unit;

    /**
     * @OA\Property(type="string")
     * @var string
     */
    public $price_with_currency;

    /**
     * @OA\Property(type="integer")
     * @var int
     */
    public $quantity;

    /**
     * @OA\Property(type="string")
     * @var string
     */
    public $quantity_selector;

    /**
     * @OA\Property(type="integer")
     * @var int
     */
    public $requires_shipping;

    /**
     * @OA\Property(type="string")
     * @var string
     */
    public $state;

    /**
     * @OA\Property(type="string")
     * @var string
     */
    public $status;

    /**
     * @OA\Property(type="object", ref="#/components/schemas/User")
     * @var object
     */
    public $user;

    /**
     * @OA\Property(type="object", ref="#/components/schemas/User")
     * @var object
     */
    public $supplier;

    /**
     * @OA\Property(type="string")
     * @var string
     */
    public $title;

    /**
     * @OA\Property(type="string")
     * @var string
     */
    public $url;

    /**
     * @OA\Property(type="string", format="date-time")
     * @var \DateTimeInterface
     */
    public $valid_until;

    /**
     * @OA\Property(type="number")
     * @var double
     */
    public $weight;

}

