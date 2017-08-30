<?php
/**
 * VatReportApi
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
 * VatReportApi Class Doc Comment
 *
 * @category Class
 * @package  isp-serverfarm\sevdesk\php-client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class VatReportApi
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
     * @return VatReportApi
     */
    public function setApiClient(\isp-serverfarm\sevdesk\php-client\ApiClient $apiClient)
    {
        $this->apiClient = $apiClient;
        return $this;
    }

    /**
     * Operation getVatReport
     *
     * Get a vat report for a defined period of time
     *
     * @param int $reporting_year Year for which you want to have a vat report (required)
     * @param string $reporting_period_code Define the period for your vat report (required)
     * @param bool $no_actual_taxation_on_input_tax Define if you want actual taxation on input tax (required)
     * @throws \isp-serverfarm\sevdesk\php-client\ApiException on non-2xx response
     * @return void
     */
    public function getVatReport($reporting_year, $reporting_period_code, $no_actual_taxation_on_input_tax)
    {
        list($response) = $this->getVatReportWithHttpInfo($reporting_year, $reporting_period_code, $no_actual_taxation_on_input_tax);
        return $response;
    }

    /**
     * Operation getVatReportWithHttpInfo
     *
     * Get a vat report for a defined period of time
     *
     * @param int $reporting_year Year for which you want to have a vat report (required)
     * @param string $reporting_period_code Define the period for your vat report (required)
     * @param bool $no_actual_taxation_on_input_tax Define if you want actual taxation on input tax (required)
     * @throws \isp-serverfarm\sevdesk\php-client\ApiException on non-2xx response
     * @return array of null, HTTP status code, HTTP response headers (array of strings)
     */
    public function getVatReportWithHttpInfo($reporting_year, $reporting_period_code, $no_actual_taxation_on_input_tax)
    {
        // verify the required parameter 'reporting_year' is set
        if ($reporting_year === null) {
            throw new \InvalidArgumentException('Missing the required parameter $reporting_year when calling getVatReport');
        }
        // verify the required parameter 'reporting_period_code' is set
        if ($reporting_period_code === null) {
            throw new \InvalidArgumentException('Missing the required parameter $reporting_period_code when calling getVatReport');
        }
        // verify the required parameter 'no_actual_taxation_on_input_tax' is set
        if ($no_actual_taxation_on_input_tax === null) {
            throw new \InvalidArgumentException('Missing the required parameter $no_actual_taxation_on_input_tax when calling getVatReport');
        }
        // parse inputs
        $resourcePath = "/VatReport";
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
        if ($reporting_year !== null) {
            $queryParams['reportingYear'] = $this->apiClient->getSerializer()->toQueryValue($reporting_year);
        }
        // query params
        if ($reporting_period_code !== null) {
            $queryParams['reportingPeriodCode'] = $this->apiClient->getSerializer()->toQueryValue($reporting_period_code);
        }
        // query params
        if ($no_actual_taxation_on_input_tax !== null) {
            $queryParams['noActualTaxationOnInputTax'] = $this->apiClient->getSerializer()->toQueryValue($no_actual_taxation_on_input_tax);
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
                '/VatReport'
            );

            return [null, $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
            }

            throw $e;
        }
    }
}
