# # ApiV1SimpleDeliveryRequestsPostRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**origin** | [**\OpenAPI\Client\Model\ApiV1SimpleDeliveryRequestsPostRequestOrigin**](ApiV1SimpleDeliveryRequestsPostRequestOrigin.md) |  |
**destination** | [**\OpenAPI\Client\Model\ApiV1SimpleDeliveryRequestsPostRequestDestination**](ApiV1SimpleDeliveryRequestsPostRequestDestination.md) |  |
**payment_mode** | [**\OpenAPI\Client\Model\PaymentMode**](PaymentMode.md) |  | [optional]
**amount_to_be_collected** | **string** | COD amount for COD payment mode. Must only contain numbers with no more than one decimal point and exactly 2 decimal places. | [optional]
**allow_return** | **bool** | If true, client will be able to return the goods the same way he received it. | [optional] [default to false]
**parcel_size** | **float** | Package size 1, 2, 3. Mandatory for delivery to AnyAPM. Default for created parcels, but can be overriden on parcel level for individual parcels. | [optional]
**parcels** | [**\OpenAPI\Client\Model\ApiV1SimpleDeliveryRequestsPostRequestParcelsInner[]**](ApiV1SimpleDeliveryRequestsPostRequestParcelsInner.md) | Use to give us more info about the parcels. If not defined, one parcel is automatically created. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
