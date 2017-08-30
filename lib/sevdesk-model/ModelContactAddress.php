<?php
/**
 * ModelContactAddress
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
 * ModelContactAddress Class Doc Comment
 *
 * @category    Class
 * @package     isp-serverfarm\sevdesk\php-client
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class ModelContactAddress implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'Model_ContactAddress';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        '_create' => '\DateTime',
        '_update' => '\DateTime',
        '_contact' => '\isp-serverfarm\sevdesk\php-client\sevdesk-model\ModelContact',
        '_street' => 'string',
        '_zip' => 'string',
        '_city' => 'string',
        '_country' => '\isp-serverfarm\sevdesk\php-client\sevdesk-model\ModelStaticCountry',
        '_category' => '\isp-serverfarm\sevdesk\php-client\sevdesk-model\ModelCategory',
        '_name' => 'string',
        '_sev_client' => 'object',
        '_name2' => 'string',
        '_name3' => 'string',
        '_name4' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerFormats = [
        '_create' => 'date-time',
        '_update' => 'date-time',
        '_contact' => null,
        '_street' => null,
        '_zip' => null,
        '_city' => null,
        '_country' => null,
        '_category' => null,
        '_name' => null,
        '_sev_client' => null,
        '_name2' => null,
        '_name3' => null,
        '_name4' => null
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
        '_street' => '_street',
        '_zip' => '_zip',
        '_city' => '_city',
        '_country' => '_country',
        '_category' => '_category',
        '_name' => '_name',
        '_sev_client' => '_sevClient',
        '_name2' => '_name2',
        '_name3' => '_name3',
        '_name4' => '_name4'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        '_create' => 'setCreate',
        '_update' => 'setUpdate',
        '_contact' => 'setContact',
        '_street' => 'setStreet',
        '_zip' => 'setZip',
        '_city' => 'setCity',
        '_country' => 'setCountry',
        '_category' => 'setCategory',
        '_name' => 'setName',
        '_sev_client' => 'setSevClient',
        '_name2' => 'setName2',
        '_name3' => 'setName3',
        '_name4' => 'setName4'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        '_create' => 'getCreate',
        '_update' => 'getUpdate',
        '_contact' => 'getContact',
        '_street' => 'getStreet',
        '_zip' => 'getZip',
        '_city' => 'getCity',
        '_country' => 'getCountry',
        '_category' => 'getCategory',
        '_name' => 'getName',
        '_sev_client' => 'getSevClient',
        '_name2' => 'getName2',
        '_name3' => 'getName3',
        '_name4' => 'getName4'
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
        $this->container['_contact'] = isset($data['_contact']) ? $data['_contact'] : null;
        $this->container['_street'] = isset($data['_street']) ? $data['_street'] : null;
        $this->container['_zip'] = isset($data['_zip']) ? $data['_zip'] : null;
        $this->container['_city'] = isset($data['_city']) ? $data['_city'] : null;
        $this->container['_country'] = isset($data['_country']) ? $data['_country'] : null;
        $this->container['_category'] = isset($data['_category']) ? $data['_category'] : null;
        $this->container['_name'] = isset($data['_name']) ? $data['_name'] : null;
        $this->container['_sev_client'] = isset($data['_sev_client']) ? $data['_sev_client'] : null;
        $this->container['_name2'] = isset($data['_name2']) ? $data['_name2'] : null;
        $this->container['_name3'] = isset($data['_name3']) ? $data['_name3'] : null;
        $this->container['_name4'] = isset($data['_name4']) ? $data['_name4'] : null;
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
     * @param \DateTime $_create the creation date of the contact
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
     * @param \DateTime $_update date, the contact was last updated
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
     * @param \isp-serverfarm\sevdesk\php-client\sevdesk-model\ModelContact $_contact the contact the address belongs to
     * @return $this
     */
    public function setContact($_contact)
    {
        $this->container['_contact'] = $_contact;

        return $this;
    }

    /**
     * Gets _street
     * @return string
     */
    public function getStreet()
    {
        return $this->container['_street'];
    }

    /**
     * Sets _street
     * @param string $_street 
     * @return $this
     */
    public function setStreet($_street)
    {
        $this->container['_street'] = $_street;

        return $this;
    }

    /**
     * Gets _zip
     * @return string
     */
    public function getZip()
    {
        return $this->container['_zip'];
    }

    /**
     * Sets _zip
     * @param string $_zip zip of the city/village
     * @return $this
     */
    public function setZip($_zip)
    {
        $this->container['_zip'] = $_zip;

        return $this;
    }

    /**
     * Gets _city
     * @return string
     */
    public function getCity()
    {
        return $this->container['_city'];
    }

    /**
     * Sets _city
     * @param string $_city 
     * @return $this
     */
    public function setCity($_city)
    {
        $this->container['_city'] = $_city;

        return $this;
    }

    /**
     * Gets _country
     * @return \isp-serverfarm\sevdesk\php-client\sevdesk-model\ModelStaticCountry
     */
    public function getCountry()
    {
        return $this->container['_country'];
    }

    /**
     * Sets _country
     * @param \isp-serverfarm\sevdesk\php-client\sevdesk-model\ModelStaticCountry $_country 
     * @return $this
     */
    public function setCountry($_country)
    {
        $this->container['_country'] = $_country;

        return $this;
    }

    /**
     * Gets _category
     * @return \isp-serverfarm\sevdesk\php-client\sevdesk-model\ModelCategory
     */
    public function getCategory()
    {
        return $this->container['_category'];
    }

    /**
     * Sets _category
     * @param \isp-serverfarm\sevdesk\php-client\sevdesk-model\ModelCategory $_category category of the address
     * @return $this
     */
    public function setCategory($_category)
    {
        $this->container['_category'] = $_category;

        return $this;
    }

    /**
     * Gets _name
     * @return string
     */
    public function getName()
    {
        return $this->container['_name'];
    }

    /**
     * Sets _name
     * @param string $_name 
     * @return $this
     */
    public function setName($_name)
    {
        $this->container['_name'] = $_name;

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
     * Gets _name2
     * @return string
     */
    public function getName2()
    {
        return $this->container['_name2'];
    }

    /**
     * Sets _name2
     * @param string $_name2 
     * @return $this
     */
    public function setName2($_name2)
    {
        $this->container['_name2'] = $_name2;

        return $this;
    }

    /**
     * Gets _name3
     * @return string
     */
    public function getName3()
    {
        return $this->container['_name3'];
    }

    /**
     * Sets _name3
     * @param string $_name3 
     * @return $this
     */
    public function setName3($_name3)
    {
        $this->container['_name3'] = $_name3;

        return $this;
    }

    /**
     * Gets _name4
     * @return string
     */
    public function getName4()
    {
        return $this->container['_name4'];
    }

    /**
     * Sets _name4
     * @param string $_name4 
     * @return $this
     */
    public function setName4($_name4)
    {
        $this->container['_name4'] = $_name4;

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


