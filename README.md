# SUPLA API Client for PHP

[![Latest Release](https://img.shields.io/github/release/SUPLA/api-client-php.svg)](https://github.com/SUPLA/api-client-php/releases/latest)
[![Build Status](https://travis-ci.org/SUPLA/api-client-php.svg?branch=master)](https://travis-ci.org/SUPLA/supla-cloud)
[![Packagist Downloads](https://img.shields.io/packagist/dt/SUPLA/api-client.svg)](https://packagist.org/packages/supla/api-client)

Your home connected. www.supla.org

# Installation

Requires PHP 7.3 or later.

Install with [Composer](https://getcomposer.org/).



## Getting Started

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

use Supla\ApiClient\Api\ChannelsApi;

// Get access token from OAuth flow or use a Personal Access Token
$accessToken = '<YOUR_ACCESS_TOKEN_HERE>';
$config = Supla\ApiClient\Configuration::getDefaultConfiguration()->setAccessToken($accessToken);

$apiInstance = new ChannelsApi(new GuzzleHttp\Client(), $config);

try {
    $result = $apiInstance->getChannels();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SUPLA API: ', $e->getMessage(), PHP_EOL;
}
```

## Examples

See the [examples folder](https://github.com/SUPLA/api-client-php/tree/master/examples) for more.

## API Endpoints

All URIs are relative to `https://YOUR_SUPLA_SERVER/api/v3`.

Class | Method | HTTP request | Description
------------ | ------------- | ------------- | -------------
*AccessIdentifiersApi* | [**createAccessIdentifier**](docs/Api/AccessIdentifiersApi.md#createaccessidentifier) | **POST** /accessids | Create a new Access Identifier
*AccessIdentifiersApi* | [**deleteAccessIdentifier**](docs/Api/AccessIdentifiersApi.md#deleteaccessidentifier) | **DELETE** /accessids/{id} | Delete the access identifier
*AccessIdentifiersApi* | [**getAccessIdentifier**](docs/Api/AccessIdentifiersApi.md#getaccessidentifier) | **GET** /accessids/{id} | Get AID by ID
*AccessIdentifiersApi* | [**getAccessIdentifiers**](docs/Api/AccessIdentifiersApi.md#getaccessidentifiers) | **GET** /accessids | Get Access Identifiers
*AccessIdentifiersApi* | [**updateAccessIdentifier**](docs/Api/AccessIdentifiersApi.md#updateaccessidentifier) | **PUT** /accessids/{id} | Update the access identifier
*ChannelGroupsApi* | [**createChannelGroup**](docs/Api/ChannelGroupsApi.md#createchannelgroup) | **POST** /channel-groups | Create a new channel group
*ChannelGroupsApi* | [**deleteChannelGroup**](docs/Api/ChannelGroupsApi.md#deletechannelgroup) | **DELETE** /channel-groups/{id} | Delete the channel group
*ChannelGroupsApi* | [**executeActionOnChannelGroup**](docs/Api/ChannelGroupsApi.md#executeactiononchannelgroup) | **PATCH** /channel-groups/{id} | 
*ChannelGroupsApi* | [**getChannelGroup**](docs/Api/ChannelGroupsApi.md#getchannelgroup) | **GET** /channel-groups/{id} | Get Channel Group
*ChannelGroupsApi* | [**getChannelGroupDirectLinks**](docs/Api/ChannelGroupsApi.md#getchannelgroupdirectlinks) | **GET** /channel-groups/{channelGroup}/direct-links | Get channel group direct links
*ChannelGroupsApi* | [**getChannelGroupScenes**](docs/Api/ChannelGroupsApi.md#getchannelgroupscenes) | **GET** /channel-groups/{channelGroup}/scenes | Get channel group scenes
*ChannelGroupsApi* | [**getChannelGroups**](docs/Api/ChannelGroupsApi.md#getchannelgroups) | **GET** /channel-groups | Get Channel Groups
*ChannelGroupsApi* | [**updateChannelGroup**](docs/Api/ChannelGroupsApi.md#updatechannelgroup) | **PUT** /channel-groups/{id} | Update the channel group
*ChannelsApi* | [**configureChannel**](docs/Api/ChannelsApi.md#configurechannel) | **PATCH** /channels/{id}/settings | 
*ChannelsApi* | [**createChannelReaction**](docs/Api/ChannelsApi.md#createchannelreaction) | **POST** /channels/{channel}/reactions | Create channel reaction
*ChannelsApi* | [**deleteChannelMeasurementLogs**](docs/Api/ChannelsApi.md#deletechannelmeasurementlogs) | **DELETE** /channels/{channel}/measurement-logs | Delete channel measurement logs.
*ChannelsApi* | [**deleteChannelReaction**](docs/Api/ChannelsApi.md#deletechannelreaction) | **DELETE** /channels/{channel}/reactions/{reaction} | Delete channel reaction
*ChannelsApi* | [**downloadChannelMeasurementLogs**](docs/Api/ChannelsApi.md#downloadchannelmeasurementlogs) | **GET** /channels/{channel}/measurement-logs-download | Get measurement logs as a zipped CSV file.
*ChannelsApi* | [**executeAction**](docs/Api/ChannelsApi.md#executeaction) | **PATCH** /channels/{id} | 
*ChannelsApi* | [**getChannel**](docs/Api/ChannelsApi.md#getchannel) | **GET** /channels/{id} | Get Channel
*ChannelsApi* | [**getChannelChannelGroups**](docs/Api/ChannelsApi.md#getchannelchannelgroups) | **GET** /channels/{id}/channel-groups | Get Channel Groups that the given channel belongs to
*ChannelsApi* | [**getChannelDirectLinks**](docs/Api/ChannelsApi.md#getchanneldirectlinks) | **GET** /channels/{channel}/direct-links | Get channel direct links
*ChannelsApi* | [**getChannelMeasurementLogs**](docs/Api/ChannelsApi.md#getchannelmeasurementlogs) | **GET** /channels/{channel}/measurement-logs | Get channel measurement logs.
*ChannelsApi* | [**getChannelNotifications**](docs/Api/ChannelsApi.md#getchannelnotifications) | **GET** /channels/{channel}/notifications | 
*ChannelsApi* | [**getChannelReaction**](docs/Api/ChannelsApi.md#getchannelreaction) | **GET** /channels/{channel}/reactions/{reaction} | Get channel reaction
*ChannelsApi* | [**getChannelReactions**](docs/Api/ChannelsApi.md#getchannelreactions) | **GET** /channels/{channel}/reactions | Get channel reactions
*ChannelsApi* | [**getChannelScenes**](docs/Api/ChannelsApi.md#getchannelscenes) | **GET** /channels/{channel}/scenes | Get channel scenes
*ChannelsApi* | [**getChannels**](docs/Api/ChannelsApi.md#getchannels) | **GET** /channels | Get Channels
*ChannelsApi* | [**updateChannel**](docs/Api/ChannelsApi.md#updatechannel) | **PUT** /channels/{id} | 
*ChannelsApi* | [**updateChannelReaction**](docs/Api/ChannelsApi.md#updatechannelreaction) | **PUT** /channels/{channel}/reactions/{reaction} | Update channel reaction
*ClientAppsApi* | [**deleteClientApp**](docs/Api/ClientAppsApi.md#deleteclientapp) | **DELETE** /client-apps/{id} | Delete the client app
*ClientAppsApi* | [**getClientApps**](docs/Api/ClientAppsApi.md#getclientapps) | **GET** /client-apps | Get Client Apps
*ClientAppsApi* | [**updateClientApp**](docs/Api/ClientAppsApi.md#updateclientapp) | **PUT** /client-apps/{id} | Update the client app
*DevicesApi* | [**deleteDevice**](docs/Api/DevicesApi.md#deletedevice) | **DELETE** /iodevices/{id} | Delete the device
*DevicesApi* | [**executeDeviceAction**](docs/Api/DevicesApi.md#executedeviceaction) | **PATCH** /iodevices/{id} | 
*DevicesApi* | [**getIoDevice**](docs/Api/DevicesApi.md#getiodevice) | **GET** /iodevices/{id} | Get Device
*DevicesApi* | [**getIoDeviceNotifications**](docs/Api/DevicesApi.md#getiodevicenotifications) | **GET** /iodevices/{device}/notifications | 
*DevicesApi* | [**getIoDevices**](docs/Api/DevicesApi.md#getiodevices) | **GET** /iodevices | Get Devices
*DevicesApi* | [**updateDevice**](docs/Api/DevicesApi.md#updatedevice) | **PUT** /iodevices/{id} | 
*DirectLinksApi* | [**getDirectLink**](docs/Api/DirectLinksApi.md#getdirectlink) | **GET** /direct-links/{directLink} | Get direct link
*DirectLinksApi* | [**getDirectLinks**](docs/Api/DirectLinksApi.md#getdirectlinks) | **GET** /direct-links | Get Direct Links
*EnumsApi* | [**getActionsEnum**](docs/Api/EnumsApi.md#getactionsenum) | **GET** /enum/actions | 
*EnumsApi* | [**getChannelTypesEnum**](docs/Api/EnumsApi.md#getchanneltypesenum) | **GET** /enum/channel-types | 
*EnumsApi* | [**getFunctionsEnum**](docs/Api/EnumsApi.md#getfunctionsenum) | **GET** /enum/functions | 
*LocationsApi* | [**createLocation**](docs/Api/LocationsApi.md#createlocation) | **POST** /locations | Create a new location
*LocationsApi* | [**deleteLocation**](docs/Api/LocationsApi.md#deletelocation) | **DELETE** /locations/{id} | Delete the location
*LocationsApi* | [**getLocation**](docs/Api/LocationsApi.md#getlocation) | **GET** /locations/{id} | Get location by ID
*LocationsApi* | [**getLocations**](docs/Api/LocationsApi.md#getlocations) | **GET** /locations | Get locations
*LocationsApi* | [**updateLocation**](docs/Api/LocationsApi.md#updatelocation) | **PUT** /locations/{id} | Update the location
*NotificationsApi* | [**getNotification**](docs/Api/NotificationsApi.md#getnotification) | **GET** /notifications/{id} | Get Notification
*NotificationsApi* | [**sendNotification**](docs/Api/NotificationsApi.md#sendnotification) | **PATCH** /notifications | Send a notification.
*NotificationsApi* | [**updateNotification**](docs/Api/NotificationsApi.md#updatenotification) | **PUT** /notifications/{notification} | 
*OAuthApi* | [**issueAccessToken**](docs/Api/OAuthApi.md#issueaccesstoken) | **POST** /oauth/v2/token | Issues an access token based on authorization_code or refresh_token.
*ScenesApi* | [**createScene**](docs/Api/ScenesApi.md#createscene) | **POST** /scenes | Create a scene
*ScenesApi* | [**deleteScene**](docs/Api/ScenesApi.md#deletescene) | **DELETE** /scenes/{scene} | Delete the scene
*ScenesApi* | [**executeScene**](docs/Api/ScenesApi.md#executescene) | **PATCH** /scenes/{scene} | 
*ScenesApi* | [**getScene**](docs/Api/ScenesApi.md#getscene) | **GET** /scenes/{scene} | Get Scene
*ScenesApi* | [**getSceneDirectLinks**](docs/Api/ScenesApi.md#getscenedirectlinks) | **GET** /scenes/{scene}/direct-links | Get scene direct links
*ScenesApi* | [**getSceneScenes**](docs/Api/ScenesApi.md#getscenescenes) | **GET** /scenes/{scene}/scenes | Get scene scenes
*ScenesApi* | [**getScenes**](docs/Api/ScenesApi.md#getscenes) | **GET** /scenes | Get Scenes
*ScenesApi* | [**updateScene**](docs/Api/ScenesApi.md#updatescene) | **PUT** /scenes/{scene} | Update the scene
*SchedulesApi* | [**getSchedules**](docs/Api/SchedulesApi.md#getschedules) | **GET** /schedules | Get Schedules
*ServerApi* | [**getServerInfo**](docs/Api/ServerApi.md#getserverinfo) | **GET** /server-info | Get the server info
*ServerApi* | [**getSuplaServerStatus**](docs/Api/ServerApi.md#getsuplaserverstatus) | **GET** /server-status | Get the SUPLA Server status
*ServerApi* | [**getTokenInfo**](docs/Api/ServerApi.md#gettokeninfo) | **GET** /token-info | Returns information about used access token
*UserIconsApi* | [**createUserIcon**](docs/Api/UserIconsApi.md#createusericon) | **POST** /user-icons | Create a new User Icon
*UserIconsApi* | [**createUserIconBase64**](docs/Api/UserIconsApi.md#createusericonbase64) | **POST** /user-icons.base64 | Create a new User Icon sent in Base64 format.
*UserIconsApi* | [**deleteUserIcon**](docs/Api/UserIconsApi.md#deleteusericon) | **DELETE** /user-icons/{id} | Delete the User Icon
*UserIconsApi* | [**getUserIcon**](docs/Api/UserIconsApi.md#getusericon) | **GET** /user-icons/{id} | Get User Icon
*UserIconsApi* | [**getUserIconImage**](docs/Api/UserIconsApi.md#getusericonimage) | **GET** /user-icons/{id}/{imageIndex} | Get User Icon image at specified index
*UserIconsApi* | [**getUserIcons**](docs/Api/UserIconsApi.md#getusericons) | **GET** /user-icons | List User Icons
*UsersApi* | [**getCurrentUser**](docs/Api/UsersApi.md#getcurrentuser) | **GET** /users/current | Get info about user for the token.

## Models

- [AccessIdentifier](docs/Model/AccessIdentifier.md)
- [AccessIdentifierRelationsCount](docs/Model/AccessIdentifierRelationsCount.md)
- [AccessTokenRequestBody](docs/Model/AccessTokenRequestBody.md)
- [ActionableSubject](docs/Model/ActionableSubject.md)
- [ActionableSubjectTypeNames](docs/Model/ActionableSubjectTypeNames.md)
- [ActiveHoursDef](docs/Model/ActiveHoursDef.md)
- [Channel](docs/Model/Channel.md)
- [ChannelActionParams](docs/Model/ChannelActionParams.md)
- [ChannelActionParamsCopy](docs/Model/ChannelActionParamsCopy.md)
- [ChannelActionParamsDimmer](docs/Model/ChannelActionParamsDimmer.md)
- [ChannelActionParamsDuration](docs/Model/ChannelActionParamsDuration.md)
- [ChannelActionParamsPercentage](docs/Model/ChannelActionParamsPercentage.md)
- [ChannelActionParamsRgbw](docs/Model/ChannelActionParamsRgbw.md)
- [ChannelActionParamsRgbwOneOf](docs/Model/ChannelActionParamsRgbwOneOf.md)
- [ChannelActionParamsRgbwOneOf1](docs/Model/ChannelActionParamsRgbwOneOf1.md)
- [ChannelActionParamsRgbwOneOf2](docs/Model/ChannelActionParamsRgbwOneOf2.md)
- [ChannelActionParamsRgbwOneOf2Hsv](docs/Model/ChannelActionParamsRgbwOneOf2Hsv.md)
- [ChannelActionParamsRgbwOneOf3](docs/Model/ChannelActionParamsRgbwOneOf3.md)
- [ChannelActionParamsRgbwOneOf3Rgb](docs/Model/ChannelActionParamsRgbwOneOf3Rgb.md)
- [ChannelActionParamsSend](docs/Model/ChannelActionParamsSend.md)
- [ChannelConfig](docs/Model/ChannelConfig.md)
- [ChannelConfigActionTrigger](docs/Model/ChannelConfigActionTrigger.md)
- [ChannelConfigAlexaSettings](docs/Model/ChannelConfigAlexaSettings.md)
- [ChannelConfigAlexaSettingsAlexa](docs/Model/ChannelConfigAlexaSettingsAlexa.md)
- [ChannelConfigControllingTheGate](docs/Model/ChannelConfigControllingTheGate.md)
- [ChannelConfigControllingTheGateClosingRule](docs/Model/ChannelConfigControllingTheGateClosingRule.md)
- [ChannelConfigElectricityMeter](docs/Model/ChannelConfigElectricityMeter.md)
- [ChannelConfigGeneralPurposeMeasurement](docs/Model/ChannelConfigGeneralPurposeMeasurement.md)
- [ChannelConfigGeneralPurposeMeasurementDefaults](docs/Model/ChannelConfigGeneralPurposeMeasurementDefaults.md)
- [ChannelConfigGeneralPurposeMeter](docs/Model/ChannelConfigGeneralPurposeMeter.md)
- [ChannelConfigGeneralPurposeMeterAllOf](docs/Model/ChannelConfigGeneralPurposeMeterAllOf.md)
- [ChannelConfigGoogleHomeSettings](docs/Model/ChannelConfigGoogleHomeSettings.md)
- [ChannelConfigGoogleHomeSettingsGoogleHome](docs/Model/ChannelConfigGoogleHomeSettingsGoogleHome.md)
- [ChannelConfigHumidity](docs/Model/ChannelConfigHumidity.md)
- [ChannelConfigHumidityAndThermometer](docs/Model/ChannelConfigHumidityAndThermometer.md)
- [ChannelConfigHvacThermostat](docs/Model/ChannelConfigHvacThermostat.md)
- [ChannelConfigHvacThermostatSchedule](docs/Model/ChannelConfigHvacThermostatSchedule.md)
- [ChannelConfigHvacThermostatTemperatureConstraints](docs/Model/ChannelConfigHvacThermostatTemperatureConstraints.md)
- [ChannelConfigHvacThermostatTemperatures](docs/Model/ChannelConfigHvacThermostatTemperatures.md)
- [ChannelConfigImpulseCounter](docs/Model/ChannelConfigImpulseCounter.md)
- [ChannelConfigInvertedLogic](docs/Model/ChannelConfigInvertedLogic.md)
- [ChannelConfigStaircaseTimer](docs/Model/ChannelConfigStaircaseTimer.md)
- [ChannelConfigThermometer](docs/Model/ChannelConfigThermometer.md)
- [ChannelFunction](docs/Model/ChannelFunction.md)
- [ChannelFunctionAction](docs/Model/ChannelFunctionAction.md)
- [ChannelGroup](docs/Model/ChannelGroup.md)
- [ChannelGroupRelationsCount](docs/Model/ChannelGroupRelationsCount.md)
- [ChannelRelationsCount](docs/Model/ChannelRelationsCount.md)
- [ChannelState](docs/Model/ChannelState.md)
- [ChannelStateBrightness](docs/Model/ChannelStateBrightness.md)
- [ChannelStateColor](docs/Model/ChannelStateColor.md)
- [ChannelStateColorAndBrightness](docs/Model/ChannelStateColorAndBrightness.md)
- [ChannelStateConnected](docs/Model/ChannelStateConnected.md)
- [ChannelStateDepth](docs/Model/ChannelStateDepth.md)
- [ChannelStateDistance](docs/Model/ChannelStateDistance.md)
- [ChannelStateDouble](docs/Model/ChannelStateDouble.md)
- [ChannelStateElectricityMeter](docs/Model/ChannelStateElectricityMeter.md)
- [ChannelStateElectricityMeterPhase](docs/Model/ChannelStateElectricityMeterPhase.md)
- [ChannelStateHumidity](docs/Model/ChannelStateHumidity.md)
- [ChannelStateHumidityAndTemperature](docs/Model/ChannelStateHumidityAndTemperature.md)
- [ChannelStateHvac](docs/Model/ChannelStateHvac.md)
- [ChannelStateImpulseCounter](docs/Model/ChannelStateImpulseCounter.md)
- [ChannelStateOnOff](docs/Model/ChannelStateOnOff.md)
- [ChannelStateRelay](docs/Model/ChannelStateRelay.md)
- [ChannelStateRollerShutter](docs/Model/ChannelStateRollerShutter.md)
- [ChannelStateSensor](docs/Model/ChannelStateSensor.md)
- [ChannelStateSensorPartial](docs/Model/ChannelStateSensorPartial.md)
- [ChannelStateTemperature](docs/Model/ChannelStateTemperature.md)
- [ChannelStateValve](docs/Model/ChannelStateValve.md)
- [ChannelType](docs/Model/ChannelType.md)
- [ClientApp](docs/Model/ClientApp.md)
- [Device](docs/Model/Device.md)
- [DeviceConfig](docs/Model/DeviceConfig.md)
- [DeviceConfigHomeScreen](docs/Model/DeviceConfigHomeScreen.md)
- [DeviceConfigScreenBrightness](docs/Model/DeviceConfigScreenBrightness.md)
- [DeviceConfigUserInterface](docs/Model/DeviceConfigUserInterface.md)
- [DeviceConfigUserInterfaceConstraints](docs/Model/DeviceConfigUserInterfaceConstraints.md)
- [DeviceManufacturer](docs/Model/DeviceManufacturer.md)
- [DeviceRelationsCount](docs/Model/DeviceRelationsCount.md)
- [DirectLink](docs/Model/DirectLink.md)
- [DirectLinkActiveDateRange](docs/Model/DirectLinkActiveDateRange.md)
- [ErrorResponse](docs/Model/ErrorResponse.md)
- [InlineObject](docs/Model/InlineObject.md)
- [InlineObject1](docs/Model/InlineObject1.md)
- [InlineObject10](docs/Model/InlineObject10.md)
- [InlineObject11](docs/Model/InlineObject11.md)
- [InlineObject12](docs/Model/InlineObject12.md)
- [InlineObject14](docs/Model/InlineObject14.md)
- [InlineObject2](docs/Model/InlineObject2.md)
- [InlineObject3](docs/Model/InlineObject3.md)
- [InlineObject4](docs/Model/InlineObject4.md)
- [InlineObject5](docs/Model/InlineObject5.md)
- [InlineObject6](docs/Model/InlineObject6.md)
- [InlineObject7](docs/Model/InlineObject7.md)
- [InlineObject8](docs/Model/InlineObject8.md)
- [InlineObject9](docs/Model/InlineObject9.md)
- [InlineResponse200](docs/Model/InlineResponse200.md)
- [InlineResponse2001](docs/Model/InlineResponse2001.md)
- [InlineResponse2002](docs/Model/InlineResponse2002.md)
- [InlineResponse2003](docs/Model/InlineResponse2003.md)
- [InlineResponse200Timezone](docs/Model/InlineResponse200Timezone.md)
- [InlineResponse400](docs/Model/InlineResponse400.md)
- [InlineResponse4001](docs/Model/InlineResponse4001.md)
- [InlineResponse4002](docs/Model/InlineResponse4002.md)
- [InlineResponse4003](docs/Model/InlineResponse4003.md)
- [InlineResponse503](docs/Model/InlineResponse503.md)
- [Location](docs/Model/Location.md)
- [LocationRelationsCount](docs/Model/LocationRelationsCount.md)
- [Notification](docs/Model/Notification.md)
- [Reaction](docs/Model/Reaction.md)
- [ReactionTrigger](docs/Model/ReactionTrigger.md)
- [ReactionTriggerChange](docs/Model/ReactionTriggerChange.md)
- [ReactionTriggerChangeOnChange](docs/Model/ReactionTriggerChangeOnChange.md)
- [ReactionTriggerEq](docs/Model/ReactionTriggerEq.md)
- [ReactionTriggerEqOnChangeTo](docs/Model/ReactionTriggerEqOnChangeTo.md)
- [ReactionTriggerFieldNames](docs/Model/ReactionTriggerFieldNames.md)
- [ReactionTriggerGe](docs/Model/ReactionTriggerGe.md)
- [ReactionTriggerGeOnChangeTo](docs/Model/ReactionTriggerGeOnChangeTo.md)
- [ReactionTriggerGeOnChangeToResume](docs/Model/ReactionTriggerGeOnChangeToResume.md)
- [ReactionTriggerGt](docs/Model/ReactionTriggerGt.md)
- [ReactionTriggerGtOnChangeTo](docs/Model/ReactionTriggerGtOnChangeTo.md)
- [ReactionTriggerGtOnChangeToResume](docs/Model/ReactionTriggerGtOnChangeToResume.md)
- [ReactionTriggerLe](docs/Model/ReactionTriggerLe.md)
- [ReactionTriggerLeOnChangeTo](docs/Model/ReactionTriggerLeOnChangeTo.md)
- [ReactionTriggerLeOnChangeToResume](docs/Model/ReactionTriggerLeOnChangeToResume.md)
- [ReactionTriggerLt](docs/Model/ReactionTriggerLt.md)
- [ReactionTriggerLtOnChangeTo](docs/Model/ReactionTriggerLtOnChangeTo.md)
- [ReactionTriggerLtOnChangeToResume](docs/Model/ReactionTriggerLtOnChangeToResume.md)
- [ReactionTriggerNe](docs/Model/ReactionTriggerNe.md)
- [ReactionTriggerNeOnChangeTo](docs/Model/ReactionTriggerNeOnChangeTo.md)
- [Scene](docs/Model/Scene.md)
- [SceneOperation](docs/Model/SceneOperation.md)
- [SceneRelationsCount](docs/Model/SceneRelationsCount.md)
- [SceneState](docs/Model/SceneState.md)
- [ScenesOperations](docs/Model/ScenesOperations.md)
- [Schedule](docs/Model/Schedule.md)
- [ScheduleClosestExecutions](docs/Model/ScheduleClosestExecutions.md)
- [ScheduleConfigEntry](docs/Model/ScheduleConfigEntry.md)
- [ScheduleConfigEntryAction](docs/Model/ScheduleConfigEntryAction.md)
- [ScheduleScheduledExecution](docs/Model/ScheduleScheduledExecution.md)
- [ScheduleScheduledExecutionResult](docs/Model/ScheduleScheduledExecutionResult.md)
- [ScheduleState](docs/Model/ScheduleState.md)
- [User](docs/Model/User.md)
- [UserAgreements](docs/Model/UserAgreements.md)
- [UserApiRateLimit](docs/Model/UserApiRateLimit.md)
- [UserApiRateLimitRule](docs/Model/UserApiRateLimitRule.md)
- [UserApiRateLimitStatus](docs/Model/UserApiRateLimitStatus.md)
- [UserIcon](docs/Model/UserIcon.md)
- [UserLimits](docs/Model/UserLimits.md)
- [UserLimitsPushNotificationsPerHour](docs/Model/UserLimitsPushNotificationsPerHour.md)

## Authorization

### Personal Access Token

Generate a Personal Access Token for you in the **Integrations** section on [https://cloud.supla.org](https://cloud.supla.org)
or your server instance.

### OAuth2
- **Flow**: `authorizationCode`
- **Authorization URL**: `https://cloud.supla.org/oauth/v2/auth` if the app is public or `https://YOUR_SUPLA_SERVER/oauth/v2/auth` otherwise
- **Scopes**:
    - `accessids_r`: Access Identifiers (read)
    - `accessids_rw`: Access Identifiers (read and modify)
    - `account_r`: User account and e-mail address (read)
    - `account_rw`: User account (read and modify)
    - `channels_r`: Channels (read)
    - `channels_rw`: Channels (read and modify)
    - `channels_ea`: Channels (execute actions)
    - `channels_files`: Download files from API (measurements history, user icons)
    - `channelgroups_r`: Channel groups (read)
    - `channelgroups_rw`: Channel groups (read and modify)
    - `channelgroups_ea`: Channel groups (execute actions)
    - `clientapps_r`: Client apps (read)
    - `clientapps_rw`: Client apps (read and modify)
    - `directlinks_r`: Direct links (read)
    - `directlinks_rw`: Direct links (read and modify)
    - `iodevices_r`: IO Devices (read)
    - `iodevices_rw`: IO Devices (read and modify)
    - `locations_r`: Locations (read)
    - `locations_rw`: Locations (read and modify)
    - `scenes_r`: Scenes (read)
    - `scenes_rw`: Scenes (read and modify)
    - `scenes_ea`: Scenes (execute actions)
    - `schedules_r`: Schedules (read)
    - `schedules_rw`: Schedules (read and modify)
    - `state_webhook`: Access to state webhooks
    - `mqtt_broker`: MQTT Broker settings
    - `offline_access`: Issue refresh token
- **Example Auth URL**: `/oauth/v2/auth?client_id=YOUR_CLIENT_ID&redirect_uri=YOUR_REDIRECT_URI&response_type=code&scope=account_r%20channels_r&state=example-state`



## Sources

This PHP package is automatically generated by the [OpenAPI Generator](https://openapi-generator.tech) project:

- Targeted Cloud version: `24.01.01-51-gd3ab095f`
- Build package: `org.openapitools.codegen.languages.PhpClientCodegen`
