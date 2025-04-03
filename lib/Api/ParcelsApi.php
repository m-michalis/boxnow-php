<?php
/**
 * ParcelsApi
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
 * ParcelsApi Class Doc Comment
 *
 * @category Class
 * @package  Boxnow
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class ParcelsApi
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
        'apiV1ParcelsGet' => [
            'application/json',
        ],
        'apiV1ParcelsIdCancelPost' => [
            'application/json',
        ],
        'apiV1ParcelsIdConfirmAnyapmDeliveryPost' => [
            'application/json',
        ],
        'apiV1ParcelsIdDeclareDeliveryPartnerReturnPost' => [
            'application/json',
        ],
        'uiV1ParcelsCsvGet' => [
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
     * Operation apiV1ParcelsGet
     *
     * List parcel info related to your delivery requests
     *
     * @param  string|null $q Search in: Order ID, Parcel ID, Customer name, Customer email, Customer phone number. Allowed only for partner portal users. (optional)
     * @param  float|null $limit Page size (optional, default to 50)
     * @param  string|null $order_number Order number in your system. Return only parcels related to this order number. (optional)
     * @param  string|null $parcel_id ID of the parcel in our system. Return only parcel/s with this ID. (optional)
     * @param  \Boxnow\Model\PaymentState|null $payment_state payment_state (optional)
     * @param  \Boxnow\Model\PaymentMode|null $payment_mode payment_mode (optional)
     * @param  \Boxnow\Model\ParcelState[]|null $state state (optional)
     * @param  string|null $created_from UNIX timestamp in milliseconds (optional)
     * @param  string|null $created_to UNIX timestamp in milliseconds (optional)
     * @param  string|null $page_token Set this token to return records for given page. You get this for each response. (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['apiV1ParcelsGet'] to see the possible values for this operation
     *
     * @throws \Boxnow\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return \Boxnow\Model\ApiV1ParcelsGet200Response|\Boxnow\Model\ApiV1AuthSessionsPost400Response|\Boxnow\Model\ApiV1AuthSessionsPost403Response
     */
    public function apiV1ParcelsGet($q = null, $limit = 50, $order_number = null, $parcel_id = null, $payment_state = null, $payment_mode = null, $state = null, $created_from = null, $created_to = null, $page_token = null, string $contentType = self::contentTypes['apiV1ParcelsGet'][0])
    {
        list($response) = $this->apiV1ParcelsGetWithHttpInfo($q, $limit, $order_number, $parcel_id, $payment_state, $payment_mode, $state, $created_from, $created_to, $page_token, $contentType);
        return $response;
    }

    /**
     * Operation apiV1ParcelsGetWithHttpInfo
     *
     * List parcel info related to your delivery requests
     *
     * @param  string|null $q Search in: Order ID, Parcel ID, Customer name, Customer email, Customer phone number. Allowed only for partner portal users. (optional)
     * @param  float|null $limit Page size (optional, default to 50)
     * @param  string|null $order_number Order number in your system. Return only parcels related to this order number. (optional)
     * @param  string|null $parcel_id ID of the parcel in our system. Return only parcel/s with this ID. (optional)
     * @param  \Boxnow\Model\PaymentState|null $payment_state (optional)
     * @param  \Boxnow\Model\PaymentMode|null $payment_mode (optional)
     * @param  \Boxnow\Model\ParcelState[]|null $state (optional)
     * @param  string|null $created_from UNIX timestamp in milliseconds (optional)
     * @param  string|null $created_to UNIX timestamp in milliseconds (optional)
     * @param  string|null $page_token Set this token to return records for given page. You get this for each response. (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['apiV1ParcelsGet'] to see the possible values for this operation
     *
     * @throws \Boxnow\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return array of \Boxnow\Model\ApiV1ParcelsGet200Response|\Boxnow\Model\ApiV1AuthSessionsPost400Response|\Boxnow\Model\ApiV1AuthSessionsPost403Response, HTTP status code, HTTP response headers (array of strings)
     */
    public function apiV1ParcelsGetWithHttpInfo($q = null, $limit = 50, $order_number = null, $parcel_id = null, $payment_state = null, $payment_mode = null, $state = null, $created_from = null, $created_to = null, $page_token = null, string $contentType = self::contentTypes['apiV1ParcelsGet'][0])
    {
        $request = $this->apiV1ParcelsGetRequest($q, $limit, $order_number, $parcel_id, $payment_state, $payment_mode, $state, $created_from, $created_to, $page_token, $contentType);

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
                    if ('\Boxnow\Model\ApiV1ParcelsGet200Response' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ('\Boxnow\Model\ApiV1ParcelsGet200Response' !== 'string') {
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
                        ObjectSerializer::deserialize($content, '\Boxnow\Model\ApiV1ParcelsGet200Response', []),
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

            $returnType = '\Boxnow\Model\ApiV1ParcelsGet200Response';
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
                        '\Boxnow\Model\ApiV1ParcelsGet200Response',
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
     * Operation apiV1ParcelsGetAsync
     *
     * List parcel info related to your delivery requests
     *
     * @param  string|null $q Search in: Order ID, Parcel ID, Customer name, Customer email, Customer phone number. Allowed only for partner portal users. (optional)
     * @param  float|null $limit Page size (optional, default to 50)
     * @param  string|null $order_number Order number in your system. Return only parcels related to this order number. (optional)
     * @param  string|null $parcel_id ID of the parcel in our system. Return only parcel/s with this ID. (optional)
     * @param  \Boxnow\Model\PaymentState|null $payment_state (optional)
     * @param  \Boxnow\Model\PaymentMode|null $payment_mode (optional)
     * @param  \Boxnow\Model\ParcelState[]|null $state (optional)
     * @param  string|null $created_from UNIX timestamp in milliseconds (optional)
     * @param  string|null $created_to UNIX timestamp in milliseconds (optional)
     * @param  string|null $page_token Set this token to return records for given page. You get this for each response. (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['apiV1ParcelsGet'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function apiV1ParcelsGetAsync($q = null, $limit = 50, $order_number = null, $parcel_id = null, $payment_state = null, $payment_mode = null, $state = null, $created_from = null, $created_to = null, $page_token = null, string $contentType = self::contentTypes['apiV1ParcelsGet'][0])
    {
        return $this->apiV1ParcelsGetAsyncWithHttpInfo($q, $limit, $order_number, $parcel_id, $payment_state, $payment_mode, $state, $created_from, $created_to, $page_token, $contentType)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation apiV1ParcelsGetAsyncWithHttpInfo
     *
     * List parcel info related to your delivery requests
     *
     * @param  string|null $q Search in: Order ID, Parcel ID, Customer name, Customer email, Customer phone number. Allowed only for partner portal users. (optional)
     * @param  float|null $limit Page size (optional, default to 50)
     * @param  string|null $order_number Order number in your system. Return only parcels related to this order number. (optional)
     * @param  string|null $parcel_id ID of the parcel in our system. Return only parcel/s with this ID. (optional)
     * @param  \Boxnow\Model\PaymentState|null $payment_state (optional)
     * @param  \Boxnow\Model\PaymentMode|null $payment_mode (optional)
     * @param  \Boxnow\Model\ParcelState[]|null $state (optional)
     * @param  string|null $created_from UNIX timestamp in milliseconds (optional)
     * @param  string|null $created_to UNIX timestamp in milliseconds (optional)
     * @param  string|null $page_token Set this token to return records for given page. You get this for each response. (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['apiV1ParcelsGet'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function apiV1ParcelsGetAsyncWithHttpInfo($q = null, $limit = 50, $order_number = null, $parcel_id = null, $payment_state = null, $payment_mode = null, $state = null, $created_from = null, $created_to = null, $page_token = null, string $contentType = self::contentTypes['apiV1ParcelsGet'][0])
    {
        $returnType = '\Boxnow\Model\ApiV1ParcelsGet200Response';
        $request = $this->apiV1ParcelsGetRequest($q, $limit, $order_number, $parcel_id, $payment_state, $payment_mode, $state, $created_from, $created_to, $page_token, $contentType);

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
     * Create request for operation 'apiV1ParcelsGet'
     *
     * @param  string|null $q Search in: Order ID, Parcel ID, Customer name, Customer email, Customer phone number. Allowed only for partner portal users. (optional)
     * @param  float|null $limit Page size (optional, default to 50)
     * @param  string|null $order_number Order number in your system. Return only parcels related to this order number. (optional)
     * @param  string|null $parcel_id ID of the parcel in our system. Return only parcel/s with this ID. (optional)
     * @param  \Boxnow\Model\PaymentState|null $payment_state (optional)
     * @param  \Boxnow\Model\PaymentMode|null $payment_mode (optional)
     * @param  \Boxnow\Model\ParcelState[]|null $state (optional)
     * @param  string|null $created_from UNIX timestamp in milliseconds (optional)
     * @param  string|null $created_to UNIX timestamp in milliseconds (optional)
     * @param  string|null $page_token Set this token to return records for given page. You get this for each response. (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['apiV1ParcelsGet'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function apiV1ParcelsGetRequest($q = null, $limit = 50, $order_number = null, $parcel_id = null, $payment_state = null, $payment_mode = null, $state = null, $created_from = null, $created_to = null, $page_token = null, string $contentType = self::contentTypes['apiV1ParcelsGet'][0])
    {


        if ($limit !== null && $limit > 100) {
            throw new \InvalidArgumentException('invalid value for "$limit" when calling ParcelsApi.apiV1ParcelsGet, must be smaller than or equal to 100.');
        }
        









        $resourcePath = '/api/v1/parcels';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $q,
            'q', // param base name
            'string', // openApiType
            'form', // style
            true, // explode
            false // required
        ) ?? []);
        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $limit,
            'limit', // param base name
            'number', // openApiType
            'form', // style
            true, // explode
            false // required
        ) ?? []);
        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $order_number,
            'orderNumber', // param base name
            'string', // openApiType
            'form', // style
            true, // explode
            false // required
        ) ?? []);
        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $parcel_id,
            'parcelId', // param base name
            'string', // openApiType
            'form', // style
            true, // explode
            false // required
        ) ?? []);
        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $payment_state,
            'paymentState', // param base name
            'PaymentState', // openApiType
            'form', // style
            true, // explode
            false // required
        ) ?? []);
        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $payment_mode,
            'paymentMode', // param base name
            'PaymentMode', // openApiType
            'form', // style
            true, // explode
            false // required
        ) ?? []);
        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $state,
            'state', // param base name
            'array', // openApiType
            'form', // style
            true, // explode
            false // required
        ) ?? []);
        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $created_from,
            'createdFrom', // param base name
            'string', // openApiType
            'form', // style
            true, // explode
            false // required
        ) ?? []);
        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $created_to,
            'createdTo', // param base name
            'string', // openApiType
            'form', // style
            true, // explode
            false // required
        ) ?? []);
        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $page_token,
            'pageToken', // param base name
            'string', // openApiType
            'form', // style
            true, // explode
            false // required
        ) ?? []);




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
            'GET',
            $operationHost . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Operation apiV1ParcelsIdCancelPost
     *
     * Cancel parcel delivery
     *
     * @param  string $id Unique parcel ID. You have received parcel ID after a successful delivery request creation or you can list all parcels, see &#x60;/parcels&#x60; (required)
     * @param  string|null $x_partner_id Partner ID you want to manage. You can list partners you are allowed to manage from /entrusted-partners endpoint. (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['apiV1ParcelsIdCancelPost'] to see the possible values for this operation
     *
     * @throws \Boxnow\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return void
     */
    public function apiV1ParcelsIdCancelPost($id, $x_partner_id = null, string $contentType = self::contentTypes['apiV1ParcelsIdCancelPost'][0])
    {
        $this->apiV1ParcelsIdCancelPostWithHttpInfo($id, $x_partner_id, $contentType);
    }

    /**
     * Operation apiV1ParcelsIdCancelPostWithHttpInfo
     *
     * Cancel parcel delivery
     *
     * @param  string $id Unique parcel ID. You have received parcel ID after a successful delivery request creation or you can list all parcels, see &#x60;/parcels&#x60; (required)
     * @param  string|null $x_partner_id Partner ID you want to manage. You can list partners you are allowed to manage from /entrusted-partners endpoint. (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['apiV1ParcelsIdCancelPost'] to see the possible values for this operation
     *
     * @throws \Boxnow\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return array of null, HTTP status code, HTTP response headers (array of strings)
     */
    public function apiV1ParcelsIdCancelPostWithHttpInfo($id, $x_partner_id = null, string $contentType = self::contentTypes['apiV1ParcelsIdCancelPost'][0])
    {
        $request = $this->apiV1ParcelsIdCancelPostRequest($id, $x_partner_id, $contentType);

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


            return [null, $statusCode, $response->getHeaders()];

        } catch (ApiException $e) {
            switch ($e->getCode()) {
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
     * Operation apiV1ParcelsIdCancelPostAsync
     *
     * Cancel parcel delivery
     *
     * @param  string $id Unique parcel ID. You have received parcel ID after a successful delivery request creation or you can list all parcels, see &#x60;/parcels&#x60; (required)
     * @param  string|null $x_partner_id Partner ID you want to manage. You can list partners you are allowed to manage from /entrusted-partners endpoint. (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['apiV1ParcelsIdCancelPost'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function apiV1ParcelsIdCancelPostAsync($id, $x_partner_id = null, string $contentType = self::contentTypes['apiV1ParcelsIdCancelPost'][0])
    {
        return $this->apiV1ParcelsIdCancelPostAsyncWithHttpInfo($id, $x_partner_id, $contentType)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation apiV1ParcelsIdCancelPostAsyncWithHttpInfo
     *
     * Cancel parcel delivery
     *
     * @param  string $id Unique parcel ID. You have received parcel ID after a successful delivery request creation or you can list all parcels, see &#x60;/parcels&#x60; (required)
     * @param  string|null $x_partner_id Partner ID you want to manage. You can list partners you are allowed to manage from /entrusted-partners endpoint. (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['apiV1ParcelsIdCancelPost'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function apiV1ParcelsIdCancelPostAsyncWithHttpInfo($id, $x_partner_id = null, string $contentType = self::contentTypes['apiV1ParcelsIdCancelPost'][0])
    {
        $returnType = '';
        $request = $this->apiV1ParcelsIdCancelPostRequest($id, $x_partner_id, $contentType);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    return [null, $response->getStatusCode(), $response->getHeaders()];
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
     * Create request for operation 'apiV1ParcelsIdCancelPost'
     *
     * @param  string $id Unique parcel ID. You have received parcel ID after a successful delivery request creation or you can list all parcels, see &#x60;/parcels&#x60; (required)
     * @param  string|null $x_partner_id Partner ID you want to manage. You can list partners you are allowed to manage from /entrusted-partners endpoint. (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['apiV1ParcelsIdCancelPost'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function apiV1ParcelsIdCancelPostRequest($id, $x_partner_id = null, string $contentType = self::contentTypes['apiV1ParcelsIdCancelPost'][0])
    {

        // verify the required parameter 'id' is set
        if ($id === null || (is_array($id) && count($id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $id when calling apiV1ParcelsIdCancelPost'
            );
        }



        $resourcePath = '/api/v1/parcels/{id}:cancel';
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
        if ($id !== null) {
            $resourcePath = str_replace(
                '{' . 'id' . '}',
                ObjectSerializer::toPathValue($id),
                $resourcePath
            );
        }


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
     * Operation apiV1ParcelsIdConfirmAnyapmDeliveryPost
     *
     * Confirm parcel has been delivered to AnyAPM
     *
     * @param  string $id Unique parcel ID. You have received parcel ID after a successful delivery request creation or you can list all parcels, see &#x60;/parcels&#x60; (required)
     * @param  string|null $x_partner_id Partner ID you want to manage. You can list partners you are allowed to manage from /entrusted-partners endpoint. (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['apiV1ParcelsIdConfirmAnyapmDeliveryPost'] to see the possible values for this operation
     *
     * @throws \Boxnow\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return void
     */
    public function apiV1ParcelsIdConfirmAnyapmDeliveryPost($id, $x_partner_id = null, string $contentType = self::contentTypes['apiV1ParcelsIdConfirmAnyapmDeliveryPost'][0])
    {
        $this->apiV1ParcelsIdConfirmAnyapmDeliveryPostWithHttpInfo($id, $x_partner_id, $contentType);
    }

    /**
     * Operation apiV1ParcelsIdConfirmAnyapmDeliveryPostWithHttpInfo
     *
     * Confirm parcel has been delivered to AnyAPM
     *
     * @param  string $id Unique parcel ID. You have received parcel ID after a successful delivery request creation or you can list all parcels, see &#x60;/parcels&#x60; (required)
     * @param  string|null $x_partner_id Partner ID you want to manage. You can list partners you are allowed to manage from /entrusted-partners endpoint. (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['apiV1ParcelsIdConfirmAnyapmDeliveryPost'] to see the possible values for this operation
     *
     * @throws \Boxnow\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return array of null, HTTP status code, HTTP response headers (array of strings)
     */
    public function apiV1ParcelsIdConfirmAnyapmDeliveryPostWithHttpInfo($id, $x_partner_id = null, string $contentType = self::contentTypes['apiV1ParcelsIdConfirmAnyapmDeliveryPost'][0])
    {
        $request = $this->apiV1ParcelsIdConfirmAnyapmDeliveryPostRequest($id, $x_partner_id, $contentType);

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


            return [null, $statusCode, $response->getHeaders()];

        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 400:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Boxnow\Model\EP430',
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
                case 503:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Boxnow\Model\EP600',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation apiV1ParcelsIdConfirmAnyapmDeliveryPostAsync
     *
     * Confirm parcel has been delivered to AnyAPM
     *
     * @param  string $id Unique parcel ID. You have received parcel ID after a successful delivery request creation or you can list all parcels, see &#x60;/parcels&#x60; (required)
     * @param  string|null $x_partner_id Partner ID you want to manage. You can list partners you are allowed to manage from /entrusted-partners endpoint. (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['apiV1ParcelsIdConfirmAnyapmDeliveryPost'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function apiV1ParcelsIdConfirmAnyapmDeliveryPostAsync($id, $x_partner_id = null, string $contentType = self::contentTypes['apiV1ParcelsIdConfirmAnyapmDeliveryPost'][0])
    {
        return $this->apiV1ParcelsIdConfirmAnyapmDeliveryPostAsyncWithHttpInfo($id, $x_partner_id, $contentType)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation apiV1ParcelsIdConfirmAnyapmDeliveryPostAsyncWithHttpInfo
     *
     * Confirm parcel has been delivered to AnyAPM
     *
     * @param  string $id Unique parcel ID. You have received parcel ID after a successful delivery request creation or you can list all parcels, see &#x60;/parcels&#x60; (required)
     * @param  string|null $x_partner_id Partner ID you want to manage. You can list partners you are allowed to manage from /entrusted-partners endpoint. (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['apiV1ParcelsIdConfirmAnyapmDeliveryPost'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function apiV1ParcelsIdConfirmAnyapmDeliveryPostAsyncWithHttpInfo($id, $x_partner_id = null, string $contentType = self::contentTypes['apiV1ParcelsIdConfirmAnyapmDeliveryPost'][0])
    {
        $returnType = '';
        $request = $this->apiV1ParcelsIdConfirmAnyapmDeliveryPostRequest($id, $x_partner_id, $contentType);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    return [null, $response->getStatusCode(), $response->getHeaders()];
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
     * Create request for operation 'apiV1ParcelsIdConfirmAnyapmDeliveryPost'
     *
     * @param  string $id Unique parcel ID. You have received parcel ID after a successful delivery request creation or you can list all parcels, see &#x60;/parcels&#x60; (required)
     * @param  string|null $x_partner_id Partner ID you want to manage. You can list partners you are allowed to manage from /entrusted-partners endpoint. (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['apiV1ParcelsIdConfirmAnyapmDeliveryPost'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function apiV1ParcelsIdConfirmAnyapmDeliveryPostRequest($id, $x_partner_id = null, string $contentType = self::contentTypes['apiV1ParcelsIdConfirmAnyapmDeliveryPost'][0])
    {

        // verify the required parameter 'id' is set
        if ($id === null || (is_array($id) && count($id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $id when calling apiV1ParcelsIdConfirmAnyapmDeliveryPost'
            );
        }



        $resourcePath = '/api/v1/parcels/{id}:confirm-anyapm-delivery';
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
        if ($id !== null) {
            $resourcePath = str_replace(
                '{' . 'id' . '}',
                ObjectSerializer::toPathValue($id),
                $resourcePath
            );
        }


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
     * Operation apiV1ParcelsIdDeclareDeliveryPartnerReturnPost
     *
     * Initiate a parcel return from a delivery partner
     *
     * @param  string $id Unique parcel ID. You have received parcel ID after a successful delivery request creation or you can list all parcels, see &#x60;/parcels&#x60; (required)
     * @param  string|null $x_partner_id Partner ID you want to manage. You can list partners you are allowed to manage from /entrusted-partners endpoint. (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['apiV1ParcelsIdDeclareDeliveryPartnerReturnPost'] to see the possible values for this operation
     *
     * @throws \Boxnow\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return void
     */
    public function apiV1ParcelsIdDeclareDeliveryPartnerReturnPost($id, $x_partner_id = null, string $contentType = self::contentTypes['apiV1ParcelsIdDeclareDeliveryPartnerReturnPost'][0])
    {
        $this->apiV1ParcelsIdDeclareDeliveryPartnerReturnPostWithHttpInfo($id, $x_partner_id, $contentType);
    }

    /**
     * Operation apiV1ParcelsIdDeclareDeliveryPartnerReturnPostWithHttpInfo
     *
     * Initiate a parcel return from a delivery partner
     *
     * @param  string $id Unique parcel ID. You have received parcel ID after a successful delivery request creation or you can list all parcels, see &#x60;/parcels&#x60; (required)
     * @param  string|null $x_partner_id Partner ID you want to manage. You can list partners you are allowed to manage from /entrusted-partners endpoint. (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['apiV1ParcelsIdDeclareDeliveryPartnerReturnPost'] to see the possible values for this operation
     *
     * @throws \Boxnow\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return array of null, HTTP status code, HTTP response headers (array of strings)
     */
    public function apiV1ParcelsIdDeclareDeliveryPartnerReturnPostWithHttpInfo($id, $x_partner_id = null, string $contentType = self::contentTypes['apiV1ParcelsIdDeclareDeliveryPartnerReturnPost'][0])
    {
        $request = $this->apiV1ParcelsIdDeclareDeliveryPartnerReturnPostRequest($id, $x_partner_id, $contentType);

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


            return [null, $statusCode, $response->getHeaders()];

        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 400:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Boxnow\Model\ApiV1ParcelsIdDeclareDeliveryPartnerReturnPost400Response',
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
     * Operation apiV1ParcelsIdDeclareDeliveryPartnerReturnPostAsync
     *
     * Initiate a parcel return from a delivery partner
     *
     * @param  string $id Unique parcel ID. You have received parcel ID after a successful delivery request creation or you can list all parcels, see &#x60;/parcels&#x60; (required)
     * @param  string|null $x_partner_id Partner ID you want to manage. You can list partners you are allowed to manage from /entrusted-partners endpoint. (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['apiV1ParcelsIdDeclareDeliveryPartnerReturnPost'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function apiV1ParcelsIdDeclareDeliveryPartnerReturnPostAsync($id, $x_partner_id = null, string $contentType = self::contentTypes['apiV1ParcelsIdDeclareDeliveryPartnerReturnPost'][0])
    {
        return $this->apiV1ParcelsIdDeclareDeliveryPartnerReturnPostAsyncWithHttpInfo($id, $x_partner_id, $contentType)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation apiV1ParcelsIdDeclareDeliveryPartnerReturnPostAsyncWithHttpInfo
     *
     * Initiate a parcel return from a delivery partner
     *
     * @param  string $id Unique parcel ID. You have received parcel ID after a successful delivery request creation or you can list all parcels, see &#x60;/parcels&#x60; (required)
     * @param  string|null $x_partner_id Partner ID you want to manage. You can list partners you are allowed to manage from /entrusted-partners endpoint. (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['apiV1ParcelsIdDeclareDeliveryPartnerReturnPost'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function apiV1ParcelsIdDeclareDeliveryPartnerReturnPostAsyncWithHttpInfo($id, $x_partner_id = null, string $contentType = self::contentTypes['apiV1ParcelsIdDeclareDeliveryPartnerReturnPost'][0])
    {
        $returnType = '';
        $request = $this->apiV1ParcelsIdDeclareDeliveryPartnerReturnPostRequest($id, $x_partner_id, $contentType);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    return [null, $response->getStatusCode(), $response->getHeaders()];
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
     * Create request for operation 'apiV1ParcelsIdDeclareDeliveryPartnerReturnPost'
     *
     * @param  string $id Unique parcel ID. You have received parcel ID after a successful delivery request creation or you can list all parcels, see &#x60;/parcels&#x60; (required)
     * @param  string|null $x_partner_id Partner ID you want to manage. You can list partners you are allowed to manage from /entrusted-partners endpoint. (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['apiV1ParcelsIdDeclareDeliveryPartnerReturnPost'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function apiV1ParcelsIdDeclareDeliveryPartnerReturnPostRequest($id, $x_partner_id = null, string $contentType = self::contentTypes['apiV1ParcelsIdDeclareDeliveryPartnerReturnPost'][0])
    {

        // verify the required parameter 'id' is set
        if ($id === null || (is_array($id) && count($id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $id when calling apiV1ParcelsIdDeclareDeliveryPartnerReturnPost'
            );
        }



        $resourcePath = '/api/v1/parcels/{id}:declareDeliveryPartnerReturn';
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
        if ($id !== null) {
            $resourcePath = str_replace(
                '{' . 'id' . '}',
                ObjectSerializer::toPathValue($id),
                $resourcePath
            );
        }


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
     * Operation uiV1ParcelsCsvGet
     *
     * List parcels to csv file
     *
     * @param  string|null $q Search in: Order ID, Parcel ID, Customer name, Customer email, Customer phone number (optional)
     * @param  string|null $order_number Order number in your system. Return only parcels related to this order number. (optional)
     * @param  string|null $parcel_id ID of the parcel in our system. Return only parcel/s with this ID. (optional)
     * @param  \Boxnow\Model\PaymentState|null $payment_state payment_state (optional)
     * @param  \Boxnow\Model\PaymentMode|null $payment_mode payment_mode (optional)
     * @param  \Boxnow\Model\ParcelState[]|null $state state (optional)
     * @param  string|null $created_from UNIX timestamp in milliseconds (optional)
     * @param  string|null $created_to UNIX timestamp in milliseconds (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['uiV1ParcelsCsvGet'] to see the possible values for this operation
     *
     * @throws \Boxnow\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return string|\Boxnow\Model\ApiV1AuthSessionsPost400Response|\Boxnow\Model\ApiV1AuthSessionsPost403Response
     */
    public function uiV1ParcelsCsvGet($q = null, $order_number = null, $parcel_id = null, $payment_state = null, $payment_mode = null, $state = null, $created_from = null, $created_to = null, string $contentType = self::contentTypes['uiV1ParcelsCsvGet'][0])
    {
        list($response) = $this->uiV1ParcelsCsvGetWithHttpInfo($q, $order_number, $parcel_id, $payment_state, $payment_mode, $state, $created_from, $created_to, $contentType);
        return $response;
    }

    /**
     * Operation uiV1ParcelsCsvGetWithHttpInfo
     *
     * List parcels to csv file
     *
     * @param  string|null $q Search in: Order ID, Parcel ID, Customer name, Customer email, Customer phone number (optional)
     * @param  string|null $order_number Order number in your system. Return only parcels related to this order number. (optional)
     * @param  string|null $parcel_id ID of the parcel in our system. Return only parcel/s with this ID. (optional)
     * @param  \Boxnow\Model\PaymentState|null $payment_state (optional)
     * @param  \Boxnow\Model\PaymentMode|null $payment_mode (optional)
     * @param  \Boxnow\Model\ParcelState[]|null $state (optional)
     * @param  string|null $created_from UNIX timestamp in milliseconds (optional)
     * @param  string|null $created_to UNIX timestamp in milliseconds (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['uiV1ParcelsCsvGet'] to see the possible values for this operation
     *
     * @throws \Boxnow\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return array of string|\Boxnow\Model\ApiV1AuthSessionsPost400Response|\Boxnow\Model\ApiV1AuthSessionsPost403Response, HTTP status code, HTTP response headers (array of strings)
     */
    public function uiV1ParcelsCsvGetWithHttpInfo($q = null, $order_number = null, $parcel_id = null, $payment_state = null, $payment_mode = null, $state = null, $created_from = null, $created_to = null, string $contentType = self::contentTypes['uiV1ParcelsCsvGet'][0])
    {
        $request = $this->uiV1ParcelsCsvGetRequest($q, $order_number, $parcel_id, $payment_state, $payment_mode, $state, $created_from, $created_to, $contentType);

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
                    if ('string' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ('string' !== 'string') {
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
                        ObjectSerializer::deserialize($content, 'string', []),
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

            $returnType = 'string';
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
                        'string',
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
     * Operation uiV1ParcelsCsvGetAsync
     *
     * List parcels to csv file
     *
     * @param  string|null $q Search in: Order ID, Parcel ID, Customer name, Customer email, Customer phone number (optional)
     * @param  string|null $order_number Order number in your system. Return only parcels related to this order number. (optional)
     * @param  string|null $parcel_id ID of the parcel in our system. Return only parcel/s with this ID. (optional)
     * @param  \Boxnow\Model\PaymentState|null $payment_state (optional)
     * @param  \Boxnow\Model\PaymentMode|null $payment_mode (optional)
     * @param  \Boxnow\Model\ParcelState[]|null $state (optional)
     * @param  string|null $created_from UNIX timestamp in milliseconds (optional)
     * @param  string|null $created_to UNIX timestamp in milliseconds (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['uiV1ParcelsCsvGet'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function uiV1ParcelsCsvGetAsync($q = null, $order_number = null, $parcel_id = null, $payment_state = null, $payment_mode = null, $state = null, $created_from = null, $created_to = null, string $contentType = self::contentTypes['uiV1ParcelsCsvGet'][0])
    {
        return $this->uiV1ParcelsCsvGetAsyncWithHttpInfo($q, $order_number, $parcel_id, $payment_state, $payment_mode, $state, $created_from, $created_to, $contentType)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation uiV1ParcelsCsvGetAsyncWithHttpInfo
     *
     * List parcels to csv file
     *
     * @param  string|null $q Search in: Order ID, Parcel ID, Customer name, Customer email, Customer phone number (optional)
     * @param  string|null $order_number Order number in your system. Return only parcels related to this order number. (optional)
     * @param  string|null $parcel_id ID of the parcel in our system. Return only parcel/s with this ID. (optional)
     * @param  \Boxnow\Model\PaymentState|null $payment_state (optional)
     * @param  \Boxnow\Model\PaymentMode|null $payment_mode (optional)
     * @param  \Boxnow\Model\ParcelState[]|null $state (optional)
     * @param  string|null $created_from UNIX timestamp in milliseconds (optional)
     * @param  string|null $created_to UNIX timestamp in milliseconds (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['uiV1ParcelsCsvGet'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function uiV1ParcelsCsvGetAsyncWithHttpInfo($q = null, $order_number = null, $parcel_id = null, $payment_state = null, $payment_mode = null, $state = null, $created_from = null, $created_to = null, string $contentType = self::contentTypes['uiV1ParcelsCsvGet'][0])
    {
        $returnType = 'string';
        $request = $this->uiV1ParcelsCsvGetRequest($q, $order_number, $parcel_id, $payment_state, $payment_mode, $state, $created_from, $created_to, $contentType);

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
     * Create request for operation 'uiV1ParcelsCsvGet'
     *
     * @param  string|null $q Search in: Order ID, Parcel ID, Customer name, Customer email, Customer phone number (optional)
     * @param  string|null $order_number Order number in your system. Return only parcels related to this order number. (optional)
     * @param  string|null $parcel_id ID of the parcel in our system. Return only parcel/s with this ID. (optional)
     * @param  \Boxnow\Model\PaymentState|null $payment_state (optional)
     * @param  \Boxnow\Model\PaymentMode|null $payment_mode (optional)
     * @param  \Boxnow\Model\ParcelState[]|null $state (optional)
     * @param  string|null $created_from UNIX timestamp in milliseconds (optional)
     * @param  string|null $created_to UNIX timestamp in milliseconds (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['uiV1ParcelsCsvGet'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function uiV1ParcelsCsvGetRequest($q = null, $order_number = null, $parcel_id = null, $payment_state = null, $payment_mode = null, $state = null, $created_from = null, $created_to = null, string $contentType = self::contentTypes['uiV1ParcelsCsvGet'][0])
    {










        $resourcePath = '/ui/v1/parcels.csv';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $q,
            'q', // param base name
            'string', // openApiType
            'form', // style
            true, // explode
            false // required
        ) ?? []);
        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $order_number,
            'orderNumber', // param base name
            'string', // openApiType
            'form', // style
            true, // explode
            false // required
        ) ?? []);
        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $parcel_id,
            'parcelId', // param base name
            'string', // openApiType
            'form', // style
            true, // explode
            false // required
        ) ?? []);
        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $payment_state,
            'paymentState', // param base name
            'PaymentState', // openApiType
            'form', // style
            true, // explode
            false // required
        ) ?? []);
        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $payment_mode,
            'paymentMode', // param base name
            'PaymentMode', // openApiType
            'form', // style
            true, // explode
            false // required
        ) ?? []);
        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $state,
            'state', // param base name
            'array', // openApiType
            'form', // style
            true, // explode
            false // required
        ) ?? []);
        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $created_from,
            'createdFrom', // param base name
            'string', // openApiType
            'form', // style
            true, // explode
            false // required
        ) ?? []);
        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $created_to,
            'createdTo', // param base name
            'string', // openApiType
            'form', // style
            true, // explode
            false // required
        ) ?? []);




        $headers = $this->headerSelector->selectHeaders(
            ['text/csv', 'application/json', ],
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
            'GET',
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
