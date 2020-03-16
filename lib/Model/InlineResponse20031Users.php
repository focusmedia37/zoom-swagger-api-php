<?php
/**
 * InlineResponse20031Users
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
 * InlineResponse20031Users Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class InlineResponse20031Users implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'inline_response_200_31_users';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'user_id' => 'string',
        'user_name' => 'string',
        'email' => 'string',
        'total_send' => 'int',
        'total_receive' => 'int',
        'group_send' => 'int',
        'group_receive' => 'int',
        'calls_send' => 'int',
        'calls_receive' => 'int',
        'files_send' => 'int',
        'files_receive' => 'int',
        'images_send' => 'int',
        'images_receive' => 'int',
        'voice_send' => 'int',
        'voice_receive' => 'int',
        'videos_send' => 'int',
        'videos_receive' => 'int',
        'emoji_send' => 'int',
        'emoji_receive' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'user_id' => null,
        'user_name' => null,
        'email' => 'email',
        'total_send' => null,
        'total_receive' => null,
        'group_send' => null,
        'group_receive' => null,
        'calls_send' => null,
        'calls_receive' => null,
        'files_send' => null,
        'files_receive' => null,
        'images_send' => null,
        'images_receive' => null,
        'voice_send' => null,
        'voice_receive' => null,
        'videos_send' => null,
        'videos_receive' => null,
        'emoji_send' => null,
        'emoji_receive' => null
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
        'user_id' => 'user_id',
        'user_name' => 'user_name',
        'email' => 'email',
        'total_send' => 'total_send',
        'total_receive' => 'total_receive',
        'group_send' => 'group_send',
        'group_receive' => 'group_receive',
        'calls_send' => 'calls_send',
        'calls_receive' => 'calls_receive',
        'files_send' => 'files_send',
        'files_receive' => 'files_receive',
        'images_send' => 'images_send',
        'images_receive' => 'images_receive',
        'voice_send' => 'voice_send',
        'voice_receive' => 'voice_receive',
        'videos_send' => 'videos_send',
        'videos_receive' => 'videos_receive',
        'emoji_send' => 'emoji_send',
        'emoji_receive' => 'emoji_receive'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'user_id' => 'setUserId',
        'user_name' => 'setUserName',
        'email' => 'setEmail',
        'total_send' => 'setTotalSend',
        'total_receive' => 'setTotalReceive',
        'group_send' => 'setGroupSend',
        'group_receive' => 'setGroupReceive',
        'calls_send' => 'setCallsSend',
        'calls_receive' => 'setCallsReceive',
        'files_send' => 'setFilesSend',
        'files_receive' => 'setFilesReceive',
        'images_send' => 'setImagesSend',
        'images_receive' => 'setImagesReceive',
        'voice_send' => 'setVoiceSend',
        'voice_receive' => 'setVoiceReceive',
        'videos_send' => 'setVideosSend',
        'videos_receive' => 'setVideosReceive',
        'emoji_send' => 'setEmojiSend',
        'emoji_receive' => 'setEmojiReceive'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'user_id' => 'getUserId',
        'user_name' => 'getUserName',
        'email' => 'getEmail',
        'total_send' => 'getTotalSend',
        'total_receive' => 'getTotalReceive',
        'group_send' => 'getGroupSend',
        'group_receive' => 'getGroupReceive',
        'calls_send' => 'getCallsSend',
        'calls_receive' => 'getCallsReceive',
        'files_send' => 'getFilesSend',
        'files_receive' => 'getFilesReceive',
        'images_send' => 'getImagesSend',
        'images_receive' => 'getImagesReceive',
        'voice_send' => 'getVoiceSend',
        'voice_receive' => 'getVoiceReceive',
        'videos_send' => 'getVideosSend',
        'videos_receive' => 'getVideosReceive',
        'emoji_send' => 'getEmojiSend',
        'emoji_receive' => 'getEmojiReceive'
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
        $this->container['user_id'] = isset($data['user_id']) ? $data['user_id'] : null;
        $this->container['user_name'] = isset($data['user_name']) ? $data['user_name'] : null;
        $this->container['email'] = isset($data['email']) ? $data['email'] : null;
        $this->container['total_send'] = isset($data['total_send']) ? $data['total_send'] : null;
        $this->container['total_receive'] = isset($data['total_receive']) ? $data['total_receive'] : null;
        $this->container['group_send'] = isset($data['group_send']) ? $data['group_send'] : null;
        $this->container['group_receive'] = isset($data['group_receive']) ? $data['group_receive'] : null;
        $this->container['calls_send'] = isset($data['calls_send']) ? $data['calls_send'] : null;
        $this->container['calls_receive'] = isset($data['calls_receive']) ? $data['calls_receive'] : null;
        $this->container['files_send'] = isset($data['files_send']) ? $data['files_send'] : null;
        $this->container['files_receive'] = isset($data['files_receive']) ? $data['files_receive'] : null;
        $this->container['images_send'] = isset($data['images_send']) ? $data['images_send'] : null;
        $this->container['images_receive'] = isset($data['images_receive']) ? $data['images_receive'] : null;
        $this->container['voice_send'] = isset($data['voice_send']) ? $data['voice_send'] : null;
        $this->container['voice_receive'] = isset($data['voice_receive']) ? $data['voice_receive'] : null;
        $this->container['videos_send'] = isset($data['videos_send']) ? $data['videos_send'] : null;
        $this->container['videos_receive'] = isset($data['videos_receive']) ? $data['videos_receive'] : null;
        $this->container['emoji_send'] = isset($data['emoji_send']) ? $data['emoji_send'] : null;
        $this->container['emoji_receive'] = isset($data['emoji_receive']) ? $data['emoji_receive'] : null;
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
     * Gets user_id
     *
     * @return string
     */
    public function getUserId()
    {
        return $this->container['user_id'];
    }

    /**
     * Sets user_id
     *
     * @param string $user_id User ID.
     *
     * @return $this
     */
    public function setUserId($user_id)
    {
        $this->container['user_id'] = $user_id;

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
     * @param string $user_name User display name.
     *
     * @return $this
     */
    public function setUserName($user_name)
    {
        $this->container['user_name'] = $user_name;

        return $this;
    }

    /**
     * Gets email
     *
     * @return string
     */
    public function getEmail()
    {
        return $this->container['email'];
    }

    /**
     * Sets email
     *
     * @param string $email User email.
     *
     * @return $this
     */
    public function setEmail($email)
    {
        $this->container['email'] = $email;

        return $this;
    }

    /**
     * Gets total_send
     *
     * @return int
     */
    public function getTotalSend()
    {
        return $this->container['total_send'];
    }

    /**
     * Sets total_send
     *
     * @param int $total_send Total number of messages sent by the user.
     *
     * @return $this
     */
    public function setTotalSend($total_send)
    {
        $this->container['total_send'] = $total_send;

        return $this;
    }

    /**
     * Gets total_receive
     *
     * @return int
     */
    public function getTotalReceive()
    {
        return $this->container['total_receive'];
    }

    /**
     * Sets total_receive
     *
     * @param int $total_receive Total number of messages received by the user.
     *
     * @return $this
     */
    public function setTotalReceive($total_receive)
    {
        $this->container['total_receive'] = $total_receive;

        return $this;
    }

    /**
     * Gets group_send
     *
     * @return int
     */
    public function getGroupSend()
    {
        return $this->container['group_send'];
    }

    /**
     * Sets group_send
     *
     * @param int $group_send Total number of messages sent by the user in channels.
     *
     * @return $this
     */
    public function setGroupSend($group_send)
    {
        $this->container['group_send'] = $group_send;

        return $this;
    }

    /**
     * Gets group_receive
     *
     * @return int
     */
    public function getGroupReceive()
    {
        return $this->container['group_receive'];
    }

    /**
     * Sets group_receive
     *
     * @param int $group_receive Total number of messages received by the user in channels.
     *
     * @return $this
     */
    public function setGroupReceive($group_receive)
    {
        $this->container['group_receive'] = $group_receive;

        return $this;
    }

    /**
     * Gets calls_send
     *
     * @return int
     */
    public function getCallsSend()
    {
        return $this->container['calls_send'];
    }

    /**
     * Sets calls_send
     *
     * @param int $calls_send Total number of instant meeting calls made by the user.
     *
     * @return $this
     */
    public function setCallsSend($calls_send)
    {
        $this->container['calls_send'] = $calls_send;

        return $this;
    }

    /**
     * Gets calls_receive
     *
     * @return int
     */
    public function getCallsReceive()
    {
        return $this->container['calls_receive'];
    }

    /**
     * Sets calls_receive
     *
     * @param int $calls_receive Total number of instant meeting calls received by the user.
     *
     * @return $this
     */
    public function setCallsReceive($calls_receive)
    {
        $this->container['calls_receive'] = $calls_receive;

        return $this;
    }

    /**
     * Gets files_send
     *
     * @return int
     */
    public function getFilesSend()
    {
        return $this->container['files_send'];
    }

    /**
     * Sets files_send
     *
     * @param int $files_send Total number of files sent by the user.
     *
     * @return $this
     */
    public function setFilesSend($files_send)
    {
        $this->container['files_send'] = $files_send;

        return $this;
    }

    /**
     * Gets files_receive
     *
     * @return int
     */
    public function getFilesReceive()
    {
        return $this->container['files_receive'];
    }

    /**
     * Sets files_receive
     *
     * @param int $files_receive Total number of files received by the user.
     *
     * @return $this
     */
    public function setFilesReceive($files_receive)
    {
        $this->container['files_receive'] = $files_receive;

        return $this;
    }

    /**
     * Gets images_send
     *
     * @return int
     */
    public function getImagesSend()
    {
        return $this->container['images_send'];
    }

    /**
     * Sets images_send
     *
     * @param int $images_send Total number of images sent by the user.
     *
     * @return $this
     */
    public function setImagesSend($images_send)
    {
        $this->container['images_send'] = $images_send;

        return $this;
    }

    /**
     * Gets images_receive
     *
     * @return int
     */
    public function getImagesReceive()
    {
        return $this->container['images_receive'];
    }

    /**
     * Sets images_receive
     *
     * @param int $images_receive Total number of images received by the user.
     *
     * @return $this
     */
    public function setImagesReceive($images_receive)
    {
        $this->container['images_receive'] = $images_receive;

        return $this;
    }

    /**
     * Gets voice_send
     *
     * @return int
     */
    public function getVoiceSend()
    {
        return $this->container['voice_send'];
    }

    /**
     * Sets voice_send
     *
     * @param int $voice_send Total number of voice files sent by the user.
     *
     * @return $this
     */
    public function setVoiceSend($voice_send)
    {
        $this->container['voice_send'] = $voice_send;

        return $this;
    }

    /**
     * Gets voice_receive
     *
     * @return int
     */
    public function getVoiceReceive()
    {
        return $this->container['voice_receive'];
    }

    /**
     * Sets voice_receive
     *
     * @param int $voice_receive Total number of voice files received by the user.
     *
     * @return $this
     */
    public function setVoiceReceive($voice_receive)
    {
        $this->container['voice_receive'] = $voice_receive;

        return $this;
    }

    /**
     * Gets videos_send
     *
     * @return int
     */
    public function getVideosSend()
    {
        return $this->container['videos_send'];
    }

    /**
     * Sets videos_send
     *
     * @param int $videos_send Total number of video files sent by the user.
     *
     * @return $this
     */
    public function setVideosSend($videos_send)
    {
        $this->container['videos_send'] = $videos_send;

        return $this;
    }

    /**
     * Gets videos_receive
     *
     * @return int
     */
    public function getVideosReceive()
    {
        return $this->container['videos_receive'];
    }

    /**
     * Sets videos_receive
     *
     * @param int $videos_receive Total number of video files received by the user.
     *
     * @return $this
     */
    public function setVideosReceive($videos_receive)
    {
        $this->container['videos_receive'] = $videos_receive;

        return $this;
    }

    /**
     * Gets emoji_send
     *
     * @return int
     */
    public function getEmojiSend()
    {
        return $this->container['emoji_send'];
    }

    /**
     * Sets emoji_send
     *
     * @param int $emoji_send Total number of emojis sent by the user.
     *
     * @return $this
     */
    public function setEmojiSend($emoji_send)
    {
        $this->container['emoji_send'] = $emoji_send;

        return $this;
    }

    /**
     * Gets emoji_receive
     *
     * @return int
     */
    public function getEmojiReceive()
    {
        return $this->container['emoji_receive'];
    }

    /**
     * Sets emoji_receive
     *
     * @param int $emoji_receive Total number of emojis received by the user.
     *
     * @return $this
     */
    public function setEmojiReceive($emoji_receive)
    {
        $this->container['emoji_receive'] = $emoji_receive;

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


