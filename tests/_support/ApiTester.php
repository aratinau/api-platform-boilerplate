<?php

namespace App\Tests;

/**
 * Inherited Methods
 * @method void wantToTest($text)
 * @method void wantTo($text)
 * @method void execute($callable)
 * @method void expectTo($prediction)
 * @method void expect($prediction)
 * @method void amGoingTo($argumentation)
 * @method void am($role)
 * @method void lookForwardTo($achieveValue)
 * @method void comment($description)
 * @method void pause()
 *
 * @SuppressWarnings(PHPMD)
*/
class ApiTester extends \Codeception\Actor
{
    use _generated\ApiTesterActions;

    /**
     * Define custom actions here
     */
    /**
     * Define custom actions here
     */

    public function seeResponseJsonWithViolations($violations)
    {
        $messages = $this->grabDataFromResponseByJsonPath('$.violations.*.message');

        foreach ($violations as $violation) {
            $this->assertContains($violation, $messages);
        }
    }

    public function seeResponseJsonWithExceptedViolations($exceptedViolations)
    {
        $violations = $this->grabDataFromResponseByJsonPath('$.violations.*');

        foreach ($exceptedViolations as $exceptedViolation) {
            $index = $this->searchByPropertyPath($exceptedViolation['propertyPath'], $violations);
            $this->assertNotNull($index, 'The propertyPath "'.$exceptedViolation['propertyPath'].'"  was not found in the violations');

            $this->assertEquals($exceptedViolation['propertyPath'], $violations[$index]['propertyPath']);
        }

        foreach ($exceptedViolations as $exceptedViolation) {
            foreach ($violations as $violation) {
                if ($violation["propertyPath"] === $exceptedViolation["propertyPath"]) {
                    $this->assertEquals($violation["propertyPath"], $exceptedViolation["propertyPath"]);
                    $this->assertEquals($exceptedViolation["message"], $violation["message"]);
                }
            }
        }
        $this->assertEquals(count($exceptedViolations), count($violations));
    }

    private function searchByPropertyPath($id, $array) {
        foreach ($array as $key => $val) {
            if ($val['propertyPath'] === $id) {
                return $key;
            }
        }
        return null;
    }

}
