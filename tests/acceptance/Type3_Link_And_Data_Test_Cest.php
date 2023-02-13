<?php

/**
 * Web 3 tests
 * - link testing and more page content
 */
class Type3_Link_And_Data_Test_Cest
{
    public function test_TYPE_3_01_Linkcheck(AcceptanceTester $I)
    {
        $url = '/';
        $linkedUrl = '/?action=address';
        $linkText = 'contact address';

        $I->amOnPage($url);
        $I->seeLink($linkText);
        $I->click($linkText);

        $I->seeCurrentUrlEquals($linkedUrl);
    }

    public function test_TYPE_3_02_Linkcheck(AcceptanceTester $I)
    {
        $url = '/';
        $linkedUrl = '/?action=modules';
        $linkText = 'module list';

        $I->amOnPage($url);
        $I->seeLink($linkText);
        $I->click($linkText);

        $I->seeCurrentUrlEquals($linkedUrl);
    }

    public function test_TYPE_3_03_Linkcheck(AcceptanceTester $I)
    {
        $url = '/?action=address';
        $linkedUrl = '/';
        $linkText = '(home)';

        $I->amOnPage($url);
        $I->seeLink($linkText);
        $I->click($linkText);

        $I->seeCurrentUrlEquals($linkedUrl);
    }


    public function test_TYPE_3_04_no_such_link(AcceptanceTester $I)
    {
        $url = '/?action=address';
        $linkedUrl = '/';
        $linkText = '(home)';

        $I->amOnPage($url);
        $I->seeLink($linkText);
        $I->click($linkText);

        $I->seeCurrentUrlEquals($linkedUrl);

        $I->dontSeeLink('Logout');
        //should not have link to home on home !
        $I->dontSeeLink($linkText);

    }





}
