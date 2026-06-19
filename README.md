# WellnessLiving PHP SDK

Auto-generated PHP SDK for the WellnessLiving API, built from the
[OpenAPI specification](https://github.com/wellnessliving/openapi).

Each API endpoint is a dedicated PHP class with typed public properties for request parameters
and one method per HTTP verb (`get()`, `post()`, etc.).

## Channels

| Channel | Spec | Branch | Description |
|---------|------|--------|-------------|
| `production` | `production/openapi.yaml` | `main` | Dedicated production API channel. |
| `stable` | `stable/openapi.yaml` | `channel/stable` | Follows the live WellnessLiving platform. |
| `dev` | `dev/openapi.yaml` | `channel/dev` | Latest features; may include breaking changes. |

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

`dev/src/` and `production/src/` follow the same layout from their respective spec channels.

## Requirements

- PHP 7.4 or later
- `ext-curl`
- `ext-json`

## Installation

Each channel is a separate Composer package served from a dedicated branch in this repository.
Add the VCS source once per project, then require the channel you need.

```bash
# Add source once
composer config repositories.wl-sdk vcs https://github.com/wellnessliving/wl-openapi-php
```

| Channel | Package | Branch | When to use |
|---------|---------|--------|-------------|
| production | `wellnessliving/wl-openapi-php-production` | `main` | Production API - default for live apps |
| stable | `wellnessliving/wl-openapi-php` | `channel/stable` | Tracks the live platform |
| dev | `wellnessliving/wl-openapi-php-dev` | `channel/dev` | Feature development - latest endpoints |

```bash
# Development - use dev channel
composer require wellnessliving/wl-openapi-php-dev

# Stabilizing / QA - switch to stable
composer remove wellnessliving/wl-openapi-php-dev
composer require wellnessliving/wl-openapi-php

# Deploy to production environment - switch to production channel
composer remove wellnessliving/wl-openapi-php
composer require wellnessliving/wl-openapi-php-production
```

The namespace `WlSdk\` is identical across all channels - switching channels requires
no code changes, only a `composer` command.

### From source (generator)

```bash
git clone https://github.com/wellnessliving/wl-openapi-php.git
cd wl-openapi-php
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

### Pinning a specific version

Each channel release tags the spec version (e.g. `stable-1.1.20260619090040`).
To pin:

```bash
composer require wellnessliving/wl-openapi-php:"1.1.20260619090040"
```

## Regenerating the SDK locally

```bash
composer install
composer run generate               # regenerate stable, dev, and production
composer run generate:stable        # regenerate stable only
composer run generate:dev           # regenerate dev only
composer run generate:production    # regenerate production only
```

## Automation

GitHub Actions checks for upstream spec changes daily at 08:00 UTC. When a channel's
spec version changes, it commits the updated files and creates a separate GitHub Release
for that channel:

| Channel | Tag format | Release type |
|---------|-----------|--------------|
| stable | `stable-VERSION` | Latest release |
| dev | `dev-VERSION` | Pre-release |
| production | `production-VERSION` | Release |

Each release contains only the zip for its channel (`wl-openapi-php-{channel}.zip`).
Channels that did not change in a given run do not produce a new release.

## Automation setup

To trigger automatic rebuilds when the OpenAPI spec changes, see
[docs/notify-setup.md](docs/notify-setup.md).

## Resources

- [API documentation](https://developers.wellnessliving.com)
- [OpenAPI specification repository](https://github.com/wellnessliving/openapi)
- [JavaScript SDK](https://github.com/wellnessliving/wl-sdk-js-v2)
- [WellnessLiving](https://www.wellnessliving.com)
