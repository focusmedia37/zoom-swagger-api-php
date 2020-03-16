<?php
/**
 * InlineResponse20044
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
 * InlineResponse20044 Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class InlineResponse20044 implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'inline_response_200_44';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'tsp_provider' => 'string',
        'enable' => 'bool',
        'dial_in_numbers' => '\Swagger\Client\Model\InlineResponse20044DialInNumbers[]',
        'tsp_enabled' => 'bool',
        'master_account_setting_extended' => 'bool',
        'modify_credential_forbidden' => 'bool',
        'dial_in_number_unrestricted' => 'bool',
        'tsp_bridge' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'tsp_provider' => null,
        'enable' => null,
        'dial_in_numbers' => null,
        'tsp_enabled' => null,
        'master_account_setting_extended' => null,
        'modify_credential_forbidden' => null,
        'dial_in_number_unrestricted' => null,
        'tsp_bridge' => null
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
        'tsp_provider' => 'tsp_provider',
        'enable' => 'enable',
        'dial_in_numbers' => 'dial_in_numbers',
        'tsp_enabled' => 'tsp_enabled',
        'master_account_setting_extended' => 'master_account_setting_extended',
        'modify_credential_forbidden' => 'modify_credential_forbidden',
        'dial_in_number_unrestricted' => 'dial_in_number_unrestricted',
        'tsp_bridge' => 'tsp_bridge'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'tsp_provider' => 'setTspProvider',
        'enable' => 'setEnable',
        'dial_in_numbers' => 'setDialInNumbers',
        'tsp_enabled' => 'setTspEnabled',
        'master_account_setting_extended' => 'setMasterAccountSettingExtended',
        'modify_credential_forbidden' => 'setModifyCredentialForbidden',
        'dial_in_number_unrestricted' => 'setDialInNumberUnrestricted',
        'tsp_bridge' => 'setTspBridge'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'tsp_provider' => 'getTspProvider',
        'enable' => 'getEnable',
        'dial_in_numbers' => 'getDialInNumbers',
        'tsp_enabled' => 'getTspEnabled',
        'master_account_setting_extended' => 'getMasterAccountSettingExtended',
        'modify_credential_forbidden' => 'getModifyCredentialForbidden',
        'dial_in_number_unrestricted' => 'getDialInNumberUnrestricted',
        'tsp_bridge' => 'getTspBridge'
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

    const TSP_BRIDGE_US_TSP_TB = 'US_TSP_TB';
    const TSP_BRIDGE_EU_TSP_TB = 'EU_TSP_TB';
    

    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getTspBridgeAllowableValues()
    {
        return [
            self::TSP_BRIDGE_US_TSP_TB,
            self::TSP_BRIDGE_EU_TSP_TB,
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
        $this->container['tsp_provider'] = isset($data['tsp_provider']) ? $data['tsp_provider'] : null;
        $this->container['enable'] = isset($data['enable']) ? $data['enable'] : null;
        $this->container['dial_in_numbers'] = isset($data['dial_in_numbers']) ? $data['dial_in_numbers'] : null;
        $this->container['tsp_enabled'] = isset($data['tsp_enabled']) ? $data['tsp_enabled'] : null;
        $this->container['master_account_setting_extended'] = isset($data['master_account_setting_extended']) ? $data['master_account_setting_extended'] : null;
        $this->container['modify_credential_forbidden'] = isset($data['modify_credential_forbidden']) ? $data['modify_credential_forbidden'] : null;
        $this->container['dial_in_number_unrestricted'] = isset($data['dial_in_number_unrestricted']) ? $data['dial_in_number_unrestricted'] : null;
        $this->container['tsp_bridge'] = isset($data['tsp_bridge']) ? $data['tsp_bridge'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        $allowedValues = $this->getTspBridgeAllowableValues();
        if (!is_null($this->container['tsp_bridge']) && !in_array($this->container['tsp_bridge'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'tsp_bridge', must be one of '%s'",
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
     * Gets tsp_provider
     *
     * @return string
     */
    public function getTspProvider()
    {
        return $this->container['tsp_provider'];
    }

    /**
     * Sets tsp_provider
     *
     * @param string $tsp_provider Telephony Service Provider.
     *
     * @return $this
     */
    public function setTspProvider($tsp_provider)
    {
        $this->container['tsp_provider'] = $tsp_provider;

        return $this;
    }

    /**
     * Gets enable
     *
     * @return bool
     */
    public function getEnable()
    {
        return $this->container['enable'];
    }

    /**
     * Sets enable
     *
     * @param bool $enable Enable Telephony Service Provider for account users.
     *
     * @return $this
     */
    public function setEnable($enable)
    {
        $this->container['enable'] = $enable;

        return $this;
    }

    /**
     * Gets dial_in_numbers
     *
     * @return \Swagger\Client\Model\InlineResponse20044DialInNumbers[]
     */
    public function getDialInNumbers()
    {
        return $this->container['dial_in_numbers'];
    }

    /**
     * Sets dial_in_numbers
     *
     * @param \Swagger\Client\Model\InlineResponse20044DialInNumbers[] $dial_in_numbers dial_in_numbers
     *
     * @return $this
     */
    public function setDialInNumbers($dial_in_numbers)
    {
        $this->container['dial_in_numbers'] = $dial_in_numbers;

        return $this;
    }

    /**
     * Gets tsp_enabled
     *
     * @return bool
     */
    public function getTspEnabled()
    {
        return $this->container['tsp_enabled'];
    }

    /**
     * Sets tsp_enabled
     *
     * @param bool $tsp_enabled Enable TSP feature for account. This has to be enabled to use any other tsp settings/features.
     *
     * @return $this
     */
    public function setTspEnabled($tsp_enabled)
    {
        $this->container['tsp_enabled'] = $tsp_enabled;

        return $this;
    }

    /**
     * Gets master_account_setting_extended
     *
     * @return bool
     */
    public function getMasterAccountSettingExtended()
    {
        return $this->container['master_account_setting_extended'];
    }

    /**
     * Sets master_account_setting_extended
     *
     * @param bool $master_account_setting_extended For master account, extend its TSP setting to all sub accounts. For sub account, extend TSP setting from master account.
     *
     * @return $this
     */
    public function setMasterAccountSettingExtended($master_account_setting_extended)
    {
        $this->container['master_account_setting_extended'] = $master_account_setting_extended;

        return $this;
    }

    /**
     * Gets modify_credential_forbidden
     *
     * @return bool
     */
    public function getModifyCredentialForbidden()
    {
        return $this->container['modify_credential_forbidden'];
    }

    /**
     * Sets modify_credential_forbidden
     *
     * @param bool $modify_credential_forbidden Control restriction on account users being able to modify their TSP credentials.
     *
     * @return $this
     */
    public function setModifyCredentialForbidden($modify_credential_forbidden)
    {
        $this->container['modify_credential_forbidden'] = $modify_credential_forbidden;

        return $this;
    }

    /**
     * Gets dial_in_number_unrestricted
     *
     * @return bool
     */
    public function getDialInNumberUnrestricted()
    {
        return $this->container['dial_in_number_unrestricted'];
    }

    /**
     * Sets dial_in_number_unrestricted
     *
     * @param bool $dial_in_number_unrestricted Control restriction on account users adding a TSP number outside of account's dial in numbers.
     *
     * @return $this
     */
    public function setDialInNumberUnrestricted($dial_in_number_unrestricted)
    {
        $this->container['dial_in_number_unrestricted'] = $dial_in_number_unrestricted;

        return $this;
    }

    /**
     * Gets tsp_bridge
     *
     * @return string
     */
    public function getTspBridge()
    {
        return $this->container['tsp_bridge'];
    }

    /**
     * Sets tsp_bridge
     *
     * @param string $tsp_bridge Telephony bridge zone
     *
     * @return $this
     */
    public function setTspBridge($tsp_bridge)
    {
        $allowedValues = $this->getTspBridgeAllowableValues();
        if (!is_null($tsp_bridge) && !in_array($tsp_bridge, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'tsp_bridge', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['tsp_bridge'] = $tsp_bridge;

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


