<?php

declare(strict_types=1);

namespace App\Application\User\Controller;

use App\Application\User\Request\CreateUserDto;
use App\Application\User\UseCase\CreateUserUseCaseInterface;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpKernel\Attribute\MapRequestPayload;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/users', name: 'create_user', methods: ['POST'])]
class CreateUserController
{
    public function __construct(
        protected CreateUserUseCaseInterface $createUserUseCase,
    ) {
    }

    public function __invoke(
        #[MapRequestPayload] CreateUserDto $createUserDto
    ): JsonResponse {
        $response = [
            'status' => 'success',
        ];

        try {
            ($this->createUserUseCase)($createUserDto);
        } catch (\Exception $e) {
            $response['status'] = 'failure';
            $response['message'] = $e->getMessage();
        }

        return new JsonResponse($response);
    }
}
