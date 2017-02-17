# RetroTax\DefaultApi

All URIs are relative to *https://api-qa.retrotax-aci.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**applicationStatusesGet**](DefaultApi.md#applicationStatusesGet) | **GET** /application_statuses | 
[**applicationStatusesStatusCodeGet**](DefaultApi.md#applicationStatusesStatusCodeGet) | **GET** /application_statuses/{status_code} | 
[**authenticationDelete**](DefaultApi.md#authenticationDelete) | **DELETE** /authentication | 
[**authenticationPost**](DefaultApi.md#authenticationPost) | **POST** /authentication | 
[**authenticationUserDetailsGet**](DefaultApi.md#authenticationUserDetailsGet) | **GET** /authentication/user_details | 
[**branchesGet**](DefaultApi.md#branchesGet) | **GET** /branches | 
[**companiesCompanyIdGet**](DefaultApi.md#companiesCompanyIdGet) | **GET** /companies/{company_id} | 
[**companiesCompanyIdLocationsGet**](DefaultApi.md#companiesCompanyIdLocationsGet) | **GET** /companies/{company_id}/locations | 
[**companiesCompanyIdLocationsLocationIdGet**](DefaultApi.md#companiesCompanyIdLocationsLocationIdGet) | **GET** /companies/{company_id}/locations/{location_id} | 
[**companiesGet**](DefaultApi.md#companiesGet) | **GET** /companies | 
[**employeesEmployeeIdDocumentsGet**](DefaultApi.md#employeesEmployeeIdDocumentsGet) | **GET** /employees/{employee_id}/documents | 
[**employeesEmployeeIdDocumentsPost**](DefaultApi.md#employeesEmployeeIdDocumentsPost) | **POST** /employees/{employee_id}/documents | 
[**employeesEmployeeIdEsignPut**](DefaultApi.md#employeesEmployeeIdEsignPut) | **PUT** /employees/{employee_id}/esign | 
[**employeesEmployeeIdGet**](DefaultApi.md#employeesEmployeeIdGet) | **GET** /employees/{employee_id} | 
[**employeesEmployeeIdPayEntriesGet**](DefaultApi.md#employeesEmployeeIdPayEntriesGet) | **GET** /employees/{employee_id}/pay_entries | 
[**employeesEmployeeIdPayEntriesPayEntryIdDelete**](DefaultApi.md#employeesEmployeeIdPayEntriesPayEntryIdDelete) | **DELETE** /employees/{employee_id}/pay_entries/{pay_entry_id} | 
[**employeesEmployeeIdPayEntriesPayEntryIdPut**](DefaultApi.md#employeesEmployeeIdPayEntriesPayEntryIdPut) | **PUT** /employees/{employee_id}/pay_entries/{pay_entry_id} | 
[**employeesEmployeeIdPayEntriesPost**](DefaultApi.md#employeesEmployeeIdPayEntriesPost) | **POST** /employees/{employee_id}/pay_entries | 
[**employeesEmployeeIdPut**](DefaultApi.md#employeesEmployeeIdPut) | **PUT** /employees/{employee_id} | 
[**employeesGet**](DefaultApi.md#employeesGet) | **GET** /employees | 
[**employeesPost**](DefaultApi.md#employeesPost) | **POST** /employees | 
[**occupationsGet**](DefaultApi.md#occupationsGet) | **GET** /occupations | 
[**reportsGet**](DefaultApi.md#reportsGet) | **GET** /reports | 
[**statesGet**](DefaultApi.md#statesGet) | **GET** /states | 
[**statesStateCodeCountiesGet**](DefaultApi.md#statesStateCodeCountiesGet) | **GET** /states/{state_code}/counties | 
[**subscriptionsGet**](DefaultApi.md#subscriptionsGet) | **GET** /subscriptions | 
[**subscriptionsPost**](DefaultApi.md#subscriptionsPost) | **POST** /subscriptions | 
[**subscriptionsSubscriptionIdDelete**](DefaultApi.md#subscriptionsSubscriptionIdDelete) | **DELETE** /subscriptions/{subscription_id} | 
[**subscriptionsSubscriptionIdGet**](DefaultApi.md#subscriptionsSubscriptionIdGet) | **GET** /subscriptions/{subscription_id} | 
[**subscriptionsSubscriptionIdPut**](DefaultApi.md#subscriptionsSubscriptionIdPut) | **PUT** /subscriptions/{subscription_id} | 
[**subscriptionsTypesGet**](DefaultApi.md#subscriptionsTypesGet) | **GET** /subscriptions/types | 
[**supplementaryProgramStatusesGet**](DefaultApi.md#supplementaryProgramStatusesGet) | **GET** /supplementary_program_statuses | 
[**supplementaryProgramStatusesStatusCodeGet**](DefaultApi.md#supplementaryProgramStatusesStatusCodeGet) | **GET** /supplementary_program_statuses/{status_code} | 
[**supplementaryProgramsGet**](DefaultApi.md#supplementaryProgramsGet) | **GET** /supplementary_programs | 
[**supplementaryProgramsSupplementaryProgramCodeGet**](DefaultApi.md#supplementaryProgramsSupplementaryProgramCodeGet) | **GET** /supplementary_programs/{supplementary_program_code} | 
[**targetGroupsGet**](DefaultApi.md#targetGroupsGet) | **GET** /target_groups | 
[**targetGroupsTargetGroupCodeGet**](DefaultApi.md#targetGroupsTargetGroupCodeGet) | **GET** /target_groups/{target_group_code} | 
[**usersChangePasswordPut**](DefaultApi.md#usersChangePasswordPut) | **PUT** /users/change_password | 
[**usersForgotPasswordPost**](DefaultApi.md#usersForgotPasswordPost) | **POST** /users/forgot_password | 
[**usersForgotUsernamePost**](DefaultApi.md#usersForgotUsernamePost) | **POST** /users/forgot_username | 
[**usersPut**](DefaultApi.md#usersPut) | **PUT** /users | 
[**zoneStatusesGet**](DefaultApi.md#zoneStatusesGet) | **GET** /zone_statuses | 
[**zoneStatusesStatusCodeGet**](DefaultApi.md#zoneStatusesStatusCodeGet) | **GET** /zone_statuses/{status_code} | 
[**zonesGet**](DefaultApi.md#zonesGet) | **GET** /zones | 
[**zonesZoneCodeGet**](DefaultApi.md#zonesZoneCodeGet) | **GET** /zones/{zone_code} | 


# **applicationStatusesGet**
> \RetroTax\ApplicationStatusesList applicationStatusesGet($x_auth_token, $x_auth_iv)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
RetroTax\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// RetroTax\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');

$api_instance = new RetroTax\Api\DefaultApi();
$x_auth_token = "x_auth_token_example"; // string | 
$x_auth_iv = "x_auth_iv_example"; // string | 

try {
    $result = $api_instance->applicationStatusesGet($x_auth_token, $x_auth_iv);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->applicationStatusesGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **x_auth_token** | **string**|  | [optional]
 **x_auth_iv** | **string**|  | [optional]

### Return type

[**\RetroTax\ApplicationStatusesList**](../Model/ApplicationStatusesList.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **applicationStatusesStatusCodeGet**
> \RetroTax\ApplicationStatus applicationStatusesStatusCodeGet($status_code, $x_auth_token, $x_auth_iv)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
RetroTax\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// RetroTax\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');

$api_instance = new RetroTax\Api\DefaultApi();
$status_code = "status_code_example"; // string | 
$x_auth_token = "x_auth_token_example"; // string | 
$x_auth_iv = "x_auth_iv_example"; // string | 

try {
    $result = $api_instance->applicationStatusesStatusCodeGet($status_code, $x_auth_token, $x_auth_iv);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->applicationStatusesStatusCodeGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **status_code** | **string**|  |
 **x_auth_token** | **string**|  | [optional]
 **x_auth_iv** | **string**|  | [optional]

### Return type

[**\RetroTax\ApplicationStatus**](../Model/ApplicationStatus.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **authenticationDelete**
> authenticationDelete($x_api_key, $x_auth_token, $x_auth_iv)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
RetroTax\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// RetroTax\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');

$api_instance = new RetroTax\Api\DefaultApi();
$x_api_key = "x_api_key_example"; // string | 
$x_auth_token = "x_auth_token_example"; // string | 
$x_auth_iv = "x_auth_iv_example"; // string | 

try {
    $api_instance->authenticationDelete($x_api_key, $x_auth_token, $x_auth_iv);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->authenticationDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **x_api_key** | **string**|  | [optional]
 **x_auth_token** | **string**|  | [optional]
 **x_auth_iv** | **string**|  | [optional]

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **authenticationPost**
> \RetroTax\SignInResponse authenticationPost($sign_in_request, $x_api_key, $x_auth_iv)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
RetroTax\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// RetroTax\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');

$api_instance = new RetroTax\Api\DefaultApi();
$sign_in_request = new \RetroTax\SignInRequest(); // \RetroTax\SignInRequest | 
$x_api_key = "x_api_key_example"; // string | 
$x_auth_iv = "x_auth_iv_example"; // string | 

try {
    $result = $api_instance->authenticationPost($sign_in_request, $x_api_key, $x_auth_iv);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->authenticationPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **sign_in_request** | [**\RetroTax\SignInRequest**](../Model/\RetroTax\SignInRequest.md)|  |
 **x_api_key** | **string**|  | [optional]
 **x_auth_iv** | **string**|  | [optional]

### Return type

[**\RetroTax\SignInResponse**](../Model/SignInResponse.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **authenticationUserDetailsGet**
> authenticationUserDetailsGet($x_auth_token, $x_auth_iv)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
RetroTax\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// RetroTax\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');

$api_instance = new RetroTax\Api\DefaultApi();
$x_auth_token = "x_auth_token_example"; // string | 
$x_auth_iv = "x_auth_iv_example"; // string | 

try {
    $api_instance->authenticationUserDetailsGet($x_auth_token, $x_auth_iv);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->authenticationUserDetailsGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **x_auth_token** | **string**|  | [optional]
 **x_auth_iv** | **string**|  | [optional]

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **branchesGet**
> \RetroTax\BranchesResponse branchesGet($x_auth_token, $x_auth_iv)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
RetroTax\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// RetroTax\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');

$api_instance = new RetroTax\Api\DefaultApi();
$x_auth_token = "x_auth_token_example"; // string | 
$x_auth_iv = "x_auth_iv_example"; // string | 

try {
    $result = $api_instance->branchesGet($x_auth_token, $x_auth_iv);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->branchesGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **x_auth_token** | **string**|  | [optional]
 **x_auth_iv** | **string**|  | [optional]

### Return type

[**\RetroTax\BranchesResponse**](../Model/BranchesResponse.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **companiesCompanyIdGet**
> \RetroTax\CompanyResponse companiesCompanyIdGet($company_id, $x_auth_token, $x_auth_iv)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
RetroTax\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// RetroTax\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');

$api_instance = new RetroTax\Api\DefaultApi();
$company_id = "company_id_example"; // string | 
$x_auth_token = "x_auth_token_example"; // string | 
$x_auth_iv = "x_auth_iv_example"; // string | 

try {
    $result = $api_instance->companiesCompanyIdGet($company_id, $x_auth_token, $x_auth_iv);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->companiesCompanyIdGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **company_id** | **string**|  |
 **x_auth_token** | **string**|  | [optional]
 **x_auth_iv** | **string**|  | [optional]

### Return type

[**\RetroTax\CompanyResponse**](../Model/CompanyResponse.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **companiesCompanyIdLocationsGet**
> \RetroTax\LocationsResponse companiesCompanyIdLocationsGet($company_id, $x_auth_token, $x_auth_iv)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
RetroTax\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// RetroTax\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');

$api_instance = new RetroTax\Api\DefaultApi();
$company_id = "company_id_example"; // string | 
$x_auth_token = "x_auth_token_example"; // string | 
$x_auth_iv = "x_auth_iv_example"; // string | 

try {
    $result = $api_instance->companiesCompanyIdLocationsGet($company_id, $x_auth_token, $x_auth_iv);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->companiesCompanyIdLocationsGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **company_id** | **string**|  |
 **x_auth_token** | **string**|  | [optional]
 **x_auth_iv** | **string**|  | [optional]

### Return type

[**\RetroTax\LocationsResponse**](../Model/LocationsResponse.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **companiesCompanyIdLocationsLocationIdGet**
> \RetroTax\Location companiesCompanyIdLocationsLocationIdGet($location_id, $company_id, $x_auth_token, $x_auth_key)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
RetroTax\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// RetroTax\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');

$api_instance = new RetroTax\Api\DefaultApi();
$location_id = "location_id_example"; // string | 
$company_id = "company_id_example"; // string | 
$x_auth_token = "x_auth_token_example"; // string | 
$x_auth_key = "x_auth_key_example"; // string | 

try {
    $result = $api_instance->companiesCompanyIdLocationsLocationIdGet($location_id, $company_id, $x_auth_token, $x_auth_key);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->companiesCompanyIdLocationsLocationIdGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **location_id** | **string**|  |
 **company_id** | **string**|  |
 **x_auth_token** | **string**|  | [optional]
 **x_auth_key** | **string**|  | [optional]

### Return type

[**\RetroTax\Location**](../Model/Location.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **companiesGet**
> \RetroTax\CompaniesResponse companiesGet($x_auth_token, $x_auth_iv)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
RetroTax\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// RetroTax\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');

$api_instance = new RetroTax\Api\DefaultApi();
$x_auth_token = "x_auth_token_example"; // string | 
$x_auth_iv = "x_auth_iv_example"; // string | 

try {
    $result = $api_instance->companiesGet($x_auth_token, $x_auth_iv);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->companiesGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **x_auth_token** | **string**|  | [optional]
 **x_auth_iv** | **string**|  | [optional]

### Return type

[**\RetroTax\CompaniesResponse**](../Model/CompaniesResponse.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **employeesEmployeeIdDocumentsGet**
> \RetroTax\Documents employeesEmployeeIdDocumentsGet($employee_id, $x_auth_token, $x_auth_iv, $status)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
RetroTax\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// RetroTax\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');

$api_instance = new RetroTax\Api\DefaultApi();
$employee_id = "employee_id_example"; // string | 
$x_auth_token = "x_auth_token_example"; // string | 
$x_auth_iv = "x_auth_iv_example"; // string | 
$status = "status_example"; // string | 

try {
    $result = $api_instance->employeesEmployeeIdDocumentsGet($employee_id, $x_auth_token, $x_auth_iv, $status);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->employeesEmployeeIdDocumentsGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **employee_id** | **string**|  |
 **x_auth_token** | **string**|  | [optional]
 **x_auth_iv** | **string**|  | [optional]
 **status** | **string**|  | [optional]

### Return type

[**\RetroTax\Documents**](../Model/Documents.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **employeesEmployeeIdDocumentsPost**
> \RetroTax\DocumentCreateResponse employeesEmployeeIdDocumentsPost($employee_id, $post_document, $x_auth_token, $x_auth_iv)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
RetroTax\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// RetroTax\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');

$api_instance = new RetroTax\Api\DefaultApi();
$employee_id = "employee_id_example"; // string | 
$post_document = new \RetroTax\PostDocument(); // \RetroTax\PostDocument | 
$x_auth_token = "x_auth_token_example"; // string | 
$x_auth_iv = "x_auth_iv_example"; // string | 

try {
    $result = $api_instance->employeesEmployeeIdDocumentsPost($employee_id, $post_document, $x_auth_token, $x_auth_iv);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->employeesEmployeeIdDocumentsPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **employee_id** | **string**|  |
 **post_document** | [**\RetroTax\PostDocument**](../Model/\RetroTax\PostDocument.md)|  |
 **x_auth_token** | **string**|  | [optional]
 **x_auth_iv** | **string**|  | [optional]

### Return type

[**\RetroTax\DocumentCreateResponse**](../Model/DocumentCreateResponse.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **employeesEmployeeIdEsignPut**
> \RetroTax\Employee employeesEmployeeIdEsignPut($employee_id, $esign, $x_auth_token, $x_auth_iv)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new RetroTax\Api\DefaultApi();
$employee_id = "employee_id_example"; // string | 
$esign = new \RetroTax\Esign(); // \RetroTax\Esign | 
$x_auth_token = "x_auth_token_example"; // string | 
$x_auth_iv = "x_auth_iv_example"; // string | 

try {
    $result = $api_instance->employeesEmployeeIdEsignPut($employee_id, $esign, $x_auth_token, $x_auth_iv);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->employeesEmployeeIdEsignPut: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **employee_id** | **string**|  |
 **esign** | [**\RetroTax\Esign**](../Model/\RetroTax\Esign.md)|  |
 **x_auth_token** | **string**|  | [optional]
 **x_auth_iv** | **string**|  | [optional]

### Return type

[**\RetroTax\Employee**](../Model/Employee.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **employeesEmployeeIdGet**
> \RetroTax\EmployeeResponse employeesEmployeeIdGet($employee_id, $x_auth_token, $x_auth_iv)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
RetroTax\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// RetroTax\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');

$api_instance = new RetroTax\Api\DefaultApi();
$employee_id = "employee_id_example"; // string | 
$x_auth_token = "x_auth_token_example"; // string | 
$x_auth_iv = "x_auth_iv_example"; // string | 

try {
    $result = $api_instance->employeesEmployeeIdGet($employee_id, $x_auth_token, $x_auth_iv);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->employeesEmployeeIdGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **employee_id** | **string**|  |
 **x_auth_token** | **string**|  | [optional]
 **x_auth_iv** | **string**|  | [optional]

### Return type

[**\RetroTax\EmployeeResponse**](../Model/EmployeeResponse.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **employeesEmployeeIdPayEntriesGet**
> \RetroTax\PayEntriesResponse employeesEmployeeIdPayEntriesGet($employee_id, $x_auth_token, $x_auth_iv)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
RetroTax\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// RetroTax\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');

$api_instance = new RetroTax\Api\DefaultApi();
$employee_id = "employee_id_example"; // string | 
$x_auth_token = "x_auth_token_example"; // string | 
$x_auth_iv = "x_auth_iv_example"; // string | 

try {
    $result = $api_instance->employeesEmployeeIdPayEntriesGet($employee_id, $x_auth_token, $x_auth_iv);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->employeesEmployeeIdPayEntriesGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **employee_id** | **string**|  |
 **x_auth_token** | **string**|  | [optional]
 **x_auth_iv** | **string**|  | [optional]

### Return type

[**\RetroTax\PayEntriesResponse**](../Model/PayEntriesResponse.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **employeesEmployeeIdPayEntriesPayEntryIdDelete**
> employeesEmployeeIdPayEntriesPayEntryIdDelete($pay_entry_id, $employee_id, $x_auth_token, $x_auth_iv)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
RetroTax\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// RetroTax\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');

$api_instance = new RetroTax\Api\DefaultApi();
$pay_entry_id = "pay_entry_id_example"; // string | 
$employee_id = "employee_id_example"; // string | 
$x_auth_token = "x_auth_token_example"; // string | 
$x_auth_iv = "x_auth_iv_example"; // string | 

try {
    $api_instance->employeesEmployeeIdPayEntriesPayEntryIdDelete($pay_entry_id, $employee_id, $x_auth_token, $x_auth_iv);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->employeesEmployeeIdPayEntriesPayEntryIdDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **pay_entry_id** | **string**|  |
 **employee_id** | **string**|  |
 **x_auth_token** | **string**|  | [optional]
 **x_auth_iv** | **string**|  | [optional]

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **employeesEmployeeIdPayEntriesPayEntryIdPut**
> \RetroTax\PostPayEntryResponse employeesEmployeeIdPayEntriesPayEntryIdPut($pay_entry_id, $employee_id, $post_pay_entry_request, $x_auth_token, $x_auth_iv)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
RetroTax\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// RetroTax\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');

$api_instance = new RetroTax\Api\DefaultApi();
$pay_entry_id = "pay_entry_id_example"; // string | 
$employee_id = "employee_id_example"; // string | 
$post_pay_entry_request = new \RetroTax\PostPayEntryRequest(); // \RetroTax\PostPayEntryRequest | 
$x_auth_token = "x_auth_token_example"; // string | 
$x_auth_iv = "x_auth_iv_example"; // string | 

try {
    $result = $api_instance->employeesEmployeeIdPayEntriesPayEntryIdPut($pay_entry_id, $employee_id, $post_pay_entry_request, $x_auth_token, $x_auth_iv);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->employeesEmployeeIdPayEntriesPayEntryIdPut: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **pay_entry_id** | **string**|  |
 **employee_id** | **string**|  |
 **post_pay_entry_request** | [**\RetroTax\PostPayEntryRequest**](../Model/\RetroTax\PostPayEntryRequest.md)|  |
 **x_auth_token** | **string**|  | [optional]
 **x_auth_iv** | **string**|  | [optional]

### Return type

[**\RetroTax\PostPayEntryResponse**](../Model/PostPayEntryResponse.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **employeesEmployeeIdPayEntriesPost**
> \RetroTax\PostPayEntryResponse employeesEmployeeIdPayEntriesPost($employee_id, $post_pay_entry_request, $x_auth_token, $x_auth_iv)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
RetroTax\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// RetroTax\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');

$api_instance = new RetroTax\Api\DefaultApi();
$employee_id = "employee_id_example"; // string | 
$post_pay_entry_request = new \RetroTax\PostPayEntryRequest(); // \RetroTax\PostPayEntryRequest | 
$x_auth_token = "x_auth_token_example"; // string | 
$x_auth_iv = "x_auth_iv_example"; // string | 

try {
    $result = $api_instance->employeesEmployeeIdPayEntriesPost($employee_id, $post_pay_entry_request, $x_auth_token, $x_auth_iv);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->employeesEmployeeIdPayEntriesPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **employee_id** | **string**|  |
 **post_pay_entry_request** | [**\RetroTax\PostPayEntryRequest**](../Model/\RetroTax\PostPayEntryRequest.md)|  |
 **x_auth_token** | **string**|  | [optional]
 **x_auth_iv** | **string**|  | [optional]

### Return type

[**\RetroTax\PostPayEntryResponse**](../Model/PostPayEntryResponse.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **employeesEmployeeIdPut**
> \RetroTax\EmployeeResponse employeesEmployeeIdPut($employee_id, $x_auth_token, $x_auth_iv)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
RetroTax\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// RetroTax\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');

$api_instance = new RetroTax\Api\DefaultApi();
$employee_id = "employee_id_example"; // string | 
$x_auth_token = "x_auth_token_example"; // string | 
$x_auth_iv = "x_auth_iv_example"; // string | 

try {
    $result = $api_instance->employeesEmployeeIdPut($employee_id, $x_auth_token, $x_auth_iv);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->employeesEmployeeIdPut: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **employee_id** | **string**|  |
 **x_auth_token** | **string**|  | [optional]
 **x_auth_iv** | **string**|  | [optional]

### Return type

[**\RetroTax\EmployeeResponse**](../Model/EmployeeResponse.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **employeesGet**
> \RetroTax\EmployeesResponse employeesGet($missing_documents, $suppl_program_status, $location_id, $status, $search, $per_page, $zone_status, $x_auth_token, $application_status, $to_date, $x_auth_iv, $page, $from_date)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
RetroTax\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// RetroTax\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');

$api_instance = new RetroTax\Api\DefaultApi();
$missing_documents = "missing_documents_example"; // string | 
$suppl_program_status = "suppl_program_status_example"; // string | 
$location_id = "location_id_example"; // string | 
$status = "status_example"; // string | 
$search = "search_example"; // string | 
$per_page = "per_page_example"; // string | 
$zone_status = "zone_status_example"; // string | 
$x_auth_token = "x_auth_token_example"; // string | 
$application_status = "application_status_example"; // string | 
$to_date = "to_date_example"; // string | 
$x_auth_iv = "x_auth_iv_example"; // string | 
$page = "page_example"; // string | 
$from_date = "from_date_example"; // string | 

try {
    $result = $api_instance->employeesGet($missing_documents, $suppl_program_status, $location_id, $status, $search, $per_page, $zone_status, $x_auth_token, $application_status, $to_date, $x_auth_iv, $page, $from_date);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->employeesGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **missing_documents** | **string**|  | [optional]
 **suppl_program_status** | **string**|  | [optional]
 **location_id** | **string**|  | [optional]
 **status** | **string**|  | [optional]
 **search** | **string**|  | [optional]
 **per_page** | **string**|  | [optional]
 **zone_status** | **string**|  | [optional]
 **x_auth_token** | **string**|  | [optional]
 **application_status** | **string**|  | [optional]
 **to_date** | **string**|  | [optional]
 **x_auth_iv** | **string**|  | [optional]
 **page** | **string**|  | [optional]
 **from_date** | **string**|  | [optional]

### Return type

[**\RetroTax\EmployeesResponse**](../Model/EmployeesResponse.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **employeesPost**
> \RetroTax\EmployeeResponse employeesPost($employee, $x_auth_token, $x_auth_iv)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
RetroTax\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// RetroTax\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');

$api_instance = new RetroTax\Api\DefaultApi();
$employee = new \RetroTax\Employee(); // \RetroTax\Employee | 
$x_auth_token = "x_auth_token_example"; // string | 
$x_auth_iv = "x_auth_iv_example"; // string | 

try {
    $result = $api_instance->employeesPost($employee, $x_auth_token, $x_auth_iv);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->employeesPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **employee** | [**\RetroTax\Employee**](../Model/\RetroTax\Employee.md)|  |
 **x_auth_token** | **string**|  | [optional]
 **x_auth_iv** | **string**|  | [optional]

### Return type

[**\RetroTax\EmployeeResponse**](../Model/EmployeeResponse.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **occupationsGet**
> \RetroTax\OccupationsResponse occupationsGet($x_auth_token, $x_auth_iv)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
RetroTax\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// RetroTax\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');

$api_instance = new RetroTax\Api\DefaultApi();
$x_auth_token = "x_auth_token_example"; // string | 
$x_auth_iv = "x_auth_iv_example"; // string | 

try {
    $result = $api_instance->occupationsGet($x_auth_token, $x_auth_iv);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->occupationsGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **x_auth_token** | **string**|  | [optional]
 **x_auth_iv** | **string**|  | [optional]

### Return type

[**\RetroTax\OccupationsResponse**](../Model/OccupationsResponse.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **reportsGet**
> reportsGet($to_date, $x_auth_token, $x_auth_iv, $location_id, $from_date)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
RetroTax\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// RetroTax\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');

$api_instance = new RetroTax\Api\DefaultApi();
$to_date = "to_date_example"; // string | 
$x_auth_token = "x_auth_token_example"; // string | 
$x_auth_iv = "x_auth_iv_example"; // string | 
$location_id = "location_id_example"; // string | 
$from_date = "from_date_example"; // string | 

try {
    $api_instance->reportsGet($to_date, $x_auth_token, $x_auth_iv, $location_id, $from_date);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->reportsGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **to_date** | **string**|  | [optional]
 **x_auth_token** | **string**|  | [optional]
 **x_auth_iv** | **string**|  | [optional]
 **location_id** | **string**|  | [optional]
 **from_date** | **string**|  | [optional]

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **statesGet**
> \RetroTax\StatesResponse statesGet($x_auth_token, $x_auth_iv)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
RetroTax\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// RetroTax\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');

$api_instance = new RetroTax\Api\DefaultApi();
$x_auth_token = "x_auth_token_example"; // string | 
$x_auth_iv = "x_auth_iv_example"; // string | 

try {
    $result = $api_instance->statesGet($x_auth_token, $x_auth_iv);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->statesGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **x_auth_token** | **string**|  | [optional]
 **x_auth_iv** | **string**|  | [optional]

### Return type

[**\RetroTax\StatesResponse**](../Model/StatesResponse.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **statesStateCodeCountiesGet**
> \RetroTax\CountiesResponse statesStateCodeCountiesGet($state_code, $x_auth_token, $x_auth_iv)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
RetroTax\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// RetroTax\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');

$api_instance = new RetroTax\Api\DefaultApi();
$state_code = "state_code_example"; // string | 
$x_auth_token = "x_auth_token_example"; // string | 
$x_auth_iv = "x_auth_iv_example"; // string | 

try {
    $result = $api_instance->statesStateCodeCountiesGet($state_code, $x_auth_token, $x_auth_iv);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->statesStateCodeCountiesGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **state_code** | **string**|  |
 **x_auth_token** | **string**|  | [optional]
 **x_auth_iv** | **string**|  | [optional]

### Return type

[**\RetroTax\CountiesResponse**](../Model/CountiesResponse.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **subscriptionsGet**
> \RetroTax\Subscriptions subscriptionsGet($x_auth_token, $x_auth_iv)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
RetroTax\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// RetroTax\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');

$api_instance = new RetroTax\Api\DefaultApi();
$x_auth_token = "x_auth_token_example"; // string | 
$x_auth_iv = "x_auth_iv_example"; // string | 

try {
    $result = $api_instance->subscriptionsGet($x_auth_token, $x_auth_iv);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->subscriptionsGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **x_auth_token** | **string**|  | [optional]
 **x_auth_iv** | **string**|  | [optional]

### Return type

[**\RetroTax\Subscriptions**](../Model/Subscriptions.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **subscriptionsPost**
> \RetroTax\Subscriptions subscriptionsPost($post_subscription, $x_auth_token, $x_auth_iv)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
RetroTax\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// RetroTax\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');

$api_instance = new RetroTax\Api\DefaultApi();
$post_subscription = new \RetroTax\PostSubscription(); // \RetroTax\PostSubscription | 
$x_auth_token = "x_auth_token_example"; // string | 
$x_auth_iv = "x_auth_iv_example"; // string | 

try {
    $result = $api_instance->subscriptionsPost($post_subscription, $x_auth_token, $x_auth_iv);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->subscriptionsPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **post_subscription** | [**\RetroTax\PostSubscription**](../Model/\RetroTax\PostSubscription.md)|  |
 **x_auth_token** | **string**|  | [optional]
 **x_auth_iv** | **string**|  | [optional]

### Return type

[**\RetroTax\Subscriptions**](../Model/Subscriptions.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **subscriptionsSubscriptionIdDelete**
> \RetroTax\Subscriptions subscriptionsSubscriptionIdDelete($subscription_id, $x_auth_token, $x_auth_iv)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
RetroTax\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// RetroTax\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');

$api_instance = new RetroTax\Api\DefaultApi();
$subscription_id = "subscription_id_example"; // string | 
$x_auth_token = "x_auth_token_example"; // string | 
$x_auth_iv = "x_auth_iv_example"; // string | 

try {
    $result = $api_instance->subscriptionsSubscriptionIdDelete($subscription_id, $x_auth_token, $x_auth_iv);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->subscriptionsSubscriptionIdDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **subscription_id** | **string**|  |
 **x_auth_token** | **string**|  | [optional]
 **x_auth_iv** | **string**|  | [optional]

### Return type

[**\RetroTax\Subscriptions**](../Model/Subscriptions.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **subscriptionsSubscriptionIdGet**
> \RetroTax\GetSubscription subscriptionsSubscriptionIdGet($subscription_id, $x_auth_token, $x_auth_iv)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
RetroTax\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// RetroTax\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');

$api_instance = new RetroTax\Api\DefaultApi();
$subscription_id = "subscription_id_example"; // string | 
$x_auth_token = "x_auth_token_example"; // string | 
$x_auth_iv = "x_auth_iv_example"; // string | 

try {
    $result = $api_instance->subscriptionsSubscriptionIdGet($subscription_id, $x_auth_token, $x_auth_iv);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->subscriptionsSubscriptionIdGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **subscription_id** | **string**|  |
 **x_auth_token** | **string**|  | [optional]
 **x_auth_iv** | **string**|  | [optional]

### Return type

[**\RetroTax\GetSubscription**](../Model/GetSubscription.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **subscriptionsSubscriptionIdPut**
> \RetroTax\Subscriptions subscriptionsSubscriptionIdPut($subscription_id, $post_subscription, $x_auth_token, $x_auth_iv)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
RetroTax\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// RetroTax\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');

$api_instance = new RetroTax\Api\DefaultApi();
$subscription_id = "subscription_id_example"; // string | 
$post_subscription = new \RetroTax\PostSubscription(); // \RetroTax\PostSubscription | 
$x_auth_token = "x_auth_token_example"; // string | 
$x_auth_iv = "x_auth_iv_example"; // string | 

try {
    $result = $api_instance->subscriptionsSubscriptionIdPut($subscription_id, $post_subscription, $x_auth_token, $x_auth_iv);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->subscriptionsSubscriptionIdPut: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **subscription_id** | **string**|  |
 **post_subscription** | [**\RetroTax\PostSubscription**](../Model/\RetroTax\PostSubscription.md)|  |
 **x_auth_token** | **string**|  | [optional]
 **x_auth_iv** | **string**|  | [optional]

### Return type

[**\RetroTax\Subscriptions**](../Model/Subscriptions.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **subscriptionsTypesGet**
> \RetroTax\SubscriptionTypes subscriptionsTypesGet($x_auth_token, $x_auth_iv)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
RetroTax\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// RetroTax\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');

$api_instance = new RetroTax\Api\DefaultApi();
$x_auth_token = "x_auth_token_example"; // string | 
$x_auth_iv = "x_auth_iv_example"; // string | 

try {
    $result = $api_instance->subscriptionsTypesGet($x_auth_token, $x_auth_iv);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->subscriptionsTypesGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **x_auth_token** | **string**|  | [optional]
 **x_auth_iv** | **string**|  | [optional]

### Return type

[**\RetroTax\SubscriptionTypes**](../Model/SubscriptionTypes.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **supplementaryProgramStatusesGet**
> supplementaryProgramStatusesGet($x_auth_token, $x_auth_iv)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
RetroTax\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// RetroTax\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');

$api_instance = new RetroTax\Api\DefaultApi();
$x_auth_token = "x_auth_token_example"; // string | 
$x_auth_iv = "x_auth_iv_example"; // string | 

try {
    $api_instance->supplementaryProgramStatusesGet($x_auth_token, $x_auth_iv);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->supplementaryProgramStatusesGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **x_auth_token** | **string**|  | [optional]
 **x_auth_iv** | **string**|  | [optional]

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **supplementaryProgramStatusesStatusCodeGet**
> supplementaryProgramStatusesStatusCodeGet($status_code, $x_auth_token, $x_auth_iv)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
RetroTax\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// RetroTax\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');

$api_instance = new RetroTax\Api\DefaultApi();
$status_code = "status_code_example"; // string | 
$x_auth_token = "x_auth_token_example"; // string | 
$x_auth_iv = "x_auth_iv_example"; // string | 

try {
    $api_instance->supplementaryProgramStatusesStatusCodeGet($status_code, $x_auth_token, $x_auth_iv);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->supplementaryProgramStatusesStatusCodeGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **status_code** | **string**|  |
 **x_auth_token** | **string**|  | [optional]
 **x_auth_iv** | **string**|  | [optional]

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **supplementaryProgramsGet**
> \RetroTax\SupplementaryPrograms supplementaryProgramsGet($x_auth_token, $x_auth_iv)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
RetroTax\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// RetroTax\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');

$api_instance = new RetroTax\Api\DefaultApi();
$x_auth_token = "x_auth_token_example"; // string | 
$x_auth_iv = "x_auth_iv_example"; // string | 

try {
    $result = $api_instance->supplementaryProgramsGet($x_auth_token, $x_auth_iv);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->supplementaryProgramsGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **x_auth_token** | **string**|  | [optional]
 **x_auth_iv** | **string**|  | [optional]

### Return type

[**\RetroTax\SupplementaryPrograms**](../Model/SupplementaryPrograms.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **supplementaryProgramsSupplementaryProgramCodeGet**
> \RetroTax\SupplementaryProgram supplementaryProgramsSupplementaryProgramCodeGet($supplementary_program_code, $x_auth_token, $x_auth_iv)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
RetroTax\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// RetroTax\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');

$api_instance = new RetroTax\Api\DefaultApi();
$supplementary_program_code = "supplementary_program_code_example"; // string | 
$x_auth_token = "x_auth_token_example"; // string | 
$x_auth_iv = "x_auth_iv_example"; // string | 

try {
    $result = $api_instance->supplementaryProgramsSupplementaryProgramCodeGet($supplementary_program_code, $x_auth_token, $x_auth_iv);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->supplementaryProgramsSupplementaryProgramCodeGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **supplementary_program_code** | **string**|  |
 **x_auth_token** | **string**|  | [optional]
 **x_auth_iv** | **string**|  | [optional]

### Return type

[**\RetroTax\SupplementaryProgram**](../Model/SupplementaryProgram.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **targetGroupsGet**
> \RetroTax\TargetGroups targetGroupsGet($x_auth_token, $x_auth_iv)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
RetroTax\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// RetroTax\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');

$api_instance = new RetroTax\Api\DefaultApi();
$x_auth_token = "x_auth_token_example"; // string | 
$x_auth_iv = "x_auth_iv_example"; // string | 

try {
    $result = $api_instance->targetGroupsGet($x_auth_token, $x_auth_iv);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->targetGroupsGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **x_auth_token** | **string**|  | [optional]
 **x_auth_iv** | **string**|  | [optional]

### Return type

[**\RetroTax\TargetGroups**](../Model/TargetGroups.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **targetGroupsTargetGroupCodeGet**
> \RetroTax\TargetGroup targetGroupsTargetGroupCodeGet($target_group_code, $x_auth_token, $x_auth_iv)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
RetroTax\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// RetroTax\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');

$api_instance = new RetroTax\Api\DefaultApi();
$target_group_code = "target_group_code_example"; // string | 
$x_auth_token = "x_auth_token_example"; // string | 
$x_auth_iv = "x_auth_iv_example"; // string | 

try {
    $result = $api_instance->targetGroupsTargetGroupCodeGet($target_group_code, $x_auth_token, $x_auth_iv);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->targetGroupsTargetGroupCodeGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **target_group_code** | **string**|  |
 **x_auth_token** | **string**|  | [optional]
 **x_auth_iv** | **string**|  | [optional]

### Return type

[**\RetroTax\TargetGroup**](../Model/TargetGroup.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **usersChangePasswordPut**
> usersChangePasswordPut($x_auth_token, $x_auth_iv)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new RetroTax\Api\DefaultApi();
$x_auth_token = "x_auth_token_example"; // string | 
$x_auth_iv = "x_auth_iv_example"; // string | 

try {
    $api_instance->usersChangePasswordPut($x_auth_token, $x_auth_iv);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->usersChangePasswordPut: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **x_auth_token** | **string**|  | [optional]
 **x_auth_iv** | **string**|  | [optional]

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **usersForgotPasswordPost**
> usersForgotPasswordPost($forgot_password)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
RetroTax\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// RetroTax\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');

$api_instance = new RetroTax\Api\DefaultApi();
$forgot_password = new \RetroTax\ForgotPassword(); // \RetroTax\ForgotPassword | 

try {
    $api_instance->usersForgotPasswordPost($forgot_password);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->usersForgotPasswordPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **forgot_password** | [**\RetroTax\ForgotPassword**](../Model/\RetroTax\ForgotPassword.md)|  |

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **usersForgotUsernamePost**
> usersForgotUsernamePost($forgot_username)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
RetroTax\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// RetroTax\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');

$api_instance = new RetroTax\Api\DefaultApi();
$forgot_username = new \RetroTax\ForgotUsername(); // \RetroTax\ForgotUsername | 

try {
    $api_instance->usersForgotUsernamePost($forgot_username);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->usersForgotUsernamePost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **forgot_username** | [**\RetroTax\ForgotUsername**](../Model/\RetroTax\ForgotUsername.md)|  |

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **usersPut**
> usersPut($x_auth_token, $x_auth_iv)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new RetroTax\Api\DefaultApi();
$x_auth_token = "x_auth_token_example"; // string | 
$x_auth_iv = "x_auth_iv_example"; // string | 

try {
    $api_instance->usersPut($x_auth_token, $x_auth_iv);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->usersPut: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **x_auth_token** | **string**|  | [optional]
 **x_auth_iv** | **string**|  | [optional]

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **zoneStatusesGet**
> zoneStatusesGet($x_auth_token, $x_auth_iv)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
RetroTax\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// RetroTax\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');

$api_instance = new RetroTax\Api\DefaultApi();
$x_auth_token = "x_auth_token_example"; // string | 
$x_auth_iv = "x_auth_iv_example"; // string | 

try {
    $api_instance->zoneStatusesGet($x_auth_token, $x_auth_iv);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->zoneStatusesGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **x_auth_token** | **string**|  | [optional]
 **x_auth_iv** | **string**|  | [optional]

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **zoneStatusesStatusCodeGet**
> zoneStatusesStatusCodeGet($status_code, $x_auth_token, $x_auth_iv)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
RetroTax\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// RetroTax\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');

$api_instance = new RetroTax\Api\DefaultApi();
$status_code = "status_code_example"; // string | 
$x_auth_token = "x_auth_token_example"; // string | 
$x_auth_iv = "x_auth_iv_example"; // string | 

try {
    $api_instance->zoneStatusesStatusCodeGet($status_code, $x_auth_token, $x_auth_iv);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->zoneStatusesStatusCodeGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **status_code** | **string**|  |
 **x_auth_token** | **string**|  | [optional]
 **x_auth_iv** | **string**|  | [optional]

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **zonesGet**
> \RetroTax\Zones zonesGet($x_auth_token, $x_auth_iv)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
RetroTax\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// RetroTax\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');

$api_instance = new RetroTax\Api\DefaultApi();
$x_auth_token = "x_auth_token_example"; // string | 
$x_auth_iv = "x_auth_iv_example"; // string | 

try {
    $result = $api_instance->zonesGet($x_auth_token, $x_auth_iv);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->zonesGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **x_auth_token** | **string**|  | [optional]
 **x_auth_iv** | **string**|  | [optional]

### Return type

[**\RetroTax\Zones**](../Model/Zones.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **zonesZoneCodeGet**
> \RetroTax\Zone zonesZoneCodeGet($zone_code, $x_auth_token, $x_auth_iv)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
RetroTax\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// RetroTax\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');

$api_instance = new RetroTax\Api\DefaultApi();
$zone_code = "zone_code_example"; // string | 
$x_auth_token = "x_auth_token_example"; // string | 
$x_auth_iv = "x_auth_iv_example"; // string | 

try {
    $result = $api_instance->zonesZoneCodeGet($zone_code, $x_auth_token, $x_auth_iv);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->zonesZoneCodeGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **zone_code** | **string**|  |
 **x_auth_token** | **string**|  | [optional]
 **x_auth_iv** | **string**|  | [optional]

### Return type

[**\RetroTax\Zone**](../Model/Zone.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

