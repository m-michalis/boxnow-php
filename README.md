# MMMIKE


Document describes the API description for partners in order to create and track delivery requests.

## Revision history

|Date|Author|Description|Version|
|-|-|-|-|
|2024-09-26|Hoffmann, P.| Add P466 error code |1.65|
|2024-09-25|Filatov, R.| Add P465 error for /api/{v1,v2}/delivery-requests:checkAddressDelivery |1.64|
|2024-08-13|Hoffmann, P.| Update `shippingRegions` in /api/v1/entrusted-partners response. |1.63|
|2024-07-22|Hoffmann, P.| Add `shippingRegions` and `phoneNumber` to /api/v1/entrusted-partners response. |1.62|
|2024-07-11|Filatov, R.| Add P461, P462, P464 errors for ArcGIS validations to /api/v2/delivery-requests:checkAddressDelivery |1.61|
|2024-07-08|Hoffmann, P.| Add `email` and `phoneNumber` to /api/v1/entrusted-partners response. Add `originContactEmail` and `originContactNumber` to /api/v1/delivery-requests:fromCsv request body |1.60|
|2024-05-23|Balagazova, K.| Add lost parcel event |1.59|
|2024-04-08|Hoffmann, P.| Add declareDeliveryPartnerReturn |1.58|
|2024-03-15|Šmolík, J.| Add generate upload label link |1.57|
|2024-02-02|Šmolík, J.| Add location id to /api/v1/parcels events |1.56|
|2023-11-15|Filatov, R.| Add P422, P423, P424 error codes |1.55|
|2023-11-13|Filatov, R.| Add new `/api/v2/delivery-requests:checkAddressDelivery` endpoint switched to ArcGIS |1.54|
|2023-11-08|Filatov, R.| Add `customerReturnsMaxAllowedSize` for /api/v1/entrusted-partners |1.53|
|2023-06-10|Filatov, R.| Add `weight` min/max validation (error cde P421) and always round it to 2 decimals on /api/v1/delivery-requests:customerReturns|1.52|
|2023-05-10|Balagazova, K.| Forbid usage of `q` parameter of `api/v1/parcels` for partner server accounts |1.51|
|2023-04-28|Hoffmann, P.| Remove `X-Overwrite-Date` request header from /api/v1/delivery-requests and /api/v1/entrusted-partners |1.50|
|2023-04-28|Azizov, J.| Add P442 error code |1.49|
|2023-04-12|Balagazova, K.|Add `limit` field and automatic ordering by distance to /api/v1/destinations |1.48|
|2023-04-04|Balagazova K.| Add `showRecipientInformation` field to /api/v1/delivery-requests /api/v1/delivery-requests:fromCsv |1.47|
|2023-02-23|Balagazova K.| Add customer information to the webhook message |1.46|
|2022-11-29|Azizov J.| Add Webhook schema and an example endpoint |1.45|
|2022-11-28|Vala J.| Add partner permission to /entrusted-partners response |1.44|
|2022-11-24|Vala J.| Add partner permission `addressAsDestination`, `codAddressAsDestination`. Validate partner permission for delivery to address and cod payment use for delivery to address when creating delivery request |1.43|
|2022-11-14|Vala J.| Add `X-Overwrite-Date` request header for delivery request to test Croatian currency conversion, only testeable on dev |1.42|
|2022-10-21|Vala J.| Add validation error code to /api/v1/simple-delivery-requests /api/v1/delivery-requests /api/v1/delivery-requests:customerReturns |1.41|
|2022-09-22|Šmolík, J.|Add accepted-to-locker parcel event |1.40|
|2022-09-08|Šmolík J.| Add support for user to choose partner they want to work with |1.39|
|2022-08-10|Šmolík J.| Add /labels:search to download PDF labels for defined criteria |1.38|
|2022-08-08|Azizov. J.| Add `region` field to /destinations and /origins endpoints |1.37|
|2022-07-27|Vala J.| Add EP for listing shipping label data of parcels order /api/v1/delivery-requests/{orderNumber}/label |1.36|
|2022-07-27|Vala J.| Add EP for listing shipping label data of parcel /api/v1/parcels/{id}/label |1.35|
|2022-07-22|Vala J.| Add destination_public_id column to csv export of parcels |1.34|
|2022-07-08|Vala J.| <ul><li>Add exportCsvUrl to headers ['X-export-url-csv'] to response from /api/v1/parcels</li><li>Add endpoint to export parcels to csv file /ui/v1/parcels.csv</li></ul> |1.33|
|2022-06-27|Vala J.| Add width and printerModel query parameters for zpl shipping labels for /api/v1/delivery-requests/{orderNumber}/label.{type} and /api/v1/parcels/{id}/label.{type} |1.32|
|2022-06-17|Šmolík, J.| Allow to select return location for delivery request |1.31|
|2022-05-25|Vala, J.| Add single labelUrlPdf to headers ['X-labels-url-pdf'] in response from /api/v1/delivery-requests:fromCsv |1.30|
|2022-05-25|Vala, J.| Add EP to handle csv import orders printing of shipping label /ui/v1/delivery-requests/{orderImportsNumber}/label.pdf |1.29|
|2022-05-20|Vala, J.| Add possibility to overwrite 4 rows in shipping label sender info to /api/v1/delivery-requests endpoint |1.28|
|2022-05-04|Azizov, J.| Add state and created filters to to /api/v1/parcels endpoint |1.27|
|2022-05-03|Azizov, J.| Add possibility to search parcels to /api/v1/parcels endpoint |1.26|
|2022-04-27|Azizov, J.| Add /api/v1/delivery-requests:customerReturns for customer returns delivery requests |1.25|
|2022-04-26|Vala, J.| Add createTime, updateTime to parcel list response |1.24|
|2022-04-21|Šmolík, J.| Add payment info to parcels |1.23|
|2022-02-22|Azizov, J.| Add P408 and P409 error codes |1.22|
|2022-02-22|Azizov, J.| Add notifySMSOnAccepted to DeliveryRequest |1.21|
|2022-02-01|Šmolík, J.| <ul><li>Add check address delivery endpoint</li><li>Add /api/v1/simple-delivery-requests for simpler delivery creation</li></ul> |1.20|
|2022-01-20|Šmolík, J.| Add P405, P406 and P407 error codes |1.19|
|2022-01-10|Šmolík, J.| <ul><li>Add CSV import endpoint</li><li>Add JWT custom claims description</li><li>Move 403 error codes to own section</li></ul> |1.18|
|2021-12-23|Šmolík, J.| <ul><li>Add new endpoint to confirm AnyAPM delivery of a parcel</li><li>Partition error codes by HTTP status response</li></ul> |1.17|
|2021-12-16|Šmolík, J.| Add new error code P403 |1.16|
|2021-12-09|Šmolík, J.| Add new error codes P401, P402 |1.15|
|2021-11-30|Šmolík, J.| Add delivery request origin, destination and items fields description |1.14|
|2021-11-11|Šmolík, J.| Add endpoint for parcel delivery cancellation |1.13|
|2021-11-09|Šmolík, J.| Add X403 error code spec |1.12|
|2021-10-14|Šmolík, J.| Add Accepted for return event |1.11|
|2021-10-05|Šmolík, J.| Make DeliveryRequest.items required |1.10|
|2021-09-22|Šmolík, J.| Add canceled event state and event|1.9|
|2021-09-17|Šmolík, J.| Add PDF label URLs to parcels response |1.8
|2021-09-13|Šmolík, J.| <ul><li>Update parcel state enum values</li><li>Remove history event displayName, add type</li></ul>|1.7
|2021-08-25|Azizov, J.| <ul><li>Add possibility to print labels for all parcels in order</li><li>Make contact information of origin optional in delivery request</li></ul>|1.6
|2021-08-02|Azizov, J.| Add items metadata to parcel |1.5|
|2021-07-15|Šmolík, J.| Add destination expected delivery time |1.4|
|2021-06-23|Šmolík, J.| Update money value fields description |1.3|
|2021-06-21|Šmolík, J.| <ul><li>Update Requesting a delivery text</li><li>Add `name` filter to origins and destinations </li><li>Rename delivery request code of description to plain description</li><li>Add more specific info to value amount fields</li><li>Update address country to match ISO Code</li><li>Update address postal code formatting</li><li>Update origin/destination for delivery request</li><li>Remove height, length, width from order item</li><li>Add events to parcel info</li><li>Update delivery request response</li><li>Update order number description</li><li>Add parcel id filter to /parcels</li><li>Add message to error</li><li>Make contact name required</li><li>Add delivery partner parcel ids</li><li>Remove order items' code and status</li></ul> |1.2|
|2021-06-14|Šmolík, J.| <ul><li>Add a todo to specify client notification type after accepting the order.</li><li> Let the partner choose to receive an email when successful delivery request is made.</li><li> Remove `typeOfOrder` from delivery request.</li><li>Add option to select delivery partner for pickup</li><li>Make item weight in the order optional</li><li>Make origin contact email required</li><li>Add support to add sender's name when making delivery request</li><li>Remove landmark and code from address</li><li>Add new error code or partners not eligible to create COD delivery requests</li><li>Add support to filter destinations/origins by type</li><li>Add support to send compartment size for order item, required for APM origin</li><li>Make `typeOfService` optional</li></ul> |1.1|
|2021-06-09|Šmolík, J.|Initial version|1.0|

