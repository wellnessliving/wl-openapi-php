# WellnessLiving PHP SDK

Auto-generated PHP SDK for the WellnessLiving API, built from the
[OpenAPI specification](https://github.com/wellnessliving/openapi).

Each API endpoint is a dedicated PHP class with typed public properties for request parameters
and one method per HTTP verb (`get()`, `post()`, etc.).

## Structure

```
stable/src/
    WlSdkClient.php           - HTTP client (pass to every Api class)
    WlSdkException.php        - exception thrown on non-2xx response
    WlSdkInfo.php             - build metadata (channel, spec version, endpoint count)
    Core/Request/ExampleApi.php
    Wl/Appointment/BookApi.php
    ...                       - one class per API endpoint
```

The `dev/src/` directory has the same structure built from the dev-channel spec.

## Requirements

- PHP 7.4 or later
- `ext-curl`
- `ext-json`

## Installation

```bash
composer require wellnessliving/wl-sdk-php
```

Or clone and install:

```bash
git clone https://github.com/wellnessliving/wl-sdk-php-v2.git
cd wl-sdk-php-v2
composer install
```

## Usage

```php
use WlSdk\WlSdkClient;
use WlSdk\Core\Request\ExampleApi;

$client = new WlSdkClient(['token' => 'YOUR_JWT_TOKEN']);

$api = new ExampleApi($client);
$api->i_argument = 1;
$result = $api->get();

echo $result['i_result']; // 2
```

### Constructor options

| Option | Type | Default | Description |
|--------|------|---------|-------------|
| `token` | `string\|null` | `null` | JWT Bearer token for authentication. |
| `base_url` | `string` | `https://staging.wellnessliving.com` | API server base URL. Use `https://demo.wellnessliving.com` for the Australia data center. |
| `timeout` | `int` | `30` | Request timeout in seconds. |

### Error handling

On a non-2xx HTTP response a `WlSdkException` is thrown. It exposes:

- `->getCode()` - HTTP status code.
- `->data` - parsed JSON response body (`array|null`).

```php
use WlSdk\WlSdkException;
use WlSdk\Wl\User\Login\EmailApi;

$api = new EmailApi($client);
$api->text_email = 'user@example.com';
$api->text_password = 'secret';

try {
    $result = $api->post();
} catch (WlSdkException $e) {
    echo 'HTTP ' . $e->getCode() . ': ' . $e->getMessage();
    var_dump($e->data);
}
```

### Using the dev channel

Switch the Composer autoloader to point at `dev/src/`:

```json
"autoload": {
    "psr-4": {
        "WlSdk\\": "dev/src/"
    }
}
```

## Regenerating the SDK locally

```bash
composer install
composer run generate           # regenerate both stable and dev
composer run generate:stable    # regenerate stable only
composer run generate:dev       # regenerate dev only
```

## Automation

GitHub Actions checks for upstream spec changes daily at 08:00 UTC and commits
updated SDK files automatically when a new spec version is detected.

## Automation setup

To trigger automatic rebuilds when the OpenAPI spec changes, see
[docs/notify-setup.md](docs/notify-setup.md).

## Resources

- [API documentation](https://developers.wellnessliving.com)
- [OpenAPI specification repository](https://github.com/wellnessliving/openapi)
- [JavaScript SDK](https://github.com/wellnessliving/wl-sdk-js-v2)
- [WellnessLiving](https://www.wellnessliving.com)
