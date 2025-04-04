# Supla\ApiClient\AccessIdentifiersApi

All URIs are relative to `https://YOUR_SUPLA_SERVER/api/v3`, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**createAccessIdentifier()**](AccessIdentifiersApi.md#createAccessIdentifier) | **POST** /accessids | Create a new Access Identifier |
| [**deleteAccessIdentifier()**](AccessIdentifiersApi.md#deleteAccessIdentifier) | **DELETE** /accessids/{id} | Delete the access identifier |
| [**getAccessIdentifier()**](AccessIdentifiersApi.md#getAccessIdentifier) | **GET** /accessids/{id} | Get AID by ID |
| [**getAccessIdentifiers()**](AccessIdentifiersApi.md#getAccessIdentifiers) | **GET** /accessids | Get Access Identifiers |
| [**updateAccessIdentifier()**](AccessIdentifiersApi.md#updateAccessIdentifier) | **PUT** /accessids/{id} | Update the access identifier |


## `createAccessIdentifier()`

```php
createAccessIdentifier(): \Supla\ApiClient\Model\AccessIdentifier
```

Create a new Access Identifier

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = Supla\ApiClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure Bearer authorization: BearerAuth
$config = Supla\ApiClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Supla\ApiClient\Api\AccessIdentifiersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->createAccessIdentifier();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccessIdentifiersApi->createAccessIdentifier: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\Supla\ApiClient\Model\AccessIdentifier**](../Model/AccessIdentifier.md)

### Authorization

[OAuth2](../../README.md#OAuth2), [BearerAuth](../../README.md#BearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteAccessIdentifier()`

```php
deleteAccessIdentifier($id)
```

Delete the access identifier

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = Supla\ApiClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure Bearer authorization: BearerAuth
$config = Supla\ApiClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Supla\ApiClient\Api\AccessIdentifiersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | ID

try {
    $apiInstance->deleteAccessIdentifier($id);
} catch (Exception $e) {
    echo 'Exception when calling AccessIdentifiersApi->deleteAccessIdentifier: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| ID | |

### Return type

void (empty response body)

### Authorization

[OAuth2](../../README.md#OAuth2), [BearerAuth](../../README.md#BearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getAccessIdentifier()`

```php
getAccessIdentifier($id, $include): \Supla\ApiClient\Model\AccessIdentifier
```

Get AID by ID

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = Supla\ApiClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure Bearer authorization: BearerAuth
$config = Supla\ApiClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Supla\ApiClient\Api\AccessIdentifiersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | ID
$include = array('include_example'); // string[] | List of extra fields to include in the response.

try {
    $result = $apiInstance->getAccessIdentifier($id, $include);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccessIdentifiersApi->getAccessIdentifier: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| ID | |
| **include** | [**string[]**](../Model/string.md)| List of extra fields to include in the response. | [optional] |

### Return type

[**\Supla\ApiClient\Model\AccessIdentifier**](../Model/AccessIdentifier.md)

### Authorization

[OAuth2](../../README.md#OAuth2), [BearerAuth](../../README.md#BearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getAccessIdentifiers()`

```php
getAccessIdentifiers($include): \Supla\ApiClient\Model\AccessIdentifier[]
```

Get Access Identifiers

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = Supla\ApiClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure Bearer authorization: BearerAuth
$config = Supla\ApiClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Supla\ApiClient\Api\AccessIdentifiersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$include = array('include_example'); // string[] | List of extra fields to include in the response.

try {
    $result = $apiInstance->getAccessIdentifiers($include);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccessIdentifiersApi->getAccessIdentifiers: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **include** | [**string[]**](../Model/string.md)| List of extra fields to include in the response. | [optional] |

### Return type

[**\Supla\ApiClient\Model\AccessIdentifier[]**](../Model/AccessIdentifier.md)

### Authorization

[OAuth2](../../README.md#OAuth2), [BearerAuth](../../README.md#BearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateAccessIdentifier()`

```php
updateAccessIdentifier($id, $updateAccessIdentifierRequest): \Supla\ApiClient\Model\AccessIdentifier
```

Update the access identifier

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = Supla\ApiClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure Bearer authorization: BearerAuth
$config = Supla\ApiClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Supla\ApiClient\Api\AccessIdentifiersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | ID
$updateAccessIdentifierRequest = new \Supla\ApiClient\Model\UpdateAccessIdentifierRequest(); // \Supla\ApiClient\Model\UpdateAccessIdentifierRequest

try {
    $result = $apiInstance->updateAccessIdentifier($id, $updateAccessIdentifierRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccessIdentifiersApi->updateAccessIdentifier: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| ID | |
| **updateAccessIdentifierRequest** | [**\Supla\ApiClient\Model\UpdateAccessIdentifierRequest**](../Model/UpdateAccessIdentifierRequest.md)|  | |

### Return type

[**\Supla\ApiClient\Model\AccessIdentifier**](../Model/AccessIdentifier.md)

### Authorization

[OAuth2](../../README.md#OAuth2), [BearerAuth](../../README.md#BearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
