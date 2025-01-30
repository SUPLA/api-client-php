# # ActionableSubject

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **int** | Identifier | [optional]
**channelNumber** | **int** | Channel ordinal number in its IO Device | [optional]
**caption** | **string** | Caption | [optional]
**altIcon** | **int** | Chosen alternative icon idenifier. Should not be greater than the &#x60;function.maxAlternativeIconIndex&#x60;. | [optional]
**hidden** | **bool** | Whether this scene is shown on client apps or not | [optional]
**inheritedLocation** | **bool** | Whether this channel inherits its IO Device&#39;s location (&#x60;true&#x60;) or not (&#x60;false&#x60;) | [optional]
**iodeviceId** | **int** |  | [optional]
**iodevice** | [**\Supla\ApiClient\Model\Device**](Device.md) |  | [optional]
**locationId** | **int** |  | [optional]
**location** | [**\Supla\ApiClient\Model\Location**](Location.md) |  | [optional]
**functionId** | **int** |  | [optional]
**function** | [**\Supla\ApiClient\Model\ChannelFunction**](ChannelFunction.md) |  | [optional]
**possibleActions** | [**\Supla\ApiClient\Model\ChannelFunctionAction[]**](ChannelFunctionAction.md) | What action can you execute on this subject? | [optional]
**typeId** | **int** |  | [optional]
**type** | [**\Supla\ApiClient\Model\ChannelType**](ChannelType.md) |  | [optional]
**ownSubjectType** | **string** |  | [optional]
**state** | [**\Supla\ApiClient\Model\SceneState**](SceneState.md) |  | [optional]
**config** | [**\Supla\ApiClient\Model\ScheduleConfigEntry[]**](ScheduleConfigEntry.md) |  | [optional]
**conflictDetails** | **object** |  | [optional]
**userIconId** | **int** |  | [optional]
**userIcon** | [**\Supla\ApiClient\Model\UserIcon**](UserIcon.md) |  | [optional]
**connected** | **bool** |  | [optional]
**relationsCount** | [**\Supla\ApiClient\Model\SceneRelationsCount**](SceneRelationsCount.md) |  | [optional]
**supportedFunctions** | [**\Supla\ApiClient\Model\ChannelFunction[]**](ChannelFunction.md) |  | [optional]
**channels** | [**\Supla\ApiClient\Model\Channel[]**](Channel.md) | Channel group channels, if requested by the &#x60;include&#x60; param | [optional]
**enabled** | **bool** |  | [optional]
**estimatedExecutionTime** | **int** | Estimated execution time for this scene (in milliseconds). | [optional]
**operations** | [**\Supla\ApiClient\Model\SceneOperation[]**](SceneOperation.md) | Scene operations, only if requested in the &#x60;include&#x60; param | [optional]
**subjectType** | [**\Supla\ApiClient\Model\ActionableSubjectTypeNames**](ActionableSubjectTypeNames.md) |  | [optional]
**subjectId** | **int** |  | [optional]
**dateStart** | **\DateTime** |  | [optional]
**dateEnd** | **\DateTime** |  | [optional]
**retry** | **bool** |  | [optional]
**mode** | **string** |  | [optional]
**subject** | [**\Supla\ApiClient\Model\ActionableSubject**](ActionableSubject.md) |  | [optional]
**closestExecutions** | [**\Supla\ApiClient\Model\ScheduleClosestExecutions**](ScheduleClosestExecutions.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
