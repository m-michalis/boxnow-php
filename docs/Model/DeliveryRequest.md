# # DeliveryRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**overwrite_sender_shipping_label_info** | [**\Boxnow\Model\DeliveryRequestOverwriteSenderShippingLabelInfo**](DeliveryRequestOverwriteSenderShippingLabelInfo.md) |  | [optional]
**type_of_service** | **string** | Type of delivery service. You may not be eligible to use all types of service, contact support for further information. | [optional] [default to 'same-day']
**description** | **string** | This is the description of the order. | [optional]
**order_number** | **string** | Unique order reference number in Your system |
**invoice_value** | **string** | Total value of the order. Must only contain numbers with no more than one decimal point and exactly 2 decimal places. |
**payment_mode** | [**\Boxnow\Model\PaymentMode**](PaymentMode.md) |  |
**amount_to_be_collected** | **string** | COD amount for COD payment mode. Must only contain numbers with no more than one decimal point and exactly 2 decimal places. |
**allow_return** | **bool** | If true, client will be able to return the goods the same way he received it. | [optional] [default to false]
**notify_on_accepted** | **string** | If set, we send a notification to this email when we accepted the order to our system. | [optional]
**notify_smson_accepted** | **string** | Phone number in international format. If set, we send a sms notification to this phone number. | [optional]
**return_location** | [**\Boxnow\Model\DeliveryRequestReturnLocation**](DeliveryRequestReturnLocation.md) |  | [optional]
**origin** | [**\Boxnow\Model\DeliveryRequestOrigin**](DeliveryRequestOrigin.md) |  |
**destination** | [**\Boxnow\Model\DeliveryRequestDestination**](DeliveryRequestDestination.md) |  |
**items** | [**\Boxnow\Model\DeliveryRequestItemsInner[]**](DeliveryRequestItemsInner.md) | List of parcels you want to send via BoxNow. |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
