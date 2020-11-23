<?php
namespace Kreezalid\Entities;

/**
 * Class SmartFees
 * @package Kreezalid\Entities
 *
 * @OA\Schema()
 */

class SmartFees
{
    /**
     * @OA\Property(type="string")
     * @var string
     */
    public $fee_target      ;

    /**
     * @OA\Property(type="string")
     * @var string
     */
    public $rule_title;

    /**
     * @OA\Property(type="string")
     * @var string
     */
    public $fee_amount;

}
