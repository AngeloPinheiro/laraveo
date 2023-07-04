<?php

namespace App\Domain\User\Actions;

use App\Domain\User\DTO\Token;

readonly class LoginAction
{
    public function __construct(
        private GetTokenAction     $getToken,
        private PersistTokenAction $persistToken
    ) {
    }

    public function login(): Token
    {
        $token = $this->getToken->get();
        $this->persistToken->persist($token);

        return $token;
    }
}
