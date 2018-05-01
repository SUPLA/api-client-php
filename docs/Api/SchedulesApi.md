# Swagger\Client\SchedulesApi

All URIs are relative to *https://cloud.supla.org/api*

Method | HTTP request | Description
------------- | ------------- | -------------
[**createSchedule**](SchedulesApi.md#createSchedule) | **POST** /schedules | Create a new schedule
[**deleteSchedule**](SchedulesApi.md#deleteSchedule) | **DELETE** /schedules/{id} | Delete Schedule
[**enableSchedules**](SchedulesApi.md#enableSchedules) | **PATCH** /schedules | Enable schedules
[**getSchedule**](SchedulesApi.md#getSchedule) | **GET** /schedules/{id} | Get Schedule
[**getSchedules**](SchedulesApi.md#getSchedules) | **GET** /schedules | Get schedules list
[**updateSchedule**](SchedulesApi.md#updateSchedule) | **PUT** /schedules/{id} | Update schedule


# **createSchedule**
> \Swagger\Client\Model\Schedule createSchedule($body, $x_accept_version)

Create a new schedule

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: bearer
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');
// Configure OAuth2 access token for authorization: password
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\SchedulesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Swagger\Client\Model\ScheduleRequest(); // \Swagger\Client\Model\ScheduleRequest | 
$x_accept_version = "x_accept_version_example"; // string | API Version

try {
    $result = $apiInstance->createSchedule($body, $x_accept_version);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SchedulesApi->createSchedule: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\ScheduleRequest**](../Model/ScheduleRequest.md)|  |
 **x_accept_version** | **string**| API Version | [optional]

### Return type

[**\Swagger\Client\Model\Schedule**](../Model/Schedule.md)

### Authorization

[bearer](../../README.md#bearer), [password](../../README.md#password)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteSchedule**
> deleteSchedule($id, $x_accept_version)

Delete Schedule

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: bearer
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');
// Configure OAuth2 access token for authorization: password
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\SchedulesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | 
$x_accept_version = "x_accept_version_example"; // string | API Version

try {
    $apiInstance->deleteSchedule($id, $x_accept_version);
} catch (Exception $e) {
    echo 'Exception when calling SchedulesApi->deleteSchedule: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**|  |
 **x_accept_version** | **string**| API Version | [optional]

### Return type

void (empty response body)

### Authorization

[bearer](../../README.md#bearer), [password](../../README.md#password)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **enableSchedules**
> enableSchedules($body, $x_accept_version)

Enable schedules

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: bearer
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');
// Configure OAuth2 access token for authorization: password
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\SchedulesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Swagger\Client\Model\Body9(); // \Swagger\Client\Model\Body9 | 
$x_accept_version = "x_accept_version_example"; // string | API Version

try {
    $apiInstance->enableSchedules($body, $x_accept_version);
} catch (Exception $e) {
    echo 'Exception when calling SchedulesApi->enableSchedules: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\Body9**](../Model/Body9.md)|  |
 **x_accept_version** | **string**| API Version | [optional]

### Return type

void (empty response body)

### Authorization

[bearer](../../README.md#bearer), [password](../../README.md#password)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getSchedule**
> \Swagger\Client\Model\Schedule getSchedule($id, $x_accept_version, $include)

Get Schedule

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: bearer
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');
// Configure OAuth2 access token for authorization: password
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\SchedulesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | 
$x_accept_version = "x_accept_version_example"; // string | API Version
$include = array("include_example"); // string[] | Specify what extra fields to include in the response.

try {
    $result = $apiInstance->getSchedule($id, $x_accept_version, $include);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SchedulesApi->getSchedule: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**|  |
 **x_accept_version** | **string**| API Version | [optional]
 **include** | [**string[]**](../Model/string.md)| Specify what extra fields to include in the response. | [optional]

### Return type

[**\Swagger\Client\Model\Schedule**](../Model/Schedule.md)

### Authorization

[bearer](../../README.md#bearer), [password](../../README.md#password)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getSchedules**
> \Swagger\Client\Model\Schedule[] getSchedules($x_accept_version, $include)

Get schedules list

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: bearer
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');
// Configure OAuth2 access token for authorization: password
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\SchedulesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$x_accept_version = "x_accept_version_example"; // string | API Version
$include = array("include_example"); // string[] | Specify what extra fields to include in the response.

try {
    $result = $apiInstance->getSchedules($x_accept_version, $include);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SchedulesApi->getSchedules: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **x_accept_version** | **string**| API Version | [optional]
 **include** | [**string[]**](../Model/string.md)| Specify what extra fields to include in the response. | [optional]

### Return type

[**\Swagger\Client\Model\Schedule[]**](../Model/Schedule.md)

### Authorization

[bearer](../../README.md#bearer), [password](../../README.md#password)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateSchedule**
> \Swagger\Client\Model\Schedule updateSchedule($id, $body, $x_accept_version, $enable)

Update schedule

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: bearer
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');
// Configure OAuth2 access token for authorization: password
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\SchedulesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | 
$body = new \Swagger\Client\Model\ScheduleRequest(); // \Swagger\Client\Model\ScheduleRequest | 
$x_accept_version = "x_accept_version_example"; // string | API Version
$enable = true; // bool | Set to `true` to enable the schedule after saving.

try {
    $result = $apiInstance->updateSchedule($id, $body, $x_accept_version, $enable);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SchedulesApi->updateSchedule: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**|  |
 **body** | [**\Swagger\Client\Model\ScheduleRequest**](../Model/ScheduleRequest.md)|  |
 **x_accept_version** | **string**| API Version | [optional]
 **enable** | **bool**| Set to &#x60;true&#x60; to enable the schedule after saving. | [optional]

### Return type

[**\Swagger\Client\Model\Schedule**](../Model/Schedule.md)

### Authorization

[bearer](../../README.md#bearer), [password](../../README.md#password)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

