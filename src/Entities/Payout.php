<?php
namespace Kreezalid\Entities;

/**
 * Class Payout
 * @package Kreezalid\Entities
 *
 * @OA\Schema()
 */

class Payout
{
    /**
     * @OA\Property(type="string")
     * @var string
     */
    public $status;

    /**
     * @OA\Property(type="integer")
     * @var int
     */
    public $amount;

    /**
     * @OA\Property(type="string")
     * @var string
     */
    public $amount_with_currency;


    /**
     * @OA\Property(type="string", format="tate-time")
     * @var string
     */
    public $date;

}
