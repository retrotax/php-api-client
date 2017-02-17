<?php

//======================================================================
// RetroTax PHP Examples
//======================================================================

//-----------------------------------------------------
// PHP Client Library Configuration
//-----------------------------------------------------

require_once(__DIR__ . '/autoload.php');
RetroTax\Configuration::getDefaultConfiguration()->setDebug(true);
RetroTax\Configuration::getDefaultConfiguration()->setDebugFile(__DIR__ . '/log.txt');
RetroTax\Configuration::getDefaultConfiguration()->setApiKey('X-API-KEY', 'yqvNrVR5Cs6vhLq1ZRPq38GM5OrXJ7C97n4BZCJa');
RetroTax\Configuration::getDefaultConfiguration()->addDefaultHeader('X-API-KEY', 'yqvNrVR5Cs6vhLq1ZRPq38GM5OrXJ7C97n4BZCJa');
RetroTax\Configuration::getDefaultConfiguration()->addDefaultHeader('Content-Type', 'application/json');
RetroTax\Configuration::getDefaultConfiguration()->addDefaultHeader('X-AUTH-TOKEN', '');
RetroTax\Configuration::getDefaultConfiguration()->setHost('api.retrotax-aci.com');

$x_auth_token = ""; // string 

$api_instance = new RetroTax\DefaultApi();


//-----------------------------------------------------
// Authentication
//-----------------------------------------------------

/* Example Sign Out */
try{
    $result = $api_instance->authenticationDelete();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->authenticationPost: ', $e->getMessage(), PHP_EOL;
}


/* Example Sign In */
$sign_in_request = new \RetroTax\SignInRequest();
$sign_in_request->setUsername('hiring_manager');
$sign_in_request->setPassword('mUc3m00RsqyRe');
var_dump($sign_in_request);

try{
    $result = $api_instance->authenticationPost($sign_in_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->authenticationPost: ', $e->getMessage(), PHP_EOL;
}
$x_auth_token = $result['auth_token'];
var_dump($x_auth_token);


//-----------------------------------------------------
// Branches
//-----------------------------------------------------
try {
    $result = $api_instance->branchesGetWithHttpInfo($x_auth_token);
    print_r($result);
    //var_dump($branches->__toString());
} catch (Exception $e) {
    //var_dump($e);
    echo 'Exception when calling DefaultApi->branchesOptions: ', $e->getMessage(), PHP_EOL;
}


//-----------------------------------------------------
// States
//-----------------------------------------------------
try {
    $result = $api_instance->statesGet($x_auth_token);
    var_dump($result->__toString());
} catch (Exception $e) {
    //var_dump($e);
    echo 'Exception when calling DefaultApi->statesGet: ', $e->getMessage(), PHP_EOL;
}

//-----------------------------------------------------
// Companies
//-----------------------------------------------------

/* Example GET Companies */
try {
    $result = $api_instance->companiesGet($x_auth_token);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->companiesGet: ', $e->getMessage(), PHP_EOL;
}



//-----------------------------------------------------
// Documents
//-----------------------------------------------------

/* Example GET Documents */


/* Example POST Document */





//-----------------------------------------------------
// Employees
//-----------------------------------------------------

$employee = new \RetroTax\Employee(); 
var_dump($employee);
$questionnaire=$employee->getQuestionnaire();
var_dump($questionnaire);

$EmployeeResponseQuestionnaire = new \RetroTax\EmployeeResponseQuestionnaire();  
var_dump($EmployeeResponseQuestionnaire);

/* Example POST Employee (Simple Flow) - create an employee in a single request containing employee and hiring manager info */


/* Example POST Employee (Complex Flow) */


/* Example GET Employees by location and return a set of 10 employees at the 5th page */


/* Example GET Employees filter by status equal to 'Sent to State' */


/* Example GET Employees filter by status equal to 'Not Qualified' */


/* Example search Employees for 'John' */


/* Example E-Sign */


/* Example update an employee */

//-----------------------------------------------------
// Locations
//-----------------------------------------------------

/* Title Here Notice the First Letters are Capitalized */


?>


