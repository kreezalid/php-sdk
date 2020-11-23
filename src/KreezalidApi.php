<?php
namespace Kreezalid;

use Kreezalid\Repositories\ListingsRepository;
use Kreezalid\Repositories\OrdersRepository;
use Kreezalid\Repositories\UsersRepository;

class KreezalidApi
{
    /** @var UsersRepository */
    public $Users;

    /** @var OrdersRepository */
    public $Orders;

    /** @var ListingsRepository */
    public $Listings;

    /** @var ApiConnect */
    public $Config;

    public function __construct()
    {
        $this->Config   = new ApiConnect();

        $this->Users    = new UsersRepository($this->Config);
        $this->Orders   = new OrdersRepository($this->Config);
        $this->Listings = new ListingsRepository($this->Config);
    }
}

