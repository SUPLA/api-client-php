# Swagger\Client\ChannelsApi

Method | HTTP request | Description
------------- | ------------- | -------------
[**executeAction**](ChannelsApi.md#executeAction) | **PATCH** /channels/{id} | Execute action on the channel
[**getChannel**](ChannelsApi.md#getChannel) | **GET** /channels/{id} | Get channel by ID
[**getChannelMeasurementLogs**](ChannelsApi.md#getChannelMeasurementLogs) | **GET** /channels/{id}/measurement-logs | Get measurement logs.
[**getChannelMeasurementLogsCsvFile**](ChannelsApi.md#getChannelMeasurementLogsCsvFile) | **GET** /channels/{id}/measurement-logs-csv | Get measurement logs as zipped CSV file.
[**getChannelSchedules**](ChannelsApi.md#getChannelSchedules) | **GET** /channels/{id}/schedules | Get schedules list of the channel
[**getChannels**](ChannelsApi.md#getChannels) | **GET** /channels | Get channels list
[**updateChannel**](ChannelsApi.md#updateChannel) | **PUT** /channels/{id} | Update channel


# **executeAction**

Execute action on the channel

### Example
```php
$id = 56; // int | 
$body = new \Swagger\Client\Model\ChannelExecuteActionRequest(); // \Swagger\Client\Model\ChannelExecuteActionRequest | Defines an action to execute on channel. The `action` key is always required. The rest of the keys are params depending on the chosen action. Read more on [Github Wiki](https://github.com/SUPLA/supla-cloud/wiki/Channel-Actions).
$client->channels()->executeAction($id, $body);
```


### Parameters
Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**|  |
 **body** | [**\Swagger\Client\Model\ChannelExecuteActionRequest**](../Model/ChannelExecuteActionRequest.md)| Defines an action to execute on channel. The &#x60;action&#x60; key is always required. The rest of the keys are params depending on the chosen action. Read more on [Github Wiki](https://github.com/SUPLA/supla-cloud/wiki/Channel-Actions). |

### Return type

void (empty response body)

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getChannel**

Get channel by ID

### Example
```php
$id = 56; // int | 
$include = array("include_example"); // string[] | Specify what extra fields to include in the response.
$result = $client->channels()->getChannel($id, $include);
print_r($result);
```


### Parameters
Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**|  |
 **include** | [**string[]**](../Model/string.md)| Specify what extra fields to include in the response. | [optional]

### Return type

[**\Swagger\Client\Model\Channel**](../Model/Channel.md)

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getChannelMeasurementLogs**

Get measurement logs.

Supported channel functions: `THERMOMETER` and `HUMIDITYANDTEMPERATURE`. Logs ordered by date, descending.

### Example
```php
$id = 56; // int | 
$limit = 5000; // int | Maximum items count in response, from 1 to 5000
$offset = 56; // int | Pagination offset
$result = $client->channels()->getChannelMeasurementLogs($id, $limit, $offset);
print_r($result);
```


### Parameters
Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**|  |
 **limit** | **int**| Maximum items count in response, from 1 to 5000 | [optional] [default to 5000]
 **offset** | **int**| Pagination offset | [optional]

### Return type

[**\Swagger\Client\Model\ChannelMeasurementLog[]**](../Model/ChannelMeasurementLog.md)

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getChannelMeasurementLogsCsvFile**

Get measurement logs as zipped CSV file.

Supported channel functions: `THERMOMETER` and `HUMIDITYANDTEMPERATURE`. Logs ordered by date, descending.

### Example
```php
$id = 56; // int | 
$result = $client->channels()->getChannelMeasurementLogsCsvFile($id);
print_r($result);
```


### Parameters
Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**|  |

### Return type

[**\SplFileObject**](../Model/\SplFileObject.md)

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getChannelSchedules**

Get schedules list of the channel

### Example
```php
$id = 56; // int | 
$include = array("include_example"); // string[] | Specify what extra fields to include in the response.
$result = $client->channels()->getChannelSchedules($id, $include);
print_r($result);
```


### Parameters
Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**|  |
 **include** | [**string[]**](../Model/string.md)| Specify what extra fields to include in the response. | [optional]

### Return type

[**\Swagger\Client\Model\Schedule[]**](../Model/Schedule.md)

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getChannels**

Get channels list

### Example
```php
$include = array("include_example"); // string[] | Specify what extra fields to include in the response.
$function = array("function_example"); // string[] | 
$io = "io_example"; // string | Return only `input` or `output` channels.
$hasFunction = true; // bool | Return only channels with (`true`) or without (`false`) chosen functions.
$result = $client->channels()->getChannels($include, $function, $io, $hasFunction);
print_r($result);
```


### Parameters
Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **include** | [**string[]**](../Model/string.md)| Specify what extra fields to include in the response. | [optional]
 **function** | [**string[]**](../Model/string.md)|  | [optional]
 **io** | **string**| Return only &#x60;input&#x60; or &#x60;output&#x60; channels. | [optional]
 **hasFunction** | **bool**| Return only channels with (&#x60;true&#x60;) or without (&#x60;false&#x60;) chosen functions. | [optional]

### Return type

[**\Swagger\Client\Model\Channel[]**](../Model/Channel.md)

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateChannel**

Update channel

### Example
```php
$id = 56; // int | 
$body = new \Swagger\Client\Model\ChannelUpdateRequest(); // \Swagger\Client\Model\ChannelUpdateRequest | 
$result = $client->channels()->updateChannel($id, $body);
print_r($result);
```


### Parameters
Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**|  |
 **body** | [**\Swagger\Client\Model\ChannelUpdateRequest**](../Model/ChannelUpdateRequest.md)|  |

### Return type

[**\Swagger\Client\Model\Channel**](../Model/Channel.md)

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

