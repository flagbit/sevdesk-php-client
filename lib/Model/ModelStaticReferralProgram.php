<?php
/**
 * ModelStaticReferralProgram
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
 * ModelStaticReferralProgram Class Doc Comment
 *
 * @category    Class
 * @package     flagbit\sevdesk\phpclient
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class ModelStaticReferralProgram implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'Model_StaticReferralProgram';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        '_headline' => 'string',
        '_text' => 'string',
        '_reward_amount_lead' => 'float',
        '_reward_amount' => 'float',
        '_reward_percentage' => 'float',
        '_reward_type' => 'string',
        '_earning_amount' => 'float'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerFormats = [
        '_headline' => null,
        '_text' => null,
        '_reward_amount_lead' => 'float',
        '_reward_amount' => 'float',
        '_reward_percentage' => 'float',
        '_reward_type' => null,
        '_earning_amount' => 'float'
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
        '_headline' => '_headline',
        '_text' => '_text',
        '_reward_amount_lead' => '_rewardAmountLead',
        '_reward_amount' => '_rewardAmount',
        '_reward_percentage' => '_rewardPercentage',
        '_reward_type' => '_rewardType',
        '_earning_amount' => '_earningAmount'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        '_headline' => 'setHeadline',
        '_text' => 'setText',
        '_reward_amount_lead' => 'setRewardAmountLead',
        '_reward_amount' => 'setRewardAmount',
        '_reward_percentage' => 'setRewardPercentage',
        '_reward_type' => 'setRewardType',
        '_earning_amount' => 'setEarningAmount'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        '_headline' => 'getHeadline',
        '_text' => 'getText',
        '_reward_amount_lead' => 'getRewardAmountLead',
        '_reward_amount' => 'getRewardAmount',
        '_reward_percentage' => 'getRewardPercentage',
        '_reward_type' => 'getRewardType',
        '_earning_amount' => 'getEarningAmount'
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
        $this->container['_headline'] = isset($data['_headline']) ? $data['_headline'] : null;
        $this->container['_text'] = isset($data['_text']) ? $data['_text'] : null;
        $this->container['_reward_amount_lead'] = isset($data['_reward_amount_lead']) ? $data['_reward_amount_lead'] : null;
        $this->container['_reward_amount'] = isset($data['_reward_amount']) ? $data['_reward_amount'] : null;
        $this->container['_reward_percentage'] = isset($data['_reward_percentage']) ? $data['_reward_percentage'] : null;
        $this->container['_reward_type'] = isset($data['_reward_type']) ? $data['_reward_type'] : null;
        $this->container['_earning_amount'] = isset($data['_earning_amount']) ? $data['_earning_amount'] : null;
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
     * Gets _headline
     * @return string
     */
    public function getHeadline()
    {
        return $this->container['_headline'];
    }

    /**
     * Sets _headline
     * @param string $_headline 
     * @return $this
     */
    public function setHeadline($_headline)
    {
        $this->container['_headline'] = $_headline;

        return $this;
    }

    /**
     * Gets _text
     * @return string
     */
    public function getText()
    {
        return $this->container['_text'];
    }

    /**
     * Sets _text
     * @param string $_text 
     * @return $this
     */
    public function setText($_text)
    {
        $this->container['_text'] = $_text;

        return $this;
    }

    /**
     * Gets _reward_amount_lead
     * @return float
     */
    public function getRewardAmountLead()
    {
        return $this->container['_reward_amount_lead'];
    }

    /**
     * Sets _reward_amount_lead
     * @param float $_reward_amount_lead 
     * @return $this
     */
    public function setRewardAmountLead($_reward_amount_lead)
    {
        $this->container['_reward_amount_lead'] = $_reward_amount_lead;

        return $this;
    }

    /**
     * Gets _reward_amount
     * @return float
     */
    public function getRewardAmount()
    {
        return $this->container['_reward_amount'];
    }

    /**
     * Sets _reward_amount
     * @param float $_reward_amount 
     * @return $this
     */
    public function setRewardAmount($_reward_amount)
    {
        $this->container['_reward_amount'] = $_reward_amount;

        return $this;
    }

    /**
     * Gets _reward_percentage
     * @return float
     */
    public function getRewardPercentage()
    {
        return $this->container['_reward_percentage'];
    }

    /**
     * Sets _reward_percentage
     * @param float $_reward_percentage 
     * @return $this
     */
    public function setRewardPercentage($_reward_percentage)
    {
        $this->container['_reward_percentage'] = $_reward_percentage;

        return $this;
    }

    /**
     * Gets _reward_type
     * @return string
     */
    public function getRewardType()
    {
        return $this->container['_reward_type'];
    }

    /**
     * Sets _reward_type
     * @param string $_reward_type 
     * @return $this
     */
    public function setRewardType($_reward_type)
    {
        $this->container['_reward_type'] = $_reward_type;

        return $this;
    }

    /**
     * Gets _earning_amount
     * @return float
     */
    public function getEarningAmount()
    {
        return $this->container['_earning_amount'];
    }

    /**
     * Sets _earning_amount
     * @param float $_earning_amount 
     * @return $this
     */
    public function setEarningAmount($_earning_amount)
    {
        $this->container['_earning_amount'] = $_earning_amount;

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


