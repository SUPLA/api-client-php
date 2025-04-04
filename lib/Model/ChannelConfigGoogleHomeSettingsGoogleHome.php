<?php
/**
 * ChannelConfigGoogleHomeSettingsGoogleHome
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
 * The version of the OpenAPI document: 25.03
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
 * ChannelConfigGoogleHomeSettingsGoogleHome Class Doc Comment
 *
 * @category Class
 * @package  Supla\ApiClient
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class ChannelConfigGoogleHomeSettingsGoogleHome implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'ChannelConfigGoogleHomeSettings_googleHome';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'googleHomeDisabled' => 'bool',
        'needsUserConfirmation' => 'bool',
        'pin' => 'string',
        'pinSet' => 'bool'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'googleHomeDisabled' => null,
        'needsUserConfirmation' => null,
        'pin' => null,
        'pinSet' => null
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
        'googleHomeDisabled' => 'googleHomeDisabled',
        'needsUserConfirmation' => 'needsUserConfirmation',
        'pin' => 'pin',
        'pinSet' => 'pinSet'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'googleHomeDisabled' => 'setGoogleHomeDisabled',
        'needsUserConfirmation' => 'setNeedsUserConfirmation',
        'pin' => 'setPin',
        'pinSet' => 'setPinSet'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'googleHomeDisabled' => 'getGoogleHomeDisabled',
        'needsUserConfirmation' => 'getNeedsUserConfirmation',
        'pin' => 'getPin',
        'pinSet' => 'getPinSet'
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
        $this->container['googleHomeDisabled'] = $data['googleHomeDisabled'] ?? null;
        $this->container['needsUserConfirmation'] = $data['needsUserConfirmation'] ?? null;
        $this->container['pin'] = $data['pin'] ?? null;
        $this->container['pinSet'] = $data['pinSet'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if (!is_null($this->container['pin']) && (mb_strlen($this->container['pin']) > 8)) {
            $invalidProperties[] = "invalid value for 'pin', the character length must be smaller than or equal to 8.";
        }

        if (!is_null($this->container['pin']) && (mb_strlen($this->container['pin']) < 4)) {
            $invalidProperties[] = "invalid value for 'pin', the character length must be bigger than or equal to 4.";
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
     * Gets googleHomeDisabled
     *
     * @return bool|null
     */
    public function getGoogleHomeDisabled()
    {
        return $this->container['googleHomeDisabled'];
    }

    /**
     * Sets googleHomeDisabled
     *
     * @param bool|null $googleHomeDisabled googleHomeDisabled
     *
     * @return self
     */
    public function setGoogleHomeDisabled($googleHomeDisabled)
    {
        $this->container['googleHomeDisabled'] = $googleHomeDisabled;

        return $this;
    }

    /**
     * Gets needsUserConfirmation
     *
     * @return bool|null
     */
    public function getNeedsUserConfirmation()
    {
        return $this->container['needsUserConfirmation'];
    }

    /**
     * Sets needsUserConfirmation
     *
     * @param bool|null $needsUserConfirmation needsUserConfirmation
     *
     * @return self
     */
    public function setNeedsUserConfirmation($needsUserConfirmation)
    {
        $this->container['needsUserConfirmation'] = $needsUserConfirmation;

        return $this;
    }

    /**
     * Gets pin
     *
     * @return string|null
     */
    public function getPin()
    {
        return $this->container['pin'];
    }

    /**
     * Sets pin
     *
     * @param string|null $pin pin
     *
     * @return self
     */
    public function setPin($pin)
    {
        if (!is_null($pin) && (mb_strlen($pin) > 8)) {
            throw new \InvalidArgumentException('invalid length for $pin when calling ChannelConfigGoogleHomeSettingsGoogleHome., must be smaller than or equal to 8.');
        }
        if (!is_null($pin) && (mb_strlen($pin) < 4)) {
            throw new \InvalidArgumentException('invalid length for $pin when calling ChannelConfigGoogleHomeSettingsGoogleHome., must be bigger than or equal to 4.');
        }

        $this->container['pin'] = $pin;

        return $this;
    }

    /**
     * Gets pinSet
     *
     * @return bool|null
     */
    public function getPinSet()
    {
        return $this->container['pinSet'];
    }

    /**
     * Sets pinSet
     *
     * @param bool|null $pinSet pinSet
     *
     * @return self
     */
    public function setPinSet($pinSet)
    {
        $this->container['pinSet'] = $pinSet;

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


