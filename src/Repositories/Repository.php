<?php

namespace Kreezalid\Repositories;


use Kreezalid\ApiConnect;

class Repository
{

    /** @var ApiConnect */
    public $api;

    public function __construct()
    {
        $this->api = new ApiConnect();
    }

}