<?php

namespace App\Domain\User\Actions;

use App\Domain\User\DTO\Token;

class GetTokenAction
{

    public function get(): Token
    {
        return new Token;
    }
}
