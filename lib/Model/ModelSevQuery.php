<?php
/**
 * ModelSevQuery
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
 * ModelSevQuery Class Doc Comment
 *
 * @category    Class
 * @package     flagbit\sevdesk\phpclient
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class ModelSevQuery implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'Model_SevQuery';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        '_model_name' => 'string',
        '_limit' => 'int',
        '_offset' => 'int',
        '_filter' => 'string[]',
        '_order' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerFormats = [
        '_model_name' => null,
        '_limit' => null,
        '_offset' => null,
        '_filter' => null,
        '_order' => null
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
        '_model_name' => '_modelName',
        '_limit' => '_limit',
        '_offset' => '_offset',
        '_filter' => '_filter',
        '_order' => '_order'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        '_model_name' => 'setModelName',
        '_limit' => 'setLimit',
        '_offset' => 'setOffset',
        '_filter' => 'setFilter',
        '_order' => 'setOrder'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        '_model_name' => 'getModelName',
        '_limit' => 'getLimit',
        '_offset' => 'getOffset',
        '_filter' => 'getFilter',
        '_order' => 'getOrder'
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
        $this->container['_model_name'] = isset($data['_model_name']) ? $data['_model_name'] : null;
        $this->container['_limit'] = isset($data['_limit']) ? $data['_limit'] : null;
        $this->container['_offset'] = isset($data['_offset']) ? $data['_offset'] : null;
        $this->container['_filter'] = isset($data['_filter']) ? $data['_filter'] : null;
        $this->container['_order'] = isset($data['_order']) ? $data['_order'] : null;
    }

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalid_properties = [];

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

        return true;
    }


    /**
     * Gets _model_name
     * @return string
     */
    public function getModelName()
    {
        return $this->container['_model_name'];
    }

    /**
     * Sets _model_name
     * @param string $_model_name Name of the model for which you want to make a query
     * @return $this
     */
    public function setModelName($_model_name)
    {
        $this->container['_model_name'] = $_model_name;

        return $this;
    }

    /**
     * Gets _limit
     * @return int
     */
    public function getLimit()
    {
        return $this->container['_limit'];
    }

    /**
     * Sets _limit
     * @param int $_limit Limit for the returned entries
     * @return $this
     */
    public function setLimit($_limit)
    {
        $this->container['_limit'] = $_limit;

        return $this;
    }

    /**
     * Gets _offset
     * @return int
     */
    public function getOffset()
    {
        return $this->container['_offset'];
    }

    /**
     * Sets _offset
     * @param int $_offset Offset for the returned entries
     * @return $this
     */
    public function setOffset($_offset)
    {
        $this->container['_offset'] = $_offset;

        return $this;
    }

    /**
     * Gets _filter
     * @return string[]
     */
    public function getFilter()
    {
        return $this->container['_filter'];
    }

    /**
     * Sets _filter
     * @param string[] $_filter Filters that should be applied to the returned entries
     * @return $this
     */
    public function setFilter($_filter)
    {
        $this->container['_filter'] = $_filter;

        return $this;
    }

    /**
     * Gets _order
     * @return string
     */
    public function getOrder()
    {
        return $this->container['_order'];
    }

    /**
     * Sets _order
     * @param string $_order Define how returned entries should be sorted
     * @return $this
     */
    public function setOrder($_order)
    {
        $this->container['_order'] = $_order;

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


