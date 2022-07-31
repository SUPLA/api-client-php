# Supla\ApiClient\ChannelsApi

All URIs are relative to `https://YOUR_SUPLA_SERVER/api/v2.4.0`.

Method | HTTP request | Description
------------- | ------------- | -------------
[**configureChannel()**](ChannelsApi.md#configureChannel) | **PATCH** /channels/{id}/settings | 
[**deleteChannelMeasurementLogs()**](ChannelsApi.md#deleteChannelMeasurementLogs) | **DELETE** /channels/{channel}/measurement-logs | Delete channel measurement logs.
[**executeAction()**](ChannelsApi.md#executeAction) | **PATCH** /channels/{id} | 
[**getChannel()**](ChannelsApi.md#getChannel) | **GET** /channels/{id} | Get Channel
[**getChannelChannelGroups()**](ChannelsApi.md#getChannelChannelGroups) | **GET** /channels/{id}/channel-groups | Get Channel Groups that the given channel belongs to
[**getChannelMeasurementLogs()**](ChannelsApi.md#getChannelMeasurementLogs) | **GET** /channels/{channel}/measurement-logs | Get channel measurement logs.
[**getChannelMeasurementLogsCsvFile()**](ChannelsApi.md#getChannelMeasurementLogsCsvFile) | **GET** /channels/{channel}/measurement-logs-csv | Get measurement logs as zipped CSV file.
[**getChannelScenes()**](ChannelsApi.md#getChannelScenes) | **GET** /channels/{channel}/scenes | Get channel scenes
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

## `deleteChannelMeasurementLogs()`

```php
deleteChannelMeasurementLogs($channel)
```

Delete channel measurement logs.

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
$channel = 56; // int | ID

try {
    $apiInstance->deleteChannelMeasurementLogs($channel);
} catch (Exception $e) {
    echo 'Exception when calling ChannelsApi->deleteChannelMeasurementLogs: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **channel** | **int**| ID |

### Return type

void (empty response body)

### Authorization

[BearerAuth](../../README.md#BearerAuth), [OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: Not defined
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

## `getChannelChannelGroups()`

```php
getChannelChannelGroups($id, $include): \Supla\ApiClient\Model\ChannelGroup[]
```

Get Channel Groups that the given channel belongs to

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
    $result = $apiInstance->getChannelChannelGroups($id, $include);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ChannelsApi->getChannelChannelGroups: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| ID |
 **include** | [**string[]**](../Model/string.md)| List of extra fields to include in the response. | [optional]

### Return type

[**\Supla\ApiClient\Model\ChannelGroup[]**](../Model/ChannelGroup.md)

### Authorization

[BearerAuth](../../README.md#BearerAuth), [OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getChannelMeasurementLogs()`

```php
getChannelMeasurementLogs($channel, $afterTimestamp, $beforeTimestamp, $order, $sparse, $limit, $offset): OneOfArrayArrayArrayArrayArrayArray
```

Get channel measurement logs.

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
$channel = 56; // int | ID
$afterTimestamp = 56; // int | Fetch log items created after this timestamp.
$beforeTimestamp = 56; // int | Fetch log items created before this timestamp.
$order = 'DESC'; // string | Whether to order items ascending or descending by creation date.
$sparse = 56; // int | Set the maximum items to return from the given period. If specified, the `limit` and `offset` params are ignored. For example, if you fetches the logs from the whole year and set the `sparse` param to `12`, the API will try to return up to 12 log items, equally distributed throug the whole year. Min: 1, Max: 1000.
$limit = 5000; // int | Maximum items count in response, from 1 to 5000.
$offset = 0; // int | Pagination offset.

try {
    $result = $apiInstance->getChannelMeasurementLogs($channel, $afterTimestamp, $beforeTimestamp, $order, $sparse, $limit, $offset);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ChannelsApi->getChannelMeasurementLogs: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **channel** | **int**| ID |
 **afterTimestamp** | **int**| Fetch log items created after this timestamp. | [optional]
 **beforeTimestamp** | **int**| Fetch log items created before this timestamp. | [optional]
 **order** | **string**| Whether to order items ascending or descending by creation date. | [optional] [default to &#39;DESC&#39;]
 **sparse** | **int**| Set the maximum items to return from the given period. If specified, the &#x60;limit&#x60; and &#x60;offset&#x60; params are ignored. For example, if you fetches the logs from the whole year and set the &#x60;sparse&#x60; param to &#x60;12&#x60;, the API will try to return up to 12 log items, equally distributed throug the whole year. Min: 1, Max: 1000. | [optional]
 **limit** | **int**| Maximum items count in response, from 1 to 5000. | [optional] [default to 5000]
 **offset** | **int**| Pagination offset. | [optional] [default to 0]

### Return type

[**OneOfArrayArrayArrayArrayArrayArray**](../Model/OneOfArrayArrayArrayArrayArrayArray.md)

### Authorization

[BearerAuth](../../README.md#BearerAuth), [OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getChannelMeasurementLogsCsvFile()`

```php
getChannelMeasurementLogsCsvFile($channel)
```

Get measurement logs as zipped CSV file.

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
$channel = 56; // int | ID

try {
    $apiInstance->getChannelMeasurementLogsCsvFile($channel);
} catch (Exception $e) {
    echo 'Exception when calling ChannelsApi->getChannelMeasurementLogsCsvFile: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **channel** | **int**| ID |

### Return type

void (empty response body)

### Authorization

[BearerAuth](../../README.md#BearerAuth), [OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/zip`, `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getChannelScenes()`

```php
getChannelScenes($channel, $include): \Supla\ApiClient\Model\Scene[]
```

Get channel scenes

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
$channel = 56; // int | ID
$include = array('include_example'); // string[] | List of extra fields to include in the response.

try {
    $result = $apiInstance->getChannelScenes($channel, $include);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ChannelsApi->getChannelScenes: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **channel** | **int**| ID |
 **include** | [**string[]**](../Model/string.md)| List of extra fields to include in the response. | [optional]

### Return type

[**\Supla\ApiClient\Model\Scene[]**](../Model/Scene.md)

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
