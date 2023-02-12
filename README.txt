# PHP Unit testing - lab test 2

-----------------------------------------------------------------------
Question:

write code to pass provided tests
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
    15% - Type2 tests
    15% - Type3 tests
    60% - Type4 tests - your solution for these tests must be from the data supplied from the Repository/Fixtures class (i.e. not hard coded)
        (your submission will be tested with a different Fixtures class and tests matching those Fixtures)

-----------------------------------------------------------------------
HINTS (general):

    - populate /vendor by running 'composer update'

    - run the web server with 'composer serve'

        - and use another terminal window to run tests while that server is running

    - run all tests with 'composer web'

        - run 1 set of tests with 'composer web1' (replace 1 with 2 etc.)

    - run tests with detailed steps with 'composer websteps', 'composer web1steps', 'composer web2steps', and so on

    - you'll find the web test classes in '/tests/acceptance'

    - there is a REPORT of the test results generated in:
        _output/report.tap.log


-----------------------------------------------------------------------

NOTES

    ensure you can access the internet from your computer, since the validation tests send the HTML to a server for validation

    if you get ERRORS for Web1 tests 1/2/3 - check whether the w3cvalidator service is available
        https://www.isitdownrightnow.com/validator.w3.org.html

    sometimes for 5-10 minutes blocks the W3C HTML validator service is slow / not responding due to demand

    if not, just ignore web1 tests for now, and try again later in the test