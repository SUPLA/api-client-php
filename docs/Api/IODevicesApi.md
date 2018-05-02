# Swagger\Client\IODevicesApi

Method | HTTP request | Description
------------- | ------------- | -------------
[**deleteIoDevice**](IODevicesApi.md#deleteIoDevice) | **DELETE** /iodevices/{id} | Delete IO Device
[**getIoDevice**](IODevicesApi.md#getIoDevice) | **GET** /iodevices/{id} | Get IO Device
[**getIoDeviceChannels**](IODevicesApi.md#getIoDeviceChannels) | **GET** /iodevices/{id}/channels | Get Channels that belong to IO Deice
[**getIoDevices**](IODevicesApi.md#getIoDevices) | **GET** /iodevices | Get IO Devices
[**updateIoDevice**](IODevicesApi.md#updateIoDevice) | **PUT** /iodevices/{id} | Update IO Device


# **deleteIoDevice**

Delete IO Device

### Example
```php
$result = $client->iODevices()->deleteIoDevice($id, $xAcceptVersion);
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**|  |
 **xAcceptVersion** | **string**| API Version | [optional]

### Return type

void (empty response body)

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getIoDevice**

Get IO Device

### Example
```php
$result = $client->iODevices()->getIoDevice($id, $xAcceptVersion, $include);
print_r($result);
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**|  |
 **xAcceptVersion** | **string**| API Version | [optional]
 **include** | [**string[]**](../Model/string.md)| Specify what extra fields to include in the response. | [optional]

### Return type

[**\Swagger\Client\Model\Device**](../Model/Device.md)

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getIoDeviceChannels**

Get Channels that belong to IO Deice

### Example
```php
$result = $client->iODevices()->getIoDeviceChannels($id, $xAcceptVersion, $include);
print_r($result);
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**|  |
 **xAcceptVersion** | **string**| API Version | [optional]
 **include** | [**string[]**](../Model/string.md)| Specify what extra fields to include in the response. | [optional]

### Return type

[**\Swagger\Client\Model\Channel**](../Model/Channel.md)

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getIoDevices**

Get IO Devices

### Example
```php
$result = $client->iODevices()->getIoDevices($xAcceptVersion, $include);
print_r($result);
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **xAcceptVersion** | **string**| API Version | [optional]
 **include** | [**string[]**](../Model/string.md)| Specify what extra fields to include in the response. | [optional]

### Return type

[**\Swagger\Client\Model\Device[]**](../Model/Device.md)

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateIoDevice**

Update IO Device

### Example
```php
$result = $client->iODevices()->updateIoDevice($id, $body, $xAcceptVersion);
print_r($result);
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**|  |
 **body** | [**\Swagger\Client\Model\Body8**](../Model/Body8.md)|  |
 **xAcceptVersion** | **string**| API Version | [optional]

### Return type

[**\Swagger\Client\Model\Device**](../Model/Device.md)

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

