<?php
/**
 * NoEmailMarketingConsent
 *
 * PHP version 7.4
 *
 * @category Class
 * @package  KlaviyoAPI
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Klaviyo API
 *
 * The Klaviyo REST API. Please visit https://developers.klaviyo.com for more details.
 *
 * The version of the OpenAPI document: 2025-01-15
 * Contact: developers@klaviyo.com
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 6.1.0
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace KlaviyoAPI\Model;

use \ArrayAccess;
use \KlaviyoAPI\ObjectSerializer;

/**
 * NoEmailMarketingConsent Class Doc Comment
 *
 * @category Class
 * @package  KlaviyoAPI
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class NoEmailMarketingConsent implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'NoEmailMarketingConsent';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'channel' => '\KlaviyoAPI\Model\EmailEnum',
        'can_receive_marketing' => 'bool',
        'consent_status' => '\KlaviyoAPI\Model\NoEmailMarketingConsentConsentStatus'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'channel' => null,
        'can_receive_marketing' => null,
        'consent_status' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'channel' => false,
		'can_receive_marketing' => false,
		'consent_status' => false
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
        'channel' => 'channel',
        'can_receive_marketing' => 'can_receive_marketing',
        'consent_status' => 'consent_status'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'channel' => 'setChannel',
        'can_receive_marketing' => 'setCanReceiveMarketing',
        'consent_status' => 'setConsentStatus'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'channel' => 'getChannel',
        'can_receive_marketing' => 'getCanReceiveMarketing',
        'consent_status' => 'getConsentStatus'
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

    public const CAN_RECEIVE_MARKETING_FALSE = 'false';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getCanReceiveMarketingAllowableValues()
    {
        return [
            self::CAN_RECEIVE_MARKETING_FALSE,
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
        $this->setIfExists('channel', $data ?? [], null);
        $this->setIfExists('can_receive_marketing', $data ?? [], null);
        $this->setIfExists('consent_status', $data ?? [], null);
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

        if ($this->container['channel'] === null) {
            $invalidProperties[] = "'channel' can't be null";
        }
        if ($this->container['can_receive_marketing'] === null) {
            $invalidProperties[] = "'can_receive_marketing' can't be null";
        }
        $allowedValues = $this->getCanReceiveMarketingAllowableValues();
        if (!is_null($this->container['can_receive_marketing']) && !in_array($this->container['can_receive_marketing'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'can_receive_marketing', must be one of '%s'",
                $this->container['can_receive_marketing'],
                implode("', '", $allowedValues)
            );
        }

        if ($this->container['consent_status'] === null) {
            $invalidProperties[] = "'consent_status' can't be null";
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
     * Gets channel
     *
     * @return \KlaviyoAPI\Model\EmailEnum
     */
    public function getChannel()
    {
        return $this->container['channel'];
    }

    /**
     * Sets channel
     *
     * @param \KlaviyoAPI\Model\EmailEnum $channel channel
     *
     * @return self
     */
    public function setChannel($channel)
    {

        if (is_null($channel)) {
            throw new \InvalidArgumentException('non-nullable channel cannot be null');
        }

        $this->container['channel'] = $channel;

        return $this;
    }

    /**
     * Gets can_receive_marketing
     *
     * @return bool
     */
    public function getCanReceiveMarketing()
    {
        return $this->container['can_receive_marketing'];
    }

    /**
     * Sets can_receive_marketing
     *
     * @param bool $can_receive_marketing can_receive_marketing
     *
     * @return self
     */
    public function setCanReceiveMarketing($can_receive_marketing)
    {
        $allowedValues = $this->getCanReceiveMarketingAllowableValues();
        if (!in_array($can_receive_marketing, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'can_receive_marketing', must be one of '%s'",
                    $can_receive_marketing,
                    implode("', '", $allowedValues)
                )
            );
        }

        if (is_null($can_receive_marketing)) {
            throw new \InvalidArgumentException('non-nullable can_receive_marketing cannot be null');
        }

        $this->container['can_receive_marketing'] = $can_receive_marketing;

        return $this;
    }

    /**
     * Gets consent_status
     *
     * @return \KlaviyoAPI\Model\NoEmailMarketingConsentConsentStatus
     */
    public function getConsentStatus()
    {
        return $this->container['consent_status'];
    }

    /**
     * Sets consent_status
     *
     * @param \KlaviyoAPI\Model\NoEmailMarketingConsentConsentStatus $consent_status consent_status
     *
     * @return self
     */
    public function setConsentStatus($consent_status)
    {

        if (is_null($consent_status)) {
            throw new \InvalidArgumentException('non-nullable consent_status cannot be null');
        }

        $this->container['consent_status'] = $consent_status;

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


