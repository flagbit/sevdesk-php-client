<?php
/**
 * ModelSevToken
 *
 * PHP version 5
 *
 * @category Class
 * @package  flagbit\sevdesk\phpclient
 * @author   Swaagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * sevDesk
 *
 * The sevDesk API v1 uses a token authentication.    You need to click on the authorization button (lock symbol) and enter your api-key there.    The token can be found on [https://my.sevdesk.de](https://my.sevdesk.de).    settings-->user-->specific user    # General information    The sevDesk api uses **models** to represent the different categories like **contacts** and **invoices**.    Every time you request such a model from the api, it will return the whole model schema including the unique **model id** and all the other objects and parameters that are included in the model.    Have a look at it in the developer console of your desired browser, especially if you are looking for specific parameters like the model id.    # URL    The basic URL contains four elements. **BaseURL** + **Controller** + **Version** + **Model**: [https://my.sevdesk.de/api/v1/Contact/](https://my.sevdesk.de/api/v1/Contact/)    # Basic Operations    Access a list of models: [https://my.sevdesk.de/api/v1/{Model}/](https://my.sevdesk.de/api/v1/{Model}/)    Access a specific model: [https://my.sevdesk.de/api/v1/{Model}/{id}](https://my.sevdesk.de/api/v1/{Model}/{id})    The **id** of a specific model can usually be found in the **developer console** of your browser or when opening a specific model, in the **url**.    Call a model function: [https://my.sevdesk.de/api/v1/{Model}/{id}/{Function}](https://my.sevdesk.de/api/v1/{Model}/{id}/{Function})    Each operation can be used with different HTTP methods:  * GET - read data  * POST - create data  * PUT - update existing data  * DELETE - delete data    # Useful Parameters    For each request, there are some specific parameters.    **GET Query Parameters**  * **limit** - limits the number of entries returned  * **offset** - set the index where the returned entries should start  * **embed** - embed can be used to get some additional information about a model. For example you can get the addresses of a contact with **embed=addresses**    `[GET]https://my.sevdesk.de/api/v1/Contact/?embed=addresses`    * If there is a need to get more information about the country in the addresses, embed can be extended by **addresses.country**    `[GET]https://my.sevdesk.de/api/v1/Contact/?embed=addresses,addresses.country`    * Some models also contain other models. By default these models are only filled with an id and objectName. If you want to get more information about the nested model you can use embed too.    `[GET]https://my.sevdesk.de/api/v1/Contact/?embed=parent`    * Every model also has specified 'query parameters'. These can be used to filter the results. E.g. all Contacts with a 'Company' in their name    `[GET]https://my.sevdesk.de/api/v1/Contact/?name=Company`    * **countAll** If countAll is set to 1 the total number of entries will be returned additionally  * **orderBy** Is an array that can be filled with objects containing the the properties field and arrangement    `json: orderBy = [{field:'parent' ,arrangement:'desc'},{field:'name' ,arrangement:'asc'}];`    `url: ?orderBy[0][field]=parent&orderBy[0][arrangement]=desc&orderBy[1][field]=name&orderBy[1][arrangement]=asc`
 *
 * OpenAPI spec version: 1.0.0
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 *
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace flagbit\sevdesk\phpclient\Model;

use \ArrayAccess;

/**
 * ModelSevToken Class Doc Comment
 *
 * @category    Class
 * @package     flagbit\sevdesk\phpclient
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class ModelSevToken implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'Model_SevToken';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        '_create' => '\DateTime',
        '_update' => '\DateTime',
        '_user' => 'object',
        '_token' => 'string',
        '_expire' => '\DateTime',
        '_active' => 'bool',
        '_sev_client' => 'object',
        '_ip_address' => 'string',
        '_user_agent' => 'string',
        '_token_type' => 'string',
        '_confirmation_token' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerFormats = [
        '_create' => 'date-time',
        '_update' => 'date-time',
        '_user' => null,
        '_token' => null,
        '_expire' => 'date-time',
        '_active' => null,
        '_sev_client' => null,
        '_ip_address' => null,
        '_user_agent' => null,
        '_token_type' => null,
        '_confirmation_token' => null
    ];

    public static function swaggerTypes()
    {
        return self::$swaggerTypes;
    }

    public static function swaggerFormats()
    {
        return self::$swaggerFormats;
    }

    /**
     * Array of attributes where the key is the local name, and the value is the original name
     * @var string[]
     */
    protected static $attributeMap = [
        '_create' => '_create',
        '_update' => '_update',
        '_user' => '_user',
        '_token' => '_token',
        '_expire' => '_expire',
        '_active' => '_active',
        '_sev_client' => '_sevClient',
        '_ip_address' => '_ipAddress',
        '_user_agent' => '_userAgent',
        '_token_type' => '_tokenType',
        '_confirmation_token' => '_confirmationToken'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        '_create' => 'setCreate',
        '_update' => 'setUpdate',
        '_user' => 'setUser',
        '_token' => 'setToken',
        '_expire' => 'setExpire',
        '_active' => 'setActive',
        '_sev_client' => 'setSevClient',
        '_ip_address' => 'setIpAddress',
        '_user_agent' => 'setUserAgent',
        '_token_type' => 'setTokenType',
        '_confirmation_token' => 'setConfirmationToken'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        '_create' => 'getCreate',
        '_update' => 'getUpdate',
        '_user' => 'getUser',
        '_token' => 'getToken',
        '_expire' => 'getExpire',
        '_active' => 'getActive',
        '_sev_client' => 'getSevClient',
        '_ip_address' => 'getIpAddress',
        '_user_agent' => 'getUserAgent',
        '_token_type' => 'getTokenType',
        '_confirmation_token' => 'getConfirmationToken'
    ];

    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    public static function setters()
    {
        return self::$setters;
    }

    public static function getters()
    {
        return self::$getters;
    }

    const TOKEN_TYPE_LOGIN = 'LOGIN';
    const TOKEN_TYPE_API = 'API';
    const TOKEN_TYPE_SUPPORT = 'SUPPORT';
    

    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public function getTokenTypeAllowableValues()
    {
        return [
            self::TOKEN_TYPE_LOGIN,
            self::TOKEN_TYPE_API,
            self::TOKEN_TYPE_SUPPORT,
        ];
    }
    

    /**
     * Associative array for storing property values
     * @var mixed[]
     */
    protected $container = [];

    /**
     * Constructor
     * @param mixed[] $data Associated array of property values initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->container['_create'] = isset($data['_create']) ? $data['_create'] : null;
        $this->container['_update'] = isset($data['_update']) ? $data['_update'] : null;
        $this->container['_user'] = isset($data['_user']) ? $data['_user'] : null;
        $this->container['_token'] = isset($data['_token']) ? $data['_token'] : null;
        $this->container['_expire'] = isset($data['_expire']) ? $data['_expire'] : null;
        $this->container['_active'] = isset($data['_active']) ? $data['_active'] : null;
        $this->container['_sev_client'] = isset($data['_sev_client']) ? $data['_sev_client'] : null;
        $this->container['_ip_address'] = isset($data['_ip_address']) ? $data['_ip_address'] : null;
        $this->container['_user_agent'] = isset($data['_user_agent']) ? $data['_user_agent'] : null;
        $this->container['_token_type'] = isset($data['_token_type']) ? $data['_token_type'] : null;
        $this->container['_confirmation_token'] = isset($data['_confirmation_token']) ? $data['_confirmation_token'] : null;
    }

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalid_properties = [];

        $allowed_values = $this->getTokenTypeAllowableValues();
        if (!in_array($this->container['_token_type'], $allowed_values)) {
            $invalid_properties[] = sprintf(
                "invalid value for '_token_type', must be one of '%s'",
                implode("', '", $allowed_values)
            );
        }

        return $invalid_properties;
    }

    /**
     * validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properties are valid
     */
    public function valid()
    {

        $allowed_values = $this->getTokenTypeAllowableValues();
        if (!in_array($this->container['_token_type'], $allowed_values)) {
            return false;
        }
        return true;
    }


    /**
     * Gets _create
     * @return \DateTime
     */
    public function getCreate()
    {
        return $this->container['_create'];
    }

    /**
     * Sets _create
     * @param \DateTime $_create date the sevToken was created
     * @return $this
     */
    public function setCreate($_create)
    {
        $this->container['_create'] = $_create;

        return $this;
    }

    /**
     * Gets _update
     * @return \DateTime
     */
    public function getUpdate()
    {
        return $this->container['_update'];
    }

    /**
     * Sets _update
     * @param \DateTime $_update date the sevToken was last updated
     * @return $this
     */
    public function setUpdate($_update)
    {
        $this->container['_update'] = $_update;

        return $this;
    }

    /**
     * Gets _user
     * @return object
     */
    public function getUser()
    {
        return $this->container['_user'];
    }

    /**
     * Sets _user
     * @param object $_user SevUser to whom the sevToken belongs
     * @return $this
     */
    public function setUser($_user)
    {
        $this->container['_user'] = $_user;

        return $this;
    }

    /**
     * Gets _token
     * @return string
     */
    public function getToken()
    {
        return $this->container['_token'];
    }

    /**
     * Sets _token
     * @param string $_token token of the sevUser
     * @return $this
     */
    public function setToken($_token)
    {
        $this->container['_token'] = $_token;

        return $this;
    }

    /**
     * Gets _expire
     * @return \DateTime
     */
    public function getExpire()
    {
        return $this->container['_expire'];
    }

    /**
     * Sets _expire
     * @param \DateTime $_expire expiration date of the token
     * @return $this
     */
    public function setExpire($_expire)
    {
        $this->container['_expire'] = $_expire;

        return $this;
    }

    /**
     * Gets _active
     * @return bool
     */
    public function getActive()
    {
        return $this->container['_active'];
    }

    /**
     * Sets _active
     * @param bool $_active Defines if the token is active
     * @return $this
     */
    public function setActive($_active)
    {
        $this->container['_active'] = $_active;

        return $this;
    }

    /**
     * Gets _sev_client
     * @return object
     */
    public function getSevClient()
    {
        return $this->container['_sev_client'];
    }

    /**
     * Sets _sev_client
     * @param object $_sev_client sevClient is the unique id every customer has and is used in nearly all operations
     * @return $this
     */
    public function setSevClient($_sev_client)
    {
        $this->container['_sev_client'] = $_sev_client;

        return $this;
    }

    /**
     * Gets _ip_address
     * @return string
     */
    public function getIpAddress()
    {
        return $this->container['_ip_address'];
    }

    /**
     * Sets _ip_address
     * @param string $_ip_address Ip address of the user
     * @return $this
     */
    public function setIpAddress($_ip_address)
    {
        $this->container['_ip_address'] = $_ip_address;

        return $this;
    }

    /**
     * Gets _user_agent
     * @return string
     */
    public function getUserAgent()
    {
        return $this->container['_user_agent'];
    }

    /**
     * Sets _user_agent
     * @param string $_user_agent Information about the users system
     * @return $this
     */
    public function setUserAgent($_user_agent)
    {
        $this->container['_user_agent'] = $_user_agent;

        return $this;
    }

    /**
     * Gets _token_type
     * @return string
     */
    public function getTokenType()
    {
        return $this->container['_token_type'];
    }

    /**
     * Sets _token_type
     * @param string $_token_type Type of the token
     * @return $this
     */
    public function setTokenType($_token_type)
    {
        $allowed_values = $this->getTokenTypeAllowableValues();
        if (!is_null($_token_type) && !in_array($_token_type, $allowed_values)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for '_token_type', must be one of '%s'",
                    implode("', '", $allowed_values)
                )
            );
        }
        $this->container['_token_type'] = $_token_type;

        return $this;
    }

    /**
     * Gets _confirmation_token
     * @return string
     */
    public function getConfirmationToken()
    {
        return $this->container['_confirmation_token'];
    }

    /**
     * Sets _confirmation_token
     * @param string $_confirmation_token Confirmation token
     * @return $this
     */
    public function setConfirmationToken($_confirmation_token)
    {
        $this->container['_confirmation_token'] = $_confirmation_token;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     * @param  integer $offset Offset
     * @return boolean
     */
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     * @param  integer $offset Offset
     * @return mixed
     */
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }

    /**
     * Sets value based on offset.
     * @param  integer $offset Offset
     * @param  mixed   $value  Value to be set
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
     * @param  integer $offset Offset
     * @return void
     */
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }

    /**
     * Gets the string presentation of the object
     * @return string
     */
    public function __toString()
    {
        if (defined('JSON_PRETTY_PRINT')) { // use JSON pretty print
            return json_encode(\flagbit\sevdesk\phpclient\ObjectSerializer::sanitizeForSerialization($this), JSON_PRETTY_PRINT);
        }

        return json_encode(\flagbit\sevdesk\phpclient\ObjectSerializer::sanitizeForSerialization($this));
    }
}


