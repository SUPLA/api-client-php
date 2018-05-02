# Schedule

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **int** | Schedule identifier | [optional] 
**timeExpression** | **string** | Schedule time expression in crontab notation (with some custom additions). | [optional] 
**action** | [**\Swagger\Client\Model\ChannelFunctionAction**](ChannelFunctionAction.md) |  | [optional] 
**mode** | **string** |  | [optional] 
**dateStart** | [**\DateTime**](\DateTime.md) |  | [optional] 
**dateEnd** | [**\DateTime**](\DateTime.md) |  | [optional] 
**enabled** | **bool** |  | [optional] 
**caption** | **string** |  | [optional] 
**retry** | **bool** |  | [optional] 
**channelId** | **int** |  | [optional] 
**actionId** | **int** |  | [optional] 
**channel** | [**\Swagger\Client\Model\Channel**](Channel.md) |  | [optional] 
**closestExecutions** | [**\Swagger\Client\Model\ScheduleClosestExecutions[]**](ScheduleClosestExecutions.md) | Returned only if requested by the &#x60;include&#x60; parameter. Contains two arrays of maximum 3 closest past and future executions. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


