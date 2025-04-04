<?php
/**
 * DeliveryRequestsApi
 * PHP version 8.1
 *
 * @category Class
 * @package  Boxnow
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Partner API
 *
 * Document describes the API description for partners in order to create and track delivery requests.  ## Revision history  |Date|Author|Description|Version| |-|-|-|-| |2024-09-26|Hoffmann, P.| Add P466 error code |1.65| |2024-09-25|Filatov, R.| Add P465 error for /api/{v1,v2}/delivery-requests:checkAddressDelivery |1.64| |2024-08-13|Hoffmann, P.| Update `shippingRegions` in /api/v1/entrusted-partners response. |1.63| |2024-07-22|Hoffmann, P.| Add `shippingRegions` and `phoneNumber` to /api/v1/entrusted-partners response. |1.62| |2024-07-11|Filatov, R.| Add P461, P462, P464 errors for ArcGIS validations to /api/v2/delivery-requests:checkAddressDelivery |1.61| |2024-07-08|Hoffmann, P.| Add `email` and `phoneNumber` to /api/v1/entrusted-partners response. Add `originContactEmail` and `originContactNumber` to /api/v1/delivery-requests:fromCsv request body |1.60| |2024-05-23|Balagazova, K.| Add lost parcel event |1.59| |2024-04-08|Hoffmann, P.| Add declareDeliveryPartnerReturn |1.58| |2024-03-15|Šmolík, J.| Add generate upload label link |1.57| |2024-02-02|Šmolík, J.| Add location id to /api/v1/parcels events |1.56| |2023-11-15|Filatov, R.| Add P422, P423, P424 error codes |1.55| |2023-11-13|Filatov, R.| Add new `/api/v2/delivery-requests:checkAddressDelivery` endpoint switched to ArcGIS |1.54| |2023-11-08|Filatov, R.| Add `customerReturnsMaxAllowedSize` for /api/v1/entrusted-partners |1.53| |2023-06-10|Filatov, R.| Add `weight` min/max validation (error cde P421) and always round it to 2 decimals on /api/v1/delivery-requests:customerReturns|1.52| |2023-05-10|Balagazova, K.| Forbid usage of `q` parameter of `api/v1/parcels` for partner server accounts |1.51| |2023-04-28|Hoffmann, P.| Remove `X-Overwrite-Date` request header from /api/v1/delivery-requests and /api/v1/entrusted-partners |1.50| |2023-04-28|Azizov, J.| Add P442 error code |1.49| |2023-04-12|Balagazova, K.|Add `limit` field and automatic ordering by distance to /api/v1/destinations |1.48| |2023-04-04|Balagazova K.| Add `showRecipientInformation` field to /api/v1/delivery-requests /api/v1/delivery-requests:fromCsv |1.47| |2023-02-23|Balagazova K.| Add customer information to the webhook message |1.46| |2022-11-29|Azizov J.| Add Webhook schema and an example endpoint |1.45| |2022-11-28|Vala J.| Add partner permission to /entrusted-partners response |1.44| |2022-11-24|Vala J.| Add partner permission `addressAsDestination`, `codAddressAsDestination`. Validate partner permission for delivery to address and cod payment use for delivery to address when creating delivery request |1.43| |2022-11-14|Vala J.| Add `X-Overwrite-Date` request header for delivery request to test Croatian currency conversion, only testeable on dev |1.42| |2022-10-21|Vala J.| Add validation error code to /api/v1/simple-delivery-requests /api/v1/delivery-requests /api/v1/delivery-requests:customerReturns |1.41| |2022-09-22|Šmolík, J.|Add accepted-to-locker parcel event |1.40| |2022-09-08|Šmolík J.| Add support for user to choose partner they want to work with |1.39| |2022-08-10|Šmolík J.| Add /labels:search to download PDF labels for defined criteria |1.38| |2022-08-08|Azizov. J.| Add `region` field to /destinations and /origins endpoints |1.37| |2022-07-27|Vala J.| Add EP for listing shipping label data of parcels order /api/v1/delivery-requests/{orderNumber}/label |1.36| |2022-07-27|Vala J.| Add EP for listing shipping label data of parcel /api/v1/parcels/{id}/label |1.35| |2022-07-22|Vala J.| Add destination_public_id column to csv export of parcels |1.34| |2022-07-08|Vala J.| <ul><li>Add exportCsvUrl to headers ['X-export-url-csv'] to response from /api/v1/parcels</li><li>Add endpoint to export parcels to csv file /ui/v1/parcels.csv</li></ul> |1.33| |2022-06-27|Vala J.| Add width and printerModel query parameters for zpl shipping labels for /api/v1/delivery-requests/{orderNumber}/label.{type} and /api/v1/parcels/{id}/label.{type} |1.32| |2022-06-17|Šmolík, J.| Allow to select return location for delivery request |1.31| |2022-05-25|Vala, J.| Add single labelUrlPdf to headers ['X-labels-url-pdf'] in response from /api/v1/delivery-requests:fromCsv |1.30| |2022-05-25|Vala, J.| Add EP to handle csv import orders printing of shipping label /ui/v1/delivery-requests/{orderImportsNumber}/label.pdf |1.29| |2022-05-20|Vala, J.| Add possibility to overwrite 4 rows in shipping label sender info to /api/v1/delivery-requests endpoint |1.28| |2022-05-04|Azizov, J.| Add state and created filters to to /api/v1/parcels endpoint |1.27| |2022-05-03|Azizov, J.| Add possibility to search parcels to /api/v1/parcels endpoint |1.26| |2022-04-27|Azizov, J.| Add /api/v1/delivery-requests:customerReturns for customer returns delivery requests |1.25| |2022-04-26|Vala, J.| Add createTime, updateTime to parcel list response |1.24| |2022-04-21|Šmolík, J.| Add payment info to parcels |1.23| |2022-02-22|Azizov, J.| Add P408 and P409 error codes |1.22| |2022-02-22|Azizov, J.| Add notifySMSOnAccepted to DeliveryRequest |1.21| |2022-02-01|Šmolík, J.| <ul><li>Add check address delivery endpoint</li><li>Add /api/v1/simple-delivery-requests for simpler delivery creation</li></ul> |1.20| |2022-01-20|Šmolík, J.| Add P405, P406 and P407 error codes |1.19| |2022-01-10|Šmolík, J.| <ul><li>Add CSV import endpoint</li><li>Add JWT custom claims description</li><li>Move 403 error codes to own section</li></ul> |1.18| |2021-12-23|Šmolík, J.| <ul><li>Add new endpoint to confirm AnyAPM delivery of a parcel</li><li>Partition error codes by HTTP status response</li></ul> |1.17| |2021-12-16|Šmolík, J.| Add new error code P403 |1.16| |2021-12-09|Šmolík, J.| Add new error codes P401, P402 |1.15| |2021-11-30|Šmolík, J.| Add delivery request origin, destination and items fields description |1.14| |2021-11-11|Šmolík, J.| Add endpoint for parcel delivery cancellation |1.13| |2021-11-09|Šmolík, J.| Add X403 error code spec |1.12| |2021-10-14|Šmolík, J.| Add Accepted for return event |1.11| |2021-10-05|Šmolík, J.| Make DeliveryRequest.items required |1.10| |2021-09-22|Šmolík, J.| Add canceled event state and event|1.9| |2021-09-17|Šmolík, J.| Add PDF label URLs to parcels response |1.8 |2021-09-13|Šmolík, J.| <ul><li>Update parcel state enum values</li><li>Remove history event displayName, add type</li></ul>|1.7 |2021-08-25|Azizov, J.| <ul><li>Add possibility to print labels for all parcels in order</li><li>Make contact information of origin optional in delivery request</li></ul>|1.6 |2021-08-02|Azizov, J.| Add items metadata to parcel |1.5| |2021-07-15|Šmolík, J.| Add destination expected delivery time |1.4| |2021-06-23|Šmolík, J.| Update money value fields description |1.3| |2021-06-21|Šmolík, J.| <ul><li>Update Requesting a delivery text</li><li>Add `name` filter to origins and destinations </li><li>Rename delivery request code of description to plain description</li><li>Add more specific info to value amount fields</li><li>Update address country to match ISO Code</li><li>Update address postal code formatting</li><li>Update origin/destination for delivery request</li><li>Remove height, length, width from order item</li><li>Add events to parcel info</li><li>Update delivery request response</li><li>Update order number description</li><li>Add parcel id filter to /parcels</li><li>Add message to error</li><li>Make contact name required</li><li>Add delivery partner parcel ids</li><li>Remove order items' code and status</li></ul> |1.2| |2021-06-14|Šmolík, J.| <ul><li>Add a todo to specify client notification type after accepting the order.</li><li> Let the partner choose to receive an email when successful delivery request is made.</li><li> Remove `typeOfOrder` from delivery request.</li><li>Add option to select delivery partner for pickup</li><li>Make item weight in the order optional</li><li>Make origin contact email required</li><li>Add support to add sender's name when making delivery request</li><li>Remove landmark and code from address</li><li>Add new error code or partners not eligible to create COD delivery requests</li><li>Add support to filter destinations/origins by type</li><li>Add support to send compartment size for order item, required for APM origin</li><li>Make `typeOfService` optional</li></ul> |1.1| |2021-06-09|Šmolík, J.|Initial version|1.0|  # Setup  Register your company through our support.  We are going to need   - Company name   - List of Phone numbers for SMS OTP authentication of people who'll you want to have access to the Partner CMS   - List of addresses for pickup points - where do we pickup your order for delivery  You will get in return - `OAUTH_CLIENT_ID` - OAuth2 Client ID for authenticating with the Partner API. Keep it safe. Value may vary for each environment. - `OAUTH_CLIENT_SECRET` - OAuth2 Client Secret for authenticating with the Partner API. Keep it safe. Value may vary for each environment. - `API_URL` - Base URL for Partner API  ## Environments  Product offers multiple environments   - Sandbox - For you to test the integration. Limited functionality.   - Production - Connected to real end-users. Use with care.  Environment setting summary: | Value \\ Env | Sandbox |  Production | |---|---|---| | `API_URL`  | N/A  | N/A | | `OAUTH_CLIENT_SECRET`  | Contact Support | Contact Support | | `OAUTH_CLIENT_ID`  | Contact Support  | Contact Support |   # API  ## Authentication  Authentication is based on OAuth2 standard, Client Credentials grant. Token endpoint `/auth-sessions`, see examples below.  Client ID and Secret MUST be passed to you from BoxNow support in advance.  In order to use the API, you MUST attach the access token to Authorization header as a Bearer token.  ### Custom JWT claims  You can find additional user information in custom claims under namespace key `https://boxnow.gr`. For example  ```json {   \"iat\": 1641980553,   \"exp\": 1641984153,   \"https://boxnow.gr\": {     \"permission\": {       \"warehouseAsOrigin\": true,       \"anyApmAsOrigin\": true,       \"anyApmToSameApmDelivery\": true,       \"anyApmToSameApmDeliveryWithoutConfirmation\": true,       \"depotAsOrigin\": true     }   } } ```  ## Listing available destinations  You can skip this if you don't want to deliver your order to one of our APMs.  Use `/destinations` to list available APM locations we can deliver the goods to. You will refer to these records by `id` when requesting delivery later on.  ## What can influence `/destinations` endpoint response   - Only APMs with `Box Now Ready` state are considered   - APMs must be available for your required package size (see: '#/components/parameters/LocationRequiredSize')  ## Requesting a delivery  Create a delivery request to delivery your order to the client. Use `/delivery-requests` endpoint for this operation.  Once a successful request delivery is made   - (optional) we send you an email notifying about successful delivery request creation, if you choose to receive this email   - you should fetch the PDF label for each of the parcel from `/parcels/{id}/label.pdf`, print it and stick it to the parcel/s   - we send a courier to pick up the labeled parcel/s   - we notify the client via email that we have accepted the order from you and its being delivered by us  ## Modifying a delivery request  After a delivery request is successfully made, you can alter some parts of it later on. Use `/delivery-requests/{id}` endpoint for these modifications.  ## Checking on the deliveries  You can list parcel related to your delivery requests via `/parcels` endpoint.   ## Error codes  ### Description of codes for `400 Bad Request` responses  - `P400` - Invalid request data. Make sure are sending the request according to this documentation. - `P401` - Invalid request origin location reference. Make sure you are referencing a valid location ID from Origins endpoint or valid address. - `P402` - Invalid request destination location reference. Make sure you are referencing a valid location ID from Destinations endpoint or valid address. - `P403` - You are not allowed to use AnyAPM-SameAPM delivery. Contact support if you believe this is a mistake. - `P404` - Invalid import CSV. See error contents for additional info. - `P405` - Invalid phone number. Make sure you are sending the phone number in full international format, e.g. +30 xx x xxx xxxx. - `C404` - Invalid phone number. Make sure you are sending the phone number in full international format, e.g. +30 xx x xxx xxxx. - `P406` - Invalid compartment/parcel size. Make sure you are sending one of required sizes 1, 2 or 3. Size is required when sending from AnyAPM directly. - `P407` - Invalid country code. Make sure you are sending country code in ISO 3166-1 alpha-2 format, e.g. GR. - `P408` - Invalid amountToBeCollected amount. Make sure you are sending amount in the valid range of (0, 5000> - `P409` - Invalid delivery partner reference. Make sure you are referencing a valid delivery partner ID from Delivery partners endpoint. - `P410` - Order number conflict. You are trying to create a delivery request for order ID that has already been created. Choose another order id. - `P411` - You are not eligible to use Cash-on-delivery payment type. Use another payment type or contact our support. - `P412` - You are not allowed to create customer returns deliveries. Contact support if you believe this is a mistake. - `P413` - Invalid return location reference. Make sure you are referencing a valid location warehouse ID from Origins  endpoint or valid address. - `P415` - You are not allowed to create delivery to home address. Contact support if you believe this is a mistake. - `P416` - You are not allowed to use COD payment for delivery to home address. Contact support if you believe this is a mistake. - `P417` - You are not allowed to use `q` parameter. It is forbidden for server partner accounts. - `P420` - Parcel not ready for cancel. You can cancel only new, undelivered, or parcels that are not returned or lost. Make sure parcel is in transit and try again. - `P421` - Invalid parcel weight. Make sure you are sending value between 0 and 10^6. - `P422` - Address not found. Try to call just with postal code and country. - `P423` - Nearby locker not found. - `P424` - Invalid region format. Please ensure the format includes a language code followed by a country code in ISO 3166-1 alpha-2 format, separated by a hyphen, e.g. el-GR, or region exists in context. - `P425` - Parcel not ready to declare a delivery partner return. Make sure parcel is not in any of the following states in order to declare a delivery partner return: 'canceled-return', 'lost', 'canceled', 'returned', 'expired-return'. - `P426` - Parcel not eligible to declare a delivery partner return. Parcel needs to use a delivery partner in order to declare a return. - `P430` - Parcel not ready for AnyAPM confirmation. Parcel is probably already confirmed or being delivered. Contact support if you believe this is a mistake. - `P440` - Ambiguous partner. Your account is linked to multiple partners and is unclear on whose behalf you want to perform this action. Send `X-PartnerID` header with ID of the partner you want to manage. You can get list of available Partner IDs from /entrusted-partners endpoint. - `P441` - Invalid X-PartnerID header. Value you provided for X-PartnerID header is either invalid or references partner you don't have access to. Make sure you are sending ID from /entrusted-partners endpoint. - `P442` - Invalid limit query parameter. The query limit for this API has been exceeded. Please reduce the size of your query (max allowed is 100). - `P460` - Parcel not eligible for external destination delivery. Delivery request destination.deliveryPartnerId is not set. - `P461` - Invalid street. Make sure the length is not more than 100 characters. - `P462` - Invalid city. Make sure the length is not more than 50 characters. - `P464` - Invalid postal code. Make sure the length is not more than 20 characters.  ### Description of codes for `403 Forbidden` responses  - `X403` - Account disabled. Your account had been disabled, contact support. - `P414` - Unauthorized parcel access. You are trying to access information to parcel/s that don't belong to you. Make sure you are requesting information for parcels you have access to. - `P465` - Partner doesn't have access for checking delivery addresses. - `P466` - You are not allowed to create a delivery request because your account has an overdue flag and you are not a vip partner.  ### Description of codes for `503 Service Unavailable` responses  | Code | Description | |---|---| | `P600` | Locker bridge communication failed. There has been some error when communicating with the locker bridge. Try again later or contact support. | | `P610` | Geolocation API failed. There has been some error when translating address to gps coordinates. Try again later or contact support. |
 *
 * The version of the OpenAPI document: 1.65
 * Generated by: https://openapi-generator.tech
 * Generator version: 7.13.0-SNAPSHOT
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace Boxnow\Api;

use GuzzleHttp\Client;
use GuzzleHttp\ClientInterface;
use GuzzleHttp\Exception\ConnectException;
use GuzzleHttp\Exception\RequestException;
use GuzzleHttp\Psr7\MultipartStream;
use GuzzleHttp\Psr7\Request;
use GuzzleHttp\RequestOptions;
use Boxnow\ApiException;
use Boxnow\Configuration;
use Boxnow\HeaderSelector;
use Boxnow\ObjectSerializer;

/**
 * DeliveryRequestsApi Class Doc Comment
 *
 * @category Class
 * @package  Boxnow
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class DeliveryRequestsApi
{
    /**
     * @var ClientInterface
     */
    protected $client;

    /**
     * @var Configuration
     */
    protected $config;

    /**
     * @var HeaderSelector
     */
    protected $headerSelector;

    /**
     * @var int Host index
     */
    protected $hostIndex;

    /** @var string[] $contentTypes **/
    public const contentTypes = [
        'apiV1DeliveryRequestsCheckAddressDeliveryPost' => [
            'application/json',
        ],
        'apiV1DeliveryRequestsCustomerReturnsPost' => [
            'application/json',
        ],
        'apiV1DeliveryRequestsFromCsvPost' => [
            'multipart/form-data',
        ],
        'apiV1DeliveryRequestsOrderNumberPut' => [
            'application/json',
        ],
        'apiV1DeliveryRequestsPost' => [
            'application/json',
        ],
        'apiV1SimpleDeliveryRequestsPost' => [
            'application/json',
        ],
        'apiV2DeliveryRequestsCheckAddressDeliveryPost' => [
            'application/json',
        ],
    ];

    /**
     * @param ClientInterface $client
     * @param Configuration   $config
     * @param HeaderSelector  $selector
     * @param int             $hostIndex (Optional) host index to select the list of hosts if defined in the OpenAPI spec
     */
    public function __construct(
        ?ClientInterface $client = null,
        ?Configuration $config = null,
        ?HeaderSelector $selector = null,
        int $hostIndex = 0
    ) {
        $this->client = $client ?: new Client();
        $this->config = $config ?: Configuration::getDefaultConfiguration();
        $this->headerSelector = $selector ?: new HeaderSelector();
        $this->hostIndex = $hostIndex;
    }

    /**
     * Set the host index
     *
     * @param int $hostIndex Host index (required)
     */
    public function setHostIndex($hostIndex): void
    {
        $this->hostIndex = $hostIndex;
    }

    /**
     * Get the host index
     *
     * @return int Host index
     */
    public function getHostIndex()
    {
        return $this->hostIndex;
    }

    /**
     * @return Configuration
     */
    public function getConfig()
    {
        return $this->config;
    }

    /**
     * Operation apiV1DeliveryRequestsCheckAddressDeliveryPost
     *
     * Check delivery for address is available using Google Maps Geocoding API
     *
     * @param  string|null $x_partner_id Partner ID you want to manage. You can list partners you are allowed to manage from /entrusted-partners endpoint. (optional)
     * @param  \Boxnow\Model\ApiV1DeliveryRequestsCheckAddressDeliveryPostRequest|null $api_v1_delivery_requests_check_address_delivery_post_request api_v1_delivery_requests_check_address_delivery_post_request (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['apiV1DeliveryRequestsCheckAddressDeliveryPost'] to see the possible values for this operation
     *
     * @throws \Boxnow\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return \Boxnow\Model\ApiV1DeliveryRequestsCheckAddressDeliveryPost200Response|\Boxnow\Model\ApiV1DeliveryRequestsCheckAddressDeliveryPost400Response|\Boxnow\Model\EP465|\Boxnow\Model\EP610
     */
    public function apiV1DeliveryRequestsCheckAddressDeliveryPost($x_partner_id = null, $api_v1_delivery_requests_check_address_delivery_post_request = null, string $contentType = self::contentTypes['apiV1DeliveryRequestsCheckAddressDeliveryPost'][0])
    {
        list($response) = $this->apiV1DeliveryRequestsCheckAddressDeliveryPostWithHttpInfo($x_partner_id, $api_v1_delivery_requests_check_address_delivery_post_request, $contentType);
        return $response;
    }

    /**
     * Operation apiV1DeliveryRequestsCheckAddressDeliveryPostWithHttpInfo
     *
     * Check delivery for address is available using Google Maps Geocoding API
     *
     * @param  string|null $x_partner_id Partner ID you want to manage. You can list partners you are allowed to manage from /entrusted-partners endpoint. (optional)
     * @param  \Boxnow\Model\ApiV1DeliveryRequestsCheckAddressDeliveryPostRequest|null $api_v1_delivery_requests_check_address_delivery_post_request (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['apiV1DeliveryRequestsCheckAddressDeliveryPost'] to see the possible values for this operation
     *
     * @throws \Boxnow\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return array of \Boxnow\Model\ApiV1DeliveryRequestsCheckAddressDeliveryPost200Response|\Boxnow\Model\ApiV1DeliveryRequestsCheckAddressDeliveryPost400Response|\Boxnow\Model\EP465|\Boxnow\Model\EP610, HTTP status code, HTTP response headers (array of strings)
     */
    public function apiV1DeliveryRequestsCheckAddressDeliveryPostWithHttpInfo($x_partner_id = null, $api_v1_delivery_requests_check_address_delivery_post_request = null, string $contentType = self::contentTypes['apiV1DeliveryRequestsCheckAddressDeliveryPost'][0])
    {
        $request = $this->apiV1DeliveryRequestsCheckAddressDeliveryPostRequest($x_partner_id, $api_v1_delivery_requests_check_address_delivery_post_request, $contentType);

        try {
            $options = $this->createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    (int) $e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null,
                    $e->getResponse() ? (string) $e->getResponse()->getBody() : null
                );
            } catch (ConnectException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    (int) $e->getCode(),
                    null,
                    null
                );
            }

            $statusCode = $response->getStatusCode();


            switch($statusCode) {
                case 200:
                    if ('\Boxnow\Model\ApiV1DeliveryRequestsCheckAddressDeliveryPost200Response' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ('\Boxnow\Model\ApiV1DeliveryRequestsCheckAddressDeliveryPost200Response' !== 'string') {
                            try {
                                $content = json_decode($content, false, 512, JSON_THROW_ON_ERROR);
                            } catch (\JsonException $exception) {
                                throw new ApiException(
                                    sprintf(
                                        'Error JSON decoding server response (%s)',
                                        $request->getUri()
                                    ),
                                    $statusCode,
                                    $response->getHeaders(),
                                    $content
                                );
                            }
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\Boxnow\Model\ApiV1DeliveryRequestsCheckAddressDeliveryPost200Response', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                case 400:
                    if ('\Boxnow\Model\ApiV1DeliveryRequestsCheckAddressDeliveryPost400Response' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ('\Boxnow\Model\ApiV1DeliveryRequestsCheckAddressDeliveryPost400Response' !== 'string') {
                            try {
                                $content = json_decode($content, false, 512, JSON_THROW_ON_ERROR);
                            } catch (\JsonException $exception) {
                                throw new ApiException(
                                    sprintf(
                                        'Error JSON decoding server response (%s)',
                                        $request->getUri()
                                    ),
                                    $statusCode,
                                    $response->getHeaders(),
                                    $content
                                );
                            }
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\Boxnow\Model\ApiV1DeliveryRequestsCheckAddressDeliveryPost400Response', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                case 403:
                    if ('\Boxnow\Model\EP465' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ('\Boxnow\Model\EP465' !== 'string') {
                            try {
                                $content = json_decode($content, false, 512, JSON_THROW_ON_ERROR);
                            } catch (\JsonException $exception) {
                                throw new ApiException(
                                    sprintf(
                                        'Error JSON decoding server response (%s)',
                                        $request->getUri()
                                    ),
                                    $statusCode,
                                    $response->getHeaders(),
                                    $content
                                );
                            }
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\Boxnow\Model\EP465', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                case 503:
                    if ('\Boxnow\Model\EP610' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ('\Boxnow\Model\EP610' !== 'string') {
                            try {
                                $content = json_decode($content, false, 512, JSON_THROW_ON_ERROR);
                            } catch (\JsonException $exception) {
                                throw new ApiException(
                                    sprintf(
                                        'Error JSON decoding server response (%s)',
                                        $request->getUri()
                                    ),
                                    $statusCode,
                                    $response->getHeaders(),
                                    $content
                                );
                            }
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\Boxnow\Model\EP610', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
            }

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(
                    sprintf(
                        '[%d] Error connecting to the API (%s)',
                        $statusCode,
                        (string) $request->getUri()
                    ),
                    $statusCode,
                    $response->getHeaders(),
                    (string) $response->getBody()
                );
            }

            $returnType = '\Boxnow\Model\ApiV1DeliveryRequestsCheckAddressDeliveryPost200Response';
            if ($returnType === '\SplFileObject') {
                $content = $response->getBody(); //stream goes to serializer
            } else {
                $content = (string) $response->getBody();
                if ($returnType !== 'string') {
                    try {
                        $content = json_decode($content, false, 512, JSON_THROW_ON_ERROR);
                    } catch (\JsonException $exception) {
                        throw new ApiException(
                            sprintf(
                                'Error JSON decoding server response (%s)',
                                $request->getUri()
                            ),
                            $statusCode,
                            $response->getHeaders(),
                            $content
                        );
                    }
                }
            }

            return [
                ObjectSerializer::deserialize($content, $returnType, []),
                $response->getStatusCode(),
                $response->getHeaders()
            ];

        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Boxnow\Model\ApiV1DeliveryRequestsCheckAddressDeliveryPost200Response',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 400:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Boxnow\Model\ApiV1DeliveryRequestsCheckAddressDeliveryPost400Response',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 403:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Boxnow\Model\EP465',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 503:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Boxnow\Model\EP610',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation apiV1DeliveryRequestsCheckAddressDeliveryPostAsync
     *
     * Check delivery for address is available using Google Maps Geocoding API
     *
     * @param  string|null $x_partner_id Partner ID you want to manage. You can list partners you are allowed to manage from /entrusted-partners endpoint. (optional)
     * @param  \Boxnow\Model\ApiV1DeliveryRequestsCheckAddressDeliveryPostRequest|null $api_v1_delivery_requests_check_address_delivery_post_request (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['apiV1DeliveryRequestsCheckAddressDeliveryPost'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function apiV1DeliveryRequestsCheckAddressDeliveryPostAsync($x_partner_id = null, $api_v1_delivery_requests_check_address_delivery_post_request = null, string $contentType = self::contentTypes['apiV1DeliveryRequestsCheckAddressDeliveryPost'][0])
    {
        return $this->apiV1DeliveryRequestsCheckAddressDeliveryPostAsyncWithHttpInfo($x_partner_id, $api_v1_delivery_requests_check_address_delivery_post_request, $contentType)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation apiV1DeliveryRequestsCheckAddressDeliveryPostAsyncWithHttpInfo
     *
     * Check delivery for address is available using Google Maps Geocoding API
     *
     * @param  string|null $x_partner_id Partner ID you want to manage. You can list partners you are allowed to manage from /entrusted-partners endpoint. (optional)
     * @param  \Boxnow\Model\ApiV1DeliveryRequestsCheckAddressDeliveryPostRequest|null $api_v1_delivery_requests_check_address_delivery_post_request (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['apiV1DeliveryRequestsCheckAddressDeliveryPost'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function apiV1DeliveryRequestsCheckAddressDeliveryPostAsyncWithHttpInfo($x_partner_id = null, $api_v1_delivery_requests_check_address_delivery_post_request = null, string $contentType = self::contentTypes['apiV1DeliveryRequestsCheckAddressDeliveryPost'][0])
    {
        $returnType = '\Boxnow\Model\ApiV1DeliveryRequestsCheckAddressDeliveryPost200Response';
        $request = $this->apiV1DeliveryRequestsCheckAddressDeliveryPostRequest($x_partner_id, $api_v1_delivery_requests_check_address_delivery_post_request, $contentType);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    if ($returnType === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ($returnType !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, $returnType, []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                },
                function ($exception) {
                    $response = $exception->getResponse();
                    $statusCode = $response->getStatusCode();
                    throw new ApiException(
                        sprintf(
                            '[%d] Error connecting to the API (%s)',
                            $statusCode,
                            $exception->getRequest()->getUri()
                        ),
                        $statusCode,
                        $response->getHeaders(),
                        (string) $response->getBody()
                    );
                }
            );
    }

    /**
     * Create request for operation 'apiV1DeliveryRequestsCheckAddressDeliveryPost'
     *
     * @param  string|null $x_partner_id Partner ID you want to manage. You can list partners you are allowed to manage from /entrusted-partners endpoint. (optional)
     * @param  \Boxnow\Model\ApiV1DeliveryRequestsCheckAddressDeliveryPostRequest|null $api_v1_delivery_requests_check_address_delivery_post_request (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['apiV1DeliveryRequestsCheckAddressDeliveryPost'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function apiV1DeliveryRequestsCheckAddressDeliveryPostRequest($x_partner_id = null, $api_v1_delivery_requests_check_address_delivery_post_request = null, string $contentType = self::contentTypes['apiV1DeliveryRequestsCheckAddressDeliveryPost'][0])
    {




        $resourcePath = '/api/v1/delivery-requests:checkAddressDelivery';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;


        // header params
        if ($x_partner_id !== null) {
            $headerParams['X-PartnerID'] = ObjectSerializer::toHeaderValue($x_partner_id);
        }



        $headers = $this->headerSelector->selectHeaders(
            ['application/json', ],
            $contentType,
            $multipart
        );

        // for model (json/xml)
        if (isset($api_v1_delivery_requests_check_address_delivery_post_request)) {
            if (stripos($headers['Content-Type'], 'application/json') !== false) {
                # if Content-Type contains "application/json", json_encode the body
                $httpBody = \GuzzleHttp\Utils::jsonEncode(ObjectSerializer::sanitizeForSerialization($api_v1_delivery_requests_check_address_delivery_post_request));
            } else {
                $httpBody = $api_v1_delivery_requests_check_address_delivery_post_request;
            }
        } elseif (count($formParams) > 0) {
            if ($multipart) {
                $multipartContents = [];
                foreach ($formParams as $formParamName => $formParamValue) {
                    $formParamValueItems = is_array($formParamValue) ? $formParamValue : [$formParamValue];
                    foreach ($formParamValueItems as $formParamValueItem) {
                        $multipartContents[] = [
                            'name' => $formParamName,
                            'contents' => $formParamValueItem
                        ];
                    }
                }
                // for HTTP post (form)
                $httpBody = new MultipartStream($multipartContents);

            } elseif (stripos($headers['Content-Type'], 'application/json') !== false) {
                # if Content-Type contains "application/json", json_encode the form parameters
                $httpBody = \GuzzleHttp\Utils::jsonEncode($formParams);
            } else {
                // for HTTP post (form)
                $httpBody = ObjectSerializer::buildQuery($formParams);
            }
        }

        // this endpoint requires Bearer (JWT) authentication (access token)
        if (!empty($this->config->getAccessToken())) {
            $headers['Authorization'] = 'Bearer ' . $this->config->getAccessToken();
        }

        $defaultHeaders = [];
        if ($this->config->getUserAgent()) {
            $defaultHeaders['User-Agent'] = $this->config->getUserAgent();
        }

        $headers = array_merge(
            $defaultHeaders,
            $headerParams,
            $headers
        );

        $operationHost = $this->config->getHost();
        $query = ObjectSerializer::buildQuery($queryParams);
        return new Request(
            'POST',
            $operationHost . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Operation apiV1DeliveryRequestsCustomerReturnsPost
     *
     * Create a request delivery of parcel that customer would like to return
     *
     * @param  string|null $x_partner_id Partner ID you want to manage. You can list partners you are allowed to manage from /entrusted-partners endpoint. (optional)
     * @param  \Boxnow\Model\ApiV1DeliveryRequestsCustomerReturnsPostRequest|null $api_v1_delivery_requests_customer_returns_post_request api_v1_delivery_requests_customer_returns_post_request (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['apiV1DeliveryRequestsCustomerReturnsPost'] to see the possible values for this operation
     *
     * @throws \Boxnow\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return \Boxnow\Model\ApiV1DeliveryRequestsCustomerReturnsPost200Response|\Boxnow\Model\ApiV1DeliveryRequestsCustomerReturnsPost400Response|\Boxnow\Model\ApiV1DeliveryRequestsCustomerReturnsPost403Response
     */
    public function apiV1DeliveryRequestsCustomerReturnsPost($x_partner_id = null, $api_v1_delivery_requests_customer_returns_post_request = null, string $contentType = self::contentTypes['apiV1DeliveryRequestsCustomerReturnsPost'][0])
    {
        list($response) = $this->apiV1DeliveryRequestsCustomerReturnsPostWithHttpInfo($x_partner_id, $api_v1_delivery_requests_customer_returns_post_request, $contentType);
        return $response;
    }

    /**
     * Operation apiV1DeliveryRequestsCustomerReturnsPostWithHttpInfo
     *
     * Create a request delivery of parcel that customer would like to return
     *
     * @param  string|null $x_partner_id Partner ID you want to manage. You can list partners you are allowed to manage from /entrusted-partners endpoint. (optional)
     * @param  \Boxnow\Model\ApiV1DeliveryRequestsCustomerReturnsPostRequest|null $api_v1_delivery_requests_customer_returns_post_request (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['apiV1DeliveryRequestsCustomerReturnsPost'] to see the possible values for this operation
     *
     * @throws \Boxnow\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return array of \Boxnow\Model\ApiV1DeliveryRequestsCustomerReturnsPost200Response|\Boxnow\Model\ApiV1DeliveryRequestsCustomerReturnsPost400Response|\Boxnow\Model\ApiV1DeliveryRequestsCustomerReturnsPost403Response, HTTP status code, HTTP response headers (array of strings)
     */
    public function apiV1DeliveryRequestsCustomerReturnsPostWithHttpInfo($x_partner_id = null, $api_v1_delivery_requests_customer_returns_post_request = null, string $contentType = self::contentTypes['apiV1DeliveryRequestsCustomerReturnsPost'][0])
    {
        $request = $this->apiV1DeliveryRequestsCustomerReturnsPostRequest($x_partner_id, $api_v1_delivery_requests_customer_returns_post_request, $contentType);

        try {
            $options = $this->createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    (int) $e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null,
                    $e->getResponse() ? (string) $e->getResponse()->getBody() : null
                );
            } catch (ConnectException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    (int) $e->getCode(),
                    null,
                    null
                );
            }

            $statusCode = $response->getStatusCode();


            switch($statusCode) {
                case 200:
                    if ('\Boxnow\Model\ApiV1DeliveryRequestsCustomerReturnsPost200Response' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ('\Boxnow\Model\ApiV1DeliveryRequestsCustomerReturnsPost200Response' !== 'string') {
                            try {
                                $content = json_decode($content, false, 512, JSON_THROW_ON_ERROR);
                            } catch (\JsonException $exception) {
                                throw new ApiException(
                                    sprintf(
                                        'Error JSON decoding server response (%s)',
                                        $request->getUri()
                                    ),
                                    $statusCode,
                                    $response->getHeaders(),
                                    $content
                                );
                            }
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\Boxnow\Model\ApiV1DeliveryRequestsCustomerReturnsPost200Response', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                case 400:
                    if ('\Boxnow\Model\ApiV1DeliveryRequestsCustomerReturnsPost400Response' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ('\Boxnow\Model\ApiV1DeliveryRequestsCustomerReturnsPost400Response' !== 'string') {
                            try {
                                $content = json_decode($content, false, 512, JSON_THROW_ON_ERROR);
                            } catch (\JsonException $exception) {
                                throw new ApiException(
                                    sprintf(
                                        'Error JSON decoding server response (%s)',
                                        $request->getUri()
                                    ),
                                    $statusCode,
                                    $response->getHeaders(),
                                    $content
                                );
                            }
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\Boxnow\Model\ApiV1DeliveryRequestsCustomerReturnsPost400Response', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                case 403:
                    if ('\Boxnow\Model\ApiV1DeliveryRequestsCustomerReturnsPost403Response' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ('\Boxnow\Model\ApiV1DeliveryRequestsCustomerReturnsPost403Response' !== 'string') {
                            try {
                                $content = json_decode($content, false, 512, JSON_THROW_ON_ERROR);
                            } catch (\JsonException $exception) {
                                throw new ApiException(
                                    sprintf(
                                        'Error JSON decoding server response (%s)',
                                        $request->getUri()
                                    ),
                                    $statusCode,
                                    $response->getHeaders(),
                                    $content
                                );
                            }
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\Boxnow\Model\ApiV1DeliveryRequestsCustomerReturnsPost403Response', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
            }

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(
                    sprintf(
                        '[%d] Error connecting to the API (%s)',
                        $statusCode,
                        (string) $request->getUri()
                    ),
                    $statusCode,
                    $response->getHeaders(),
                    (string) $response->getBody()
                );
            }

            $returnType = '\Boxnow\Model\ApiV1DeliveryRequestsCustomerReturnsPost200Response';
            if ($returnType === '\SplFileObject') {
                $content = $response->getBody(); //stream goes to serializer
            } else {
                $content = (string) $response->getBody();
                if ($returnType !== 'string') {
                    try {
                        $content = json_decode($content, false, 512, JSON_THROW_ON_ERROR);
                    } catch (\JsonException $exception) {
                        throw new ApiException(
                            sprintf(
                                'Error JSON decoding server response (%s)',
                                $request->getUri()
                            ),
                            $statusCode,
                            $response->getHeaders(),
                            $content
                        );
                    }
                }
            }

            return [
                ObjectSerializer::deserialize($content, $returnType, []),
                $response->getStatusCode(),
                $response->getHeaders()
            ];

        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Boxnow\Model\ApiV1DeliveryRequestsCustomerReturnsPost200Response',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 400:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Boxnow\Model\ApiV1DeliveryRequestsCustomerReturnsPost400Response',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 403:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Boxnow\Model\ApiV1DeliveryRequestsCustomerReturnsPost403Response',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation apiV1DeliveryRequestsCustomerReturnsPostAsync
     *
     * Create a request delivery of parcel that customer would like to return
     *
     * @param  string|null $x_partner_id Partner ID you want to manage. You can list partners you are allowed to manage from /entrusted-partners endpoint. (optional)
     * @param  \Boxnow\Model\ApiV1DeliveryRequestsCustomerReturnsPostRequest|null $api_v1_delivery_requests_customer_returns_post_request (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['apiV1DeliveryRequestsCustomerReturnsPost'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function apiV1DeliveryRequestsCustomerReturnsPostAsync($x_partner_id = null, $api_v1_delivery_requests_customer_returns_post_request = null, string $contentType = self::contentTypes['apiV1DeliveryRequestsCustomerReturnsPost'][0])
    {
        return $this->apiV1DeliveryRequestsCustomerReturnsPostAsyncWithHttpInfo($x_partner_id, $api_v1_delivery_requests_customer_returns_post_request, $contentType)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation apiV1DeliveryRequestsCustomerReturnsPostAsyncWithHttpInfo
     *
     * Create a request delivery of parcel that customer would like to return
     *
     * @param  string|null $x_partner_id Partner ID you want to manage. You can list partners you are allowed to manage from /entrusted-partners endpoint. (optional)
     * @param  \Boxnow\Model\ApiV1DeliveryRequestsCustomerReturnsPostRequest|null $api_v1_delivery_requests_customer_returns_post_request (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['apiV1DeliveryRequestsCustomerReturnsPost'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function apiV1DeliveryRequestsCustomerReturnsPostAsyncWithHttpInfo($x_partner_id = null, $api_v1_delivery_requests_customer_returns_post_request = null, string $contentType = self::contentTypes['apiV1DeliveryRequestsCustomerReturnsPost'][0])
    {
        $returnType = '\Boxnow\Model\ApiV1DeliveryRequestsCustomerReturnsPost200Response';
        $request = $this->apiV1DeliveryRequestsCustomerReturnsPostRequest($x_partner_id, $api_v1_delivery_requests_customer_returns_post_request, $contentType);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    if ($returnType === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ($returnType !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, $returnType, []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                },
                function ($exception) {
                    $response = $exception->getResponse();
                    $statusCode = $response->getStatusCode();
                    throw new ApiException(
                        sprintf(
                            '[%d] Error connecting to the API (%s)',
                            $statusCode,
                            $exception->getRequest()->getUri()
                        ),
                        $statusCode,
                        $response->getHeaders(),
                        (string) $response->getBody()
                    );
                }
            );
    }

    /**
     * Create request for operation 'apiV1DeliveryRequestsCustomerReturnsPost'
     *
     * @param  string|null $x_partner_id Partner ID you want to manage. You can list partners you are allowed to manage from /entrusted-partners endpoint. (optional)
     * @param  \Boxnow\Model\ApiV1DeliveryRequestsCustomerReturnsPostRequest|null $api_v1_delivery_requests_customer_returns_post_request (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['apiV1DeliveryRequestsCustomerReturnsPost'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function apiV1DeliveryRequestsCustomerReturnsPostRequest($x_partner_id = null, $api_v1_delivery_requests_customer_returns_post_request = null, string $contentType = self::contentTypes['apiV1DeliveryRequestsCustomerReturnsPost'][0])
    {




        $resourcePath = '/api/v1/delivery-requests:customerReturns';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;


        // header params
        if ($x_partner_id !== null) {
            $headerParams['X-PartnerID'] = ObjectSerializer::toHeaderValue($x_partner_id);
        }



        $headers = $this->headerSelector->selectHeaders(
            ['application/json', ],
            $contentType,
            $multipart
        );

        // for model (json/xml)
        if (isset($api_v1_delivery_requests_customer_returns_post_request)) {
            if (stripos($headers['Content-Type'], 'application/json') !== false) {
                # if Content-Type contains "application/json", json_encode the body
                $httpBody = \GuzzleHttp\Utils::jsonEncode(ObjectSerializer::sanitizeForSerialization($api_v1_delivery_requests_customer_returns_post_request));
            } else {
                $httpBody = $api_v1_delivery_requests_customer_returns_post_request;
            }
        } elseif (count($formParams) > 0) {
            if ($multipart) {
                $multipartContents = [];
                foreach ($formParams as $formParamName => $formParamValue) {
                    $formParamValueItems = is_array($formParamValue) ? $formParamValue : [$formParamValue];
                    foreach ($formParamValueItems as $formParamValueItem) {
                        $multipartContents[] = [
                            'name' => $formParamName,
                            'contents' => $formParamValueItem
                        ];
                    }
                }
                // for HTTP post (form)
                $httpBody = new MultipartStream($multipartContents);

            } elseif (stripos($headers['Content-Type'], 'application/json') !== false) {
                # if Content-Type contains "application/json", json_encode the form parameters
                $httpBody = \GuzzleHttp\Utils::jsonEncode($formParams);
            } else {
                // for HTTP post (form)
                $httpBody = ObjectSerializer::buildQuery($formParams);
            }
        }


        $defaultHeaders = [];
        if ($this->config->getUserAgent()) {
            $defaultHeaders['User-Agent'] = $this->config->getUserAgent();
        }

        $headers = array_merge(
            $defaultHeaders,
            $headerParams,
            $headers
        );

        $operationHost = $this->config->getHost();
        $query = ObjectSerializer::buildQuery($queryParams);
        return new Request(
            'POST',
            $operationHost . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Operation apiV1DeliveryRequestsFromCsvPost
     *
     * Create delivery requests
     *
     * @param  string $type type (required)
     * @param  \SplFileObject $file file (required)
     * @param  string|null $x_partner_id Partner ID you want to manage. You can list partners you are allowed to manage from /entrusted-partners endpoint. (optional)
     * @param  bool|null $allow_return If true, client will be able to return the goods the same way he received it. (optional, default to true)
     * @param  bool|null $show_recipient_information If true, recipient phone number and email will be printed on the label. (optional)
     * @param  string|null $delimiter The selected delimiter is used for parsing CSV file (optional, default to ',')
     * @param  string|null $origin_contact_email Email address of the sender (optional)
     * @param  string|null $origin_contact_number Phone number of the sender (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['apiV1DeliveryRequestsFromCsvPost'] to see the possible values for this operation
     *
     * @throws \Boxnow\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return \Boxnow\Model\ApiV1DeliveryRequestsFromCsvPost200ResponseInner[]|\Boxnow\Model\ApiV1DeliveryRequestsFromCsvPost400Response|\Boxnow\Model\ApiV1DeliveryRequestsPost403Response
     */
    public function apiV1DeliveryRequestsFromCsvPost($type, $file, $x_partner_id = null, $allow_return = true, $show_recipient_information = null, $delimiter = ',', $origin_contact_email = null, $origin_contact_number = null, string $contentType = self::contentTypes['apiV1DeliveryRequestsFromCsvPost'][0])
    {
        list($response) = $this->apiV1DeliveryRequestsFromCsvPostWithHttpInfo($type, $file, $x_partner_id, $allow_return, $show_recipient_information, $delimiter, $origin_contact_email, $origin_contact_number, $contentType);
        return $response;
    }

    /**
     * Operation apiV1DeliveryRequestsFromCsvPostWithHttpInfo
     *
     * Create delivery requests
     *
     * @param  string $type (required)
     * @param  \SplFileObject $file (required)
     * @param  string|null $x_partner_id Partner ID you want to manage. You can list partners you are allowed to manage from /entrusted-partners endpoint. (optional)
     * @param  bool|null $allow_return If true, client will be able to return the goods the same way he received it. (optional, default to true)
     * @param  bool|null $show_recipient_information If true, recipient phone number and email will be printed on the label. (optional)
     * @param  string|null $delimiter The selected delimiter is used for parsing CSV file (optional, default to ',')
     * @param  string|null $origin_contact_email Email address of the sender (optional)
     * @param  string|null $origin_contact_number Phone number of the sender (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['apiV1DeliveryRequestsFromCsvPost'] to see the possible values for this operation
     *
     * @throws \Boxnow\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return array of \Boxnow\Model\ApiV1DeliveryRequestsFromCsvPost200ResponseInner[]|\Boxnow\Model\ApiV1DeliveryRequestsFromCsvPost400Response|\Boxnow\Model\ApiV1DeliveryRequestsPost403Response, HTTP status code, HTTP response headers (array of strings)
     */
    public function apiV1DeliveryRequestsFromCsvPostWithHttpInfo($type, $file, $x_partner_id = null, $allow_return = true, $show_recipient_information = null, $delimiter = ',', $origin_contact_email = null, $origin_contact_number = null, string $contentType = self::contentTypes['apiV1DeliveryRequestsFromCsvPost'][0])
    {
        $request = $this->apiV1DeliveryRequestsFromCsvPostRequest($type, $file, $x_partner_id, $allow_return, $show_recipient_information, $delimiter, $origin_contact_email, $origin_contact_number, $contentType);

        try {
            $options = $this->createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    (int) $e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null,
                    $e->getResponse() ? (string) $e->getResponse()->getBody() : null
                );
            } catch (ConnectException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    (int) $e->getCode(),
                    null,
                    null
                );
            }

            $statusCode = $response->getStatusCode();


            switch($statusCode) {
                case 200:
                    if ('\Boxnow\Model\ApiV1DeliveryRequestsFromCsvPost200ResponseInner[]' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ('\Boxnow\Model\ApiV1DeliveryRequestsFromCsvPost200ResponseInner[]' !== 'string') {
                            try {
                                $content = json_decode($content, false, 512, JSON_THROW_ON_ERROR);
                            } catch (\JsonException $exception) {
                                throw new ApiException(
                                    sprintf(
                                        'Error JSON decoding server response (%s)',
                                        $request->getUri()
                                    ),
                                    $statusCode,
                                    $response->getHeaders(),
                                    $content
                                );
                            }
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\Boxnow\Model\ApiV1DeliveryRequestsFromCsvPost200ResponseInner[]', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                case 400:
                    if ('\Boxnow\Model\ApiV1DeliveryRequestsFromCsvPost400Response' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ('\Boxnow\Model\ApiV1DeliveryRequestsFromCsvPost400Response' !== 'string') {
                            try {
                                $content = json_decode($content, false, 512, JSON_THROW_ON_ERROR);
                            } catch (\JsonException $exception) {
                                throw new ApiException(
                                    sprintf(
                                        'Error JSON decoding server response (%s)',
                                        $request->getUri()
                                    ),
                                    $statusCode,
                                    $response->getHeaders(),
                                    $content
                                );
                            }
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\Boxnow\Model\ApiV1DeliveryRequestsFromCsvPost400Response', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                case 403:
                    if ('\Boxnow\Model\ApiV1DeliveryRequestsPost403Response' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ('\Boxnow\Model\ApiV1DeliveryRequestsPost403Response' !== 'string') {
                            try {
                                $content = json_decode($content, false, 512, JSON_THROW_ON_ERROR);
                            } catch (\JsonException $exception) {
                                throw new ApiException(
                                    sprintf(
                                        'Error JSON decoding server response (%s)',
                                        $request->getUri()
                                    ),
                                    $statusCode,
                                    $response->getHeaders(),
                                    $content
                                );
                            }
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\Boxnow\Model\ApiV1DeliveryRequestsPost403Response', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
            }

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(
                    sprintf(
                        '[%d] Error connecting to the API (%s)',
                        $statusCode,
                        (string) $request->getUri()
                    ),
                    $statusCode,
                    $response->getHeaders(),
                    (string) $response->getBody()
                );
            }

            $returnType = '\Boxnow\Model\ApiV1DeliveryRequestsFromCsvPost200ResponseInner[]';
            if ($returnType === '\SplFileObject') {
                $content = $response->getBody(); //stream goes to serializer
            } else {
                $content = (string) $response->getBody();
                if ($returnType !== 'string') {
                    try {
                        $content = json_decode($content, false, 512, JSON_THROW_ON_ERROR);
                    } catch (\JsonException $exception) {
                        throw new ApiException(
                            sprintf(
                                'Error JSON decoding server response (%s)',
                                $request->getUri()
                            ),
                            $statusCode,
                            $response->getHeaders(),
                            $content
                        );
                    }
                }
            }

            return [
                ObjectSerializer::deserialize($content, $returnType, []),
                $response->getStatusCode(),
                $response->getHeaders()
            ];

        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Boxnow\Model\ApiV1DeliveryRequestsFromCsvPost200ResponseInner[]',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 400:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Boxnow\Model\ApiV1DeliveryRequestsFromCsvPost400Response',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 403:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Boxnow\Model\ApiV1DeliveryRequestsPost403Response',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation apiV1DeliveryRequestsFromCsvPostAsync
     *
     * Create delivery requests
     *
     * @param  string $type (required)
     * @param  \SplFileObject $file (required)
     * @param  string|null $x_partner_id Partner ID you want to manage. You can list partners you are allowed to manage from /entrusted-partners endpoint. (optional)
     * @param  bool|null $allow_return If true, client will be able to return the goods the same way he received it. (optional, default to true)
     * @param  bool|null $show_recipient_information If true, recipient phone number and email will be printed on the label. (optional)
     * @param  string|null $delimiter The selected delimiter is used for parsing CSV file (optional, default to ',')
     * @param  string|null $origin_contact_email Email address of the sender (optional)
     * @param  string|null $origin_contact_number Phone number of the sender (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['apiV1DeliveryRequestsFromCsvPost'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function apiV1DeliveryRequestsFromCsvPostAsync($type, $file, $x_partner_id = null, $allow_return = true, $show_recipient_information = null, $delimiter = ',', $origin_contact_email = null, $origin_contact_number = null, string $contentType = self::contentTypes['apiV1DeliveryRequestsFromCsvPost'][0])
    {
        return $this->apiV1DeliveryRequestsFromCsvPostAsyncWithHttpInfo($type, $file, $x_partner_id, $allow_return, $show_recipient_information, $delimiter, $origin_contact_email, $origin_contact_number, $contentType)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation apiV1DeliveryRequestsFromCsvPostAsyncWithHttpInfo
     *
     * Create delivery requests
     *
     * @param  string $type (required)
     * @param  \SplFileObject $file (required)
     * @param  string|null $x_partner_id Partner ID you want to manage. You can list partners you are allowed to manage from /entrusted-partners endpoint. (optional)
     * @param  bool|null $allow_return If true, client will be able to return the goods the same way he received it. (optional, default to true)
     * @param  bool|null $show_recipient_information If true, recipient phone number and email will be printed on the label. (optional)
     * @param  string|null $delimiter The selected delimiter is used for parsing CSV file (optional, default to ',')
     * @param  string|null $origin_contact_email Email address of the sender (optional)
     * @param  string|null $origin_contact_number Phone number of the sender (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['apiV1DeliveryRequestsFromCsvPost'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function apiV1DeliveryRequestsFromCsvPostAsyncWithHttpInfo($type, $file, $x_partner_id = null, $allow_return = true, $show_recipient_information = null, $delimiter = ',', $origin_contact_email = null, $origin_contact_number = null, string $contentType = self::contentTypes['apiV1DeliveryRequestsFromCsvPost'][0])
    {
        $returnType = '\Boxnow\Model\ApiV1DeliveryRequestsFromCsvPost200ResponseInner[]';
        $request = $this->apiV1DeliveryRequestsFromCsvPostRequest($type, $file, $x_partner_id, $allow_return, $show_recipient_information, $delimiter, $origin_contact_email, $origin_contact_number, $contentType);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    if ($returnType === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ($returnType !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, $returnType, []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                },
                function ($exception) {
                    $response = $exception->getResponse();
                    $statusCode = $response->getStatusCode();
                    throw new ApiException(
                        sprintf(
                            '[%d] Error connecting to the API (%s)',
                            $statusCode,
                            $exception->getRequest()->getUri()
                        ),
                        $statusCode,
                        $response->getHeaders(),
                        (string) $response->getBody()
                    );
                }
            );
    }

    /**
     * Create request for operation 'apiV1DeliveryRequestsFromCsvPost'
     *
     * @param  string $type (required)
     * @param  \SplFileObject $file (required)
     * @param  string|null $x_partner_id Partner ID you want to manage. You can list partners you are allowed to manage from /entrusted-partners endpoint. (optional)
     * @param  bool|null $allow_return If true, client will be able to return the goods the same way he received it. (optional, default to true)
     * @param  bool|null $show_recipient_information If true, recipient phone number and email will be printed on the label. (optional)
     * @param  string|null $delimiter The selected delimiter is used for parsing CSV file (optional, default to ',')
     * @param  string|null $origin_contact_email Email address of the sender (optional)
     * @param  string|null $origin_contact_number Phone number of the sender (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['apiV1DeliveryRequestsFromCsvPost'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function apiV1DeliveryRequestsFromCsvPostRequest($type, $file, $x_partner_id = null, $allow_return = true, $show_recipient_information = null, $delimiter = ',', $origin_contact_email = null, $origin_contact_number = null, string $contentType = self::contentTypes['apiV1DeliveryRequestsFromCsvPost'][0])
    {

        // verify the required parameter 'type' is set
        if ($type === null || (is_array($type) && count($type) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $type when calling apiV1DeliveryRequestsFromCsvPost'
            );
        }

        // verify the required parameter 'file' is set
        if ($file === null || (is_array($file) && count($file) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $file when calling apiV1DeliveryRequestsFromCsvPost'
            );
        }








        $resourcePath = '/api/v1/delivery-requests:fromCsv';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;


        // header params
        if ($x_partner_id !== null) {
            $headerParams['X-PartnerID'] = ObjectSerializer::toHeaderValue($x_partner_id);
        }


        // form params
        if ($type !== null) {
            $formParams = array_merge($formParams, ObjectSerializer::toFormValue('type', $type));
        }
        // form params
        if ($file !== null) {
            $multipart = true;
            $formParams['file'] = [];
            $paramFiles = is_array($file) ? $file : [$file];
            foreach ($paramFiles as $paramFile) {
                $formParams['file'][] = \GuzzleHttp\Psr7\Utils::tryFopen(
                    ObjectSerializer::toFormValue('file', $paramFile)['file'],
                    'rb'
                );
            }
        }
        // form params
        if ($allow_return !== null) {
            $formParams = array_merge($formParams, ObjectSerializer::toFormValue('allowReturn', $allow_return));
        }
        // form params
        if ($show_recipient_information !== null) {
            $formParams = array_merge($formParams, ObjectSerializer::toFormValue('showRecipientInformation', $show_recipient_information));
        }
        // form params
        if ($delimiter !== null) {
            $formParams = array_merge($formParams, ObjectSerializer::toFormValue('delimiter', $delimiter));
        }
        // form params
        if ($origin_contact_email !== null) {
            $formParams = array_merge($formParams, ObjectSerializer::toFormValue('originContactEmail', $origin_contact_email));
        }
        // form params
        if ($origin_contact_number !== null) {
            $formParams = array_merge($formParams, ObjectSerializer::toFormValue('originContactNumber', $origin_contact_number));
        }

        $multipart = true;
        $headers = $this->headerSelector->selectHeaders(
            ['application/json', ],
            $contentType,
            $multipart
        );

        // for model (json/xml)
        if (count($formParams) > 0) {
            if ($multipart) {
                $multipartContents = [];
                foreach ($formParams as $formParamName => $formParamValue) {
                    $formParamValueItems = is_array($formParamValue) ? $formParamValue : [$formParamValue];
                    foreach ($formParamValueItems as $formParamValueItem) {
                        $multipartContents[] = [
                            'name' => $formParamName,
                            'contents' => $formParamValueItem
                        ];
                    }
                }
                // for HTTP post (form)
                $httpBody = new MultipartStream($multipartContents);

            } elseif (stripos($headers['Content-Type'], 'application/json') !== false) {
                # if Content-Type contains "application/json", json_encode the form parameters
                $httpBody = \GuzzleHttp\Utils::jsonEncode($formParams);
            } else {
                // for HTTP post (form)
                $httpBody = ObjectSerializer::buildQuery($formParams);
            }
        }


        $defaultHeaders = [];
        if ($this->config->getUserAgent()) {
            $defaultHeaders['User-Agent'] = $this->config->getUserAgent();
        }

        $headers = array_merge(
            $defaultHeaders,
            $headerParams,
            $headers
        );

        $operationHost = $this->config->getHost();
        $query = ObjectSerializer::buildQuery($queryParams);
        return new Request(
            'POST',
            $operationHost . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Operation apiV1DeliveryRequestsOrderNumberPut
     *
     * Update a created delivery request
     *
     * @param  string $order_number Unique order number in Your system. The same you use to create the delivery request. (required)
     * @param  string|null $x_partner_id Partner ID you want to manage. You can list partners you are allowed to manage from /entrusted-partners endpoint. (optional)
     * @param  \Boxnow\Model\ApiV1DeliveryRequestsOrderNumberPutRequest|null $api_v1_delivery_requests_order_number_put_request api_v1_delivery_requests_order_number_put_request (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['apiV1DeliveryRequestsOrderNumberPut'] to see the possible values for this operation
     *
     * @throws \Boxnow\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return \Boxnow\Model\ApiV1DeliveryRequestsOrderNumberPut200Response|\Boxnow\Model\ApiV1AuthSessionsPost400Response|\Boxnow\Model\ApiV1AuthSessionsPost403Response
     */
    public function apiV1DeliveryRequestsOrderNumberPut($order_number, $x_partner_id = null, $api_v1_delivery_requests_order_number_put_request = null, string $contentType = self::contentTypes['apiV1DeliveryRequestsOrderNumberPut'][0])
    {
        list($response) = $this->apiV1DeliveryRequestsOrderNumberPutWithHttpInfo($order_number, $x_partner_id, $api_v1_delivery_requests_order_number_put_request, $contentType);
        return $response;
    }

    /**
     * Operation apiV1DeliveryRequestsOrderNumberPutWithHttpInfo
     *
     * Update a created delivery request
     *
     * @param  string $order_number Unique order number in Your system. The same you use to create the delivery request. (required)
     * @param  string|null $x_partner_id Partner ID you want to manage. You can list partners you are allowed to manage from /entrusted-partners endpoint. (optional)
     * @param  \Boxnow\Model\ApiV1DeliveryRequestsOrderNumberPutRequest|null $api_v1_delivery_requests_order_number_put_request (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['apiV1DeliveryRequestsOrderNumberPut'] to see the possible values for this operation
     *
     * @throws \Boxnow\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return array of \Boxnow\Model\ApiV1DeliveryRequestsOrderNumberPut200Response|\Boxnow\Model\ApiV1AuthSessionsPost400Response|\Boxnow\Model\ApiV1AuthSessionsPost403Response, HTTP status code, HTTP response headers (array of strings)
     */
    public function apiV1DeliveryRequestsOrderNumberPutWithHttpInfo($order_number, $x_partner_id = null, $api_v1_delivery_requests_order_number_put_request = null, string $contentType = self::contentTypes['apiV1DeliveryRequestsOrderNumberPut'][0])
    {
        $request = $this->apiV1DeliveryRequestsOrderNumberPutRequest($order_number, $x_partner_id, $api_v1_delivery_requests_order_number_put_request, $contentType);

        try {
            $options = $this->createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    (int) $e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null,
                    $e->getResponse() ? (string) $e->getResponse()->getBody() : null
                );
            } catch (ConnectException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    (int) $e->getCode(),
                    null,
                    null
                );
            }

            $statusCode = $response->getStatusCode();


            switch($statusCode) {
                case 200:
                    if ('\Boxnow\Model\ApiV1DeliveryRequestsOrderNumberPut200Response' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ('\Boxnow\Model\ApiV1DeliveryRequestsOrderNumberPut200Response' !== 'string') {
                            try {
                                $content = json_decode($content, false, 512, JSON_THROW_ON_ERROR);
                            } catch (\JsonException $exception) {
                                throw new ApiException(
                                    sprintf(
                                        'Error JSON decoding server response (%s)',
                                        $request->getUri()
                                    ),
                                    $statusCode,
                                    $response->getHeaders(),
                                    $content
                                );
                            }
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\Boxnow\Model\ApiV1DeliveryRequestsOrderNumberPut200Response', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                case 400:
                    if ('\Boxnow\Model\ApiV1AuthSessionsPost400Response' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ('\Boxnow\Model\ApiV1AuthSessionsPost400Response' !== 'string') {
                            try {
                                $content = json_decode($content, false, 512, JSON_THROW_ON_ERROR);
                            } catch (\JsonException $exception) {
                                throw new ApiException(
                                    sprintf(
                                        'Error JSON decoding server response (%s)',
                                        $request->getUri()
                                    ),
                                    $statusCode,
                                    $response->getHeaders(),
                                    $content
                                );
                            }
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\Boxnow\Model\ApiV1AuthSessionsPost400Response', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                case 403:
                    if ('\Boxnow\Model\ApiV1AuthSessionsPost403Response' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ('\Boxnow\Model\ApiV1AuthSessionsPost403Response' !== 'string') {
                            try {
                                $content = json_decode($content, false, 512, JSON_THROW_ON_ERROR);
                            } catch (\JsonException $exception) {
                                throw new ApiException(
                                    sprintf(
                                        'Error JSON decoding server response (%s)',
                                        $request->getUri()
                                    ),
                                    $statusCode,
                                    $response->getHeaders(),
                                    $content
                                );
                            }
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\Boxnow\Model\ApiV1AuthSessionsPost403Response', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
            }

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(
                    sprintf(
                        '[%d] Error connecting to the API (%s)',
                        $statusCode,
                        (string) $request->getUri()
                    ),
                    $statusCode,
                    $response->getHeaders(),
                    (string) $response->getBody()
                );
            }

            $returnType = '\Boxnow\Model\ApiV1DeliveryRequestsOrderNumberPut200Response';
            if ($returnType === '\SplFileObject') {
                $content = $response->getBody(); //stream goes to serializer
            } else {
                $content = (string) $response->getBody();
                if ($returnType !== 'string') {
                    try {
                        $content = json_decode($content, false, 512, JSON_THROW_ON_ERROR);
                    } catch (\JsonException $exception) {
                        throw new ApiException(
                            sprintf(
                                'Error JSON decoding server response (%s)',
                                $request->getUri()
                            ),
                            $statusCode,
                            $response->getHeaders(),
                            $content
                        );
                    }
                }
            }

            return [
                ObjectSerializer::deserialize($content, $returnType, []),
                $response->getStatusCode(),
                $response->getHeaders()
            ];

        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Boxnow\Model\ApiV1DeliveryRequestsOrderNumberPut200Response',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 400:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Boxnow\Model\ApiV1AuthSessionsPost400Response',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 403:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Boxnow\Model\ApiV1AuthSessionsPost403Response',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation apiV1DeliveryRequestsOrderNumberPutAsync
     *
     * Update a created delivery request
     *
     * @param  string $order_number Unique order number in Your system. The same you use to create the delivery request. (required)
     * @param  string|null $x_partner_id Partner ID you want to manage. You can list partners you are allowed to manage from /entrusted-partners endpoint. (optional)
     * @param  \Boxnow\Model\ApiV1DeliveryRequestsOrderNumberPutRequest|null $api_v1_delivery_requests_order_number_put_request (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['apiV1DeliveryRequestsOrderNumberPut'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function apiV1DeliveryRequestsOrderNumberPutAsync($order_number, $x_partner_id = null, $api_v1_delivery_requests_order_number_put_request = null, string $contentType = self::contentTypes['apiV1DeliveryRequestsOrderNumberPut'][0])
    {
        return $this->apiV1DeliveryRequestsOrderNumberPutAsyncWithHttpInfo($order_number, $x_partner_id, $api_v1_delivery_requests_order_number_put_request, $contentType)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation apiV1DeliveryRequestsOrderNumberPutAsyncWithHttpInfo
     *
     * Update a created delivery request
     *
     * @param  string $order_number Unique order number in Your system. The same you use to create the delivery request. (required)
     * @param  string|null $x_partner_id Partner ID you want to manage. You can list partners you are allowed to manage from /entrusted-partners endpoint. (optional)
     * @param  \Boxnow\Model\ApiV1DeliveryRequestsOrderNumberPutRequest|null $api_v1_delivery_requests_order_number_put_request (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['apiV1DeliveryRequestsOrderNumberPut'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function apiV1DeliveryRequestsOrderNumberPutAsyncWithHttpInfo($order_number, $x_partner_id = null, $api_v1_delivery_requests_order_number_put_request = null, string $contentType = self::contentTypes['apiV1DeliveryRequestsOrderNumberPut'][0])
    {
        $returnType = '\Boxnow\Model\ApiV1DeliveryRequestsOrderNumberPut200Response';
        $request = $this->apiV1DeliveryRequestsOrderNumberPutRequest($order_number, $x_partner_id, $api_v1_delivery_requests_order_number_put_request, $contentType);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    if ($returnType === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ($returnType !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, $returnType, []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                },
                function ($exception) {
                    $response = $exception->getResponse();
                    $statusCode = $response->getStatusCode();
                    throw new ApiException(
                        sprintf(
                            '[%d] Error connecting to the API (%s)',
                            $statusCode,
                            $exception->getRequest()->getUri()
                        ),
                        $statusCode,
                        $response->getHeaders(),
                        (string) $response->getBody()
                    );
                }
            );
    }

    /**
     * Create request for operation 'apiV1DeliveryRequestsOrderNumberPut'
     *
     * @param  string $order_number Unique order number in Your system. The same you use to create the delivery request. (required)
     * @param  string|null $x_partner_id Partner ID you want to manage. You can list partners you are allowed to manage from /entrusted-partners endpoint. (optional)
     * @param  \Boxnow\Model\ApiV1DeliveryRequestsOrderNumberPutRequest|null $api_v1_delivery_requests_order_number_put_request (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['apiV1DeliveryRequestsOrderNumberPut'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function apiV1DeliveryRequestsOrderNumberPutRequest($order_number, $x_partner_id = null, $api_v1_delivery_requests_order_number_put_request = null, string $contentType = self::contentTypes['apiV1DeliveryRequestsOrderNumberPut'][0])
    {

        // verify the required parameter 'order_number' is set
        if ($order_number === null || (is_array($order_number) && count($order_number) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $order_number when calling apiV1DeliveryRequestsOrderNumberPut'
            );
        }




        $resourcePath = '/api/v1/delivery-requests/{orderNumber}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;


        // header params
        if ($x_partner_id !== null) {
            $headerParams['X-PartnerID'] = ObjectSerializer::toHeaderValue($x_partner_id);
        }

        // path params
        if ($order_number !== null) {
            $resourcePath = str_replace(
                '{' . 'orderNumber' . '}',
                ObjectSerializer::toPathValue($order_number),
                $resourcePath
            );
        }


        $headers = $this->headerSelector->selectHeaders(
            ['application/json', ],
            $contentType,
            $multipart
        );

        // for model (json/xml)
        if (isset($api_v1_delivery_requests_order_number_put_request)) {
            if (stripos($headers['Content-Type'], 'application/json') !== false) {
                # if Content-Type contains "application/json", json_encode the body
                $httpBody = \GuzzleHttp\Utils::jsonEncode(ObjectSerializer::sanitizeForSerialization($api_v1_delivery_requests_order_number_put_request));
            } else {
                $httpBody = $api_v1_delivery_requests_order_number_put_request;
            }
        } elseif (count($formParams) > 0) {
            if ($multipart) {
                $multipartContents = [];
                foreach ($formParams as $formParamName => $formParamValue) {
                    $formParamValueItems = is_array($formParamValue) ? $formParamValue : [$formParamValue];
                    foreach ($formParamValueItems as $formParamValueItem) {
                        $multipartContents[] = [
                            'name' => $formParamName,
                            'contents' => $formParamValueItem
                        ];
                    }
                }
                // for HTTP post (form)
                $httpBody = new MultipartStream($multipartContents);

            } elseif (stripos($headers['Content-Type'], 'application/json') !== false) {
                # if Content-Type contains "application/json", json_encode the form parameters
                $httpBody = \GuzzleHttp\Utils::jsonEncode($formParams);
            } else {
                // for HTTP post (form)
                $httpBody = ObjectSerializer::buildQuery($formParams);
            }
        }

        // this endpoint requires Bearer (JWT) authentication (access token)
        if (!empty($this->config->getAccessToken())) {
            $headers['Authorization'] = 'Bearer ' . $this->config->getAccessToken();
        }

        $defaultHeaders = [];
        if ($this->config->getUserAgent()) {
            $defaultHeaders['User-Agent'] = $this->config->getUserAgent();
        }

        $headers = array_merge(
            $defaultHeaders,
            $headerParams,
            $headers
        );

        $operationHost = $this->config->getHost();
        $query = ObjectSerializer::buildQuery($queryParams);
        return new Request(
            'PUT',
            $operationHost . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Operation apiV1DeliveryRequestsPost
     *
     * Create a delivery request for your order
     *
     * @param  string|null $x_partner_id Partner ID you want to manage. You can list partners you are allowed to manage from /entrusted-partners endpoint. (optional)
     * @param  \Boxnow\Model\DeliveryRequest|null $delivery_request delivery_request (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['apiV1DeliveryRequestsPost'] to see the possible values for this operation
     *
     * @throws \Boxnow\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return \Boxnow\Model\ApiV1DeliveryRequestsPost200Response|\Boxnow\Model\ApiV1DeliveryRequestsPost400Response|\Boxnow\Model\ApiV1DeliveryRequestsPost403Response
     */
    public function apiV1DeliveryRequestsPost($x_partner_id = null, $delivery_request = null, string $contentType = self::contentTypes['apiV1DeliveryRequestsPost'][0])
    {
        list($response) = $this->apiV1DeliveryRequestsPostWithHttpInfo($x_partner_id, $delivery_request, $contentType);
        return $response;
    }

    /**
     * Operation apiV1DeliveryRequestsPostWithHttpInfo
     *
     * Create a delivery request for your order
     *
     * @param  string|null $x_partner_id Partner ID you want to manage. You can list partners you are allowed to manage from /entrusted-partners endpoint. (optional)
     * @param  \Boxnow\Model\DeliveryRequest|null $delivery_request (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['apiV1DeliveryRequestsPost'] to see the possible values for this operation
     *
     * @throws \Boxnow\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return array of \Boxnow\Model\ApiV1DeliveryRequestsPost200Response|\Boxnow\Model\ApiV1DeliveryRequestsPost400Response|\Boxnow\Model\ApiV1DeliveryRequestsPost403Response, HTTP status code, HTTP response headers (array of strings)
     */
    public function apiV1DeliveryRequestsPostWithHttpInfo($x_partner_id = null, $delivery_request = null, string $contentType = self::contentTypes['apiV1DeliveryRequestsPost'][0])
    {
        $request = $this->apiV1DeliveryRequestsPostRequest($x_partner_id, $delivery_request, $contentType);

        try {
            $options = $this->createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    (int) $e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null,
                    $e->getResponse() ? (string) $e->getResponse()->getBody() : null
                );
            } catch (ConnectException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    (int) $e->getCode(),
                    null,
                    null
                );
            }

            $statusCode = $response->getStatusCode();


            switch($statusCode) {
                case 200:
                    if ('\Boxnow\Model\ApiV1DeliveryRequestsPost200Response' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ('\Boxnow\Model\ApiV1DeliveryRequestsPost200Response' !== 'string') {
                            try {
                                $content = json_decode($content, false, 512, JSON_THROW_ON_ERROR);
                            } catch (\JsonException $exception) {
                                throw new ApiException(
                                    sprintf(
                                        'Error JSON decoding server response (%s)',
                                        $request->getUri()
                                    ),
                                    $statusCode,
                                    $response->getHeaders(),
                                    $content
                                );
                            }
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\Boxnow\Model\ApiV1DeliveryRequestsPost200Response', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                case 400:
                    if ('\Boxnow\Model\ApiV1DeliveryRequestsPost400Response' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ('\Boxnow\Model\ApiV1DeliveryRequestsPost400Response' !== 'string') {
                            try {
                                $content = json_decode($content, false, 512, JSON_THROW_ON_ERROR);
                            } catch (\JsonException $exception) {
                                throw new ApiException(
                                    sprintf(
                                        'Error JSON decoding server response (%s)',
                                        $request->getUri()
                                    ),
                                    $statusCode,
                                    $response->getHeaders(),
                                    $content
                                );
                            }
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\Boxnow\Model\ApiV1DeliveryRequestsPost400Response', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                case 403:
                    if ('\Boxnow\Model\ApiV1DeliveryRequestsPost403Response' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ('\Boxnow\Model\ApiV1DeliveryRequestsPost403Response' !== 'string') {
                            try {
                                $content = json_decode($content, false, 512, JSON_THROW_ON_ERROR);
                            } catch (\JsonException $exception) {
                                throw new ApiException(
                                    sprintf(
                                        'Error JSON decoding server response (%s)',
                                        $request->getUri()
                                    ),
                                    $statusCode,
                                    $response->getHeaders(),
                                    $content
                                );
                            }
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\Boxnow\Model\ApiV1DeliveryRequestsPost403Response', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
            }

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(
                    sprintf(
                        '[%d] Error connecting to the API (%s)',
                        $statusCode,
                        (string) $request->getUri()
                    ),
                    $statusCode,
                    $response->getHeaders(),
                    (string) $response->getBody()
                );
            }

            $returnType = '\Boxnow\Model\ApiV1DeliveryRequestsPost200Response';
            if ($returnType === '\SplFileObject') {
                $content = $response->getBody(); //stream goes to serializer
            } else {
                $content = (string) $response->getBody();
                if ($returnType !== 'string') {
                    try {
                        $content = json_decode($content, false, 512, JSON_THROW_ON_ERROR);
                    } catch (\JsonException $exception) {
                        throw new ApiException(
                            sprintf(
                                'Error JSON decoding server response (%s)',
                                $request->getUri()
                            ),
                            $statusCode,
                            $response->getHeaders(),
                            $content
                        );
                    }
                }
            }

            return [
                ObjectSerializer::deserialize($content, $returnType, []),
                $response->getStatusCode(),
                $response->getHeaders()
            ];

        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Boxnow\Model\ApiV1DeliveryRequestsPost200Response',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 400:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Boxnow\Model\ApiV1DeliveryRequestsPost400Response',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 403:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Boxnow\Model\ApiV1DeliveryRequestsPost403Response',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation apiV1DeliveryRequestsPostAsync
     *
     * Create a delivery request for your order
     *
     * @param  string|null $x_partner_id Partner ID you want to manage. You can list partners you are allowed to manage from /entrusted-partners endpoint. (optional)
     * @param  \Boxnow\Model\DeliveryRequest|null $delivery_request (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['apiV1DeliveryRequestsPost'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function apiV1DeliveryRequestsPostAsync($x_partner_id = null, $delivery_request = null, string $contentType = self::contentTypes['apiV1DeliveryRequestsPost'][0])
    {
        return $this->apiV1DeliveryRequestsPostAsyncWithHttpInfo($x_partner_id, $delivery_request, $contentType)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation apiV1DeliveryRequestsPostAsyncWithHttpInfo
     *
     * Create a delivery request for your order
     *
     * @param  string|null $x_partner_id Partner ID you want to manage. You can list partners you are allowed to manage from /entrusted-partners endpoint. (optional)
     * @param  \Boxnow\Model\DeliveryRequest|null $delivery_request (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['apiV1DeliveryRequestsPost'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function apiV1DeliveryRequestsPostAsyncWithHttpInfo($x_partner_id = null, $delivery_request = null, string $contentType = self::contentTypes['apiV1DeliveryRequestsPost'][0])
    {
        $returnType = '\Boxnow\Model\ApiV1DeliveryRequestsPost200Response';
        $request = $this->apiV1DeliveryRequestsPostRequest($x_partner_id, $delivery_request, $contentType);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    if ($returnType === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ($returnType !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, $returnType, []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                },
                function ($exception) {
                    $response = $exception->getResponse();
                    $statusCode = $response->getStatusCode();
                    throw new ApiException(
                        sprintf(
                            '[%d] Error connecting to the API (%s)',
                            $statusCode,
                            $exception->getRequest()->getUri()
                        ),
                        $statusCode,
                        $response->getHeaders(),
                        (string) $response->getBody()
                    );
                }
            );
    }

    /**
     * Create request for operation 'apiV1DeliveryRequestsPost'
     *
     * @param  string|null $x_partner_id Partner ID you want to manage. You can list partners you are allowed to manage from /entrusted-partners endpoint. (optional)
     * @param  \Boxnow\Model\DeliveryRequest|null $delivery_request (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['apiV1DeliveryRequestsPost'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function apiV1DeliveryRequestsPostRequest($x_partner_id = null, $delivery_request = null, string $contentType = self::contentTypes['apiV1DeliveryRequestsPost'][0])
    {




        $resourcePath = '/api/v1/delivery-requests';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;


        // header params
        if ($x_partner_id !== null) {
            $headerParams['X-PartnerID'] = ObjectSerializer::toHeaderValue($x_partner_id);
        }



        $headers = $this->headerSelector->selectHeaders(
            ['application/json', ],
            $contentType,
            $multipart
        );

        // for model (json/xml)
        if (isset($delivery_request)) {
            if (stripos($headers['Content-Type'], 'application/json') !== false) {
                # if Content-Type contains "application/json", json_encode the body
                $httpBody = \GuzzleHttp\Utils::jsonEncode(ObjectSerializer::sanitizeForSerialization($delivery_request));
            } else {
                $httpBody = $delivery_request;
            }
        } elseif (count($formParams) > 0) {
            if ($multipart) {
                $multipartContents = [];
                foreach ($formParams as $formParamName => $formParamValue) {
                    $formParamValueItems = is_array($formParamValue) ? $formParamValue : [$formParamValue];
                    foreach ($formParamValueItems as $formParamValueItem) {
                        $multipartContents[] = [
                            'name' => $formParamName,
                            'contents' => $formParamValueItem
                        ];
                    }
                }
                // for HTTP post (form)
                $httpBody = new MultipartStream($multipartContents);

            } elseif (stripos($headers['Content-Type'], 'application/json') !== false) {
                # if Content-Type contains "application/json", json_encode the form parameters
                $httpBody = \GuzzleHttp\Utils::jsonEncode($formParams);
            } else {
                // for HTTP post (form)
                $httpBody = ObjectSerializer::buildQuery($formParams);
            }
        }

        // this endpoint requires Bearer (JWT) authentication (access token)
        if (!empty($this->config->getAccessToken())) {
            $headers['Authorization'] = 'Bearer ' . $this->config->getAccessToken();
        }

        $defaultHeaders = [];
        if ($this->config->getUserAgent()) {
            $defaultHeaders['User-Agent'] = $this->config->getUserAgent();
        }

        $headers = array_merge(
            $defaultHeaders,
            $headerParams,
            $headers
        );

        $operationHost = $this->config->getHost();
        $query = ObjectSerializer::buildQuery($queryParams);
        return new Request(
            'POST',
            $operationHost . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Operation apiV1SimpleDeliveryRequestsPost
     *
     * Create delivery request for order with minimal data
     *
     * @param  string|null $x_partner_id Partner ID you want to manage. You can list partners you are allowed to manage from /entrusted-partners endpoint. (optional)
     * @param  \Boxnow\Model\ApiV1SimpleDeliveryRequestsPostRequest|null $api_v1_simple_delivery_requests_post_request api_v1_simple_delivery_requests_post_request (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['apiV1SimpleDeliveryRequestsPost'] to see the possible values for this operation
     *
     * @throws \Boxnow\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return \Boxnow\Model\ApiV1SimpleDeliveryRequestsPost200Response|\Boxnow\Model\ApiV1SimpleDeliveryRequestsPost400Response|\Boxnow\Model\ApiV1DeliveryRequestsPost403Response|\Boxnow\Model\EP610
     */
    public function apiV1SimpleDeliveryRequestsPost($x_partner_id = null, $api_v1_simple_delivery_requests_post_request = null, string $contentType = self::contentTypes['apiV1SimpleDeliveryRequestsPost'][0])
    {
        list($response) = $this->apiV1SimpleDeliveryRequestsPostWithHttpInfo($x_partner_id, $api_v1_simple_delivery_requests_post_request, $contentType);
        return $response;
    }

    /**
     * Operation apiV1SimpleDeliveryRequestsPostWithHttpInfo
     *
     * Create delivery request for order with minimal data
     *
     * @param  string|null $x_partner_id Partner ID you want to manage. You can list partners you are allowed to manage from /entrusted-partners endpoint. (optional)
     * @param  \Boxnow\Model\ApiV1SimpleDeliveryRequestsPostRequest|null $api_v1_simple_delivery_requests_post_request (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['apiV1SimpleDeliveryRequestsPost'] to see the possible values for this operation
     *
     * @throws \Boxnow\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return array of \Boxnow\Model\ApiV1SimpleDeliveryRequestsPost200Response|\Boxnow\Model\ApiV1SimpleDeliveryRequestsPost400Response|\Boxnow\Model\ApiV1DeliveryRequestsPost403Response|\Boxnow\Model\EP610, HTTP status code, HTTP response headers (array of strings)
     */
    public function apiV1SimpleDeliveryRequestsPostWithHttpInfo($x_partner_id = null, $api_v1_simple_delivery_requests_post_request = null, string $contentType = self::contentTypes['apiV1SimpleDeliveryRequestsPost'][0])
    {
        $request = $this->apiV1SimpleDeliveryRequestsPostRequest($x_partner_id, $api_v1_simple_delivery_requests_post_request, $contentType);

        try {
            $options = $this->createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    (int) $e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null,
                    $e->getResponse() ? (string) $e->getResponse()->getBody() : null
                );
            } catch (ConnectException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    (int) $e->getCode(),
                    null,
                    null
                );
            }

            $statusCode = $response->getStatusCode();


            switch($statusCode) {
                case 200:
                    if ('\Boxnow\Model\ApiV1SimpleDeliveryRequestsPost200Response' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ('\Boxnow\Model\ApiV1SimpleDeliveryRequestsPost200Response' !== 'string') {
                            try {
                                $content = json_decode($content, false, 512, JSON_THROW_ON_ERROR);
                            } catch (\JsonException $exception) {
                                throw new ApiException(
                                    sprintf(
                                        'Error JSON decoding server response (%s)',
                                        $request->getUri()
                                    ),
                                    $statusCode,
                                    $response->getHeaders(),
                                    $content
                                );
                            }
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\Boxnow\Model\ApiV1SimpleDeliveryRequestsPost200Response', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                case 400:
                    if ('\Boxnow\Model\ApiV1SimpleDeliveryRequestsPost400Response' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ('\Boxnow\Model\ApiV1SimpleDeliveryRequestsPost400Response' !== 'string') {
                            try {
                                $content = json_decode($content, false, 512, JSON_THROW_ON_ERROR);
                            } catch (\JsonException $exception) {
                                throw new ApiException(
                                    sprintf(
                                        'Error JSON decoding server response (%s)',
                                        $request->getUri()
                                    ),
                                    $statusCode,
                                    $response->getHeaders(),
                                    $content
                                );
                            }
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\Boxnow\Model\ApiV1SimpleDeliveryRequestsPost400Response', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                case 403:
                    if ('\Boxnow\Model\ApiV1DeliveryRequestsPost403Response' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ('\Boxnow\Model\ApiV1DeliveryRequestsPost403Response' !== 'string') {
                            try {
                                $content = json_decode($content, false, 512, JSON_THROW_ON_ERROR);
                            } catch (\JsonException $exception) {
                                throw new ApiException(
                                    sprintf(
                                        'Error JSON decoding server response (%s)',
                                        $request->getUri()
                                    ),
                                    $statusCode,
                                    $response->getHeaders(),
                                    $content
                                );
                            }
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\Boxnow\Model\ApiV1DeliveryRequestsPost403Response', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                case 503:
                    if ('\Boxnow\Model\EP610' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ('\Boxnow\Model\EP610' !== 'string') {
                            try {
                                $content = json_decode($content, false, 512, JSON_THROW_ON_ERROR);
                            } catch (\JsonException $exception) {
                                throw new ApiException(
                                    sprintf(
                                        'Error JSON decoding server response (%s)',
                                        $request->getUri()
                                    ),
                                    $statusCode,
                                    $response->getHeaders(),
                                    $content
                                );
                            }
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\Boxnow\Model\EP610', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
            }

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(
                    sprintf(
                        '[%d] Error connecting to the API (%s)',
                        $statusCode,
                        (string) $request->getUri()
                    ),
                    $statusCode,
                    $response->getHeaders(),
                    (string) $response->getBody()
                );
            }

            $returnType = '\Boxnow\Model\ApiV1SimpleDeliveryRequestsPost200Response';
            if ($returnType === '\SplFileObject') {
                $content = $response->getBody(); //stream goes to serializer
            } else {
                $content = (string) $response->getBody();
                if ($returnType !== 'string') {
                    try {
                        $content = json_decode($content, false, 512, JSON_THROW_ON_ERROR);
                    } catch (\JsonException $exception) {
                        throw new ApiException(
                            sprintf(
                                'Error JSON decoding server response (%s)',
                                $request->getUri()
                            ),
                            $statusCode,
                            $response->getHeaders(),
                            $content
                        );
                    }
                }
            }

            return [
                ObjectSerializer::deserialize($content, $returnType, []),
                $response->getStatusCode(),
                $response->getHeaders()
            ];

        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Boxnow\Model\ApiV1SimpleDeliveryRequestsPost200Response',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 400:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Boxnow\Model\ApiV1SimpleDeliveryRequestsPost400Response',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 403:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Boxnow\Model\ApiV1DeliveryRequestsPost403Response',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 503:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Boxnow\Model\EP610',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation apiV1SimpleDeliveryRequestsPostAsync
     *
     * Create delivery request for order with minimal data
     *
     * @param  string|null $x_partner_id Partner ID you want to manage. You can list partners you are allowed to manage from /entrusted-partners endpoint. (optional)
     * @param  \Boxnow\Model\ApiV1SimpleDeliveryRequestsPostRequest|null $api_v1_simple_delivery_requests_post_request (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['apiV1SimpleDeliveryRequestsPost'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function apiV1SimpleDeliveryRequestsPostAsync($x_partner_id = null, $api_v1_simple_delivery_requests_post_request = null, string $contentType = self::contentTypes['apiV1SimpleDeliveryRequestsPost'][0])
    {
        return $this->apiV1SimpleDeliveryRequestsPostAsyncWithHttpInfo($x_partner_id, $api_v1_simple_delivery_requests_post_request, $contentType)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation apiV1SimpleDeliveryRequestsPostAsyncWithHttpInfo
     *
     * Create delivery request for order with minimal data
     *
     * @param  string|null $x_partner_id Partner ID you want to manage. You can list partners you are allowed to manage from /entrusted-partners endpoint. (optional)
     * @param  \Boxnow\Model\ApiV1SimpleDeliveryRequestsPostRequest|null $api_v1_simple_delivery_requests_post_request (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['apiV1SimpleDeliveryRequestsPost'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function apiV1SimpleDeliveryRequestsPostAsyncWithHttpInfo($x_partner_id = null, $api_v1_simple_delivery_requests_post_request = null, string $contentType = self::contentTypes['apiV1SimpleDeliveryRequestsPost'][0])
    {
        $returnType = '\Boxnow\Model\ApiV1SimpleDeliveryRequestsPost200Response';
        $request = $this->apiV1SimpleDeliveryRequestsPostRequest($x_partner_id, $api_v1_simple_delivery_requests_post_request, $contentType);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    if ($returnType === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ($returnType !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, $returnType, []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                },
                function ($exception) {
                    $response = $exception->getResponse();
                    $statusCode = $response->getStatusCode();
                    throw new ApiException(
                        sprintf(
                            '[%d] Error connecting to the API (%s)',
                            $statusCode,
                            $exception->getRequest()->getUri()
                        ),
                        $statusCode,
                        $response->getHeaders(),
                        (string) $response->getBody()
                    );
                }
            );
    }

    /**
     * Create request for operation 'apiV1SimpleDeliveryRequestsPost'
     *
     * @param  string|null $x_partner_id Partner ID you want to manage. You can list partners you are allowed to manage from /entrusted-partners endpoint. (optional)
     * @param  \Boxnow\Model\ApiV1SimpleDeliveryRequestsPostRequest|null $api_v1_simple_delivery_requests_post_request (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['apiV1SimpleDeliveryRequestsPost'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function apiV1SimpleDeliveryRequestsPostRequest($x_partner_id = null, $api_v1_simple_delivery_requests_post_request = null, string $contentType = self::contentTypes['apiV1SimpleDeliveryRequestsPost'][0])
    {




        $resourcePath = '/api/v1/simple-delivery-requests';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;


        // header params
        if ($x_partner_id !== null) {
            $headerParams['X-PartnerID'] = ObjectSerializer::toHeaderValue($x_partner_id);
        }



        $headers = $this->headerSelector->selectHeaders(
            ['application/json', ],
            $contentType,
            $multipart
        );

        // for model (json/xml)
        if (isset($api_v1_simple_delivery_requests_post_request)) {
            if (stripos($headers['Content-Type'], 'application/json') !== false) {
                # if Content-Type contains "application/json", json_encode the body
                $httpBody = \GuzzleHttp\Utils::jsonEncode(ObjectSerializer::sanitizeForSerialization($api_v1_simple_delivery_requests_post_request));
            } else {
                $httpBody = $api_v1_simple_delivery_requests_post_request;
            }
        } elseif (count($formParams) > 0) {
            if ($multipart) {
                $multipartContents = [];
                foreach ($formParams as $formParamName => $formParamValue) {
                    $formParamValueItems = is_array($formParamValue) ? $formParamValue : [$formParamValue];
                    foreach ($formParamValueItems as $formParamValueItem) {
                        $multipartContents[] = [
                            'name' => $formParamName,
                            'contents' => $formParamValueItem
                        ];
                    }
                }
                // for HTTP post (form)
                $httpBody = new MultipartStream($multipartContents);

            } elseif (stripos($headers['Content-Type'], 'application/json') !== false) {
                # if Content-Type contains "application/json", json_encode the form parameters
                $httpBody = \GuzzleHttp\Utils::jsonEncode($formParams);
            } else {
                // for HTTP post (form)
                $httpBody = ObjectSerializer::buildQuery($formParams);
            }
        }


        $defaultHeaders = [];
        if ($this->config->getUserAgent()) {
            $defaultHeaders['User-Agent'] = $this->config->getUserAgent();
        }

        $headers = array_merge(
            $defaultHeaders,
            $headerParams,
            $headers
        );

        $operationHost = $this->config->getHost();
        $query = ObjectSerializer::buildQuery($queryParams);
        return new Request(
            'POST',
            $operationHost . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Operation apiV2DeliveryRequestsCheckAddressDeliveryPost
     *
     * Check delivery for address is available using ArcGIS Geocoding API
     *
     * @param  string|null $x_partner_id Partner ID you want to manage. You can list partners you are allowed to manage from /entrusted-partners endpoint. (optional)
     * @param  \Boxnow\Model\ApiV2DeliveryRequestsCheckAddressDeliveryPostRequest|null $api_v2_delivery_requests_check_address_delivery_post_request api_v2_delivery_requests_check_address_delivery_post_request (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['apiV2DeliveryRequestsCheckAddressDeliveryPost'] to see the possible values for this operation
     *
     * @throws \Boxnow\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return \Boxnow\Model\ApiV1DeliveryRequestsCheckAddressDeliveryPost200Response|\Boxnow\Model\ApiV2DeliveryRequestsCheckAddressDeliveryPost400Response|\Boxnow\Model\EP465|\Boxnow\Model\EP610
     */
    public function apiV2DeliveryRequestsCheckAddressDeliveryPost($x_partner_id = null, $api_v2_delivery_requests_check_address_delivery_post_request = null, string $contentType = self::contentTypes['apiV2DeliveryRequestsCheckAddressDeliveryPost'][0])
    {
        list($response) = $this->apiV2DeliveryRequestsCheckAddressDeliveryPostWithHttpInfo($x_partner_id, $api_v2_delivery_requests_check_address_delivery_post_request, $contentType);
        return $response;
    }

    /**
     * Operation apiV2DeliveryRequestsCheckAddressDeliveryPostWithHttpInfo
     *
     * Check delivery for address is available using ArcGIS Geocoding API
     *
     * @param  string|null $x_partner_id Partner ID you want to manage. You can list partners you are allowed to manage from /entrusted-partners endpoint. (optional)
     * @param  \Boxnow\Model\ApiV2DeliveryRequestsCheckAddressDeliveryPostRequest|null $api_v2_delivery_requests_check_address_delivery_post_request (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['apiV2DeliveryRequestsCheckAddressDeliveryPost'] to see the possible values for this operation
     *
     * @throws \Boxnow\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return array of \Boxnow\Model\ApiV1DeliveryRequestsCheckAddressDeliveryPost200Response|\Boxnow\Model\ApiV2DeliveryRequestsCheckAddressDeliveryPost400Response|\Boxnow\Model\EP465|\Boxnow\Model\EP610, HTTP status code, HTTP response headers (array of strings)
     */
    public function apiV2DeliveryRequestsCheckAddressDeliveryPostWithHttpInfo($x_partner_id = null, $api_v2_delivery_requests_check_address_delivery_post_request = null, string $contentType = self::contentTypes['apiV2DeliveryRequestsCheckAddressDeliveryPost'][0])
    {
        $request = $this->apiV2DeliveryRequestsCheckAddressDeliveryPostRequest($x_partner_id, $api_v2_delivery_requests_check_address_delivery_post_request, $contentType);

        try {
            $options = $this->createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    (int) $e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null,
                    $e->getResponse() ? (string) $e->getResponse()->getBody() : null
                );
            } catch (ConnectException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    (int) $e->getCode(),
                    null,
                    null
                );
            }

            $statusCode = $response->getStatusCode();


            switch($statusCode) {
                case 200:
                    if ('\Boxnow\Model\ApiV1DeliveryRequestsCheckAddressDeliveryPost200Response' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ('\Boxnow\Model\ApiV1DeliveryRequestsCheckAddressDeliveryPost200Response' !== 'string') {
                            try {
                                $content = json_decode($content, false, 512, JSON_THROW_ON_ERROR);
                            } catch (\JsonException $exception) {
                                throw new ApiException(
                                    sprintf(
                                        'Error JSON decoding server response (%s)',
                                        $request->getUri()
                                    ),
                                    $statusCode,
                                    $response->getHeaders(),
                                    $content
                                );
                            }
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\Boxnow\Model\ApiV1DeliveryRequestsCheckAddressDeliveryPost200Response', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                case 400:
                    if ('\Boxnow\Model\ApiV2DeliveryRequestsCheckAddressDeliveryPost400Response' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ('\Boxnow\Model\ApiV2DeliveryRequestsCheckAddressDeliveryPost400Response' !== 'string') {
                            try {
                                $content = json_decode($content, false, 512, JSON_THROW_ON_ERROR);
                            } catch (\JsonException $exception) {
                                throw new ApiException(
                                    sprintf(
                                        'Error JSON decoding server response (%s)',
                                        $request->getUri()
                                    ),
                                    $statusCode,
                                    $response->getHeaders(),
                                    $content
                                );
                            }
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\Boxnow\Model\ApiV2DeliveryRequestsCheckAddressDeliveryPost400Response', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                case 403:
                    if ('\Boxnow\Model\EP465' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ('\Boxnow\Model\EP465' !== 'string') {
                            try {
                                $content = json_decode($content, false, 512, JSON_THROW_ON_ERROR);
                            } catch (\JsonException $exception) {
                                throw new ApiException(
                                    sprintf(
                                        'Error JSON decoding server response (%s)',
                                        $request->getUri()
                                    ),
                                    $statusCode,
                                    $response->getHeaders(),
                                    $content
                                );
                            }
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\Boxnow\Model\EP465', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                case 503:
                    if ('\Boxnow\Model\EP610' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ('\Boxnow\Model\EP610' !== 'string') {
                            try {
                                $content = json_decode($content, false, 512, JSON_THROW_ON_ERROR);
                            } catch (\JsonException $exception) {
                                throw new ApiException(
                                    sprintf(
                                        'Error JSON decoding server response (%s)',
                                        $request->getUri()
                                    ),
                                    $statusCode,
                                    $response->getHeaders(),
                                    $content
                                );
                            }
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\Boxnow\Model\EP610', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
            }

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(
                    sprintf(
                        '[%d] Error connecting to the API (%s)',
                        $statusCode,
                        (string) $request->getUri()
                    ),
                    $statusCode,
                    $response->getHeaders(),
                    (string) $response->getBody()
                );
            }

            $returnType = '\Boxnow\Model\ApiV1DeliveryRequestsCheckAddressDeliveryPost200Response';
            if ($returnType === '\SplFileObject') {
                $content = $response->getBody(); //stream goes to serializer
            } else {
                $content = (string) $response->getBody();
                if ($returnType !== 'string') {
                    try {
                        $content = json_decode($content, false, 512, JSON_THROW_ON_ERROR);
                    } catch (\JsonException $exception) {
                        throw new ApiException(
                            sprintf(
                                'Error JSON decoding server response (%s)',
                                $request->getUri()
                            ),
                            $statusCode,
                            $response->getHeaders(),
                            $content
                        );
                    }
                }
            }

            return [
                ObjectSerializer::deserialize($content, $returnType, []),
                $response->getStatusCode(),
                $response->getHeaders()
            ];

        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Boxnow\Model\ApiV1DeliveryRequestsCheckAddressDeliveryPost200Response',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 400:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Boxnow\Model\ApiV2DeliveryRequestsCheckAddressDeliveryPost400Response',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 403:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Boxnow\Model\EP465',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 503:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Boxnow\Model\EP610',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation apiV2DeliveryRequestsCheckAddressDeliveryPostAsync
     *
     * Check delivery for address is available using ArcGIS Geocoding API
     *
     * @param  string|null $x_partner_id Partner ID you want to manage. You can list partners you are allowed to manage from /entrusted-partners endpoint. (optional)
     * @param  \Boxnow\Model\ApiV2DeliveryRequestsCheckAddressDeliveryPostRequest|null $api_v2_delivery_requests_check_address_delivery_post_request (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['apiV2DeliveryRequestsCheckAddressDeliveryPost'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function apiV2DeliveryRequestsCheckAddressDeliveryPostAsync($x_partner_id = null, $api_v2_delivery_requests_check_address_delivery_post_request = null, string $contentType = self::contentTypes['apiV2DeliveryRequestsCheckAddressDeliveryPost'][0])
    {
        return $this->apiV2DeliveryRequestsCheckAddressDeliveryPostAsyncWithHttpInfo($x_partner_id, $api_v2_delivery_requests_check_address_delivery_post_request, $contentType)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation apiV2DeliveryRequestsCheckAddressDeliveryPostAsyncWithHttpInfo
     *
     * Check delivery for address is available using ArcGIS Geocoding API
     *
     * @param  string|null $x_partner_id Partner ID you want to manage. You can list partners you are allowed to manage from /entrusted-partners endpoint. (optional)
     * @param  \Boxnow\Model\ApiV2DeliveryRequestsCheckAddressDeliveryPostRequest|null $api_v2_delivery_requests_check_address_delivery_post_request (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['apiV2DeliveryRequestsCheckAddressDeliveryPost'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function apiV2DeliveryRequestsCheckAddressDeliveryPostAsyncWithHttpInfo($x_partner_id = null, $api_v2_delivery_requests_check_address_delivery_post_request = null, string $contentType = self::contentTypes['apiV2DeliveryRequestsCheckAddressDeliveryPost'][0])
    {
        $returnType = '\Boxnow\Model\ApiV1DeliveryRequestsCheckAddressDeliveryPost200Response';
        $request = $this->apiV2DeliveryRequestsCheckAddressDeliveryPostRequest($x_partner_id, $api_v2_delivery_requests_check_address_delivery_post_request, $contentType);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    if ($returnType === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ($returnType !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, $returnType, []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                },
                function ($exception) {
                    $response = $exception->getResponse();
                    $statusCode = $response->getStatusCode();
                    throw new ApiException(
                        sprintf(
                            '[%d] Error connecting to the API (%s)',
                            $statusCode,
                            $exception->getRequest()->getUri()
                        ),
                        $statusCode,
                        $response->getHeaders(),
                        (string) $response->getBody()
                    );
                }
            );
    }

    /**
     * Create request for operation 'apiV2DeliveryRequestsCheckAddressDeliveryPost'
     *
     * @param  string|null $x_partner_id Partner ID you want to manage. You can list partners you are allowed to manage from /entrusted-partners endpoint. (optional)
     * @param  \Boxnow\Model\ApiV2DeliveryRequestsCheckAddressDeliveryPostRequest|null $api_v2_delivery_requests_check_address_delivery_post_request (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['apiV2DeliveryRequestsCheckAddressDeliveryPost'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function apiV2DeliveryRequestsCheckAddressDeliveryPostRequest($x_partner_id = null, $api_v2_delivery_requests_check_address_delivery_post_request = null, string $contentType = self::contentTypes['apiV2DeliveryRequestsCheckAddressDeliveryPost'][0])
    {




        $resourcePath = '/api/v2/delivery-requests:checkAddressDelivery';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;


        // header params
        if ($x_partner_id !== null) {
            $headerParams['X-PartnerID'] = ObjectSerializer::toHeaderValue($x_partner_id);
        }



        $headers = $this->headerSelector->selectHeaders(
            ['application/json', ],
            $contentType,
            $multipart
        );

        // for model (json/xml)
        if (isset($api_v2_delivery_requests_check_address_delivery_post_request)) {
            if (stripos($headers['Content-Type'], 'application/json') !== false) {
                # if Content-Type contains "application/json", json_encode the body
                $httpBody = \GuzzleHttp\Utils::jsonEncode(ObjectSerializer::sanitizeForSerialization($api_v2_delivery_requests_check_address_delivery_post_request));
            } else {
                $httpBody = $api_v2_delivery_requests_check_address_delivery_post_request;
            }
        } elseif (count($formParams) > 0) {
            if ($multipart) {
                $multipartContents = [];
                foreach ($formParams as $formParamName => $formParamValue) {
                    $formParamValueItems = is_array($formParamValue) ? $formParamValue : [$formParamValue];
                    foreach ($formParamValueItems as $formParamValueItem) {
                        $multipartContents[] = [
                            'name' => $formParamName,
                            'contents' => $formParamValueItem
                        ];
                    }
                }
                // for HTTP post (form)
                $httpBody = new MultipartStream($multipartContents);

            } elseif (stripos($headers['Content-Type'], 'application/json') !== false) {
                # if Content-Type contains "application/json", json_encode the form parameters
                $httpBody = \GuzzleHttp\Utils::jsonEncode($formParams);
            } else {
                // for HTTP post (form)
                $httpBody = ObjectSerializer::buildQuery($formParams);
            }
        }

        // this endpoint requires Bearer (JWT) authentication (access token)
        if (!empty($this->config->getAccessToken())) {
            $headers['Authorization'] = 'Bearer ' . $this->config->getAccessToken();
        }

        $defaultHeaders = [];
        if ($this->config->getUserAgent()) {
            $defaultHeaders['User-Agent'] = $this->config->getUserAgent();
        }

        $headers = array_merge(
            $defaultHeaders,
            $headerParams,
            $headers
        );

        $operationHost = $this->config->getHost();
        $query = ObjectSerializer::buildQuery($queryParams);
        return new Request(
            'POST',
            $operationHost . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Create http client option
     *
     * @throws \RuntimeException on file opening failure
     * @return array of http client options
     */
    protected function createHttpClientOption()
    {
        $options = [];
        if ($this->config->getDebug()) {
            $options[RequestOptions::DEBUG] = fopen($this->config->getDebugFile(), 'a');
            if (!$options[RequestOptions::DEBUG]) {
                throw new \RuntimeException('Failed to open the debug file: ' . $this->config->getDebugFile());
            }
        }

        return $options;
    }
}
