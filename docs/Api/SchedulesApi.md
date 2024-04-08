# Supla\ApiClient\SchedulesApi

All URIs are relative to `https://YOUR_SUPLA_SERVER/api/v3`.

Method | HTTP request | Description
------------- | ------------- | -------------
[**getSchedules()**](SchedulesApi.md#getSchedules) | **GET** /schedules | Get Schedules


## `getSchedules()`

```php
getSchedules($include): \Supla\ApiClient\Model\Schedule[]
```

Get Schedules

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: BearerAuth
$config = Supla\ApiClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: OAuth2
$config = Supla\ApiClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Supla\ApiClient\Api\SchedulesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$include = array('include_example'); // string[] | List of extra fields to include in the response.

try {
    $result = $apiInstance->getSchedules($include);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SchedulesApi->getSchedules: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **include** | [**string[]**](../Model/string.md)| List of extra fields to include in the response. | [optional]

### Return type

[**\Supla\ApiClient\Model\Schedule[]**](../Model/Schedule.md)

### Authorization

[BearerAuth](../../README.md#BearerAuth), [OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
