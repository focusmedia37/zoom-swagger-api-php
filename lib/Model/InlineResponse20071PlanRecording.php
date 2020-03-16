<?php
/**
 * InlineResponse20071PlanRecording
 *
 * PHP version 5
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Zoom API
 *
 * The Zoom API allows developers to safely and securely access information from Zoom. You can use this API to build private services or public applications on the [Zoom App Marketplace](http://marketplace.zoom.us). To learn how to get your credentials and create private/public applications, read our [Authorization Guide](https://marketplace.zoom.us/docs/guides/authorization/credentials). All endpoints are available via `https` and are located at `api.zoom.us/v2/`.  For instance you can list all users on an account via `https://api.zoom.us/v2/users/`.
 *
 * OpenAPI spec version: 2.0.0
 * Contact: developersupport@zoom.us
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 2.4.12
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace Swagger\Client\Model;

use \ArrayAccess;
use \Swagger\Client\ObjectSerializer;

/**
 * InlineResponse20071PlanRecording Class Doc Comment
 *
 * @category Class
 * @description Recording Plan
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class InlineResponse20071PlanRecording implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'inline_response_200_71_plan_recording';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'type' => 'string',
        'free_storage' => 'string',
        'free_storage_usage' => 'string',
        'plan_storage' => 'string',
        'plan_storage_usage' => 'string',
        'plan_storage_exceed' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'type' => null,
        'free_storage' => null,
        'free_storage_usage' => null,
        'plan_storage' => null,
        'plan_storage_usage' => null,
        'plan_storage_exceed' => null
    ];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerTypes()
    {
        return self::$swaggerTypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerFormats()
    {
        return self::$swaggerFormats;
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'type' => 'type',
        'free_storage' => 'free_storage',
        'free_storage_usage' => 'free_storage_usage',
        'plan_storage' => 'plan_storage',
        'plan_storage_usage' => 'plan_storage_usage',
        'plan_storage_exceed' => 'plan_storage_exceed'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'type' => 'setType',
        'free_storage' => 'setFreeStorage',
        'free_storage_usage' => 'setFreeStorageUsage',
        'plan_storage' => 'setPlanStorage',
        'plan_storage_usage' => 'setPlanStorageUsage',
        'plan_storage_exceed' => 'setPlanStorageExceed'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'type' => 'getType',
        'free_storage' => 'getFreeStorage',
        'free_storage_usage' => 'getFreeStorageUsage',
        'plan_storage' => 'getPlanStorage',
        'plan_storage_usage' => 'getPlanStorageUsage',
        'plan_storage_exceed' => 'getPlanStorageExceed'
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
        return self::$swaggerModelName;
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
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['free_storage'] = isset($data['free_storage']) ? $data['free_storage'] : null;
        $this->container['free_storage_usage'] = isset($data['free_storage_usage']) ? $data['free_storage_usage'] : null;
        $this->container['plan_storage'] = isset($data['plan_storage']) ? $data['plan_storage'] : null;
        $this->container['plan_storage_usage'] = isset($data['plan_storage_usage']) ? $data['plan_storage_usage'] : null;
        $this->container['plan_storage_exceed'] = isset($data['plan_storage_exceed']) ? $data['plan_storage_exceed'] : null;
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
     * Gets type
     *
     * @return string
     */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
     * Sets type
     *
     * @param string $type Recording plan type.
     *
     * @return $this
     */
    public function setType($type)
    {
        $this->container['type'] = $type;

        return $this;
    }

    /**
     * Gets free_storage
     *
     * @return string
     */
    public function getFreeStorage()
    {
        return $this->container['free_storage'];
    }

    /**
     * Sets free_storage
     *
     * @param string $free_storage Recording free storage.
     *
     * @return $this
     */
    public function setFreeStorage($free_storage)
    {
        $this->container['free_storage'] = $free_storage;

        return $this;
    }

    /**
     * Gets free_storage_usage
     *
     * @return string
     */
    public function getFreeStorageUsage()
    {
        return $this->container['free_storage_usage'];
    }

    /**
     * Sets free_storage_usage
     *
     * @param string $free_storage_usage Amount of free storage used.
     *
     * @return $this
     */
    public function setFreeStorageUsage($free_storage_usage)
    {
        $this->container['free_storage_usage'] = $free_storage_usage;

        return $this;
    }

    /**
     * Gets plan_storage
     *
     * @return string
     */
    public function getPlanStorage()
    {
        return $this->container['plan_storage'];
    }

    /**
     * Sets plan_storage
     *
     * @param string $plan_storage Recording plan storage.
     *
     * @return $this
     */
    public function setPlanStorage($plan_storage)
    {
        $this->container['plan_storage'] = $plan_storage;

        return $this;
    }

    /**
     * Gets plan_storage_usage
     *
     * @return string
     */
    public function getPlanStorageUsage()
    {
        return $this->container['plan_storage_usage'];
    }

    /**
     * Sets plan_storage_usage
     *
     * @param string $plan_storage_usage Recording storage usage.
     *
     * @return $this
     */
    public function setPlanStorageUsage($plan_storage_usage)
    {
        $this->container['plan_storage_usage'] = $plan_storage_usage;

        return $this;
    }

    /**
     * Gets plan_storage_exceed
     *
     * @return string
     */
    public function getPlanStorageExceed()
    {
        return $this->container['plan_storage_exceed'];
    }

    /**
     * Sets plan_storage_exceed
     *
     * @param string $plan_storage_exceed plan_storage_exceed
     *
     * @return $this
     */
    public function setPlanStorageExceed($plan_storage_exceed)
    {
        $this->container['plan_storage_exceed'] = $plan_storage_exceed;

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
     * @return mixed
     */
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }

    /**
     * Sets value based on offset.
     *
     * @param integer $offset Offset
     * @param mixed   $value  Value to be set
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
     * Gets the string presentation of the object
     *
     * @return string
     */
    public function __toString()
    {
        if (defined('JSON_PRETTY_PRINT')) { // use JSON pretty print
            return json_encode(
                ObjectSerializer::sanitizeForSerialization($this),
                JSON_PRETTY_PRINT
            );
        }

        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}


