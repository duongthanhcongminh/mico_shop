<?php

namespace App\Repositories\OrderDetail;

use App\Models\OrderDetail;
use App\Repositories\BaseRepository;

class OrderDetailRepository extends BaseRepository implements OrderDetailRepositoryInterface
{
    public function getModel(): string
    {
        return OrderDetail::class;
    }
}
