<?php

namespace App\EventSubscriber;

use ApiPlatform\Symfony\EventListener\EventPriorities;
use App\Entity\Book;
use Symfony\Component\EventDispatcher\EventSubscriberInterface;
use Symfony\Component\HttpKernel\Event\ViewEvent;
use Symfony\Component\HttpKernel\KernelEvents;
use Symfony\Component\Mailer\MailerInterface;
use Symfony\Component\Mime\Email;

final class KernelViewSubscriber implements EventSubscriberInterface
{

    public function onKernelView(ViewEvent $event): void
    {
        // ...
    }

    public static function getSubscribedEvents()
    {
        return [
            KernelEvents::VIEW => ['onKernelView', EventPriorities::PRE_VALIDATE],
//            KernelEvents::VIEW => ['onKernelView', EventPriorities::POST_VALIDATE],
//            KernelEvents::VIEW => ['onKernelView', EventPriorities::PRE_WRITE],
//            KernelEvents::VIEW => ['onKernelView', EventPriorities::POST_WRITE],
//            KernelEvents::VIEW => ['onKernelView', EventPriorities::PRE_SERIALIZE],
//            KernelEvents::VIEW => ['onKernelView', EventPriorities::POST_SERIALIZE],
//            KernelEvents::VIEW => ['onKernelView', EventPriorities::PRE_RESPOND],
//            KernelEvents::VIEW => ['onKernelView', EventPriorities::POST_RESPOND],
        ];
    }
}
