<?php
/**
 * Body1
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
 * Body1 Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class Body1 implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'body_1';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'domain' => 'string',
        'register_server' => 'string',
        'transport_protocol' => 'string',
        'proxy_server' => 'string',
        'register_server2' => 'string',
        'transport_protocol2' => 'string',
        'proxy_server2' => 'string',
        'register_server3' => 'string',
        'transport_protocol3' => 'string',
        'proxy_server3' => 'string',
        'registration_expire_time' => 'int',
        'user_name' => 'string',
        'password' => 'string',
        'authorization_name' => 'string',
        'voice_mail' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'domain' => null,
        'register_server' => null,
        'transport_protocol' => null,
        'proxy_server' => null,
        'register_server2' => null,
        'transport_protocol2' => null,
        'proxy_server2' => null,
        'register_server3' => null,
        'transport_protocol3' => null,
        'proxy_server3' => null,
        'registration_expire_time' => null,
        'user_name' => null,
        'password' => null,
        'authorization_name' => null,
        'voice_mail' => null
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
        'domain' => 'domain',
        'register_server' => 'register_server',
        'transport_protocol' => 'transport_protocol',
        'proxy_server' => 'proxy_server',
        'register_server2' => 'register_server2',
        'transport_protocol2' => 'transport_protocol2',
        'proxy_server2' => 'proxy_server2',
        'register_server3' => 'register_server3',
        'transport_protocol3' => 'transport_protocol3',
        'proxy_server3' => 'proxy_server3',
        'registration_expire_time' => 'registration_expire_time',
        'user_name' => 'user_name',
        'password' => 'password',
        'authorization_name' => 'authorization_name',
        'voice_mail' => 'voice_mail'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'domain' => 'setDomain',
        'register_server' => 'setRegisterServer',
        'transport_protocol' => 'setTransportProtocol',
        'proxy_server' => 'setProxyServer',
        'register_server2' => 'setRegisterServer2',
        'transport_protocol2' => 'setTransportProtocol2',
        'proxy_server2' => 'setProxyServer2',
        'register_server3' => 'setRegisterServer3',
        'transport_protocol3' => 'setTransportProtocol3',
        'proxy_server3' => 'setProxyServer3',
        'registration_expire_time' => 'setRegistrationExpireTime',
        'user_name' => 'setUserName',
        'password' => 'setPassword',
        'authorization_name' => 'setAuthorizationName',
        'voice_mail' => 'setVoiceMail'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'domain' => 'getDomain',
        'register_server' => 'getRegisterServer',
        'transport_protocol' => 'getTransportProtocol',
        'proxy_server' => 'getProxyServer',
        'register_server2' => 'getRegisterServer2',
        'transport_protocol2' => 'getTransportProtocol2',
        'proxy_server2' => 'getProxyServer2',
        'register_server3' => 'getRegisterServer3',
        'transport_protocol3' => 'getTransportProtocol3',
        'proxy_server3' => 'getProxyServer3',
        'registration_expire_time' => 'getRegistrationExpireTime',
        'user_name' => 'getUserName',
        'password' => 'getPassword',
        'authorization_name' => 'getAuthorizationName',
        'voice_mail' => 'getVoiceMail'
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

    const TRANSPORT_PROTOCOL_UDP = 'UDP';
    const TRANSPORT_PROTOCOL_TCP = 'TCP';
    const TRANSPORT_PROTOCOL_TLS = 'TLS';
    const TRANSPORT_PROTOCOL_AUTO = 'AUTO';
    const TRANSPORT_PROTOCOL2_UDP = 'UDP';
    const TRANSPORT_PROTOCOL2_TCP = 'TCP';
    const TRANSPORT_PROTOCOL2_TLS = 'TLS';
    const TRANSPORT_PROTOCOL2_AUTO = 'AUTO';
    const TRANSPORT_PROTOCOL3_UDP = 'UDP';
    const TRANSPORT_PROTOCOL3_TCP = 'TCP';
    const TRANSPORT_PROTOCOL3_TLS = 'TLS';
    const TRANSPORT_PROTOCOL3_AUTO = 'AUTO';
    

    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getTransportProtocolAllowableValues()
    {
        return [
            self::TRANSPORT_PROTOCOL_UDP,
            self::TRANSPORT_PROTOCOL_TCP,
            self::TRANSPORT_PROTOCOL_TLS,
            self::TRANSPORT_PROTOCOL_AUTO,
        ];
    }
    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getTransportProtocol2AllowableValues()
    {
        return [
            self::TRANSPORT_PROTOCOL2_UDP,
            self::TRANSPORT_PROTOCOL2_TCP,
            self::TRANSPORT_PROTOCOL2_TLS,
            self::TRANSPORT_PROTOCOL2_AUTO,
        ];
    }
    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getTransportProtocol3AllowableValues()
    {
        return [
            self::TRANSPORT_PROTOCOL3_UDP,
            self::TRANSPORT_PROTOCOL3_TCP,
            self::TRANSPORT_PROTOCOL3_TLS,
            self::TRANSPORT_PROTOCOL3_AUTO,
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
        $this->container['domain'] = isset($data['domain']) ? $data['domain'] : null;
        $this->container['register_server'] = isset($data['register_server']) ? $data['register_server'] : null;
        $this->container['transport_protocol'] = isset($data['transport_protocol']) ? $data['transport_protocol'] : null;
        $this->container['proxy_server'] = isset($data['proxy_server']) ? $data['proxy_server'] : null;
        $this->container['register_server2'] = isset($data['register_server2']) ? $data['register_server2'] : null;
        $this->container['transport_protocol2'] = isset($data['transport_protocol2']) ? $data['transport_protocol2'] : null;
        $this->container['proxy_server2'] = isset($data['proxy_server2']) ? $data['proxy_server2'] : null;
        $this->container['register_server3'] = isset($data['register_server3']) ? $data['register_server3'] : null;
        $this->container['transport_protocol3'] = isset($data['transport_protocol3']) ? $data['transport_protocol3'] : null;
        $this->container['proxy_server3'] = isset($data['proxy_server3']) ? $data['proxy_server3'] : null;
        $this->container['registration_expire_time'] = isset($data['registration_expire_time']) ? $data['registration_expire_time'] : null;
        $this->container['user_name'] = isset($data['user_name']) ? $data['user_name'] : null;
        $this->container['password'] = isset($data['password']) ? $data['password'] : null;
        $this->container['authorization_name'] = isset($data['authorization_name']) ? $data['authorization_name'] : null;
        $this->container['voice_mail'] = isset($data['voice_mail']) ? $data['voice_mail'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['domain'] === null) {
            $invalidProperties[] = "'domain' can't be null";
        }
        if ((mb_strlen($this->container['domain']) > 64)) {
            $invalidProperties[] = "invalid value for 'domain', the character length must be smaller than or equal to 64.";
        }

        if ($this->container['register_server'] === null) {
            $invalidProperties[] = "'register_server' can't be null";
        }
        $allowedValues = $this->getTransportProtocolAllowableValues();
        if (!is_null($this->container['transport_protocol']) && !in_array($this->container['transport_protocol'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'transport_protocol', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        if ($this->container['proxy_server'] === null) {
            $invalidProperties[] = "'proxy_server' can't be null";
        }
        if ($this->container['register_server2'] === null) {
            $invalidProperties[] = "'register_server2' can't be null";
        }
        $allowedValues = $this->getTransportProtocol2AllowableValues();
        if (!is_null($this->container['transport_protocol2']) && !in_array($this->container['transport_protocol2'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'transport_protocol2', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        if ($this->container['proxy_server2'] === null) {
            $invalidProperties[] = "'proxy_server2' can't be null";
        }
        if ($this->container['register_server3'] === null) {
            $invalidProperties[] = "'register_server3' can't be null";
        }
        $allowedValues = $this->getTransportProtocol3AllowableValues();
        if (!is_null($this->container['transport_protocol3']) && !in_array($this->container['transport_protocol3'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'transport_protocol3', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        if ($this->container['proxy_server3'] === null) {
            $invalidProperties[] = "'proxy_server3' can't be null";
        }
        if (!is_null($this->container['registration_expire_time']) && ($this->container['registration_expire_time'] > 127)) {
            $invalidProperties[] = "invalid value for 'registration_expire_time', must be smaller than or equal to 127.";
        }

        if (!is_null($this->container['registration_expire_time']) && ($this->container['registration_expire_time'] < 1)) {
            $invalidProperties[] = "invalid value for 'registration_expire_time', must be bigger than or equal to 1.";
        }

        if ($this->container['user_name'] === null) {
            $invalidProperties[] = "'user_name' can't be null";
        }
        if ((mb_strlen($this->container['user_name']) > 64)) {
            $invalidProperties[] = "invalid value for 'user_name', the character length must be smaller than or equal to 64.";
        }

        if ($this->container['password'] === null) {
            $invalidProperties[] = "'password' can't be null";
        }
        if ($this->container['authorization_name'] === null) {
            $invalidProperties[] = "'authorization_name' can't be null";
        }
        if ((mb_strlen($this->container['authorization_name']) > 64)) {
            $invalidProperties[] = "invalid value for 'authorization_name', the character length must be smaller than or equal to 64.";
        }

        if ($this->container['voice_mail'] === null) {
            $invalidProperties[] = "'voice_mail' can't be null";
        }
        if ((mb_strlen($this->container['voice_mail']) > 255)) {
            $invalidProperties[] = "invalid value for 'voice_mail', the character length must be smaller than or equal to 255.";
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
     * Gets domain
     *
     * @return string
     */
    public function getDomain()
    {
        return $this->container['domain'];
    }

    /**
     * Sets domain
     *
     * @param string $domain The name or IP address of your provider’s SIP domain. (example: CDC.WEB).
     *
     * @return $this
     */
    public function setDomain($domain)
    {
        if ((mb_strlen($domain) > 64)) {
            throw new \InvalidArgumentException('invalid length for $domain when calling Body1., must be smaller than or equal to 64.');
        }

        $this->container['domain'] = $domain;

        return $this;
    }

    /**
     * Gets register_server
     *
     * @return string
     */
    public function getRegisterServer()
    {
        return $this->container['register_server'];
    }

    /**
     * Sets register_server
     *
     * @param string $register_server IP address of the server that accepts REGISTER requests. Note that if you are using the UDP transport protocol, the default port is 5060. If you are using UDP with a different port number, that port number must be included with the IP address.
     *
     * @return $this
     */
    public function setRegisterServer($register_server)
    {
        $this->container['register_server'] = $register_server;

        return $this;
    }

    /**
     * Gets transport_protocol
     *
     * @return string
     */
    public function getTransportProtocol()
    {
        return $this->container['transport_protocol'];
    }

    /**
     * Sets transport_protocol
     *
     * @param string $transport_protocol Protocols supported by the SIP provider.<br> The value must be either `UDP`, `TCP`, `TLS`, `AUTO`.
     *
     * @return $this
     */
    public function setTransportProtocol($transport_protocol)
    {
        $allowedValues = $this->getTransportProtocolAllowableValues();
        if (!is_null($transport_protocol) && !in_array($transport_protocol, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'transport_protocol', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['transport_protocol'] = $transport_protocol;

        return $this;
    }

    /**
     * Gets proxy_server
     *
     * @return string
     */
    public function getProxyServer()
    {
        return $this->container['proxy_server'];
    }

    /**
     * Sets proxy_server
     *
     * @param string $proxy_server IP address of the proxy server for SIP requests. Note that if you are using the UDP transport protocol, the default port is 5060. If you are using UDP with a different port number, that port number must be included with the IP address. If you are not using a proxy server, this value can be the same as the Register Server.
     *
     * @return $this
     */
    public function setProxyServer($proxy_server)
    {
        $this->container['proxy_server'] = $proxy_server;

        return $this;
    }

    /**
     * Gets register_server2
     *
     * @return string
     */
    public function getRegisterServer2()
    {
        return $this->container['register_server2'];
    }

    /**
     * Sets register_server2
     *
     * @param string $register_server2 IP address of the server that accepts REGISTER requests. Note that if you are using the UDP transport protocol, the default port is 5060. If you are using UDP with a different port number, that port number must be included with the IP address.
     *
     * @return $this
     */
    public function setRegisterServer2($register_server2)
    {
        $this->container['register_server2'] = $register_server2;

        return $this;
    }

    /**
     * Gets transport_protocol2
     *
     * @return string
     */
    public function getTransportProtocol2()
    {
        return $this->container['transport_protocol2'];
    }

    /**
     * Sets transport_protocol2
     *
     * @param string $transport_protocol2 Protocols supported by the SIP provider.<br> The value must be either `UDP`, `TCP`, `TLS`, `AUTO`.
     *
     * @return $this
     */
    public function setTransportProtocol2($transport_protocol2)
    {
        $allowedValues = $this->getTransportProtocol2AllowableValues();
        if (!is_null($transport_protocol2) && !in_array($transport_protocol2, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'transport_protocol2', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['transport_protocol2'] = $transport_protocol2;

        return $this;
    }

    /**
     * Gets proxy_server2
     *
     * @return string
     */
    public function getProxyServer2()
    {
        return $this->container['proxy_server2'];
    }

    /**
     * Sets proxy_server2
     *
     * @param string $proxy_server2 IP address of the proxy server for SIP requests. Note that if you are using the UDP transport protocol, the default port is 5060. If you are using UDP with a different port number, that port number must be included with the IP address. If you are not using a proxy server, this value can be the same as the Register Server.
     *
     * @return $this
     */
    public function setProxyServer2($proxy_server2)
    {
        $this->container['proxy_server2'] = $proxy_server2;

        return $this;
    }

    /**
     * Gets register_server3
     *
     * @return string
     */
    public function getRegisterServer3()
    {
        return $this->container['register_server3'];
    }

    /**
     * Sets register_server3
     *
     * @param string $register_server3 IP address of the server that accepts REGISTER requests. Note that if you are using the UDP transport protocol, the default port is 5060. If you are using UDP with a different port number, that port number must be included with the IP address.
     *
     * @return $this
     */
    public function setRegisterServer3($register_server3)
    {
        $this->container['register_server3'] = $register_server3;

        return $this;
    }

    /**
     * Gets transport_protocol3
     *
     * @return string
     */
    public function getTransportProtocol3()
    {
        return $this->container['transport_protocol3'];
    }

    /**
     * Sets transport_protocol3
     *
     * @param string $transport_protocol3 Protocols supported by the SIP provider.<br> The value must be either `UDP`, `TCP`, `TLS`, `AUTO`.
     *
     * @return $this
     */
    public function setTransportProtocol3($transport_protocol3)
    {
        $allowedValues = $this->getTransportProtocol3AllowableValues();
        if (!is_null($transport_protocol3) && !in_array($transport_protocol3, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'transport_protocol3', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['transport_protocol3'] = $transport_protocol3;

        return $this;
    }

    /**
     * Gets proxy_server3
     *
     * @return string
     */
    public function getProxyServer3()
    {
        return $this->container['proxy_server3'];
    }

    /**
     * Sets proxy_server3
     *
     * @param string $proxy_server3 IP address of the proxy server for SIP requests. Note that if you are using the UDP transport protocol, the default port is 5060. If you are using UDP with a different port number, that port number must be included with the IP address. If you are not using a proxy server, this value can be the same as the Register Server.
     *
     * @return $this
     */
    public function setProxyServer3($proxy_server3)
    {
        $this->container['proxy_server3'] = $proxy_server3;

        return $this;
    }

    /**
     * Gets registration_expire_time
     *
     * @return int
     */
    public function getRegistrationExpireTime()
    {
        return $this->container['registration_expire_time'];
    }

    /**
     * Sets registration_expire_time
     *
     * @param int $registration_expire_time The number of minutes after which the SIP registration of the Zoom client user will expire, and the client will auto register to the SIP server.
     *
     * @return $this
     */
    public function setRegistrationExpireTime($registration_expire_time)
    {

        if (!is_null($registration_expire_time) && ($registration_expire_time > 127)) {
            throw new \InvalidArgumentException('invalid value for $registration_expire_time when calling Body1., must be smaller than or equal to 127.');
        }
        if (!is_null($registration_expire_time) && ($registration_expire_time < 1)) {
            throw new \InvalidArgumentException('invalid value for $registration_expire_time when calling Body1., must be bigger than or equal to 1.');
        }

        $this->container['registration_expire_time'] = $registration_expire_time;

        return $this;
    }

    /**
     * Gets user_name
     *
     * @return string
     */
    public function getUserName()
    {
        return $this->container['user_name'];
    }

    /**
     * Sets user_name
     *
     * @param string $user_name The phone number associated with the user in the SIP account.
     *
     * @return $this
     */
    public function setUserName($user_name)
    {
        if ((mb_strlen($user_name) > 64)) {
            throw new \InvalidArgumentException('invalid length for $user_name when calling Body1., must be smaller than or equal to 64.');
        }

        $this->container['user_name'] = $user_name;

        return $this;
    }

    /**
     * Gets password
     *
     * @return string
     */
    public function getPassword()
    {
        return $this->container['password'];
    }

    /**
     * Sets password
     *
     * @param string $password The password generated for the user in the SIP account.
     *
     * @return $this
     */
    public function setPassword($password)
    {
        $this->container['password'] = $password;

        return $this;
    }

    /**
     * Gets authorization_name
     *
     * @return string
     */
    public function getAuthorizationName()
    {
        return $this->container['authorization_name'];
    }

    /**
     * Sets authorization_name
     *
     * @param string $authorization_name Authorization name of the user  registered for SIP Phone.
     *
     * @return $this
     */
    public function setAuthorizationName($authorization_name)
    {
        if ((mb_strlen($authorization_name) > 64)) {
            throw new \InvalidArgumentException('invalid length for $authorization_name when calling Body1., must be smaller than or equal to 64.');
        }

        $this->container['authorization_name'] = $authorization_name;

        return $this;
    }

    /**
     * Gets voice_mail
     *
     * @return string
     */
    public function getVoiceMail()
    {
        return $this->container['voice_mail'];
    }

    /**
     * Sets voice_mail
     *
     * @param string $voice_mail The number to dial for checking voicemail.
     *
     * @return $this
     */
    public function setVoiceMail($voice_mail)
    {
        if ((mb_strlen($voice_mail) > 255)) {
            throw new \InvalidArgumentException('invalid length for $voice_mail when calling Body1., must be smaller than or equal to 255.');
        }

        $this->container['voice_mail'] = $voice_mail;

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


