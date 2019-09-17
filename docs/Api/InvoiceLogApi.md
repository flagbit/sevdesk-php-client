# flagbit\sevdesk\phpclient\InvoiceLogApi

All URIs are relative to *https://my.sevdesk.de/api/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**addInvoiceLog**](InvoiceLogApi.md#addInvoiceLog) | **POST** /InvoiceLog | Create a new invoice log
[**deleteInvoiceLog**](InvoiceLogApi.md#deleteInvoiceLog) | **DELETE** /InvoiceLog/{id} | Delete an existing invoice log
[**getInvoiceLogs**](InvoiceLogApi.md#getInvoiceLogs) | **GET** /InvoiceLog | Get an overview of invoice logs
[**updateInvoiceLog**](InvoiceLogApi.md#updateInvoiceLog) | **PUT** /InvoiceLog/{id} | Update an existing invoice log


# **addInvoiceLog**
> \flagbit\sevdesk\phpclient\Model\ModelInvoiceLog addInvoiceLog($body)

Create a new invoice log

Calls InvoiceLog.php

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
flagbit\sevdesk\phpclient\Configuration::getDefaultConfiguration()->setApiKey('token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// flagbit\sevdesk\phpclient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('token', 'Bearer');

$api_instance = new flagbit\sevdesk\phpclient\Api\InvoiceLogApi();
$body = "invoice[objectName]=Invoice&invoice[id]=&fromStatus=&toStatus=&ammountPayed=&bookingDate="; // string | To create an invoice log, simply enter desired values after parameter= and remove the quotation marks.

try {
    $result = $api_instance->addInvoiceLog($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InvoiceLogApi->addInvoiceLog: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | **string**| To create an invoice log, simply enter desired values after parameter&#x3D; and remove the quotation marks. |

### Return type

[**\flagbit\sevdesk\phpclient\Model\ModelInvoiceLog**](../Model/ModelInvoiceLog.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteInvoiceLog**
> deleteInvoiceLog($id)

Delete an existing invoice log

Calls the delete() function in InvoiceLog.php

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
flagbit\sevdesk\phpclient\Configuration::getDefaultConfiguration()->setApiKey('token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// flagbit\sevdesk\phpclient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('token', 'Bearer');

$api_instance = new flagbit\sevdesk\phpclient\Api\InvoiceLogApi();
$id = 56; // int | Id of invoice log you want to delete

try {
    $api_instance->deleteInvoiceLog($id);
} catch (Exception $e) {
    echo 'Exception when calling InvoiceLogApi->deleteInvoiceLog: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| Id of invoice log you want to delete |

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getInvoiceLogs**
> \flagbit\sevdesk\phpclient\Model\ModelInvoiceLog getInvoiceLogs($limit, $offset, $embed)

Get an overview of invoice logs

Calls InvoiceLog.php to get necessary variables

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
flagbit\sevdesk\phpclient\Configuration::getDefaultConfiguration()->setApiKey('token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// flagbit\sevdesk\phpclient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('token', 'Bearer');

$api_instance = new flagbit\sevdesk\phpclient\Api\InvoiceLogApi();
$limit = 100; // int | Limits the number of entries returned. Default is 100
$offset = 0; // int | Set the index where the returned invoice logs start. Default is 0
$embed = array("embed_example"); // string[] | Get some additional information. Embed can handle multiple values, they must be separated by comma. Default ``.

try {
    $result = $api_instance->getInvoiceLogs($limit, $offset, $embed);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InvoiceLogApi->getInvoiceLogs: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **limit** | **int**| Limits the number of entries returned. Default is 100 | [optional] [default to 100]
 **offset** | **int**| Set the index where the returned invoice logs start. Default is 0 | [optional] [default to 0]
 **embed** | [**string[]**](../Model/string.md)| Get some additional information. Embed can handle multiple values, they must be separated by comma. Default &#x60;&#x60;. | [optional]

### Return type

[**\flagbit\sevdesk\phpclient\Model\ModelInvoiceLog**](../Model/ModelInvoiceLog.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateInvoiceLog**
> \flagbit\sevdesk\phpclient\Model\ModelInvoiceLog updateInvoiceLog($id, $body)

Update an existing invoice log

Calls InvoiceLog.php

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
flagbit\sevdesk\phpclient\Configuration::getDefaultConfiguration()->setApiKey('token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// flagbit\sevdesk\phpclient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('token', 'Bearer');

$api_instance = new flagbit\sevdesk\phpclient\Api\InvoiceLogApi();
$id = 56; // int | Id of invoice log you want to update
$body = "body_example"; // string | Parameters which need to be updated. Please refer to the description from create invoice log.    Enter the parameters according to the syntax: parameter1=&parameter2= and remove the quotation marks!

try {
    $result = $api_instance->updateInvoiceLog($id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InvoiceLogApi->updateInvoiceLog: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| Id of invoice log you want to update |
 **body** | **string**| Parameters which need to be updated. Please refer to the description from create invoice log.    Enter the parameters according to the syntax: parameter1&#x3D;&amp;parameter2&#x3D; and remove the quotation marks! | [optional]

### Return type

[**\flagbit\sevdesk\phpclient\Model\ModelInvoiceLog**](../Model/ModelInvoiceLog.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

