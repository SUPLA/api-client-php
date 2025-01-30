<?php
/**
 * Channel
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
 * The version of the OpenAPI document: 24.12-60-g8a642a3e7
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
 * Channel Class Doc Comment
 *
 * @category Class
 * @package  Supla\ApiClient
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class Channel implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'Channel';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'id' => 'int',
        'channelNumber' => 'int',
        'caption' => 'string',
        'altIcon' => 'int',
        'hidden' => 'bool',
        'inheritedLocation' => 'bool',
        'iodeviceId' => 'int',
        'iodevice' => '\Supla\ApiClient\Model\Device',
        'locationId' => 'int',
        'location' => '\Supla\ApiClient\Model\Location',
        'functionId' => 'int',
        'function' => '\Supla\ApiClient\Model\ChannelFunction',
        'possibleActions' => '\Supla\ApiClient\Model\ChannelFunctionAction[]',
        'typeId' => 'int',
        'type' => '\Supla\ApiClient\Model\ChannelType',
        'ownSubjectType' => 'string',
        'state' => '\Supla\ApiClient\Model\ChannelState',
        'config' => '\Supla\ApiClient\Model\ChannelConfig',
        'conflictDetails' => 'object',
        'userIconId' => 'int',
        'userIcon' => '\Supla\ApiClient\Model\UserIcon',
        'connected' => 'bool',
        'relationsCount' => '\Supla\ApiClient\Model\ChannelRelationsCount',
        'supportedFunctions' => '\Supla\ApiClient\Model\ChannelFunction[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'id' => null,
        'channelNumber' => null,
        'caption' => null,
        'altIcon' => null,
        'hidden' => null,
        'inheritedLocation' => null,
        'iodeviceId' => null,
        'iodevice' => null,
        'locationId' => null,
        'location' => null,
        'functionId' => null,
        'function' => null,
        'possibleActions' => null,
        'typeId' => null,
        'type' => null,
        'ownSubjectType' => null,
        'state' => null,
        'config' => null,
        'conflictDetails' => null,
        'userIconId' => null,
        'userIcon' => null,
        'connected' => null,
        'relationsCount' => null,
        'supportedFunctions' => null
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
        'id' => 'id',
        'channelNumber' => 'channelNumber',
        'caption' => 'caption',
        'altIcon' => 'altIcon',
        'hidden' => 'hidden',
        'inheritedLocation' => 'inheritedLocation',
        'iodeviceId' => 'iodeviceId',
        'iodevice' => 'iodevice',
        'locationId' => 'locationId',
        'location' => 'location',
        'functionId' => 'functionId',
        'function' => 'function',
        'possibleActions' => 'possibleActions',
        'typeId' => 'typeId',
        'type' => 'type',
        'ownSubjectType' => 'ownSubjectType',
        'state' => 'state',
        'config' => 'config',
        'conflictDetails' => 'conflictDetails',
        'userIconId' => 'userIconId',
        'userIcon' => 'userIcon',
        'connected' => 'connected',
        'relationsCount' => 'relationsCount',
        'supportedFunctions' => 'supportedFunctions'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'channelNumber' => 'setChannelNumber',
        'caption' => 'setCaption',
        'altIcon' => 'setAltIcon',
        'hidden' => 'setHidden',
        'inheritedLocation' => 'setInheritedLocation',
        'iodeviceId' => 'setIodeviceId',
        'iodevice' => 'setIodevice',
        'locationId' => 'setLocationId',
        'location' => 'setLocation',
        'functionId' => 'setFunctionId',
        'function' => 'setFunction',
        'possibleActions' => 'setPossibleActions',
        'typeId' => 'setTypeId',
        'type' => 'setType',
        'ownSubjectType' => 'setOwnSubjectType',
        'state' => 'setState',
        'config' => 'setConfig',
        'conflictDetails' => 'setConflictDetails',
        'userIconId' => 'setUserIconId',
        'userIcon' => 'setUserIcon',
        'connected' => 'setConnected',
        'relationsCount' => 'setRelationsCount',
        'supportedFunctions' => 'setSupportedFunctions'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'channelNumber' => 'getChannelNumber',
        'caption' => 'getCaption',
        'altIcon' => 'getAltIcon',
        'hidden' => 'getHidden',
        'inheritedLocation' => 'getInheritedLocation',
        'iodeviceId' => 'getIodeviceId',
        'iodevice' => 'getIodevice',
        'locationId' => 'getLocationId',
        'location' => 'getLocation',
        'functionId' => 'getFunctionId',
        'function' => 'getFunction',
        'possibleActions' => 'getPossibleActions',
        'typeId' => 'getTypeId',
        'type' => 'getType',
        'ownSubjectType' => 'getOwnSubjectType',
        'state' => 'getState',
        'config' => 'getConfig',
        'conflictDetails' => 'getConflictDetails',
        'userIconId' => 'getUserIconId',
        'userIcon' => 'getUserIcon',
        'connected' => 'getConnected',
        'relationsCount' => 'getRelationsCount',
        'supportedFunctions' => 'getSupportedFunctions'
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

    const OWN_SUBJECT_TYPE_CHANNEL = 'channel';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getOwnSubjectTypeAllowableValues()
    {
        return [
            self::OWN_SUBJECT_TYPE_CHANNEL,
        ];
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
        $this->container['id'] = $data['id'] ?? null;
        $this->container['channelNumber'] = $data['channelNumber'] ?? null;
        $this->container['caption'] = $data['caption'] ?? null;
        $this->container['altIcon'] = $data['altIcon'] ?? null;
        $this->container['hidden'] = $data['hidden'] ?? null;
        $this->container['inheritedLocation'] = $data['inheritedLocation'] ?? null;
        $this->container['iodeviceId'] = $data['iodeviceId'] ?? null;
        $this->container['iodevice'] = $data['iodevice'] ?? null;
        $this->container['locationId'] = $data['locationId'] ?? null;
        $this->container['location'] = $data['location'] ?? null;
        $this->container['functionId'] = $data['functionId'] ?? null;
        $this->container['function'] = $data['function'] ?? null;
        $this->container['possibleActions'] = $data['possibleActions'] ?? null;
        $this->container['typeId'] = $data['typeId'] ?? null;
        $this->container['type'] = $data['type'] ?? null;
        $this->container['ownSubjectType'] = $data['ownSubjectType'] ?? null;
        $this->container['state'] = $data['state'] ?? null;
        $this->container['config'] = $data['config'] ?? null;
        $this->container['conflictDetails'] = $data['conflictDetails'] ?? null;
        $this->container['userIconId'] = $data['userIconId'] ?? null;
        $this->container['userIcon'] = $data['userIcon'] ?? null;
        $this->container['connected'] = $data['connected'] ?? null;
        $this->container['relationsCount'] = $data['relationsCount'] ?? null;
        $this->container['supportedFunctions'] = $data['supportedFunctions'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        $allowedValues = $this->getOwnSubjectTypeAllowableValues();
        if (!is_null($this->container['ownSubjectType']) && !in_array($this->container['ownSubjectType'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'ownSubjectType', must be one of '%s'",
                $this->container['ownSubjectType'],
                implode("', '", $allowedValues)
            );
        }

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
     * Gets id
     *
     * @return int|null
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     *
     * @param int|null $id Identifier
     *
     * @return self
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets channelNumber
     *
     * @return int|null
     */
    public function getChannelNumber()
    {
        return $this->container['channelNumber'];
    }

    /**
     * Sets channelNumber
     *
     * @param int|null $channelNumber Channel ordinal number in its IO Device
     *
     * @return self
     */
    public function setChannelNumber($channelNumber)
    {
        $this->container['channelNumber'] = $channelNumber;

        return $this;
    }

    /**
     * Gets caption
     *
     * @return string|null
     */
    public function getCaption()
    {
        return $this->container['caption'];
    }

    /**
     * Sets caption
     *
     * @param string|null $caption Caption
     *
     * @return self
     */
    public function setCaption($caption)
    {
        $this->container['caption'] = $caption;

        return $this;
    }

    /**
     * Gets altIcon
     *
     * @return int|null
     */
    public function getAltIcon()
    {
        return $this->container['altIcon'];
    }

    /**
     * Sets altIcon
     *
     * @param int|null $altIcon Chosen alternative icon idenifier. Should not be greater than the `function.maxAlternativeIconIndex`.
     *
     * @return self
     */
    public function setAltIcon($altIcon)
    {
        $this->container['altIcon'] = $altIcon;

        return $this;
    }

    /**
     * Gets hidden
     *
     * @return bool|null
     */
    public function getHidden()
    {
        return $this->container['hidden'];
    }

    /**
     * Sets hidden
     *
     * @param bool|null $hidden Whether this channel is shown on client apps or not
     *
     * @return self
     */
    public function setHidden($hidden)
    {
        $this->container['hidden'] = $hidden;

        return $this;
    }

    /**
     * Gets inheritedLocation
     *
     * @return bool|null
     */
    public function getInheritedLocation()
    {
        return $this->container['inheritedLocation'];
    }

    /**
     * Sets inheritedLocation
     *
     * @param bool|null $inheritedLocation Whether this channel inherits its IO Device's location (`true`) or not (`false`)
     *
     * @return self
     */
    public function setInheritedLocation($inheritedLocation)
    {
        $this->container['inheritedLocation'] = $inheritedLocation;

        return $this;
    }

    /**
     * Gets iodeviceId
     *
     * @return int|null
     */
    public function getIodeviceId()
    {
        return $this->container['iodeviceId'];
    }

    /**
     * Sets iodeviceId
     *
     * @param int|null $iodeviceId iodeviceId
     *
     * @return self
     */
    public function setIodeviceId($iodeviceId)
    {
        $this->container['iodeviceId'] = $iodeviceId;

        return $this;
    }

    /**
     * Gets iodevice
     *
     * @return \Supla\ApiClient\Model\Device|null
     */
    public function getIodevice()
    {
        return $this->container['iodevice'];
    }

    /**
     * Sets iodevice
     *
     * @param \Supla\ApiClient\Model\Device|null $iodevice iodevice
     *
     * @return self
     */
    public function setIodevice($iodevice)
    {
        $this->container['iodevice'] = $iodevice;

        return $this;
    }

    /**
     * Gets locationId
     *
     * @return int|null
     */
    public function getLocationId()
    {
        return $this->container['locationId'];
    }

    /**
     * Sets locationId
     *
     * @param int|null $locationId locationId
     *
     * @return self
     */
    public function setLocationId($locationId)
    {
        $this->container['locationId'] = $locationId;

        return $this;
    }

    /**
     * Gets location
     *
     * @return \Supla\ApiClient\Model\Location|null
     */
    public function getLocation()
    {
        return $this->container['location'];
    }

    /**
     * Sets location
     *
     * @param \Supla\ApiClient\Model\Location|null $location location
     *
     * @return self
     */
    public function setLocation($location)
    {
        $this->container['location'] = $location;

        return $this;
    }

    /**
     * Gets functionId
     *
     * @return int|null
     */
    public function getFunctionId()
    {
        return $this->container['functionId'];
    }

    /**
     * Sets functionId
     *
     * @param int|null $functionId functionId
     *
     * @return self
     */
    public function setFunctionId($functionId)
    {
        $this->container['functionId'] = $functionId;

        return $this;
    }

    /**
     * Gets function
     *
     * @return \Supla\ApiClient\Model\ChannelFunction|null
     */
    public function getFunction()
    {
        return $this->container['function'];
    }

    /**
     * Sets function
     *
     * @param \Supla\ApiClient\Model\ChannelFunction|null $function function
     *
     * @return self
     */
    public function setFunction($function)
    {
        $this->container['function'] = $function;

        return $this;
    }

    /**
     * Gets possibleActions
     *
     * @return \Supla\ApiClient\Model\ChannelFunctionAction[]|null
     */
    public function getPossibleActions()
    {
        return $this->container['possibleActions'];
    }

    /**
     * Sets possibleActions
     *
     * @param \Supla\ApiClient\Model\ChannelFunctionAction[]|null $possibleActions What action can you execute on this subject?
     *
     * @return self
     */
    public function setPossibleActions($possibleActions)
    {
        $this->container['possibleActions'] = $possibleActions;

        return $this;
    }

    /**
     * Gets typeId
     *
     * @return int|null
     */
    public function getTypeId()
    {
        return $this->container['typeId'];
    }

    /**
     * Sets typeId
     *
     * @param int|null $typeId typeId
     *
     * @return self
     */
    public function setTypeId($typeId)
    {
        $this->container['typeId'] = $typeId;

        return $this;
    }

    /**
     * Gets type
     *
     * @return \Supla\ApiClient\Model\ChannelType|null
     */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
     * Sets type
     *
     * @param \Supla\ApiClient\Model\ChannelType|null $type type
     *
     * @return self
     */
    public function setType($type)
    {
        $this->container['type'] = $type;

        return $this;
    }

    /**
     * Gets ownSubjectType
     *
     * @return string|null
     */
    public function getOwnSubjectType()
    {
        return $this->container['ownSubjectType'];
    }

    /**
     * Sets ownSubjectType
     *
     * @param string|null $ownSubjectType ownSubjectType
     *
     * @return self
     */
    public function setOwnSubjectType($ownSubjectType)
    {
        $allowedValues = $this->getOwnSubjectTypeAllowableValues();
        if (!is_null($ownSubjectType) && !in_array($ownSubjectType, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'ownSubjectType', must be one of '%s'",
                    $ownSubjectType,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['ownSubjectType'] = $ownSubjectType;

        return $this;
    }

    /**
     * Gets state
     *
     * @return \Supla\ApiClient\Model\ChannelState|null
     */
    public function getState()
    {
        return $this->container['state'];
    }

    /**
     * Sets state
     *
     * @param \Supla\ApiClient\Model\ChannelState|null $state state
     *
     * @return self
     */
    public function setState($state)
    {
        $this->container['state'] = $state;

        return $this;
    }

    /**
     * Gets config
     *
     * @return \Supla\ApiClient\Model\ChannelConfig|null
     */
    public function getConfig()
    {
        return $this->container['config'];
    }

    /**
     * Sets config
     *
     * @param \Supla\ApiClient\Model\ChannelConfig|null $config config
     *
     * @return self
     */
    public function setConfig($config)
    {
        $this->container['config'] = $config;

        return $this;
    }

    /**
     * Gets conflictDetails
     *
     * @return object|null
     */
    public function getConflictDetails()
    {
        return $this->container['conflictDetails'];
    }

    /**
     * Sets conflictDetails
     *
     * @param object|null $conflictDetails conflictDetails
     *
     * @return self
     */
    public function setConflictDetails($conflictDetails)
    {
        $this->container['conflictDetails'] = $conflictDetails;

        return $this;
    }

    /**
     * Gets userIconId
     *
     * @return int|null
     */
    public function getUserIconId()
    {
        return $this->container['userIconId'];
    }

    /**
     * Sets userIconId
     *
     * @param int|null $userIconId userIconId
     *
     * @return self
     */
    public function setUserIconId($userIconId)
    {
        $this->container['userIconId'] = $userIconId;

        return $this;
    }

    /**
     * Gets userIcon
     *
     * @return \Supla\ApiClient\Model\UserIcon|null
     */
    public function getUserIcon()
    {
        return $this->container['userIcon'];
    }

    /**
     * Sets userIcon
     *
     * @param \Supla\ApiClient\Model\UserIcon|null $userIcon userIcon
     *
     * @return self
     */
    public function setUserIcon($userIcon)
    {
        $this->container['userIcon'] = $userIcon;

        return $this;
    }

    /**
     * Gets connected
     *
     * @return bool|null
     */
    public function getConnected()
    {
        return $this->container['connected'];
    }

    /**
     * Sets connected
     *
     * @param bool|null $connected connected
     *
     * @return self
     */
    public function setConnected($connected)
    {
        $this->container['connected'] = $connected;

        return $this;
    }

    /**
     * Gets relationsCount
     *
     * @return \Supla\ApiClient\Model\ChannelRelationsCount|null
     */
    public function getRelationsCount()
    {
        return $this->container['relationsCount'];
    }

    /**
     * Sets relationsCount
     *
     * @param \Supla\ApiClient\Model\ChannelRelationsCount|null $relationsCount relationsCount
     *
     * @return self
     */
    public function setRelationsCount($relationsCount)
    {
        $this->container['relationsCount'] = $relationsCount;

        return $this;
    }

    /**
     * Gets supportedFunctions
     *
     * @return \Supla\ApiClient\Model\ChannelFunction[]|null
     */
    public function getSupportedFunctions()
    {
        return $this->container['supportedFunctions'];
    }

    /**
     * Sets supportedFunctions
     *
     * @param \Supla\ApiClient\Model\ChannelFunction[]|null $supportedFunctions supportedFunctions
     *
     * @return self
     */
    public function setSupportedFunctions($supportedFunctions)
    {
        $this->container['supportedFunctions'] = $supportedFunctions;

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


