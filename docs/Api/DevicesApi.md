# Supla\ApiClient\DevicesApi

All URIs are relative to `https://YOUR_SUPLA_SERVER/api/v3`.

Method | HTTP request | Description
------------- | ------------- | -------------
[**deleteDevice()**](DevicesApi.md#deleteDevice) | **DELETE** /iodevices/{id} | Delete the device
[**executeDeviceAction()**](DevicesApi.md#executeDeviceAction) | **PATCH** /iodevices/{id} | 
[**getIoDevice()**](DevicesApi.md#getIoDevice) | **GET** /iodevices/{id} | Get Device
[**getIoDeviceNotifications()**](DevicesApi.md#getIoDeviceNotifications) | **GET** /iodevices/{device}/notifications | 
[**getIoDevices()**](DevicesApi.md#getIoDevices) | **GET** /iodevices | Get Devices
[**updateDevice()**](DevicesApi.md#updateDevice) | **PUT** /iodevices/{id} | 


## `deleteDevice()`

```php
deleteDevice($id, $safe)
```

Delete the device

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: BearerAuth
$config = Supla\ApiClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: OAuth2
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

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| ID |
 **safe** | **bool**| Whether to perform actions that require data loss (e.g. delete schedules when deleting the device) | [optional]

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

## `executeDeviceAction()`

```php
executeDeviceAction($id, $inlineObject7): \Supla\ApiClient\Model\Device
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: BearerAuth
$config = Supla\ApiClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: OAuth2
$config = Supla\ApiClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Supla\ApiClient\Api\DevicesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | ID
$inlineObject7 = new \Supla\ApiClient\Model\InlineObject7(); // \Supla\ApiClient\Model\InlineObject7

try {
    $result = $apiInstance->executeDeviceAction($id, $inlineObject7);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DevicesApi->executeDeviceAction: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| ID |
 **inlineObject7** | [**\Supla\ApiClient\Model\InlineObject7**](../Model/InlineObject7.md)|  |

### Return type

[**\Supla\ApiClient\Model\Device**](../Model/Device.md)

### Authorization

[BearerAuth](../../README.md#BearerAuth), [OAuth2](../../README.md#OAuth2)

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


// Configure Bearer authorization: BearerAuth
$config = Supla\ApiClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: OAuth2
$config = Supla\ApiClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Supla\ApiClient\Api\DevicesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = new \Supla\ApiClient\Model\OneOfIntegerString(); // OneOfIntegerString | ID
$include = array('include_example'); // string[] | List of extra fields to include in the response.

try {
    $result = $apiInstance->getIoDevice($id, $include);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DevicesApi->getIoDevice: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | [**OneOfIntegerString**](../Model/.md)| ID |
 **include** | [**string[]**](../Model/string.md)| List of extra fields to include in the response. | [optional]

### Return type

[**\Supla\ApiClient\Model\Device**](../Model/Device.md)

### Authorization

[BearerAuth](../../README.md#BearerAuth), [OAuth2](../../README.md#OAuth2)

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


// Configure Bearer authorization: BearerAuth
$config = Supla\ApiClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: OAuth2
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

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **device** | **int**| ID |
 **include** | [**string[]**](../Model/string.md)| List of extra fields to include in the response. | [optional]

### Return type

[**\Supla\ApiClient\Model\Notification[]**](../Model/Notification.md)

### Authorization

[BearerAuth](../../README.md#BearerAuth), [OAuth2](../../README.md#OAuth2)

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


// Configure Bearer authorization: BearerAuth
$config = Supla\ApiClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: OAuth2
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

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **include** | [**string[]**](../Model/string.md)| List of extra fields to include in the response. | [optional]

### Return type

[**\Supla\ApiClient\Model\Device[]**](../Model/Device.md)

### Authorization

[BearerAuth](../../README.md#BearerAuth), [OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateDevice()`

```php
updateDevice($id, $inlineObject6, $safe): \Supla\ApiClient\Model\Device
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: BearerAuth
$config = Supla\ApiClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: OAuth2
$config = Supla\ApiClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Supla\ApiClient\Api\DevicesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | ID
$inlineObject6 = new \Supla\ApiClient\Model\InlineObject6(); // \Supla\ApiClient\Model\InlineObject6
$safe = True; // bool | Whether to perform actions that require data loss (e.g. disable schedules when disabling the device)

try {
    $result = $apiInstance->updateDevice($id, $inlineObject6, $safe);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DevicesApi->updateDevice: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| ID |
 **inlineObject6** | [**\Supla\ApiClient\Model\InlineObject6**](../Model/InlineObject6.md)|  |
 **safe** | **bool**| Whether to perform actions that require data loss (e.g. disable schedules when disabling the device) | [optional]

### Return type

[**\Supla\ApiClient\Model\Device**](../Model/Device.md)

### Authorization

[BearerAuth](../../README.md#BearerAuth), [OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
