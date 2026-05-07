<?php

declare(strict_types=1);

namespace KykyrudzaCoding\EventDispatcher\Dispatcher;

use KykyrudzaCoding\EventDispatcher\Contracts\ListenerInterface;

class EventDispatcher
{
    /**
     * @var array<class-string, ListenerInterface[]>
     */
    private array $listeners = [];

    public function listen(string $eventClass, ListenerInterface $listener): void
    {
        $this->listeners[$eventClass][] = $listener;
    }

    public function dispatch(object $event): array
    {
        $eventClass = $event::class;
        $responses = [];

        foreach ($this->listeners[$eventClass] ?? [] as $listener) {
            $responses[] = $listener->handle($event);
        }

        return $responses;
    }
}