# Supla\ApiClient\ChannelGroupsApi

All URIs are relative to `https://YOUR_SUPLA_SERVER/api/v3`, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**createChannelGroup()**](ChannelGroupsApi.md#createChannelGroup) | **POST** /channel-groups | Create a new channel group |
| [**deleteChannelGroup()**](ChannelGroupsApi.md#deleteChannelGroup) | **DELETE** /channel-groups/{id} | Delete the channel group |
| [**executeActionOnChannelGroup()**](ChannelGroupsApi.md#executeActionOnChannelGroup) | **PATCH** /channel-groups/{id} |  |
| [**getChannelGroup()**](ChannelGroupsApi.md#getChannelGroup) | **GET** /channel-groups/{id} | Get Channel Group |
| [**getChannelGroupDirectLinks()**](ChannelGroupsApi.md#getChannelGroupDirectLinks) | **GET** /channel-groups/{channelGroup}/direct-links | Get channel group direct links |
| [**getChannelGroupScenes()**](ChannelGroupsApi.md#getChannelGroupScenes) | **GET** /channel-groups/{channelGroup}/scenes | Get channel group scenes |
| [**getChannelGroups()**](ChannelGroupsApi.md#getChannelGroups) | **GET** /channel-groups | Get Channel Groups |
| [**updateChannelGroup()**](ChannelGroupsApi.md#updateChannelGroup) | **PUT** /channel-groups/{id} | Update the channel group |


## `createChannelGroup()`

```php
createChannelGroup($createChannelGroupRequest): \Supla\ApiClient\Model\ChannelGroup
```

Create a new channel group

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = Supla\ApiClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure Bearer authorization: BearerAuth
$config = Supla\ApiClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Supla\ApiClient\Api\ChannelGroupsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$createChannelGroupRequest = new \Supla\ApiClient\Model\CreateChannelGroupRequest(); // \Supla\ApiClient\Model\CreateChannelGroupRequest

try {
    $result = $apiInstance->createChannelGroup($createChannelGroupRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ChannelGroupsApi->createChannelGroup: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **createChannelGroupRequest** | [**\Supla\ApiClient\Model\CreateChannelGroupRequest**](../Model/CreateChannelGroupRequest.md)|  | |

### Return type

[**\Supla\ApiClient\Model\ChannelGroup**](../Model/ChannelGroup.md)

### Authorization

[OAuth2](../../README.md#OAuth2), [BearerAuth](../../README.md#BearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteChannelGroup()`

```php
deleteChannelGroup($id)
```

Delete the channel group

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = Supla\ApiClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure Bearer authorization: BearerAuth
$config = Supla\ApiClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Supla\ApiClient\Api\ChannelGroupsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | ID

try {
    $apiInstance->deleteChannelGroup($id);
} catch (Exception $e) {
    echo 'Exception when calling ChannelGroupsApi->deleteChannelGroup: ', $e->getMessage(), PHP_EOL;
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

## `executeActionOnChannelGroup()`

```php
executeActionOnChannelGroup($id, $executeActionOnChannelGroupRequest)
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = Supla\ApiClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure Bearer authorization: BearerAuth
$config = Supla\ApiClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Supla\ApiClient\Api\ChannelGroupsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | ID
$executeActionOnChannelGroupRequest = new \Supla\ApiClient\Model\ExecuteActionOnChannelGroupRequest(); // \Supla\ApiClient\Model\ExecuteActionOnChannelGroupRequest

try {
    $apiInstance->executeActionOnChannelGroup($id, $executeActionOnChannelGroupRequest);
} catch (Exception $e) {
    echo 'Exception when calling ChannelGroupsApi->executeActionOnChannelGroup: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| ID | |
| **executeActionOnChannelGroupRequest** | [**\Supla\ApiClient\Model\ExecuteActionOnChannelGroupRequest**](../Model/ExecuteActionOnChannelGroupRequest.md)|  | |

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

## `getChannelGroup()`

```php
getChannelGroup($id, $include): \Supla\ApiClient\Model\ChannelGroup
```

Get Channel Group

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = Supla\ApiClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure Bearer authorization: BearerAuth
$config = Supla\ApiClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Supla\ApiClient\Api\ChannelGroupsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | ID
$include = array('include_example'); // string[] | List of extra fields to include in the response.

try {
    $result = $apiInstance->getChannelGroup($id, $include);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ChannelGroupsApi->getChannelGroup: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| ID | |
| **include** | [**string[]**](../Model/string.md)| List of extra fields to include in the response. | [optional] |

### Return type

[**\Supla\ApiClient\Model\ChannelGroup**](../Model/ChannelGroup.md)

### Authorization

[OAuth2](../../README.md#OAuth2), [BearerAuth](../../README.md#BearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getChannelGroupDirectLinks()`

```php
getChannelGroupDirectLinks($channelGroup, $include): \Supla\ApiClient\Model\DirectLink[]
```

Get channel group direct links

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = Supla\ApiClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure Bearer authorization: BearerAuth
$config = Supla\ApiClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Supla\ApiClient\Api\ChannelGroupsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$channelGroup = 56; // int | ID
$include = array('include_example'); // string[] | List of extra fields to include in the response.

try {
    $result = $apiInstance->getChannelGroupDirectLinks($channelGroup, $include);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ChannelGroupsApi->getChannelGroupDirectLinks: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **channelGroup** | **int**| ID | |
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

## `getChannelGroupScenes()`

```php
getChannelGroupScenes($channelGroup, $include): \Supla\ApiClient\Model\Scene[]
```

Get channel group scenes

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = Supla\ApiClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure Bearer authorization: BearerAuth
$config = Supla\ApiClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Supla\ApiClient\Api\ChannelGroupsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$channelGroup = 56; // int | ID
$include = array('include_example'); // string[] | List of extra fields to include in the response.

try {
    $result = $apiInstance->getChannelGroupScenes($channelGroup, $include);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ChannelGroupsApi->getChannelGroupScenes: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **channelGroup** | **int**| ID | |
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

## `getChannelGroups()`

```php
getChannelGroups($function, $include): \Supla\ApiClient\Model\ChannelGroup[]
```

Get Channel Groups

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = Supla\ApiClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure Bearer authorization: BearerAuth
$config = Supla\ApiClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Supla\ApiClient\Api\ChannelGroupsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$function = array('function_example'); // string[]
$include = array('include_example'); // string[] | List of extra fields to include in the response.

try {
    $result = $apiInstance->getChannelGroups($function, $include);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ChannelGroupsApi->getChannelGroups: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **function** | [**string[]**](../Model/string.md)|  | [optional] |
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

## `updateChannelGroup()`

```php
updateChannelGroup($id, $createChannelGroupRequest): \Supla\ApiClient\Model\ChannelGroup
```

Update the channel group

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = Supla\ApiClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure Bearer authorization: BearerAuth
$config = Supla\ApiClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Supla\ApiClient\Api\ChannelGroupsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | ID
$createChannelGroupRequest = new \Supla\ApiClient\Model\CreateChannelGroupRequest(); // \Supla\ApiClient\Model\CreateChannelGroupRequest

try {
    $result = $apiInstance->updateChannelGroup($id, $createChannelGroupRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ChannelGroupsApi->updateChannelGroup: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| ID | |
| **createChannelGroupRequest** | [**\Supla\ApiClient\Model\CreateChannelGroupRequest**](../Model/CreateChannelGroupRequest.md)|  | |

### Return type

[**\Supla\ApiClient\Model\ChannelGroup**](../Model/ChannelGroup.md)

### Authorization

[OAuth2](../../README.md#OAuth2), [BearerAuth](../../README.md#BearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
