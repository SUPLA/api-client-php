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
$id = 56; // int | 
$client->iODevices()->deleteIoDevice($id);
```


### Parameters
Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**|  |

### Return type

void (empty response body)

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getIoDevice**

Get IO Device

### Example
```php
$id = 56; // int | 
$include = array("include_example"); // string[] | Specify what extra fields to include in the response.
$result = $client->iODevices()->getIoDevice($id, $include);
print_r($result);
```


### Parameters
Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**|  |
 **include** | [**string[]**](../Model/string.md)| Specify what extra fields to include in the response. | [optional]

### Return type

[**\Swagger\Client\Model\Device**](../Model/Device.md)

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getIoDeviceChannels**

Get Channels that belong to IO Deice

### Example
```php
$id = 56; // int | 
$include = array("include_example"); // string[] | Specify what extra fields to include in the response.
$result = $client->iODevices()->getIoDeviceChannels($id, $include);
print_r($result);
```


### Parameters
Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**|  |
 **include** | [**string[]**](../Model/string.md)| Specify what extra fields to include in the response. | [optional]

### Return type

[**\Swagger\Client\Model\Channel**](../Model/Channel.md)

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getIoDevices**

Get IO Devices

### Example
```php
$include = array("include_example"); // string[] | Specify what extra fields to include in the response.
$result = $client->iODevices()->getIoDevices($include);
print_r($result);
```


### Parameters
Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **include** | [**string[]**](../Model/string.md)| Specify what extra fields to include in the response. | [optional]

### Return type

[**\Swagger\Client\Model\Device[]**](../Model/Device.md)

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateIoDevice**

Update IO Device

### Example
```php
$id = 56; // int | 
$body = new \Swagger\Client\Model\IODeviceUpdateRequest(); // \Swagger\Client\Model\IODeviceUpdateRequest | 
$result = $client->iODevices()->updateIoDevice($id, $body);
print_r($result);
```


### Parameters
Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**|  |
 **body** | [**\Swagger\Client\Model\IODeviceUpdateRequest**](../Model/IODeviceUpdateRequest.md)|  |

### Return type

[**\Swagger\Client\Model\Device**](../Model/Device.md)

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

