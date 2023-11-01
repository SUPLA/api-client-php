<?php
/**
 * LocationRelationsCount
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
 * LocationRelationsCount Class Doc Comment
 *
 * @category Class
 * @description Counts of related entities.
 * @package  Supla\ApiClient
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class LocationRelationsCount implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'Location_relationsCount';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'channels' => 'int',
        'accessIds' => 'int',
        'channelGroups' => 'int',
        'ioDevices' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'channels' => null,
        'accessIds' => null,
        'channelGroups' => null,
        'ioDevices' => null
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
        'channels' => 'channels',
        'accessIds' => 'accessIds',
        'channelGroups' => 'channelGroups',
        'ioDevices' => 'ioDevices'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'channels' => 'setChannels',
        'accessIds' => 'setAccessIds',
        'channelGroups' => 'setChannelGroups',
        'ioDevices' => 'setIoDevices'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'channels' => 'getChannels',
        'accessIds' => 'getAccessIds',
        'channelGroups' => 'getChannelGroups',
        'ioDevices' => 'getIoDevices'
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
        $this->container['channels'] = $data['channels'] ?? null;
        $this->container['accessIds'] = $data['accessIds'] ?? null;
        $this->container['channelGroups'] = $data['channelGroups'] ?? null;
        $this->container['ioDevices'] = $data['ioDevices'] ?? null;
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
     * Gets channels
     *
     * @return int|null
     */
    public function getChannels()
    {
        return $this->container['channels'];
    }

    /**
     * Sets channels
     *
     * @param int|null $channels channels
     *
     * @return self
     */
    public function setChannels($channels)
    {
        $this->container['channels'] = $channels;

        return $this;
    }

    /**
     * Gets accessIds
     *
     * @return int|null
     */
    public function getAccessIds()
    {
        return $this->container['accessIds'];
    }

    /**
     * Sets accessIds
     *
     * @param int|null $accessIds accessIds
     *
     * @return self
     */
    public function setAccessIds($accessIds)
    {
        $this->container['accessIds'] = $accessIds;

        return $this;
    }

    /**
     * Gets channelGroups
     *
     * @return int|null
     */
    public function getChannelGroups()
    {
        return $this->container['channelGroups'];
    }

    /**
     * Sets channelGroups
     *
     * @param int|null $channelGroups channelGroups
     *
     * @return self
     */
    public function setChannelGroups($channelGroups)
    {
        $this->container['channelGroups'] = $channelGroups;

        return $this;
    }

    /**
     * Gets ioDevices
     *
     * @return int|null
     */
    public function getIoDevices()
    {
        return $this->container['ioDevices'];
    }

    /**
     * Sets ioDevices
     *
     * @param int|null $ioDevices ioDevices
     *
     * @return self
     */
    public function setIoDevices($ioDevices)
    {
        $this->container['ioDevices'] = $ioDevices;

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


