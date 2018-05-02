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
$result = $client->schedules()->createSchedule($body, $xAcceptVersion);
print_r($result);
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\ScheduleRequest**](../Model/ScheduleRequest.md)|  |
 **xAcceptVersion** | **string**| API Version | [optional]

### Return type

[**\Swagger\Client\Model\Schedule**](../Model/Schedule.md)

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteSchedule**

Delete Schedule

### Example
```php
$result = $client->schedules()->deleteSchedule($id, $xAcceptVersion);
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**|  |
 **xAcceptVersion** | **string**| API Version | [optional]

### Return type

void (empty response body)

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **enableSchedules**

Enable schedules

### Example
```php
$result = $client->schedules()->enableSchedules($body, $xAcceptVersion);
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\Body9**](../Model/Body9.md)|  |
 **xAcceptVersion** | **string**| API Version | [optional]

### Return type

void (empty response body)

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getSchedule**

Get Schedule

### Example
```php
$result = $client->schedules()->getSchedule($id, $xAcceptVersion, $include);
print_r($result);
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**|  |
 **xAcceptVersion** | **string**| API Version | [optional]
 **include** | [**string[]**](../Model/string.md)| Specify what extra fields to include in the response. | [optional]

### Return type

[**\Swagger\Client\Model\Schedule**](../Model/Schedule.md)

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getSchedules**

Get schedules list

### Example
```php
$result = $client->schedules()->getSchedules($xAcceptVersion, $include);
print_r($result);
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **xAcceptVersion** | **string**| API Version | [optional]
 **include** | [**string[]**](../Model/string.md)| Specify what extra fields to include in the response. | [optional]

### Return type

[**\Swagger\Client\Model\Schedule[]**](../Model/Schedule.md)

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateSchedule**

Update schedule

### Example
```php
$result = $client->schedules()->updateSchedule($id, $body, $xAcceptVersion, $enable);
print_r($result);
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**|  |
 **body** | [**\Swagger\Client\Model\ScheduleRequest**](../Model/ScheduleRequest.md)|  |
 **xAcceptVersion** | **string**| API Version | [optional]
 **enable** | **bool**| Set to &#x60;true&#x60; to enable the schedule after saving. | [optional]

### Return type

[**\Swagger\Client\Model\Schedule**](../Model/Schedule.md)

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

