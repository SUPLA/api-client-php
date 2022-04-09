# # ChannelConfig

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**actionTriggerCapabilities** | **string[]** | List of supported triggers. Set only by the device. | [optional] [readonly]
**disablesLocalOperation** | **bool** | Tells if enabling the AT disables local function. | [optional] [readonly]
**relatedChannelId** | **int** |  | [optional]
**hideInChannelsList** | **int** | Whether to display the channel in the main channels list (it&#39;s false for ATs with paired channel). | [optional] [readonly]
**actions** | [**\Supla\ApiClient\Model\ChannelConfigActionTriggerActions[]**](ChannelConfigActionTriggerActions.md) | List of configured AT actions. | [optional]
**countersAvailable** | **string[]** | List of available counters supported by this channel. | [optional] [readonly]
**resetCountersAvailable** | **bool** |  | [optional]
**pricePerUnit** | **float** |  | [optional]
**currency** | **string** |  | [optional]
**electricityMeterInitialValues** | **object** |  | [optional]
**temperatureAdjustment** | **float** |  | [optional]
**humidityAdjustment** | **float** |  | [optional]
**impulsesPerUnit** | **int** |  | [optional]
**unit** | **string** |  | [optional]
**initialValue** | **int** |  | [optional]
**invertedLogic** | **bool** |  | [optional]
**timeSettingAvailable** | **bool** |  | [optional] [readonly]
**relayTimeS** | **int** |  | [optional]
**relayTimeMs** | **int** |  | [optional]
**openingSensorChannelId** | **int** |  | [optional]
**openingSensorSecondaryChannelId** | **int** |  | [optional]
**numberOfAttemptsToOpen** | **int** |  | [optional]
**numberOfAttemptsToClose** | **int** |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
