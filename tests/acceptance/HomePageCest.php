<?php
use \Codeception\Util\HttpCode;

class HomePageCest
{
    /**
     * @example { "url": "/"}
     * @example { "url": "/?action=about"}
     */
    public function pageHasHttpSuccessCode(AcceptanceTester $I, \Codeception\Example $example)
    {
        $I->amOnPage($example['url']);

        $I->seeResponseCodeIs(HttpCode::OK);
        $I->dontSeeResponseCodeIs(HttpCode::NOT_FOUND);
    }

    /**
     * @example { "url": "/"}
     * @example { "url": "/?action=about"}
     */
    public function pageValidHtmlNoErrors(AcceptanceTester $I, \Codeception\Example $example)
    {
        $I->amOnPage($example['url']);

        $I->validateMarkup(array(
            'ignoreWarnings' => false,
        ));
    }

    public function canVisitWebsiteRoot(AcceptanceTester $I)
    {
        $I->amOnPage('/');
        $I->seeResponseCodeIs(HttpCode::OK);
        $I->dontSeeResponseCodeIs(HttpCode::NOT_FOUND);
    }

    public function canVisitAboutPage(AcceptanceTester $I)
    {
        $I->amOnPage('/?action=about');
        $I->seeResponseCodeIs(HttpCode::OK);
        $I->dontSeeResponseCodeIs(HttpCode::NOT_FOUND);
    }



    public function seeHomePageTextSomewhere(AcceptanceTester $I)
    {
        $I->amOnPage('/');
        $I->see('Home Page');
    }

    public function seeHomePageTextInBody(AcceptanceTester $I)
    {
        $I->amOnPage('/');
        $I->see('Home Page', ['css' => 'body']);
    }

    public function seeHomePageTextInTitle(AcceptanceTester $I)
    {
        $I->amOnPage('/');
        $I->see('Home Page', ['css' => 'title']);
    }

    public function seeHelloWebWorldInBodyParagraph(AcceptanceTester $I)
    {
        $I->amOnPage('/');
        $I->see('hello web world', ['css' => 'body p']);
    }

    public function seeHelloWebWorldInBodyDirectChildParagraph(AcceptanceTester $I)
    {
        $I->amOnPage('/');
        $I->see('hello web world', ['css' => 'body > p']);
    }


    public function homePageIsValidHtmlDocument(AcceptanceTester $I)
    {
        $I->amOnPage('/');
        $I->validateMarkup();
    }

    public function homePageIsValidHtmlDocumentNoWarnings(AcceptanceTester $I)
    {
        $I->amOnPage('/');
        $I->validateMarkup(['ignoreWarnings' => false]);
    }

    public function seeLoginLinkOnHomePage(AcceptanceTester $I)
    {
        $I->amOnPage('/');
        $I->seeLink('Login');
        $I->dontSeeLink('Logout');
    }

}
