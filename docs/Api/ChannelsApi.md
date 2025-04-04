# Supla\ApiClient\ChannelsApi

Supla API Client

All URIs are relative to https://svr107.supla.org/api/v3, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**configureChannel()**](ChannelsApi.md#configureChannel) | **PATCH** /channels/{id}/settings |  |
| [**createChannelReaction()**](ChannelsApi.md#createChannelReaction) | **POST** /channels/{channel}/reactions | Create channel reaction |
| [**deleteChannel()**](ChannelsApi.md#deleteChannel) | **DELETE** /channels/{id} | Delete the channel |
| [**deleteChannelMeasurementLogs()**](ChannelsApi.md#deleteChannelMeasurementLogs) | **DELETE** /channels/{channel}/measurement-logs | Delete channel measurement logs. |
| [**deleteChannelReaction()**](ChannelsApi.md#deleteChannelReaction) | **DELETE** /channels/{channel}/reactions/{reaction} | Delete channel reaction |
| [**downloadChannelMeasurementLogs()**](ChannelsApi.md#downloadChannelMeasurementLogs) | **GET** /channels/{channel}/measurement-logs-download | Get measurement logs as a zipped CSV file. |
| [**executeAction()**](ChannelsApi.md#executeAction) | **PATCH** /channels/{id} |  |
| [**executeSubDeviceAction()**](ChannelsApi.md#executeSubDeviceAction) | **PATCH** /channels/{channelId}/subdevice |  |
| [**getChannel()**](ChannelsApi.md#getChannel) | **GET** /channels/{id} | Get Channel |
| [**getChannelChannelGroups()**](ChannelsApi.md#getChannelChannelGroups) | **GET** /channels/{id}/channel-groups | Get Channel Groups that the given channel belongs to |
| [**getChannelDirectLinks()**](ChannelsApi.md#getChannelDirectLinks) | **GET** /channels/{channel}/direct-links | Get channel direct links |
| [**getChannelMeasurementLogs()**](ChannelsApi.md#getChannelMeasurementLogs) | **GET** /channels/{channel}/measurement-logs | Get channel measurement logs. |
| [**getChannelNotifications()**](ChannelsApi.md#getChannelNotifications) | **GET** /channels/{channel}/notifications |  |
| [**getChannelReaction()**](ChannelsApi.md#getChannelReaction) | **GET** /channels/{channel}/reactions/{reaction} | Get channel reaction |
| [**getChannelReactions()**](ChannelsApi.md#getChannelReactions) | **GET** /channels/{channel}/reactions | Get channel reactions |
| [**getChannelScenes()**](ChannelsApi.md#getChannelScenes) | **GET** /channels/{channel}/scenes | Get channel scenes |
| [**getChannels()**](ChannelsApi.md#getChannels) | **GET** /channels | Get Channels |
| [**getChannelsStates()**](ChannelsApi.md#getChannelsStates) | **GET** /channels/states | Get Channels states |
| [**getReactions()**](ChannelsApi.md#getReactions) | **GET** /reactions | Get reactions |
| [**updateChannel()**](ChannelsApi.md#updateChannel) | **PUT** /channels/{id} |  |
| [**updateChannelReaction()**](ChannelsApi.md#updateChannelReaction) | **PUT** /channels/{channel}/reactions/{reaction} | Update channel reaction |


## `configureChannel()`

```php
configureChannel($id, $configureChannelRequest): \Supla\ApiClient\Model\Channel
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = Supla\ApiClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure Bearer authorization: BearerAuth
$config = Supla\ApiClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Supla\ApiClient\Api\ChannelsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | ID
$configureChannelRequest = new \Supla\ApiClient\Model\ConfigureChannelRequest(); // \Supla\ApiClient\Model\ConfigureChannelRequest

try {
    $result = $apiInstance->configureChannel($id, $configureChannelRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ChannelsApi->configureChannel: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| ID | |
| **configureChannelRequest** | [**\Supla\ApiClient\Model\ConfigureChannelRequest**](../Model/ConfigureChannelRequest.md)|  | |

### Return type

[**\Supla\ApiClient\Model\Channel**](../Model/Channel.md)

### Authorization

[OAuth2](../../README.md#OAuth2), [BearerAuth](../../README.md#BearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createChannelReaction()`

```php
createChannelReaction($channel, $createChannelReactionRequest, $include): \Supla\ApiClient\Model\Reaction
```

Create channel reaction

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = Supla\ApiClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure Bearer authorization: BearerAuth
$config = Supla\ApiClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Supla\ApiClient\Api\ChannelsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$channel = 56; // int | ID
$createChannelReactionRequest = new \Supla\ApiClient\Model\CreateChannelReactionRequest(); // \Supla\ApiClient\Model\CreateChannelReactionRequest
$include = array('include_example'); // string[] | List of extra fields to include in the response.

try {
    $result = $apiInstance->createChannelReaction($channel, $createChannelReactionRequest, $include);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ChannelsApi->createChannelReaction: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **channel** | **int**| ID | |
| **createChannelReactionRequest** | [**\Supla\ApiClient\Model\CreateChannelReactionRequest**](../Model/CreateChannelReactionRequest.md)|  | |
| **include** | [**string[]**](../Model/string.md)| List of extra fields to include in the response. | [optional] |

### Return type

[**\Supla\ApiClient\Model\Reaction**](../Model/Reaction.md)

### Authorization

[OAuth2](../../README.md#OAuth2), [BearerAuth](../../README.md#BearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteChannel()`

```php
deleteChannel($id, $safe)
```

Delete the channel

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = Supla\ApiClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure Bearer authorization: BearerAuth
$config = Supla\ApiClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Supla\ApiClient\Api\ChannelsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | ID
$safe = True; // bool | Whether to perform actions that require data loss (e.g. delete schedules when deleting the channel)

try {
    $apiInstance->deleteChannel($id, $safe);
} catch (Exception $e) {
    echo 'Exception when calling ChannelsApi->deleteChannel: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| ID | |
| **safe** | **bool**| Whether to perform actions that require data loss (e.g. delete schedules when deleting the channel) | [optional] |

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

## `deleteChannelMeasurementLogs()`

```php
deleteChannelMeasurementLogs($channel, $logsType)
```

Delete channel measurement logs.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = Supla\ApiClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure Bearer authorization: BearerAuth
$config = Supla\ApiClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Supla\ApiClient\Api\ChannelsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$channel = 56; // int | ID
$logsType = 'logsType_example'; // string | Type of the logs to delete. Some devices may gather multiple log types.

try {
    $apiInstance->deleteChannelMeasurementLogs($channel, $logsType);
} catch (Exception $e) {
    echo 'Exception when calling ChannelsApi->deleteChannelMeasurementLogs: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **channel** | **int**| ID | |
| **logsType** | **string**| Type of the logs to delete. Some devices may gather multiple log types. | [optional] |

### Return type

void (empty response body)

### Authorization

[OAuth2](../../README.md#OAuth2), [BearerAuth](../../README.md#BearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteChannelReaction()`

```php
deleteChannelReaction($channel, $reaction)
```

Delete channel reaction

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = Supla\ApiClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure Bearer authorization: BearerAuth
$config = Supla\ApiClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Supla\ApiClient\Api\ChannelsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$channel = 56; // int | Channel ID
$reaction = 56; // int | Reaction ID

try {
    $apiInstance->deleteChannelReaction($channel, $reaction);
} catch (Exception $e) {
    echo 'Exception when calling ChannelsApi->deleteChannelReaction: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **channel** | **int**| Channel ID | |
| **reaction** | **int**| Reaction ID | |

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

## `downloadChannelMeasurementLogs()`

```php
downloadChannelMeasurementLogs($channel, $logsType)
```

Get measurement logs as a zipped CSV file.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = Supla\ApiClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure Bearer authorization: BearerAuth
$config = Supla\ApiClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Supla\ApiClient\Api\ChannelsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$channel = 56; // int | ID
$logsType = 'logsType_example'; // string | Type of the logs to delete. Some devices may gather multiple log types.

try {
    $apiInstance->downloadChannelMeasurementLogs($channel, $logsType);
} catch (Exception $e) {
    echo 'Exception when calling ChannelsApi->downloadChannelMeasurementLogs: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **channel** | **int**| ID | |
| **logsType** | **string**| Type of the logs to delete. Some devices may gather multiple log types. | [optional] |

### Return type

void (empty response body)

### Authorization

[OAuth2](../../README.md#OAuth2), [BearerAuth](../../README.md#BearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/zip`, `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `executeAction()`

```php
executeAction($id, $executeActionRequest)
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = Supla\ApiClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure Bearer authorization: BearerAuth
$config = Supla\ApiClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Supla\ApiClient\Api\ChannelsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | ID
$executeActionRequest = new \Supla\ApiClient\Model\ExecuteActionRequest(); // \Supla\ApiClient\Model\ExecuteActionRequest

try {
    $apiInstance->executeAction($id, $executeActionRequest);
} catch (Exception $e) {
    echo 'Exception when calling ChannelsApi->executeAction: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| ID | |
| **executeActionRequest** | [**\Supla\ApiClient\Model\ExecuteActionRequest**](../Model/ExecuteActionRequest.md)|  | |

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

## `executeSubDeviceAction()`

```php
executeSubDeviceAction($channelId, $executeSubDeviceActionRequest): object
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = Supla\ApiClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure Bearer authorization: BearerAuth
$config = Supla\ApiClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Supla\ApiClient\Api\ChannelsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$channelId = 56; // int | ID
$executeSubDeviceActionRequest = new \Supla\ApiClient\Model\ExecuteSubDeviceActionRequest(); // \Supla\ApiClient\Model\ExecuteSubDeviceActionRequest

try {
    $result = $apiInstance->executeSubDeviceAction($channelId, $executeSubDeviceActionRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ChannelsApi->executeSubDeviceAction: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **channelId** | **int**| ID | |
| **executeSubDeviceActionRequest** | [**\Supla\ApiClient\Model\ExecuteSubDeviceActionRequest**](../Model/ExecuteSubDeviceActionRequest.md)|  | |

### Return type

**object**

### Authorization

[OAuth2](../../README.md#OAuth2), [BearerAuth](../../README.md#BearerAuth)

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


// Configure OAuth2 access token for authorization: OAuth2
$config = Supla\ApiClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure Bearer authorization: BearerAuth
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

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| ID | |
| **include** | [**string[]**](../Model/string.md)| List of extra fields to include in the response. | [optional] |

### Return type

[**\Supla\ApiClient\Model\Channel**](../Model/Channel.md)

### Authorization

[OAuth2](../../README.md#OAuth2), [BearerAuth](../../README.md#BearerAuth)

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


// Configure OAuth2 access token for authorization: OAuth2
$config = Supla\ApiClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure Bearer authorization: BearerAuth
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

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| ID | |
| **include** | [**string[]**](../Model/string.md)| List of extra fields to include in the response. | [optional] |

### Return type

[**\Supla\ApiClient\Model\ChannelGroup[]**](../Model/ChannelGroup.md)

### Authorization

[OAuth2](../../README.md#OAuth2), [BearerAuth](../../README.md#BearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getChannelDirectLinks()`

```php
getChannelDirectLinks($channel, $include): \Supla\ApiClient\Model\DirectLink[]
```

Get channel direct links

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = Supla\ApiClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure Bearer authorization: BearerAuth
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
    $result = $apiInstance->getChannelDirectLinks($channel, $include);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ChannelsApi->getChannelDirectLinks: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **channel** | **int**| ID | |
| **include** | [**string[]**](../Model/string.md)| List of extra fields to include in the response. | [optional] |

### Return type

[**\Supla\ApiClient\Model\DirectLink[]**](../Model/DirectLink.md)

### Authorization

[OAuth2](../../README.md#OAuth2), [BearerAuth](../../README.md#BearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getChannelMeasurementLogs()`

```php
getChannelMeasurementLogs($channel, $afterTimestamp, $beforeTimestamp, $order, $sparse, $logsType, $limit, $offset): \Supla\ApiClient\Model\GetChannelMeasurementLogs200Response
```

Get channel measurement logs.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = Supla\ApiClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure Bearer authorization: BearerAuth
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
$logsType = 'logsType_example'; // string | Type of the logs to return. Some devices may gather multiple log types.
$limit = 5000; // int | Maximum items count in response, from 1 to 5000.
$offset = 0; // int | Pagination offset.

try {
    $result = $apiInstance->getChannelMeasurementLogs($channel, $afterTimestamp, $beforeTimestamp, $order, $sparse, $logsType, $limit, $offset);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ChannelsApi->getChannelMeasurementLogs: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **channel** | **int**| ID | |
| **afterTimestamp** | **int**| Fetch log items created after this timestamp. | [optional] |
| **beforeTimestamp** | **int**| Fetch log items created before this timestamp. | [optional] |
| **order** | **string**| Whether to order items ascending or descending by creation date. | [optional] [default to &#39;DESC&#39;] |
| **sparse** | **int**| Set the maximum items to return from the given period. If specified, the &#x60;limit&#x60; and &#x60;offset&#x60; params are ignored. For example, if you fetches the logs from the whole year and set the &#x60;sparse&#x60; param to &#x60;12&#x60;, the API will try to return up to 12 log items, equally distributed throug the whole year. Min: 1, Max: 1000. | [optional] |
| **logsType** | **string**| Type of the logs to return. Some devices may gather multiple log types. | [optional] |
| **limit** | **int**| Maximum items count in response, from 1 to 5000. | [optional] [default to 5000] |
| **offset** | **int**| Pagination offset. | [optional] [default to 0] |

### Return type

[**\Supla\ApiClient\Model\GetChannelMeasurementLogs200Response**](../Model/GetChannelMeasurementLogs200Response.md)

### Authorization

[OAuth2](../../README.md#OAuth2), [BearerAuth](../../README.md#BearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getChannelNotifications()`

```php
getChannelNotifications($channel, $onlyManaged, $include): \Supla\ApiClient\Model\Notification[]
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = Supla\ApiClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure Bearer authorization: BearerAuth
$config = Supla\ApiClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Supla\ApiClient\Api\ChannelsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$channel = 56; // int | ID
$onlyManaged = True; // bool | Return only notification managed by the device (i.e. originating from the firmware). Can be only set to `true`.
$include = array('include_example'); // string[] | List of extra fields to include in the response.

try {
    $result = $apiInstance->getChannelNotifications($channel, $onlyManaged, $include);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ChannelsApi->getChannelNotifications: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **channel** | **int**| ID | |
| **onlyManaged** | **bool**| Return only notification managed by the device (i.e. originating from the firmware). Can be only set to &#x60;true&#x60;. | [optional] |
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

## `getChannelReaction()`

```php
getChannelReaction($channel, $reaction, $include): \Supla\ApiClient\Model\Reaction
```

Get channel reaction

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = Supla\ApiClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure Bearer authorization: BearerAuth
$config = Supla\ApiClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Supla\ApiClient\Api\ChannelsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$channel = 56; // int | Channel ID
$reaction = 56; // int | Reaction ID
$include = array('include_example'); // string[] | List of extra fields to include in the response.

try {
    $result = $apiInstance->getChannelReaction($channel, $reaction, $include);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ChannelsApi->getChannelReaction: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **channel** | **int**| Channel ID | |
| **reaction** | **int**| Reaction ID | |
| **include** | [**string[]**](../Model/string.md)| List of extra fields to include in the response. | [optional] |

### Return type

[**\Supla\ApiClient\Model\Reaction**](../Model/Reaction.md)

### Authorization

[OAuth2](../../README.md#OAuth2), [BearerAuth](../../README.md#BearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getChannelReactions()`

```php
getChannelReactions($channel, $include): \Supla\ApiClient\Model\Reaction[]
```

Get channel reactions

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = Supla\ApiClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure Bearer authorization: BearerAuth
$config = Supla\ApiClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Supla\ApiClient\Api\ChannelsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$channel = 56; // int | Channel ID
$include = array('include_example'); // string[] | List of extra fields to include in the response.

try {
    $result = $apiInstance->getChannelReactions($channel, $include);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ChannelsApi->getChannelReactions: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **channel** | **int**| Channel ID | |
| **include** | [**string[]**](../Model/string.md)| List of extra fields to include in the response. | [optional] |

### Return type

[**\Supla\ApiClient\Model\Reaction[]**](../Model/Reaction.md)

### Authorization

[OAuth2](../../README.md#OAuth2), [BearerAuth](../../README.md#BearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

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


// Configure OAuth2 access token for authorization: OAuth2
$config = Supla\ApiClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure Bearer authorization: BearerAuth
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

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **channel** | **int**| ID | |
| **include** | [**string[]**](../Model/string.md)| List of extra fields to include in the response. | [optional] |

### Return type

[**\Supla\ApiClient\Model\Scene[]**](../Model/Scene.md)

### Authorization

[OAuth2](../../README.md#OAuth2), [BearerAuth](../../README.md#BearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getChannels()`

```php
getChannels($function, $io, $hasFunction, $skipIds, $deviceIds, $type, $include, $forIntegration): \Supla\ApiClient\Model\Channel[]
```

Get Channels

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = Supla\ApiClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure Bearer authorization: BearerAuth
$config = Supla\ApiClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Supla\ApiClient\Api\ChannelsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$function = array('function_example'); // string[]
$io = 'io_example'; // string | Return only `input` or `output` channels.
$hasFunction = True; // bool | Return only channels with (`true`) or without (`false`) chosen functions.
$skipIds = array(56); // int[]
$deviceIds = array(56); // int[]
$type = array('type_example'); // string[]
$include = array('include_example'); // string[] | List of extra fields to include in the response.
$forIntegration = 'forIntegration_example'; // string | Select an integration that the channels should be returned for.

try {
    $result = $apiInstance->getChannels($function, $io, $hasFunction, $skipIds, $deviceIds, $type, $include, $forIntegration);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ChannelsApi->getChannels: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **function** | [**string[]**](../Model/string.md)|  | [optional] |
| **io** | **string**| Return only &#x60;input&#x60; or &#x60;output&#x60; channels. | [optional] |
| **hasFunction** | **bool**| Return only channels with (&#x60;true&#x60;) or without (&#x60;false&#x60;) chosen functions. | [optional] |
| **skipIds** | [**int[]**](../Model/int.md)|  | [optional] |
| **deviceIds** | [**int[]**](../Model/int.md)|  | [optional] |
| **type** | [**string[]**](../Model/string.md)|  | [optional] |
| **include** | [**string[]**](../Model/string.md)| List of extra fields to include in the response. | [optional] |
| **forIntegration** | **string**| Select an integration that the channels should be returned for. | [optional] |

### Return type

[**\Supla\ApiClient\Model\Channel[]**](../Model/Channel.md)

### Authorization

[OAuth2](../../README.md#OAuth2), [BearerAuth](../../README.md#BearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getChannelsStates()`

```php
getChannelsStates(): object[]
```

Get Channels states

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = Supla\ApiClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure Bearer authorization: BearerAuth
$config = Supla\ApiClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Supla\ApiClient\Api\ChannelsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->getChannelsStates();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ChannelsApi->getChannelsStates: ', $e->getMessage(), PHP_EOL;
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

## `getReactions()`

```php
getReactions($include): \Supla\ApiClient\Model\Reaction[]
```

Get reactions

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = Supla\ApiClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure Bearer authorization: BearerAuth
$config = Supla\ApiClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Supla\ApiClient\Api\ChannelsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$include = array('include_example'); // string[] | List of extra fields to include in the response.

try {
    $result = $apiInstance->getReactions($include);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ChannelsApi->getReactions: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **include** | [**string[]**](../Model/string.md)| List of extra fields to include in the response. | [optional] |

### Return type

[**\Supla\ApiClient\Model\Reaction[]**](../Model/Reaction.md)

### Authorization

[OAuth2](../../README.md#OAuth2), [BearerAuth](../../README.md#BearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateChannel()`

```php
updateChannel($id, $updateChannelRequest, $safe): \Supla\ApiClient\Model\Channel
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = Supla\ApiClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure Bearer authorization: BearerAuth
$config = Supla\ApiClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Supla\ApiClient\Api\ChannelsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | ID
$updateChannelRequest = new \Supla\ApiClient\Model\UpdateChannelRequest(); // \Supla\ApiClient\Model\UpdateChannelRequest
$safe = True; // bool | Whether to perform actions that require data loss (e.g. delete schedules when changing channel function)

try {
    $result = $apiInstance->updateChannel($id, $updateChannelRequest, $safe);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ChannelsApi->updateChannel: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| ID | |
| **updateChannelRequest** | [**\Supla\ApiClient\Model\UpdateChannelRequest**](../Model/UpdateChannelRequest.md)|  | |
| **safe** | **bool**| Whether to perform actions that require data loss (e.g. delete schedules when changing channel function) | [optional] |

### Return type

[**\Supla\ApiClient\Model\Channel**](../Model/Channel.md)

### Authorization

[OAuth2](../../README.md#OAuth2), [BearerAuth](../../README.md#BearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateChannelReaction()`

```php
updateChannelReaction($channel, $reaction, $createChannelReactionRequest, $include): \Supla\ApiClient\Model\Reaction
```

Update channel reaction

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = Supla\ApiClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure Bearer authorization: BearerAuth
$config = Supla\ApiClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Supla\ApiClient\Api\ChannelsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$channel = 56; // int | Channel ID
$reaction = 56; // int | Reaction ID
$createChannelReactionRequest = new \Supla\ApiClient\Model\CreateChannelReactionRequest(); // \Supla\ApiClient\Model\CreateChannelReactionRequest
$include = array('include_example'); // string[] | List of extra fields to include in the response.

try {
    $result = $apiInstance->updateChannelReaction($channel, $reaction, $createChannelReactionRequest, $include);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ChannelsApi->updateChannelReaction: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **channel** | **int**| Channel ID | |
| **reaction** | **int**| Reaction ID | |
| **createChannelReactionRequest** | [**\Supla\ApiClient\Model\CreateChannelReactionRequest**](../Model/CreateChannelReactionRequest.md)|  | |
| **include** | [**string[]**](../Model/string.md)| List of extra fields to include in the response. | [optional] |

### Return type

[**\Supla\ApiClient\Model\Reaction**](../Model/Reaction.md)

### Authorization

[OAuth2](../../README.md#OAuth2), [BearerAuth](../../README.md#BearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
