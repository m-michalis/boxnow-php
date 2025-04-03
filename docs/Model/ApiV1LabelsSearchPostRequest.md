# # ApiV1LabelsSearchPostRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**parcel_ids** | **string[]** | Response will contain only labels for these parcels (if defined). | [optional]
**order_numbers** | **string[]** | Response will contain only labels for these orders (if defined). | [optional]
**paper_size** | **string** | Output PDF sheet size | [optional] [default to 'A6']
**per_page** | **float** | Number of labels per sheet. | [optional] [default to self::PER_PAGE_NUMBER_1]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
