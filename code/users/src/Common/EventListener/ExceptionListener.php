<?php

namespace App\Common\EventListener;

use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpKernel\Event\ExceptionEvent;
use Symfony\Component\HttpKernel\Exception\HttpExceptionInterface;
use Symfony\Component\Serializer\SerializerInterface;

class ExceptionListener
{
    public function __construct(
        protected SerializerInterface $serializer
    ) {
    }

    public function onKernelException(ExceptionEvent $event): void
    {
        $exception = $event->getThrowable();
        $statusCode = $exception instanceof HttpExceptionInterface ? $exception->getStatusCode() : 500;

        $response = new JsonResponse(
            [
                'status' => 'failure',
                'message' => $exception->getMessage()
            ],
            $statusCode
        );

        $event->setResponse($response);
    }
}