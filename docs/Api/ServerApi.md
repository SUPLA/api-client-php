# Swagger\Client\ServerApi

Method | HTTP request | Description
------------- | ------------- | -------------
[**serverInfoGet**](ServerApi.md#serverInfoGet) | **GET** /server-info | Get server status
[**serverStatusGet**](ServerApi.md#serverStatusGet) | **GET** /server-status | Get the SUPLA Server status


# **serverInfoGet**

Get server status

### Example
```php
$result = $client->server()->serverInfoGet($xAcceptVersion);
print_r($result);
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **xAcceptVersion** | **string**| API Version | [optional]

### Return type

[**\Swagger\Client\Model\InlineResponse200**](../Model/InlineResponse200.md)

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **serverStatusGet**

Get the SUPLA Server status

### Example
```php
$result = $client->server()->serverStatusGet($xAcceptVersion);
print_r($result);
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **xAcceptVersion** | **string**| API Version | [optional]

### Return type

[**\Swagger\Client\Model\InlineResponse2001**](../Model/InlineResponse2001.md)

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

