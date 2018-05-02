# Swagger\Client\AccessIDsApi

Method | HTTP request | Description
------------- | ------------- | -------------
[**createAccessID**](AccessIDsApi.md#createAccessID) | **POST** /accessids | Create a new Access ID
[**deleteAccessID**](AccessIDsApi.md#deleteAccessID) | **DELETE** /accessids/{id} | Delete Access Identifier
[**getAccessID**](AccessIDsApi.md#getAccessID) | **GET** /accessids | Get Access IDs list
[**getAccessID_0**](AccessIDsApi.md#getAccessID_0) | **GET** /accessids/{id} | Get Access ID
[**updateAccessID**](AccessIDsApi.md#updateAccessID) | **PUT** /accessids/{id} | Update Access ID


# **createAccessID**

Create a new Access ID

### Example
```php
$result = $client->accessIDs()->createAccessID();
print_r($result);
```



### Return type

[**\Swagger\Client\Model\AccessID**](../Model/AccessID.md)

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteAccessID**

Delete Access Identifier

### Example
```php
$id = 56; // int | 
$client->accessIDs()->deleteAccessID($id);
```


### Parameters
Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**|  |

### Return type

void (empty response body)

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getAccessID**

Get Access IDs list

### Example
```php
$include = array("include_example"); // string[] | Specify what extra fields to include in the response.
$result = $client->accessIDs()->getAccessID($include);
print_r($result);
```


### Parameters
Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **include** | [**string[]**](../Model/string.md)| Specify what extra fields to include in the response. | [optional]

### Return type

[**\Swagger\Client\Model\AccessID[]**](../Model/AccessID.md)

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getAccessID_0**

Get Access ID

### Example
```php
$id = 56; // int | 
$include = array("include_example"); // string[] | Specify what extra fields to include in the response.
$result = $client->accessIDs()->getAccessID_0($id, $include);
print_r($result);
```


### Parameters
Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**|  |
 **include** | [**string[]**](../Model/string.md)| Specify what extra fields to include in the response. | [optional]

### Return type

[**\Swagger\Client\Model\AccessID**](../Model/AccessID.md)

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateAccessID**

Update Access ID

### Example
```php
$id = 56; // int | 
$body = new \Swagger\Client\Model\AccessIDUpdateRequest(); // \Swagger\Client\Model\AccessIDUpdateRequest | 
$result = $client->accessIDs()->updateAccessID($id, $body);
print_r($result);
```


### Parameters
Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**|  |
 **body** | [**\Swagger\Client\Model\AccessIDUpdateRequest**](../Model/AccessIDUpdateRequest.md)|  |

### Return type

[**\Swagger\Client\Model\AccessID**](../Model/AccessID.md)

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

