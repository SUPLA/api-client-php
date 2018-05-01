# Channel

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **int** | Channel identifier | [optional] 
**channel_number** | **int** | Channel ordinal number in its IO Device | [optional] 
**caption** | **string** | Channel caption | [optional] 
**type** | [**\Swagger\Client\Model\ChannelType**](ChannelType.md) |  | [optional] 
**function** | [**\Swagger\Client\Model\ChannelFunction**](ChannelFunction.md) |  | [optional] 
**param1** | [**\Swagger\Client\Model\ChannelParam**](ChannelParam.md) |  | [optional] 
**param2** | [**\Swagger\Client\Model\ChannelParam**](ChannelParam.md) |  | [optional] 
**param3** | [**\Swagger\Client\Model\ChannelParam**](ChannelParam.md) |  | [optional] 
**alt_icon** | **int** | Chosen alternative icon idenifier. Should not be greater than &#x60;funciton.maxAlternativeIconIndex&#x60; | [optional] 
**hidden** | **bool** | Whether this channel is shown on client apps or not | [optional] 
**inherited_location** | **bool** | Whether this channel inherits its IODevice&#39;s location (&#x60;true&#x60;) or not (&#x60;false&#x60;) | [optional] 
**iodevice_id** | **int** |  | [optional] 
**location_id** | **int** |  | [optional] 
**function_id** | **int** |  | [optional] 
**type_id** | **int** |  | [optional] 
**iodevice** | [**\Swagger\Client\Model\Device**](Device.md) |  | [optional] 
**location** | [**\Swagger\Client\Model\Location**](Location.md) |  | [optional] 
**connected** | **bool** |  | [optional] 
**supported_functions** | [**\Swagger\Client\Model\ChannelFunction[]**](ChannelFunction.md) |  | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


