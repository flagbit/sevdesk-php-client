<?php
/**
 * ModelDocument
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
 * ModelDocument Class Doc Comment
 *
 * @category    Class
 * @package     flagbit\sevdesk\phpclient
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class ModelDocument implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'Model_Document';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        '_create' => '\DateTime',
        '_update' => '\DateTime',
        '_object' => 'object',
        '_document_number' => 'string',
        '_base_object' => '\DateTime',
        '_create_user' => '\flagbit\sevdesk\phpclient\Model\ModelSevUser',
        '_update_user' => '\flagbit\sevdesk\phpclient\Model\ModelSevUser',
        '_mime_type' => 'string',
        '_description' => 'string',
        '_object_action' => 'object',
        '_sev_client' => 'object',
        '_folder' => '\flagbit\sevdesk\phpclient\Model\ModelDocumentFolder',
        '_filename' => 'string',
        '_status' => 'int',
        '_extension' => 'string',
        '_filesize' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerFormats = [
        '_create' => 'date-time',
        '_update' => 'date-time',
        '_object' => null,
        '_document_number' => null,
        '_base_object' => 'date-time',
        '_create_user' => null,
        '_update_user' => null,
        '_mime_type' => null,
        '_description' => null,
        '_object_action' => null,
        '_sev_client' => null,
        '_folder' => null,
        '_filename' => null,
        '_status' => null,
        '_extension' => null,
        '_filesize' => null
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
        '_object' => '_object',
        '_document_number' => '_documentNumber',
        '_base_object' => '_baseObject',
        '_create_user' => '_createUser',
        '_update_user' => '_updateUser',
        '_mime_type' => '_mimeType',
        '_description' => '_description',
        '_object_action' => '_objectAction',
        '_sev_client' => '_sevClient',
        '_folder' => '_folder',
        '_filename' => '_filename',
        '_status' => '_status',
        '_extension' => '_extension',
        '_filesize' => '_filesize'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        '_create' => 'setCreate',
        '_update' => 'setUpdate',
        '_object' => 'setObject',
        '_document_number' => 'setDocumentNumber',
        '_base_object' => 'setBaseObject',
        '_create_user' => 'setCreateUser',
        '_update_user' => 'setUpdateUser',
        '_mime_type' => 'setMimeType',
        '_description' => 'setDescription',
        '_object_action' => 'setObjectAction',
        '_sev_client' => 'setSevClient',
        '_folder' => 'setFolder',
        '_filename' => 'setFilename',
        '_status' => 'setStatus',
        '_extension' => 'setExtension',
        '_filesize' => 'setFilesize'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        '_create' => 'getCreate',
        '_update' => 'getUpdate',
        '_object' => 'getObject',
        '_document_number' => 'getDocumentNumber',
        '_base_object' => 'getBaseObject',
        '_create_user' => 'getCreateUser',
        '_update_user' => 'getUpdateUser',
        '_mime_type' => 'getMimeType',
        '_description' => 'getDescription',
        '_object_action' => 'getObjectAction',
        '_sev_client' => 'getSevClient',
        '_folder' => 'getFolder',
        '_filename' => 'getFilename',
        '_status' => 'getStatus',
        '_extension' => 'getExtension',
        '_filesize' => 'getFilesize'
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
        $this->container['_object'] = isset($data['_object']) ? $data['_object'] : null;
        $this->container['_document_number'] = isset($data['_document_number']) ? $data['_document_number'] : null;
        $this->container['_base_object'] = isset($data['_base_object']) ? $data['_base_object'] : null;
        $this->container['_create_user'] = isset($data['_create_user']) ? $data['_create_user'] : null;
        $this->container['_update_user'] = isset($data['_update_user']) ? $data['_update_user'] : null;
        $this->container['_mime_type'] = isset($data['_mime_type']) ? $data['_mime_type'] : null;
        $this->container['_description'] = isset($data['_description']) ? $data['_description'] : null;
        $this->container['_object_action'] = isset($data['_object_action']) ? $data['_object_action'] : null;
        $this->container['_sev_client'] = isset($data['_sev_client']) ? $data['_sev_client'] : null;
        $this->container['_folder'] = isset($data['_folder']) ? $data['_folder'] : null;
        $this->container['_filename'] = isset($data['_filename']) ? $data['_filename'] : null;
        $this->container['_status'] = isset($data['_status']) ? $data['_status'] : null;
        $this->container['_extension'] = isset($data['_extension']) ? $data['_extension'] : null;
        $this->container['_filesize'] = isset($data['_filesize']) ? $data['_filesize'] : null;
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
     * @param \DateTime $_create date the document was created
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
     * @param \DateTime $_update date the document was last updated
     * @return $this
     */
    public function setUpdate($_update)
    {
        $this->container['_update'] = $_update;

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
     * @param object $_object 
     * @return $this
     */
    public function setObject($_object)
    {
        $this->container['_object'] = $_object;

        return $this;
    }

    /**
     * Gets _document_number
     * @return string
     */
    public function getDocumentNumber()
    {
        return $this->container['_document_number'];
    }

    /**
     * Sets _document_number
     * @param string $_document_number 
     * @return $this
     */
    public function setDocumentNumber($_document_number)
    {
        $this->container['_document_number'] = $_document_number;

        return $this;
    }

    /**
     * Gets _base_object
     * @return \DateTime
     */
    public function getBaseObject()
    {
        return $this->container['_base_object'];
    }

    /**
     * Sets _base_object
     * @param \DateTime $_base_object 
     * @return $this
     */
    public function setBaseObject($_base_object)
    {
        $this->container['_base_object'] = $_base_object;

        return $this;
    }

    /**
     * Gets _create_user
     * @return \flagbit\sevdesk\phpclient\Model\ModelSevUser
     */
    public function getCreateUser()
    {
        return $this->container['_create_user'];
    }

    /**
     * Sets _create_user
     * @param \flagbit\sevdesk\phpclient\Model\ModelSevUser $_create_user SevUser who created the document
     * @return $this
     */
    public function setCreateUser($_create_user)
    {
        $this->container['_create_user'] = $_create_user;

        return $this;
    }

    /**
     * Gets _update_user
     * @return \flagbit\sevdesk\phpclient\Model\ModelSevUser
     */
    public function getUpdateUser()
    {
        return $this->container['_update_user'];
    }

    /**
     * Sets _update_user
     * @param \flagbit\sevdesk\phpclient\Model\ModelSevUser $_update_user SevUser who last updated the document
     * @return $this
     */
    public function setUpdateUser($_update_user)
    {
        $this->container['_update_user'] = $_update_user;

        return $this;
    }

    /**
     * Gets _mime_type
     * @return string
     */
    public function getMimeType()
    {
        return $this->container['_mime_type'];
    }

    /**
     * Sets _mime_type
     * @param string $_mime_type 
     * @return $this
     */
    public function setMimeType($_mime_type)
    {
        $this->container['_mime_type'] = $_mime_type;

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
     * @param string $_description 
     * @return $this
     */
    public function setDescription($_description)
    {
        $this->container['_description'] = $_description;

        return $this;
    }

    /**
     * Gets _object_action
     * @return object
     */
    public function getObjectAction()
    {
        return $this->container['_object_action'];
    }

    /**
     * Sets _object_action
     * @param object $_object_action 
     * @return $this
     */
    public function setObjectAction($_object_action)
    {
        $this->container['_object_action'] = $_object_action;

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
     * Gets _folder
     * @return \flagbit\sevdesk\phpclient\Model\ModelDocumentFolder
     */
    public function getFolder()
    {
        return $this->container['_folder'];
    }

    /**
     * Sets _folder
     * @param \flagbit\sevdesk\phpclient\Model\ModelDocumentFolder $_folder
     * @return $this
     */
    public function setFolder($_folder)
    {
        $this->container['_folder'] = $_folder;

        return $this;
    }

    /**
     * Gets _filename
     * @return string
     */
    public function getFilename()
    {
        return $this->container['_filename'];
    }

    /**
     * Sets _filename
     * @param string $_filename 
     * @return $this
     */
    public function setFilename($_filename)
    {
        $this->container['_filename'] = $_filename;

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
     * @param int $_status 
     * @return $this
     */
    public function setStatus($_status)
    {
        $this->container['_status'] = $_status;

        return $this;
    }

    /**
     * Gets _extension
     * @return string
     */
    public function getExtension()
    {
        return $this->container['_extension'];
    }

    /**
     * Sets _extension
     * @param string $_extension 
     * @return $this
     */
    public function setExtension($_extension)
    {
        $this->container['_extension'] = $_extension;

        return $this;
    }

    /**
     * Gets _filesize
     * @return int
     */
    public function getFilesize()
    {
        return $this->container['_filesize'];
    }

    /**
     * Sets _filesize
     * @param int $_filesize 
     * @return $this
     */
    public function setFilesize($_filesize)
    {
        $this->container['_filesize'] = $_filesize;

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


