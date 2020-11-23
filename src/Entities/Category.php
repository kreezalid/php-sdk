<?php
namespace Kreezalid\Entities;

/**
 * Class Category
 * @package Kreezalid\Entities
 *
 * @OA\Schema()
 */

class Category
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
    public $title;

    /**
     * @OA\Property(type="string")
     * @var string
     */
    public $url;
}

