# flagbit\sevdesk\phpclient\ObjectViewedApi

All URIs are relative to *https://my.sevdesk.de/api/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getObjectViewed**](ObjectViewedApi.md#getObjectViewed) | **GET** /ObjectViewed | Get an overview of objects viewed


# **getObjectViewed**
> \flagbit\sevdesk\phpclient\Model\ModelObjectViewed getObjectViewed($limit, $offset, $embed)

Get an overview of objects viewed

Calls ObjectViewed.php to get necessary variables

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
flagbit\sevdesk\phpclient\Configuration::getDefaultConfiguration()->setApiKey('token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// flagbit\sevdesk\phpclient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('token', 'Bearer');

$api_instance = new flagbit\sevdesk\phpclient\Api\ObjectViewedApi();
$limit = 100; // int | Limits the number of entries returned. Default is 100
$offset = 0; // int | Set the index where the returned objects viewed start. Default is 0
$embed = array("embed_example"); // string[] | Get some additional information. Embed can handle multiple values, they must be separated by comma. Default ``.

try {
    $result = $api_instance->getObjectViewed($limit, $offset, $embed);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ObjectViewedApi->getObjectViewed: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **limit** | **int**| Limits the number of entries returned. Default is 100 | [optional] [default to 100]
 **offset** | **int**| Set the index where the returned objects viewed start. Default is 0 | [optional] [default to 0]
 **embed** | [**string[]**](../Model/string.md)| Get some additional information. Embed can handle multiple values, they must be separated by comma. Default &#x60;&#x60;. | [optional]

### Return type

[**\flagbit\sevdesk\phpclient\Model\ModelObjectViewed**](../Model/ModelObjectViewed.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

