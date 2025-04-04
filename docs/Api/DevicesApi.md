# Supla\ApiClient\DevicesApi

All URIs are relative to `https://YOUR_SUPLA_SERVER/api/v3`, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**deleteDevice()**](DevicesApi.md#deleteDevice) | **DELETE** /iodevices/{id} | Delete the device |
| [**executeDeviceAction()**](DevicesApi.md#executeDeviceAction) | **PATCH** /iodevices/{id} |  |
| [**getIoDevice()**](DevicesApi.md#getIoDevice) | **GET** /iodevices/{id} | Get Device |
| [**getIoDeviceNotifications()**](DevicesApi.md#getIoDeviceNotifications) | **GET** /iodevices/{device}/notifications |  |
| [**getIoDevices()**](DevicesApi.md#getIoDevices) | **GET** /iodevices | Get Devices |
| [**getSubDevices()**](DevicesApi.md#getSubDevices) | **GET** /subdevices |  |
| [**updateDevice()**](DevicesApi.md#updateDevice) | **PUT** /iodevices/{id} |  |


## `deleteDevice()`

```php
deleteDevice($id, $safe)
```

Delete the device

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = Supla\ApiClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure Bearer authorization: BearerAuth
$config = Supla\ApiClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Supla\ApiClient\Api\DevicesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | ID
$safe = True; // bool | Whether to perform actions that require data loss (e.g. delete schedules when deleting the device)

try {
    $apiInstance->deleteDevice($id, $safe);
} catch (Exception $e) {
    echo 'Exception when calling DevicesApi->deleteDevice: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| ID | |
| **safe** | **bool**| Whether to perform actions that require data loss (e.g. delete schedules when deleting the device) | [optional] |

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

## `executeDeviceAction()`

```php
executeDeviceAction($id, $executeSubDeviceActionRequest): \Supla\ApiClient\Model\Device
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = Supla\ApiClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure Bearer authorization: BearerAuth
$config = Supla\ApiClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Supla\ApiClient\Api\DevicesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | ID
$executeSubDeviceActionRequest = new \Supla\ApiClient\Model\ExecuteSubDeviceActionRequest(); // \Supla\ApiClient\Model\ExecuteSubDeviceActionRequest

try {
    $result = $apiInstance->executeDeviceAction($id, $executeSubDeviceActionRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DevicesApi->executeDeviceAction: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| ID | |
| **executeSubDeviceActionRequest** | [**\Supla\ApiClient\Model\ExecuteSubDeviceActionRequest**](../Model/ExecuteSubDeviceActionRequest.md)|  | |

### Return type

[**\Supla\ApiClient\Model\Device**](../Model/Device.md)

### Authorization

[OAuth2](../../README.md#OAuth2), [BearerAuth](../../README.md#BearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getIoDevice()`

```php
getIoDevice($id, $include): \Supla\ApiClient\Model\Device
```

Get Device

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = Supla\ApiClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure Bearer authorization: BearerAuth
$config = Supla\ApiClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Supla\ApiClient\Api\DevicesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = new \Supla\ApiClient\Model\\Supla\ApiClient\Model\GetIoDeviceIdParameter(); // \Supla\ApiClient\Model\GetIoDeviceIdParameter | ID
$include = array('include_example'); // string[] | List of extra fields to include in the response.

try {
    $result = $apiInstance->getIoDevice($id, $include);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DevicesApi->getIoDevice: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | [**\Supla\ApiClient\Model\GetIoDeviceIdParameter**](../Model/.md)| ID | |
| **include** | [**string[]**](../Model/string.md)| List of extra fields to include in the response. | [optional] |

### Return type

[**\Supla\ApiClient\Model\Device**](../Model/Device.md)

### Authorization

[OAuth2](../../README.md#OAuth2), [BearerAuth](../../README.md#BearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getIoDeviceNotifications()`

```php
getIoDeviceNotifications($device, $include): \Supla\ApiClient\Model\Notification[]
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = Supla\ApiClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure Bearer authorization: BearerAuth
$config = Supla\ApiClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Supla\ApiClient\Api\DevicesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$device = 56; // int | ID
$include = array('include_example'); // string[] | List of extra fields to include in the response.

try {
    $result = $apiInstance->getIoDeviceNotifications($device, $include);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DevicesApi->getIoDeviceNotifications: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **device** | **int**| ID | |
| **include** | [**string[]**](../Model/string.md)| List of extra fields to include in the response. | [optional] |

### Return type

[**\Supla\ApiClient\Model\Notification[]**](../Model/Notification.md)

### Authorization

[OAuth2](../../README.md#OAuth2), [BearerAuth](../../README.md#BearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getIoDevices()`

```php
getIoDevices($include): \Supla\ApiClient\Model\Device[]
```

Get Devices

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = Supla\ApiClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure Bearer authorization: BearerAuth
$config = Supla\ApiClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Supla\ApiClient\Api\DevicesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$include = array('include_example'); // string[] | List of extra fields to include in the response.

try {
    $result = $apiInstance->getIoDevices($include);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DevicesApi->getIoDevices: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **include** | [**string[]**](../Model/string.md)| List of extra fields to include in the response. | [optional] |

### Return type

[**\Supla\ApiClient\Model\Device[]**](../Model/Device.md)

### Authorization

[OAuth2](../../README.md#OAuth2), [BearerAuth](../../README.md#BearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getSubDevices()`

```php
getSubDevices(): object[]
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = Supla\ApiClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure Bearer authorization: BearerAuth
$config = Supla\ApiClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Supla\ApiClient\Api\DevicesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->getSubDevices();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DevicesApi->getSubDevices: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

**object[]**

### Authorization

[OAuth2](../../README.md#OAuth2), [BearerAuth](../../README.md#BearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateDevice()`

```php
updateDevice($id, $updateDeviceRequest, $safe): \Supla\ApiClient\Model\Device
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = Supla\ApiClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure Bearer authorization: BearerAuth
$config = Supla\ApiClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Supla\ApiClient\Api\DevicesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | ID
$updateDeviceRequest = new \Supla\ApiClient\Model\UpdateDeviceRequest(); // \Supla\ApiClient\Model\UpdateDeviceRequest
$safe = True; // bool | Whether to perform actions that require data loss (e.g. disable schedules when disabling the device)

try {
    $result = $apiInstance->updateDevice($id, $updateDeviceRequest, $safe);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DevicesApi->updateDevice: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| ID | |
| **updateDeviceRequest** | [**\Supla\ApiClient\Model\UpdateDeviceRequest**](../Model/UpdateDeviceRequest.md)|  | |
| **safe** | **bool**| Whether to perform actions that require data loss (e.g. disable schedules when disabling the device) | [optional] |

### Return type

[**\Supla\ApiClient\Model\Device**](../Model/Device.md)

### Authorization

[OAuth2](../../README.md#OAuth2), [BearerAuth](../../README.md#BearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
