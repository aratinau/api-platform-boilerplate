<?php

namespace App\Tests\users;

use App\Factory\UserFactory;
use App\Tests\Step\Api\Anonymous;

class GetUsersCest
{
    /**
     * @param Anonymous $I
     * @return void
     */
    public function tryToGetAllUsersAsAnonymous(Anonymous $I)
    {
        UserFactory::createMany(30);

        $I->am('an anonymous user');
        $I->wantTo('list user');

        $I->haveHttpHeader("accept", "application/ld+json");
        $I->haveHttpHeader("Content-Type", "application/json");
        $I->sendGet('users');

        $I->seeResponseCodeIs(\Codeception\Util\HttpCode::OK);
        $I->seeResponseIsJson();
        $I->seeResponseContainsJson([
            "@context" => "/api/contexts/User",
            "@type" => "hydra:Collection",
            "hydra:totalItems" => 30
        ]);
    }
}
