# flagbit\sevdesk\phpclient\StaticCountryApi

All URIs are relative to *https://my.sevdesk.de/api/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getStaticCountry**](StaticCountryApi.md#getStaticCountry) | **GET** /StaticCountry | Get staticCountry list
[**getStaticIndustry**](StaticCountryApi.md#getStaticIndustry) | **GET** /StaticIndustry | Get staticIndustry list


# **getStaticCountry**
> getStaticCountry()

Get staticCountry list

Calls StaticCountry.php to return the staticCountry list which is basically the list of countries.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
flagbit\sevdesk\phpclient\Configuration::getDefaultConfiguration()->setApiKey('token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// flagbit\sevdesk\phpclient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('token', 'Bearer');

$api_instance = new flagbit\sevdesk\phpclient\Api\StaticCountryApi();

try {
    $api_instance->getStaticCountry();
} catch (Exception $e) {
    echo 'Exception when calling StaticCountryApi->getStaticCountry: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getStaticIndustry**
> getStaticIndustry()

Get staticIndustry list

Calls StaticIndustry.php to return the staticIndustry list which is basically the list of industries.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
flagbit\sevdesk\phpclient\Configuration::getDefaultConfiguration()->setApiKey('token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// flagbit\sevdesk\phpclient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('token', 'Bearer');

$api_instance = new flagbit\sevdesk\phpclient\Api\StaticCountryApi();

try {
    $api_instance->getStaticIndustry();
} catch (Exception $e) {
    echo 'Exception when calling StaticCountryApi->getStaticIndustry: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

