<?php
/**
 * ModelCommunicationWay
 *
 * PHP version 5
 *
 * @category Class
 * @package  isp-serverfarm\sevdesk\php-client
 * @author   Swaagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * sevDesk
 *
 * # Getting started  The sevDesk API v1 uses a token authentication.    You need to click on the authorization button (lock symbol) and enter your api-key there.    The token can be found on [https://my.sevdesk.de](https://my.sevdesk.de).    settings-->user-->specific user    # General information    The sevDesk api uses **models** to represent the different categories like **contacts** and **invoices**.    Every time you request such a model from the api, it will return the whole model schema including the unique **model id** and all the other objects and parameters that are included in the model.    Have a look at it in the developer console of your desired browser, especially if you are looking for specific parameters like the model id.    # URL    The basic URL contains four elements. **BaseURL** + **Controller** + **Version** + **Model**: [https://my.sevdesk.de/api/v1/Contact/](https://my.sevdesk.de/api/v1/Contact/)    # Basic Operations    Access a list of models: [https://my.sevdesk.de/api/v1/{Model}/](https://my.sevdesk.de/api/v1/{Model}/)    Access a specific model: [https://my.sevdesk.de/api/v1/{Model}/{id}](https://my.sevdesk.de/api/v1/{Model}/{id})    The **id** of a specific model can usually be found in the **developer console** of your browser or when opening a specific model, in the **url**.    Call a model function: [https://my.sevdesk.de/api/v1/{Model}/{id}/{Function}](https://my.sevdesk.de/api/v1/{Model}/{id}/{Function})    Each operation can be used with different HTTP methods:  * GET - read data  * POST - create data  * PUT - update existing data  * DELETE - delete data    # Useful Parameters    For each request, there are some specific parameters.    **GET Query Parameters**  * **limit** - limits the number of entries returned  * **offset** - set the index where the returned entries should start  * **embed** - embed can be used to get some additional information about a model. For example you can get the addresses of a contact with **embed=addresses**    `[GET]https://my.sevdesk.de/api/v1/Contact/?embed=addresses`    * If there is a need to get more information about the country in the addresses, embed can be extended by **addresses.country**    `[GET]https://my.sevdesk.de/api/v1/Contact/?embed=addresses,addresses.country`    * Some models also contain other models. By default these models are only filled with an id and objectName. If you want to get more information about the nested model you can use embed too.    `[GET]https://my.sevdesk.de/api/v1/Contact/?embed=parent`    * Every model also has specified 'query parameters'. These can be used to filter the results. E.g. all Contacts with a 'Company' in their name    `[GET]https://my.sevdesk.de/api/v1/Contact/?name=Company`    * **countAll** If countAll is set to 1 the total number of entries will be returned additionally  * **orderBy** Is an array that can be filled with objects containing the the properties field and arrangement    `json: orderBy = [{field:'parent' ,arrangement:'desc'},{field:'name' ,arrangement:'asc'}];`    `url: ?orderBy[0][field]=parent&orderBy[0][arrangement]=desc&orderBy[1][field]=name&orderBy[1][arrangement]=asc`
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

namespace isp-serverfarm\sevdesk\php-client\sevdesk-model;

use \ArrayAccess;

/**
 * ModelCommunicationWay Class Doc Comment
 *
 * @category    Class
 * @package     isp-serverfarm\sevdesk\php-client
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class ModelCommunicationWay implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'Model_CommunicationWay';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        '_create' => '\DateTime',
        '_update' => '\DateTime',
        '_contact' => '\isp-serverfarm\sevdesk\php-client\sevdesk-model\ModelContact',
        '_type' => 'string',
        '_value' => 'string',
        '_key' => '\isp-serverfarm\sevdesk\php-client\sevdesk-model\ModelCommunicationWayKey',
        '_main' => 'bool',
        '_sev_client' => 'object'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerFormats = [
        '_create' => 'date-time',
        '_update' => 'date-time',
        '_contact' => null,
        '_type' => null,
        '_value' => null,
        '_key' => null,
        '_main' => null,
        '_sev_client' => null
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
        '_contact' => '_contact',
        '_type' => '_type',
        '_value' => '_value',
        '_key' => '_key',
        '_main' => '_main',
        '_sev_client' => '_sevClient'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        '_create' => 'setCreate',
        '_update' => 'setUpdate',
        '_contact' => 'setContact',
        '_type' => 'setType',
        '_value' => 'setValue',
        '_key' => 'setKey',
        '_main' => 'setMain',
        '_sev_client' => 'setSevClient'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        '_create' => 'getCreate',
        '_update' => 'getUpdate',
        '_contact' => 'getContact',
        '_type' => 'getType',
        '_value' => 'getValue',
        '_key' => 'getKey',
        '_main' => 'getMain',
        '_sev_client' => 'getSevClient'
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

    const TYPE_EMAIL = 'EMAIL';
    const TYPE_PHONE = 'PHONE';
    const TYPE_WEB = 'WEB';
    const TYPE_MOBILE = 'MOBILE';
    

    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public function getTypeAllowableValues()
    {
        return [
            self::TYPE_EMAIL,
            self::TYPE_PHONE,
            self::TYPE_WEB,
            self::TYPE_MOBILE,
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
        $this->container['_contact'] = isset($data['_contact']) ? $data['_contact'] : null;
        $this->container['_type'] = isset($data['_type']) ? $data['_type'] : null;
        $this->container['_value'] = isset($data['_value']) ? $data['_value'] : null;
        $this->container['_key'] = isset($data['_key']) ? $data['_key'] : null;
        $this->container['_main'] = isset($data['_main']) ? $data['_main'] : null;
        $this->container['_sev_client'] = isset($data['_sev_client']) ? $data['_sev_client'] : null;
    }

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalid_properties = [];

        $allowed_values = $this->getTypeAllowableValues();
        if (!in_array($this->container['_type'], $allowed_values)) {
            $invalid_properties[] = sprintf(
                "invalid value for '_type', must be one of '%s'",
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

        $allowed_values = $this->getTypeAllowableValues();
        if (!in_array($this->container['_type'], $allowed_values)) {
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
     * @param \DateTime $_create date the communication way was created
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
     * @param \DateTime $_update date the communication way was last updated
     * @return $this
     */
    public function setUpdate($_update)
    {
        $this->container['_update'] = $_update;

        return $this;
    }

    /**
     * Gets _contact
     * @return \isp-serverfarm\sevdesk\php-client\sevdesk-model\ModelContact
     */
    public function getContact()
    {
        return $this->container['_contact'];
    }

    /**
     * Sets _contact
     * @param \isp-serverfarm\sevdesk\php-client\sevdesk-model\ModelContact $_contact Contact to which the communication way refers
     * @return $this
     */
    public function setContact($_contact)
    {
        $this->container['_contact'] = $_contact;

        return $this;
    }

    /**
     * Gets _type
     * @return string
     */
    public function getType()
    {
        return $this->container['_type'];
    }

    /**
     * Sets _type
     * @param string $_type type of the communication way
     * @return $this
     */
    public function setType($_type)
    {
        $allowed_values = $this->getTypeAllowableValues();
        if (!is_null($_type) && !in_array($_type, $allowed_values)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for '_type', must be one of '%s'",
                    implode("', '", $allowed_values)
                )
            );
        }
        $this->container['_type'] = $_type;

        return $this;
    }

    /**
     * Gets _value
     * @return string
     */
    public function getValue()
    {
        return $this->container['_value'];
    }

    /**
     * Sets _value
     * @param string $_value value of the communication way
     * @return $this
     */
    public function setValue($_value)
    {
        $this->container['_value'] = $_value;

        return $this;
    }

    /**
     * Gets _key
     * @return \isp-serverfarm\sevdesk\php-client\sevdesk-model\ModelCommunicationWayKey
     */
    public function getKey()
    {
        return $this->container['_key'];
    }

    /**
     * Sets _key
     * @param \isp-serverfarm\sevdesk\php-client\sevdesk-model\ModelCommunicationWayKey $_key the communication way key to which the communication way refers
     * @return $this
     */
    public function setKey($_key)
    {
        $this->container['_key'] = $_key;

        return $this;
    }

    /**
     * Gets _main
     * @return bool
     */
    public function getMain()
    {
        return $this->container['_main'];
    }

    /**
     * Sets _main
     * @param bool $_main 
     * @return $this
     */
    public function setMain($_main)
    {
        $this->container['_main'] = $_main;

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
            return json_encode(\isp-serverfarm\sevdesk\php-client\ObjectSerializer::sanitizeForSerialization($this), JSON_PRETTY_PRINT);
        }

        return json_encode(\isp-serverfarm\sevdesk\php-client\ObjectSerializer::sanitizeForSerialization($this));
    }
}


