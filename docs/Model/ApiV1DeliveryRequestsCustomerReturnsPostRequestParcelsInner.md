# # ApiV1DeliveryRequestsCustomerReturnsPostRequestParcelsInner

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | Reference number in Your system | [optional]
**name** | **string** | Contents name label | [optional]
**value** | **string** | Item value. Must only contain numbers with no more than one decimal point and exactly 2 decimal places. | [optional] [default to '0.00']
**weight** | **float** | Item weight in kg. Must only contain number between 0 and 10^6. Will be rounded to 2 decimals. | [optional]
**size** | **float** | Compartment size required for the package | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
