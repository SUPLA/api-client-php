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
use Supla\ApiClient\Model\ChannelFunctionEnumNames;

// Get access token from OAuth flow or use a Personal Access Token
$accessToken = '<YOUR_ACCESS_TOKEN_HERE>';
$config = Supla\ApiClient\Configuration::getDefaultConfiguration()->setAccessToken($accessToken);

$apiInstance = new ChannelsApi( new GuzzleHttp\Client(), $config);

try {
    $result = $apiInstance->getChannels([ChannelFunctionEnumNames::LIGHTSWITCH]);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SUPLA API: ', $e->getMessage(), PHP_EOL;
}
```

## API Endpoints

All URIs are relative to `https://YOUR_SUPLA_SERVER/api/v2.4.0`.

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
*ChannelGroupsApi* | [**getChannelGroups**](docs/Api/ChannelGroupsApi.md#getchannelgroups) | **GET** /channel-groups | Get Channel Groups
*ChannelGroupsApi* | [**updateChannelGroup**](docs/Api/ChannelGroupsApi.md#updatechannelgroup) | **PUT** /channel-groups/{id} | Update the channel group
*ChannelsApi* | [**configureChannel**](docs/Api/ChannelsApi.md#configurechannel) | **PATCH** /channels/{id}/settings | 
*ChannelsApi* | [**executeAction**](docs/Api/ChannelsApi.md#executeaction) | **PATCH** /channels/{id} | 
*ChannelsApi* | [**getChannel**](docs/Api/ChannelsApi.md#getchannel) | **GET** /channels/{id} | Get Channel
*ChannelsApi* | [**getChannelChannelGroups**](docs/Api/ChannelsApi.md#getchannelchannelgroups) | **GET** /channels/{id}/channel-groups | Get Channel Groups that the given channel belongs to
*ChannelsApi* | [**getChannels**](docs/Api/ChannelsApi.md#getchannels) | **GET** /channels | Get Channels
*ChannelsApi* | [**updateChannel**](docs/Api/ChannelsApi.md#updatechannel) | **PUT** /channels/{id} | 
*LocationsApi* | [**createLocation**](docs/Api/LocationsApi.md#createlocation) | **POST** /locations | Create a new location
*LocationsApi* | [**deleteLocation**](docs/Api/LocationsApi.md#deletelocation) | **DELETE** /locations/{id} | Delete the location
*LocationsApi* | [**getLocation**](docs/Api/LocationsApi.md#getlocation) | **GET** /locations/{id} | Get location by ID
*LocationsApi* | [**getLocations**](docs/Api/LocationsApi.md#getlocations) | **GET** /locations | Get locations
*LocationsApi* | [**updateLocation**](docs/Api/LocationsApi.md#updatelocation) | **PUT** /locations/{id} | Update the location
*OAuthApi* | [**issueAccessToken**](docs/Api/OAuthApi.md#issueaccesstoken) | **POST** /oauth/v2/token | Issues an access token based on authorization_code or refresh_token.
*ServerApi* | [**getServerInfo**](docs/Api/ServerApi.md#getserverinfo) | **GET** /server-info | Get the server info
*ServerApi* | [**getSuplaServerStatus**](docs/Api/ServerApi.md#getsuplaserverstatus) | **GET** /server-status | Get the SUPLA Server status
*ServerApi* | [**getTokenInfo**](docs/Api/ServerApi.md#gettokeninfo) | **GET** /token-info | Returns information about used access token
*UsersApi* | [**getCurrentUser**](docs/Api/UsersApi.md#getcurrentuser) | **GET** /users/current | Get info about user for the token.

## Models

- [AccessIdentifier](docs/Model/AccessIdentifier.md)
- [AccessIdentifierActiveHoursDef](docs/Model/AccessIdentifierActiveHoursDef.md)
- [AccessIdentifierRelationsCount](docs/Model/AccessIdentifierRelationsCount.md)
- [AccessTokenRequestBody](docs/Model/AccessTokenRequestBody.md)
- [ActionableSubjectTypeNames](docs/Model/ActionableSubjectTypeNames.md)
- [Channel](docs/Model/Channel.md)
- [ChannelActionParams](docs/Model/ChannelActionParams.md)
- [ChannelActionParamsDimmer](docs/Model/ChannelActionParamsDimmer.md)
- [ChannelActionParamsPercentage](docs/Model/ChannelActionParamsPercentage.md)
- [ChannelActionParamsRgbw](docs/Model/ChannelActionParamsRgbw.md)
- [ChannelActionParamsRgbwOneOf](docs/Model/ChannelActionParamsRgbwOneOf.md)
- [ChannelActionParamsRgbwOneOf1](docs/Model/ChannelActionParamsRgbwOneOf1.md)
- [ChannelActionParamsRgbwOneOf2](docs/Model/ChannelActionParamsRgbwOneOf2.md)
- [ChannelActionParamsRgbwOneOf2Hsv](docs/Model/ChannelActionParamsRgbwOneOf2Hsv.md)
- [ChannelActionParamsRgbwOneOf3](docs/Model/ChannelActionParamsRgbwOneOf3.md)
- [ChannelActionParamsRgbwOneOf3Rgb](docs/Model/ChannelActionParamsRgbwOneOf3Rgb.md)
- [ChannelConfig](docs/Model/ChannelConfig.md)
- [ChannelConfigActionTrigger](docs/Model/ChannelConfigActionTrigger.md)
- [ChannelConfigControllingTheGate](docs/Model/ChannelConfigControllingTheGate.md)
- [ChannelConfigElectricityMeter](docs/Model/ChannelConfigElectricityMeter.md)
- [ChannelConfigHumidity](docs/Model/ChannelConfigHumidity.md)
- [ChannelConfigHumidityAndThermometer](docs/Model/ChannelConfigHumidityAndThermometer.md)
- [ChannelConfigImpulseCounter](docs/Model/ChannelConfigImpulseCounter.md)
- [ChannelConfigInvertedLogic](docs/Model/ChannelConfigInvertedLogic.md)
- [ChannelConfigStaircaseTimer](docs/Model/ChannelConfigStaircaseTimer.md)
- [ChannelConfigThermometer](docs/Model/ChannelConfigThermometer.md)
- [ChannelFunction](docs/Model/ChannelFunction.md)
- [ChannelFunctionAction](docs/Model/ChannelFunctionAction.md)
- [ChannelFunctionActionEnumNames](docs/Model/ChannelFunctionActionEnumNames.md)
- [ChannelFunctionEnumNames](docs/Model/ChannelFunctionEnumNames.md)
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
- [ChannelStateImpulseCounter](docs/Model/ChannelStateImpulseCounter.md)
- [ChannelStateOnOff](docs/Model/ChannelStateOnOff.md)
- [ChannelStateRelay](docs/Model/ChannelStateRelay.md)
- [ChannelStateRollerShutter](docs/Model/ChannelStateRollerShutter.md)
- [ChannelStateSensor](docs/Model/ChannelStateSensor.md)
- [ChannelStateSensorPartial](docs/Model/ChannelStateSensorPartial.md)
- [ChannelStateTemperature](docs/Model/ChannelStateTemperature.md)
- [ChannelStateValve](docs/Model/ChannelStateValve.md)
- [ChannelType](docs/Model/ChannelType.md)
- [InlineObject](docs/Model/InlineObject.md)
- [InlineObject1](docs/Model/InlineObject1.md)
- [InlineObject2](docs/Model/InlineObject2.md)
- [InlineObject3](docs/Model/InlineObject3.md)
- [InlineObject4](docs/Model/InlineObject4.md)
- [InlineObject5](docs/Model/InlineObject5.md)
- [InlineResponse200](docs/Model/InlineResponse200.md)
- [InlineResponse2001](docs/Model/InlineResponse2001.md)
- [InlineResponse2002](docs/Model/InlineResponse2002.md)
- [InlineResponse2003](docs/Model/InlineResponse2003.md)
- [InlineResponse200Timezone](docs/Model/InlineResponse200Timezone.md)
- [InlineResponse400](docs/Model/InlineResponse400.md)
- [InlineResponse4001](docs/Model/InlineResponse4001.md)
- [InlineResponse409](docs/Model/InlineResponse409.md)
- [InlineResponse503](docs/Model/InlineResponse503.md)
- [Location](docs/Model/Location.md)
- [LocationRelationsCount](docs/Model/LocationRelationsCount.md)
- [User](docs/Model/User.md)
- [UserAgreements](docs/Model/UserAgreements.md)
- [UserLimits](docs/Model/UserLimits.md)

## Authorization

### Personal Access Token

Generate a Personal Access Token for you in the **Integrations** section on [https://cloud.supla.org](https://cloud.supla.org)
or your server instance.

### OAuth2
- **Flow**: `authorizationCode`
- **Authorization URL**: `https://cloud.supla.org/oauth/v2/auth` if the app is public or `https://YOUR_SUPLA_SERVER/oauth/v2/auth` otherwise
- **Scopes**:
    - `accessids_r`: Access Identifiers (Read)
    - `locations_r`: Locations (Read)
- **Example Auth URL**: `/oauth/v2/auth?client_id=YOUR_CLIENT_ID&redirect_uri=YOUR_REDIRECT_URI&response_type=code&scope=account_r%20channels_r&state=example-state`



## Sources

This PHP package is automatically generated by the [OpenAPI Generator](https://openapi-generator.tech) project:

- Targeted Cloud version: `2.3.37`
- Build package: `org.openapitools.codegen.languages.PhpClientCodegen`
