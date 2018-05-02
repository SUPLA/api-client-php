# Channel

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **int** | Channel identifier | [optional] 
**channelNumber** | **int** | Channel ordinal number in its IO Device | [optional] 
**caption** | **string** | Channel caption | [optional] 
**type** | [**\Swagger\Client\Model\ChannelType**](ChannelType.md) |  | [optional] 
**function** | [**\Swagger\Client\Model\ChannelFunction**](ChannelFunction.md) |  | [optional] 
**param1** | [**\Swagger\Client\Model\ChannelParam**](ChannelParam.md) |  | [optional] 
**param2** | [**\Swagger\Client\Model\ChannelParam**](ChannelParam.md) |  | [optional] 
**param3** | [**\Swagger\Client\Model\ChannelParam**](ChannelParam.md) |  | [optional] 
**altIcon** | **int** | Chosen alternative icon idenifier. Should not be greater than &#x60;funciton.maxAlternativeIconIndex&#x60; | [optional] 
**hidden** | **bool** | Whether this channel is shown on client apps or not | [optional] 
**inheritedLocation** | **bool** | Whether this channel inherits its IODevice&#39;s location (&#x60;true&#x60;) or not (&#x60;false&#x60;) | [optional] 
**iodeviceId** | **int** |  | [optional] 
**locationId** | **int** |  | [optional] 
**functionId** | **int** |  | [optional] 
**typeId** | **int** |  | [optional] 
**iodevice** | [**\Swagger\Client\Model\Device**](Device.md) |  | [optional] 
**location** | [**\Swagger\Client\Model\Location**](Location.md) |  | [optional] 
**connected** | **bool** |  | [optional] 
**supportedFunctions** | [**\Swagger\Client\Model\ChannelFunction[]**](ChannelFunction.md) |  | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


