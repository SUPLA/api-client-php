# Supla\ApiClient\ServerApi

All URIs are relative to `https://YOUR_SUPLA_SERVER/api/v3`, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**getServerInfo()**](ServerApi.md#getServerInfo) | **GET** /server-info | Get the server info |
| [**getSuplaServerStatus()**](ServerApi.md#getSuplaServerStatus) | **GET** /server-status | Get the SUPLA Server status |
| [**getTokenInfo()**](ServerApi.md#getTokenInfo) | **GET** /token-info | Returns information about used access token |


## `getServerInfo()`

```php
getServerInfo(): \Supla\ApiClient\Model\GetServerInfo200Response
```

Get the server info

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Supla\ApiClient\Api\ServerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->getServerInfo();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ServerApi->getServerInfo: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\Supla\ApiClient\Model\GetServerInfo200Response**](../Model/GetServerInfo200Response.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getSuplaServerStatus()`

```php
getSuplaServerStatus(): \Supla\ApiClient\Model\GetSuplaServerStatus200Response
```

Get the SUPLA Server status

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Supla\ApiClient\Api\ServerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->getSuplaServerStatus();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ServerApi->getSuplaServerStatus: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\Supla\ApiClient\Model\GetSuplaServerStatus200Response**](../Model/GetSuplaServerStatus200Response.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getTokenInfo()`

```php
getTokenInfo(): \Supla\ApiClient\Model\GetTokenInfo200Response
```

Returns information about used access token

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = Supla\ApiClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure Bearer authorization: BearerAuth
$config = Supla\ApiClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Supla\ApiClient\Api\ServerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->getTokenInfo();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ServerApi->getTokenInfo: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\Supla\ApiClient\Model\GetTokenInfo200Response**](../Model/GetTokenInfo200Response.md)

### Authorization

[OAuth2](../../README.md#OAuth2), [BearerAuth](../../README.md#BearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
