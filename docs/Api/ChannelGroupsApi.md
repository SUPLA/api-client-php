# Swagger\Client\ChannelGroupsApi

Method | HTTP request | Description
------------- | ------------- | -------------
[**createChannelGroup**](ChannelGroupsApi.md#createChannelGroup) | **POST** /channel-groups | Create a new channel group
[**deleteChannelGroup**](ChannelGroupsApi.md#deleteChannelGroup) | **DELETE** /channel-groups/{id} | Delete Channel Group
[**executeChannelGroupAction**](ChannelGroupsApi.md#executeChannelGroupAction) | **PATCH** /channel-groups/{id} | Execute action on the channel group
[**getChannelGroup**](ChannelGroupsApi.md#getChannelGroup) | **GET** /channel-groups/{id} | Get channel group by ID
[**getChannelGroups**](ChannelGroupsApi.md#getChannelGroups) | **GET** /channel-groups | Get channels list
[**updateChannelGroup**](ChannelGroupsApi.md#updateChannelGroup) | **PUT** /channel-groups/{id} | Update channel group


# **createChannelGroup**

Create a new channel group

### Example
```php
$body = new \Swagger\Client\Model\Body4(); // \Swagger\Client\Model\Body4 | 
$result = $client->channelGroups()->createChannelGroup($body);
print_r($result);
```


### Parameters
Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\Body4**](../Model/Body4.md)|  |

### Return type

[**\Swagger\Client\Model\ChannelGroup**](../Model/ChannelGroup.md)

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteChannelGroup**

Delete Channel Group

### Example
```php
$id = 56; // int | 
$result = $client->channelGroups()->deleteChannelGroup($id);
```


### Parameters
Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**|  |

### Return type

void (empty response body)

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **executeChannelGroupAction**

Execute action on the channel group

### Example
```php
$id = 56; // int | 
$body = new \Swagger\Client\Model\Body6(); // \Swagger\Client\Model\Body6 | Defines an action to execute on channel group. The `action` key is always required. The rest of the keys are params depending on the chosen action. Read more on [Github Wiki](https://github.com/SUPLA/supla-cloud/wiki/Channel-Actions).
$result = $client->channelGroups()->executeChannelGroupAction($id, $body);
```


### Parameters
Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**|  |
 **body** | [**\Swagger\Client\Model\Body6**](../Model/Body6.md)| Defines an action to execute on channel group. The &#x60;action&#x60; key is always required. The rest of the keys are params depending on the chosen action. Read more on [Github Wiki](https://github.com/SUPLA/supla-cloud/wiki/Channel-Actions). |

### Return type

void (empty response body)

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getChannelGroup**

Get channel group by ID

### Example
```php
$id = 56; // int | 
$include = array("include_example"); // string[] | Specify what extra fields to include in the response.
$result = $client->channelGroups()->getChannelGroup($id, $include);
print_r($result);
```


### Parameters
Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**|  |
 **include** | [**string[]**](../Model/string.md)| Specify what extra fields to include in the response. | [optional]

### Return type

[**\Swagger\Client\Model\ChannelGroup**](../Model/ChannelGroup.md)

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getChannelGroups**

Get channels list

### Example
```php
$include = array("include_example"); // string[] | Specify what extra fields to include in the response.
$result = $client->channelGroups()->getChannelGroups($include);
print_r($result);
```


### Parameters
Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **include** | [**string[]**](../Model/string.md)| Specify what extra fields to include in the response. | [optional]

### Return type

[**\Swagger\Client\Model\ChannelGroup[]**](../Model/ChannelGroup.md)

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateChannelGroup**

Update channel group

### Example
```php
$id = 56; // int | 
$body = new \Swagger\Client\Model\Body5(); // \Swagger\Client\Model\Body5 | 
$result = $client->channelGroups()->updateChannelGroup($id, $body);
print_r($result);
```


### Parameters
Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**|  |
 **body** | [**\Swagger\Client\Model\Body5**](../Model/Body5.md)|  |

### Return type

[**\Swagger\Client\Model\ChannelGroup**](../Model/ChannelGroup.md)

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

