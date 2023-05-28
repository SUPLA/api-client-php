<?php
/**
 * ClientApp
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
 * The version of the OpenAPI document: 23.05
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
 * ClientApp Class Doc Comment
 *
 * @category Class
 * @package  Supla\ApiClient
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class ClientApp implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'ClientApp';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'id' => 'int',
        'name' => 'string',
        'caption' => 'string',
        'enabled' => 'bool',
        'connected' => 'bool',
        'lastAccessDate' => '\DateTime',
        'lastAccessIpv4' => 'string',
        'regDate' => '\DateTime',
        'regIpv4' => 'string',
        'softwareVersion' => 'string',
        'protocolVersion' => 'int',
        'accessIdId' => 'int',
        'accessId' => '\Supla\ApiClient\Model\AccessIdentifier'
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
        'name' => null,
        'caption' => null,
        'enabled' => null,
        'connected' => null,
        'lastAccessDate' => 'date-time',
        'lastAccessIpv4' => 'ipv4',
        'regDate' => 'date-time',
        'regIpv4' => 'ipv4',
        'softwareVersion' => null,
        'protocolVersion' => null,
        'accessIdId' => null,
        'accessId' => null
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
        'name' => 'name',
        'caption' => 'caption',
        'enabled' => 'enabled',
        'connected' => 'connected',
        'lastAccessDate' => 'lastAccessDate',
        'lastAccessIpv4' => 'lastAccessIpv4',
        'regDate' => 'regDate',
        'regIpv4' => 'regIpv4',
        'softwareVersion' => 'softwareVersion',
        'protocolVersion' => 'protocolVersion',
        'accessIdId' => 'accessIdId',
        'accessId' => 'accessId'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'name' => 'setName',
        'caption' => 'setCaption',
        'enabled' => 'setEnabled',
        'connected' => 'setConnected',
        'lastAccessDate' => 'setLastAccessDate',
        'lastAccessIpv4' => 'setLastAccessIpv4',
        'regDate' => 'setRegDate',
        'regIpv4' => 'setRegIpv4',
        'softwareVersion' => 'setSoftwareVersion',
        'protocolVersion' => 'setProtocolVersion',
        'accessIdId' => 'setAccessIdId',
        'accessId' => 'setAccessId'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'name' => 'getName',
        'caption' => 'getCaption',
        'enabled' => 'getEnabled',
        'connected' => 'getConnected',
        'lastAccessDate' => 'getLastAccessDate',
        'lastAccessIpv4' => 'getLastAccessIpv4',
        'regDate' => 'getRegDate',
        'regIpv4' => 'getRegIpv4',
        'softwareVersion' => 'getSoftwareVersion',
        'protocolVersion' => 'getProtocolVersion',
        'accessIdId' => 'getAccessIdId',
        'accessId' => 'getAccessId'
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
        $this->container['name'] = $data['name'] ?? null;
        $this->container['caption'] = $data['caption'] ?? null;
        $this->container['enabled'] = $data['enabled'] ?? null;
        $this->container['connected'] = $data['connected'] ?? null;
        $this->container['lastAccessDate'] = $data['lastAccessDate'] ?? null;
        $this->container['lastAccessIpv4'] = $data['lastAccessIpv4'] ?? null;
        $this->container['regDate'] = $data['regDate'] ?? null;
        $this->container['regIpv4'] = $data['regIpv4'] ?? null;
        $this->container['softwareVersion'] = $data['softwareVersion'] ?? null;
        $this->container['protocolVersion'] = $data['protocolVersion'] ?? null;
        $this->container['accessIdId'] = $data['accessIdId'] ?? null;
        $this->container['accessId'] = $data['accessId'] ?? null;
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
     * Gets name
     *
     * @return string|null
     */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
     * Sets name
     *
     * @param string|null $name Name from the device
     *
     * @return self
     */
    public function setName($name)
    {
        $this->container['name'] = $name;

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
     * @param string|null $caption Caption set by the user
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
     * @param bool|null $enabled enabled
     *
     * @return self
     */
    public function setEnabled($enabled)
    {
        $this->container['enabled'] = $enabled;

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
     * @param bool|null $connected Whether the app is connected now or not, sent only if requested by the `include` param
     *
     * @return self
     */
    public function setConnected($connected)
    {
        $this->container['connected'] = $connected;

        return $this;
    }

    /**
     * Gets lastAccessDate
     *
     * @return \DateTime|null
     */
    public function getLastAccessDate()
    {
        return $this->container['lastAccessDate'];
    }

    /**
     * Sets lastAccessDate
     *
     * @param \DateTime|null $lastAccessDate lastAccessDate
     *
     * @return self
     */
    public function setLastAccessDate($lastAccessDate)
    {
        $this->container['lastAccessDate'] = $lastAccessDate;

        return $this;
    }

    /**
     * Gets lastAccessIpv4
     *
     * @return string|null
     */
    public function getLastAccessIpv4()
    {
        return $this->container['lastAccessIpv4'];
    }

    /**
     * Sets lastAccessIpv4
     *
     * @param string|null $lastAccessIpv4 lastAccessIpv4
     *
     * @return self
     */
    public function setLastAccessIpv4($lastAccessIpv4)
    {
        $this->container['lastAccessIpv4'] = $lastAccessIpv4;

        return $this;
    }

    /**
     * Gets regDate
     *
     * @return \DateTime|null
     */
    public function getRegDate()
    {
        return $this->container['regDate'];
    }

    /**
     * Sets regDate
     *
     * @param \DateTime|null $regDate regDate
     *
     * @return self
     */
    public function setRegDate($regDate)
    {
        $this->container['regDate'] = $regDate;

        return $this;
    }

    /**
     * Gets regIpv4
     *
     * @return string|null
     */
    public function getRegIpv4()
    {
        return $this->container['regIpv4'];
    }

    /**
     * Sets regIpv4
     *
     * @param string|null $regIpv4 regIpv4
     *
     * @return self
     */
    public function setRegIpv4($regIpv4)
    {
        $this->container['regIpv4'] = $regIpv4;

        return $this;
    }

    /**
     * Gets softwareVersion
     *
     * @return string|null
     */
    public function getSoftwareVersion()
    {
        return $this->container['softwareVersion'];
    }

    /**
     * Sets softwareVersion
     *
     * @param string|null $softwareVersion softwareVersion
     *
     * @return self
     */
    public function setSoftwareVersion($softwareVersion)
    {
        $this->container['softwareVersion'] = $softwareVersion;

        return $this;
    }

    /**
     * Gets protocolVersion
     *
     * @return int|null
     */
    public function getProtocolVersion()
    {
        return $this->container['protocolVersion'];
    }

    /**
     * Sets protocolVersion
     *
     * @param int|null $protocolVersion protocolVersion
     *
     * @return self
     */
    public function setProtocolVersion($protocolVersion)
    {
        $this->container['protocolVersion'] = $protocolVersion;

        return $this;
    }

    /**
     * Gets accessIdId
     *
     * @return int|null
     */
    public function getAccessIdId()
    {
        return $this->container['accessIdId'];
    }

    /**
     * Sets accessIdId
     *
     * @param int|null $accessIdId accessIdId
     *
     * @return self
     */
    public function setAccessIdId($accessIdId)
    {
        $this->container['accessIdId'] = $accessIdId;

        return $this;
    }

    /**
     * Gets accessId
     *
     * @return \Supla\ApiClient\Model\AccessIdentifier|null
     */
    public function getAccessId()
    {
        return $this->container['accessId'];
    }

    /**
     * Sets accessId
     *
     * @param \Supla\ApiClient\Model\AccessIdentifier|null $accessId accessId
     *
     * @return self
     */
    public function setAccessId($accessId)
    {
        $this->container['accessId'] = $accessId;

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


