# Boxnow PHP lib
This PHP package is automatically generated by the [Swagger Codegen](https://github.com/swagger-api/swagger-codegen) project:

- API version: 1.36
- Build package: io.swagger.codegen.v3.generators.php.PhpClientCodegen

## Requirements

PHP 5.5 and later

## Installation & Usage
### Composer

To install the bindings via [Composer](http://getcomposer.org/), add the following to `composer.json`:

```
{
  "repositories": [
    {
      "type": "git",
      "url": "https://github.com/m-michalis/boxnow-api.git"
    }
  ],
  "require": {
    "m-michalis/boxnow-api": "*@dev"
  }
}
```

Then run `composer install`

### Manual Installation

Download the files and include `autoload.php`:

```php
    require_once('/path/to/SwaggerClient-php/vendor/autoload.php');
```

## Tests

To run the unit tests:

```
composer install
./vendor/bin/phpunit
```

## Getting Started

Please follow the [installation procedure](#installation--usage) and then run the following:

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\BoxnowAPI\AuthenticationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Swagger\Client\Boxnow\V1AuthsessionsBody(); // \Swagger\Client\Boxnow\V1AuthsessionsBody | 

try {
    $result = $apiInstance->apiV1AuthSessionsPost($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AuthenticationApi->apiV1AuthSessionsPost: ', $e->getMessage(), PHP_EOL;
}
?>
```