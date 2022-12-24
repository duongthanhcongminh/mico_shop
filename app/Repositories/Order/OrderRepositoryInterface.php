<?php

namespace App\Repositories\Order;

use App\Models\Order;
use App\Repositories\RepositoryInterface;

interface OrderRepositoryInterface extends RepositoryInterface
{


    public function getOrderByUserId($userId);
}
