<?php
/**
 * UserLimits
 *
 * PHP version 7.3
 *
 * @category Class
 * @package  Supla\ApiClient
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * SUPLA Cloud API
 *
 * No description provided (generated by Openapi Generator https://github.com/openapitools/openapi-generator)
 *
 * The version of the OpenAPI document: 23.09.02-69-g0347cdcf
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 5.4.0
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace Supla\ApiClient\Model;

use \ArrayAccess;
use \Supla\ApiClient\ObjectSerializer;

/**
 * UserLimits Class Doc Comment
 *
 * @category Class
 * @package  Supla\ApiClient
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class UserLimits implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'User_limits';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'accessId' => 'int',
        'actionsPerSchedule' => 'int',
        'channelGroup' => 'int',
        'channelPerGroup' => 'int',
        'clientApp' => 'int',
        'directLink' => 'int',
        'ioDevice' => 'int',
        'location' => 'int',
        'oauthClient' => 'int',
        'operationsPerScene' => 'int',
        'pushNotifications' => 'int',
        'pushNotificationsPerHour' => '\Supla\ApiClient\Model\UserLimitsPushNotificationsPerHour',
        'scene' => 'int',
        'schedule' => 'int',
        'valueBasedTriggers' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'accessId' => null,
        'actionsPerSchedule' => null,
        'channelGroup' => null,
        'channelPerGroup' => null,
        'clientApp' => null,
        'directLink' => null,
        'ioDevice' => null,
        'location' => null,
        'oauthClient' => null,
        'operationsPerScene' => null,
        'pushNotifications' => null,
        'pushNotificationsPerHour' => null,
        'scene' => null,
        'schedule' => null,
        'valueBasedTriggers' => null
    ];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPITypes()
    {
        return self::$openAPITypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPIFormats()
    {
        return self::$openAPIFormats;
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'accessId' => 'accessId',
        'actionsPerSchedule' => 'actionsPerSchedule',
        'channelGroup' => 'channelGroup',
        'channelPerGroup' => 'channelPerGroup',
        'clientApp' => 'clientApp',
        'directLink' => 'directLink',
        'ioDevice' => 'ioDevice',
        'location' => 'location',
        'oauthClient' => 'oauthClient',
        'operationsPerScene' => 'operationsPerScene',
        'pushNotifications' => 'pushNotifications',
        'pushNotificationsPerHour' => 'pushNotificationsPerHour',
        'scene' => 'scene',
        'schedule' => 'schedule',
        'valueBasedTriggers' => 'valueBasedTriggers'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'accessId' => 'setAccessId',
        'actionsPerSchedule' => 'setActionsPerSchedule',
        'channelGroup' => 'setChannelGroup',
        'channelPerGroup' => 'setChannelPerGroup',
        'clientApp' => 'setClientApp',
        'directLink' => 'setDirectLink',
        'ioDevice' => 'setIoDevice',
        'location' => 'setLocation',
        'oauthClient' => 'setOauthClient',
        'operationsPerScene' => 'setOperationsPerScene',
        'pushNotifications' => 'setPushNotifications',
        'pushNotificationsPerHour' => 'setPushNotificationsPerHour',
        'scene' => 'setScene',
        'schedule' => 'setSchedule',
        'valueBasedTriggers' => 'setValueBasedTriggers'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'accessId' => 'getAccessId',
        'actionsPerSchedule' => 'getActionsPerSchedule',
        'channelGroup' => 'getChannelGroup',
        'channelPerGroup' => 'getChannelPerGroup',
        'clientApp' => 'getClientApp',
        'directLink' => 'getDirectLink',
        'ioDevice' => 'getIoDevice',
        'location' => 'getLocation',
        'oauthClient' => 'getOauthClient',
        'operationsPerScene' => 'getOperationsPerScene',
        'pushNotifications' => 'getPushNotifications',
        'pushNotificationsPerHour' => 'getPushNotificationsPerHour',
        'scene' => 'getScene',
        'schedule' => 'getSchedule',
        'valueBasedTriggers' => 'getValueBasedTriggers'
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @return array
     */
    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @return array
     */
    public static function setters()
    {
        return self::$setters;
    }

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @return array
     */
    public static function getters()
    {
        return self::$getters;
    }

    /**
     * The original name of the model.
     *
     * @return string
     */
    public function getModelName()
    {
        return self::$openAPIModelName;
    }


    /**
     * Associative array for storing property values
     *
     * @var mixed[]
     */
    protected $container = [];

    /**
     * Constructor
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->container['accessId'] = $data['accessId'] ?? null;
        $this->container['actionsPerSchedule'] = $data['actionsPerSchedule'] ?? null;
        $this->container['channelGroup'] = $data['channelGroup'] ?? null;
        $this->container['channelPerGroup'] = $data['channelPerGroup'] ?? null;
        $this->container['clientApp'] = $data['clientApp'] ?? null;
        $this->container['directLink'] = $data['directLink'] ?? null;
        $this->container['ioDevice'] = $data['ioDevice'] ?? null;
        $this->container['location'] = $data['location'] ?? null;
        $this->container['oauthClient'] = $data['oauthClient'] ?? null;
        $this->container['operationsPerScene'] = $data['operationsPerScene'] ?? null;
        $this->container['pushNotifications'] = $data['pushNotifications'] ?? null;
        $this->container['pushNotificationsPerHour'] = $data['pushNotificationsPerHour'] ?? null;
        $this->container['scene'] = $data['scene'] ?? null;
        $this->container['schedule'] = $data['schedule'] ?? null;
        $this->container['valueBasedTriggers'] = $data['valueBasedTriggers'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        return $invalidProperties;
    }

    /**
     * Validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properties are valid
     */
    public function valid()
    {
        return count($this->listInvalidProperties()) === 0;
    }


    /**
     * Gets accessId
     *
     * @return int|null
     */
    public function getAccessId()
    {
        return $this->container['accessId'];
    }

    /**
     * Sets accessId
     *
     * @param int|null $accessId accessId
     *
     * @return self
     */
    public function setAccessId($accessId)
    {
        $this->container['accessId'] = $accessId;

        return $this;
    }

    /**
     * Gets actionsPerSchedule
     *
     * @return int|null
     */
    public function getActionsPerSchedule()
    {
        return $this->container['actionsPerSchedule'];
    }

    /**
     * Sets actionsPerSchedule
     *
     * @param int|null $actionsPerSchedule actionsPerSchedule
     *
     * @return self
     */
    public function setActionsPerSchedule($actionsPerSchedule)
    {
        $this->container['actionsPerSchedule'] = $actionsPerSchedule;

        return $this;
    }

    /**
     * Gets channelGroup
     *
     * @return int|null
     */
    public function getChannelGroup()
    {
        return $this->container['channelGroup'];
    }

    /**
     * Sets channelGroup
     *
     * @param int|null $channelGroup channelGroup
     *
     * @return self
     */
    public function setChannelGroup($channelGroup)
    {
        $this->container['channelGroup'] = $channelGroup;

        return $this;
    }

    /**
     * Gets channelPerGroup
     *
     * @return int|null
     */
    public function getChannelPerGroup()
    {
        return $this->container['channelPerGroup'];
    }

    /**
     * Sets channelPerGroup
     *
     * @param int|null $channelPerGroup channelPerGroup
     *
     * @return self
     */
    public function setChannelPerGroup($channelPerGroup)
    {
        $this->container['channelPerGroup'] = $channelPerGroup;

        return $this;
    }

    /**
     * Gets clientApp
     *
     * @return int|null
     */
    public function getClientApp()
    {
        return $this->container['clientApp'];
    }

    /**
     * Sets clientApp
     *
     * @param int|null $clientApp clientApp
     *
     * @return self
     */
    public function setClientApp($clientApp)
    {
        $this->container['clientApp'] = $clientApp;

        return $this;
    }

    /**
     * Gets directLink
     *
     * @return int|null
     */
    public function getDirectLink()
    {
        return $this->container['directLink'];
    }

    /**
     * Sets directLink
     *
     * @param int|null $directLink directLink
     *
     * @return self
     */
    public function setDirectLink($directLink)
    {
        $this->container['directLink'] = $directLink;

        return $this;
    }

    /**
     * Gets ioDevice
     *
     * @return int|null
     */
    public function getIoDevice()
    {
        return $this->container['ioDevice'];
    }

    /**
     * Sets ioDevice
     *
     * @param int|null $ioDevice ioDevice
     *
     * @return self
     */
    public function setIoDevice($ioDevice)
    {
        $this->container['ioDevice'] = $ioDevice;

        return $this;
    }

    /**
     * Gets location
     *
     * @return int|null
     */
    public function getLocation()
    {
        return $this->container['location'];
    }

    /**
     * Sets location
     *
     * @param int|null $location location
     *
     * @return self
     */
    public function setLocation($location)
    {
        $this->container['location'] = $location;

        return $this;
    }

    /**
     * Gets oauthClient
     *
     * @return int|null
     */
    public function getOauthClient()
    {
        return $this->container['oauthClient'];
    }

    /**
     * Sets oauthClient
     *
     * @param int|null $oauthClient oauthClient
     *
     * @return self
     */
    public function setOauthClient($oauthClient)
    {
        $this->container['oauthClient'] = $oauthClient;

        return $this;
    }

    /**
     * Gets operationsPerScene
     *
     * @return int|null
     */
    public function getOperationsPerScene()
    {
        return $this->container['operationsPerScene'];
    }

    /**
     * Sets operationsPerScene
     *
     * @param int|null $operationsPerScene operationsPerScene
     *
     * @return self
     */
    public function setOperationsPerScene($operationsPerScene)
    {
        $this->container['operationsPerScene'] = $operationsPerScene;

        return $this;
    }

    /**
     * Gets pushNotifications
     *
     * @return int|null
     */
    public function getPushNotifications()
    {
        return $this->container['pushNotifications'];
    }

    /**
     * Sets pushNotifications
     *
     * @param int|null $pushNotifications pushNotifications
     *
     * @return self
     */
    public function setPushNotifications($pushNotifications)
    {
        $this->container['pushNotifications'] = $pushNotifications;

        return $this;
    }

    /**
     * Gets pushNotificationsPerHour
     *
     * @return \Supla\ApiClient\Model\UserLimitsPushNotificationsPerHour|null
     */
    public function getPushNotificationsPerHour()
    {
        return $this->container['pushNotificationsPerHour'];
    }

    /**
     * Sets pushNotificationsPerHour
     *
     * @param \Supla\ApiClient\Model\UserLimitsPushNotificationsPerHour|null $pushNotificationsPerHour pushNotificationsPerHour
     *
     * @return self
     */
    public function setPushNotificationsPerHour($pushNotificationsPerHour)
    {
        $this->container['pushNotificationsPerHour'] = $pushNotificationsPerHour;

        return $this;
    }

    /**
     * Gets scene
     *
     * @return int|null
     */
    public function getScene()
    {
        return $this->container['scene'];
    }

    /**
     * Sets scene
     *
     * @param int|null $scene scene
     *
     * @return self
     */
    public function setScene($scene)
    {
        $this->container['scene'] = $scene;

        return $this;
    }

    /**
     * Gets schedule
     *
     * @return int|null
     */
    public function getSchedule()
    {
        return $this->container['schedule'];
    }

    /**
     * Sets schedule
     *
     * @param int|null $schedule schedule
     *
     * @return self
     */
    public function setSchedule($schedule)
    {
        $this->container['schedule'] = $schedule;

        return $this;
    }

    /**
     * Gets valueBasedTriggers
     *
     * @return int|null
     */
    public function getValueBasedTriggers()
    {
        return $this->container['valueBasedTriggers'];
    }

    /**
     * Sets valueBasedTriggers
     *
     * @param int|null $valueBasedTriggers valueBasedTriggers
     *
     * @return self
     */
    public function setValueBasedTriggers($valueBasedTriggers)
    {
        $this->container['valueBasedTriggers'] = $valueBasedTriggers;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     *
     * @param integer $offset Offset
     *
     * @return mixed|null
     */
    public function offsetGet($offset)
    {
        return $this->container[$offset] ?? null;
    }

    /**
     * Sets value based on offset.
     *
     * @param int|null $offset Offset
     * @param mixed    $value  Value to be set
     *
     * @return void
     */
    public function offsetSet($offset, $value)
    {
        if (is_null($offset)) {
            $this->container[] = $value;
        } else {
            $this->container[$offset] = $value;
        }
    }

    /**
     * Unsets offset.
     *
     * @param integer $offset Offset
     *
     * @return void
     */
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }

    /**
     * Serializes the object to a value that can be serialized natively by json_encode().
     * @link https://www.php.net/manual/en/jsonserializable.jsonserialize.php
     *
     * @return mixed Returns data which can be serialized by json_encode(), which is a value
     * of any type other than a resource.
     */
    public function jsonSerialize()
    {
       return ObjectSerializer::sanitizeForSerialization($this);
    }

    /**
     * Gets the string presentation of the object
     *
     * @return string
     */
    public function __toString()
    {
        return json_encode(
            ObjectSerializer::sanitizeForSerialization($this),
            JSON_PRETTY_PRINT
        );
    }

    /**
     * Gets a header-safe presentation of the object
     *
     * @return string
     */
    public function toHeaderValue()
    {
        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}


