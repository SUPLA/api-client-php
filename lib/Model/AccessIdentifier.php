<?php
/**
 * AccessIdentifier
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
 * AccessIdentifier Class Doc Comment
 *
 * @category Class
 * @description Access Identifier object (AID).
 * @package  Supla\ApiClient
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class AccessIdentifier implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'AccessIdentifier';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'id' => 'int',
        'caption' => 'string',
        'enabled' => 'bool',
        'activeFrom' => '\DateTime',
        'activeTo' => '\DateTime',
        'activeHours' => '\Supla\ApiClient\Model\ActiveHoursDef',
        'activeNow' => 'bool',
        'relationsCount' => '\Supla\ApiClient\Model\AccessIdentifierRelationsCount',
        'password' => 'string',
        'locations' => '\Supla\ApiClient\Model\Location[]'
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
        'caption' => null,
        'enabled' => null,
        'activeFrom' => 'date-time',
        'activeTo' => 'date-time',
        'activeHours' => null,
        'activeNow' => null,
        'relationsCount' => null,
        'password' => null,
        'locations' => null
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
        'caption' => 'caption',
        'enabled' => 'enabled',
        'activeFrom' => 'activeFrom',
        'activeTo' => 'activeTo',
        'activeHours' => 'activeHours',
        'activeNow' => 'activeNow',
        'relationsCount' => 'relationsCount',
        'password' => 'password',
        'locations' => 'locations'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'caption' => 'setCaption',
        'enabled' => 'setEnabled',
        'activeFrom' => 'setActiveFrom',
        'activeTo' => 'setActiveTo',
        'activeHours' => 'setActiveHours',
        'activeNow' => 'setActiveNow',
        'relationsCount' => 'setRelationsCount',
        'password' => 'setPassword',
        'locations' => 'setLocations'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'caption' => 'getCaption',
        'enabled' => 'getEnabled',
        'activeFrom' => 'getActiveFrom',
        'activeTo' => 'getActiveTo',
        'activeHours' => 'getActiveHours',
        'activeNow' => 'getActiveNow',
        'relationsCount' => 'getRelationsCount',
        'password' => 'getPassword',
        'locations' => 'getLocations'
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
        $this->container['id'] = $data['id'] ?? null;
        $this->container['caption'] = $data['caption'] ?? null;
        $this->container['enabled'] = $data['enabled'] ?? null;
        $this->container['activeFrom'] = $data['activeFrom'] ?? null;
        $this->container['activeTo'] = $data['activeTo'] ?? null;
        $this->container['activeHours'] = $data['activeHours'] ?? null;
        $this->container['activeNow'] = $data['activeNow'] ?? null;
        $this->container['relationsCount'] = $data['relationsCount'] ?? null;
        $this->container['password'] = $data['password'] ?? null;
        $this->container['locations'] = $data['locations'] ?? null;
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
     * Gets enabled
     *
     * @return bool|null
     */
    public function getEnabled()
    {
        return $this->container['enabled'];
    }

    /**
     * Sets enabled
     *
     * @param bool|null $enabled `true` if enabled
     *
     * @return self
     */
    public function setEnabled($enabled)
    {
        $this->container['enabled'] = $enabled;

        return $this;
    }

    /**
     * Gets activeFrom
     *
     * @return \DateTime|null
     */
    public function getActiveFrom()
    {
        return $this->container['activeFrom'];
    }

    /**
     * Sets activeFrom
     *
     * @param \DateTime|null $activeFrom activeFrom
     *
     * @return self
     */
    public function setActiveFrom($activeFrom)
    {
        $this->container['activeFrom'] = $activeFrom;

        return $this;
    }

    /**
     * Gets activeTo
     *
     * @return \DateTime|null
     */
    public function getActiveTo()
    {
        return $this->container['activeTo'];
    }

    /**
     * Sets activeTo
     *
     * @param \DateTime|null $activeTo activeTo
     *
     * @return self
     */
    public function setActiveTo($activeTo)
    {
        $this->container['activeTo'] = $activeTo;

        return $this;
    }

    /**
     * Gets activeHours
     *
     * @return \Supla\ApiClient\Model\ActiveHoursDef|null
     */
    public function getActiveHours()
    {
        return $this->container['activeHours'];
    }

    /**
     * Sets activeHours
     *
     * @param \Supla\ApiClient\Model\ActiveHoursDef|null $activeHours activeHours
     *
     * @return self
     */
    public function setActiveHours($activeHours)
    {
        $this->container['activeHours'] = $activeHours;

        return $this;
    }

    /**
     * Gets activeNow
     *
     * @return bool|null
     */
    public function getActiveNow()
    {
        return $this->container['activeNow'];
    }

    /**
     * Sets activeNow
     *
     * @param bool|null $activeNow `true` if active now. Returned only if requested by the `include` parameter.
     *
     * @return self
     */
    public function setActiveNow($activeNow)
    {
        $this->container['activeNow'] = $activeNow;

        return $this;
    }

    /**
     * Gets relationsCount
     *
     * @return \Supla\ApiClient\Model\AccessIdentifierRelationsCount|null
     */
    public function getRelationsCount()
    {
        return $this->container['relationsCount'];
    }

    /**
     * Sets relationsCount
     *
     * @param \Supla\ApiClient\Model\AccessIdentifierRelationsCount|null $relationsCount relationsCount
     *
     * @return self
     */
    public function setRelationsCount($relationsCount)
    {
        $this->container['relationsCount'] = $relationsCount;

        return $this;
    }

    /**
     * Gets password
     *
     * @return string|null
     */
    public function getPassword()
    {
        return $this->container['password'];
    }

    /**
     * Sets password
     *
     * @param string|null $password Location password (plain text). Returned only if requested by the `include` parameter.
     *
     * @return self
     */
    public function setPassword($password)
    {
        $this->container['password'] = $password;

        return $this;
    }

    /**
     * Gets locations
     *
     * @return \Supla\ApiClient\Model\Location[]|null
     */
    public function getLocations()
    {
        return $this->container['locations'];
    }

    /**
     * Sets locations
     *
     * @param \Supla\ApiClient\Model\Location[]|null $locations Array of locations, if requested by the `include` param
     *
     * @return self
     */
    public function setLocations($locations)
    {
        $this->container['locations'] = $locations;

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


