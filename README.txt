# lab test 1 (unit and web testing)

This tests has 2 parts:
    - unit testing  (50% of this test)
    - web testing (50% of this test)

-----------------------------------------------------------------------
Question:

write code to pass provided tests
- create the required class in "/src" to pass the unit tests
- edit /src/Application.php as required
- implement HTML output scripts in /templates
-----------------------------------------------------------------------

    SUBMIT the following PHP files:
        - /src/Application.php
        - the contents of folder /templates
        - also submit class /src/Account.php if you made any chances to that file

	do NOT attempt to submit a ZIP folder - only ".php" text files can be submitted

-----------------------------------------------------------------------
GRADING:
    10% - Type1 tests
    20% - Type2 tests
    30% - Type3 tests
    40% - Type4 tests

    NOTE: your solution for these tests must be from the data supplied from the Repository/Fixtures class (i.e. not hard coded)
        (your submission will be tested with a different Fixtures class and tests matching those Fixtures)

-----------------------------------------------------------------------
HINTS (general):

    - populate "/vendor" by running 'composer update'

    - run the web server in the background with 'composer serve -d'

        - and use another terminal window to run tests while that server is running

    - run all WEB tests with 'composer web' / run all UNIT tests with 'composer unit'

        - run 1 set of tests with "composer web1" (1, 2, 3, 4), or "composer unit1" (1, 2, 3, 4),

    - run tests with detailed steps with 'composer websteps', 'composer web1steps', 'composer web2steps', and so on

    - where to find the tests

        - WEB test classes in '/tests/acceptance'

        - UNIT test classes in '/tests/unit'

    - (beta) see provisional marking of your work

        - run "composer unit" then run "composer markunit"

        - run "composer web" then run "composer markweb"


-----------------------------------------------------------------------

NOTES

    ensure you can access the internet from your computer, since the validation tests send the HTML to a server for validation

    if you get ERRORS for Web1 tests 1/2/3 - check whether the w3cvalidator service is available
        https://www.isitdownrightnow.com/validator.w3.org.html

    sometimes for 5-10 minutes blocks the W3C HTML validator service is slow / not responding due to demand

    if not, just ignore web1 tests for now, and try again later in the test
    - just comment out test method: "test_TYPE_1_01_pageValidHtml"