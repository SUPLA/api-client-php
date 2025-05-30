<?php
/**
 * ChannelConfigGeneralPurposeMeter
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
 * ChannelConfigGeneralPurposeMeter Class Doc Comment
 *
 * @category Class
 * @description Config for &#x60;GENERAL_PURPOSE_METER&#x60; function.
 * @package  Supla\ApiClient
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class ChannelConfigGeneralPurposeMeter implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'ChannelConfigGeneralPurposeMeter';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'valueDivider' => 'float',
        'valueMultiplier' => 'float',
        'valueAdded' => 'float',
        'valuePrecision' => 'int',
        'unitBeforeValue' => 'string',
        'unitAfterValue' => 'string',
        'keepHistory' => 'bool',
        'chartType' => 'string',
        'defaults' => '\Supla\ApiClient\Model\ChannelConfigGeneralPurposeMeasurementDefaults',
        'includeValueAddedInHistory' => 'bool',
        'fillMissingData' => 'bool',
        'allowCounterReset' => 'bool',
        'alwaysDecrement' => 'bool'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'valueDivider' => null,
        'valueMultiplier' => null,
        'valueAdded' => null,
        'valuePrecision' => null,
        'unitBeforeValue' => null,
        'unitAfterValue' => null,
        'keepHistory' => null,
        'chartType' => null,
        'defaults' => null,
        'includeValueAddedInHistory' => null,
        'fillMissingData' => null,
        'allowCounterReset' => null,
        'alwaysDecrement' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'valueDivider' => false,
        'valueMultiplier' => false,
        'valueAdded' => false,
        'valuePrecision' => false,
        'unitBeforeValue' => false,
        'unitAfterValue' => false,
        'keepHistory' => false,
        'chartType' => false,
        'defaults' => false,
        'includeValueAddedInHistory' => false,
        'fillMissingData' => false,
        'allowCounterReset' => false,
        'alwaysDecrement' => false
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
        'valueDivider' => 'valueDivider',
        'valueMultiplier' => 'valueMultiplier',
        'valueAdded' => 'valueAdded',
        'valuePrecision' => 'valuePrecision',
        'unitBeforeValue' => 'unitBeforeValue',
        'unitAfterValue' => 'unitAfterValue',
        'keepHistory' => 'keepHistory',
        'chartType' => 'chartType',
        'defaults' => 'defaults',
        'includeValueAddedInHistory' => 'includeValueAddedInHistory',
        'fillMissingData' => 'fillMissingData',
        'allowCounterReset' => 'allowCounterReset',
        'alwaysDecrement' => 'alwaysDecrement'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'valueDivider' => 'setValueDivider',
        'valueMultiplier' => 'setValueMultiplier',
        'valueAdded' => 'setValueAdded',
        'valuePrecision' => 'setValuePrecision',
        'unitBeforeValue' => 'setUnitBeforeValue',
        'unitAfterValue' => 'setUnitAfterValue',
        'keepHistory' => 'setKeepHistory',
        'chartType' => 'setChartType',
        'defaults' => 'setDefaults',
        'includeValueAddedInHistory' => 'setIncludeValueAddedInHistory',
        'fillMissingData' => 'setFillMissingData',
        'allowCounterReset' => 'setAllowCounterReset',
        'alwaysDecrement' => 'setAlwaysDecrement'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'valueDivider' => 'getValueDivider',
        'valueMultiplier' => 'getValueMultiplier',
        'valueAdded' => 'getValueAdded',
        'valuePrecision' => 'getValuePrecision',
        'unitBeforeValue' => 'getUnitBeforeValue',
        'unitAfterValue' => 'getUnitAfterValue',
        'keepHistory' => 'getKeepHistory',
        'chartType' => 'getChartType',
        'defaults' => 'getDefaults',
        'includeValueAddedInHistory' => 'getIncludeValueAddedInHistory',
        'fillMissingData' => 'getFillMissingData',
        'allowCounterReset' => 'getAllowCounterReset',
        'alwaysDecrement' => 'getAlwaysDecrement'
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

    public const CHART_TYPE_LINEAR = 'LINEAR';
    public const CHART_TYPE_BAR = 'BAR';
    public const CHART_TYPE_CANDLE = 'CANDLE';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getChartTypeAllowableValues()
    {
        return [
            self::CHART_TYPE_LINEAR,
            self::CHART_TYPE_BAR,
            self::CHART_TYPE_CANDLE,
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
        $this->setIfExists('valueDivider', $data ?? [], null);
        $this->setIfExists('valueMultiplier', $data ?? [], null);
        $this->setIfExists('valueAdded', $data ?? [], null);
        $this->setIfExists('valuePrecision', $data ?? [], null);
        $this->setIfExists('unitBeforeValue', $data ?? [], null);
        $this->setIfExists('unitAfterValue', $data ?? [], null);
        $this->setIfExists('keepHistory', $data ?? [], null);
        $this->setIfExists('chartType', $data ?? [], null);
        $this->setIfExists('defaults', $data ?? [], null);
        $this->setIfExists('includeValueAddedInHistory', $data ?? [], null);
        $this->setIfExists('fillMissingData', $data ?? [], null);
        $this->setIfExists('allowCounterReset', $data ?? [], null);
        $this->setIfExists('alwaysDecrement', $data ?? [], null);
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

        $allowedValues = $this->getChartTypeAllowableValues();
        if (!is_null($this->container['chartType']) && !in_array($this->container['chartType'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'chartType', must be one of '%s'",
                $this->container['chartType'],
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
     * Gets valueDivider
     *
     * @return float|null
     */
    public function getValueDivider()
    {
        return $this->container['valueDivider'];
    }

    /**
     * Sets valueDivider
     *
     * @param float|null $valueDivider valueDivider
     *
     * @return self
     */
    public function setValueDivider($valueDivider)
    {
        if (is_null($valueDivider)) {
            throw new \InvalidArgumentException('non-nullable valueDivider cannot be null');
        }
        $this->container['valueDivider'] = $valueDivider;

        return $this;
    }

    /**
     * Gets valueMultiplier
     *
     * @return float|null
     */
    public function getValueMultiplier()
    {
        return $this->container['valueMultiplier'];
    }

    /**
     * Sets valueMultiplier
     *
     * @param float|null $valueMultiplier valueMultiplier
     *
     * @return self
     */
    public function setValueMultiplier($valueMultiplier)
    {
        if (is_null($valueMultiplier)) {
            throw new \InvalidArgumentException('non-nullable valueMultiplier cannot be null');
        }
        $this->container['valueMultiplier'] = $valueMultiplier;

        return $this;
    }

    /**
     * Gets valueAdded
     *
     * @return float|null
     */
    public function getValueAdded()
    {
        return $this->container['valueAdded'];
    }

    /**
     * Sets valueAdded
     *
     * @param float|null $valueAdded valueAdded
     *
     * @return self
     */
    public function setValueAdded($valueAdded)
    {
        if (is_null($valueAdded)) {
            throw new \InvalidArgumentException('non-nullable valueAdded cannot be null');
        }
        $this->container['valueAdded'] = $valueAdded;

        return $this;
    }

    /**
     * Gets valuePrecision
     *
     * @return int|null
     */
    public function getValuePrecision()
    {
        return $this->container['valuePrecision'];
    }

    /**
     * Sets valuePrecision
     *
     * @param int|null $valuePrecision valuePrecision
     *
     * @return self
     */
    public function setValuePrecision($valuePrecision)
    {
        if (is_null($valuePrecision)) {
            throw new \InvalidArgumentException('non-nullable valuePrecision cannot be null');
        }
        $this->container['valuePrecision'] = $valuePrecision;

        return $this;
    }

    /**
     * Gets unitBeforeValue
     *
     * @return string|null
     */
    public function getUnitBeforeValue()
    {
        return $this->container['unitBeforeValue'];
    }

    /**
     * Sets unitBeforeValue
     *
     * @param string|null $unitBeforeValue unitBeforeValue
     *
     * @return self
     */
    public function setUnitBeforeValue($unitBeforeValue)
    {
        if (is_null($unitBeforeValue)) {
            throw new \InvalidArgumentException('non-nullable unitBeforeValue cannot be null');
        }
        $this->container['unitBeforeValue'] = $unitBeforeValue;

        return $this;
    }

    /**
     * Gets unitAfterValue
     *
     * @return string|null
     */
    public function getUnitAfterValue()
    {
        return $this->container['unitAfterValue'];
    }

    /**
     * Sets unitAfterValue
     *
     * @param string|null $unitAfterValue unitAfterValue
     *
     * @return self
     */
    public function setUnitAfterValue($unitAfterValue)
    {
        if (is_null($unitAfterValue)) {
            throw new \InvalidArgumentException('non-nullable unitAfterValue cannot be null');
        }
        $this->container['unitAfterValue'] = $unitAfterValue;

        return $this;
    }

    /**
     * Gets keepHistory
     *
     * @return bool|null
     */
    public function getKeepHistory()
    {
        return $this->container['keepHistory'];
    }

    /**
     * Sets keepHistory
     *
     * @param bool|null $keepHistory keepHistory
     *
     * @return self
     */
    public function setKeepHistory($keepHistory)
    {
        if (is_null($keepHistory)) {
            throw new \InvalidArgumentException('non-nullable keepHistory cannot be null');
        }
        $this->container['keepHistory'] = $keepHistory;

        return $this;
    }

    /**
     * Gets chartType
     *
     * @return string|null
     */
    public function getChartType()
    {
        return $this->container['chartType'];
    }

    /**
     * Sets chartType
     *
     * @param string|null $chartType chartType
     *
     * @return self
     */
    public function setChartType($chartType)
    {
        if (is_null($chartType)) {
            throw new \InvalidArgumentException('non-nullable chartType cannot be null');
        }
        $allowedValues = $this->getChartTypeAllowableValues();
        if (!in_array($chartType, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'chartType', must be one of '%s'",
                    $chartType,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['chartType'] = $chartType;

        return $this;
    }

    /**
     * Gets defaults
     *
     * @return \Supla\ApiClient\Model\ChannelConfigGeneralPurposeMeasurementDefaults|null
     */
    public function getDefaults()
    {
        return $this->container['defaults'];
    }

    /**
     * Sets defaults
     *
     * @param \Supla\ApiClient\Model\ChannelConfigGeneralPurposeMeasurementDefaults|null $defaults defaults
     *
     * @return self
     */
    public function setDefaults($defaults)
    {
        if (is_null($defaults)) {
            throw new \InvalidArgumentException('non-nullable defaults cannot be null');
        }
        $this->container['defaults'] = $defaults;

        return $this;
    }

    /**
     * Gets includeValueAddedInHistory
     *
     * @return bool|null
     */
    public function getIncludeValueAddedInHistory()
    {
        return $this->container['includeValueAddedInHistory'];
    }

    /**
     * Sets includeValueAddedInHistory
     *
     * @param bool|null $includeValueAddedInHistory includeValueAddedInHistory
     *
     * @return self
     */
    public function setIncludeValueAddedInHistory($includeValueAddedInHistory)
    {
        if (is_null($includeValueAddedInHistory)) {
            throw new \InvalidArgumentException('non-nullable includeValueAddedInHistory cannot be null');
        }
        $this->container['includeValueAddedInHistory'] = $includeValueAddedInHistory;

        return $this;
    }

    /**
     * Gets fillMissingData
     *
     * @return bool|null
     */
    public function getFillMissingData()
    {
        return $this->container['fillMissingData'];
    }

    /**
     * Sets fillMissingData
     *
     * @param bool|null $fillMissingData fillMissingData
     *
     * @return self
     */
    public function setFillMissingData($fillMissingData)
    {
        if (is_null($fillMissingData)) {
            throw new \InvalidArgumentException('non-nullable fillMissingData cannot be null');
        }
        $this->container['fillMissingData'] = $fillMissingData;

        return $this;
    }

    /**
     * Gets allowCounterReset
     *
     * @return bool|null
     */
    public function getAllowCounterReset()
    {
        return $this->container['allowCounterReset'];
    }

    /**
     * Sets allowCounterReset
     *
     * @param bool|null $allowCounterReset allowCounterReset
     *
     * @return self
     */
    public function setAllowCounterReset($allowCounterReset)
    {
        if (is_null($allowCounterReset)) {
            throw new \InvalidArgumentException('non-nullable allowCounterReset cannot be null');
        }
        $this->container['allowCounterReset'] = $allowCounterReset;

        return $this;
    }

    /**
     * Gets alwaysDecrement
     *
     * @return bool|null
     */
    public function getAlwaysDecrement()
    {
        return $this->container['alwaysDecrement'];
    }

    /**
     * Sets alwaysDecrement
     *
     * @param bool|null $alwaysDecrement alwaysDecrement
     *
     * @return self
     */
    public function setAlwaysDecrement($alwaysDecrement)
    {
        if (is_null($alwaysDecrement)) {
            throw new \InvalidArgumentException('non-nullable alwaysDecrement cannot be null');
        }
        $this->container['alwaysDecrement'] = $alwaysDecrement;

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


