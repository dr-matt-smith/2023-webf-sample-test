<?php
use \Codeception\Util\HttpCode;

/**
 * Web 4 tests
 *  - page content from the entity repository test data
 */
class Type4_Data_Checks_Cest
{
    public function test_TYPE_4_01_seeCorrectNumberOfItems(AcceptanceTester $I)
    {
        $url = '/?action=modules';
        $I->amOnPage($url);

        $I->seeNumberOfElements('table td', 3);
    }

    public function test_TYPE_4_02_seeNameContentForFixtureModule1(AcceptanceTester $I)
    {
        $url = '/?action=modules';
        $I->amOnPage($url);

        $expectedText = 'Web Framework Development';
        $I->see($expectedText);
    }

    public function test_TYPE_4_03_seeYearContentForFixtureModule1(AcceptanceTester $I)
    {
        $url = '/?action=modules';
        $I->amOnPage($url);

        $expectedText = '3';
        $I->see($expectedText);
    }

    public function test_TYPE_4_04_seeNameContentForFixtureModule2(AcceptanceTester $I)
    {
        $url = '/?action=modules';
        $I->amOnPage($url);

        $expectedText = 'Software Development';
        $I->see($expectedText);
    }

    public function test_TYPE_4_05_seeYearContentForFixtureModule2(AcceptanceTester $I)
    {
        $url = '/?action=modules';
        $I->amOnPage($url);

        $expectedText = '2';
        $I->see($expectedText);
    }


    /**
     * @example { "url": "/?action=modules", "expected_text" : "1: Web Framework Development, year 3", "css_selector" : "table td"}
     * @example { "url": "/?action=modules", "expected_text" : "2: Software Development, year 2", "css_selector" : "table td"}
     * @example { "url": "/?action=modules", "expected_text" : "3: Final Year Project, year 4", "css_selector" : "table td"}
     */
    public function test_TYPE_4_06_seeTableDataElementContentForModule(AcceptanceTester $I, \Codeception\Example $example)
    {
        $url = $example['url'];
        $expectedText = $example['expected_text'];
        $cssSelector = $example['css_selector'];

        $I->amOnPage($url);
        $I->see($expectedText, ['css' => $cssSelector]);
    }

    /**
     * @example { "url": "/?action=module&id=1", "expected_text" : "Module 1", "css_selector" : "p"}
     * @example { "url": "/?action=module&id=1", "expected_text" : "name = Web Framework Development", "css_selector" : "ul li"}
     * @example { "url": "/?action=module&id=1", "expected_text" : "year = 3", "css_selector" : "ul li"}
     */
    public function test_TYPE_4_07_seeDetailsForRecord1(AcceptanceTester $I, \Codeception\Example $example)
    {
        $url = $example['url'];
        $expectedText = $example['expected_text'];
        $cssSelector = $example['css_selector'];

        $I->amOnPage($url);
        $I->see($expectedText, ['css' => $cssSelector]);
    }


    /**
     * @example { "url": "/?action=module&id=2", "expected_text" : "Module 2", "css_selector" : "p"}
     * @example { "url": "/?action=module&id=2", "expected_text" : "name = Software Development", "css_selector" : "ul li"}
     * @example { "url": "/?action=module&id=2", "expected_text" : "year = 2", "css_selector" : "ul li"}
     */
    public function test_TYPE_4_07_seeDetailsForRecord2(AcceptanceTester $I, \Codeception\Example $example)
    {
        $url = $example['url'];
        $expectedText = $example['expected_text'];
        $cssSelector = $example['css_selector'];

        $I->amOnPage($url);
        $I->see($expectedText, ['css' => $cssSelector]);
    }


}
