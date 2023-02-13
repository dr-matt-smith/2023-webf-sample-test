<?php
use \Codeception\Util\HttpCode;

/**
 * Web 2 tests
 * - Basic Text Content
 */
class Type2_Page_Contents_Cest
{
    public function test_TYPE_2_01_Page_Content(AcceptanceTester $I)
    {
        $url = '/';
        $expectedText = 'wednesday home page';
        $cssSelector = 'head title';
        $I->amOnPage($url);
        $I->see($expectedText, ['css' => $cssSelector]);
    }


    public function test_TYPE_2_02_Page_Content(AcceptanceTester $I)
    {
        $url = '/';
        $expectedText = 'a mini Moodle page';
        $cssSelector = 'body p';
        $I->amOnPage($url);
        $I->see($expectedText, ['css' => $cssSelector]);
    }

    public function test_TYPE_2_03_Page_Content(AcceptanceTester $I)
    {
        $url = '/';
        $expectedText = "the home page is where it's at";
        $cssSelector = 'body small';
        $I->amOnPage($url);
        $I->see($expectedText, ['css' => $cssSelector]);
    }


    public function test_TYPE_2_04_Page_Content(AcceptanceTester $I)
    {
        $url = '/?action=address';
        $expectedText = 'wednesday address page';
        $cssSelector = 'head title';
        $I->amOnPage($url);
        $I->see($expectedText, ['css' => $cssSelector]);

        $I->dontSeeLink('Logout');
    }

    public function test_TYPE_2_05_Page_Content(AcceptanceTester $I)
    {
        $url = '/?action=address';
        $expectedText = '10 Main Street, New York';
        $cssSelector = 'body p span';
        $I->amOnPage($url);
        $I->see($expectedText, ['css' => $cssSelector]);
    }


}
