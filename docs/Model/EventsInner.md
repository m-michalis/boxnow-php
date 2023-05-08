# EventsInner

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**type** | **string** | Type of the event  &#x60;new&#x60; - Parcel has been registered to the system  &#x60;delivered&#x60; - Parcel has been delivered  &#x60;expired&#x60; - Parcel expired and will be returned to the sender  &#x60;returned&#x60; - Parcel has been returned to the sender  &#x60;in-depot&#x60; - Parcel is in one of our warehouses  &#x60;final-destination&#x60; - Parcel has reached its final destination, waiting for pickup  &#x60;canceled&#x60; - Parcel order had been canceled by the sender  &#x60;accepted-for-return&#x60; - Parcel has been accepted from customer and will be returned to the sender  &#x60;missing&#x60; - Box Now pickup courier was unable to obtain the parcel for delivery  &#x60;accepted-to-locker&#x60; - Parcel has been accepted from customer and will be sent to the recipient | 
**location_display_name** | **string** | Event source location | [optional] 
**postal_code** | **string** | Event source location postal code | [optional] 
**create_time** | [**AllOfEventsInnerCreateTime**](AllOfEventsInnerCreateTime.md) |  | 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

