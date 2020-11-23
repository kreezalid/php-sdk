<?php
namespace Kreezalid\Entities;

/**
 * Class User
 * @package Kreezalid\Entities
 *
 * @OA\Schema()
 */

class User
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
    public $address_city;

    /**
     * @OA\Property(type="string")
     * @var string
     */
    public $address_country;

    /**
     * @OA\Property(type="string")
     * @var string
     */
    public $address_line1;

    /**
     * @OA\Property(type="string")
     * @var string
     */
    public $address_line2;

    /**
     * @OA\Property(type="string")
     * @var string
     */
    public $address_state;

    /**
     * @OA\Property(type="string")
     * @var string
     */
    public $address_zipcode;

    /**
     * @OA\Property(type="array")
     * @var array
     */
    public $attributes;

    /**
     * @OA\Property(type="string")
     * @var string
     */
    public $avatar;

    /**
     * @OA\Property(type="string")
     * @var string
     */
    public $business_name;

    /**
     * @OA\Property(type="bool")
     * @var bool
     */
    public $can_post_listing;

    /**
     * @OA\Property(type="string", format="date-time")
     * @var \DateTimeInterface
     */
    public $created;

    /**
     * @OA\Property(type="string")
     * @var string
     */
    public $email;

    /**
     * @OA\Property(type="string")
     * @var string
     */
    public $first_name;

    /**
     * @OA\Property(type="array", @OA\Items(ref="#/components/schemas/Group"))
     * @var array
     */
    public $group;

    /**
     * @OA\Property(type="string")
     * @var string
     */
    public $group_alias;

    /**
     * @OA\Property(type="string")
     * @var string
     */
    public $group_id;

    /**
     * @OA\Property(type="string")
     * @var string
     */
    public $group_name;

    /**
     * @OA\Property(type="string")
     *
     * @var string
     */
    public $lang;

    /**
     * @OA\Property(type="string")
     * @var string
     */
    public $last_name;

    /**
     * @OA\Property(type="string")
     * @var string
     */
    public $locale;

    /**
     * @OA\Property(type="integer")
     * @var int
     */
    public $note;
    /**
     * @OA\Property(type="string")
     * @var string
     */
    public $phone_number;

    /**
     * @OA\Property(type="string")
     * @var string
     */
    public $profile_url;

    /**
     * @OA\Property(type="string")
     * @var string
     */
    public $public_name;

    /**
     * @OA\Property(type="string", enum={"enabled", "disabled"}, description="enabled/disabled")
     * @var string
     */
    public $status;

    /**
     * @OA\Property(type="integer")
     * @var int
     */
    public $review_count;

    /**
     * @OA\Property(type="string")
     * @var string
     */
    public $timezone;

    /**
     * @OA\Property(type="string")
     * @var string
     */
    public $username;
}
