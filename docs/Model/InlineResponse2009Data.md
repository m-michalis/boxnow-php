# InlineResponse2009Data

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | Reference number in our system. You should use this when contacting support | 
**state** | [**\Swagger\Client\Boxnow\ParcelState**](ParcelState.md) |  | 
**name** | **string** | Name for the parcel contents | [optional] 
**value** | **string** | Value in default current | [optional] 
**weight** | **string** | Weight in kg | [optional] 
**compartment_size** | **float** | Selected compartment size | [optional] 
**origin_delivery_ref_id** | **string** | Parcel ID in origin delivery partner system | [optional] 
**destination_delivery_ref_id** | **string** | Parcel ID in destination delivery partner system | [optional] 
**item_ref_id** | **string** | Parcel reference number in your system | [optional] 
**allow_return** | **bool** | Selected return value of the order | [optional] 
**delivery_request** | [**\Swagger\Client\Boxnow\DeliveryRequest**](DeliveryRequest.md) |  | 
**events** | [**\Swagger\Client\Boxnow\Events**](Events.md) |  | [optional] 
**parcel_label_url** | **string** |  | [optional] 
**order_label_url** | **string** |  | [optional] 
**cancelation_requested** | **bool** | True if you or system administrator had requested parcel cancelation | 
**payment** | [**\Swagger\Client\Boxnow\DeliveryPayment**](DeliveryPayment.md) |  | [optional] 
**create_time** | [**\Swagger\Client\Boxnow\\DateTime**](\DateTime.md) |  | [optional] 
**update_time** | [**\Swagger\Client\Boxnow\\DateTime**](\DateTime.md) |  | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

