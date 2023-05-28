<?php
/**
 * SceneState
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
 * SceneState Class Doc Comment
 *
 * @category Class
 * @description State of a scene.
 * @package  Supla\ApiClient
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class SceneState implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'SceneState';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'executing' => 'bool',
        'initiatorTypeId' => 'int',
        'initiatorType' => 'string',
        'initiatorId' => 'int',
        'initiatorName' => 'string',
        'millisecondsFromStart' => 'int',
        'millisecondsToEnd' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'executing' => null,
        'initiatorTypeId' => null,
        'initiatorType' => null,
        'initiatorId' => null,
        'initiatorName' => null,
        'millisecondsFromStart' => null,
        'millisecondsToEnd' => null
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
        'executing' => 'executing',
        'initiatorTypeId' => 'initiatorTypeId',
        'initiatorType' => 'initiatorType',
        'initiatorId' => 'initiatorId',
        'initiatorName' => 'initiatorName',
        'millisecondsFromStart' => 'millisecondsFromStart',
        'millisecondsToEnd' => 'millisecondsToEnd'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'executing' => 'setExecuting',
        'initiatorTypeId' => 'setInitiatorTypeId',
        'initiatorType' => 'setInitiatorType',
        'initiatorId' => 'setInitiatorId',
        'initiatorName' => 'setInitiatorName',
        'millisecondsFromStart' => 'setMillisecondsFromStart',
        'millisecondsToEnd' => 'setMillisecondsToEnd'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'executing' => 'getExecuting',
        'initiatorTypeId' => 'getInitiatorTypeId',
        'initiatorType' => 'getInitiatorType',
        'initiatorId' => 'getInitiatorId',
        'initiatorName' => 'getInitiatorName',
        'millisecondsFromStart' => 'getMillisecondsFromStart',
        'millisecondsToEnd' => 'getMillisecondsToEnd'
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

    const INITIATOR_TYPE_ID_0 = 0;
    const INITIATOR_TYPE_ID_1 = 1;
    const INITIATOR_TYPE_ID_2 = 2;
    const INITIATOR_TYPE_ID_3 = 3;
    const INITIATOR_TYPE_ID_4 = 4;
    const INITIATOR_TYPE_ID_5 = 5;
    const INITIATOR_TYPE_ID_6 = 6;
    const INITIATOR_TYPE_ID_7 = 7;
    const INITIATOR_TYPE_ID_8 = 8;
    const INITIATOR_TYPE_UNKNOWN = 'UNKNOWN';
    const INITIATOR_TYPE_DEVICE = 'DEVICE';
    const INITIATOR_TYPE_CLIENT = 'CLIENT';
    const INITIATOR_TYPE_IPC = 'IPC';
    const INITIATOR_TYPE_MQTT = 'MQTT';
    const INITIATOR_TYPE_AMAZON_ALEXA = 'AMAZON_ALEXA';
    const INITIATOR_TYPE_GOOGLE_HOME = 'GOOGLE_HOME';
    const INITIATOR_TYPE_ACTION_TRIGGER = 'ACTION_TRIGGER';
    const INITIATOR_TYPE_SCENE = 'SCENE';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getInitiatorTypeIdAllowableValues()
    {
        return [
            self::INITIATOR_TYPE_ID_0,
            self::INITIATOR_TYPE_ID_1,
            self::INITIATOR_TYPE_ID_2,
            self::INITIATOR_TYPE_ID_3,
            self::INITIATOR_TYPE_ID_4,
            self::INITIATOR_TYPE_ID_5,
            self::INITIATOR_TYPE_ID_6,
            self::INITIATOR_TYPE_ID_7,
            self::INITIATOR_TYPE_ID_8,
        ];
    }

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getInitiatorTypeAllowableValues()
    {
        return [
            self::INITIATOR_TYPE_UNKNOWN,
            self::INITIATOR_TYPE_DEVICE,
            self::INITIATOR_TYPE_CLIENT,
            self::INITIATOR_TYPE_IPC,
            self::INITIATOR_TYPE_MQTT,
            self::INITIATOR_TYPE_AMAZON_ALEXA,
            self::INITIATOR_TYPE_GOOGLE_HOME,
            self::INITIATOR_TYPE_ACTION_TRIGGER,
            self::INITIATOR_TYPE_SCENE,
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
        $this->container['executing'] = $data['executing'] ?? null;
        $this->container['initiatorTypeId'] = $data['initiatorTypeId'] ?? null;
        $this->container['initiatorType'] = $data['initiatorType'] ?? null;
        $this->container['initiatorId'] = $data['initiatorId'] ?? null;
        $this->container['initiatorName'] = $data['initiatorName'] ?? null;
        $this->container['millisecondsFromStart'] = $data['millisecondsFromStart'] ?? null;
        $this->container['millisecondsToEnd'] = $data['millisecondsToEnd'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['executing'] === null) {
            $invalidProperties[] = "'executing' can't be null";
        }
        $allowedValues = $this->getInitiatorTypeIdAllowableValues();
        if (!is_null($this->container['initiatorTypeId']) && !in_array($this->container['initiatorTypeId'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'initiatorTypeId', must be one of '%s'",
                $this->container['initiatorTypeId'],
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getInitiatorTypeAllowableValues();
        if (!is_null($this->container['initiatorType']) && !in_array($this->container['initiatorType'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'initiatorType', must be one of '%s'",
                $this->container['initiatorType'],
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
     * Gets executing
     *
     * @return bool
     */
    public function getExecuting()
    {
        return $this->container['executing'];
    }

    /**
     * Sets executing
     *
     * @param bool $executing executing
     *
     * @return self
     */
    public function setExecuting($executing)
    {
        $this->container['executing'] = $executing;

        return $this;
    }

    /**
     * Gets initiatorTypeId
     *
     * @return int|null
     */
    public function getInitiatorTypeId()
    {
        return $this->container['initiatorTypeId'];
    }

    /**
     * Sets initiatorTypeId
     *
     * @param int|null $initiatorTypeId initiatorTypeId
     *
     * @return self
     */
    public function setInitiatorTypeId($initiatorTypeId)
    {
        $allowedValues = $this->getInitiatorTypeIdAllowableValues();
        if (!is_null($initiatorTypeId) && !in_array($initiatorTypeId, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'initiatorTypeId', must be one of '%s'",
                    $initiatorTypeId,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['initiatorTypeId'] = $initiatorTypeId;

        return $this;
    }

    /**
     * Gets initiatorType
     *
     * @return string|null
     */
    public function getInitiatorType()
    {
        return $this->container['initiatorType'];
    }

    /**
     * Sets initiatorType
     *
     * @param string|null $initiatorType initiatorType
     *
     * @return self
     */
    public function setInitiatorType($initiatorType)
    {
        $allowedValues = $this->getInitiatorTypeAllowableValues();
        if (!is_null($initiatorType) && !in_array($initiatorType, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'initiatorType', must be one of '%s'",
                    $initiatorType,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['initiatorType'] = $initiatorType;

        return $this;
    }

    /**
     * Gets initiatorId
     *
     * @return int|null
     */
    public function getInitiatorId()
    {
        return $this->container['initiatorId'];
    }

    /**
     * Sets initiatorId
     *
     * @param int|null $initiatorId initiatorId
     *
     * @return self
     */
    public function setInitiatorId($initiatorId)
    {
        $this->container['initiatorId'] = $initiatorId;

        return $this;
    }

    /**
     * Gets initiatorName
     *
     * @return string|null
     */
    public function getInitiatorName()
    {
        return $this->container['initiatorName'];
    }

    /**
     * Sets initiatorName
     *
     * @param string|null $initiatorName initiatorName
     *
     * @return self
     */
    public function setInitiatorName($initiatorName)
    {
        $this->container['initiatorName'] = $initiatorName;

        return $this;
    }

    /**
     * Gets millisecondsFromStart
     *
     * @return int|null
     */
    public function getMillisecondsFromStart()
    {
        return $this->container['millisecondsFromStart'];
    }

    /**
     * Sets millisecondsFromStart
     *
     * @param int|null $millisecondsFromStart millisecondsFromStart
     *
     * @return self
     */
    public function setMillisecondsFromStart($millisecondsFromStart)
    {
        $this->container['millisecondsFromStart'] = $millisecondsFromStart;

        return $this;
    }

    /**
     * Gets millisecondsToEnd
     *
     * @return int|null
     */
    public function getMillisecondsToEnd()
    {
        return $this->container['millisecondsToEnd'];
    }

    /**
     * Sets millisecondsToEnd
     *
     * @param int|null $millisecondsToEnd millisecondsToEnd
     *
     * @return self
     */
    public function setMillisecondsToEnd($millisecondsToEnd)
    {
        $this->container['millisecondsToEnd'] = $millisecondsToEnd;

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

