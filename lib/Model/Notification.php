<?php
/**
 * Notification
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
 * Notification Class Doc Comment
 *
 * @category Class
 * @package  Supla\ApiClient
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class Notification implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'Notification';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'id' => 'int',
        'title' => 'string',
        'body' => 'string',
        'ownSubjectType' => 'string',
        'possibleActions' => '\Supla\ApiClient\Model\ChannelFunctionAction[]',
        'accessIds' => '\Supla\ApiClient\Model\AccessIdentifier[]'
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
        'title' => null,
        'body' => null,
        'ownSubjectType' => null,
        'possibleActions' => null,
        'accessIds' => null
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
        'title' => 'title',
        'body' => 'body',
        'ownSubjectType' => 'ownSubjectType',
        'possibleActions' => 'possibleActions',
        'accessIds' => 'accessIds'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'title' => 'setTitle',
        'body' => 'setBody',
        'ownSubjectType' => 'setOwnSubjectType',
        'possibleActions' => 'setPossibleActions',
        'accessIds' => 'setAccessIds'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'title' => 'getTitle',
        'body' => 'getBody',
        'ownSubjectType' => 'getOwnSubjectType',
        'possibleActions' => 'getPossibleActions',
        'accessIds' => 'getAccessIds'
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

    const OWN_SUBJECT_TYPE_NOTIFICATION = 'notification';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getOwnSubjectTypeAllowableValues()
    {
        return [
            self::OWN_SUBJECT_TYPE_NOTIFICATION,
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
        $this->container['title'] = $data['title'] ?? null;
        $this->container['body'] = $data['body'] ?? null;
        $this->container['ownSubjectType'] = $data['ownSubjectType'] ?? null;
        $this->container['possibleActions'] = $data['possibleActions'] ?? null;
        $this->container['accessIds'] = $data['accessIds'] ?? null;
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
     * Gets title
     *
     * @return string|null
     */
    public function getTitle()
    {
        return $this->container['title'];
    }

    /**
     * Sets title
     *
     * @param string|null $title title
     *
     * @return self
     */
    public function setTitle($title)
    {
        $this->container['title'] = $title;

        return $this;
    }

    /**
     * Gets body
     *
     * @return string|null
     */
    public function getBody()
    {
        return $this->container['body'];
    }

    /**
     * Sets body
     *
     * @param string|null $body body
     *
     * @return self
     */
    public function setBody($body)
    {
        $this->container['body'] = $body;

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
     * Gets accessIds
     *
     * @return \Supla\ApiClient\Model\AccessIdentifier[]|null
     */
    public function getAccessIds()
    {
        return $this->container['accessIds'];
    }

    /**
     * Sets accessIds
     *
     * @param \Supla\ApiClient\Model\AccessIdentifier[]|null $accessIds Assigned access identifiers, only if requested in the `include` param
     *
     * @return self
     */
    public function setAccessIds($accessIds)
    {
        $this->container['accessIds'] = $accessIds;

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


