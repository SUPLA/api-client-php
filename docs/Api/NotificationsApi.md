# Supla\ApiClient\NotificationsApi

All URIs are relative to `https://YOUR_SUPLA_SERVER/api/v3`.

Method | HTTP request | Description
------------- | ------------- | -------------
[**getNotification()**](NotificationsApi.md#getNotification) | **GET** /notifications/{id} | Get Notification
[**sendNotification()**](NotificationsApi.md#sendNotification) | **PATCH** /notifications | Send a notification.
[**updateNotification()**](NotificationsApi.md#updateNotification) | **PUT** /notifications/{notification} | 


## `getNotification()`

```php
getNotification($id, $include): \Supla\ApiClient\Model\Notification
```

Get Notification

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = Supla\ApiClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure Bearer authorization: BearerAuth
$config = Supla\ApiClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Supla\ApiClient\Api\NotificationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | ID
$include = array('include_example'); // string[] | List of extra fields to include in the response.

try {
    $result = $apiInstance->getNotification($id, $include);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NotificationsApi->getNotification: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| ID |
 **include** | [**string[]**](../Model/string.md)| List of extra fields to include in the response. | [optional]

### Return type

[**\Supla\ApiClient\Model\Notification**](../Model/Notification.md)

### Authorization

[OAuth2](../../README.md#OAuth2), [BearerAuth](../../README.md#BearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `sendNotification()`

```php
sendNotification($channelActionParamsSend)
```

Send a notification.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = Supla\ApiClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure Bearer authorization: BearerAuth
$config = Supla\ApiClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Supla\ApiClient\Api\NotificationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$channelActionParamsSend = new \Supla\ApiClient\Model\ChannelActionParamsSend(); // \Supla\ApiClient\Model\ChannelActionParamsSend

try {
    $apiInstance->sendNotification($channelActionParamsSend);
} catch (Exception $e) {
    echo 'Exception when calling NotificationsApi->sendNotification: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **channelActionParamsSend** | [**\Supla\ApiClient\Model\ChannelActionParamsSend**](../Model/ChannelActionParamsSend.md)|  |

### Return type

void (empty response body)

### Authorization

[OAuth2](../../README.md#OAuth2), [BearerAuth](../../README.md#BearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateNotification()`

```php
updateNotification($notification, $channelActionParamsSend, $include): \Supla\ApiClient\Model\Notification
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = Supla\ApiClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure Bearer authorization: BearerAuth
$config = Supla\ApiClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Supla\ApiClient\Api\NotificationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$notification = 56; // int | ID
$channelActionParamsSend = new \Supla\ApiClient\Model\ChannelActionParamsSend(); // \Supla\ApiClient\Model\ChannelActionParamsSend
$include = array('include_example'); // string[] | List of extra fields to include in the response.

try {
    $result = $apiInstance->updateNotification($notification, $channelActionParamsSend, $include);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NotificationsApi->updateNotification: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **notification** | **int**| ID |
 **channelActionParamsSend** | [**\Supla\ApiClient\Model\ChannelActionParamsSend**](../Model/ChannelActionParamsSend.md)|  |
 **include** | [**string[]**](../Model/string.md)| List of extra fields to include in the response. | [optional]

### Return type

[**\Supla\ApiClient\Model\Notification**](../Model/Notification.md)

### Authorization

[OAuth2](../../README.md#OAuth2), [BearerAuth](../../README.md#BearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
