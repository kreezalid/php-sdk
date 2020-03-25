<?php

namespace Kreezalid\Entity;

abstract class Entity
{
    /** @var int */
    public $id;

    /** @var string */
    public $object;

    public function __construct($data)
    {

    }
}