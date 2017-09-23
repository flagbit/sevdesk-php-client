<?php
/**
 * AccountingTypeApi
 * PHP version 5
 *
 * @category Class
 * @package  ispserverfarm\sevdesk
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

namespace ispserverfarm\sevdesk\sevDeskApi;

use \ispserverfarm\sevdesk\ApiClient;
use \ispserverfarm\sevdesk\ApiException;
use \ispserverfarm\sevdesk\Configuration;
use \ispserverfarm\sevdesk\ObjectSerializer;

/**
 * AccountingTypeApi Class Doc Comment
 *
 * @category Class
 * @package  ispserverfarm\sevdesk
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class AccountingTypeApi
{
    /**
     * API Client
     *
     * @var \ispserverfarm\sevdesk\ApiClient instance of the ApiClient
     */
    protected $apiClient;

    /**
     * Constructor
     *
     * @param \ispserverfarm\sevdesk\ApiClient|null $apiClient The api client to use
     */
    public function __construct(\ispserverfarm\sevdesk\ApiClient $apiClient = null)
    {
        if ($apiClient === null) {
            $apiClient = new ApiClient();
        }

        $this->apiClient = $apiClient;
    }

    /**
     * Get API client
     *
     * @return \ispserverfarm\sevdesk\ApiClient get the API client
     */
    public function getApiClient()
    {
        return $this->apiClient;
    }

    /**
     * Set the API client
     *
     * @param \ispserverfarm\sevdesk\ApiClient $apiClient set the API client
     *
     * @return AccountingTypeApi
     */
    public function setApiClient(\ispserverfarm\sevdesk\ApiClient $apiClient)
    {
        $this->apiClient = $apiClient;
        return $this;
    }

    /**
     * Operation accountingTypeGetAccountingNumber
     *
     * Get accounting system number of the specified accounting type
     *
     * @param int $id Id of the accounting type for which you want to get the accounting system number (required)
     * @throws \ispserverfarm\sevdesk\ApiException on non-2xx response
     * @return void
     */
    public function accountingTypeGetAccountingNumber($id)
    {
        list($response) = $this->accountingTypeGetAccountingNumberWithHttpInfo($id);
        return $response;
    }

    /**
     * Operation accountingTypeGetAccountingNumberWithHttpInfo
     *
     * Get accounting system number of the specified accounting type
     *
     * @param int $id Id of the accounting type for which you want to get the accounting system number (required)
     * @throws \ispserverfarm\sevdesk\ApiException on non-2xx response
     * @return array of null, HTTP status code, HTTP response headers (array of strings)
     */
    public function accountingTypeGetAccountingNumberWithHttpInfo($id)
    {
        // verify the required parameter 'id' is set
        if ($id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $id when calling accountingTypeGetAccountingNumber');
        }
        // parse inputs
        $resourcePath = "/AccountingType/{id}/getAccountingNumber";
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
                'GET',
                $queryParams,
                $httpBody,
                $headerParams,
                null,
                '/AccountingType/{id}/getAccountingNumber'
            );

            return [null, $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
            }

            throw $e;
        }
    }

    /**
     * Operation accountingTypeGetAccountingNumberDepreciation
     *
     * Get accounting system number depreciation of the specified accounting type
     *
     * @param int $id Id of the accounting type for which you want to get the accounting system number depreciation (required)
     * @throws \ispserverfarm\sevdesk\ApiException on non-2xx response
     * @return void
     */
    public function accountingTypeGetAccountingNumberDepreciation($id)
    {
        list($response) = $this->accountingTypeGetAccountingNumberDepreciationWithHttpInfo($id);
        return $response;
    }

    /**
     * Operation accountingTypeGetAccountingNumberDepreciationWithHttpInfo
     *
     * Get accounting system number depreciation of the specified accounting type
     *
     * @param int $id Id of the accounting type for which you want to get the accounting system number depreciation (required)
     * @throws \ispserverfarm\sevdesk\ApiException on non-2xx response
     * @return array of null, HTTP status code, HTTP response headers (array of strings)
     */
    public function accountingTypeGetAccountingNumberDepreciationWithHttpInfo($id)
    {
        // verify the required parameter 'id' is set
        if ($id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $id when calling accountingTypeGetAccountingNumberDepreciation');
        }
        // parse inputs
        $resourcePath = "/AccountingType/{id}/getAccountingNumberDepreciation";
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
                'GET',
                $queryParams,
                $httpBody,
                $headerParams,
                null,
                '/AccountingType/{id}/getAccountingNumberDepreciation'
            );

            return [null, $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
            }

            throw $e;
        }
    }

    /**
     * Operation accountingTypeGetAccountingSystemNumber
     *
     * Get accounting system number of the specified accounting type
     *
     * @param int $id Id of the accounting type for which you want to get the accounting system number (required)
     * @param string[] $embed Get some additional information. Embed can handle multiple values, they must be separated by comma. Default &#x60;&#x60;. (optional)
     * @throws \ispserverfarm\sevdesk\ApiException on non-2xx response
     * @return \ispserverfarm\sevdesk\sevDeskModel\ModelAccountingSystemNumber
     */
    public function accountingTypeGetAccountingSystemNumber($id, $embed = null)
    {
        list($response) = $this->accountingTypeGetAccountingSystemNumberWithHttpInfo($id, $embed);
        return $response;
    }

    /**
     * Operation accountingTypeGetAccountingSystemNumberWithHttpInfo
     *
     * Get accounting system number of the specified accounting type
     *
     * @param int $id Id of the accounting type for which you want to get the accounting system number (required)
     * @param string[] $embed Get some additional information. Embed can handle multiple values, they must be separated by comma. Default &#x60;&#x60;. (optional)
     * @throws \ispserverfarm\sevdesk\ApiException on non-2xx response
     * @return array of \ispserverfarm\sevdesk\sevDeskModel\ModelAccountingSystemNumber, HTTP status code, HTTP response headers (array of strings)
     */
    public function accountingTypeGetAccountingSystemNumberWithHttpInfo($id, $embed = null)
    {
        // verify the required parameter 'id' is set
        if ($id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $id when calling accountingTypeGetAccountingSystemNumber');
        }
        // parse inputs
        $resourcePath = "/AccountingType/{id}/getAccountingSystemNumber";
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
        if (is_array($embed)) {
            $embed = $this->apiClient->getSerializer()->serializeCollection($embed, 'csv', true);
        }
        if ($embed !== null) {
            $queryParams['embed'] = $this->apiClient->getSerializer()->toQueryValue($embed);
        }
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
                'GET',
                $queryParams,
                $httpBody,
                $headerParams,
                '\ispserverfarm\sevdesk\sevDeskModel\ModelAccountingSystemNumber',
                '/AccountingType/{id}/getAccountingSystemNumber'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\ispserverfarm\sevdesk\sevDeskModel\ModelAccountingSystemNumber', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\ispserverfarm\sevdesk\sevDeskModel\ModelAccountingSystemNumber', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation addAccountingType
     *
     * Create a new accounting type
     *
     * @param string $body To create an accounting type, simply enter desired values after parameter&#x3D; and remove the quotation marks. (required)
     * @throws \ispserverfarm\sevdesk\ApiException on non-2xx response
     * @return \ispserverfarm\sevdesk\sevDeskModel\ModelAccountingType
     */
    public function addAccountingType($body)
    {
        list($response) = $this->addAccountingTypeWithHttpInfo($body);
        return $response;
    }

    /**
     * Operation addAccountingTypeWithHttpInfo
     *
     * Create a new accounting type
     *
     * @param string $body To create an accounting type, simply enter desired values after parameter&#x3D; and remove the quotation marks. (required)
     * @throws \ispserverfarm\sevdesk\ApiException on non-2xx response
     * @return array of \ispserverfarm\sevdesk\sevDeskModel\ModelAccountingType, HTTP status code, HTTP response headers (array of strings)
     */
    public function addAccountingTypeWithHttpInfo($body)
    {
        // verify the required parameter 'body' is set
        if ($body === null) {
            throw new \InvalidArgumentException('Missing the required parameter $body when calling addAccountingType');
        }
        // parse inputs
        $resourcePath = "/AccountingType";
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
                '\ispserverfarm\sevdesk\sevDeskModel\ModelAccountingType',
                '/AccountingType'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\ispserverfarm\sevdesk\sevDeskModel\ModelAccountingType', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 201:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\ispserverfarm\sevdesk\sevDeskModel\ModelAccountingType', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation addAccountingTypeFactory
     *
     * Create a new accounting type
     *
     * @param string $body To create an accounting type, simply enter desired values after parameter&#x3D; and remove the quotation marks. (required)
     * @throws \ispserverfarm\sevdesk\ApiException on non-2xx response
     * @return \ispserverfarm\sevdesk\sevDeskModel\ModelAccountingType
     */
    public function addAccountingTypeFactory($body)
    {
        list($response) = $this->addAccountingTypeFactoryWithHttpInfo($body);
        return $response;
    }

    /**
     * Operation addAccountingTypeFactoryWithHttpInfo
     *
     * Create a new accounting type
     *
     * @param string $body To create an accounting type, simply enter desired values after parameter&#x3D; and remove the quotation marks. (required)
     * @throws \ispserverfarm\sevdesk\ApiException on non-2xx response
     * @return array of \ispserverfarm\sevdesk\sevDeskModel\ModelAccountingType, HTTP status code, HTTP response headers (array of strings)
     */
    public function addAccountingTypeFactoryWithHttpInfo($body)
    {
        // verify the required parameter 'body' is set
        if ($body === null) {
            throw new \InvalidArgumentException('Missing the required parameter $body when calling addAccountingTypeFactory');
        }
        // parse inputs
        $resourcePath = "/AccountingType/Factory/createType";
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
                '\ispserverfarm\sevdesk\sevDeskModel\ModelAccountingType',
                '/AccountingType/Factory/createType'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\ispserverfarm\sevdesk\sevDeskModel\ModelAccountingType', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 201:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\ispserverfarm\sevdesk\sevDeskModel\ModelAccountingType', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation deleteAccountingType
     *
     * Delete an existing accounting type
     *
     * @param int $id id of accounting type you want to delete (required)
     * @throws \ispserverfarm\sevdesk\ApiException on non-2xx response
     * @return void
     */
    public function deleteAccountingType($id)
    {
        list($response) = $this->deleteAccountingTypeWithHttpInfo($id);
        return $response;
    }

    /**
     * Operation deleteAccountingTypeWithHttpInfo
     *
     * Delete an existing accounting type
     *
     * @param int $id id of accounting type you want to delete (required)
     * @throws \ispserverfarm\sevdesk\ApiException on non-2xx response
     * @return array of null, HTTP status code, HTTP response headers (array of strings)
     */
    public function deleteAccountingTypeWithHttpInfo($id)
    {
        // verify the required parameter 'id' is set
        if ($id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $id when calling deleteAccountingType');
        }
        // parse inputs
        $resourcePath = "/AccountingType/{id}";
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
                '/AccountingType/{id}'
            );

            return [null, $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
            }

            throw $e;
        }
    }

    /**
     * Operation getAccountingTypes
     *
     * Get an overview of all accounting types
     *
     * @param int $limit Limits the number of entries returned. Default is 1000 (optional, default to 1000)
     * @param int $offset Set the index where the returned accounting types start. Default is 0 (optional, default to 0)
     * @param string[] $embed Get some additional information. Embed can handle multiple values, they must be separated by comma. Default &#x60;&#x60;. (optional)
     * @throws \ispserverfarm\sevdesk\ApiException on non-2xx response
     * @return \ispserverfarm\sevdesk\sevDeskModel\ModelAccountingType
     */
    public function getAccountingTypes($limit = '1000', $offset = '0', $embed = null)
    {
        list($response) = $this->getAccountingTypesWithHttpInfo($limit, $offset, $embed);
        return $response;
    }

    /**
     * Operation getAccountingTypesWithHttpInfo
     *
     * Get an overview of all accounting types
     *
     * @param int $limit Limits the number of entries returned. Default is 1000 (optional, default to 1000)
     * @param int $offset Set the index where the returned accounting types start. Default is 0 (optional, default to 0)
     * @param string[] $embed Get some additional information. Embed can handle multiple values, they must be separated by comma. Default &#x60;&#x60;. (optional)
     * @throws \ispserverfarm\sevdesk\ApiException on non-2xx response
     * @return array of \ispserverfarm\sevdesk\sevDeskModel\ModelAccountingType, HTTP status code, HTTP response headers (array of strings)
     */
    public function getAccountingTypesWithHttpInfo($limit = '1000', $offset = '0', $embed = null)
    {
        // parse inputs
        $resourcePath = "/AccountingType";
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
                '\ispserverfarm\sevdesk\sevDeskModel\ModelAccountingType',
                '/AccountingType'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\ispserverfarm\sevdesk\sevDeskModel\ModelAccountingType', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\ispserverfarm\sevdesk\sevDeskModel\ModelAccountingType', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation updateAccountingType
     *
     * Update an existing accounting type
     *
     * @param int $id id of accounting type you want to update (required)
     * @param string $body Parameters which need to be updated. Please refer to the description from create accounting type.    Append the parameters according to the syntax: parameter1&#x3D;&amp;parameter2&#x3D; and remove the quotation marks! (optional)
     * @throws \ispserverfarm\sevdesk\ApiException on non-2xx response
     * @return \ispserverfarm\sevdesk\sevDeskModel\ModelAccountingType
     */
    public function updateAccountingType($id, $body = null)
    {
        list($response) = $this->updateAccountingTypeWithHttpInfo($id, $body);
        return $response;
    }

    /**
     * Operation updateAccountingTypeWithHttpInfo
     *
     * Update an existing accounting type
     *
     * @param int $id id of accounting type you want to update (required)
     * @param string $body Parameters which need to be updated. Please refer to the description from create accounting type.    Append the parameters according to the syntax: parameter1&#x3D;&amp;parameter2&#x3D; and remove the quotation marks! (optional)
     * @throws \ispserverfarm\sevdesk\ApiException on non-2xx response
     * @return array of \ispserverfarm\sevdesk\sevDeskModel\ModelAccountingType, HTTP status code, HTTP response headers (array of strings)
     */
    public function updateAccountingTypeWithHttpInfo($id, $body = null)
    {
        // verify the required parameter 'id' is set
        if ($id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $id when calling updateAccountingType');
        }
        // parse inputs
        $resourcePath = "/AccountingType/{id}";
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
                '\ispserverfarm\sevdesk\sevDeskModel\ModelAccountingType',
                '/AccountingType/{id}'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\ispserverfarm\sevdesk\sevDeskModel\ModelAccountingType', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\ispserverfarm\sevdesk\sevDeskModel\ModelAccountingType', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }
}