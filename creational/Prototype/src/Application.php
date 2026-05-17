<?php

declare(strict_types=1);

namespace KykyrudzaCoding\Prototype;

use KykyrudzaCoding\Prototype\Entities\Product;

class Application
{
    public function run(): string
    {
        $prototype = new Product('Laptop', 25000);

        $discounted = clone $prototype;
        $discounted->setPrice(22500);

        $premium = clone $prototype;
        $premium->setPrice(28000);

        return $prototype->getSummary() . PHP_EOL
            . $discounted->getSummary() . PHP_EOL
            . $premium->getSummary();
    }
}
