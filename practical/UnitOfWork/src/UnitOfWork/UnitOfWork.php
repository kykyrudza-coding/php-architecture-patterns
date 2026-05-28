<?php

declare(strict_types=1);

namespace KykyrudzaCoding\UnitOfWork\UnitOfWork;

use KykyrudzaCoding\UnitOfWork\Entities\Product;
use KykyrudzaCoding\UnitOfWork\Repositories\ProductRepository;

class UnitOfWork
{
    private array $new;
    private array $dirty;
    private array $removed;

    public function __construct(
        private ProductRepository $repository
    ) {
        $this->new = [];
        $this->dirty = [];
        $this->removed = [];
    }

    public function registerNew(Product $product): void
    {
        $this->new[] = $product;
    }

    public function registerDirty(Product $product): void
    {
        $this->dirty[] = $product;
    }

    public function registerRemoved(Product $product): void
    {
        $this->removed[] = $product;
    }

    public function commit(): string
    {
        $messages = [];

        foreach ($this->new as $product) {
            $messages[] = $this->repository->insert($product);
        }

        foreach ($this->dirty as $product) {
            $messages[] = $this->repository->update($product);
        }

        foreach ($this->removed as $product) {
            $messages[] = $this->repository->delete($product);
        }

        return implode(PHP_EOL, $messages);
    }
}
