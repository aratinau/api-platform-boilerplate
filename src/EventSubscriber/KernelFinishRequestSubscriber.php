<?php

namespace App\EventSubscriber;

use Symfony\Component\EventDispatcher\EventSubscriberInterface;
use Symfony\Component\HttpKernel\Event\FinishRequestEvent;
use Symfony\Component\HttpKernel\KernelEvents;

class KernelFinishRequestSubscriber implements EventSubscriberInterface
{
    public function onKernelFinishRequest(FinishRequestEvent $event): void
    {
        // ...
    }

    public static function getSubscribedEvents(): array
    {
        return [
            KernelEvents::FINISH_REQUEST => 'onKernelFinishRequest',
        ];
    }
}
