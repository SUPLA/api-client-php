# Swagger\Client\ChannelGroupsApi

All URIs are relative to *https://cloud.supla.org/api*

Method | HTTP request | Description
------------- | ------------- | -------------
[**createChannelGroup**](ChannelGroupsApi.md#createChannelGroup) | **POST** /channel-groups | Create a new channel group
[**deleteChannelGroup**](ChannelGroupsApi.md#deleteChannelGroup) | **DELETE** /channel-groups/{id} | Delete Channel Group
[**executeChannelGroupAction**](ChannelGroupsApi.md#executeChannelGroupAction) | **PATCH** /channel-groups/{id} | Execute action on the channel group
[**getChannelGroup**](ChannelGroupsApi.md#getChannelGroup) | **GET** /channel-groups/{id} | Get channel group by ID
[**getChannelGroups**](ChannelGroupsApi.md#getChannelGroups) | **GET** /channel-groups | Get channels list
[**updateChannelGroup**](ChannelGroupsApi.md#updateChannelGroup) | **PUT** /channel-groups/{id} | Update channel group


# **createChannelGroup**
> \Swagger\Client\Model\ChannelGroup createChannelGroup($body, $x_accept_version)

Create a new channel group

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: bearer
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');
// Configure OAuth2 access token for authorization: password
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\ChannelGroupsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Swagger\Client\Model\Body4(); // \Swagger\Client\Model\Body4 | 
$x_accept_version = "x_accept_version_example"; // string | API Version

try {
    $result = $apiInstance->createChannelGroup($body, $x_accept_version);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ChannelGroupsApi->createChannelGroup: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\Body4**](../Model/Body4.md)|  |
 **x_accept_version** | **string**| API Version | [optional]

### Return type

[**\Swagger\Client\Model\ChannelGroup**](../Model/ChannelGroup.md)

### Authorization

[bearer](../../README.md#bearer), [password](../../README.md#password)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteChannelGroup**
> deleteChannelGroup($id, $x_accept_version)

Delete Channel Group

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: bearer
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');
// Configure OAuth2 access token for authorization: password
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\ChannelGroupsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | 
$x_accept_version = "x_accept_version_example"; // string | API Version

try {
    $apiInstance->deleteChannelGroup($id, $x_accept_version);
} catch (Exception $e) {
    echo 'Exception when calling ChannelGroupsApi->deleteChannelGroup: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**|  |
 **x_accept_version** | **string**| API Version | [optional]

### Return type

void (empty response body)

### Authorization

[bearer](../../README.md#bearer), [password](../../README.md#password)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **executeChannelGroupAction**
> executeChannelGroupAction($id, $body, $x_accept_version)

Execute action on the channel group

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: bearer
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');
// Configure OAuth2 access token for authorization: password
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\ChannelGroupsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | 
$body = new \Swagger\Client\Model\Body6(); // \Swagger\Client\Model\Body6 | Defines an action to execute on channel group. The `action` key is always required. The rest of the keys are params depending on the chosen action. Read more on [Github Wiki](https://github.com/SUPLA/supla-cloud/wiki/Channel-Actions).
$x_accept_version = "x_accept_version_example"; // string | API Version

try {
    $apiInstance->executeChannelGroupAction($id, $body, $x_accept_version);
} catch (Exception $e) {
    echo 'Exception when calling ChannelGroupsApi->executeChannelGroupAction: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**|  |
 **body** | [**\Swagger\Client\Model\Body6**](../Model/Body6.md)| Defines an action to execute on channel group. The &#x60;action&#x60; key is always required. The rest of the keys are params depending on the chosen action. Read more on [Github Wiki](https://github.com/SUPLA/supla-cloud/wiki/Channel-Actions). |
 **x_accept_version** | **string**| API Version | [optional]

### Return type

void (empty response body)

### Authorization

[bearer](../../README.md#bearer), [password](../../README.md#password)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getChannelGroup**
> \Swagger\Client\Model\ChannelGroup getChannelGroup($id, $x_accept_version, $include)

Get channel group by ID

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: bearer
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');
// Configure OAuth2 access token for authorization: password
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\ChannelGroupsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | 
$x_accept_version = "x_accept_version_example"; // string | API Version
$include = array("include_example"); // string[] | Specify what extra fields to include in the response.

try {
    $result = $apiInstance->getChannelGroup($id, $x_accept_version, $include);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ChannelGroupsApi->getChannelGroup: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**|  |
 **x_accept_version** | **string**| API Version | [optional]
 **include** | [**string[]**](../Model/string.md)| Specify what extra fields to include in the response. | [optional]

### Return type

[**\Swagger\Client\Model\ChannelGroup**](../Model/ChannelGroup.md)

### Authorization

[bearer](../../README.md#bearer), [password](../../README.md#password)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getChannelGroups**
> \Swagger\Client\Model\ChannelGroup[] getChannelGroups($x_accept_version, $include)

Get channels list

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: bearer
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');
// Configure OAuth2 access token for authorization: password
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\ChannelGroupsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$x_accept_version = "x_accept_version_example"; // string | API Version
$include = array("include_example"); // string[] | Specify what extra fields to include in the response.

try {
    $result = $apiInstance->getChannelGroups($x_accept_version, $include);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ChannelGroupsApi->getChannelGroups: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **x_accept_version** | **string**| API Version | [optional]
 **include** | [**string[]**](../Model/string.md)| Specify what extra fields to include in the response. | [optional]

### Return type

[**\Swagger\Client\Model\ChannelGroup[]**](../Model/ChannelGroup.md)

### Authorization

[bearer](../../README.md#bearer), [password](../../README.md#password)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateChannelGroup**
> \Swagger\Client\Model\ChannelGroup updateChannelGroup($id, $body, $x_accept_version)

Update channel group

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: bearer
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');
// Configure OAuth2 access token for authorization: password
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\ChannelGroupsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | 
$body = new \Swagger\Client\Model\Body5(); // \Swagger\Client\Model\Body5 | 
$x_accept_version = "x_accept_version_example"; // string | API Version

try {
    $result = $apiInstance->updateChannelGroup($id, $body, $x_accept_version);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ChannelGroupsApi->updateChannelGroup: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**|  |
 **body** | [**\Swagger\Client\Model\Body5**](../Model/Body5.md)|  |
 **x_accept_version** | **string**| API Version | [optional]

### Return type

[**\Swagger\Client\Model\ChannelGroup**](../Model/ChannelGroup.md)

### Authorization

[bearer](../../README.md#bearer), [password](../../README.md#password)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

