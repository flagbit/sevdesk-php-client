<?php
/**
 * ModelOrderLog
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
 * ModelOrderLog Class Doc Comment
 *
 * @category    Class
 * @package     isp-serverfarm\sevdesk\php-client
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class ModelOrderLog implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'Model_OrderLog';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        '_create' => '\DateTime',
        '_update' => '\DateTime',
        '_date' => '\DateTime',
        '_order' => '\isp-serverfarm\sevdesk\php-client\sevdesk-model\ModelOrder',
        '_object' => 'object',
        '_sev_client' => 'object',
        '_currency' => 'string',
        '_amount' => 'float',
        '_amount_type' => 'string',
        '_tax_rate' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerFormats = [
        '_create' => 'date-time',
        '_update' => 'date-time',
        '_date' => 'date-time',
        '_order' => null,
        '_object' => null,
        '_sev_client' => null,
        '_currency' => null,
        '_amount' => 'float',
        '_amount_type' => null,
        '_tax_rate' => null
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
        '_date' => '_date',
        '_order' => '_order',
        '_object' => '_object',
        '_sev_client' => '_sevClient',
        '_currency' => '_currency',
        '_amount' => '_amount',
        '_amount_type' => '_amountType',
        '_tax_rate' => '_taxRate'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        '_create' => 'setCreate',
        '_update' => 'setUpdate',
        '_date' => 'setDate',
        '_order' => 'setOrder',
        '_object' => 'setObject',
        '_sev_client' => 'setSevClient',
        '_currency' => 'setCurrency',
        '_amount' => 'setAmount',
        '_amount_type' => 'setAmountType',
        '_tax_rate' => 'setTaxRate'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        '_create' => 'getCreate',
        '_update' => 'getUpdate',
        '_date' => 'getDate',
        '_order' => 'getOrder',
        '_object' => 'getObject',
        '_sev_client' => 'getSevClient',
        '_currency' => 'getCurrency',
        '_amount' => 'getAmount',
        '_amount_type' => 'getAmountType',
        '_tax_rate' => 'getTaxRate'
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
        $this->container['_date'] = isset($data['_date']) ? $data['_date'] : null;
        $this->container['_order'] = isset($data['_order']) ? $data['_order'] : null;
        $this->container['_object'] = isset($data['_object']) ? $data['_object'] : null;
        $this->container['_sev_client'] = isset($data['_sev_client']) ? $data['_sev_client'] : null;
        $this->container['_currency'] = isset($data['_currency']) ? $data['_currency'] : null;
        $this->container['_amount'] = isset($data['_amount']) ? $data['_amount'] : null;
        $this->container['_amount_type'] = isset($data['_amount_type']) ? $data['_amount_type'] : null;
        $this->container['_tax_rate'] = isset($data['_tax_rate']) ? $data['_tax_rate'] : null;
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
     * @param \DateTime $_create date the order log was created
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
     * @param \DateTime $_update date the order was last updated
     * @return $this
     */
    public function setUpdate($_update)
    {
        $this->container['_update'] = $_update;

        return $this;
    }

    /**
     * Gets _date
     * @return \DateTime
     */
    public function getDate()
    {
        return $this->container['_date'];
    }

    /**
     * Sets _date
     * @param \DateTime $_date date of the order log
     * @return $this
     */
    public function setDate($_date)
    {
        $this->container['_date'] = $_date;

        return $this;
    }

    /**
     * Gets _order
     * @return \isp-serverfarm\sevdesk\php-client\sevdesk-model\ModelOrder
     */
    public function getOrder()
    {
        return $this->container['_order'];
    }

    /**
     * Sets _order
     * @param \isp-serverfarm\sevdesk\php-client\sevdesk-model\ModelOrder $_order the order to which the order log refers
     * @return $this
     */
    public function setOrder($_order)
    {
        $this->container['_order'] = $_order;

        return $this;
    }

    /**
     * Gets _object
     * @return object
     */
    public function getObject()
    {
        return $this->container['_object'];
    }

    /**
     * Sets _object
     * @param object $_object the object which was involved in the logged order action (eg. a created invoice)
     * @return $this
     */
    public function setObject($_object)
    {
        $this->container['_object'] = $_object;

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
     * Gets _currency
     * @return string
     */
    public function getCurrency()
    {
        return $this->container['_currency'];
    }

    /**
     * Sets _currency
     * @param string $_currency currency of the logged order
     * @return $this
     */
    public function setCurrency($_currency)
    {
        $this->container['_currency'] = $_currency;

        return $this;
    }

    /**
     * Gets _amount
     * @return float
     */
    public function getAmount()
    {
        return $this->container['_amount'];
    }

    /**
     * Sets _amount
     * @param float $_amount amount of the order position
     * @return $this
     */
    public function setAmount($_amount)
    {
        $this->container['_amount'] = $_amount;

        return $this;
    }

    /**
     * Gets _amount_type
     * @return string
     */
    public function getAmountType()
    {
        return $this->container['_amount_type'];
    }

    /**
     * Sets _amount_type
     * @param string $_amount_type type of the order position amount, can be one from unity or custom
     * @return $this
     */
    public function setAmountType($_amount_type)
    {
        $this->container['_amount_type'] = $_amount_type;

        return $this;
    }

    /**
     * Gets _tax_rate
     * @return int
     */
    public function getTaxRate()
    {
        return $this->container['_tax_rate'];
    }

    /**
     * Sets _tax_rate
     * @param int $_tax_rate tax rate of the order
     * @return $this
     */
    public function setTaxRate($_tax_rate)
    {
        $this->container['_tax_rate'] = $_tax_rate;

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


