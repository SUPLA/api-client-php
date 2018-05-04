# Swagger\Client\AccessIdentifiersApi

Method | HTTP request | Description
------------- | ------------- | -------------
[**createAccessIdentifier**](AccessIdentifiersApi.md#createAccessIdentifier) | **POST** /accessids | Create a new Access Identifier
[**deleteAccessIdentifier**](AccessIdentifiersApi.md#deleteAccessIdentifier) | **DELETE** /accessids/{id} | Delete Access Identifier
[**getAccessIdentifier**](AccessIdentifiersApi.md#getAccessIdentifier) | **GET** /accessids/{id} | Get Access Identifier
[**getAccessIdentifiers**](AccessIdentifiersApi.md#getAccessIdentifiers) | **GET** /accessids | Get Access Identifiers list
[**updateAccessIdentifier**](AccessIdentifiersApi.md#updateAccessIdentifier) | **PUT** /accessids/{id} | Update Access Identifier


# **createAccessIdentifier**

Create a new Access Identifier

### Example
```php
$result = $client->accessIdentifiers()->createAccessIdentifier();
print_r($result);
```



### Return type

[**\Swagger\Client\Model\AccessIdentifier**](../Model/AccessIdentifier.md)

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteAccessIdentifier**

Delete Access Identifier

### Example
```php
$id = 56; // int | 
$client->accessIdentifiers()->deleteAccessIdentifier($id);
```


### Parameters
Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**|  |

### Return type

void (empty response body)

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getAccessIdentifier**

Get Access Identifier

### Example
```php
$id = 56; // int | 
$include = array("include_example"); // string[] | Specify what extra fields to include in the response.
$result = $client->accessIdentifiers()->getAccessIdentifier($id, $include);
print_r($result);
```


### Parameters
Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**|  |
 **include** | [**string[]**](../Model/string.md)| Specify what extra fields to include in the response. | [optional]

### Return type

[**\Swagger\Client\Model\AccessIdentifier**](../Model/AccessIdentifier.md)

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getAccessIdentifiers**

Get Access Identifiers list

### Example
```php
$include = array("include_example"); // string[] | Specify what extra fields to include in the response.
$result = $client->accessIdentifiers()->getAccessIdentifiers($include);
print_r($result);
```


### Parameters
Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **include** | [**string[]**](../Model/string.md)| Specify what extra fields to include in the response. | [optional]

### Return type

[**\Swagger\Client\Model\AccessIdentifier[]**](../Model/AccessIdentifier.md)

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateAccessIdentifier**

Update Access Identifier

### Example
```php
$id = 56; // int | 
$body = new \Swagger\Client\Model\AccessIdentifierUpdateRequest(); // \Swagger\Client\Model\AccessIdentifierUpdateRequest | 
$result = $client->accessIdentifiers()->updateAccessIdentifier($id, $body);
print_r($result);
```


### Parameters
Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**|  |
 **body** | [**\Swagger\Client\Model\AccessIdentifierUpdateRequest**](../Model/AccessIdentifierUpdateRequest.md)|  |

### Return type

[**\Swagger\Client\Model\AccessIdentifier**](../Model/AccessIdentifier.md)

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

