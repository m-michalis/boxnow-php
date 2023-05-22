# # DeliveryRequestItemsInner

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | Item reference number in Your system | [optional]
**name** | **string** | Order item name | [optional]
**value** | **string** | Item value. Must only contain numbers with no more than one decimal point and exactly 2 decimal places. |
**weight** | **float** | Item weight in kg | [optional]
**compartment_size** | **float** | Compartment size required for the package. Required only for &#x60;apm&#x60;/&#x60;any-apm&#x60; origin. | [optional]
**origin_delivery_parcel_id** | **string** | Parcel id of 3rd party delivery service. Fill in in case you are using other delivery service to deliver us the order. | [optional]
**destination_delivery_parcel_id** | **string** | Parcel id of 3rd party delivery service. Fill in in case you are using other delivery service for final delivery. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
