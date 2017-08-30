<?php
/**
 * OrderLogApi
 * PHP version 5
 *
 * @category Class
 * @package  isp-serverfarm\sevdesk\php-client
 * @author   Swagger Codegen team
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

namespace isp-serverfarm\sevdesk\php-client\sevdesk-api;

use \isp-serverfarm\sevdesk\php-client\ApiClient;
use \isp-serverfarm\sevdesk\php-client\ApiException;
use \isp-serverfarm\sevdesk\php-client\Configuration;
use \isp-serverfarm\sevdesk\php-client\ObjectSerializer;

/**
 * OrderLogApi Class Doc Comment
 *
 * @category Class
 * @package  isp-serverfarm\sevdesk\php-client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class OrderLogApi
{
    /**
     * API Client
     *
     * @var \isp-serverfarm\sevdesk\php-client\ApiClient instance of the ApiClient
     */
    protected $apiClient;

    /**
     * Constructor
     *
     * @param \isp-serverfarm\sevdesk\php-client\ApiClient|null $apiClient The api client to use
     */
    public function __construct(\isp-serverfarm\sevdesk\php-client\ApiClient $apiClient = null)
    {
        if ($apiClient === null) {
            $apiClient = new ApiClient();
        }

        $this->apiClient = $apiClient;
    }

    /**
     * Get API client
     *
     * @return \isp-serverfarm\sevdesk\php-client\ApiClient get the API client
     */
    public function getApiClient()
    {
        return $this->apiClient;
    }

    /**
     * Set the API client
     *
     * @param \isp-serverfarm\sevdesk\php-client\ApiClient $apiClient set the API client
     *
     * @return OrderLogApi
     */
    public function setApiClient(\isp-serverfarm\sevdesk\php-client\ApiClient $apiClient)
    {
        $this->apiClient = $apiClient;
        return $this;
    }

    /**
     * Operation addOrderLog
     *
     * Create a new order log
     *
     * @param string $body To create an order log, simply enter desired values after parameter&#x3D; and remove the quotation marks. (required)
     * @throws \isp-serverfarm\sevdesk\php-client\ApiException on non-2xx response
     * @return \isp-serverfarm\sevdesk\php-client\sevdesk-model\ModelOrderLog
     */
    public function addOrderLog($body)
    {
        list($response) = $this->addOrderLogWithHttpInfo($body);
        return $response;
    }

    /**
     * Operation addOrderLogWithHttpInfo
     *
     * Create a new order log
     *
     * @param string $body To create an order log, simply enter desired values after parameter&#x3D; and remove the quotation marks. (required)
     * @throws \isp-serverfarm\sevdesk\php-client\ApiException on non-2xx response
     * @return array of \isp-serverfarm\sevdesk\php-client\sevdesk-model\ModelOrderLog, HTTP status code, HTTP response headers (array of strings)
     */
    public function addOrderLogWithHttpInfo($body)
    {
        // verify the required parameter 'body' is set
        if ($body === null) {
            throw new \InvalidArgumentException('Missing the required parameter $body when calling addOrderLog');
        }
        // parse inputs
        $resourcePath = "/OrderLog";
        $httpBody = '';
        $queryParams = [];
        $headerParams = [];
        $formParams = [];
        $_header_accept = $this->apiClient->selectHeaderAccept(['application/xml', 'application/json']);
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType(['application/x-www-form-urlencoded']);

        // body params
        $_tempBody = null;
        if (isset($body)) {
            $_tempBody = $body;
        }

        // for model (json/xml)
        if (isset($_tempBody)) {
            $httpBody = $_tempBody; // $_tempBody is the method argument, if present
        } elseif (count($formParams) > 0) {
            $httpBody = $formParams; // for HTTP post (form)
        }
        // this endpoint requires API key authentication
        $apiKey = $this->apiClient->getApiKeyWithPrefix('token');
        if (strlen($apiKey) !== 0) {
            $queryParams['token'] = $apiKey;
        }
        // make the API Call
        try {
            list($response, $statusCode, $httpHeader) = $this->apiClient->callApi(
                $resourcePath,
                'POST',
                $queryParams,
                $httpBody,
                $headerParams,
                '\isp-serverfarm\sevdesk\php-client\sevdesk-model\ModelOrderLog',
                '/OrderLog'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\isp-serverfarm\sevdesk\php-client\sevdesk-model\ModelOrderLog', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 201:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\isp-serverfarm\sevdesk\php-client\sevdesk-model\ModelOrderLog', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation deleteOrderLog
     *
     * Delete an existing order log
     *
     * @param int $id Id of order log you want to delete (required)
     * @throws \isp-serverfarm\sevdesk\php-client\ApiException on non-2xx response
     * @return void
     */
    public function deleteOrderLog($id)
    {
        list($response) = $this->deleteOrderLogWithHttpInfo($id);
        return $response;
    }

    /**
     * Operation deleteOrderLogWithHttpInfo
     *
     * Delete an existing order log
     *
     * @param int $id Id of order log you want to delete (required)
     * @throws \isp-serverfarm\sevdesk\php-client\ApiException on non-2xx response
     * @return array of null, HTTP status code, HTTP response headers (array of strings)
     */
    public function deleteOrderLogWithHttpInfo($id)
    {
        // verify the required parameter 'id' is set
        if ($id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $id when calling deleteOrderLog');
        }
        // parse inputs
        $resourcePath = "/OrderLog/{id}";
        $httpBody = '';
        $queryParams = [];
        $headerParams = [];
        $formParams = [];
        $_header_accept = $this->apiClient->selectHeaderAccept(['application/xml', 'application/json']);
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType(['application/x-www-form-urlencoded']);

        // path params
        if ($id !== null) {
            $resourcePath = str_replace(
                "{" . "id" . "}",
                $this->apiClient->getSerializer()->toPathValue($id),
                $resourcePath
            );
        }

        // for model (json/xml)
        if (isset($_tempBody)) {
            $httpBody = $_tempBody; // $_tempBody is the method argument, if present
        } elseif (count($formParams) > 0) {
            $httpBody = $formParams; // for HTTP post (form)
        }
        // this endpoint requires API key authentication
        $apiKey = $this->apiClient->getApiKeyWithPrefix('token');
        if (strlen($apiKey) !== 0) {
            $queryParams['token'] = $apiKey;
        }
        // make the API Call
        try {
            list($response, $statusCode, $httpHeader) = $this->apiClient->callApi(
                $resourcePath,
                'DELETE',
                $queryParams,
                $httpBody,
                $headerParams,
                null,
                '/OrderLog/{id}'
            );

            return [null, $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
            }

            throw $e;
        }
    }

    /**
     * Operation getOrderLogs
     *
     * Get an overview of order logs
     *
     * @param int $limit Limits the number of entries returned. Default is 100 (optional, default to 100)
     * @param int $offset Set the index where the returned order logs start. Default is 0 (optional, default to 0)
     * @param string[] $embed Get some additional information. Embed can handle multiple values, they must be separated by comma. Default &#x60;&#x60;. (optional)
     * @throws \isp-serverfarm\sevdesk\php-client\ApiException on non-2xx response
     * @return \isp-serverfarm\sevdesk\php-client\sevdesk-model\ModelOrderLog
     */
    public function getOrderLogs($limit = '100', $offset = '0', $embed = null)
    {
        list($response) = $this->getOrderLogsWithHttpInfo($limit, $offset, $embed);
        return $response;
    }

    /**
     * Operation getOrderLogsWithHttpInfo
     *
     * Get an overview of order logs
     *
     * @param int $limit Limits the number of entries returned. Default is 100 (optional, default to 100)
     * @param int $offset Set the index where the returned order logs start. Default is 0 (optional, default to 0)
     * @param string[] $embed Get some additional information. Embed can handle multiple values, they must be separated by comma. Default &#x60;&#x60;. (optional)
     * @throws \isp-serverfarm\sevdesk\php-client\ApiException on non-2xx response
     * @return array of \isp-serverfarm\sevdesk\php-client\sevdesk-model\ModelOrderLog, HTTP status code, HTTP response headers (array of strings)
     */
    public function getOrderLogsWithHttpInfo($limit = '100', $offset = '0', $embed = null)
    {
        // parse inputs
        $resourcePath = "/OrderLog";
        $httpBody = '';
        $queryParams = [];
        $headerParams = [];
        $formParams = [];
        $_header_accept = $this->apiClient->selectHeaderAccept(['application/xml', 'application/json']);
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType(['application/x-www-form-urlencoded']);

        // query params
        if ($limit !== null) {
            $queryParams['limit'] = $this->apiClient->getSerializer()->toQueryValue($limit);
        }
        // query params
        if ($offset !== null) {
            $queryParams['offset'] = $this->apiClient->getSerializer()->toQueryValue($offset);
        }
        // query params
        if (is_array($embed)) {
            $embed = $this->apiClient->getSerializer()->serializeCollection($embed, 'csv', true);
        }
        if ($embed !== null) {
            $queryParams['embed'] = $this->apiClient->getSerializer()->toQueryValue($embed);
        }

        // for model (json/xml)
        if (isset($_tempBody)) {
            $httpBody = $_tempBody; // $_tempBody is the method argument, if present
        } elseif (count($formParams) > 0) {
            $httpBody = $formParams; // for HTTP post (form)
        }
        // this endpoint requires API key authentication
        $apiKey = $this->apiClient->getApiKeyWithPrefix('token');
        if (strlen($apiKey) !== 0) {
            $queryParams['token'] = $apiKey;
        }
        // make the API Call
        try {
            list($response, $statusCode, $httpHeader) = $this->apiClient->callApi(
                $resourcePath,
                'GET',
                $queryParams,
                $httpBody,
                $headerParams,
                '\isp-serverfarm\sevdesk\php-client\sevdesk-model\ModelOrderLog',
                '/OrderLog'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\isp-serverfarm\sevdesk\php-client\sevdesk-model\ModelOrderLog', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\isp-serverfarm\sevdesk\php-client\sevdesk-model\ModelOrderLog', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation updateOrderLog
     *
     * Update an existing order log
     *
     * @param int $id Id of order log you want to update (required)
     * @param string $body Parameters which need to be updated. Please refer to the description from create order log.    Enter the parameters according to the syntax: parameter1&#x3D;&amp;parameter2&#x3D; and remove the quotation marks! (optional)
     * @throws \isp-serverfarm\sevdesk\php-client\ApiException on non-2xx response
     * @return \isp-serverfarm\sevdesk\php-client\sevdesk-model\ModelOrderLog
     */
    public function updateOrderLog($id, $body = null)
    {
        list($response) = $this->updateOrderLogWithHttpInfo($id, $body);
        return $response;
    }

    /**
     * Operation updateOrderLogWithHttpInfo
     *
     * Update an existing order log
     *
     * @param int $id Id of order log you want to update (required)
     * @param string $body Parameters which need to be updated. Please refer to the description from create order log.    Enter the parameters according to the syntax: parameter1&#x3D;&amp;parameter2&#x3D; and remove the quotation marks! (optional)
     * @throws \isp-serverfarm\sevdesk\php-client\ApiException on non-2xx response
     * @return array of \isp-serverfarm\sevdesk\php-client\sevdesk-model\ModelOrderLog, HTTP status code, HTTP response headers (array of strings)
     */
    public function updateOrderLogWithHttpInfo($id, $body = null)
    {
        // verify the required parameter 'id' is set
        if ($id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $id when calling updateOrderLog');
        }
        // parse inputs
        $resourcePath = "/OrderLog/{id}";
        $httpBody = '';
        $queryParams = [];
        $headerParams = [];
        $formParams = [];
        $_header_accept = $this->apiClient->selectHeaderAccept(['application/xml', 'application/json']);
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType(['application/x-www-form-urlencoded']);

        // path params
        if ($id !== null) {
            $resourcePath = str_replace(
                "{" . "id" . "}",
                $this->apiClient->getSerializer()->toPathValue($id),
                $resourcePath
            );
        }
        // body params
        $_tempBody = null;
        if (isset($body)) {
            $_tempBody = $body;
        }

        // for model (json/xml)
        if (isset($_tempBody)) {
            $httpBody = $_tempBody; // $_tempBody is the method argument, if present
        } elseif (count($formParams) > 0) {
            $httpBody = $formParams; // for HTTP post (form)
        }
        // this endpoint requires API key authentication
        $apiKey = $this->apiClient->getApiKeyWithPrefix('token');
        if (strlen($apiKey) !== 0) {
            $queryParams['token'] = $apiKey;
        }
        // make the API Call
        try {
            list($response, $statusCode, $httpHeader) = $this->apiClient->callApi(
                $resourcePath,
                'PUT',
                $queryParams,
                $httpBody,
                $headerParams,
                '\isp-serverfarm\sevdesk\php-client\sevdesk-model\ModelOrderLog',
                '/OrderLog/{id}'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\isp-serverfarm\sevdesk\php-client\sevdesk-model\ModelOrderLog', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\isp-serverfarm\sevdesk\php-client\sevdesk-model\ModelOrderLog', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }
}
