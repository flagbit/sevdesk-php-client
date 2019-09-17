# ModelVoucher

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**_create** | [**\DateTime**](\DateTime.md) | date the voucher was created | [optional] 
**_update** | [**\DateTime**](\DateTime.md) | date the voucher was last updated | [optional] 
**_sev_client** | **object** | sevClient is the unique id every customer has and is used in nearly all operations | [optional] 
**_create_user** | [**\flagbit\sevdesk\phpclient\Model\ModelSevUser**](ModelSevUser.md) | sevUser who created the voucher | [optional] 
**_voucher_date** | [**\DateTime**](\DateTime.md) |  | [optional] 
**_supplier** | [**\flagbit\sevdesk\phpclient\Model\ModelContact**](ModelContact.md) |  | [optional] 
**_supplier_name** | **string** |  | [optional] 
**_description** | **string** |  | [optional] 
**_document** | [**\flagbit\sevdesk\phpclient\Model\ModelDocument**](ModelDocument.md) |  | [optional] 
**_result_disdar** | **string** |  | [optional] 
**_document_preview** | [**\flagbit\sevdesk\phpclient\Model\ModelDocument**](ModelDocument.md) |  | [optional] 
**_pay_date** | [**\DateTime**](\DateTime.md) |  | [optional] 
**_status** | **int** |  | [optional] 
**_object** | **object** |  | [optional] 
**_sum_net** | **float** |  | [optional] [default to 0.0]
**_sum_tax** | **float** |  | [optional] [default to 0.0]
**_sum_gross** | **float** |  | [optional] [default to 0.0]
**_sum_net_accounting** | **float** |  | [optional] [default to 0.0]
**_sum_tax_accounting** | **float** |  | [optional] [default to 0.0]
**_sum_gross_accounting** | **float** |  | [optional] [default to 0.0]
**_tax_type** | **string** |  | [optional] 
**_credit_debit** | **string** |  | [optional] 
**_hidden** | **bool** |  | [optional] 
**_cost_centre** | [**\flagbit\sevdesk\phpclient\Model\ModelCostCentre**](ModelCostCentre.md) |  | [optional] 
**_origin** | **object** |  | [optional] 
**_voucher_type** | **string** |  | [optional] 
**_recurring_intervall** | **int** |  | [optional] 
**_recurring_start_date** | [**\DateTime**](\DateTime.md) |  | [optional] 
**_recurring_next_voucher** | [**\DateTime**](\DateTime.md) |  | [optional] 
**_recurring_last_voucher** | [**\DateTime**](\DateTime.md) |  | [optional] 
**_recurring_end_date** | [**\DateTime**](\DateTime.md) |  | [optional] 
**_enshrined** | **bool** |  | [optional] 
**_in_source** | **string** |  | [optional] 
**_tax_set** | [**\flagbit\sevdesk\phpclient\Model\ModelTaxSet**](ModelTaxSet.md) |  | [optional] 
**_iban** | **string** |  | [optional] 
**_accounting_special_case** | **string** |  | [optional] 
**_payment_deadline** | [**\DateTime**](\DateTime.md) |  | [optional] 
**_tip** | **float** |  | [optional] [default to 0.0]

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