# Setup

Register your company through our support.

We are going to need
  - Company name
  - List of Phone numbers for SMS OTP authentication of people who'll you want to have access to the Partner CMS
  - List of addresses for pickup points - where do we pickup your order for delivery

You will get in return
- `OAUTH_CLIENT_ID` - OAuth2 Client ID for authenticating with the Partner API. Keep it safe. Value may vary for each environment.
- `OAUTH_CLIENT_SECRET` - OAuth2 Client Secret for authenticating with the Partner API. Keep it safe. Value may vary for each environment.
- `API_URL` - Base URL for Partner API

## Environments

Product offers multiple environments
  - Sandbox - For you to test the integration. Limited functionality.
  - Production - Connected to real end-users. Use with care.

Environment setting summary:
| Value \\ Env | Sandbox |  Production |
|---|---|---|
| `API_URL`  | N/A  | N/A |
| `OAUTH_CLIENT_SECRET`  | Contact Support | Contact Support |
| `OAUTH_CLIENT_ID`  | Contact Support  | Contact Support |


# API

## Authentication

Authentication is based on OAuth2 standard, Client Credentials grant. Token endpoint `/auth-sessions`, see examples below.

Client ID and Secret MUST be passed to you from BoxNow support in advance.

In order to use the API, you MUST attach the access token to Authorization header as a Bearer token.

