# Swagger\Client\AccessIDsApi

Method | HTTP request | Description
------------- | ------------- | -------------
[**accessidsGet**](AccessIDsApi.md#accessidsGet) | **GET** /accessids | Get Access IDs list
[**accessidsPost**](AccessIDsApi.md#accessidsPost) | **POST** /accessids | Create a new Access ID
[**deleteAccessID**](AccessIDsApi.md#deleteAccessID) | **DELETE** /accessids/{id} | Delete Access Identifier
[**getAccessID**](AccessIDsApi.md#getAccessID) | **GET** /accessids/{id} | Get Access ID
[**updateAccessID**](AccessIDsApi.md#updateAccessID) | **PUT** /accessids/{id} | Edit Access ID


# **accessidsGet**

Get Access IDs list

### Example
```php
$result = $client->accessIDs()->accessidsGet($xAcceptVersion, $include);
print_r($result);
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **xAcceptVersion** | **string**| API Version | [optional]
 **include** | [**string[]**](../Model/string.md)| Specify what extra fields to include in the response. | [optional]

### Return type

[**\Swagger\Client\Model\AccessID[]**](../Model/AccessID.md)

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **accessidsPost**

Create a new Access ID

### Example
```php
$result = $client->accessIDs()->accessidsPost($xAcceptVersion);
print_r($result);
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **xAcceptVersion** | **string**| API Version | [optional]

### Return type

[**\Swagger\Client\Model\AccessID**](../Model/AccessID.md)

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteAccessID**

Delete Access Identifier

### Example
```php
$result = $client->accessIDs()->deleteAccessID($id, $xAcceptVersion);
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**|  |
 **xAcceptVersion** | **string**| API Version | [optional]

### Return type

void (empty response body)

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getAccessID**

Get Access ID

### Example
```php
$result = $client->accessIDs()->getAccessID($id, $xAcceptVersion, $include);
print_r($result);
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**|  |
 **xAcceptVersion** | **string**| API Version | [optional]
 **include** | [**string[]**](../Model/string.md)| Specify what extra fields to include in the response. | [optional]

### Return type

[**\Swagger\Client\Model\AccessID**](../Model/AccessID.md)

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateAccessID**

Edit Access ID

### Example
```php
$result = $client->accessIDs()->updateAccessID($id, $body, $xAcceptVersion);
print_r($result);
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**|  |
 **body** | [**\Swagger\Client\Model\Body10**](../Model/Body10.md)|  |
 **xAcceptVersion** | **string**| API Version | [optional]

### Return type

[**\Swagger\Client\Model\AccessID**](../Model/AccessID.md)

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

