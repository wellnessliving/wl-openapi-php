<?php
namespace WlSdk\Wl\Appointment\Book\Service;

use WlSdk\WlSdkClient;

/**
 * Checks whether a service can be booked by the given client at the given date, throwing an exception if booking is
 * restricted.
 */
class ServiceCheckApi
{
    /**
     * Custom rules for mapping API error status codes to HTTP status codes.

By default the API always returns HTTP 200, even when the response contains an error. Setting this header enables error-to-HTTP-code conversion: when the response status matches a rule, the corresponding 4xx code is returned instead of 200.

Format: comma-separated entries of `{4xx_code} {pattern}[, ...]`. Pattern syntax:
- `status` - exact status match.
- `-suffix` - status ends with `-suffix`.
- `-part-` - status contains `-part-`.
- `prefix-` - status starts with `prefix-`.
- `-` - catch-all for any non-ok status that did not match any other rule.

The special entry `default` (no HTTP code prefix) expands to the built-in ruleset at that position: `400 -`, `403 -access access access-`, `404 -nx`. Rules listed before `default` override the built-in ones; rules after are fallbacks. Example: `401 access,403 access-,404 -nx,default`.

Only standard 4xx codes are accepted.
     *
     * @var string|null
     */
    public ?string $X-Error-Rules = null;

    /**
     * Date of booking in MySQL format.
     *
     * @var string|null
     */
    public ?string $dt_date = null;

    /**
     * The business key.
     *
     * @var string|null
     */
    public ?string $k_business = null;

    /**
     * The location key.
     *
     * @var string|null
     */
    public ?string $k_location = null;

    /**
     * The service key.
     *
     * @var string|null
     */
    public ?string $k_service = null;

    /**
     * The user key.
     *
     * @var string|null
     */
    public ?string $uid = null;

    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Checks whether a service can be booked by the given client at the given date, throwing an exception if booking is restricted.
     *
     * Validates the client's age against the service's age restrictions and checks the booking date
     *  against the service's booking window. Returns without data on success; throws exception with a descriptive
     * message when booking is not allowed.
     *
     * @return array Parsed JSON response data.
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function get(): array
    {
        return $this->client->request('/Wl/Appointment/Book/Service/ServiceCheck.json', $this->params(), 'GET');
    }

    private function params(): array
    {
        return array_filter(
            [
            'X-Error-Rules' => $this->X-Error-Rules,
            'dt_date' => $this->dt_date,
            'k_business' => $this->k_business,
            'k_location' => $this->k_location,
            'k_service' => $this->k_service,
            'uid' => $this->uid,
            ],
            static fn($v) => $v !== null
        );
    }
}
