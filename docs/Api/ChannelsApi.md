# Swagger\Client\ChannelsApi

All URIs are relative to *https://cloud.supla.org/api*

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
> executeAction($id, $body, $xAcceptVersion)

Execute action on the channel

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: password
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\ChannelsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | 
$body = new \Swagger\Client\Model\Body3(); // \Swagger\Client\Model\Body3 | Defines an action to execute on channel. The `action` key is always required. The rest of the keys are params depending on the chosen action. Read more on [Github Wiki](https://github.com/SUPLA/supla-cloud/wiki/Channel-Actions).
$xAcceptVersion = "\"2.2.0\""; // string | API Version

try {
    $apiInstance->executeAction($id, $body, $xAcceptVersion);
} catch (Exception $e) {
    echo 'Exception when calling ChannelsApi->executeAction: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**|  |
 **body** | [**\Swagger\Client\Model\Body3**](../Model/Body3.md)| Defines an action to execute on channel. The &#x60;action&#x60; key is always required. The rest of the keys are params depending on the chosen action. Read more on [Github Wiki](https://github.com/SUPLA/supla-cloud/wiki/Channel-Actions). |
 **xAcceptVersion** | **string**| API Version | [optional]

### Return type

void (empty response body)

### Authorization

[password](../../README.md#password)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getChannel**
> \Swagger\Client\Model\Channel getChannel($id, $xAcceptVersion, $include)

Get channel by ID

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: password
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\ChannelsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | 
$xAcceptVersion = "\"2.2.0\""; // string | API Version
$include = array("include_example"); // string[] | Specify what extra fields to include in the response.

try {
    $result = $apiInstance->getChannel($id, $xAcceptVersion, $include);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ChannelsApi->getChannel: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**|  |
 **xAcceptVersion** | **string**| API Version | [optional]
 **include** | [**string[]**](../Model/string.md)| Specify what extra fields to include in the response. | [optional]

### Return type

[**\Swagger\Client\Model\Channel**](../Model/Channel.md)

### Authorization

[password](../../README.md#password)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getChannelMeasurementLogs**
> \Swagger\Client\Model\InlineResponse2003[] getChannelMeasurementLogs($id, $xAcceptVersion, $limit, $offset)

Get measurement logs.

Supported channel functions: `THERMOMETER` and `HUMIDITYANDTEMPERATURE`. Logs ordered by date, descending.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: password
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\ChannelsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | 
$xAcceptVersion = "\"2.2.0\""; // string | API Version
$limit = 5000; // int | Maximum items count in response, from 1 to 5000
$offset = 56; // int | Pagination offset

try {
    $result = $apiInstance->getChannelMeasurementLogs($id, $xAcceptVersion, $limit, $offset);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ChannelsApi->getChannelMeasurementLogs: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**|  |
 **xAcceptVersion** | **string**| API Version | [optional]
 **limit** | **int**| Maximum items count in response, from 1 to 5000 | [optional] [default to 5000]
 **offset** | **int**| Pagination offset | [optional]

### Return type

[**\Swagger\Client\Model\InlineResponse2003[]**](../Model/InlineResponse2003.md)

### Authorization

[password](../../README.md#password)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getChannelMeasurementLogsCsvFile**
> \SplFileObject getChannelMeasurementLogsCsvFile($id, $xAcceptVersion)

Get measurement logs as zipped CSV file.

Supported channel functions: `THERMOMETER` and `HUMIDITYANDTEMPERATURE`. Logs ordered by date, descending.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: password
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\ChannelsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | 
$xAcceptVersion = "\"2.2.0\""; // string | API Version

try {
    $result = $apiInstance->getChannelMeasurementLogsCsvFile($id, $xAcceptVersion);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ChannelsApi->getChannelMeasurementLogsCsvFile: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**|  |
 **xAcceptVersion** | **string**| API Version | [optional]

### Return type

[**\SplFileObject**](../Model/\SplFileObject.md)

### Authorization

[password](../../README.md#password)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/zip

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getChannelSchedules**
> \Swagger\Client\Model\Schedule[] getChannelSchedules($id, $xAcceptVersion, $include)

Get schedules list of the channel

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: password
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\ChannelsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | 
$xAcceptVersion = "\"2.2.0\""; // string | API Version
$include = array("include_example"); // string[] | Specify what extra fields to include in the response.

try {
    $result = $apiInstance->getChannelSchedules($id, $xAcceptVersion, $include);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ChannelsApi->getChannelSchedules: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**|  |
 **xAcceptVersion** | **string**| API Version | [optional]
 **include** | [**string[]**](../Model/string.md)| Specify what extra fields to include in the response. | [optional]

### Return type

[**\Swagger\Client\Model\Schedule[]**](../Model/Schedule.md)

### Authorization

[password](../../README.md#password)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getChannels**
> \Swagger\Client\Model\Channel[] getChannels($xAcceptVersion, $include, $function, $io, $hasFunction)

Get channels list

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: password
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\ChannelsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$xAcceptVersion = "\"2.2.0\""; // string | API Version
$include = array("include_example"); // string[] | Specify what extra fields to include in the response.
$function = array("function_example"); // string[] | 
$io = "io_example"; // string | Return only `input` or `output` channels.
$hasFunction = true; // bool | Return only channels with (`true`) or without (`false`) chosen functions.

try {
    $result = $apiInstance->getChannels($xAcceptVersion, $include, $function, $io, $hasFunction);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ChannelsApi->getChannels: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **xAcceptVersion** | **string**| API Version | [optional]
 **include** | [**string[]**](../Model/string.md)| Specify what extra fields to include in the response. | [optional]
 **function** | [**string[]**](../Model/string.md)|  | [optional]
 **io** | **string**| Return only &#x60;input&#x60; or &#x60;output&#x60; channels. | [optional]
 **hasFunction** | **bool**| Return only channels with (&#x60;true&#x60;) or without (&#x60;false&#x60;) chosen functions. | [optional]

### Return type

[**\Swagger\Client\Model\Channel[]**](../Model/Channel.md)

### Authorization

[password](../../README.md#password)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateChannel**
> \Swagger\Client\Model\Channel updateChannel($id, $body, $xAcceptVersion)

Update channel

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: password
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\ChannelsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | 
$body = new \Swagger\Client\Model\Body2(); // \Swagger\Client\Model\Body2 | 
$xAcceptVersion = "\"2.2.0\""; // string | API Version

try {
    $result = $apiInstance->updateChannel($id, $body, $xAcceptVersion);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ChannelsApi->updateChannel: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**|  |
 **body** | [**\Swagger\Client\Model\Body2**](../Model/Body2.md)|  |
 **xAcceptVersion** | **string**| API Version | [optional]

### Return type

[**\Swagger\Client\Model\Channel**](../Model/Channel.md)

### Authorization

[password](../../README.md#password)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