### Custom JWT claims

You can find additional user information in custom claims under namespace key `https://boxnow.gr`. For example

```json
{
  \"iat\": 1641980553,
  \"exp\": 1641984153,
  \"https://boxnow.gr\": {
    \"permission\": {
      \"warehouseAsOrigin\": true,
      \"anyApmAsOrigin\": true,
      \"anyApmToSameApmDelivery\": true,
      \"anyApmToSameApmDeliveryWithoutConfirmation\": true,
      \"depotAsOrigin\": true
    }
  }
}
```

## Listing available destinations

You can skip this if you don't want to deliver your order to one of our APMs.

Use `/destinations` to list available APM locations we can deliver the goods to. You will refer to these records by `id` when requesting delivery later on.

## What can influence `/destinations` endpoint response
  - Only APMs with `Box Now Ready` state are considered
  - APMs must be available for your required package size (see: '#/components/parameters/LocationRequiredSize')

## Requesting a delivery

Create a delivery request to delivery your order to the client. Use `/delivery-requests` endpoint for this operation.

Once a successful request delivery is made
  - (optional) we send you an email notifying about successful delivery request creation, if you choose to receive this email
  - you should fetch the PDF label for each of the parcel from `/parcels/{id}/label.pdf`, print it and stick it to the parcel/s
  - we send a courier to pick up the labeled parcel/s
  - we notify the client via email that we have accepted the order from you and its being delivered by us

## Modifying a delivery request

After a delivery request is successfully made, you can alter some parts of it later on. Use `/delivery-requests/{id}` endpoint for these modifications.

## Checking on the deliveries

You can list parcel related to your delivery requests via `/parcels` endpoint.


## Error codes

### Description of codes for `400 Bad Request` responses

