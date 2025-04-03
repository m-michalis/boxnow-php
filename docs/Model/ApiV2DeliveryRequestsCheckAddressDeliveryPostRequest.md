# # ApiV2DeliveryRequestsCheckAddressDeliveryPostRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**city** | **string** | City | [optional]
**street** | **string** | Street and street number | [optional]
**postal_code** | **string** | Postal code of the location. If set, must include only numbers |
**region** | **string** | BCP 47 language tag format |
**radius** | **float** | Radius in meters. Location must be in this radius from the input address. | [optional]
**compartment_size** | **float** | Compartment size required for the package. | [optional]
**zip_precision** | **bool** | Enhances address accuracy by validating the provided postal code.  When set to &#x60;true&#x60;, the service ensures precise address matching by cross-referencing  the input ZIP code with potential matches. | [optional] [default to true]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
