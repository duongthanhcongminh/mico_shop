<?php

namespace App\Service\ProductService;

use App\Repositories\Product\ProdudctRepositoryInterface;
use App\Service\BaseService;

class ProductService extends BaseService implements ProductServiceInterface
{
    public $repository;

    public function __construct(ProdudctRepositoryInterface $produdctRepository)
    {
        $this->repository = $produdctRepository;
    }
}
