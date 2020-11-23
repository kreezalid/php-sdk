<?php
namespace Kreezalid\Entities;

/**
 * Class Shippings
 * @package Kreezalid\Entities
 *
 * @OA\Schema()
 */

class Shippings
{
    /**
     * @OA\Property(type="integer")
     * @var integer
     */
    public $id;

    /**
     * @OA\Property(type="number")
     * @var float
     */
    public $amount;

    /**
     * @OA\Property(type="string")
     * @var string
     */
    public $title;

    /**
     * @OA\Property(type="string")
     * @var string
     */
    public $tracking_number;

    /**
     * @OA\Property(type="string")
     * @var string
     */
    public $tracking_url;

    /**
     * @OA\Property(
     *     type="object",
     *     @OA\Property(property="id", type="integer"),
     *     @OA\Property(property="object", type="string"),
     *     @OA\Property(property="city", type="string"),
     *     @OA\Property(property="country", type="string"),
     *     @OA\Property(property="mobile", type="string"),
     *     @OA\Property(property="name", type="string", description="First name and last name"),
     *     @OA\Property(property="phone", type="string"),
     *     @OA\Property(property="postcode", type="string"),
     *     @OA\Property(property="state", type="string"),
     *     @OA\Property(property="street", type="string"),
     *     @OA\Property(property="street_option", type="string")
     * )
     * @var object
     */
    public $address;
}
