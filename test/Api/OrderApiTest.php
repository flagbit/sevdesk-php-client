<?php
/**
 * OrderApiTest
 * PHP version 5
 *
 * @category Class
 * @package  flagbit\sevdesk\phpclient
 * @author   Swagger Codegen team
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
 * Please update the test case below to test the endpoint.
 */

namespace flagbit\sevdesk\phpclient;

use \flagbit\sevdesk\phpclient\Configuration;
use \flagbit\sevdesk\phpclient\ApiClient;
use \flagbit\sevdesk\phpclient\ApiException;
use \flagbit\sevdesk\phpclient\ObjectSerializer;

/**
 * OrderApiTest Class Doc Comment
 *
 * @category Class
 * @package  flagbit\sevdesk\phpclient
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class OrderApiTest extends \PHPUnit_Framework_TestCase
{

    /**
     * Setup before running any test cases
     */
    public static function setUpBeforeClass()
    {
    }

    /**
     * Setup before running each test case
     */
    public function setUp()
    {
    }

    /**
     * Clean up after running each test case
     */
    public function tearDown()
    {
    }

    /**
     * Clean up after running all test cases
     */
    public static function tearDownAfterClass()
    {
    }

    /**
     * Test case for addOrder
     *
     * Create a new order.
     *
     */
    public function testAddOrder()
    {
    }

    /**
     * Test case for copyOrder
     *
     * Copy an existing order.
     *
     */
    public function testCopyOrder()
    {
    }

    /**
     * Test case for deleteOrder
     *
     * Delete an existing order.
     *
     */
    public function testDeleteOrder()
    {
    }

    /**
     * Test case for duplicateOrder
     *
     * Duplicate an existing order.
     *
     */
    public function testDuplicateOrder()
    {
    }

    /**
     * Test case for getNextOrderNumber
     *
     * Get the next order number.
     *
     */
    public function testGetNextOrderNumber()
    {
    }

    /**
     * Test case for getOrderDiscounts
     *
     * Get all order discounts.
     *
     */
    public function testGetOrderDiscounts()
    {
    }

    /**
     * Test case for getOrders
     *
     * Get an overview of all orders.
     *
     */
    public function testGetOrders()
    {
    }

    /**
     * Test case for orderChangeStatus
     *
     * Update status of an existing order.
     *
     */
    public function testOrderChangeStatus()
    {
    }

    /**
     * Test case for orderGetChargeableInformation
     *
     * Get sum charged already, total net, gross and tax amount and tax rate.
     *
     */
    public function testOrderGetChargeableInformation()
    {
    }

    /**
     * Test case for orderGetChargeableSums
     *
     * Get total net, gross and tax amount of order.
     *
     */
    public function testOrderGetChargeableSums()
    {
    }

    /**
     * Test case for orderGetMainOrderByLogs
     *
     * Get main order by checking if there are existing order logs of the specified order.
     *
     */
    public function testOrderGetMainOrderByLogs()
    {
    }

    /**
     * Test case for orderGetPdf
     *
     * Get the order as a pdf.
     *
     */
    public function testOrderGetPdf()
    {
    }

    /**
     * Test case for orderGetPositions
     *
     * Get all order positions.
     *
     */
    public function testOrderGetPositions()
    {
    }

    /**
     * Test case for orderGetRelatedObjects
     *
     * Get related objects of a specified order.
     *
     */
    public function testOrderGetRelatedObjects()
    {
    }

    /**
     * Test case for orderGetTags
     *
     * Get tags of the specified order.
     *
     */
    public function testOrderGetTags()
    {
    }

    /**
     * Test case for orderGetTax
     *
     * Get sum tax of the specified order.
     *
     */
    public function testOrderGetTax()
    {
    }

    /**
     * Test case for orderGetTaxGroupes
     *
     * Get tax groups of the specified order.
     *
     */
    public function testOrderGetTaxGroupes()
    {
    }

    /**
     * Test case for orderGetTotal
     *
     * Get sum gross of the specified order.
     *
     */
    public function testOrderGetTotal()
    {
    }

    /**
     * Test case for orderGetTotalCalc
     *
     * Get total gross amount of order.
     *
     */
    public function testOrderGetTotalCalc()
    {
    }

    /**
     * Test case for orderGetTotalNet
     *
     * Get total net amount of order.
     *
     */
    public function testOrderGetTotalNet()
    {
    }

    /**
     * Test case for orderRender
     *
     * Render the order document on doc server and return the metadata.
     *
     */
    public function testOrderRender()
    {
    }

    /**
     * Test case for orderSendBy
     *
     * Send an order by the desired send type.
     *
     */
    public function testOrderSendBy()
    {
    }

    /**
     * Test case for sendOrderViaEmail
     *
     * Send an order via Email.
     *
     */
    public function testSendOrderViaEmail()
    {
    }

    /**
     * Test case for sendOrderViaPost
     *
     * Send an order via post.
     *
     */
    public function testSendOrderViaPost()
    {
    }

    /**
     * Test case for updateOrder
     *
     * Update an existing order.
     *
     */
    public function testUpdateOrder()
    {
    }
}
