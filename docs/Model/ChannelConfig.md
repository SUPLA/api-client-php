# # ChannelConfig

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**actionTriggerCapabilities** | **string[]** | List of supported triggers. Set only by the device. | [optional] [readonly]
**disablesLocalOperation** | **bool** | Tells if enabling the AT disables local function. | [optional] [readonly]
**relatedChannelId** | **int** |  | [optional]
**hideInChannelsList** | **int** | Whether to display the channel in the main channels list (it&#39;s false for ATs with paired channel). | [optional] [readonly]
**actions** | **object** | List of configured AT actions. | [optional]
**countersAvailable** | **string[]** | List of available counters supported by this channel. | [optional] [readonly]
**resetCountersAvailable** | **bool** |  | [optional]
**pricePerUnit** | **float** |  | [optional]
**currency** | **string** |  | [optional]
**electricityMeterInitialValues** | **object** |  | [optional]
**addToHistory** | **bool** |  | [optional]
**voltageLoggerEnabled** | **bool** |  | [optional]
**currentLoggerEnabled** | **bool** |  | [optional]
**powerActiveLoggerEnabled** | **bool** |  | [optional]
**lowerVoltageThreshold** | **float** |  | [optional]
**upperVoltageThreshold** | **float** |  | [optional]
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
**stateVerificationMethodActive** | **bool** |  | [optional]
**closingRule** | [**\Supla\ApiClient\Model\ChannelConfigControllingTheGateClosingRule**](ChannelConfigControllingTheGateClosingRule.md) |  | [optional]
**subfunction** | **string** | Only for the &#x60;HVAC_THERMOSTAT&#x60; function. | [optional]
**mainThermometerChannelId** | **int** |  | [optional]
**auxThermometerChannelId** | **int** |  | [optional]
**auxThermometerType** | **string** |  | [optional]
**binarySensorChannelId** | **int** |  | [optional]
**antiFreezeAndOverheatProtectionEnabled** | **bool** |  | [optional]
**auxMinMaxSetpointEnabled** | **bool** |  | [optional]
**temperatureSetpointChangeSwitchesToManualMode** | **bool** |  | [optional]
**availableAlgorithms** | **string[]** |  | [optional] [readonly]
**usedAlgorithm** | **string** |  | [optional]
**minOnTimeS** | **int** |  | [optional]
**minOffTimeS** | **int** |  | [optional]
**outputValueOnError** | **int** |  | [optional]
**weeklySchedule** | [**\Supla\ApiClient\Model\ChannelConfigHvacThermostatSchedule**](ChannelConfigHvacThermostatSchedule.md) |  | [optional]
**altWeeklySchedule** | [**\Supla\ApiClient\Model\ChannelConfigHvacThermostatSchedule**](ChannelConfigHvacThermostatSchedule.md) |  | [optional]
**temperatures** | [**\Supla\ApiClient\Model\ChannelConfigHvacThermostatTemperatures**](ChannelConfigHvacThermostatTemperatures.md) |  | [optional]
**temperatureConstraints** | [**\Supla\ApiClient\Model\ChannelConfigHvacThermostatTemperatureConstraints**](ChannelConfigHvacThermostatTemperatureConstraints.md) |  | [optional]
**valueDivider** | **float** |  | [optional]
**valueMultiplier** | **float** |  | [optional]
**valueAdded** | **float** |  | [optional]
**valuePrecision** | **int** |  | [optional]
**unitBeforeValue** | **string** |  | [optional]
**unitAfterValue** | **string** |  | [optional]
**keepHistory** | **bool** |  | [optional]
**chartType** | **string** |  | [optional]
**defaults** | [**\Supla\ApiClient\Model\ChannelConfigGeneralPurposeMeasurementDefaults**](ChannelConfigGeneralPurposeMeasurementDefaults.md) |  | [optional]
**includeValueAddedInHistory** | **bool** |  | [optional]
**fillMissingData** | **bool** |  | [optional]
**allowCounterReset** | **bool** |  | [optional]
**alwaysDecrement** | **bool** |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
