# Swagger\Client\SchedulesApi

Method | HTTP request | Description
------------- | ------------- | -------------
[**createSchedule**](SchedulesApi.md#createSchedule) | **POST** /schedules | Create a new schedule
[**deleteSchedule**](SchedulesApi.md#deleteSchedule) | **DELETE** /schedules/{id} | Delete Schedule
[**enableSchedules**](SchedulesApi.md#enableSchedules) | **PATCH** /schedules | Enable schedules
[**getSchedule**](SchedulesApi.md#getSchedule) | **GET** /schedules/{id} | Get Schedule
[**getSchedules**](SchedulesApi.md#getSchedules) | **GET** /schedules | Get schedules list
[**updateSchedule**](SchedulesApi.md#updateSchedule) | **PUT** /schedules/{id} | Update schedule


# **createSchedule**

Create a new schedule

### Example
```php
$body = new \Swagger\Client\Model\ScheduleRequest(); // \Swagger\Client\Model\ScheduleRequest | 
$result = $client->schedules()->createSchedule($body);
print_r($result);
```


### Parameters
Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\ScheduleRequest**](../Model/ScheduleRequest.md)|  |

### Return type

[**\Swagger\Client\Model\Schedule**](../Model/Schedule.md)

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteSchedule**

Delete Schedule

### Example
```php
$id = 56; // int | 
$client->schedules()->deleteSchedule($id);
```


### Parameters
Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**|  |

### Return type

void (empty response body)

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **enableSchedules**

Enable schedules

### Example
```php
$body = new \Swagger\Client\Model\SchedulesEnableRequest(); // \Swagger\Client\Model\SchedulesEnableRequest | 
$client->schedules()->enableSchedules($body);
```


### Parameters
Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\SchedulesEnableRequest**](../Model/SchedulesEnableRequest.md)|  |

### Return type

void (empty response body)

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getSchedule**

Get Schedule

### Example
```php
$id = 56; // int | 
$include = array("include_example"); // string[] | Specify what extra fields to include in the response.
$result = $client->schedules()->getSchedule($id, $include);
print_r($result);
```


### Parameters
Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**|  |
 **include** | [**string[]**](../Model/string.md)| Specify what extra fields to include in the response. | [optional]

### Return type

[**\Swagger\Client\Model\Schedule**](../Model/Schedule.md)

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getSchedules**

Get schedules list

### Example
```php
$include = array("include_example"); // string[] | Specify what extra fields to include in the response.
$result = $client->schedules()->getSchedules($include);
print_r($result);
```


### Parameters
Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **include** | [**string[]**](../Model/string.md)| Specify what extra fields to include in the response. | [optional]

### Return type

[**\Swagger\Client\Model\Schedule[]**](../Model/Schedule.md)

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateSchedule**

Update schedule

### Example
```php
$id = 56; // int | 
$body = new \Swagger\Client\Model\ScheduleRequest(); // \Swagger\Client\Model\ScheduleRequest | 
$enable = true; // bool | Set to `true` to enable the schedule after saving.
$result = $client->schedules()->updateSchedule($id, $body, $enable);
print_r($result);
```


### Parameters
Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**|  |
 **body** | [**\Swagger\Client\Model\ScheduleRequest**](../Model/ScheduleRequest.md)|  |
 **enable** | **bool**| Set to &#x60;true&#x60; to enable the schedule after saving. | [optional]

### Return type

[**\Swagger\Client\Model\Schedule**](../Model/Schedule.md)

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

