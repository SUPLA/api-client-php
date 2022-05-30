# Supla\ApiClient\ChannelGroupsApi

All URIs are relative to `https://YOUR_SUPLA_SERVER/api/v2.4.0`.

Method | HTTP request | Description
------------- | ------------- | -------------
[**createChannelGroup()**](ChannelGroupsApi.md#createChannelGroup) | **POST** /channel-groups | Create a new channel group
[**deleteChannelGroup()**](ChannelGroupsApi.md#deleteChannelGroup) | **DELETE** /channel-groups/{id} | Delete the channel group
[**executeActionOnChannelGroup()**](ChannelGroupsApi.md#executeActionOnChannelGroup) | **PATCH** /channel-groups/{id} | 
[**getChannelGroup()**](ChannelGroupsApi.md#getChannelGroup) | **GET** /channel-groups/{id} | Get Channel Group
[**getChannelGroups()**](ChannelGroupsApi.md#getChannelGroups) | **GET** /channel-groups | Get Channel Groups
[**updateChannelGroup()**](ChannelGroupsApi.md#updateChannelGroup) | **PUT** /channel-groups/{id} | Update the channel group


## `createChannelGroup()`

```php
createChannelGroup($inlineObject3): \Supla\ApiClient\Model\ChannelGroup
```

Create a new channel group

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: BearerAuth
$config = Supla\ApiClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: OAuth2
$config = Supla\ApiClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Supla\ApiClient\Api\ChannelGroupsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$inlineObject3 = new \Supla\ApiClient\Model\InlineObject3(); // \Supla\ApiClient\Model\InlineObject3

try {
    $result = $apiInstance->createChannelGroup($inlineObject3);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ChannelGroupsApi->createChannelGroup: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **inlineObject3** | [**\Supla\ApiClient\Model\InlineObject3**](../Model/InlineObject3.md)|  |

### Return type

[**\Supla\ApiClient\Model\ChannelGroup**](../Model/ChannelGroup.md)

### Authorization

[BearerAuth](../../README.md#BearerAuth), [OAuth2](../../README.md#OAuth2)

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


// Configure Bearer authorization: BearerAuth
$config = Supla\ApiClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: OAuth2
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

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| ID |

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

## `executeActionOnChannelGroup()`

```php
executeActionOnChannelGroup($id, $uNKNOWNBASETYPE)
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: BearerAuth
$config = Supla\ApiClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: OAuth2
$config = Supla\ApiClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Supla\ApiClient\Api\ChannelGroupsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | ID
$uNKNOWNBASETYPE = new \Supla\ApiClient\Model\UNKNOWN_BASE_TYPE(); // \Supla\ApiClient\Model\UNKNOWN_BASE_TYPE

try {
    $apiInstance->executeActionOnChannelGroup($id, $uNKNOWNBASETYPE);
} catch (Exception $e) {
    echo 'Exception when calling ChannelGroupsApi->executeActionOnChannelGroup: ', $e->getMessage(), PHP_EOL;
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

## `getChannelGroup()`

```php
getChannelGroup($id, $include): \Supla\ApiClient\Model\ChannelGroup
```

Get Channel Group

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: BearerAuth
$config = Supla\ApiClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: OAuth2
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

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| ID |
 **include** | [**string[]**](../Model/string.md)| List of extra fields to include in the response. | [optional]

### Return type

[**\Supla\ApiClient\Model\ChannelGroup**](../Model/ChannelGroup.md)

### Authorization

[BearerAuth](../../README.md#BearerAuth), [OAuth2](../../README.md#OAuth2)

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


// Configure Bearer authorization: BearerAuth
$config = Supla\ApiClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: OAuth2
$config = Supla\ApiClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Supla\ApiClient\Api\ChannelGroupsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$function = array(new \Supla\ApiClient\Model\\Supla\ApiClient\Model\ChannelFunctionEnumNames()); // \Supla\ApiClient\Model\ChannelFunctionEnumNames[]
$include = array('include_example'); // string[] | List of extra fields to include in the response.

try {
    $result = $apiInstance->getChannelGroups($function, $include);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ChannelGroupsApi->getChannelGroups: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **function** | [**\Supla\ApiClient\Model\ChannelFunctionEnumNames[]**](../Model/\Supla\ApiClient\Model\ChannelFunctionEnumNames.md)|  | [optional]
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

## `updateChannelGroup()`

```php
updateChannelGroup($id, $inlineObject4): \Supla\ApiClient\Model\ChannelGroup
```

Update the channel group

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: BearerAuth
$config = Supla\ApiClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: OAuth2
$config = Supla\ApiClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Supla\ApiClient\Api\ChannelGroupsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | ID
$inlineObject4 = new \Supla\ApiClient\Model\InlineObject4(); // \Supla\ApiClient\Model\InlineObject4

try {
    $result = $apiInstance->updateChannelGroup($id, $inlineObject4);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ChannelGroupsApi->updateChannelGroup: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| ID |
 **inlineObject4** | [**\Supla\ApiClient\Model\InlineObject4**](../Model/InlineObject4.md)|  |

### Return type

[**\Supla\ApiClient\Model\ChannelGroup**](../Model/ChannelGroup.md)

### Authorization

[BearerAuth](../../README.md#BearerAuth), [OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
