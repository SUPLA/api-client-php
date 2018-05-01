# Swagger\Client\ClientAppsApi

All URIs are relative to *https://cloud.supla.org/api*

Method | HTTP request | Description
------------- | ------------- | -------------
[**deleteClientApp**](ClientAppsApi.md#deleteClientApp) | **DELETE** /client-apps/{id} | Delete Client App
[**getClientApps**](ClientAppsApi.md#getClientApps) | **GET** /client-apps | Get client apps
[**updateClientApp**](ClientAppsApi.md#updateClientApp) | **PUT** /client-apps/{id} | Update client app


# **deleteClientApp**
> deleteClientApp($id, $x_accept_version)

Delete Client App

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

$apiInstance = new Swagger\Client\Api\ClientAppsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | 
$x_accept_version = "x_accept_version_example"; // string | API Version

try {
    $apiInstance->deleteClientApp($id, $x_accept_version);
} catch (Exception $e) {
    echo 'Exception when calling ClientAppsApi->deleteClientApp: ', $e->getMessage(), PHP_EOL;
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

# **getClientApps**
> \Swagger\Client\Model\ClientApp[] getClientApps($x_accept_version, $include)

Get client apps

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

$apiInstance = new Swagger\Client\Api\ClientAppsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$x_accept_version = "x_accept_version_example"; // string | API Version
$include = array("include_example"); // string[] | Specify what extra fields to include in the response.

try {
    $result = $apiInstance->getClientApps($x_accept_version, $include);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ClientAppsApi->getClientApps: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **x_accept_version** | **string**| API Version | [optional]
 **include** | [**string[]**](../Model/string.md)| Specify what extra fields to include in the response. | [optional]

### Return type

[**\Swagger\Client\Model\ClientApp[]**](../Model/ClientApp.md)

### Authorization

[bearer](../../README.md#bearer), [password](../../README.md#password)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateClientApp**
> \Swagger\Client\Model\ClientApp updateClientApp($id, $body, $x_accept_version)

Update client app

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

$apiInstance = new Swagger\Client\Api\ClientAppsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | 
$body = new \Swagger\Client\Model\Body7(); // \Swagger\Client\Model\Body7 | 
$x_accept_version = "x_accept_version_example"; // string | API Version

try {
    $result = $apiInstance->updateClientApp($id, $body, $x_accept_version);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ClientAppsApi->updateClientApp: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**|  |
 **body** | [**\Swagger\Client\Model\Body7**](../Model/Body7.md)|  |
 **x_accept_version** | **string**| API Version | [optional]

### Return type

[**\Swagger\Client\Model\ClientApp**](../Model/ClientApp.md)

### Authorization

[bearer](../../README.md#bearer), [password](../../README.md#password)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

