# Supla\ApiClient\ClientAppsApi

All URIs are relative to `https://YOUR_SUPLA_SERVER/api/v3`.

Method | HTTP request | Description
------------- | ------------- | -------------
[**deleteClientApp()**](ClientAppsApi.md#deleteClientApp) | **DELETE** /client-apps/{id} | Delete the client app
[**getClientApps()**](ClientAppsApi.md#getClientApps) | **GET** /client-apps | Get Client Apps
[**updateClientApp()**](ClientAppsApi.md#updateClientApp) | **PUT** /client-apps/{id} | Update the client app


## `deleteClientApp()`

```php
deleteClientApp($id)
```

Delete the client app

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: BearerAuth
$config = Supla\ApiClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: OAuth2
$config = Supla\ApiClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Supla\ApiClient\Api\ClientAppsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | ID

try {
    $apiInstance->deleteClientApp($id);
} catch (Exception $e) {
    echo 'Exception when calling ClientAppsApi->deleteClientApp: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| ID |

### Return type

void (empty response body)

### Authorization

[BearerAuth](../../README.md#BearerAuth), [OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getClientApps()`

```php
getClientApps($include): \Supla\ApiClient\Model\ClientApp[]
```

Get Client Apps

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: BearerAuth
$config = Supla\ApiClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: OAuth2
$config = Supla\ApiClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Supla\ApiClient\Api\ClientAppsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$include = array('include_example'); // string[] | List of extra fields to include in the response.

try {
    $result = $apiInstance->getClientApps($include);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ClientAppsApi->getClientApps: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **include** | [**string[]**](../Model/string.md)| List of extra fields to include in the response. | [optional]

### Return type

[**\Supla\ApiClient\Model\ClientApp[]**](../Model/ClientApp.md)

### Authorization

[BearerAuth](../../README.md#BearerAuth), [OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateClientApp()`

```php
updateClientApp($id, $inlineObject5): \Supla\ApiClient\Model\ClientApp
```

Update the client app

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: BearerAuth
$config = Supla\ApiClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: OAuth2
$config = Supla\ApiClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Supla\ApiClient\Api\ClientAppsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | ID
$inlineObject5 = new \Supla\ApiClient\Model\InlineObject5(); // \Supla\ApiClient\Model\InlineObject5

try {
    $result = $apiInstance->updateClientApp($id, $inlineObject5);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ClientAppsApi->updateClientApp: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| ID |
 **inlineObject5** | [**\Supla\ApiClient\Model\InlineObject5**](../Model/InlineObject5.md)|  |

### Return type

[**\Supla\ApiClient\Model\ClientApp**](../Model/ClientApp.md)

### Authorization

[BearerAuth](../../README.md#BearerAuth), [OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
