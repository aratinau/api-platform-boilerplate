<?php

namespace App\Tests\Step\Api;

use App\Tests\ApiTester;

class User extends ApiTester
{
    public function loginAsUser(\App\Entity\User $user = null)
    {
        if ($user === null) {
            $user = $this->have(\App\Entity\User::class);
        }

        $this->amLoggedInAs($user);

        return $user;
    }
}
