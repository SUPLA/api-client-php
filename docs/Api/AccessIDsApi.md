# Swagger\Client\AccessIDsApi

All URIs are relative to *https://cloud.supla.org/api*

Method | HTTP request | Description
------------- | ------------- | -------------
[**accessidsGet**](AccessIDsApi.md#accessidsGet) | **GET** /accessids | Get Access IDs list
[**accessidsPost**](AccessIDsApi.md#accessidsPost) | **POST** /accessids | Create a new Access ID
[**deleteAccessID**](AccessIDsApi.md#deleteAccessID) | **DELETE** /accessids/{id} | Delete Access Identifier
[**getAccessID**](AccessIDsApi.md#getAccessID) | **GET** /accessids/{id} | Get Access ID
[**updateAccessID**](AccessIDsApi.md#updateAccessID) | **PUT** /accessids/{id} | Edit Access ID


# **accessidsGet**
> \Swagger\Client\Model\AccessID[] accessidsGet($x_accept_version, $include)

Get Access IDs list

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

$apiInstance = new Swagger\Client\Api\AccessIDsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$x_accept_version = "x_accept_version_example"; // string | API Version
$include = array("include_example"); // string[] | Specify what extra fields to include in the response.

try {
    $result = $apiInstance->accessidsGet($x_accept_version, $include);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccessIDsApi->accessidsGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **x_accept_version** | **string**| API Version | [optional]
 **include** | [**string[]**](../Model/string.md)| Specify what extra fields to include in the response. | [optional]

### Return type

[**\Swagger\Client\Model\AccessID[]**](../Model/AccessID.md)

### Authorization

[bearer](../../README.md#bearer), [password](../../README.md#password)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **accessidsPost**
> \Swagger\Client\Model\AccessID accessidsPost($x_accept_version)

Create a new Access ID

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

$apiInstance = new Swagger\Client\Api\AccessIDsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$x_accept_version = "x_accept_version_example"; // string | API Version

try {
    $result = $apiInstance->accessidsPost($x_accept_version);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccessIDsApi->accessidsPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **x_accept_version** | **string**| API Version | [optional]

### Return type

[**\Swagger\Client\Model\AccessID**](../Model/AccessID.md)

### Authorization

[bearer](../../README.md#bearer), [password](../../README.md#password)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteAccessID**
> deleteAccessID($id, $x_accept_version)

Delete Access Identifier

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

$apiInstance = new Swagger\Client\Api\AccessIDsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | 
$x_accept_version = "x_accept_version_example"; // string | API Version

try {
    $apiInstance->deleteAccessID($id, $x_accept_version);
} catch (Exception $e) {
    echo 'Exception when calling AccessIDsApi->deleteAccessID: ', $e->getMessage(), PHP_EOL;
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

# **getAccessID**
> \Swagger\Client\Model\AccessID getAccessID($id, $x_accept_version, $include)

Get Access ID

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

$apiInstance = new Swagger\Client\Api\AccessIDsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | 
$x_accept_version = "x_accept_version_example"; // string | API Version
$include = array("include_example"); // string[] | Specify what extra fields to include in the response.

try {
    $result = $apiInstance->getAccessID($id, $x_accept_version, $include);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccessIDsApi->getAccessID: ', $e->getMessage(), PHP_EOL;
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

[**\Swagger\Client\Model\AccessID**](../Model/AccessID.md)

### Authorization

[bearer](../../README.md#bearer), [password](../../README.md#password)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateAccessID**
> \Swagger\Client\Model\AccessID updateAccessID($id, $body, $x_accept_version)

Edit Access ID

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

$apiInstance = new Swagger\Client\Api\AccessIDsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | 
$body = new \Swagger\Client\Model\Body10(); // \Swagger\Client\Model\Body10 | 
$x_accept_version = "x_accept_version_example"; // string | API Version

try {
    $result = $apiInstance->updateAccessID($id, $body, $x_accept_version);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccessIDsApi->updateAccessID: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**|  |
 **body** | [**\Swagger\Client\Model\Body10**](../Model/Body10.md)|  |
 **x_accept_version** | **string**| API Version | [optional]

### Return type

[**\Swagger\Client\Model\AccessID**](../Model/AccessID.md)

### Authorization

[bearer](../../README.md#bearer), [password](../../README.md#password)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

