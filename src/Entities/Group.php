<?php
namespace Kreezalid\Entities;

/**
 * Class Group
 * @package Kreezalid\Entities
 *
 * @OA\Schema()
 */

class Group
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
     * @OA\Property(type="string")
     * @var string
     */
    public $name;


    /**
     * @OA\Property(type="string")
     * @var string
     */
    public $alias;

}
