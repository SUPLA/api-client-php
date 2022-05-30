# # Channel

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **int** | Identifier | [optional]
**channelNumber** | **int** | Channel ordinal number in its IO Device | [optional]
**caption** | **string** | Caption | [optional]
**altIcon** | **int** | Chosen alternative icon idenifier. Should not be greater than the &#x60;function.maxAlternativeIconIndex&#x60;. | [optional]
**hidden** | **bool** | Whether this channel is shown on client apps or not | [optional]
**inheritedLocation** | **bool** | Whether this channel inherits its IO Device&#39;s location (&#x60;true&#x60;) or not (&#x60;false&#x60;) | [optional]
**iodeviceId** | **int** |  | [optional]
**locationId** | **int** |  | [optional]
**functionId** | **int** |  | [optional]
**function** | [**\Supla\ApiClient\Model\ChannelFunction**](ChannelFunction.md) |  | [optional]
**possibleActions** | [**\Supla\ApiClient\Model\ChannelFunctionAction[]**](ChannelFunctionAction.md) | What action can you execute on this subject? | [optional]
**typeId** | **int** |  | [optional]
**type** | [**\Supla\ApiClient\Model\ChannelType**](ChannelType.md) |  | [optional]
**subjectType** | **string** |  | [optional]
**state** | [**\Supla\ApiClient\Model\ChannelState**](ChannelState.md) |  | [optional]
**config** | [**\Supla\ApiClient\Model\ChannelConfig**](ChannelConfig.md) |  | [optional]
**userIconId** | **int** |  | [optional]
**connected** | **bool** |  | [optional]
**relationsCount** | [**\Supla\ApiClient\Model\ChannelRelationsCount**](ChannelRelationsCount.md) |  | [optional]
**location** | [**\Supla\ApiClient\Model\Location**](Location.md) |  | [optional]
**supportedFunctions** | [**\Supla\ApiClient\Model\ChannelFunction[]**](ChannelFunction.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
