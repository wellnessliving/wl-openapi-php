<?php
namespace WlSdk\Wl\Appointment\Recent;

use WlSdk\WlSdkClient;

/**
 * Gets list of client's last booked services.
 */
class RecentServiceApi
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
     * Count of last booked services to return. Default value is 5.
     *
     * @var int|null
     */
    public ?int $i_visit = null;

    /**
     * Type of service to return. One of [ServiceSid](#/components/schemas/Wl.Service.ServiceSid) constants.
     *
     * @var int|null
     */
    public ?int $id_service = null;

    /**
     * The key of the business.
     *
     * @var string|null
     */
    public ?string $k_business = null;

    /**
     * The key of the user.
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
     * Gets list of client's last booked services.
     *
     * Returns the most recently booked unique services for the given client at the given business,
     *  filtered by service type (appointment or bookable asset). Duplicate services are collapsed so
     *  only the most recent booking per service is included, up to `MAX_SERVICE_COUNT`.
     *
     * @return array Parsed JSON response data.
     *   - string[] a_service_last: List of last booked services.
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function get(): array
    {
        return $this->client->request('/Wl/Appointment/Recent/RecentService.json', $this->params(), 'GET');
    }

    private function params(): array
    {
        return array_filter(
            [
            'X-Error-Rules' => $this->X-Error-Rules,
            'i_visit' => $this->i_visit,
            'id_service' => $this->id_service,
            'k_business' => $this->k_business,
            'uid' => $this->uid,
            ],
            static fn($v) => $v !== null
        );
    }
}
