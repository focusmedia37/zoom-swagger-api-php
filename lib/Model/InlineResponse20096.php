<?php
/**
 * InlineResponse20096
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
 * InlineResponse20096 Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class InlineResponse20096 implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'inline_response_200_96';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'next_page_token' => 'string',
        'page_size' => 'int',
        'total_records' => 'int',
        'blocked_list' => '\Swagger\Client\Model\InlineResponse20096BlockedList[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'next_page_token' => null,
        'page_size' => null,
        'total_records' => null,
        'blocked_list' => null
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
        'next_page_token' => 'next_page_token',
        'page_size' => 'page_size',
        'total_records' => 'total_records',
        'blocked_list' => 'blocked_list'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'next_page_token' => 'setNextPageToken',
        'page_size' => 'setPageSize',
        'total_records' => 'setTotalRecords',
        'blocked_list' => 'setBlockedList'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'next_page_token' => 'getNextPageToken',
        'page_size' => 'getPageSize',
        'total_records' => 'getTotalRecords',
        'blocked_list' => 'getBlockedList'
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
        $this->container['next_page_token'] = isset($data['next_page_token']) ? $data['next_page_token'] : null;
        $this->container['page_size'] = isset($data['page_size']) ? $data['page_size'] : null;
        $this->container['total_records'] = isset($data['total_records']) ? $data['total_records'] : null;
        $this->container['blocked_list'] = isset($data['blocked_list']) ? $data['blocked_list'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if (!is_null($this->container['page_size']) && ($this->container['page_size'] > 100)) {
            $invalidProperties[] = "invalid value for 'page_size', must be smaller than or equal to 100.";
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
     * Gets next_page_token
     *
     * @return string
     */
    public function getNextPageToken()
    {
        return $this->container['next_page_token'];
    }

    /**
     * Sets next_page_token
     *
     * @param string $next_page_token The next page token is used to paginate through large result sets. A next page token will be returned whenever the set of available results exceeds the current page size. The expiration period for this token is 15 minutes.
     *
     * @return $this
     */
    public function setNextPageToken($next_page_token)
    {
        $this->container['next_page_token'] = $next_page_token;

        return $this;
    }

    /**
     * Gets page_size
     *
     * @return int
     */
    public function getPageSize()
    {
        return $this->container['page_size'];
    }

    /**
     * Sets page_size
     *
     * @param int $page_size The total number of records returned from a single API call.
     *
     * @return $this
     */
    public function setPageSize($page_size)
    {

        if (!is_null($page_size) && ($page_size > 100)) {
            throw new \InvalidArgumentException('invalid value for $page_size when calling InlineResponse20096., must be smaller than or equal to 100.');
        }

        $this->container['page_size'] = $page_size;

        return $this;
    }

    /**
     * Gets total_records
     *
     * @return int
     */
    public function getTotalRecords()
    {
        return $this->container['total_records'];
    }

    /**
     * Sets total_records
     *
     * @param int $total_records The total number of records found for this query.
     *
     * @return $this
     */
    public function setTotalRecords($total_records)
    {
        $this->container['total_records'] = $total_records;

        return $this;
    }

    /**
     * Gets blocked_list
     *
     * @return \Swagger\Client\Model\InlineResponse20096BlockedList[]
     */
    public function getBlockedList()
    {
        return $this->container['blocked_list'];
    }

    /**
     * Sets blocked_list
     *
     * @param \Swagger\Client\Model\InlineResponse20096BlockedList[] $blocked_list blocked_list
     *
     * @return $this
     */
    public function setBlockedList($blocked_list)
    {
        $this->container['blocked_list'] = $blocked_list;

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


