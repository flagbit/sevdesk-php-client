<?php
/**
 * ModelAccountingSystemNumber
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
 * ModelAccountingSystemNumber Class Doc Comment
 *
 * @category    Class
 * @package     flagbit\sevdesk\phpclient
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class ModelAccountingSystemNumber implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'Model_AccountingSystemNumber';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        '_create' => '\DateTime',
        '_update' => '\DateTime',
        '_sev_client' => 'object',
        '_number' => 'int',
        '_number_depreciation' => 'int',
        '_accounting_type' => '\flagbit\sevdesk\phpclient\Model\ModelAccountingType',
        '_accounting_system' => '\flagbit\sevdesk\phpclient\Model\ModelAccountingSystem',
        '_booking_type' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerFormats = [
        '_create' => 'date-time',
        '_update' => 'date-time',
        '_sev_client' => null,
        '_number' => null,
        '_number_depreciation' => null,
        '_accounting_type' => null,
        '_accounting_system' => null,
        '_booking_type' => null
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
        '_sev_client' => '_sevClient',
        '_number' => '_number',
        '_number_depreciation' => '_numberDepreciation',
        '_accounting_type' => '_accountingType',
        '_accounting_system' => '_accountingSystem',
        '_booking_type' => '_bookingType'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        '_create' => 'setCreate',
        '_update' => 'setUpdate',
        '_sev_client' => 'setSevClient',
        '_number' => 'setNumber',
        '_number_depreciation' => 'setNumberDepreciation',
        '_accounting_type' => 'setAccountingType',
        '_accounting_system' => 'setAccountingSystem',
        '_booking_type' => 'setBookingType'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        '_create' => 'getCreate',
        '_update' => 'getUpdate',
        '_sev_client' => 'getSevClient',
        '_number' => 'getNumber',
        '_number_depreciation' => 'getNumberDepreciation',
        '_accounting_type' => 'getAccountingType',
        '_accounting_system' => 'getAccountingSystem',
        '_booking_type' => 'getBookingType'
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
        $this->container['_create'] = isset($data['_create']) ? $data['_create'] : null;
        $this->container['_update'] = isset($data['_update']) ? $data['_update'] : null;
        $this->container['_sev_client'] = isset($data['_sev_client']) ? $data['_sev_client'] : null;
        $this->container['_number'] = isset($data['_number']) ? $data['_number'] : null;
        $this->container['_number_depreciation'] = isset($data['_number_depreciation']) ? $data['_number_depreciation'] : null;
        $this->container['_accounting_type'] = isset($data['_accounting_type']) ? $data['_accounting_type'] : null;
        $this->container['_accounting_system'] = isset($data['_accounting_system']) ? $data['_accounting_system'] : null;
        $this->container['_booking_type'] = isset($data['_booking_type']) ? $data['_booking_type'] : null;
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
     * Gets _create
     * @return \DateTime
     */
    public function getCreate()
    {
        return $this->container['_create'];
    }

    /**
     * Sets _create
     * @param \DateTime $_create date the accounting system number was created
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
     * @param \DateTime $_update date the accounting system number was last updated
     * @return $this
     */
    public function setUpdate($_update)
    {
        $this->container['_update'] = $_update;

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
     * Gets _number
     * @return int
     */
    public function getNumber()
    {
        return $this->container['_number'];
    }

    /**
     * Sets _number
     * @param int $_number accounting system number
     * @return $this
     */
    public function setNumber($_number)
    {
        $this->container['_number'] = $_number;

        return $this;
    }

    /**
     * Gets _number_depreciation
     * @return int
     */
    public function getNumberDepreciation()
    {
        return $this->container['_number_depreciation'];
    }

    /**
     * Sets _number_depreciation
     * @param int $_number_depreciation 
     * @return $this
     */
    public function setNumberDepreciation($_number_depreciation)
    {
        $this->container['_number_depreciation'] = $_number_depreciation;

        return $this;
    }

    /**
     * Gets _accounting_type
     * @return \flagbit\sevdesk\phpclient\Model\ModelAccountingType
     */
    public function getAccountingType()
    {
        return $this->container['_accounting_type'];
    }

    /**
     * Sets _accounting_type
     * @param \flagbit\sevdesk\phpclient\Model\ModelAccountingType $_accounting_type 
     * @return $this
     */
    public function setAccountingType($_accounting_type)
    {
        $this->container['_accounting_type'] = $_accounting_type;

        return $this;
    }

    /**
     * Gets _accounting_system
     * @return \flagbit\sevdesk\phpclient\Model\ModelAccountingSystem
     */
    public function getAccountingSystem()
    {
        return $this->container['_accounting_system'];
    }

    /**
     * Sets _accounting_system
     * @param \flagbit\sevdesk\phpclient\Model\ModelAccountingSystem $_accounting_system 
     * @return $this
     */
    public function setAccountingSystem($_accounting_system)
    {
        $this->container['_accounting_system'] = $_accounting_system;

        return $this;
    }

    /**
     * Gets _booking_type
     * @return string
     */
    public function getBookingType()
    {
        return $this->container['_booking_type'];
    }

    /**
     * Sets _booking_type
     * @param string $_booking_type 
     * @return $this
     */
    public function setBookingType($_booking_type)
    {
        $this->container['_booking_type'] = $_booking_type;

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


