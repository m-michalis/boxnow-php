# V1SimpledeliveryrequestsBody

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**origin** | [**\Swagger\Client\Boxnow\Apiv1simpledeliveryrequestsOrigin**](Apiv1simpledeliveryrequestsOrigin.md) |  | 
**destination** | [**AllOfv1SimpledeliveryrequestsBodyDestination**](AllOfv1SimpledeliveryrequestsBodyDestination.md) |  | 
**payment_mode** | [**\Swagger\Client\Boxnow\PaymentMode**](PaymentMode.md) |  | [optional] 
**amount_to_be_collected** | [**\Swagger\Client\Boxnow\AmountToBeCollected**](AmountToBeCollected.md) |  | [optional] 
**allow_return** | [**\Swagger\Client\Boxnow\AllowReturn**](AllowReturn.md) |  | [optional] 
**parcel_size** | **float** | Package size 1, 2, 3. Mandatory for delivery to AnyAPM. Default for created parcels, but can be overriden on parcel level for individual parcels. | [optional] 
**parcels** | [**\Swagger\Client\Boxnow\Apiv1simpledeliveryrequestsParcels[]**](Apiv1simpledeliveryrequestsParcels.md) | Use to give us more info about the parcels. If not defined, one parcel is automatically created. | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

