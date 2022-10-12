<?php
/**
 * LocationsApi
 * PHP version 5
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Partner API
 *
 * Document describes the API description for partners in order to create and track delivery requests.  ## Revision history  |Date|Author|Description|Version| |---|---|---|---| |2022-07-27|Vala J.| Add EP for listing shipping label data of parcels order /api/v1/delivery-requests/{orderNumber}/label |1.36| |2022-07-27|Vala J.| Add EP for listing shipping label data of parcel /api/v1/parcels/{id}/label |1.35| |2022-07-22|Vala J.| Add destination_public_id column to csv export of parcels |1.34| |2022-07-08|Vala J.| <ul><li>Add exportCsvUrl to headers ['X-export-url-csv'] to response from /api/v1/parcels</li><li>Add endpoint to export parcels to csv file /ui/v1/parcels.csv</li></ul> |1.33| |2022-06-27|Vala J.| Add width and printerModel query parameters for zpl shipping labels for /api/v1/delivery-requests/{orderNumber}/label.{type} and /api/v1/parcels/{id}/label.{type} |1.32| |2022-06-17|Šmolík, J.| Allow to select return location for delivery request |1.31| |2022-05-25|Vala, J.| Add single labelUrlPdf to headers ['X-labels-url-pdf'] in response from /api/v1/delivery-requests:fromCsv |1.30| |2022-05-25|Vala, J.| Add EP to handle csv import orders printing of shipping label /ui/v1/delivery-requests/{orderImportsNumber}/label.pdf |1.29| |2022-05-20|Vala, J.| Add possibility to overwrite 4 rows in shipping label sender info to /api/v1/delivery-requests endpoint |1.28| |2022-05-04|Azizov, J.| Add state and created filters to to /api/v1/parcels endpoint |1.27| |2022-05-03|Azizov, J.| Add possibility to search parcels to /api/v1/parcels endpoint |1.26| |2022-04-27|Azizov, J.| Add /api/v1/delivery-requests:customerReturns for customer returns delivery requests |1.25| |2022-04-26|Vala, J.| Add createTime, updateTime to parcel list response |1.24| |2022-04-21|Šmolík, J.| Add payment info to parcels |1.23| |2022-02-22|Azizov, J.| Add P408 and P409 error codes |1.22| |2022-02-22|Azizov, J.| Add notifySMSOnAccepted to DeliveryRequest |1.21| |2022-02-01|Šmolík, J.| <ul><li>Add check address delivery endpoint</li><li>Add /api/v1/simple-delivery-requests for simpler delivery creation</li></ul> |1.20| |2022-01-20|Šmolík, J.| Add P405, P406 and P407 error codes |1.19| |2022-01-10|Šmolík, J.| <ul><li>Add CSV import endpoint</li><li>Add JWT custom claims description</li><li>Move 403 error codes to own section</li></ul> |1.18| |2021-12-23|Šmolík, J.| <ul><li>Add new endpoint to confirm AnyAPM delivery of a parcel</li><li>Partition error codes by HTTP status response</li></ul> |1.17| |2021-12-16|Šmolík, J.| Add new error code P403 |1.16| |2021-12-09|Šmolík, J.| Add new error codes P401, P402 |1.15| |2021-11-30|Šmolík, J.| Add delivery request origin, destination and items fields description |1.14| |2021-11-11|Šmolík, J.| Add endpoint for parcel delivery cancellation |1.13| |2021-11-09|Šmolík, J.| Add X403 error code spec |1.12| |2021-10-14|Šmolík, J.| Add Accepted for return event |1.11| |2021-10-05|Šmolík, J.| Make DeliveryRequest.items required |1.10| |2021-09-22|Šmolík, J.| Add canceled event state and event|1.9| |2021-09-17|Šmolík, J.| Add PDF label URLs to parcels response |1.8 |2021-09-13|Šmolík, J.| <ul><li>Update parcel state enum values</li><li>Remove history event displayName, add type</li></ul>|1.7 |2021-08-25|Azizov, J.| <ul><li>Add possibility to print labels for all parcels in order</li><li>Make contact information of origin optional in delivery request</li></ul>|1.6 |2021-08-02|Azizov, J.| Add items metadata to parcel |1.5| |2021-07-15|Šmolík, J.| Add destination expected delivery time |1.4| |2021-06-23|Šmolík, J.| Update money value fields description |1.3| |2021-06-21|Šmolík, J.| <ul><li>Update Requesting a delivery text</li><li>Add `name` filter to origins and destinations </li><li>Rename delivery request code of description to plain description</li><li>Add more specific info to value amount fields</li><li>Update address country to match ISO Code</li><li>Update address postal code formatting</li><li>Update origin/destination for delivery request</li><li>Remove height, length, width from order item</li><li>Add events to parcel info</li><li>Update delivery request response</li><li>Update order number description</li><li>Add parcel id filter to /parcels</li><li>Add message to error</li><li>Make contact name required</li><li>Add delivery partner parcel ids</li><li>Remove order items' code and status</li></ul> |1.2| |2021-06-14|Šmolík, J.| <ul><li>Add a todo to specify client notification type after accepting the order.</li><li> Let the partner choose to receive an email when successful delivery request is made.</li><li> Remove `typeOfOrder` from delivery request.</li><li>Add option to select delivery partner for pickup</li><li>Make item weight in the order optional</li><li>Make origin contact email required</li><li>Add support to add sender's name when making delivery request</li><li>Remove landmark and code from address</li><li>Add new error code or partners not eligible to create COD delivery requests</li><li>Add support to filter destinations/origins by type</li><li>Add support to send compartment size for order item, required for APM origin</li><li>Make `typeOfService` optional</li></ul> |1.1| |2021-06-09|Šmolík, J.|Initial version|1.0|  # Setup  Register your company through our support.  We are going to need   - Company name   - List of Phone numbers for SMS OTP authentication of people who'll you want to have access to the Partner CMS   - List of addresses for pickup points - where do we pickup your order for delivery  You will get in return - `OAUTH_CLIENT_ID` - OAuth2 Client ID for authenticating with the Partner API. Keep it safe. Value may vary for each environment. - `OAUTH_CLIENT_SECRET` - OAuth2 Client Secret for authenticating with the Partner API. Keep it safe. Value may vary for each environment. - `API_URL` - Base URL for Partner API  ## Environments  Product offers multiple environments   - Sandbox - For you to test the integration. Limited functionality.   - Production - Connected to real end-users. Use with care.  Environment setting summary: | Value \\ Env | Sandbox |  Production | |---|---|---| | `API_URL`  | N/A  | N/A | | `OAUTH_CLIENT_SECRET`  | Contact Support | Contact Support | | `OAUTH_CLIENT_ID`  | Contact Support  | Contact Support |   # API  ## Authentication  Authentication is based on OAuth2 standard, Client Credentials grant. Token endpoint `/auth-sessions`, see examples below.  Client ID and Secret MUST be passed to you from BoxNow support in advance.  In order to use the API, you MUST attach the access token to Authorization header as a Bearer token.  ### Custom JWT claims  You can find additional user information in custom claims under namespace key `https://boxnow.gr`. For example  ```json {   \"iat\": 1641980553,   \"exp\": 1641984153,   \"https://boxnow.gr\": {     \"permission\": {       \"warehouseAsOrigin\": true,       \"anyApmAsOrigin\": true,       \"anyApmToSameApmDelivery\": true,       \"anyApmToSameApmDeliveryWithoutConfirmation\": true,       \"depotAsOrigin\": true     }   } } ```  ## Listing available destinations  You can skip this if you don't want to deliver your order to one of our APMs.  Use `/destinations` to list available APM locations we can deliver the goods to. You will refer to these records by `id` when requesting delivery later on.  ## Requesting a delivery  Create a delivery request to delivery your order to the client. Use `/delivery-requests` endpoint for this operation.  Once a successful request delivery is made   - (optional) we send you an email notifying about successful delivery request creation, if you choose to receive this email   - you should fetch the PDF label for each of the parcel from `/parcels/{id}/label.pdf`, print it and stick it to the parcel/s   - we send a courier to pick up the labeled parcel/s   - we notify the client via email that we have accepted the order from you and its being delivered by us  ## Modifying a delivery request  After a delivery request is successfully made, you can alter some parts of it later on. Use `/delivery-requests/{id}` endpoint for these modifications.  ## Checking on the deliveries  You can list parcel related to your delivery requests via `/parcels` endpoint.   ## Error codes  ### Description of codes for `400 Unprocessable entity` responses  - `P400` - Invalid request data. Make sure are sending the request according to this documentation. - `P401` - Invalid request origin location reference. Make sure you are referencing a valid location ID from Origins endpoint or valid address. - `P402` - Invalid request destination location reference. Make sure you are referencing a valid location ID from Destinations endpoint or valid address. - `P403` - You are not allowed to use AnyAPM-SameAPM delivery. Contact support if you believe this is a mistake. - `P404` - Invalid import CSV. See error contents for additional info. - `P405` - Invalid phone number. Make sure you are sending the phone number in full international format, e.g. +30 xx x xxx xxxx. - `P406` - Invalid compartment/parcel size. Make sure you are sending one of required sizes 1, 2 or 3. Size is required when sending from AnyAPM directly. - `P407` - Invalid country code. Make sure you are sending country code in ISO 3166-1 alpha-2 format, e.g. GR. - `P408` - Invalid amountToBeCollected amount. Make sure you are sending amount in the valid range of (0, 5000> - `P409` - Invalid delivery partner reference. Make sure you are referencing a valid delivery partner ID from Delivery partners endpoint. - `P410` - Order number conflict. You are trying to create a delivery request for order ID that has already been created. Choose another order id. - `P411` - You are not eligible to use Cash-on-delivery payment type. Use another payment type or contact our support. - `P412` - You are not allowed to create customer returns deliveries. Contact support if you believe this is a mistake. - `P413` - Invalid return location reference. Make sure you are referencing a valid location warehouse ID from Origins  endpoint or valid address. - `P420` - Parcel not ready for cancel. You can cancel only new, undelivered, or parcels that are not returned or lost. Make sure parcel is in transit and try again. - `P430` - Parcel not ready for AnyAPM confirmation. Parcel is probably already confirmed or being delivered. Contact support if you believe this is a mistake.  ### Description of codes for `403 Forbidden` responses  - `X403` - Account disabled. Your account had been disabled, contact support.  ### Description of codes for `503 Service Unavailable` responses  | Code | Description | |---|---| | `P600` | Locker bridge communication failed. There has been some error when communicating with the locker bridge. Try again later or contact support. | | `P610` | Geolocation API failed. There has been some error when translating address to gps coordinates. Try again later or contact support. |
 *
 * OpenAPI spec version: 1.36
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 3.0.35
 */
