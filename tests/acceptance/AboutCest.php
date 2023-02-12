<?php 

class AboutCest
{
    public function seeOneNavListItemOnHomePage(AcceptanceTester $I)
    {
        $I->amOnPage('/');
        $I->seeNumberOfElements('nav ul li', 1);
    }

    public function canClickAboutPageLinkFromHomePage(AcceptanceTester $I)
    {
        $I->amOnPage('/');
        $I->click('about page');
    }

    public function urlHasActionAboutWhenClickAboutPageLink(AcceptanceTester $I)
    {
        $I->amOnPage('/');
        $I->click('about page');
        $I->seeInCurrentUrl('action=about');
        $I->seeCurrentUrlEquals('/?action=about');
    }

    public function aboutPageContentConfirmed(AcceptanceTester $I)
    {
        $I->amOnPage('/');
        $I->click('about page');

        $I->see('About page', 'h1');
        $I->seeInSource('<h1>About Page</h1>');
    }

    public function noErrorCssClassWhenClickAboutPageLink(AcceptanceTester $I)
    {
        $I->amOnPage('/');
        $I->click('about page');
        $I->seeInCurrentUrl('action=about');
        $I->seeCurrentUrlEquals('/?action=about');
        $I->see('About page', 'h1');

        $I->dontSeeElement('.error');
    }

}
