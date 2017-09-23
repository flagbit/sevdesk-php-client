<?php
/**
 * DocServerApi
 * PHP version 5
 *
 * @category Class
 * @package  ispserverfarm\sevdesk\phpclient
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

namespace ispserverfarm\sevdesk\phpclient\api;

use \ispserverfarm\sevdesk\phpclient\ApiClient;
use \ispserverfarm\sevdesk\phpclient\ApiException;
use \ispserverfarm\sevdesk\phpclient\Configuration;
use \ispserverfarm\sevdesk\phpclient\ObjectSerializer;

/**
 * DocServerApi Class Doc Comment
 *
 * @category Class
 * @package  ispserverfarm\sevdesk\phpclient
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class DocServerApi
{
    /**
     * API Client
     *
     * @var \ispserverfarm\sevdesk\phpclient\ApiClient instance of the ApiClient
     */
    protected $apiClient;

    /**
     * Constructor
     *
     * @param \ispserverfarm\sevdesk\phpclient\ApiClient|null $apiClient The api client to use
     */
    public function __construct(\ispserverfarm\sevdesk\phpclient\ApiClient $apiClient = null)
    {
        if ($apiClient === null) {
            $apiClient = new ApiClient();
        }

        $this->apiClient = $apiClient;
    }

    /**
     * Get API client
     *
     * @return \ispserverfarm\sevdesk\phpclient\ApiClient get the API client
     */
    public function getApiClient()
    {
        return $this->apiClient;
    }

    /**
     * Set the API client
     *
     * @param \ispserverfarm\sevdesk\phpclient\ApiClient $apiClient set the API client
     *
     * @return DocServerApi
     */
    public function setApiClient(\ispserverfarm\sevdesk\phpclient\ApiClient $apiClient)
    {
        $this->apiClient = $apiClient;
        return $this;
    }

    /**
     * Operation docServerDeleteLetterPaper
     *
     * Delete a specified letter paper
     *
     * @param string $body Enter the id of the letter paper you want to delete after id&#x3D; and remove the quotation marks! (required)
     * @throws \ispserverfarm\sevdesk\phpclient\ApiException on non-2xx response
     * @return void
     */
    public function docServerDeleteLetterPaper($body)
    {
        list($response) = $this->docServerDeleteLetterPaperWithHttpInfo($body);
        return $response;
    }

    /**
     * Operation docServerDeleteLetterPaperWithHttpInfo
     *
     * Delete a specified letter paper
     *
     * @param string $body Enter the id of the letter paper you want to delete after id&#x3D; and remove the quotation marks! (required)
     * @throws \ispserverfarm\sevdesk\phpclient\ApiException on non-2xx response
     * @return array of null, HTTP status code, HTTP response headers (array of strings)
     */
    public function docServerDeleteLetterPaperWithHttpInfo($body)
    {
        // verify the required parameter 'body' is set
        if ($body === null) {
            throw new \InvalidArgumentException('Missing the required parameter $body when calling docServerDeleteLetterPaper');
        }
        // parse inputs
        $resourcePath = "/DocServer/deleteLetterpaper";
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
                null,
                '/DocServer/deleteLetterpaper'
            );

            return [null, $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
            }

            throw $e;
        }
    }

    /**
     * Operation docServerDeleteTemplate
     *
     * Delete a specified template
     *
     * @param string $body Enter the id of the template you want to set as the default template after id&#x3D; and remove the quotation marks! (required)
     * @throws \ispserverfarm\sevdesk\phpclient\ApiException on non-2xx response
     * @return void
     */
    public function docServerDeleteTemplate($body)
    {
        list($response) = $this->docServerDeleteTemplateWithHttpInfo($body);
        return $response;
    }

    /**
     * Operation docServerDeleteTemplateWithHttpInfo
     *
     * Delete a specified template
     *
     * @param string $body Enter the id of the template you want to set as the default template after id&#x3D; and remove the quotation marks! (required)
     * @throws \ispserverfarm\sevdesk\phpclient\ApiException on non-2xx response
     * @return array of null, HTTP status code, HTTP response headers (array of strings)
     */
    public function docServerDeleteTemplateWithHttpInfo($body)
    {
        // verify the required parameter 'body' is set
        if ($body === null) {
            throw new \InvalidArgumentException('Missing the required parameter $body when calling docServerDeleteTemplate');
        }
        // parse inputs
        $resourcePath = "/DocServer/deleteTemplate";
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
                null,
                '/DocServer/deleteTemplate'
            );

            return [null, $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
            }

            throw $e;
        }
    }

    /**
     * Operation docServerGetLetterPapers
     *
     * Get an overview of all letter papers
     *
     * @throws \ispserverfarm\sevdesk\phpclient\ApiException on non-2xx response
     * @return void
     */
    public function docServerGetLetterPapers()
    {
        list($response) = $this->docServerGetLetterPapersWithHttpInfo();
        return $response;
    }

    /**
     * Operation docServerGetLetterPapersWithHttpInfo
     *
     * Get an overview of all letter papers
     *
     * @throws \ispserverfarm\sevdesk\phpclient\ApiException on non-2xx response
     * @return array of null, HTTP status code, HTTP response headers (array of strings)
     */
    public function docServerGetLetterPapersWithHttpInfo()
    {
        // parse inputs
        $resourcePath = "/DocServer/getLetterpapers";
        $httpBody = '';
        $queryParams = [];
        $headerParams = [];
        $formParams = [];
        $_header_accept = $this->apiClient->selectHeaderAccept(['application/xml', 'application/json']);
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType(['application/x-www-form-urlencoded']);


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
                '/DocServer/getLetterpapers'
            );

            return [null, $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
            }

            throw $e;
        }
    }

    /**
     * Operation docServerGetLetterPapersWithThumb
     *
     * Get an overview of all letter papers with their thumb
     *
     * @throws \ispserverfarm\sevdesk\phpclient\ApiException on non-2xx response
     * @return void
     */
    public function docServerGetLetterPapersWithThumb()
    {
        list($response) = $this->docServerGetLetterPapersWithThumbWithHttpInfo();
        return $response;
    }

    /**
     * Operation docServerGetLetterPapersWithThumbWithHttpInfo
     *
     * Get an overview of all letter papers with their thumb
     *
     * @throws \ispserverfarm\sevdesk\phpclient\ApiException on non-2xx response
     * @return array of null, HTTP status code, HTTP response headers (array of strings)
     */
    public function docServerGetLetterPapersWithThumbWithHttpInfo()
    {
        // parse inputs
        $resourcePath = "/DocServer/getLetterpapersWithThumb";
        $httpBody = '';
        $queryParams = [];
        $headerParams = [];
        $formParams = [];
        $_header_accept = $this->apiClient->selectHeaderAccept(['application/xml', 'application/json']);
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType(['application/x-www-form-urlencoded']);


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
                '/DocServer/getLetterpapersWithThumb'
            );

            return [null, $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
            }

            throw $e;
        }
    }

    /**
     * Operation docServerGetTemplates
     *
     * Get an overview of all templates
     *
     * @throws \ispserverfarm\sevdesk\phpclient\ApiException on non-2xx response
     * @return void
     */
    public function docServerGetTemplates()
    {
        list($response) = $this->docServerGetTemplatesWithHttpInfo();
        return $response;
    }

    /**
     * Operation docServerGetTemplatesWithHttpInfo
     *
     * Get an overview of all templates
     *
     * @throws \ispserverfarm\sevdesk\phpclient\ApiException on non-2xx response
     * @return array of null, HTTP status code, HTTP response headers (array of strings)
     */
    public function docServerGetTemplatesWithHttpInfo()
    {
        // parse inputs
        $resourcePath = "/DocServer/getTemplates";
        $httpBody = '';
        $queryParams = [];
        $headerParams = [];
        $formParams = [];
        $_header_accept = $this->apiClient->selectHeaderAccept(['application/xml', 'application/json']);
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType(['application/x-www-form-urlencoded']);


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
                '/DocServer/getTemplates'
            );

            return [null, $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
            }

            throw $e;
        }
    }

    /**
     * Operation docServerGetTemplatesWithThumb
     *
     * Get an overview of all templates with their thumb
     *
     * @throws \ispserverfarm\sevdesk\phpclient\ApiException on non-2xx response
     * @return void
     */
    public function docServerGetTemplatesWithThumb()
    {
        list($response) = $this->docServerGetTemplatesWithThumbWithHttpInfo();
        return $response;
    }

    /**
     * Operation docServerGetTemplatesWithThumbWithHttpInfo
     *
     * Get an overview of all templates with their thumb
     *
     * @throws \ispserverfarm\sevdesk\phpclient\ApiException on non-2xx response
     * @return array of null, HTTP status code, HTTP response headers (array of strings)
     */
    public function docServerGetTemplatesWithThumbWithHttpInfo()
    {
        // parse inputs
        $resourcePath = "/DocServer/getTemplatesWithThumb";
        $httpBody = '';
        $queryParams = [];
        $headerParams = [];
        $formParams = [];
        $_header_accept = $this->apiClient->selectHeaderAccept(['application/xml', 'application/json']);
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType(['application/x-www-form-urlencoded']);


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
                '/DocServer/getTemplatesWithThumb'
            );

            return [null, $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
            }

            throw $e;
        }
    }

    /**
     * Operation docServerSetDefaultLetterPaper
     *
     * Set a letter papers as the default letter paper
     *
     * @param string $body Enter the id of the letter paper you want to set as the default letter paper after id&#x3D; and remove the quotation marks! (required)
     * @throws \ispserverfarm\sevdesk\phpclient\ApiException on non-2xx response
     * @return void
     */
    public function docServerSetDefaultLetterPaper($body)
    {
        list($response) = $this->docServerSetDefaultLetterPaperWithHttpInfo($body);
        return $response;
    }

    /**
     * Operation docServerSetDefaultLetterPaperWithHttpInfo
     *
     * Set a letter papers as the default letter paper
     *
     * @param string $body Enter the id of the letter paper you want to set as the default letter paper after id&#x3D; and remove the quotation marks! (required)
     * @throws \ispserverfarm\sevdesk\phpclient\ApiException on non-2xx response
     * @return array of null, HTTP status code, HTTP response headers (array of strings)
     */
    public function docServerSetDefaultLetterPaperWithHttpInfo($body)
    {
        // verify the required parameter 'body' is set
        if ($body === null) {
            throw new \InvalidArgumentException('Missing the required parameter $body when calling docServerSetDefaultLetterPaper');
        }
        // parse inputs
        $resourcePath = "/DocServer/setDefaultLetterpaper";
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
                null,
                '/DocServer/setDefaultLetterpaper'
            );

            return [null, $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
            }

            throw $e;
        }
    }

    /**
     * Operation docServerSetDefaultTemplate
     *
     * Set a template as the default template
     *
     * @param string $body Enter the id of the template you want to set as the default template after id&#x3D; and remove the quotation marks! (required)
     * @throws \ispserverfarm\sevdesk\phpclient\ApiException on non-2xx response
     * @return void
     */
    public function docServerSetDefaultTemplate($body)
    {
        list($response) = $this->docServerSetDefaultTemplateWithHttpInfo($body);
        return $response;
    }

    /**
     * Operation docServerSetDefaultTemplateWithHttpInfo
     *
     * Set a template as the default template
     *
     * @param string $body Enter the id of the template you want to set as the default template after id&#x3D; and remove the quotation marks! (required)
     * @throws \ispserverfarm\sevdesk\phpclient\ApiException on non-2xx response
     * @return array of null, HTTP status code, HTTP response headers (array of strings)
     */
    public function docServerSetDefaultTemplateWithHttpInfo($body)
    {
        // verify the required parameter 'body' is set
        if ($body === null) {
            throw new \InvalidArgumentException('Missing the required parameter $body when calling docServerSetDefaultTemplate');
        }
        // parse inputs
        $resourcePath = "/DocServer/setDefaultTemplate";
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
                null,
                '/DocServer/setDefaultTemplate'
            );

            return [null, $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
            }

            throw $e;
        }
    }

    /**
     * Operation docServerStoreLetterPaper
     *
     * Store a letter paper on the doc server
     *
     * @param string $body Enter the desired values after parameter&#x3D; and remove the quotation marks!    Be aware that you need to enter the base64 of the pdf you want as a letter paper after pdf&#x3D;! (required)
     * @throws \ispserverfarm\sevdesk\phpclient\ApiException on non-2xx response
     * @return void
     */
    public function docServerStoreLetterPaper($body)
    {
        list($response) = $this->docServerStoreLetterPaperWithHttpInfo($body);
        return $response;
    }

    /**
     * Operation docServerStoreLetterPaperWithHttpInfo
     *
     * Store a letter paper on the doc server
     *
     * @param string $body Enter the desired values after parameter&#x3D; and remove the quotation marks!    Be aware that you need to enter the base64 of the pdf you want as a letter paper after pdf&#x3D;! (required)
     * @throws \ispserverfarm\sevdesk\phpclient\ApiException on non-2xx response
     * @return array of null, HTTP status code, HTTP response headers (array of strings)
     */
    public function docServerStoreLetterPaperWithHttpInfo($body)
    {
        // verify the required parameter 'body' is set
        if ($body === null) {
            throw new \InvalidArgumentException('Missing the required parameter $body when calling docServerStoreLetterPaper');
        }
        // parse inputs
        $resourcePath = "/DocServer/storeLetterpaper";
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
                null,
                '/DocServer/storeLetterpaper'
            );

            return [null, $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
            }

            throw $e;
        }
    }

    /**
     * Operation docServerStoreTemplate
     *
     * Store a template on the doc server
     *
     * @param string $body Enter the desired values after parameter&#x3D; and remove the quotation marks!    Be aware that you need to enter the html code of your template after html&#x3D;! Type can be Invoice, Invoicereminder, Order, Contractnote, Packingllist, Letter. (required)
     * @throws \ispserverfarm\sevdesk\phpclient\ApiException on non-2xx response
     * @return void
     */
    public function docServerStoreTemplate($body)
    {
        list($response) = $this->docServerStoreTemplateWithHttpInfo($body);
        return $response;
    }

    /**
     * Operation docServerStoreTemplateWithHttpInfo
     *
     * Store a template on the doc server
     *
     * @param string $body Enter the desired values after parameter&#x3D; and remove the quotation marks!    Be aware that you need to enter the html code of your template after html&#x3D;! Type can be Invoice, Invoicereminder, Order, Contractnote, Packingllist, Letter. (required)
     * @throws \ispserverfarm\sevdesk\phpclient\ApiException on non-2xx response
     * @return array of null, HTTP status code, HTTP response headers (array of strings)
     */
    public function docServerStoreTemplateWithHttpInfo($body)
    {
        // verify the required parameter 'body' is set
        if ($body === null) {
            throw new \InvalidArgumentException('Missing the required parameter $body when calling docServerStoreTemplate');
        }
        // parse inputs
        $resourcePath = "/DocServer/storeTemplate";
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
                null,
                '/DocServer/storeTemplate'
            );

            return [null, $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
            }

            throw $e;
        }
    }

    /**
     * Operation docServerTestLetterPaper
     *
     * Test a letter paper
     *
     * @param \SplFileObject $file Pdf file to test (required)
     * @throws \ispserverfarm\sevdesk\phpclient\ApiException on non-2xx response
     * @return void
     */
    public function docServerTestLetterPaper($file)
    {
        list($response) = $this->docServerTestLetterPaperWithHttpInfo($file);
        return $response;
    }

    /**
     * Operation docServerTestLetterPaperWithHttpInfo
     *
     * Test a letter paper
     *
     * @param \SplFileObject $file Pdf file to test (required)
     * @throws \ispserverfarm\sevdesk\phpclient\ApiException on non-2xx response
     * @return array of null, HTTP status code, HTTP response headers (array of strings)
     */
    public function docServerTestLetterPaperWithHttpInfo($file)
    {
        // verify the required parameter 'file' is set
        if ($file === null) {
            throw new \InvalidArgumentException('Missing the required parameter $file when calling docServerTestLetterPaper');
        }
        // parse inputs
        $resourcePath = "/DocServer/testLetterpaper";
        $httpBody = '';
        $queryParams = [];
        $headerParams = [];
        $formParams = [];
        $_header_accept = $this->apiClient->selectHeaderAccept(['application/xml', 'application/json']);
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType(['application/x-www-form-urlencoded', 'multipart/form-data']);

        // form params
        if ($file !== null) {
            // PHP 5.5 introduced a CurlFile object that deprecates the old @filename syntax
            // See: https://wiki.php.net/rfc/curl-file-upload
            if (function_exists('curl_file_create')) {
                $formParams['file'] = curl_file_create($this->apiClient->getSerializer()->toFormValue($file));
            } else {
                $formParams['file'] = '@' . $this->apiClient->getSerializer()->toFormValue($file);
            }
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
                null,
                '/DocServer/testLetterpaper'
            );

            return [null, $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
            }

            throw $e;
        }
    }

    /**
     * Operation docServerTestTemplate
     *
     * Test a template
     *
     * @param string $body Enter the html of your template after html&#x3D; and remove the quotation marks! (required)
     * @throws \ispserverfarm\sevdesk\phpclient\ApiException on non-2xx response
     * @return void
     */
    public function docServerTestTemplate($body)
    {
        list($response) = $this->docServerTestTemplateWithHttpInfo($body);
        return $response;
    }

    /**
     * Operation docServerTestTemplateWithHttpInfo
     *
     * Test a template
     *
     * @param string $body Enter the html of your template after html&#x3D; and remove the quotation marks! (required)
     * @throws \ispserverfarm\sevdesk\phpclient\ApiException on non-2xx response
     * @return array of null, HTTP status code, HTTP response headers (array of strings)
     */
    public function docServerTestTemplateWithHttpInfo($body)
    {
        // verify the required parameter 'body' is set
        if ($body === null) {
            throw new \InvalidArgumentException('Missing the required parameter $body when calling docServerTestTemplate');
        }
        // parse inputs
        $resourcePath = "/DocServer/testTemplate";
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
                null,
                '/DocServer/testTemplate'
            );

            return [null, $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
            }

            throw $e;
        }
    }
}