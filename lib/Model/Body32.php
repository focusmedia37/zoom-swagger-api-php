<?php
/**
 * Body32
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
 * Body32 Class Doc Comment
 *
 * @category Class
 * @description The user update object represents a user on Zoom.
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class Body32 implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'body_32';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'first_name' => 'string',
        'last_name' => 'string',
        'type' => 'int',
        'pmi' => 'int',
        'use_pmi' => 'bool',
        'timezone' => 'string',
        'language' => 'string',
        'dept' => 'string',
        'vanity_name' => 'string',
        'host_key' => 'string',
        'cms_user_id' => 'string',
        'job_title' => 'string',
        'company' => 'string',
        'location' => 'string',
        'phone_number' => 'string',
        'phone_country' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'first_name' => null,
        'last_name' => null,
        'type' => null,
        'pmi' => null,
        'use_pmi' => null,
        'timezone' => null,
        'language' => null,
        'dept' => null,
        'vanity_name' => null,
        'host_key' => null,
        'cms_user_id' => null,
        'job_title' => null,
        'company' => null,
        'location' => null,
        'phone_number' => null,
        'phone_country' => null
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
        'first_name' => 'first_name',
        'last_name' => 'last_name',
        'type' => 'type',
        'pmi' => 'pmi',
        'use_pmi' => 'use_pmi',
        'timezone' => 'timezone',
        'language' => 'language',
        'dept' => 'dept',
        'vanity_name' => 'vanity_name',
        'host_key' => 'host_key',
        'cms_user_id' => 'cms_user_id',
        'job_title' => 'job_title',
        'company' => 'company',
        'location' => 'location',
        'phone_number' => 'phone_number',
        'phone_country' => 'phone_country'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'first_name' => 'setFirstName',
        'last_name' => 'setLastName',
        'type' => 'setType',
        'pmi' => 'setPmi',
        'use_pmi' => 'setUsePmi',
        'timezone' => 'setTimezone',
        'language' => 'setLanguage',
        'dept' => 'setDept',
        'vanity_name' => 'setVanityName',
        'host_key' => 'setHostKey',
        'cms_user_id' => 'setCmsUserId',
        'job_title' => 'setJobTitle',
        'company' => 'setCompany',
        'location' => 'setLocation',
        'phone_number' => 'setPhoneNumber',
        'phone_country' => 'setPhoneCountry'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'first_name' => 'getFirstName',
        'last_name' => 'getLastName',
        'type' => 'getType',
        'pmi' => 'getPmi',
        'use_pmi' => 'getUsePmi',
        'timezone' => 'getTimezone',
        'language' => 'getLanguage',
        'dept' => 'getDept',
        'vanity_name' => 'getVanityName',
        'host_key' => 'getHostKey',
        'cms_user_id' => 'getCmsUserId',
        'job_title' => 'getJobTitle',
        'company' => 'getCompany',
        'location' => 'getLocation',
        'phone_number' => 'getPhoneNumber',
        'phone_country' => 'getPhoneCountry'
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
        $this->container['first_name'] = isset($data['first_name']) ? $data['first_name'] : null;
        $this->container['last_name'] = isset($data['last_name']) ? $data['last_name'] : null;
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['pmi'] = isset($data['pmi']) ? $data['pmi'] : null;
        $this->container['use_pmi'] = isset($data['use_pmi']) ? $data['use_pmi'] : false;
        $this->container['timezone'] = isset($data['timezone']) ? $data['timezone'] : null;
        $this->container['language'] = isset($data['language']) ? $data['language'] : null;
        $this->container['dept'] = isset($data['dept']) ? $data['dept'] : null;
        $this->container['vanity_name'] = isset($data['vanity_name']) ? $data['vanity_name'] : null;
        $this->container['host_key'] = isset($data['host_key']) ? $data['host_key'] : null;
        $this->container['cms_user_id'] = isset($data['cms_user_id']) ? $data['cms_user_id'] : null;
        $this->container['job_title'] = isset($data['job_title']) ? $data['job_title'] : null;
        $this->container['company'] = isset($data['company']) ? $data['company'] : null;
        $this->container['location'] = isset($data['location']) ? $data['location'] : null;
        $this->container['phone_number'] = isset($data['phone_number']) ? $data['phone_number'] : null;
        $this->container['phone_country'] = isset($data['phone_country']) ? $data['phone_country'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if (!is_null($this->container['first_name']) && (mb_strlen($this->container['first_name']) > 64)) {
            $invalidProperties[] = "invalid value for 'first_name', the character length must be smaller than or equal to 64.";
        }

        if (!is_null($this->container['last_name']) && (mb_strlen($this->container['last_name']) > 64)) {
            $invalidProperties[] = "invalid value for 'last_name', the character length must be smaller than or equal to 64.";
        }

        if (!is_null($this->container['host_key']) && (mb_strlen($this->container['host_key']) > 10)) {
            $invalidProperties[] = "invalid value for 'host_key', the character length must be smaller than or equal to 10.";
        }

        if (!is_null($this->container['host_key']) && (mb_strlen($this->container['host_key']) < 6)) {
            $invalidProperties[] = "invalid value for 'host_key', the character length must be bigger than or equal to 6.";
        }

        if (!is_null($this->container['job_title']) && (mb_strlen($this->container['job_title']) > 128)) {
            $invalidProperties[] = "invalid value for 'job_title', the character length must be smaller than or equal to 128.";
        }

        if (!is_null($this->container['company']) && (mb_strlen($this->container['company']) > 255)) {
            $invalidProperties[] = "invalid value for 'company', the character length must be smaller than or equal to 255.";
        }

        if (!is_null($this->container['location']) && (mb_strlen($this->container['location']) > 256)) {
            $invalidProperties[] = "invalid value for 'location', the character length must be smaller than or equal to 256.";
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
     * Gets first_name
     *
     * @return string
     */
    public function getFirstName()
    {
        return $this->container['first_name'];
    }

    /**
     * Sets first_name
     *
     * @param string $first_name User's first name. Cannot contain more than 5 Chinese characters.
     *
     * @return $this
     */
    public function setFirstName($first_name)
    {
        if (!is_null($first_name) && (mb_strlen($first_name) > 64)) {
            throw new \InvalidArgumentException('invalid length for $first_name when calling Body32., must be smaller than or equal to 64.');
        }

        $this->container['first_name'] = $first_name;

        return $this;
    }

    /**
     * Gets last_name
     *
     * @return string
     */
    public function getLastName()
    {
        return $this->container['last_name'];
    }

    /**
     * Sets last_name
     *
     * @param string $last_name User's last name. Cannot contain more than 5 Chinese characters.
     *
     * @return $this
     */
    public function setLastName($last_name)
    {
        if (!is_null($last_name) && (mb_strlen($last_name) > 64)) {
            throw new \InvalidArgumentException('invalid length for $last_name when calling Body32., must be smaller than or equal to 64.');
        }

        $this->container['last_name'] = $last_name;

        return $this;
    }

    /**
     * Gets type
     *
     * @return int
     */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
     * Sets type
     *
     * @param int $type User types:<br>`1` - Basic.<br>`2` - Licensed.<br>`3` - On-prem.
     *
     * @return $this
     */
    public function setType($type)
    {
        $this->container['type'] = $type;

        return $this;
    }

    /**
     * Gets pmi
     *
     * @return int
     */
    public function getPmi()
    {
        return $this->container['pmi'];
    }

    /**
     * Sets pmi
     *
     * @param int $pmi Personal meeting ID: length must be 10.
     *
     * @return $this
     */
    public function setPmi($pmi)
    {
        $this->container['pmi'] = $pmi;

        return $this;
    }

    /**
     * Gets use_pmi
     *
     * @return bool
     */
    public function getUsePmi()
    {
        return $this->container['use_pmi'];
    }

    /**
     * Sets use_pmi
     *
     * @param bool $use_pmi Use Personal Meeting ID for instant meetings.
     *
     * @return $this
     */
    public function setUsePmi($use_pmi)
    {
        $this->container['use_pmi'] = $use_pmi;

        return $this;
    }

    /**
     * Gets timezone
     *
     * @return string
     */
    public function getTimezone()
    {
        return $this->container['timezone'];
    }

    /**
     * Sets timezone
     *
     * @param string $timezone The time zone ID for a user profile. For this parameter value please refer to the ID value in the [timezone](https://marketplace.zoom.us/docs/api-reference/other-references/abbreviation-lists#timezones) list.
     *
     * @return $this
     */
    public function setTimezone($timezone)
    {
        $this->container['timezone'] = $timezone;

        return $this;
    }

    /**
     * Gets language
     *
     * @return string
     */
    public function getLanguage()
    {
        return $this->container['language'];
    }

    /**
     * Sets language
     *
     * @param string $language language
     *
     * @return $this
     */
    public function setLanguage($language)
    {
        $this->container['language'] = $language;

        return $this;
    }

    /**
     * Gets dept
     *
     * @return string
     */
    public function getDept()
    {
        return $this->container['dept'];
    }

    /**
     * Sets dept
     *
     * @param string $dept Department for user profile: use for report.
     *
     * @return $this
     */
    public function setDept($dept)
    {
        $this->container['dept'] = $dept;

        return $this;
    }

    /**
     * Gets vanity_name
     *
     * @return string
     */
    public function getVanityName()
    {
        return $this->container['vanity_name'];
    }

    /**
     * Sets vanity_name
     *
     * @param string $vanity_name Personal meeting room name.
     *
     * @return $this
     */
    public function setVanityName($vanity_name)
    {
        $this->container['vanity_name'] = $vanity_name;

        return $this;
    }

    /**
     * Gets host_key
     *
     * @return string
     */
    public function getHostKey()
    {
        return $this->container['host_key'];
    }

    /**
     * Sets host_key
     *
     * @param string $host_key Host key. It should be a 6-10 digit number.
     *
     * @return $this
     */
    public function setHostKey($host_key)
    {
        if (!is_null($host_key) && (mb_strlen($host_key) > 10)) {
            throw new \InvalidArgumentException('invalid length for $host_key when calling Body32., must be smaller than or equal to 10.');
        }
        if (!is_null($host_key) && (mb_strlen($host_key) < 6)) {
            throw new \InvalidArgumentException('invalid length for $host_key when calling Body32., must be bigger than or equal to 6.');
        }

        $this->container['host_key'] = $host_key;

        return $this;
    }

    /**
     * Gets cms_user_id
     *
     * @return string
     */
    public function getCmsUserId()
    {
        return $this->container['cms_user_id'];
    }

    /**
     * Sets cms_user_id
     *
     * @param string $cms_user_id Kaltura user ID.
     *
     * @return $this
     */
    public function setCmsUserId($cms_user_id)
    {
        $this->container['cms_user_id'] = $cms_user_id;

        return $this;
    }

    /**
     * Gets job_title
     *
     * @return string
     */
    public function getJobTitle()
    {
        return $this->container['job_title'];
    }

    /**
     * Sets job_title
     *
     * @param string $job_title User's job title.
     *
     * @return $this
     */
    public function setJobTitle($job_title)
    {
        if (!is_null($job_title) && (mb_strlen($job_title) > 128)) {
            throw new \InvalidArgumentException('invalid length for $job_title when calling Body32., must be smaller than or equal to 128.');
        }

        $this->container['job_title'] = $job_title;

        return $this;
    }

    /**
     * Gets company
     *
     * @return string
     */
    public function getCompany()
    {
        return $this->container['company'];
    }

    /**
     * Sets company
     *
     * @param string $company User's company.
     *
     * @return $this
     */
    public function setCompany($company)
    {
        if (!is_null($company) && (mb_strlen($company) > 255)) {
            throw new \InvalidArgumentException('invalid length for $company when calling Body32., must be smaller than or equal to 255.');
        }

        $this->container['company'] = $company;

        return $this;
    }

    /**
     * Gets location
     *
     * @return string
     */
    public function getLocation()
    {
        return $this->container['location'];
    }

    /**
     * Sets location
     *
     * @param string $location User's location.
     *
     * @return $this
     */
    public function setLocation($location)
    {
        if (!is_null($location) && (mb_strlen($location) > 256)) {
            throw new \InvalidArgumentException('invalid length for $location when calling Body32., must be smaller than or equal to 256.');
        }

        $this->container['location'] = $location;

        return $this;
    }

    /**
     * Gets phone_number
     *
     * @return string
     */
    public function getPhoneNumber()
    {
        return $this->container['phone_number'];
    }

    /**
     * Sets phone_number
     *
     * @param string $phone_number Phone number of the user. To update a phone number, you must also provide the `phone_country` field.
     *
     * @return $this
     */
    public function setPhoneNumber($phone_number)
    {
        $this->container['phone_number'] = $phone_number;

        return $this;
    }

    /**
     * Gets phone_country
     *
     * @return string
     */
    public function getPhoneCountry()
    {
        return $this->container['phone_country'];
    }

    /**
     * Sets phone_country
     *
     * @param string $phone_country [Country ID](https://marketplace.zoom.us/docs/api-reference/other-references/abbreviation-lists#countries) of the phone number. For example, if the phone number provided in the `phone_number` field is a Brazil based number, the value of the `phone_country` field should be `BR`.
     *
     * @return $this
     */
    public function setPhoneCountry($phone_country)
    {
        $this->container['phone_country'] = $phone_country;

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


