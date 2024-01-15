<?php

namespace App\Tests\users;

use App\Tests\Step\Api\Anonymous;

class GetUsersCest
{
    /**
     * @param Anonymous $I
     * @return void
     */
    public function tryToGetAllUsersAsAnonymous(Anonymous $I)
    {
        $I->am('an anonymous user');
        $I->wantTo('list user');

        $I->haveHttpHeader("accept", "application/ld+json");
        $I->haveHttpHeader("Content-Type", "application/json");
        $I->sendGet('users');

        $I->seeResponseCodeIs(\Codeception\Util\HttpCode::UNAUTHORIZED);
        $I->seeResponseIsJson();
        $I->seeResponseContainsJson([
            "@context" => "/api/contexts/Error",
            "@type" => "hydra:Error",
            "hydra:title" => "An error occurred",
            "hydra:description" => "Full authentication is required to access this resource."
        ]);
    }
}
