<?php

//$testClasses = [
//    'Type1_Constructor_Get_Set_Test',
//    'Type2_Basic_Operations_Test',
//    'Type3_Validation_Test',
//    'Type4_Main_Logic_Test',
//];
//$testClassPrefix = 'TudublinTest.';

$outputString = '';
$readFileName = 'report.xml';
$inFilePath = $filePath . $readFileName;
$xmlString = file_get_contents($inFilePath);
$results = new SimpleXMLElement($xmlString);

//foreach ($movies->movie[0]->rating as $rating) {

// $x = $results[0]->testcase;
// var_dump($x);
// die();

// var_dump($testClasses);
// die();

//foreach ($testClasses as $testClassName){
//    $readFileName = $testClassPrefix . $testClassName . '.xml';
    $inFilePath = $filePath . $readFileName;
    $xmlString = file_get_contents($inFilePath);
    $results = new SimpleXMLElement($xmlString);

    $results = $results->testsuite;

//    var_dump($results);
//die();
    // print out new testing class name
//    $message = "$testClassName (Tudublin\\$testClassName) \n";
//    print $message;
//    $outputString .= $message;

// only process for current suite (unit / acceptance)
if($results["name"] == $suite):
    foreach ($results->testcase as $testcase) {

//        print "TEST CASE\n";
//        var_dump($testcase);
        //die();
        // print out class name line (if new)
        $className = $testcase[0]["classname"];



        $testName = $testcase[0]["name"];
        $testName = str_replace('_', ' ', $testName);

//        // "error" not "failure" from Codeception
        $error = $testcase->error;
        $failure = $testcase->failure;

//        print "ERROR\n";
//        var_dump($error);

        $hasError = !empty($error);
//        print "hasError\n";
//        var_dump($hasError);



//        print "\n------\n";

        $message = '';
        if($hasError){
            $message .= ' [ ] ';
        } else {
            $message .= ' [x] ';
        }
        $message .= $testName;
        $message .= PHP_EOL;

        print $message;
        $outputString .= $message;
    }

    // blank line after all methods from current class output
    $message = "\n";
    print $message;
    $outputString .= $message;


    $outFilePath = $filePath . $writeFileName;
    file_put_contents($outFilePath, $outputString);
    print " --- results written to $outFilePath --\n";

endif;
