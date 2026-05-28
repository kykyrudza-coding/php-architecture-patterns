<?php

declare(strict_types=1);

namespace KykyrudzaCoding\UnitOfWork\Repositories;

use KykyrudzaCoding\UnitOfWork\Entities\Product;

class ProductRepository
{
    public function insert(Product $product): string
    {
        return "Inserted product {$product->getName()}";
    }

    public function update(Product $product): string
    {
        return "Updated product {$product->getName()}";
    }

    public function delete(Product $product): string
    {
        return "Deleted product {$product->getName()}";
    }
}
