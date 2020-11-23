<?php

namespace Kreezalid\Repositories;


use Kreezalid\ApiConnect;
use Kreezalid\Libraries\ApiBase;

class Repository
{

    /** @var ApiConnect */
    public $api;

    /** @var ApiBase */
    public $base;

    public function __construct($api)
    {
        $this->api = $api;
        $this->base = new ApiBase();
    }

}