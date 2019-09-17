<?php
/**
 * CurrencyExchangeRateApi
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
 * Do not edit the class manually.
 */

namespace flagbit\sevdesk\phpclient\Api;

use \flagbit\sevdesk\phpclient\ApiClient;
use \flagbit\sevdesk\phpclient\ApiException;
use \flagbit\sevdesk\phpclient\Configuration;
use \flagbit\sevdesk\phpclient\ObjectSerializer;

/**
 * CurrencyExchangeRateApi Class Doc Comment
 *
 * @category Class
 * @package  flagbit\sevdesk\phpclient
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class CurrencyExchangeRateApi
{
    /**
     * API Client
     *
     * @var \flagbit\sevdesk\phpclient\ApiClient instance of the ApiClient
     */
    protected $apiClient;

    /**
     * Constructor
     *
     * @param \flagbit\sevdesk\phpclient\ApiClient|null $apiClient The api client to use
     */
    public function __construct(\flagbit\sevdesk\phpclient\ApiClient $apiClient = null)
    {
        if ($apiClient === null) {
            $apiClient = new ApiClient();
        }

        $this->apiClient = $apiClient;
    }

    /**
     * Get API client
     *
     * @return \flagbit\sevdesk\phpclient\ApiClient get the API client
     */
    public function getApiClient()
    {
        return $this->apiClient;
    }

    /**
     * Set the API client
     *
     * @param \flagbit\sevdesk\phpclient\ApiClient $apiClient set the API client
     *
     * @return CurrencyExchangeRateApi
     */
    public function setApiClient(\flagbit\sevdesk\phpclient\ApiClient $apiClient)
    {
        $this->apiClient = $apiClient;
        return $this;
    }

    /**
     * Operation getCurrencyExchangeRates
     *
     * Get an overview of all currency exchange rates
     *
     * @param int $limit Limits the number of entries returned. Default is 1000.    Be aware that there are over 100000 entries in the database for currency exchange rate, so using a limit higher than 1000 with offset&#x3D;0 is not recommended!    However you can set the offset appropriately so you minimize the amount of returned exchange rates and keep loading time to a low. (optional, default to 1000)
     * @param int $offset Set the index where the returned currency exchange rates start. Default is 0 (optional, default to 0)
     * @throws \flagbit\sevdesk\phpclient\ApiException on non-2xx response
     * @return \flagbit\sevdesk\phpclient\Model\ModelCurrencyExchangeRate
     */
    public function getCurrencyExchangeRates($limit = '1000', $offset = '0')
    {
        list($response) = $this->getCurrencyExchangeRatesWithHttpInfo($limit, $offset);
        return $response;
    }

    /**
     * Operation getCurrencyExchangeRatesWithHttpInfo
     *
     * Get an overview of all currency exchange rates
     *
     * @param int $limit Limits the number of entries returned. Default is 1000.    Be aware that there are over 100000 entries in the database for currency exchange rate, so using a limit higher than 1000 with offset&#x3D;0 is not recommended!    However you can set the offset appropriately so you minimize the amount of returned exchange rates and keep loading time to a low. (optional, default to 1000)
     * @param int $offset Set the index where the returned currency exchange rates start. Default is 0 (optional, default to 0)
     * @throws \flagbit\sevdesk\phpclient\ApiException on non-2xx response
     * @return array of \flagbit\sevdesk\phpclient\Model\ModelCurrencyExchangeRate, HTTP status code, HTTP response headers (array of strings)
     */
    public function getCurrencyExchangeRatesWithHttpInfo($limit = '1000', $offset = '0')
    {
        // parse inputs
        $resourcePath = "/CurrencyExchangeRate";
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
                '\flagbit\sevdesk\phpclient\Model\ModelCurrencyExchangeRate',
                '/CurrencyExchangeRate'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\flagbit\sevdesk\phpclient\Model\ModelCurrencyExchangeRate', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\flagbit\sevdesk\phpclient\Model\ModelCurrencyExchangeRate', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }
}
