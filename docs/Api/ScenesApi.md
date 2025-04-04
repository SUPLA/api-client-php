# Supla\ApiClient\ScenesApi

All URIs are relative to `https://YOUR_SUPLA_SERVER/api/v3`.

Method | HTTP request | Description
------------- | ------------- | -------------
[**createScene()**](ScenesApi.md#createScene) | **POST** /scenes | Create a scene
[**deleteScene()**](ScenesApi.md#deleteScene) | **DELETE** /scenes/{scene} | Delete the scene
[**executeScene()**](ScenesApi.md#executeScene) | **PATCH** /scenes/{scene} | 
[**getScene()**](ScenesApi.md#getScene) | **GET** /scenes/{scene} | Get Scene
[**getSceneDirectLinks()**](ScenesApi.md#getSceneDirectLinks) | **GET** /scenes/{scene}/direct-links | Get scene direct links
[**getSceneScenes()**](ScenesApi.md#getSceneScenes) | **GET** /scenes/{scene}/scenes | Get scene scenes
[**getScenes()**](ScenesApi.md#getScenes) | **GET** /scenes | Get Scenes
[**updateScene()**](ScenesApi.md#updateScene) | **PUT** /scenes/{scene} | Update the scene


## `createScene()`

```php
createScene($createSceneRequest): \Supla\ApiClient\Model\Scene
```

Create a scene

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = Supla\ApiClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure Bearer authorization: BearerAuth
$config = Supla\ApiClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Supla\ApiClient\Api\ScenesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$createSceneRequest = new \Supla\ApiClient\Model\CreateSceneRequest(); // \Supla\ApiClient\Model\CreateSceneRequest

try {
    $result = $apiInstance->createScene($createSceneRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ScenesApi->createScene: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **createSceneRequest** | [**\Supla\ApiClient\Model\CreateSceneRequest**](../Model/CreateSceneRequest.md)|  |

### Return type

[**\Supla\ApiClient\Model\Scene**](../Model/Scene.md)

### Authorization

[OAuth2](../../README.md#OAuth2), [BearerAuth](../../README.md#BearerAuth)

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


// Configure OAuth2 access token for authorization: OAuth2
$config = Supla\ApiClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure Bearer authorization: BearerAuth
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

[OAuth2](../../README.md#OAuth2), [BearerAuth](../../README.md#BearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `executeScene()`

```php
executeScene($scene, $executeSceneRequest)
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = Supla\ApiClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure Bearer authorization: BearerAuth
$config = Supla\ApiClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Supla\ApiClient\Api\ScenesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$scene = 56; // int | ID
$executeSceneRequest = new \Supla\ApiClient\Model\ExecuteSceneRequest(); // \Supla\ApiClient\Model\ExecuteSceneRequest

try {
    $apiInstance->executeScene($scene, $executeSceneRequest);
} catch (Exception $e) {
    echo 'Exception when calling ScenesApi->executeScene: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **scene** | **int**| ID |
 **executeSceneRequest** | [**\Supla\ApiClient\Model\ExecuteSceneRequest**](../Model/ExecuteSceneRequest.md)|  |

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

## `getScene()`

```php
getScene($scene, $include): \Supla\ApiClient\Model\Scene
```

Get Scene

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = Supla\ApiClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure Bearer authorization: BearerAuth
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

[OAuth2](../../README.md#OAuth2), [BearerAuth](../../README.md#BearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getSceneDirectLinks()`

```php
getSceneDirectLinks($scene, $include): \Supla\ApiClient\Model\DirectLink[]
```

Get scene direct links

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = Supla\ApiClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure Bearer authorization: BearerAuth
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
    $result = $apiInstance->getSceneDirectLinks($scene, $include);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ScenesApi->getSceneDirectLinks: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **scene** | **int**| ID |
 **include** | [**string[]**](../Model/string.md)| List of extra fields to include in the response. | [optional]

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

## `getSceneScenes()`

```php
getSceneScenes($scene, $include): \Supla\ApiClient\Model\Scene[]
```

Get scene scenes

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = Supla\ApiClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure Bearer authorization: BearerAuth
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

[OAuth2](../../README.md#OAuth2), [BearerAuth](../../README.md#BearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getScenes()`

```php
getScenes($include, $forIntegration): \Supla\ApiClient\Model\Scene[]
```

Get Scenes

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = Supla\ApiClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure Bearer authorization: BearerAuth
$config = Supla\ApiClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Supla\ApiClient\Api\ScenesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$include = array('include_example'); // string[] | List of extra fields to include in the response.
$forIntegration = 'forIntegration_example'; // string | Select an integration that the scenes should be returned for.

try {
    $result = $apiInstance->getScenes($include, $forIntegration);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ScenesApi->getScenes: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **include** | [**string[]**](../Model/string.md)| List of extra fields to include in the response. | [optional]
 **forIntegration** | **string**| Select an integration that the scenes should be returned for. | [optional]

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

## `updateScene()`

```php
updateScene($scene, $createSceneRequest): \Supla\ApiClient\Model\Scene
```

Update the scene

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = Supla\ApiClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure Bearer authorization: BearerAuth
$config = Supla\ApiClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Supla\ApiClient\Api\ScenesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$scene = 56; // int | ID
$createSceneRequest = new \Supla\ApiClient\Model\CreateSceneRequest(); // \Supla\ApiClient\Model\CreateSceneRequest

try {
    $result = $apiInstance->updateScene($scene, $createSceneRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ScenesApi->updateScene: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **scene** | **int**| ID |
 **createSceneRequest** | [**\Supla\ApiClient\Model\CreateSceneRequest**](../Model/CreateSceneRequest.md)|  |

### Return type

[**\Supla\ApiClient\Model\Scene**](../Model/Scene.md)

### Authorization

[OAuth2](../../README.md#OAuth2), [BearerAuth](../../README.md#BearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
