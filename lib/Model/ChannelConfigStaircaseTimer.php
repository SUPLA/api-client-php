<?php
/**
 * ChannelConfigStaircaseTimer
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
 * The version of the OpenAPI document: 24.01.01-51-gd3ab095f
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
 * ChannelConfigStaircaseTimer Class Doc Comment
 *
 * @category Class
 * @description Config for &#x60;STAIRCASETIMER&#x60;.
 * @package  Supla\ApiClient
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class ChannelConfigStaircaseTimer implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'ChannelConfigStaircaseTimer';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'timeSettingAvailable' => 'bool',
        'relayTimeS' => 'int',
        'relatedChannelId' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'timeSettingAvailable' => null,
        'relayTimeS' => null,
        'relatedChannelId' => null
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
        'timeSettingAvailable' => 'timeSettingAvailable',
        'relayTimeS' => 'relayTimeS',
        'relatedChannelId' => 'relatedChannelId'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'timeSettingAvailable' => 'setTimeSettingAvailable',
        'relayTimeS' => 'setRelayTimeS',
        'relatedChannelId' => 'setRelatedChannelId'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'timeSettingAvailable' => 'getTimeSettingAvailable',
        'relayTimeS' => 'getRelayTimeS',
        'relatedChannelId' => 'getRelatedChannelId'
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
        $this->container['timeSettingAvailable'] = $data['timeSettingAvailable'] ?? null;
        $this->container['relayTimeS'] = $data['relayTimeS'] ?? null;
        $this->container['relatedChannelId'] = $data['relatedChannelId'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if (!is_null($this->container['relayTimeS']) && ($this->container['relayTimeS'] > 7200)) {
            $invalidProperties[] = "invalid value for 'relayTimeS', must be smaller than or equal to 7200.";
        }

        if (!is_null($this->container['relayTimeS']) && ($this->container['relayTimeS'] < 0)) {
            $invalidProperties[] = "invalid value for 'relayTimeS', must be bigger than or equal to 0.";
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
     * Gets timeSettingAvailable
     *
     * @return bool|null
     */
    public function getTimeSettingAvailable()
    {
        return $this->container['timeSettingAvailable'];
    }

    /**
     * Sets timeSettingAvailable
     *
     * @param bool|null $timeSettingAvailable timeSettingAvailable
     *
     * @return self
     */
    public function setTimeSettingAvailable($timeSettingAvailable)
    {
        $this->container['timeSettingAvailable'] = $timeSettingAvailable;

        return $this;
    }

    /**
     * Gets relayTimeS
     *
     * @return int|null
     */
    public function getRelayTimeS()
    {
        return $this->container['relayTimeS'];
    }

    /**
     * Sets relayTimeS
     *
     * @param int|null $relayTimeS relayTimeS
     *
     * @return self
     */
    public function setRelayTimeS($relayTimeS)
    {

        if (!is_null($relayTimeS) && ($relayTimeS > 7200)) {
            throw new \InvalidArgumentException('invalid value for $relayTimeS when calling ChannelConfigStaircaseTimer., must be smaller than or equal to 7200.');
        }
        if (!is_null($relayTimeS) && ($relayTimeS < 0)) {
            throw new \InvalidArgumentException('invalid value for $relayTimeS when calling ChannelConfigStaircaseTimer., must be bigger than or equal to 0.');
        }

        $this->container['relayTimeS'] = $relayTimeS;

        return $this;
    }

    /**
     * Gets relatedChannelId
     *
     * @return int|null
     */
    public function getRelatedChannelId()
    {
        return $this->container['relatedChannelId'];
    }

    /**
     * Sets relatedChannelId
     *
     * @param int|null $relatedChannelId relatedChannelId
     *
     * @return self
     */
    public function setRelatedChannelId($relatedChannelId)
    {
        $this->container['relatedChannelId'] = $relatedChannelId;

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


