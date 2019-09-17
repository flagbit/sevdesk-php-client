<?php
/**
 * ModelSwissEsr
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
 * ModelSwissEsr Class Doc Comment
 *
 * @category    Class
 * @package     flagbit\sevdesk\phpclient
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class ModelSwissEsr implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'Model_SwissEsr';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        '_create' => '\DateTime',
        '_update' => '\DateTime',
        '_sev_client' => 'object',
        '_address_city_credit' => 'string',
        '_address_zip_credit' => 'string',
        '_post_subscriber_number_bank' => 'string',
        '_internal_subscriber_number' => 'string',
        '_document_type_code' => 'string',
        '_is_esr' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerFormats = [
        '_create' => 'date-time',
        '_update' => 'date-time',
        '_sev_client' => null,
        '_address_city_credit' => null,
        '_address_zip_credit' => null,
        '_post_subscriber_number_bank' => null,
        '_internal_subscriber_number' => null,
        '_document_type_code' => null,
        '_is_esr' => null
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
        '_address_city_credit' => '_addressCityCredit',
        '_address_zip_credit' => '_addressZipCredit',
        '_post_subscriber_number_bank' => '_postSubscriberNumberBank',
        '_internal_subscriber_number' => '_internalSubscriberNumber',
        '_document_type_code' => '_documentTypeCode',
        '_is_esr' => '_isEsr'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        '_create' => 'setCreate',
        '_update' => 'setUpdate',
        '_sev_client' => 'setSevClient',
        '_address_city_credit' => 'setAddressCityCredit',
        '_address_zip_credit' => 'setAddressZipCredit',
        '_post_subscriber_number_bank' => 'setPostSubscriberNumberBank',
        '_internal_subscriber_number' => 'setInternalSubscriberNumber',
        '_document_type_code' => 'setDocumentTypeCode',
        '_is_esr' => 'setIsEsr'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        '_create' => 'getCreate',
        '_update' => 'getUpdate',
        '_sev_client' => 'getSevClient',
        '_address_city_credit' => 'getAddressCityCredit',
        '_address_zip_credit' => 'getAddressZipCredit',
        '_post_subscriber_number_bank' => 'getPostSubscriberNumberBank',
        '_internal_subscriber_number' => 'getInternalSubscriberNumber',
        '_document_type_code' => 'getDocumentTypeCode',
        '_is_esr' => 'getIsEsr'
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
        $this->container['_address_city_credit'] = isset($data['_address_city_credit']) ? $data['_address_city_credit'] : null;
        $this->container['_address_zip_credit'] = isset($data['_address_zip_credit']) ? $data['_address_zip_credit'] : null;
        $this->container['_post_subscriber_number_bank'] = isset($data['_post_subscriber_number_bank']) ? $data['_post_subscriber_number_bank'] : null;
        $this->container['_internal_subscriber_number'] = isset($data['_internal_subscriber_number']) ? $data['_internal_subscriber_number'] : null;
        $this->container['_document_type_code'] = isset($data['_document_type_code']) ? $data['_document_type_code'] : null;
        $this->container['_is_esr'] = isset($data['_is_esr']) ? $data['_is_esr'] : null;
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
     * @param \DateTime $_create date the swiss esr was created
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
     * @param \DateTime $_update date the swiss esr was last updated
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
     * Gets _address_city_credit
     * @return string
     */
    public function getAddressCityCredit()
    {
        return $this->container['_address_city_credit'];
    }

    /**
     * Sets _address_city_credit
     * @param string $_address_city_credit 
     * @return $this
     */
    public function setAddressCityCredit($_address_city_credit)
    {
        $this->container['_address_city_credit'] = $_address_city_credit;

        return $this;
    }

    /**
     * Gets _address_zip_credit
     * @return string
     */
    public function getAddressZipCredit()
    {
        return $this->container['_address_zip_credit'];
    }

    /**
     * Sets _address_zip_credit
     * @param string $_address_zip_credit 
     * @return $this
     */
    public function setAddressZipCredit($_address_zip_credit)
    {
        $this->container['_address_zip_credit'] = $_address_zip_credit;

        return $this;
    }

    /**
     * Gets _post_subscriber_number_bank
     * @return string
     */
    public function getPostSubscriberNumberBank()
    {
        return $this->container['_post_subscriber_number_bank'];
    }

    /**
     * Sets _post_subscriber_number_bank
     * @param string $_post_subscriber_number_bank 
     * @return $this
     */
    public function setPostSubscriberNumberBank($_post_subscriber_number_bank)
    {
        $this->container['_post_subscriber_number_bank'] = $_post_subscriber_number_bank;

        return $this;
    }

    /**
     * Gets _internal_subscriber_number
     * @return string
     */
    public function getInternalSubscriberNumber()
    {
        return $this->container['_internal_subscriber_number'];
    }

    /**
     * Sets _internal_subscriber_number
     * @param string $_internal_subscriber_number 
     * @return $this
     */
    public function setInternalSubscriberNumber($_internal_subscriber_number)
    {
        $this->container['_internal_subscriber_number'] = $_internal_subscriber_number;

        return $this;
    }

    /**
     * Gets _document_type_code
     * @return string
     */
    public function getDocumentTypeCode()
    {
        return $this->container['_document_type_code'];
    }

    /**
     * Sets _document_type_code
     * @param string $_document_type_code 
     * @return $this
     */
    public function setDocumentTypeCode($_document_type_code)
    {
        $this->container['_document_type_code'] = $_document_type_code;

        return $this;
    }

    /**
     * Gets _is_esr
     * @return int
     */
    public function getIsEsr()
    {
        return $this->container['_is_esr'];
    }

    /**
     * Sets _is_esr
     * @param int $_is_esr 
     * @return $this
     */
    public function setIsEsr($_is_esr)
    {
        $this->container['_is_esr'] = $_is_esr;

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


