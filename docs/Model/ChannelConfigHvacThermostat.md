# # ChannelConfigHvacThermostat

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
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

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
