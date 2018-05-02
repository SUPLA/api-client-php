# Swagger\Client\ClientAppsApi

Method | HTTP request | Description
------------- | ------------- | -------------
[**deleteClientApp**](ClientAppsApi.md#deleteClientApp) | **DELETE** /client-apps/{id} | Delete Client App
[**getClientApps**](ClientAppsApi.md#getClientApps) | **GET** /client-apps | Get client apps
[**updateClientApp**](ClientAppsApi.md#updateClientApp) | **PUT** /client-apps/{id} | Update client app


# **deleteClientApp**

Delete Client App

### Example
```php
$id = 56; // int | 
$result = $client->clientApps()->deleteClientApp($id);
```


### Parameters
Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**|  |

### Return type

void (empty response body)

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getClientApps**

Get client apps

### Example
```php
$include = array("include_example"); // string[] | Specify what extra fields to include in the response.
$result = $client->clientApps()->getClientApps($include);
print_r($result);
```


### Parameters
Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **include** | [**string[]**](../Model/string.md)| Specify what extra fields to include in the response. | [optional]

### Return type

[**\Swagger\Client\Model\ClientApp[]**](../Model/ClientApp.md)

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateClientApp**

Update client app

### Example
```php
$id = 56; // int | 
$body = new \Swagger\Client\Model\Body7(); // \Swagger\Client\Model\Body7 | 
$result = $client->clientApps()->updateClientApp($id, $body);
print_r($result);
```


### Parameters
Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**|  |
 **body** | [**\Swagger\Client\Model\Body7**](../Model/Body7.md)|  |

### Return type

[**\Swagger\Client\Model\ClientApp**](../Model/ClientApp.md)

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

