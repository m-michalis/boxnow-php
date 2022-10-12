# Apiv1simpledeliveryrequestsParcels

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | Reference number in Your system | [optional] 
**name** | **string** | Contents name label | [optional] 
**value** | **string** | Item value. Must only contain numbers with no more than one decimal point and exactly 2 decimal places. | [optional] [default to '0.00']
**weight** | **float** | Item weight in kg | [optional] 
**size** | **float** | Compartment size required for the package. Required for &#x60;any-apm&#x60; origin. | [optional] 
**origin_delivery_parcel_id** | **string** | Parcel id of 3rd party delivery service. Fill in in case you are using other delivery service to deliver us the order. | [optional] 
**destination_delivery_parcel_id** | **string** | Parcel id of 3rd party delivery service. Fill in in case you are using other delivery service for final delivery. | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

