# Supla\ApiClient\ChannelsApi

All URIs are relative to `https://YOUR_SUPLA_SERVER/api/v2.4.0`.

Method | HTTP request | Description
------------- | ------------- | -------------
[**configureChannel()**](ChannelsApi.md#configureChannel) | **PATCH** /channels/{id}/settings | 
[**executeAction()**](ChannelsApi.md#executeAction) | **PATCH** /channels/{id} | 
[**getChannel()**](ChannelsApi.md#getChannel) | **GET** /channels/{id} | Get Channel
[**getChannels()**](ChannelsApi.md#getChannels) | **GET** /channels | Get Channels
[**updateChannel()**](ChannelsApi.md#updateChannel) | **PUT** /channels/{id} | 


## `configureChannel()`

```php
configureChannel($id, $inlineObject2): \Supla\ApiClient\Model\Channel
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: BearerAuth
$config = Supla\ApiClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: OAuth2
$config = Supla\ApiClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Supla\ApiClient\Api\ChannelsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | ID
$inlineObject2 = new \Supla\ApiClient\Model\InlineObject2(); // \Supla\ApiClient\Model\InlineObject2

try {
    $result = $apiInstance->configureChannel($id, $inlineObject2);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ChannelsApi->configureChannel: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| ID |
 **inlineObject2** | [**\Supla\ApiClient\Model\InlineObject2**](../Model/InlineObject2.md)|  |

### Return type

[**\Supla\ApiClient\Model\Channel**](../Model/Channel.md)

### Authorization

[BearerAuth](../../README.md#BearerAuth), [OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `executeAction()`

```php
executeAction($id, $uNKNOWNBASETYPE)
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: BearerAuth
$config = Supla\ApiClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: OAuth2
$config = Supla\ApiClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Supla\ApiClient\Api\ChannelsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | ID
$uNKNOWNBASETYPE = new \Supla\ApiClient\Model\UNKNOWN_BASE_TYPE(); // \Supla\ApiClient\Model\UNKNOWN_BASE_TYPE

try {
    $apiInstance->executeAction($id, $uNKNOWNBASETYPE);
} catch (Exception $e) {
    echo 'Exception when calling ChannelsApi->executeAction: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| ID |
 **uNKNOWNBASETYPE** | [**\Supla\ApiClient\Model\UNKNOWN_BASE_TYPE**](../Model/UNKNOWN_BASE_TYPE.md)|  |

### Return type

void (empty response body)

### Authorization

[BearerAuth](../../README.md#BearerAuth), [OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getChannel()`

```php
getChannel($id, $include): \Supla\ApiClient\Model\Channel
```

Get Channel

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: BearerAuth
$config = Supla\ApiClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: OAuth2
$config = Supla\ApiClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Supla\ApiClient\Api\ChannelsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | ID
$include = array('include_example'); // string[] | List of extra fields to include in the response.

try {
    $result = $apiInstance->getChannel($id, $include);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ChannelsApi->getChannel: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| ID |
 **include** | [**string[]**](../Model/string.md)| List of extra fields to include in the response. | [optional]

### Return type

[**\Supla\ApiClient\Model\Channel**](../Model/Channel.md)

### Authorization

[BearerAuth](../../README.md#BearerAuth), [OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getChannels()`

```php
getChannels($function, $io, $hasFunction, $skipIds, $include): \Supla\ApiClient\Model\Channel[]
```

Get Channels

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: BearerAuth
$config = Supla\ApiClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: OAuth2
$config = Supla\ApiClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Supla\ApiClient\Api\ChannelsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$function = array(new \Supla\ApiClient\Model\\Supla\ApiClient\Model\ChannelFunctionEnumNames()); // \Supla\ApiClient\Model\ChannelFunctionEnumNames[]
$io = 'io_example'; // string | Return only `input` or `output` channels.
$hasFunction = True; // bool | Return only channels with (`true`) or without (`false`) chosen functions.
$skipIds = array(56); // int[]
$include = array('include_example'); // string[] | List of extra fields to include in the response.

try {
    $result = $apiInstance->getChannels($function, $io, $hasFunction, $skipIds, $include);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ChannelsApi->getChannels: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **function** | [**\Supla\ApiClient\Model\ChannelFunctionEnumNames[]**](../Model/\Supla\ApiClient\Model\ChannelFunctionEnumNames.md)|  | [optional]
 **io** | **string**| Return only &#x60;input&#x60; or &#x60;output&#x60; channels. | [optional]
 **hasFunction** | **bool**| Return only channels with (&#x60;true&#x60;) or without (&#x60;false&#x60;) chosen functions. | [optional]
 **skipIds** | [**int[]**](../Model/int.md)|  | [optional]
 **include** | [**string[]**](../Model/string.md)| List of extra fields to include in the response. | [optional]

### Return type

[**\Supla\ApiClient\Model\Channel[]**](../Model/Channel.md)

### Authorization

[BearerAuth](../../README.md#BearerAuth), [OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateChannel()`

```php
updateChannel($id, $inlineObject1, $safe): \Supla\ApiClient\Model\Channel
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: BearerAuth
$config = Supla\ApiClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: OAuth2
$config = Supla\ApiClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Supla\ApiClient\Api\ChannelsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | ID
$inlineObject1 = new \Supla\ApiClient\Model\InlineObject1(); // \Supla\ApiClient\Model\InlineObject1
$safe = True; // bool | Whether to perform actions that require data loss (e.g. delete schedules when changing channel function)

try {
    $result = $apiInstance->updateChannel($id, $inlineObject1, $safe);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ChannelsApi->updateChannel: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| ID |
 **inlineObject1** | [**\Supla\ApiClient\Model\InlineObject1**](../Model/InlineObject1.md)|  |
 **safe** | **bool**| Whether to perform actions that require data loss (e.g. delete schedules when changing channel function) | [optional]

### Return type

[**\Supla\ApiClient\Model\Channel**](../Model/Channel.md)

### Authorization

[BearerAuth](../../README.md#BearerAuth), [OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
