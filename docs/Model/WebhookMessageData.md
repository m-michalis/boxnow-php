# # WebhookMessageData

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**parcel_id** | **string** | Parcel ID |
**parcel_state** | [**\Boxnow\Model\ParcelState**](ParcelState.md) |  |
**parcel_reference_number** | **string** | Reference number in Your system |
**parcel_name** | **string** | Item name label |
**parcel_pin** | **string** | Parcel PIN | [optional]
**order_number** | **string** | Unique order reference number in Your system |
**event** | [**\Boxnow\Model\EventType**](EventType.md) |  |
**event_location** | [**\Boxnow\Model\WebhookMessageDataEventLocation**](WebhookMessageDataEventLocation.md) |  | [optional]
**additional_information** | **string** | Additional information from a delivery request | [optional]
**customer** | [**\Boxnow\Model\WebhookMessageDataCustomer**](WebhookMessageDataCustomer.md) |  | [optional]
**time** | [**MixedDateTime**](MixedDateTime.md) |  |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