- `P400` - Invalid request data. Make sure are sending the request according to this documentation.
- `P401` - Invalid request origin location reference. Make sure you are referencing a valid location ID from Origins endpoint or valid address.
- `P402` - Invalid request destination location reference. Make sure you are referencing a valid location ID from Destinations endpoint or valid address.
- `P403` - You are not allowed to use AnyAPM-SameAPM delivery. Contact support if you believe this is a mistake.
- `P404` - Invalid import CSV. See error contents for additional info.
- `P405` - Invalid phone number. Make sure you are sending the phone number in full international format, e.g. +30 xx x xxx xxxx.
- `C404` - Invalid phone number. Make sure you are sending the phone number in full international format, e.g. +30 xx x xxx xxxx.
- `P406` - Invalid compartment/parcel size. Make sure you are sending one of required sizes 1, 2 or 3. Size is required when sending from AnyAPM directly.
- `P407` - Invalid country code. Make sure you are sending country code in ISO 3166-1 alpha-2 format, e.g. GR.
- `P408` - Invalid amountToBeCollected amount. Make sure you are sending amount in the valid range of (0, 5000>
- `P409` - Invalid delivery partner reference. Make sure you are referencing a valid delivery partner ID from Delivery partners endpoint.
- `P410` - Order number conflict. You are trying to create a delivery request for order ID that has already been created. Choose another order id.
- `P411` - You are not eligible to use Cash-on-delivery payment type. Use another payment type or contact our support.
- `P412` - You are not allowed to create customer returns deliveries. Contact support if you believe this is a mistake.
- `P413` - Invalid return location reference. Make sure you are referencing a valid location warehouse ID from Origins  endpoint or valid address.
- `P415` - You are not allowed to create delivery to home address. Contact support if you believe this is a mistake.
- `P416` - You are not allowed to use COD payment for delivery to home address. Contact support if you believe this is a mistake.
- `P417` - You are not allowed to use `q` parameter. It is forbidden for server partner accounts.
- `P420` - Parcel not ready for cancel. You can cancel only new, undelivered, or parcels that are not returned or lost. Make sure parcel is in transit and try again.
- `P421` - Invalid parcel weight. Make sure you are sending value between 0 and 10^6.
- `P422` - Address not found. Try to call just with postal code and country.
- `P423` - Nearby locker not found.
- `P424` - Invalid region format. Please ensure the format includes a language code followed by a country code in ISO 3166-1 alpha-2 format, separated by a hyphen, e.g. el-GR, or region exists in context.
- `P425` - Parcel not ready to declare a delivery partner return. Make sure parcel is not in any of the following states in order to declare a delivery partner return: 'canceled-return', 'lost', 'canceled', 'returned', 'expired-return'.
- `P426` - Parcel not eligible to declare a delivery partner return. Parcel needs to use a delivery partner in order to declare a return.
- `P430` - Parcel not ready for AnyAPM confirmation. Parcel is probably already confirmed or being delivered. Contact support if you believe this is a mistake.
- `P440` - Ambiguous partner. Your account is linked to multiple partners and is unclear on whose behalf you want to perform this action. Send `X-PartnerID` header with ID of the partner you want to manage. You can get list of available Partner IDs from /entrusted-partners endpoint.
- `P441` - Invalid X-PartnerID header. Value you provided for X-PartnerID header is either invalid or references partner you don't have access to. Make sure you are sending ID from /entrusted-partners endpoint.
- `P442` - Invalid limit query parameter. The query limit for this API has been exceeded. Please reduce the size of your query (max allowed is 100).
- `P460` - Parcel not eligible for external destination delivery. Delivery request destination.deliveryPartnerId is not set.
- `P461` - Invalid street. Make sure the length is not more than 100 characters.
- `P462` - Invalid city. Make sure the length is not more than 50 characters.
- `P464` - Invalid postal code. Make sure the length is not more than 20 characters.

### Description of codes for `403 Forbidden` responses

- `X403` - Account disabled. Your account had been disabled, contact support.
- `P414` - Unauthorized parcel access. You are trying to access information to parcel/s that don't belong to you. Make sure you are requesting information for parcels you have access to.
- `P465` - Partner doesn't have access for checking delivery addresses.
- `P466` - You are not allowed to create a delivery request because your account has an overdue flag and you are not a vip partner.

### Description of codes for `503 Service Unavailable` responses

| Code | Description |
|---|---|
| `P600` | Locker bridge communication failed. There has been some error when communicating with the locker bridge. Try again later or contact support. |
| `P610` | Geolocation API failed. There has been some error when translating address to gps coordinates. Try again later or contact support. |



## Installation & Usage

### Requirements

PHP 8.1 and later.

### Composer

To install the bindings via [Composer](https://getcomposer.org/), add the following to `composer.json`:

```json
{
  "repositories": [
    {
      "type": "vcs",
      "url": "https://github.com/GIT_USER_ID/GIT_REPO_ID.git"
    }
  ],
  "require": {
    "GIT_USER_ID/GIT_REPO_ID": "*@dev"
  }
}
```

Then run `composer install`

### Manual Installation

Download the files and include `autoload.php`:

```php
<?php
require_once('/path/to/MMMIKE/vendor/autoload.php');
```

## Getting Started

Please follow the [installation procedure](#installation--usage) and then run the following:

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');




$apiInstance = new Boxnow\Api\AuthenticationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$api_v1_auth_sessions_post_request = new \Boxnow\Model\ApiV1AuthSessionsPostRequest(); // \Boxnow\Model\ApiV1AuthSessionsPostRequest

try {
    $result = $apiInstance->apiV1AuthSessionsPost($api_v1_auth_sessions_post_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AuthenticationApi->apiV1AuthSessionsPost: ', $e->getMessage(), PHP_EOL;
}

```

## API Endpoints

All URIs are relative to *http://TBA*

Class | Method | HTTP request | Description
------------ | ------------- | ------------- | -------------
*AuthenticationApi* | [**apiV1AuthSessionsPost**](docs/Api/AuthenticationApi.md#apiv1authsessionspost) | **POST** /api/v1/auth-sessions | Obtain authentication tokens
*DeliveryPartnersApi* | [**apiV1DeliveryPartnersGet**](docs/Api/DeliveryPartnersApi.md#apiv1deliverypartnersget) | **GET** /api/v1/delivery-partners | List of available delivery partners
*DeliveryRequestsApi* | [**apiV1DeliveryRequestsCheckAddressDeliveryPost**](docs/Api/DeliveryRequestsApi.md#apiv1deliveryrequestscheckaddressdeliverypost) | **POST** /api/v1/delivery-requests:checkAddressDelivery | Check delivery for address is available using Google Maps Geocoding API
*DeliveryRequestsApi* | [**apiV1DeliveryRequestsCustomerReturnsPost**](docs/Api/DeliveryRequestsApi.md#apiv1deliveryrequestscustomerreturnspost) | **POST** /api/v1/delivery-requests:customerReturns | Create a request delivery of parcel that customer would like to return
*DeliveryRequestsApi* | [**apiV1DeliveryRequestsFromCsvPost**](docs/Api/DeliveryRequestsApi.md#apiv1deliveryrequestsfromcsvpost) | **POST** /api/v1/delivery-requests:fromCsv | Create delivery requests
*DeliveryRequestsApi* | [**apiV1DeliveryRequestsOrderNumberPut**](docs/Api/DeliveryRequestsApi.md#apiv1deliveryrequestsordernumberput) | **PUT** /api/v1/delivery-requests/{orderNumber} | Update a created delivery request
*DeliveryRequestsApi* | [**apiV1DeliveryRequestsPost**](docs/Api/DeliveryRequestsApi.md#apiv1deliveryrequestspost) | **POST** /api/v1/delivery-requests | Create a delivery request for your order
*DeliveryRequestsApi* | [**apiV1SimpleDeliveryRequestsPost**](docs/Api/DeliveryRequestsApi.md#apiv1simpledeliveryrequestspost) | **POST** /api/v1/simple-delivery-requests | Create delivery request for order with minimal data
*DeliveryRequestsApi* | [**apiV2DeliveryRequestsCheckAddressDeliveryPost**](docs/Api/DeliveryRequestsApi.md#apiv2deliveryrequestscheckaddressdeliverypost) | **POST** /api/v2/delivery-requests:checkAddressDelivery | Check delivery for address is available using ArcGIS Geocoding API
*LabelsApi* | [**apiV1DeliveryRequestsOrderNumberLabelGet**](docs/Api/LabelsApi.md#apiv1deliveryrequestsordernumberlabelget) | **GET** /api/v1/delivery-requests/{orderNumber}/label | Get shipping label data of parcels order
*LabelsApi* | [**apiV1DeliveryRequestsOrderNumberLabelTypeGet**](docs/Api/LabelsApi.md#apiv1deliveryrequestsordernumberlabeltypeget) | **GET** /api/v1/delivery-requests/{orderNumber}/label.{type} | Get printable labels for all parcels in a delivery request.
*LabelsApi* | [**apiV1LabelsSearchPost**](docs/Api/LabelsApi.md#apiv1labelssearchpost) | **POST** /api/v1/labels:search | Find labels as PDF
*LabelsApi* | [**apiV1ParcelsIdDestinationlabelGenerateUploadUrlPost**](docs/Api/LabelsApi.md#apiv1parcelsiddestinationlabelgenerateuploadurlpost) | **POST** /api/v1/parcels/{id}/destinationlabel:generateUploadUrl | Get upload url for a custom label
*LabelsApi* | [**apiV1ParcelsIdLabelGet**](docs/Api/LabelsApi.md#apiv1parcelsidlabelget) | **GET** /api/v1/parcels/{id}/label | Get shipping label data of parcel
*LabelsApi* | [**apiV1ParcelsIdLabelTypeGet**](docs/Api/LabelsApi.md#apiv1parcelsidlabeltypeget) | **GET** /api/v1/parcels/{id}/label.{type} | Get printable label for parcel.
*LabelsApi* | [**uiV1DeliveryRequestsOrderImportsNumberLabelPdfGet**](docs/Api/LabelsApi.md#uiv1deliveryrequestsorderimportsnumberlabelpdfget) | **GET** /ui/v1/delivery-requests/{orderImportsNumber}/label.pdf | Get printable labels for all parcels in a delivery request.
*LocationsApi* | [**apiV1DestinationsGet**](docs/Api/LocationsApi.md#apiv1destinationsget) | **GET** /api/v1/destinations | List available destinations to deliver the order to
*LocationsApi* | [**apiV1OriginsGet**](docs/Api/LocationsApi.md#apiv1originsget) | **GET** /api/v1/origins | List available origins to pickup the order from
*ParcelsApi* | [**apiV1ParcelsGet**](docs/Api/ParcelsApi.md#apiv1parcelsget) | **GET** /api/v1/parcels | List parcel info related to your delivery requests
*ParcelsApi* | [**apiV1ParcelsIdCancelPost**](docs/Api/ParcelsApi.md#apiv1parcelsidcancelpost) | **POST** /api/v1/parcels/{id}:cancel | Cancel parcel delivery
*ParcelsApi* | [**apiV1ParcelsIdConfirmAnyapmDeliveryPost**](docs/Api/ParcelsApi.md#apiv1parcelsidconfirmanyapmdeliverypost) | **POST** /api/v1/parcels/{id}:confirm-anyapm-delivery | Confirm parcel has been delivered to AnyAPM
*ParcelsApi* | [**apiV1ParcelsIdDeclareDeliveryPartnerReturnPost**](docs/Api/ParcelsApi.md#apiv1parcelsiddeclaredeliverypartnerreturnpost) | **POST** /api/v1/parcels/{id}:declareDeliveryPartnerReturn | Initiate a parcel return from a delivery partner
*ParcelsApi* | [**uiV1ParcelsCsvGet**](docs/Api/ParcelsApi.md#uiv1parcelscsvget) | **GET** /ui/v1/parcels.csv | List parcels to csv file
*PartnersApi* | [**apiV1EntrustedPartnersGet**](docs/Api/PartnersApi.md#apiv1entrustedpartnersget) | **GET** /api/v1/entrusted-partners | Get list of partner you can manage
*WebhooksApi* | [**yourWebhookEndpointPost**](docs/Api/WebhooksApi.md#yourwebhookendpointpost) | **POST** /{your-webhook-endpoint} | Your webhook endpoint. Used to send You parcel events messages. You should set this endpoint in your BoxNow account.

## Models

- [ApiV1AuthSessionsPost200Response](docs/Model/ApiV1AuthSessionsPost200Response.md)
- [ApiV1AuthSessionsPost400Response](docs/Model/ApiV1AuthSessionsPost400Response.md)
- [ApiV1AuthSessionsPost403Response](docs/Model/ApiV1AuthSessionsPost403Response.md)
- [ApiV1AuthSessionsPostRequest](docs/Model/ApiV1AuthSessionsPostRequest.md)
- [ApiV1DeliveryPartnersGet200Response](docs/Model/ApiV1DeliveryPartnersGet200Response.md)
- [ApiV1DeliveryPartnersGet200ResponseDataInner](docs/Model/ApiV1DeliveryPartnersGet200ResponseDataInner.md)
- [ApiV1DeliveryRequestsCheckAddressDeliveryPost200Response](docs/Model/ApiV1DeliveryRequestsCheckAddressDeliveryPost200Response.md)
- [ApiV1DeliveryRequestsCheckAddressDeliveryPost400Response](docs/Model/ApiV1DeliveryRequestsCheckAddressDeliveryPost400Response.md)
- [ApiV1DeliveryRequestsCheckAddressDeliveryPostRequest](docs/Model/ApiV1DeliveryRequestsCheckAddressDeliveryPostRequest.md)
- [ApiV1DeliveryRequestsCustomerReturnsPost200Response](docs/Model/ApiV1DeliveryRequestsCustomerReturnsPost200Response.md)
- [ApiV1DeliveryRequestsCustomerReturnsPost400Response](docs/Model/ApiV1DeliveryRequestsCustomerReturnsPost400Response.md)
- [ApiV1DeliveryRequestsCustomerReturnsPost403Response](docs/Model/ApiV1DeliveryRequestsCustomerReturnsPost403Response.md)
- [ApiV1DeliveryRequestsCustomerReturnsPostRequest](docs/Model/ApiV1DeliveryRequestsCustomerReturnsPostRequest.md)
- [ApiV1DeliveryRequestsCustomerReturnsPostRequestDestination](docs/Model/ApiV1DeliveryRequestsCustomerReturnsPostRequestDestination.md)
- [ApiV1DeliveryRequestsCustomerReturnsPostRequestParcelsInner](docs/Model/ApiV1DeliveryRequestsCustomerReturnsPostRequestParcelsInner.md)
- [ApiV1DeliveryRequestsCustomerReturnsPostRequestSender](docs/Model/ApiV1DeliveryRequestsCustomerReturnsPostRequestSender.md)
- [ApiV1DeliveryRequestsFromCsvPost200ResponseInner](docs/Model/ApiV1DeliveryRequestsFromCsvPost200ResponseInner.md)
- [ApiV1DeliveryRequestsFromCsvPost200ResponseInnerDestination](docs/Model/ApiV1DeliveryRequestsFromCsvPost200ResponseInnerDestination.md)
- [ApiV1DeliveryRequestsFromCsvPost200ResponseInnerParcelsInner](docs/Model/ApiV1DeliveryRequestsFromCsvPost200ResponseInnerParcelsInner.md)
- [ApiV1DeliveryRequestsFromCsvPost400Response](docs/Model/ApiV1DeliveryRequestsFromCsvPost400Response.md)
- [ApiV1DeliveryRequestsOrderNumberLabelGet200Response](docs/Model/ApiV1DeliveryRequestsOrderNumberLabelGet200Response.md)
- [ApiV1DeliveryRequestsOrderNumberPut200Response](docs/Model/ApiV1DeliveryRequestsOrderNumberPut200Response.md)
- [ApiV1DeliveryRequestsOrderNumberPutRequest](docs/Model/ApiV1DeliveryRequestsOrderNumberPutRequest.md)
- [ApiV1DeliveryRequestsPost200Response](docs/Model/ApiV1DeliveryRequestsPost200Response.md)
- [ApiV1DeliveryRequestsPost200ResponseParcelsInner](docs/Model/ApiV1DeliveryRequestsPost200ResponseParcelsInner.md)
- [ApiV1DeliveryRequestsPost400Response](docs/Model/ApiV1DeliveryRequestsPost400Response.md)
- [ApiV1DeliveryRequestsPost403Response](docs/Model/ApiV1DeliveryRequestsPost403Response.md)
- [ApiV1DestinationsGet200Response](docs/Model/ApiV1DestinationsGet200Response.md)
- [ApiV1EntrustedPartnersGet200ResponseInner](docs/Model/ApiV1EntrustedPartnersGet200ResponseInner.md)
- [ApiV1LabelsSearchPost400Response](docs/Model/ApiV1LabelsSearchPost400Response.md)
- [ApiV1LabelsSearchPost403Response](docs/Model/ApiV1LabelsSearchPost403Response.md)
- [ApiV1LabelsSearchPostRequest](docs/Model/ApiV1LabelsSearchPostRequest.md)
- [ApiV1OriginsGet200Response](docs/Model/ApiV1OriginsGet200Response.md)
- [ApiV1ParcelsGet200Response](docs/Model/ApiV1ParcelsGet200Response.md)
- [ApiV1ParcelsGet200ResponseDataInner](docs/Model/ApiV1ParcelsGet200ResponseDataInner.md)
- [ApiV1ParcelsGet200ResponsePagination](docs/Model/ApiV1ParcelsGet200ResponsePagination.md)
- [ApiV1ParcelsIdDeclareDeliveryPartnerReturnPost400Response](docs/Model/ApiV1ParcelsIdDeclareDeliveryPartnerReturnPost400Response.md)
- [ApiV1ParcelsIdDestinationlabelGenerateUploadUrlPost200Response](docs/Model/ApiV1ParcelsIdDestinationlabelGenerateUploadUrlPost200Response.md)
- [ApiV1ParcelsIdDestinationlabelGenerateUploadUrlPost400Response](docs/Model/ApiV1ParcelsIdDestinationlabelGenerateUploadUrlPost400Response.md)
- [ApiV1ParcelsIdDestinationlabelGenerateUploadUrlPostRequest](docs/Model/ApiV1ParcelsIdDestinationlabelGenerateUploadUrlPostRequest.md)
- [ApiV1ParcelsIdLabelGet200Response](docs/Model/ApiV1ParcelsIdLabelGet200Response.md)
- [ApiV1ParcelsIdLabelGet400Response](docs/Model/ApiV1ParcelsIdLabelGet400Response.md)
- [ApiV1SimpleDeliveryRequestsPost200Response](docs/Model/ApiV1SimpleDeliveryRequestsPost200Response.md)
- [ApiV1SimpleDeliveryRequestsPost200ResponseParcelsInner](docs/Model/ApiV1SimpleDeliveryRequestsPost200ResponseParcelsInner.md)
- [ApiV1SimpleDeliveryRequestsPost400Response](docs/Model/ApiV1SimpleDeliveryRequestsPost400Response.md)
- [ApiV1SimpleDeliveryRequestsPostRequest](docs/Model/ApiV1SimpleDeliveryRequestsPostRequest.md)
- [ApiV1SimpleDeliveryRequestsPostRequestDestination](docs/Model/ApiV1SimpleDeliveryRequestsPostRequestDestination.md)
- [ApiV1SimpleDeliveryRequestsPostRequestDestinationAllOfOneOf](docs/Model/ApiV1SimpleDeliveryRequestsPostRequestDestinationAllOfOneOf.md)
- [ApiV1SimpleDeliveryRequestsPostRequestDestinationAllOfOneOf1](docs/Model/ApiV1SimpleDeliveryRequestsPostRequestDestinationAllOfOneOf1.md)
- [ApiV1SimpleDeliveryRequestsPostRequestOrigin](docs/Model/ApiV1SimpleDeliveryRequestsPostRequestOrigin.md)
- [ApiV1SimpleDeliveryRequestsPostRequestParcelsInner](docs/Model/ApiV1SimpleDeliveryRequestsPostRequestParcelsInner.md)
- [ApiV2DeliveryRequestsCheckAddressDeliveryPost400Response](docs/Model/ApiV2DeliveryRequestsCheckAddressDeliveryPost400Response.md)
- [ApiV2DeliveryRequestsCheckAddressDeliveryPostRequest](docs/Model/ApiV2DeliveryRequestsCheckAddressDeliveryPostRequest.md)
- [ApmDelivery](docs/Model/ApmDelivery.md)
- [DeliveryDeliveryPartnerInformation](docs/Model/DeliveryDeliveryPartnerInformation.md)
- [DeliveryLocationAddress](docs/Model/DeliveryLocationAddress.md)
- [DeliveryPartner](docs/Model/DeliveryPartner.md)
- [DeliveryPartnerDelivery](docs/Model/DeliveryPartnerDelivery.md)
- [DeliveryPayment](docs/Model/DeliveryPayment.md)
- [DeliveryRequest](docs/Model/DeliveryRequest.md)
- [DeliveryRequestDestination](docs/Model/DeliveryRequestDestination.md)
- [DeliveryRequestDestinationAllOfAnyOf](docs/Model/DeliveryRequestDestinationAllOfAnyOf.md)
- [DeliveryRequestItemsInner](docs/Model/DeliveryRequestItemsInner.md)
- [DeliveryRequestOrigin](docs/Model/DeliveryRequestOrigin.md)
- [DeliveryRequestOriginAllOfAnyOf](docs/Model/DeliveryRequestOriginAllOfAnyOf.md)
- [DeliveryRequestOverwriteSenderShippingLabelInfo](docs/Model/DeliveryRequestOverwriteSenderShippingLabelInfo.md)
- [DeliveryRequestReturnLocation](docs/Model/DeliveryRequestReturnLocation.md)
- [DeliveryRequestReturnLocationAnyOf](docs/Model/DeliveryRequestReturnLocationAnyOf.md)
- [DeliveryRequestV2](docs/Model/DeliveryRequestV2.md)
- [DeliveryRequestV2Destination](docs/Model/DeliveryRequestV2Destination.md)
- [DeliveryRequestV2DestinationAllOfAnyOf](docs/Model/DeliveryRequestV2DestinationAllOfAnyOf.md)
- [DeliveryRequestV2Origin](docs/Model/DeliveryRequestV2Origin.md)
- [DeliveryRequestV2OriginAllOfAnyOf](docs/Model/DeliveryRequestV2OriginAllOfAnyOf.md)
- [DeliveryRequestV2ParcelsInner](docs/Model/DeliveryRequestV2ParcelsInner.md)
- [Destination](docs/Model/Destination.md)
- [EC404](docs/Model/EC404.md)
- [EP400](docs/Model/EP400.md)
- [EP401](docs/Model/EP401.md)
- [EP402](docs/Model/EP402.md)
- [EP403](docs/Model/EP403.md)
- [EP404](docs/Model/EP404.md)
- [EP405](docs/Model/EP405.md)
- [EP406](docs/Model/EP406.md)
- [EP407](docs/Model/EP407.md)
- [EP408](docs/Model/EP408.md)
- [EP409](docs/Model/EP409.md)
- [EP410](docs/Model/EP410.md)
- [EP411](docs/Model/EP411.md)
- [EP412](docs/Model/EP412.md)
- [EP413](docs/Model/EP413.md)
- [EP414](docs/Model/EP414.md)
- [EP415](docs/Model/EP415.md)
- [EP416](docs/Model/EP416.md)
- [EP420](docs/Model/EP420.md)
- [EP422](docs/Model/EP422.md)
- [EP423](docs/Model/EP423.md)
- [EP424](docs/Model/EP424.md)
- [EP425](docs/Model/EP425.md)
- [EP426](docs/Model/EP426.md)
- [EP430](docs/Model/EP430.md)
- [EP440](docs/Model/EP440.md)
- [EP441](docs/Model/EP441.md)
- [EP460](docs/Model/EP460.md)
- [EP461](docs/Model/EP461.md)
- [EP462](docs/Model/EP462.md)
- [EP464](docs/Model/EP464.md)
- [EP465](docs/Model/EP465.md)
- [EP466](docs/Model/EP466.md)
- [EP600](docs/Model/EP600.md)
- [EP610](docs/Model/EP610.md)
- [EX403](docs/Model/EX403.md)
- [EventType](docs/Model/EventType.md)
- [EventsInner](docs/Model/EventsInner.md)
- [LabelType](docs/Model/LabelType.md)
- [LabelsInner](docs/Model/LabelsInner.md)
- [Location](docs/Model/Location.md)
- [LocationAddress](docs/Model/LocationAddress.md)
- [LocationType](docs/Model/LocationType.md)
- [Money](docs/Model/Money.md)
- [ParcelLabelData](docs/Model/ParcelLabelData.md)
- [ParcelLabelDataDelivery](docs/Model/ParcelLabelDataDelivery.md)
- [ParcelLabelDataParcel](docs/Model/ParcelLabelDataParcel.md)
- [ParcelLabelDataPayment](docs/Model/ParcelLabelDataPayment.md)
- [ParcelLabelDataRecipient](docs/Model/ParcelLabelDataRecipient.md)
- [ParcelLabelDataSender](docs/Model/ParcelLabelDataSender.md)
- [ParcelState](docs/Model/ParcelState.md)
- [PartnerPermission](docs/Model/PartnerPermission.md)
- [PaymentCOD](docs/Model/PaymentCOD.md)
- [PaymentMode](docs/Model/PaymentMode.md)
- [PaymentPrepaid](docs/Model/PaymentPrepaid.md)
- [PaymentState](docs/Model/PaymentState.md)
- [PickupDeliveryPartnerInformation](docs/Model/PickupDeliveryPartnerInformation.md)
- [RecipientEshopOrP2P](docs/Model/RecipientEshopOrP2P.md)
- [RecipientReturns](docs/Model/RecipientReturns.md)
- [SenderEshop](docs/Model/SenderEshop.md)
- [SenderP2P](docs/Model/SenderP2P.md)
- [SenderReturns](docs/Model/SenderReturns.md)
- [WebhookMessage](docs/Model/WebhookMessage.md)
- [WebhookMessageData](docs/Model/WebhookMessageData.md)
- [WebhookMessageDataCustomer](docs/Model/WebhookMessageDataCustomer.md)
- [WebhookMessageDataEventLocation](docs/Model/WebhookMessageDataEventLocation.md)

## Authorization

Authentication schemes defined for the API:
### bearer

- **Type**: Bearer authentication (JWT)

## Tests

To run the tests, use:

```bash
composer install
vendor/bin/phpunit
```

## Author



## About this package

This PHP package is automatically generated by the [OpenAPI Generator](https://openapi-generator.tech) project:

- API version: `1.65`
    - Generator version: `7.13.0-SNAPSHOT`
- Build package: `org.openapitools.codegen.languages.PhpClientCodegen`
