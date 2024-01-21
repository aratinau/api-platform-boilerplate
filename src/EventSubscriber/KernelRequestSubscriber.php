<?php

namespace App\EventSubscriber;

use ApiPlatform\Symfony\EventListener\EventPriorities;
use Symfony\Component\EventDispatcher\EventSubscriberInterface;
use Symfony\Component\HttpKernel\Event\RequestEvent;
use Symfony\Component\HttpKernel\KernelEvents;

class KernelRequestSubscriber implements EventSubscriberInterface
{
    public function onKernelRequest(RequestEvent $event): void
    {
        // ...
    }

    public static function getSubscribedEvents(): array
    {
        return [
            KernelEvents::REQUEST => ['onKernelRequest', EventPriorities::PRE_READ],
//            KernelEvents::REQUEST => ['onKernelRequest', EventPriorities::POST_READ],
//            KernelEvents::REQUEST => ['onKernelRequest', EventPriorities::PRE_DESERIALIZE],
//            KernelEvents::REQUEST => ['onKernelRequest', EventPriorities::POST_DESERIALIZE],
        ];
    }
}
