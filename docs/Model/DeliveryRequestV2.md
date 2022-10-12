# DeliveryRequestV2

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**type_of_service** | **string** | Type of delivery service. You may not be eligible to use all types of service, contact support for further information. | [default to 'same-day']
**description** | **string** | This is the description of the order. | [optional] 
**order_number** | **string** | Unique order reference number in Your system | 
**invoice_value** | **string** | Total value of the order. Must only contain numbers with no more than one decimal point and exactly 2 decimal places. | 
**payment_mode** | **string** | Payment mode. You may not be eligible to use all payment modes, contact support for further information. | [default to 'prepaid']
**amount_to_be_collected** | **string** | COD amount for COD payment mode. Must only contain numbers with no more than one decimal point and exactly 2 decimal places. | 
**allow_return** | **bool** | If true, client will be able to return the goods the same way he received it. | [default to false]
**notify_on_accepted** | **string** | If set, we send a notification to this email when we accepted the order to our system. | 
**origin** | [**AllOfDeliveryRequestV2Origin**](AllOfDeliveryRequestV2Origin.md) |  | 
**destination** | [**AllOfDeliveryRequestV2Destination**](AllOfDeliveryRequestV2Destination.md) |  | 
**parcels** | [**\Swagger\Client\Boxnow\DeliveryRequestV2Parcels[]**](DeliveryRequestV2Parcels.md) | List of parcels you want to send via BoxNow. | 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

