# Supla\ApiClient\UserIconsApi

All URIs are relative to `https://YOUR_SUPLA_SERVER/api/v2.4.0`.

Method | HTTP request | Description
------------- | ------------- | -------------
[**createUserIcon()**](UserIconsApi.md#createUserIcon) | **POST** /user-icons | Create a new User Icon
[**createUserIconBase64()**](UserIconsApi.md#createUserIconBase64) | **POST** /user-icons.base64 | Create a new User Icon sent in Base64 format.
[**deleteUserIcon()**](UserIconsApi.md#deleteUserIcon) | **DELETE** /user-icons/{id} | Delete the User Icon
[**getUserIcon()**](UserIconsApi.md#getUserIcon) | **GET** /user-icons/{id} | Get User Icon
[**getUserIconImage()**](UserIconsApi.md#getUserIconImage) | **GET** /user-icons/{id}/{imageIndex} | Get User Icon image at specified index
[**getUserIcons()**](UserIconsApi.md#getUserIcons) | **GET** /user-icons | List User Icons


## `createUserIcon()`

```php
createUserIcon($function, $sourceIcon, $image1, $image2, $image3, $image4): \Supla\ApiClient\Model\UserIcon
```

Create a new User Icon

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: BearerAuth
$config = Supla\ApiClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: OAuth2
$config = Supla\ApiClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Supla\ApiClient\Api\UserIconsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$function = new \Supla\ApiClient\Model\ChannelFunctionEnumNames(); // \Supla\ApiClient\Model\ChannelFunctionEnumNames
$sourceIcon = 56; // int | ID of an existing user icon to replace with these new files. Optional.
$image1 = "/path/to/file.txt"; // \SplFileObject
$image2 = "/path/to/file.txt"; // \SplFileObject
$image3 = "/path/to/file.txt"; // \SplFileObject
$image4 = "/path/to/file.txt"; // \SplFileObject

try {
    $result = $apiInstance->createUserIcon($function, $sourceIcon, $image1, $image2, $image3, $image4);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserIconsApi->createUserIcon: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **function** | [**\Supla\ApiClient\Model\ChannelFunctionEnumNames**](../Model/ChannelFunctionEnumNames.md)|  | [optional]
 **sourceIcon** | **int**| ID of an existing user icon to replace with these new files. Optional. | [optional]
 **image1** | **\SplFileObject****\SplFileObject**|  | [optional]
 **image2** | **\SplFileObject****\SplFileObject**|  | [optional]
 **image3** | **\SplFileObject****\SplFileObject**|  | [optional]
 **image4** | **\SplFileObject****\SplFileObject**|  | [optional]

### Return type

[**\Supla\ApiClient\Model\UserIcon**](../Model/UserIcon.md)

### Authorization

[BearerAuth](../../README.md#BearerAuth), [OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: `multipart/form-data`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createUserIconBase64()`

```php
createUserIconBase64($inlineObject12): \Supla\ApiClient\Model\UserIcon
```

Create a new User Icon sent in Base64 format.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: BearerAuth
$config = Supla\ApiClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: OAuth2
$config = Supla\ApiClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Supla\ApiClient\Api\UserIconsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$inlineObject12 = new \Supla\ApiClient\Model\InlineObject12(); // \Supla\ApiClient\Model\InlineObject12

try {
    $result = $apiInstance->createUserIconBase64($inlineObject12);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserIconsApi->createUserIconBase64: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **inlineObject12** | [**\Supla\ApiClient\Model\InlineObject12**](../Model/InlineObject12.md)|  |

### Return type

[**\Supla\ApiClient\Model\UserIcon**](../Model/UserIcon.md)

### Authorization

[BearerAuth](../../README.md#BearerAuth), [OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteUserIcon()`

```php
deleteUserIcon($id)
```

Delete the User Icon

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: BearerAuth
$config = Supla\ApiClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: OAuth2
$config = Supla\ApiClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Supla\ApiClient\Api\UserIconsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | ID

try {
    $apiInstance->deleteUserIcon($id);
} catch (Exception $e) {
    echo 'Exception when calling UserIconsApi->deleteUserIcon: ', $e->getMessage(), PHP_EOL;
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

## `getUserIcon()`

```php
getUserIcon($id, $include): \Supla\ApiClient\Model\UserIcon
```

Get User Icon

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: BearerAuth
$config = Supla\ApiClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: OAuth2
$config = Supla\ApiClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Supla\ApiClient\Api\UserIconsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int
$include = array('include_example'); // string[] | List of extra fields to include in the response.

try {
    $result = $apiInstance->getUserIcon($id, $include);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserIconsApi->getUserIcon: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**|  |
 **include** | [**string[]**](../Model/string.md)| List of extra fields to include in the response. | [optional]

### Return type

[**\Supla\ApiClient\Model\UserIcon**](../Model/UserIcon.md)

### Authorization

[BearerAuth](../../README.md#BearerAuth), [OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getUserIconImage()`

```php
getUserIconImage($id, $imageIndex): \SplFileObject
```

Get User Icon image at specified index

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: BearerAuth
$config = Supla\ApiClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: OAuth2
$config = Supla\ApiClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Supla\ApiClient\Api\UserIconsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int
$imageIndex = 56; // int

try {
    $result = $apiInstance->getUserIconImage($id, $imageIndex);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserIconsApi->getUserIconImage: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**|  |
 **imageIndex** | **int**|  |

### Return type

**\SplFileObject**

### Authorization

[BearerAuth](../../README.md#BearerAuth), [OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `image/_*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getUserIcons()`

```php
getUserIcons($function, $ids, $include): \Supla\ApiClient\Model\UserIcon[]
```

List User Icons

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: BearerAuth
$config = Supla\ApiClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: OAuth2
$config = Supla\ApiClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Supla\ApiClient\Api\UserIconsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$function = array(new \Supla\ApiClient\Model\\Supla\ApiClient\Model\ChannelFunctionEnumNames()); // \Supla\ApiClient\Model\ChannelFunctionEnumNames[]
$ids = array(56); // int[]
$include = array('include_example'); // string[] | List of extra fields to include in the response.

try {
    $result = $apiInstance->getUserIcons($function, $ids, $include);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserIconsApi->getUserIcons: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **function** | [**\Supla\ApiClient\Model\ChannelFunctionEnumNames[]**](../Model/\Supla\ApiClient\Model\ChannelFunctionEnumNames.md)|  | [optional]
 **ids** | [**int[]**](../Model/int.md)|  | [optional]
 **include** | [**string[]**](../Model/string.md)| List of extra fields to include in the response. | [optional]

### Return type

[**\Supla\ApiClient\Model\UserIcon[]**](../Model/UserIcon.md)

### Authorization

[BearerAuth](../../README.md#BearerAuth), [OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
