# Supla\ApiClient\ScenesApi

All URIs are relative to `https://YOUR_SUPLA_SERVER/api/v2.4.0`.

Method | HTTP request | Description
------------- | ------------- | -------------
[**createScene()**](ScenesApi.md#createScene) | **POST** /scenes | Create a scene
[**deleteScene()**](ScenesApi.md#deleteScene) | **DELETE** /scenes/{scene} | Delete the scene
[**executeScene()**](ScenesApi.md#executeScene) | **PATCH** /scenes/{scene} | 
[**getScene()**](ScenesApi.md#getScene) | **GET** /scenes/{scene} | Get Scene
[**getSceneScenes()**](ScenesApi.md#getSceneScenes) | **GET** /scenes/{scene}/scenes | Get scene scenes
[**getScenes()**](ScenesApi.md#getScenes) | **GET** /scenes | Get Scenes
[**updateScene()**](ScenesApi.md#updateScene) | **PUT** /scenes/{scene} | Update the scene


## `createScene()`

```php
createScene($inlineObject6): \Supla\ApiClient\Model\Scene
```

Create a scene

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: BearerAuth
$config = Supla\ApiClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: OAuth2
$config = Supla\ApiClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Supla\ApiClient\Api\ScenesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$inlineObject6 = new \Supla\ApiClient\Model\InlineObject6(); // \Supla\ApiClient\Model\InlineObject6

try {
    $result = $apiInstance->createScene($inlineObject6);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ScenesApi->createScene: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **inlineObject6** | [**\Supla\ApiClient\Model\InlineObject6**](../Model/InlineObject6.md)|  |

### Return type

[**\Supla\ApiClient\Model\Scene**](../Model/Scene.md)

### Authorization

[BearerAuth](../../README.md#BearerAuth), [OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteScene()`

```php
deleteScene($scene)
```

Delete the scene

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: BearerAuth
$config = Supla\ApiClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: OAuth2
$config = Supla\ApiClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Supla\ApiClient\Api\ScenesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$scene = 56; // int | ID

try {
    $apiInstance->deleteScene($scene);
} catch (Exception $e) {
    echo 'Exception when calling ScenesApi->deleteScene: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **scene** | **int**| ID |

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

## `executeScene()`

```php
executeScene($scene, $uNKNOWNBASETYPE)
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: BearerAuth
$config = Supla\ApiClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: OAuth2
$config = Supla\ApiClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Supla\ApiClient\Api\ScenesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$scene = 56; // int | ID
$uNKNOWNBASETYPE = new \Supla\ApiClient\Model\UNKNOWN_BASE_TYPE(); // \Supla\ApiClient\Model\UNKNOWN_BASE_TYPE

try {
    $apiInstance->executeScene($scene, $uNKNOWNBASETYPE);
} catch (Exception $e) {
    echo 'Exception when calling ScenesApi->executeScene: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **scene** | **int**| ID |
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

## `getScene()`

```php
getScene($scene, $include): \Supla\ApiClient\Model\Scene
```

Get Scene

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: BearerAuth
$config = Supla\ApiClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: OAuth2
$config = Supla\ApiClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Supla\ApiClient\Api\ScenesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$scene = 56; // int | ID
$include = array('include_example'); // string[] | List of extra fields to include in the response.

try {
    $result = $apiInstance->getScene($scene, $include);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ScenesApi->getScene: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **scene** | **int**| ID |
 **include** | [**string[]**](../Model/string.md)| List of extra fields to include in the response. | [optional]

### Return type

[**\Supla\ApiClient\Model\Scene**](../Model/Scene.md)

### Authorization

[BearerAuth](../../README.md#BearerAuth), [OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getSceneScenes()`

```php
getSceneScenes($scene, $include): \Supla\ApiClient\Model\Scene[]
```

Get scene scenes

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: BearerAuth
$config = Supla\ApiClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: OAuth2
$config = Supla\ApiClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Supla\ApiClient\Api\ScenesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$scene = 56; // int | ID
$include = array('include_example'); // string[] | List of extra fields to include in the response.

try {
    $result = $apiInstance->getSceneScenes($scene, $include);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ScenesApi->getSceneScenes: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **scene** | **int**| ID |
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

## `getScenes()`

```php
getScenes($include): \Supla\ApiClient\Model\Scene[]
```

Get Scenes

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: BearerAuth
$config = Supla\ApiClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: OAuth2
$config = Supla\ApiClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Supla\ApiClient\Api\ScenesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$include = array('include_example'); // string[] | List of extra fields to include in the response.

try {
    $result = $apiInstance->getScenes($include);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ScenesApi->getScenes: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
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

## `updateScene()`

```php
updateScene($scene, $inlineObject7): \Supla\ApiClient\Model\Scene
```

Update the scene

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: BearerAuth
$config = Supla\ApiClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: OAuth2
$config = Supla\ApiClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Supla\ApiClient\Api\ScenesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$scene = 56; // int | ID
$inlineObject7 = new \Supla\ApiClient\Model\InlineObject7(); // \Supla\ApiClient\Model\InlineObject7

try {
    $result = $apiInstance->updateScene($scene, $inlineObject7);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ScenesApi->updateScene: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **scene** | **int**| ID |
 **inlineObject7** | [**\Supla\ApiClient\Model\InlineObject7**](../Model/InlineObject7.md)|  |

### Return type

[**\Supla\ApiClient\Model\Scene**](../Model/Scene.md)

### Authorization

[BearerAuth](../../README.md#BearerAuth), [OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