/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace Swagger\Client\BoxnowAPI;

use GuzzleHttp\Client;
use GuzzleHttp\ClientInterface;
use GuzzleHttp\Exception\RequestException;
use GuzzleHttp\Psr7\MultipartStream;
use GuzzleHttp\Psr7\Request;
use GuzzleHttp\RequestOptions;
use Swagger\Client\ApiException;
use Swagger\Client\Configuration;
use Swagger\Client\HeaderSelector;
use Swagger\Client\ObjectSerializer;

/**
 * LocationsApi Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class LocationsApi
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
     * @param ClientInterface $client
     * @param Configuration   $config
     * @param HeaderSelector  $selector
     */
    public function __construct(
        ClientInterface $client = null,
        Configuration $config = null,
        HeaderSelector $selector = null
    ) {
        $this->client = $client ?: new Client();
        $this->config = $config ?: new Configuration();
        $this->headerSelector = $selector ?: new HeaderSelector();
    }

    /**
     * @return Configuration
     */
    public function getConfig()
    {
        return $this->config;
    }

    /**
     * Operation apiV1DestinationsGet
     *
     * List available destinations to deliver the order to
     *
     * @param  string $latlng If applied only locations in the specified radius from this gps coord are returned (optional)
     * @param  float $radius Radius in meters to return only locations within selected radius from given GPS location. Ignored if &#x60;latlng&#x60; is not present. (optional, default to 25000)
     * @param  float $required_size Return only locations that can accept a package of your &#x60;requiredSize&#x60; (optional)
     * @param  \Swagger\Client\Boxnow\LocationType[] $location_type Return only locations with given types. If not present, filter is not applied. (optional)
     * @param  string $name Return only locations with matching name (optional)
     *
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Swagger\Client\Boxnow\InlineResponse2001
     */
    public function apiV1DestinationsGet($latlng = null, $radius = '25000', $required_size = null, $location_type = null, $name = null)
    {
        list($response) = $this->apiV1DestinationsGetWithHttpInfo($latlng, $radius, $required_size, $location_type, $name);
        return $response;
    }

    /**
     * Operation apiV1DestinationsGetWithHttpInfo
     *
     * List available destinations to deliver the order to
     *
     * @param  string $latlng If applied only locations in the specified radius from this gps coord are returned (optional)
     * @param  float $radius Radius in meters to return only locations within selected radius from given GPS location. Ignored if &#x60;latlng&#x60; is not present. (optional, default to 25000)
     * @param  float $required_size Return only locations that can accept a package of your &#x60;requiredSize&#x60; (optional)
     * @param  \Swagger\Client\Boxnow\LocationType[] $location_type Return only locations with given types. If not present, filter is not applied. (optional)
     * @param  string $name Return only locations with matching name (optional)
     *
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Swagger\Client\Boxnow\InlineResponse2001, HTTP status code, HTTP response headers (array of strings)
     */
    public function apiV1DestinationsGetWithHttpInfo($latlng = null, $radius = '25000', $required_size = null, $location_type = null, $name = null)
    {
        $returnType = '\Swagger\Client\Boxnow\InlineResponse2001';
        $request = $this->apiV1DestinationsGetRequest($latlng, $radius, $required_size, $location_type, $name);

        try {
            $options = $this->createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    $e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null,
                    $e->getResponse() ? $e->getResponse()->getBody()->getContents() : null
                );
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(
                    sprintf(
                        '[%d] Error connecting to the API (%s)',
                        $statusCode,
                        $request->getUri()
                    ),
                    $statusCode,
                    $response->getHeaders(),
                    $response->getBody()
                );
            }

            $responseBody = $response->getBody();
            if ($returnType === '\SplFileObject') {
                $content = $responseBody; //stream goes to serializer
            } else {
                $content = $responseBody->getContents();
                if (!in_array($returnType, ['string','integer','bool'])) {
                    $content = json_decode($content);
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
                        '\Swagger\Client\Boxnow\InlineResponse2001',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 400:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Swagger\Client\Boxnow\InlineResponse400',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 403:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Swagger\Client\Boxnow\InlineResponse403',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation apiV1DestinationsGetAsync
     *
     * List available destinations to deliver the order to
     *
     * @param  string $latlng If applied only locations in the specified radius from this gps coord are returned (optional)
     * @param  float $radius Radius in meters to return only locations within selected radius from given GPS location. Ignored if &#x60;latlng&#x60; is not present. (optional, default to 25000)
     * @param  float $required_size Return only locations that can accept a package of your &#x60;requiredSize&#x60; (optional)
     * @param  \Swagger\Client\Boxnow\LocationType[] $location_type Return only locations with given types. If not present, filter is not applied. (optional)
     * @param  string $name Return only locations with matching name (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function apiV1DestinationsGetAsync($latlng = null, $radius = '25000', $required_size = null, $location_type = null, $name = null)
    {
        return $this->apiV1DestinationsGetAsyncWithHttpInfo($latlng, $radius, $required_size, $location_type, $name)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation apiV1DestinationsGetAsyncWithHttpInfo
     *
     * List available destinations to deliver the order to
     *
     * @param  string $latlng If applied only locations in the specified radius from this gps coord are returned (optional)
     * @param  float $radius Radius in meters to return only locations within selected radius from given GPS location. Ignored if &#x60;latlng&#x60; is not present. (optional, default to 25000)
     * @param  float $required_size Return only locations that can accept a package of your &#x60;requiredSize&#x60; (optional)
     * @param  \Swagger\Client\Boxnow\LocationType[] $location_type Return only locations with given types. If not present, filter is not applied. (optional)
     * @param  string $name Return only locations with matching name (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function apiV1DestinationsGetAsyncWithHttpInfo($latlng = null, $radius = '25000', $required_size = null, $location_type = null, $name = null)
    {
        $returnType = '\Swagger\Client\Boxnow\InlineResponse2001';
        $request = $this->apiV1DestinationsGetRequest($latlng, $radius, $required_size, $location_type, $name);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    $responseBody = $response->getBody();
                    if ($returnType === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = $responseBody->getContents();
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
                        $response->getBody()
                    );
                }
            );
    }

    /**
     * Create request for operation 'apiV1DestinationsGet'
     *
     * @param  string $latlng If applied only locations in the specified radius from this gps coord are returned (optional)
     * @param  float $radius Radius in meters to return only locations within selected radius from given GPS location. Ignored if &#x60;latlng&#x60; is not present. (optional, default to 25000)
     * @param  float $required_size Return only locations that can accept a package of your &#x60;requiredSize&#x60; (optional)
     * @param  \Swagger\Client\Boxnow\LocationType[] $location_type Return only locations with given types. If not present, filter is not applied. (optional)
     * @param  string $name Return only locations with matching name (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function apiV1DestinationsGetRequest($latlng = null, $radius = '25000', $required_size = null, $location_type = null, $name = null)
    {

        $resourcePath = '/api/v1/destinations';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

        // query params
        if ($latlng !== null) {
            $queryParams['latlng'] = ObjectSerializer::toQueryValue($latlng, null);
        }
        // query params
        if ($radius !== null) {
            $queryParams['radius'] = ObjectSerializer::toQueryValue($radius, null);
        }
        // query params
        if ($required_size !== null) {
            $queryParams['requiredSize'] = ObjectSerializer::toQueryValue($required_size, null);
        }
        // query params
        if (is_array($location_type)) {
            $location_type = ObjectSerializer::serializeCollection($location_type, 'multi', true);
        }
        if ($location_type !== null) {
            $queryParams['locationType'] = ObjectSerializer::toQueryValue($location_type, null);
        }
        // query params
        if ($name !== null) {
            $queryParams['name'] = ObjectSerializer::toQueryValue($name, null);
        }


        // body params
        $_tempBody = null;

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json'],
                []
            );
        }

        // for model (json/xml)
        if (isset($_tempBody)) {
            // $_tempBody is the method argument, if present
            $httpBody = $_tempBody;
            // \stdClass has no __toString(), so we should encode it manually
            if ($httpBody instanceof \stdClass && $headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode($httpBody);
            }
        } elseif (count($formParams) > 0) {
            if ($multipart) {
                $multipartContents = [];
                foreach ($formParams as $formParamName => $formParamValue) {
                    $multipartContents[] = [
                        'name' => $formParamName,
                        'contents' => $formParamValue
                    ];
                }
                // for HTTP post (form)
                $httpBody = new MultipartStream($multipartContents);

            } elseif ($headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode($formParams);

            } else {
                // for HTTP post (form)
                $httpBody = \GuzzleHttp\Psr7\build_query($formParams);
            }
        }

            // // this endpoint requires Bearer token
            if ($this->config->getAccessToken() !== null) {
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

        $query = \GuzzleHttp\Psr7\build_query($queryParams);
        return new Request(
            'GET',
            $this->config->getHost() . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Operation apiV1OriginsGet
     *
     * List available origins to pickup the order from
     *
     * @param  string $latlng If applied only locations in the specified radius from this gps coord are returned (optional)
     * @param  float $radius Radius in meters to return only locations within selected radius from given GPS location. Ignored if &#x60;latlng&#x60; is not present. (optional, default to 25000)
     * @param  float $required_size Return only locations that can accept a package of your &#x60;requiredSize&#x60; (optional)
     * @param  \Swagger\Client\Boxnow\LocationType[] $location_type Return only locations with given types. If not present, filter is not applied. (optional)
     * @param  string $name Return only locations with matching name (optional)
     *
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Swagger\Client\Boxnow\InlineResponse2002
     */
    public function apiV1OriginsGet($latlng = null, $radius = '25000', $required_size = null, $location_type = null, $name = null)
    {
        list($response) = $this->apiV1OriginsGetWithHttpInfo($latlng, $radius, $required_size, $location_type, $name);
        return $response;
    }

    /**
     * Operation apiV1OriginsGetWithHttpInfo
     *
     * List available origins to pickup the order from
     *
     * @param  string $latlng If applied only locations in the specified radius from this gps coord are returned (optional)
     * @param  float $radius Radius in meters to return only locations within selected radius from given GPS location. Ignored if &#x60;latlng&#x60; is not present. (optional, default to 25000)
     * @param  float $required_size Return only locations that can accept a package of your &#x60;requiredSize&#x60; (optional)
     * @param  \Swagger\Client\Boxnow\LocationType[] $location_type Return only locations with given types. If not present, filter is not applied. (optional)
     * @param  string $name Return only locations with matching name (optional)
     *
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Swagger\Client\Boxnow\InlineResponse2002, HTTP status code, HTTP response headers (array of strings)
     */
    public function apiV1OriginsGetWithHttpInfo($latlng = null, $radius = '25000', $required_size = null, $location_type = null, $name = null)
    {
        $returnType = '\Swagger\Client\Boxnow\InlineResponse2002';
        $request = $this->apiV1OriginsGetRequest($latlng, $radius, $required_size, $location_type, $name);

        try {
            $options = $this->createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    $e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null,
                    $e->getResponse() ? $e->getResponse()->getBody()->getContents() : null
                );
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(
                    sprintf(
                        '[%d] Error connecting to the API (%s)',
                        $statusCode,
                        $request->getUri()
                    ),
                    $statusCode,
                    $response->getHeaders(),
                    $response->getBody()
                );
            }

            $responseBody = $response->getBody();
            if ($returnType === '\SplFileObject') {
                $content = $responseBody; //stream goes to serializer
            } else {
                $content = $responseBody->getContents();
                if (!in_array($returnType, ['string','integer','bool'])) {
                    $content = json_decode($content);
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
                        '\Swagger\Client\Boxnow\InlineResponse2002',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 400:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Swagger\Client\Boxnow\InlineResponse400',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 403:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Swagger\Client\Boxnow\InlineResponse403',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation apiV1OriginsGetAsync
     *
     * List available origins to pickup the order from
     *
     * @param  string $latlng If applied only locations in the specified radius from this gps coord are returned (optional)
     * @param  float $radius Radius in meters to return only locations within selected radius from given GPS location. Ignored if &#x60;latlng&#x60; is not present. (optional, default to 25000)
     * @param  float $required_size Return only locations that can accept a package of your &#x60;requiredSize&#x60; (optional)
     * @param  \Swagger\Client\Boxnow\LocationType[] $location_type Return only locations with given types. If not present, filter is not applied. (optional)
     * @param  string $name Return only locations with matching name (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function apiV1OriginsGetAsync($latlng = null, $radius = '25000', $required_size = null, $location_type = null, $name = null)
    {
        return $this->apiV1OriginsGetAsyncWithHttpInfo($latlng, $radius, $required_size, $location_type, $name)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation apiV1OriginsGetAsyncWithHttpInfo
     *
     * List available origins to pickup the order from
     *
     * @param  string $latlng If applied only locations in the specified radius from this gps coord are returned (optional)
     * @param  float $radius Radius in meters to return only locations within selected radius from given GPS location. Ignored if &#x60;latlng&#x60; is not present. (optional, default to 25000)
     * @param  float $required_size Return only locations that can accept a package of your &#x60;requiredSize&#x60; (optional)
     * @param  \Swagger\Client\Boxnow\LocationType[] $location_type Return only locations with given types. If not present, filter is not applied. (optional)
     * @param  string $name Return only locations with matching name (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function apiV1OriginsGetAsyncWithHttpInfo($latlng = null, $radius = '25000', $required_size = null, $location_type = null, $name = null)
    {
        $returnType = '\Swagger\Client\Boxnow\InlineResponse2002';
        $request = $this->apiV1OriginsGetRequest($latlng, $radius, $required_size, $location_type, $name);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    $responseBody = $response->getBody();
                    if ($returnType === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = $responseBody->getContents();
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
                        $response->getBody()
                    );
                }
            );
    }

    /**
     * Create request for operation 'apiV1OriginsGet'
     *
     * @param  string $latlng If applied only locations in the specified radius from this gps coord are returned (optional)
     * @param  float $radius Radius in meters to return only locations within selected radius from given GPS location. Ignored if &#x60;latlng&#x60; is not present. (optional, default to 25000)
     * @param  float $required_size Return only locations that can accept a package of your &#x60;requiredSize&#x60; (optional)
     * @param  \Swagger\Client\Boxnow\LocationType[] $location_type Return only locations with given types. If not present, filter is not applied. (optional)
     * @param  string $name Return only locations with matching name (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function apiV1OriginsGetRequest($latlng = null, $radius = '25000', $required_size = null, $location_type = null, $name = null)
    {

        $resourcePath = '/api/v1/origins';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

        // query params
        if ($latlng !== null) {
            $queryParams['latlng'] = ObjectSerializer::toQueryValue($latlng, null);
        }
        // query params
        if ($radius !== null) {
            $queryParams['radius'] = ObjectSerializer::toQueryValue($radius, null);
        }
        // query params
        if ($required_size !== null) {
            $queryParams['requiredSize'] = ObjectSerializer::toQueryValue($required_size, null);
        }
        // query params
        if (is_array($location_type)) {
            $location_type = ObjectSerializer::serializeCollection($location_type, 'multi', true);
        }
        if ($location_type !== null) {
            $queryParams['locationType'] = ObjectSerializer::toQueryValue($location_type, null);
        }
        // query params
        if ($name !== null) {
            $queryParams['name'] = ObjectSerializer::toQueryValue($name, null);
        }


        // body params
        $_tempBody = null;

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json'],
                []
            );
        }

        // for model (json/xml)
        if (isset($_tempBody)) {
            // $_tempBody is the method argument, if present
            $httpBody = $_tempBody;
            // \stdClass has no __toString(), so we should encode it manually
            if ($httpBody instanceof \stdClass && $headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode($httpBody);
            }
        } elseif (count($formParams) > 0) {
            if ($multipart) {
                $multipartContents = [];
                foreach ($formParams as $formParamName => $formParamValue) {
                    $multipartContents[] = [
                        'name' => $formParamName,
                        'contents' => $formParamValue
                    ];
                }
                // for HTTP post (form)
                $httpBody = new MultipartStream($multipartContents);

            } elseif ($headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode($formParams);

            } else {
                // for HTTP post (form)
                $httpBody = \GuzzleHttp\Psr7\build_query($formParams);
            }
        }

            // // this endpoint requires Bearer token
            if ($this->config->getAccessToken() !== null) {
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

        $query = \GuzzleHttp\Psr7\build_query($queryParams);
        return new Request(
            'GET',
            $this->config->getHost() . $resourcePath . ($query ? "?{$query}" : ''),
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
