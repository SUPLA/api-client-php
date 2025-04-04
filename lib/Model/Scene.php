<?php
/**
 * Scene
 *
 * PHP version 7.4
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
 * Generator version: 7.12.0
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
 * Scene Class Doc Comment
 *
 * @category Class
 * @package  Supla\ApiClient
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class Scene implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'Scene';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'id' => 'int',
        'caption' => 'string',
        'altIcon' => 'int',
        'enabled' => 'bool',
        'hidden' => 'bool',
        'estimatedExecutionTime' => 'int',
        'ownSubjectType' => 'string',
        'possibleActions' => '\Supla\ApiClient\Model\ChannelFunctionAction[]',
        'function' => '\Supla\ApiClient\Model\ChannelFunction',
        'operations' => '\Supla\ApiClient\Model\SceneOperation[]',
        'location' => '\Supla\ApiClient\Model\Location',
        'locationId' => 'int',
        'functionId' => 'int',
        'userIconId' => 'int',
        'config' => '\Supla\ApiClient\Model\ChannelConfig',
        'state' => '\Supla\ApiClient\Model\SceneState',
        'relationsCount' => '\Supla\ApiClient\Model\SceneRelationsCount'
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
        'altIcon' => null,
        'enabled' => null,
        'hidden' => null,
        'estimatedExecutionTime' => null,
        'ownSubjectType' => null,
        'possibleActions' => null,
        'function' => null,
        'operations' => null,
        'location' => null,
        'locationId' => null,
        'functionId' => null,
        'userIconId' => null,
        'config' => null,
        'state' => null,
        'relationsCount' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'id' => false,
        'caption' => false,
        'altIcon' => false,
        'enabled' => false,
        'hidden' => false,
        'estimatedExecutionTime' => false,
        'ownSubjectType' => false,
        'possibleActions' => false,
        'function' => false,
        'operations' => false,
        'location' => false,
        'locationId' => false,
        'functionId' => false,
        'userIconId' => false,
        'config' => false,
        'state' => false,
        'relationsCount' => false
    ];

    /**
      * If a nullable field gets set to null, insert it here
      *
      * @var boolean[]
      */
    protected array $openAPINullablesSetToNull = [];

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
     * Array of nullable properties
     *
     * @return array
     */
    protected static function openAPINullables(): array
    {
        return self::$openAPINullables;
    }

    /**
     * Array of nullable field names deliberately set to null
     *
     * @return boolean[]
     */
    private function getOpenAPINullablesSetToNull(): array
    {
        return $this->openAPINullablesSetToNull;
    }

    /**
     * Setter - Array of nullable field names deliberately set to null
     *
     * @param boolean[] $openAPINullablesSetToNull
     */
    private function setOpenAPINullablesSetToNull(array $openAPINullablesSetToNull): void
    {
        $this->openAPINullablesSetToNull = $openAPINullablesSetToNull;
    }

    /**
     * Checks if a property is nullable
     *
     * @param string $property
     * @return bool
     */
    public static function isNullable(string $property): bool
    {
        return self::openAPINullables()[$property] ?? false;
    }

    /**
     * Checks if a nullable property is set to null.
     *
     * @param string $property
     * @return bool
     */
    public function isNullableSetToNull(string $property): bool
    {
        return in_array($property, $this->getOpenAPINullablesSetToNull(), true);
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
        'altIcon' => 'altIcon',
        'enabled' => 'enabled',
        'hidden' => 'hidden',
        'estimatedExecutionTime' => 'estimatedExecutionTime',
        'ownSubjectType' => 'ownSubjectType',
        'possibleActions' => 'possibleActions',
        'function' => 'function',
        'operations' => 'operations',
        'location' => 'location',
        'locationId' => 'locationId',
        'functionId' => 'functionId',
        'userIconId' => 'userIconId',
        'config' => 'config',
        'state' => 'state',
        'relationsCount' => 'relationsCount'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'caption' => 'setCaption',
        'altIcon' => 'setAltIcon',
        'enabled' => 'setEnabled',
        'hidden' => 'setHidden',
        'estimatedExecutionTime' => 'setEstimatedExecutionTime',
        'ownSubjectType' => 'setOwnSubjectType',
        'possibleActions' => 'setPossibleActions',
        'function' => 'setFunction',
        'operations' => 'setOperations',
        'location' => 'setLocation',
        'locationId' => 'setLocationId',
        'functionId' => 'setFunctionId',
        'userIconId' => 'setUserIconId',
        'config' => 'setConfig',
        'state' => 'setState',
        'relationsCount' => 'setRelationsCount'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'caption' => 'getCaption',
        'altIcon' => 'getAltIcon',
        'enabled' => 'getEnabled',
        'hidden' => 'getHidden',
        'estimatedExecutionTime' => 'getEstimatedExecutionTime',
        'ownSubjectType' => 'getOwnSubjectType',
        'possibleActions' => 'getPossibleActions',
        'function' => 'getFunction',
        'operations' => 'getOperations',
        'location' => 'getLocation',
        'locationId' => 'getLocationId',
        'functionId' => 'getFunctionId',
        'userIconId' => 'getUserIconId',
        'config' => 'getConfig',
        'state' => 'getState',
        'relationsCount' => 'getRelationsCount'
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

    public const OWN_SUBJECT_TYPE_SCENE = 'scene';
    public const FUNCTION_ID_NUMBER_2000 = 2000;

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getOwnSubjectTypeAllowableValues()
    {
        return [
            self::OWN_SUBJECT_TYPE_SCENE,
        ];
    }

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getFunctionIdAllowableValues()
    {
        return [
            self::FUNCTION_ID_NUMBER_2000,
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
     * @param mixed[]|null $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(?array $data = null)
    {
        $this->setIfExists('id', $data ?? [], null);
        $this->setIfExists('caption', $data ?? [], null);
        $this->setIfExists('altIcon', $data ?? [], null);
        $this->setIfExists('enabled', $data ?? [], null);
        $this->setIfExists('hidden', $data ?? [], null);
        $this->setIfExists('estimatedExecutionTime', $data ?? [], null);
        $this->setIfExists('ownSubjectType', $data ?? [], null);
        $this->setIfExists('possibleActions', $data ?? [], null);
        $this->setIfExists('function', $data ?? [], null);
        $this->setIfExists('operations', $data ?? [], null);
        $this->setIfExists('location', $data ?? [], null);
        $this->setIfExists('locationId', $data ?? [], null);
        $this->setIfExists('functionId', $data ?? [], null);
        $this->setIfExists('userIconId', $data ?? [], null);
        $this->setIfExists('config', $data ?? [], null);
        $this->setIfExists('state', $data ?? [], null);
        $this->setIfExists('relationsCount', $data ?? [], null);
    }

    /**
    * Sets $this->container[$variableName] to the given data or to the given default Value; if $variableName
    * is nullable and its value is set to null in the $fields array, then mark it as "set to null" in the
    * $this->openAPINullablesSetToNull array
    *
    * @param string $variableName
    * @param array  $fields
    * @param mixed  $defaultValue
    */
    private function setIfExists(string $variableName, array $fields, $defaultValue): void
    {
        if (self::isNullable($variableName) && array_key_exists($variableName, $fields) && is_null($fields[$variableName])) {
            $this->openAPINullablesSetToNull[] = $variableName;
        }

        $this->container[$variableName] = $fields[$variableName] ?? $defaultValue;
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

        $allowedValues = $this->getFunctionIdAllowableValues();
        if (!is_null($this->container['functionId']) && !in_array($this->container['functionId'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'functionId', must be one of '%s'",
                $this->container['functionId'],
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
        if (is_null($id)) {
            throw new \InvalidArgumentException('non-nullable id cannot be null');
        }
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
        if (is_null($caption)) {
            throw new \InvalidArgumentException('non-nullable caption cannot be null');
        }
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
        if (is_null($altIcon)) {
            throw new \InvalidArgumentException('non-nullable altIcon cannot be null');
        }
        $this->container['altIcon'] = $altIcon;

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
     * @param bool|null $enabled Whether this scene is enabled or not
     *
     * @return self
     */
    public function setEnabled($enabled)
    {
        if (is_null($enabled)) {
            throw new \InvalidArgumentException('non-nullable enabled cannot be null');
        }
        $this->container['enabled'] = $enabled;

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
     * @param bool|null $hidden Whether this scene is shown on client apps or not
     *
     * @return self
     */
    public function setHidden($hidden)
    {
        if (is_null($hidden)) {
            throw new \InvalidArgumentException('non-nullable hidden cannot be null');
        }
        $this->container['hidden'] = $hidden;

        return $this;
    }

    /**
     * Gets estimatedExecutionTime
     *
     * @return int|null
     */
    public function getEstimatedExecutionTime()
    {
        return $this->container['estimatedExecutionTime'];
    }

    /**
     * Sets estimatedExecutionTime
     *
     * @param int|null $estimatedExecutionTime Estimated execution time for this scene (in milliseconds).
     *
     * @return self
     */
    public function setEstimatedExecutionTime($estimatedExecutionTime)
    {
        if (is_null($estimatedExecutionTime)) {
            throw new \InvalidArgumentException('non-nullable estimatedExecutionTime cannot be null');
        }
        $this->container['estimatedExecutionTime'] = $estimatedExecutionTime;

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
        if (is_null($ownSubjectType)) {
            throw new \InvalidArgumentException('non-nullable ownSubjectType cannot be null');
        }
        $allowedValues = $this->getOwnSubjectTypeAllowableValues();
        if (!in_array($ownSubjectType, $allowedValues, true)) {
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
        if (is_null($possibleActions)) {
            throw new \InvalidArgumentException('non-nullable possibleActions cannot be null');
        }
        $this->container['possibleActions'] = $possibleActions;

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
        if (is_null($function)) {
            throw new \InvalidArgumentException('non-nullable function cannot be null');
        }
        $this->container['function'] = $function;

        return $this;
    }

    /**
     * Gets operations
     *
     * @return \Supla\ApiClient\Model\SceneOperation[]|null
     */
    public function getOperations()
    {
        return $this->container['operations'];
    }

    /**
     * Sets operations
     *
     * @param \Supla\ApiClient\Model\SceneOperation[]|null $operations Scene operations, only if requested in the `include` param
     *
     * @return self
     */
    public function setOperations($operations)
    {
        if (is_null($operations)) {
            throw new \InvalidArgumentException('non-nullable operations cannot be null');
        }
        $this->container['operations'] = $operations;

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
        if (is_null($location)) {
            throw new \InvalidArgumentException('non-nullable location cannot be null');
        }
        $this->container['location'] = $location;

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
        if (is_null($locationId)) {
            throw new \InvalidArgumentException('non-nullable locationId cannot be null');
        }
        $this->container['locationId'] = $locationId;

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
        if (is_null($functionId)) {
            throw new \InvalidArgumentException('non-nullable functionId cannot be null');
        }
        $allowedValues = $this->getFunctionIdAllowableValues();
        if (!in_array($functionId, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'functionId', must be one of '%s'",
                    $functionId,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['functionId'] = $functionId;

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
        if (is_null($userIconId)) {
            throw new \InvalidArgumentException('non-nullable userIconId cannot be null');
        }
        $this->container['userIconId'] = $userIconId;

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
        if (is_null($config)) {
            throw new \InvalidArgumentException('non-nullable config cannot be null');
        }
        $this->container['config'] = $config;

        return $this;
    }

    /**
     * Gets state
     *
     * @return \Supla\ApiClient\Model\SceneState|null
     */
    public function getState()
    {
        return $this->container['state'];
    }

    /**
     * Sets state
     *
     * @param \Supla\ApiClient\Model\SceneState|null $state state
     *
     * @return self
     */
    public function setState($state)
    {
        if (is_null($state)) {
            throw new \InvalidArgumentException('non-nullable state cannot be null');
        }
        $this->container['state'] = $state;

        return $this;
    }

    /**
     * Gets relationsCount
     *
     * @return \Supla\ApiClient\Model\SceneRelationsCount|null
     */
    public function getRelationsCount()
    {
        return $this->container['relationsCount'];
    }

    /**
     * Sets relationsCount
     *
     * @param \Supla\ApiClient\Model\SceneRelationsCount|null $relationsCount relationsCount
     *
     * @return self
     */
    public function setRelationsCount($relationsCount)
    {
        if (is_null($relationsCount)) {
            throw new \InvalidArgumentException('non-nullable relationsCount cannot be null');
        }
        $this->container['relationsCount'] = $relationsCount;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    public function offsetExists($offset): bool
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
    #[\ReturnTypeWillChange]
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
    public function offsetSet($offset, $value): void
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
    public function offsetUnset($offset): void
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
    #[\ReturnTypeWillChange]
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


