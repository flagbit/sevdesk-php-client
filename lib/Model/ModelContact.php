<?php
/**
 * ModelContact
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
 * ModelContact Class Doc Comment
 *
 * @category    Class
 * @package     flagbit\sevdesk\phpclient
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class ModelContact implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'Model_Contact';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        '_id' => 'int',
        '_address' => '\flagbit\sevdesk\phpclient\Model\ModelContactAddress',
        '_create' => '\DateTime',
        '_update' => '\DateTime',
        '_name' => 'string',
        '_status' => 'int',
        '_customer_number' => 'int',
        '_parent' => '\flagbit\sevdesk\phpclient\Model\ModelContact',
        '_surename' => 'string',
        '_familyname' => 'string',
        '_titel' => 'string',
        '_category' => '\flagbit\sevdesk\phpclient\Model\ModelCategory',
        '_description' => 'string',
        '_academic_title' => 'string',
        '_gender' => 'string',
        '_sev_client' => 'object',
        '_name2' => 'string',
        '_birthday' => '\DateTime',
        '_vat_number' => 'string',
        '_bank_account' => 'string',
        '_bank_number' => 'string',
        '_payment_method' => '\flagbit\sevdesk\phpclient\Model\ModelPaymentMethod',
        '_entry_type' => '\flagbit\sevdesk\phpclient\Model\ModelEntryType',
        '_default_cashback_time' => 'int',
        '_default_cashback_percent' => 'int',
        '_default_time_to_pay' => 'int',
        '_tax_number' => 'string',
        '_tax_office' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerFormats = [
        '_id' => null,
        '_address' => null,
        '_create' => 'date-time',
        '_update' => 'date-time',
        '_name' => null,
        '_status' => null,
        '_customer_number' => null,
        '_parent' => null,
        '_surename' => null,
        '_familyname' => null,
        '_titel' => null,
        '_category' => null,
        '_description' => null,
        '_academic_title' => null,
        '_gender' => null,
        '_sev_client' => null,
        '_name2' => null,
        '_birthday' => 'date-time',
        '_vat_number' => null,
        '_bank_account' => null,
        '_bank_number' => null,
        '_payment_method' => null,
        '_entry_type' => null,
        '_default_cashback_time' => null,
        '_default_cashback_percent' => null,
        '_default_time_to_pay' => null,
        '_tax_number' => null,
        '_tax_office' => null
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
        '_id' => '_id',
        '_address' => '_address',
        '_create' => '_create',
        '_update' => '_update',
        '_name' => '_name',
        '_status' => '_status',
        '_customer_number' => '_customerNumber',
        '_parent' => '_parent',
        '_surename' => '_surename',
        '_familyname' => '_familyname',
        '_titel' => '_titel',
        '_category' => '_category',
        '_description' => '_description',
        '_academic_title' => '_academicTitle',
        '_gender' => '_gender',
        '_sev_client' => '_sevClient',
        '_name2' => '_name2',
        '_birthday' => '_birthday',
        '_vat_number' => '_vatNumber',
        '_bank_account' => '_bankAccount',
        '_bank_number' => '_bankNumber',
        '_payment_method' => '_paymentMethod',
        '_entry_type' => '_entryType',
        '_default_cashback_time' => '_defaultCashbackTime',
        '_default_cashback_percent' => '_defaultCashbackPercent',
        '_default_time_to_pay' => '_defaultTimeToPay',
        '_tax_number' => '_taxNumber',
        '_tax_office' => '_taxOffice'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        '_id' => 'setId',
        '_address' => 'setAddress',
        '_create' => 'setCreate',
        '_update' => 'setUpdate',
        '_name' => 'setName',
        '_status' => 'setStatus',
        '_customer_number' => 'setCustomerNumber',
        '_parent' => 'setParent',
        '_surename' => 'setSurename',
        '_familyname' => 'setFamilyname',
        '_titel' => 'setTitel',
        '_category' => 'setCategory',
        '_description' => 'setDescription',
        '_academic_title' => 'setAcademicTitle',
        '_gender' => 'setGender',
        '_sev_client' => 'setSevClient',
        '_name2' => 'setName2',
        '_birthday' => 'setBirthday',
        '_vat_number' => 'setVatNumber',
        '_bank_account' => 'setBankAccount',
        '_bank_number' => 'setBankNumber',
        '_payment_method' => 'setPaymentMethod',
        '_entry_type' => 'setEntryType',
        '_default_cashback_time' => 'setDefaultCashbackTime',
        '_default_cashback_percent' => 'setDefaultCashbackPercent',
        '_default_time_to_pay' => 'setDefaultTimeToPay',
        '_tax_number' => 'setTaxNumber',
        '_tax_office' => 'setTaxOffice'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        '_id' => 'getId',
        '_address' => 'getAddress',
        '_create' => 'getCreate',
        '_update' => 'getUpdate',
        '_name' => 'getName',
        '_status' => 'getStatus',
        '_customer_number' => 'getCustomerNumber',
        '_parent' => 'getParent',
        '_surename' => 'getSurename',
        '_familyname' => 'getFamilyname',
        '_titel' => 'getTitel',
        '_category' => 'getCategory',
        '_description' => 'getDescription',
        '_academic_title' => 'getAcademicTitle',
        '_gender' => 'getGender',
        '_sev_client' => 'getSevClient',
        '_name2' => 'getName2',
        '_birthday' => 'getBirthday',
        '_vat_number' => 'getVatNumber',
        '_bank_account' => 'getBankAccount',
        '_bank_number' => 'getBankNumber',
        '_payment_method' => 'getPaymentMethod',
        '_entry_type' => 'getEntryType',
        '_default_cashback_time' => 'getDefaultCashbackTime',
        '_default_cashback_percent' => 'getDefaultCashbackPercent',
        '_default_time_to_pay' => 'getDefaultTimeToPay',
        '_tax_number' => 'getTaxNumber',
        '_tax_office' => 'getTaxOffice'
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
        $this->container['_id'] = isset($data['_id']) ? $data['_id'] : null;
        $this->container['_address'] = isset($data['_address']) ? $data['_address'] : null;
        $this->container['_create'] = isset($data['_create']) ? $data['_create'] : null;
        $this->container['_update'] = isset($data['_update']) ? $data['_update'] : null;
        $this->container['_name'] = isset($data['_name']) ? $data['_name'] : null;
        $this->container['_status'] = isset($data['_status']) ? $data['_status'] : null;
        $this->container['_customer_number'] = isset($data['_customer_number']) ? $data['_customer_number'] : null;
        $this->container['_parent'] = isset($data['_parent']) ? $data['_parent'] : null;
        $this->container['_surename'] = isset($data['_surename']) ? $data['_surename'] : null;
        $this->container['_familyname'] = isset($data['_familyname']) ? $data['_familyname'] : null;
        $this->container['_titel'] = isset($data['_titel']) ? $data['_titel'] : null;
        $this->container['_category'] = isset($data['_category']) ? $data['_category'] : null;
        $this->container['_description'] = isset($data['_description']) ? $data['_description'] : null;
        $this->container['_academic_title'] = isset($data['_academic_title']) ? $data['_academic_title'] : null;
        $this->container['_gender'] = isset($data['_gender']) ? $data['_gender'] : null;
        $this->container['_sev_client'] = isset($data['_sev_client']) ? $data['_sev_client'] : null;
        $this->container['_name2'] = isset($data['_name2']) ? $data['_name2'] : null;
        $this->container['_birthday'] = isset($data['_birthday']) ? $data['_birthday'] : null;
        $this->container['_vat_number'] = isset($data['_vat_number']) ? $data['_vat_number'] : null;
        $this->container['_bank_account'] = isset($data['_bank_account']) ? $data['_bank_account'] : null;
        $this->container['_bank_number'] = isset($data['_bank_number']) ? $data['_bank_number'] : null;
        $this->container['_payment_method'] = isset($data['_payment_method']) ? $data['_payment_method'] : null;
        $this->container['_entry_type'] = isset($data['_entry_type']) ? $data['_entry_type'] : null;
        $this->container['_default_cashback_time'] = isset($data['_default_cashback_time']) ? $data['_default_cashback_time'] : null;
        $this->container['_default_cashback_percent'] = isset($data['_default_cashback_percent']) ? $data['_default_cashback_percent'] : null;
        $this->container['_default_time_to_pay'] = isset($data['_default_time_to_pay']) ? $data['_default_time_to_pay'] : null;
        $this->container['_tax_number'] = isset($data['_tax_number']) ? $data['_tax_number'] : null;
        $this->container['_tax_office'] = isset($data['_tax_office']) ? $data['_tax_office'] : null;
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
     * Gets _id
     * @return int
     */
    public function getId()
    {
        return $this->container['_id'];
    }

    /**
     * Sets _id
     * @param int
     * @return $this
     */
    public function setId($_id)
    {
        $this->container['_id'] = $_id;

        return $this;
    }


    /**
     * Gets _address
     * @return \flagbit\sevdesk\phpclient\Model\ModelContactAddress
     */
    public function getAddress()
    {
        return $this->container['_address'];
    }

    /**
     * Sets _address
     * @param \flagbit\sevdesk\phpclient\Model\ModelContactAddress $_address the contact address
     * @return $this
     */
    public function setAddress($_address)
    {
        $this->container['_address'] = $_address;

        return $this;
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
     * Gets _name
     * @return string
     */
    public function getName()
    {
        return $this->container['_name'];
    }

    /**
     * Sets _name
     * @param string $_name name of the contact
     * @return $this
     */
    public function setName($_name)
    {
        $this->container['_name'] = $_name;

        return $this;
    }

    /**
     * Gets _status
     * @return int
     */
    public function getStatus()
    {
        return $this->container['_status'];
    }

    /**
     * Sets _status
     * @param int $_status status of the contact
     * @return $this
     */
    public function setStatus($_status)
    {
        $this->container['_status'] = $_status;

        return $this;
    }

    /**
     * Gets _customer_number
     * @return int
     */
    public function getCustomerNumber()
    {
        return $this->container['_customer_number'];
    }

    /**
     * Sets _customer_number
     * @param int $_customer_number customer number of the contact
     * @return $this
     */
    public function setCustomerNumber($_customer_number)
    {
        $this->container['_customer_number'] = $_customer_number;

        return $this;
    }

    /**
     * Gets _parent
     * @return \flagbit\sevdesk\phpclient\Model\ModelContact
     */
    public function getParent()
    {
        return $this->container['_parent'];
    }

    /**
     * Sets _parent
     * @param \flagbit\sevdesk\phpclient\Model\ModelContact $_parent
     * @return $this
     */
    public function setParent($_parent)
    {
        $this->container['_parent'] = $_parent;

        return $this;
    }

    /**
     * Gets _surename
     * @return string
     */
    public function getSurename()
    {
        return $this->container['_surename'];
    }

    /**
     * Sets _surename
     * @param string $_surename surname of the contact
     * @return $this
     */
    public function setSurename($_surename)
    {
        $this->container['_surename'] = $_surename;

        return $this;
    }

    /**
     * Gets _familyname
     * @return string
     */
    public function getFamilyname()
    {
        return $this->container['_familyname'];
    }

    /**
     * Sets _familyname
     * @param string $_familyname family name of the contact
     * @return $this
     */
    public function setFamilyname($_familyname)
    {
        $this->container['_familyname'] = $_familyname;

        return $this;
    }

    /**
     * Gets _titel
     * @return string
     */
    public function getTitel()
    {
        return $this->container['_titel'];
    }

    /**
     * Sets _titel
     * @param string $_titel title of the contact
     * @return $this
     */
    public function setTitel($_titel)
    {
        $this->container['_titel'] = $_titel;

        return $this;
    }

    /**
     * Gets _category
     * @return \flagbit\sevdesk\phpclient\Model\ModelCategory
     */
    public function getCategory()
    {
        return $this->container['_category'];
    }

    /**
     * Sets _category
     * @param \flagbit\sevdesk\phpclient\Model\ModelCategory $_category category of the contact
     * @return $this
     */
    public function setCategory($_category)
    {
        $this->container['_category'] = $_category;

        return $this;
    }

    /**
     * Gets _description
     * @return string
     */
    public function getDescription()
    {
        return $this->container['_description'];
    }

    /**
     * Sets _description
     * @param string $_description description of the contact
     * @return $this
     */
    public function setDescription($_description)
    {
        $this->container['_description'] = $_description;

        return $this;
    }

    /**
     * Gets _academic_title
     * @return string
     */
    public function getAcademicTitle()
    {
        return $this->container['_academic_title'];
    }

    /**
     * Sets _academic_title
     * @param string $_academic_title any academic title of the contact
     * @return $this
     */
    public function setAcademicTitle($_academic_title)
    {
        $this->container['_academic_title'] = $_academic_title;

        return $this;
    }

    /**
     * Gets _gender
     * @return string
     */
    public function getGender()
    {
        return $this->container['_gender'];
    }

    /**
     * Sets _gender
     * @param string $_gender gender of the contact
     * @return $this
     */
    public function setGender($_gender)
    {
        $this->container['_gender'] = $_gender;

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
     * @param string $_name2 second name of the contact
     * @return $this
     */
    public function setName2($_name2)
    {
        $this->container['_name2'] = $_name2;

        return $this;
    }

    /**
     * Gets _birthday
     * @return \DateTime
     */
    public function getBirthday()
    {
        return $this->container['_birthday'];
    }

    /**
     * Sets _birthday
     * @param \DateTime $_birthday birthday of the contact
     * @return $this
     */
    public function setBirthday($_birthday)
    {
        $this->container['_birthday'] = $_birthday;

        return $this;
    }

    /**
     * Gets _vat_number
     * @return string
     */
    public function getVatNumber()
    {
        return $this->container['_vat_number'];
    }

    /**
     * Sets _vat_number
     * @param string $_vat_number vat number of the contact
     * @return $this
     */
    public function setVatNumber($_vat_number)
    {
        $this->container['_vat_number'] = $_vat_number;

        return $this;
    }

    /**
     * Gets _bank_account
     * @return string
     */
    public function getBankAccount()
    {
        return $this->container['_bank_account'];
    }

    /**
     * Sets _bank_account
     * @param string $_bank_account bank account of the contact
     * @return $this
     */
    public function setBankAccount($_bank_account)
    {
        $this->container['_bank_account'] = $_bank_account;

        return $this;
    }

    /**
     * Gets _bank_number
     * @return string
     */
    public function getBankNumber()
    {
        return $this->container['_bank_number'];
    }

    /**
     * Sets _bank_number
     * @param string $_bank_number bank number of the contact
     * @return $this
     */
    public function setBankNumber($_bank_number)
    {
        $this->container['_bank_number'] = $_bank_number;

        return $this;
    }

    /**
     * Gets _payment_method
     * @return \flagbit\sevdesk\phpclient\Model\ModelPaymentMethod
     */
    public function getPaymentMethod()
    {
        return $this->container['_payment_method'];
    }

    /**
     * Sets _payment_method
     * @param \flagbit\sevdesk\phpclient\Model\ModelPaymentMethod $_payment_method desired payment method of the customer
     * @return $this
     */
    public function setPaymentMethod($_payment_method)
    {
        $this->container['_payment_method'] = $_payment_method;

        return $this;
    }

    /**
     * Gets _entry_type
     * @return \flagbit\sevdesk\phpclient\Model\ModelEntryType
     */
    public function getEntryType()
    {
        return $this->container['_entry_type'];
    }

    /**
     * Sets _entry_type
     * @param \flagbit\sevdesk\phpclient\Model\ModelEntryType $_entry_type
     * @return $this
     */
    public function setEntryType($_entry_type)
    {
        $this->container['_entry_type'] = $_entry_type;

        return $this;
    }

    /**
     * Gets _default_cashback_time
     * @return int
     */
    public function getDefaultCashbackTime()
    {
        return $this->container['_default_cashback_time'];
    }

    /**
     * Sets _default_cashback_time
     * @param int $_default_cashback_time default cashback time of the contact
     * @return $this
     */
    public function setDefaultCashbackTime($_default_cashback_time)
    {
        $this->container['_default_cashback_time'] = $_default_cashback_time;

        return $this;
    }

    /**
     * Gets _default_cashback_percent
     * @return int
     */
    public function getDefaultCashbackPercent()
    {
        return $this->container['_default_cashback_percent'];
    }

    /**
     * Sets _default_cashback_percent
     * @param int $_default_cashback_percent default cashback percentage of the contact
     * @return $this
     */
    public function setDefaultCashbackPercent($_default_cashback_percent)
    {
        $this->container['_default_cashback_percent'] = $_default_cashback_percent;

        return $this;
    }

    /**
     * Gets _default_time_to_pay
     * @return int
     */
    public function getDefaultTimeToPay()
    {
        return $this->container['_default_time_to_pay'];
    }

    /**
     * Sets _default_time_to_pay
     * @param int $_default_time_to_pay default time to pay of the contact
     * @return $this
     */
    public function setDefaultTimeToPay($_default_time_to_pay)
    {
        $this->container['_default_time_to_pay'] = $_default_time_to_pay;

        return $this;
    }

    /**
     * Gets _tax_number
     * @return string
     */
    public function getTaxNumber()
    {
        return $this->container['_tax_number'];
    }

    /**
     * Sets _tax_number
     * @param string $_tax_number tax number of the contact
     * @return $this
     */
    public function setTaxNumber($_tax_number)
    {
        $this->container['_tax_number'] = $_tax_number;

        return $this;
    }

    /**
     * Gets _tax_office
     * @return string
     */
    public function getTaxOffice()
    {
        return $this->container['_tax_office'];
    }

    /**
     * Sets _tax_office
     * @param string $_tax_office tax office of the contact
     * @return $this
     */
    public function setTaxOffice($_tax_office)
    {
        $this->container['_tax_office'] = $_tax_office;

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


