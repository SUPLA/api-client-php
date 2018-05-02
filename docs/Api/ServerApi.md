# Swagger\Client\ServerApi

All URIs are relative to *https://cloud.supla.org/api*

Method | HTTP request | Description
------------- | ------------- | -------------
[**serverInfoGet**](ServerApi.md#serverInfoGet) | **GET** /server-info | Get server status
[**serverStatusGet**](ServerApi.md#serverStatusGet) | **GET** /server-status | Get the SUPLA Server status


# **serverInfoGet**
> \Swagger\Client\Model\InlineResponse200 serverInfoGet($xAcceptVersion)

Get server status

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\ServerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$xAcceptVersion = "\"2.2.0\""; // string | API Version

try {
    $result = $apiInstance->serverInfoGet($xAcceptVersion);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ServerApi->serverInfoGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **xAcceptVersion** | **string**| API Version | [optional]

### Return type

[**\Swagger\Client\Model\InlineResponse200**](../Model/InlineResponse200.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **serverStatusGet**
> \Swagger\Client\Model\InlineResponse2001 serverStatusGet($xAcceptVersion)

Get the SUPLA Server status

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\ServerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$xAcceptVersion = "\"2.2.0\""; // string | API Version

try {
    $result = $apiInstance->serverStatusGet($xAcceptVersion);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ServerApi->serverStatusGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **xAcceptVersion** | **string**| API Version | [optional]

### Return type

[**\Swagger\Client\Model\InlineResponse2001**](../Model/InlineResponse2001.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

