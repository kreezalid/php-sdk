<?php
namespace Kreezalid\Entities;

/**
 * Class Metafield
 * @package Kreezalid\Entities
 *
 * @OA\Schema()
 * Metafield Entity
 */

class Metafield
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
    public $title;

    /**
     * @OA\Property(type="string")
     * @var string
     */
    public $value;

    /**
     * @OA\Property(type="string")
     * @var string
     */
    public $description;

    /**
     * @OA\Property(type="string")
     * @var string
     */
    public $value_type;

    /**
     * @OA\Property(type="string")
     * @var string
     */
    public $namespace;
    /**
     * @OA\Property(type="integer")
     * @var integer
     */
    public $owner_id;
    /**
     * @OA\Property(type="string")
     * @var string
     */
    public $owner_resource;


}
