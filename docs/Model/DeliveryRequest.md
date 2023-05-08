# DeliveryRequest

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**overwrite_sender_shipping_label_info** | [**\Swagger\Client\Boxnow\DeliveryRequestOverwriteSenderShippingLabelInfo**](DeliveryRequestOverwriteSenderShippingLabelInfo.md) |  | [optional] 
**type_of_service** | **string** | Type of delivery service. You may not be eligible to use all types of service, contact support for further information. | [optional] [default to 'same-day']
**description** | **string** | This is the description of the order. | [optional] 
**order_number** | **string** | Unique order reference number in Your system | 
**invoice_value** | **string** | Total value of the order. Must only contain numbers with no more than one decimal point and exactly 2 decimal places. | 
**payment_mode** | [**\Swagger\Client\Boxnow\PaymentMode**](PaymentMode.md) |  | 
**amount_to_be_collected** | [**\Swagger\Client\Boxnow\AmountToBeCollected**](AmountToBeCollected.md) |  | 
**allow_return** | [**\Swagger\Client\Boxnow\AllowReturn**](AllowReturn.md) |  | [optional] 
**notify_on_accepted** | **string** | If set, we send a notification to this email when we accepted the order to our system. | [optional] 
**notify_smson_accepted** | **string** | Phone number in international format. If set, we send a sms notification to this phone number. | [optional] 
**return_location** | [**AnyOfDeliveryRequestReturnLocation**](AnyOfDeliveryRequestReturnLocation.md) |  | [optional] 
**origin** | [**AllOfDeliveryRequestOrigin**](AllOfDeliveryRequestOrigin.md) |  | 
**destination** | [**AllOfDeliveryRequestDestination**](AllOfDeliveryRequestDestination.md) |  | 
**items** | [**\Swagger\Client\Boxnow\DeliveryRequestItems[]**](DeliveryRequestItems.md) | List of parcels you want to send via BoxNow. | 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

