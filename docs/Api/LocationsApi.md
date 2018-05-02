# Swagger\Client\LocationsApi

Method | HTTP request | Description
------------- | ------------- | -------------
[**createLocation**](LocationsApi.md#createLocation) | **POST** /locations | Create a new location
[**deleteLocation**](LocationsApi.md#deleteLocation) | **DELETE** /locations/{id} | Delete location
[**getLocation**](LocationsApi.md#getLocation) | **GET** /locations/{id} | Get location by ID
[**getLocations**](LocationsApi.md#getLocations) | **GET** /locations | Get locations list
[**updateLocation**](LocationsApi.md#updateLocation) | **PUT** /locations/{id} | Edit location


# **createLocation**

Create a new location

### Example
```php
$result = $client->locations()->createLocation($xAcceptVersion);
print_r($result);
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **xAcceptVersion** | **string**| API Version | [optional]

### Return type

[**\Swagger\Client\Model\Location**](../Model/Location.md)

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteLocation**

Delete location

### Example
```php
$result = $client->locations()->deleteLocation($id, $xAcceptVersion, $include);
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**|  |
 **xAcceptVersion** | **string**| API Version | [optional]
 **include** | [**string[]**](../Model/string.md)| Specify what extra fields to include in the response. | [optional]

### Return type

void (empty response body)

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getLocation**

Get location by ID

### Example
```php
$result = $client->locations()->getLocation($id, $xAcceptVersion, $include);
print_r($result);
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**|  |
 **xAcceptVersion** | **string**| API Version | [optional]
 **include** | [**string[]**](../Model/string.md)| Specify what extra fields to include in the response. | [optional]

### Return type

[**\Swagger\Client\Model\Location**](../Model/Location.md)

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getLocations**

Get locations list

### Example
```php
$result = $client->locations()->getLocations($xAcceptVersion, $include);
print_r($result);
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **xAcceptVersion** | **string**| API Version | [optional]
 **include** | [**string[]**](../Model/string.md)| Specify what extra fields to include in the response. | [optional]

### Return type

[**\Swagger\Client\Model\Location[]**](../Model/Location.md)

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateLocation**

Edit location

### Example
```php
$result = $client->locations()->updateLocation($id, $body, $xAcceptVersion, $include);
print_r($result);
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**|  |
 **body** | [**\Swagger\Client\Model\Body1**](../Model/Body1.md)|  |
 **xAcceptVersion** | **string**| API Version | [optional]
 **include** | [**string[]**](../Model/string.md)| Specify what extra fields to include in the response. | [optional]

### Return type

[**\Swagger\Client\Model\Location**](../Model/Location.md)

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

