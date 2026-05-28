<?php

declare(strict_types=1);

namespace KykyrudzaCoding\UnitOfWork;

use KykyrudzaCoding\UnitOfWork\Entities\Product;
use KykyrudzaCoding\UnitOfWork\Repositories\ProductRepository;
use KykyrudzaCoding\UnitOfWork\UnitOfWork\UnitOfWork;

class Application
{
    public function run(): string
    {
        $unitOfWork = new UnitOfWork(new ProductRepository());

        $unitOfWork->registerNew(new Product(1, 'Laptop'));
        $unitOfWork->registerDirty(new Product(2, 'Mouse'));
        $unitOfWork->registerRemoved(new Product(3, 'Keyboard'));

        return $unitOfWork->commit();
    }
}
