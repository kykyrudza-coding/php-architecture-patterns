<?php

declare(strict_types=1);

namespace KykyrudzaCoding\Observer\Subjects;

use KykyrudzaCoding\Observer\Contracts\ObserverInterface;

class Order
{
    private array $observers = [];
    private string $status;

    public function attach(ObserverInterface $observer): void
    {
        $this->observers[] = $observer;
    }

    public function detach(ObserverInterface $observer): void
    {
        $this->observers = array_filter(
            $this->observers,
            fn ($obs) => $obs !== $observer
        );
    }

    public function setStatus(string $status): void
    {
        $this->status = $status;
        $this->notify();
    }

    private function notify(): void
    {
        foreach ($this->observers as $observer) {
            $observer->update($this->status);
        }
    }
}