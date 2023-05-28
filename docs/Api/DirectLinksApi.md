# Supla\ApiClient\DirectLinksApi

All URIs are relative to `https://YOUR_SUPLA_SERVER/api/v2.4.0`.

Method | HTTP request | Description
------------- | ------------- | -------------
[**getDirectLink()**](DirectLinksApi.md#getDirectLink) | **GET** /direct-links/{directLink} | Get direct link
[**getDirectLinks()**](DirectLinksApi.md#getDirectLinks) | **GET** /direct-links | Get Direct Links


## `getDirectLink()`

```php
getDirectLink($directLink, $include): \Supla\ApiClient\Model\DirectLink
```

Get direct link

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: BearerAuth
$config = Supla\ApiClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: OAuth2
$config = Supla\ApiClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Supla\ApiClient\Api\DirectLinksApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$directLink = 56; // int | ID
$include = array('include_example'); // string[] | List of extra fields to include in the response.

try {
    $result = $apiInstance->getDirectLink($directLink, $include);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DirectLinksApi->getDirectLink: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **directLink** | **int**| ID |
 **include** | [**string[]**](../Model/string.md)| List of extra fields to include in the response. | [optional]

### Return type

[**\Supla\ApiClient\Model\DirectLink**](../Model/DirectLink.md)

### Authorization

[BearerAuth](../../README.md#BearerAuth), [OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getDirectLinks()`

```php
getDirectLinks($subjectType, $subjectId, $include): \Supla\ApiClient\Model\DirectLink[]
```

Get Direct Links

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: BearerAuth
$config = Supla\ApiClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: OAuth2
$config = Supla\ApiClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Supla\ApiClient\Api\DirectLinksApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$subjectType = new \Supla\ApiClient\Model\\Supla\ApiClient\Model\ActionableSubjectTypeNames(); // \Supla\ApiClient\Model\ActionableSubjectTypeNames | Return links only for particular subjectType. Must be used with subjectId.
$subjectId = 56; // int | Return links only for particular subjectId. Must be used with subjectType.
$include = array('include_example'); // string[] | List of extra fields to include in the response.

try {
    $result = $apiInstance->getDirectLinks($subjectType, $subjectId, $include);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DirectLinksApi->getDirectLinks: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **subjectType** | [**\Supla\ApiClient\Model\ActionableSubjectTypeNames**](../Model/.md)| Return links only for particular subjectType. Must be used with subjectId. | [optional]
 **subjectId** | **int**| Return links only for particular subjectId. Must be used with subjectType. | [optional]
 **include** | [**string[]**](../Model/string.md)| List of extra fields to include in the response. | [optional]

### Return type

[**\Supla\ApiClient\Model\DirectLink[]**](../Model/DirectLink.md)

### Authorization

[BearerAuth](../../README.md#BearerAuth), [OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
